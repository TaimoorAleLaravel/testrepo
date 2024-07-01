<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use App\Models\ClientProfile;
use App\Models\Court;
use App\Models\State;
use App\Models\ClientAttorny;
use App\Models\User;

class ClientController extends Controller
{


    public function register(Request $request)
    {


        if (!$request->isMethod('POST')) {
            return view('client.register');
        }


        if ($request->isMethod('POST')) {

            $validatedData = $request->validate([
                'client_email' => 'required|email:filter|unique:client_login,client_email', // Corrected field name
                'confirm_email' => 'required|same:client_email', // Corrected field name
                'client_password' => 'required|min:6',
                'confirm_password' => 'required|same:client_password', // Corrected field name
                'progress' => 'nullable|numeric|between:0,99999999999999999999.99',
                'left_at' => 'nullable|string|max:500',

            ], [], [
                'client_email' =>  __('inputsname.email'),
                'confirm_email' =>  __('inputsname.email'),
                'client_password' =>  __('inputsname.password'),
                'confirm_password' =>  __('inputsname.password'),
            ]);

            $client = Client::create([
                'client_email' => $validatedData['client_email'],
                'client_password' => bcrypt($validatedData['client_password']), // Encrypt the password
                'progress' => $validatedData['progress'] ?? null,
                'status' => "offline",
                'left_at' => $validatedData['left_at'] ?? null
            ]);
            User::create([
                'email' => $validatedData['client_email'],
                'password' => bcrypt($validatedData['client_password']), // Encrypt the password
                'role' => 'client',
                
            ]);

            if ($client) {

                $clientProfile = ClientProfile::create([
                    'client_id' => $client->client_id,

                ]);

                // Check if the client profile was created successfully
                if ($clientProfile) {
                    session()->put('client_id', $client->client_id);
                    return redirect()->route('client.court_district', ['locale' => app()->getlocale()]);
                } else {
                    // Delete the client record if the client profile creation fails
                    $client->delete();
                    return back()->with('error', 'Failed to create client profile');
                }
            } else {
                // Return an error response if client creation fails
                return back()->with('error', 'Failed to register client');
            }
        }
    }
    public function Court_District(Request $request)
    {
        if (!$request->isMethod('POST')) {
            $client_id = session()->get('client_id');
            $savedid = null;
            if (!is_null($client_id)) {
                $savedid =  $savedid = ClientProfile::where('client_id', $client_id)->pluck('district_id')->first();
                $courts = Court::with('state')->get(['id', 'name', 'state_id'])->map(function ($court) {
                    return [
                        'state' => $court['state']['name'],
                        'name' => $court['name'],
                        'id' => $court['id'],
                        'state_id' => $court['state_id'],
                    ];
                })->toArray();
                return view('client.court_district', ['courts' => $courts, 'district_id' => $savedid]);
            } else {
                return redirect()->route('home', ['locale' => app()->getlocale()]);
            }
        }
        // If POST request, validate the input
        $request->validate([
            'district_id' => 'required|integer',
        ], [], [
            'district_id' => __('inputsname.court_district'),
        ]);

        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            ClientProfile::where('client_id', $client_id)
                ->update(['district_id' => $request->district_id]);
            return redirect()->route('client.household_size', ['locale' => app()->getlocale()]);
        }
    }
    public function Household_size(Request $request)
    {
        $client_id = session()->get('client_id');
        if (!$request->isMethod('POST')) {
            $savedData =  ClientProfile::where('client_id', $client_id)->pluck('household')->first();

            return view("client.household", ['household' => $savedData]);
        }

        // If POST request, validate the input
        $validatedData = $request->validate([
            'household' => 'required|integer|min:1|max:15',
        ], [], [
            'household' => __('inputsname.household'),
        ]);

        // Assuming validation passed if code reaches here



        // Update the ClientProfile with the validated household size
        ClientProfile::where('client_id', $client_id)->update(['household' => $validatedData['household']]);

        // Redirect to the next step or route
        return redirect()->route('client.account_type', ['locale' => app()->getlocale()]);
    }
    public function account_type(Request $request)
    {
        $client_id = session()->get('client_id');
        if (!$request->isMethod('POST')) {
            $savedData =  ClientProfile::where('client_id', $client_id)->pluck('account_type')->first();
            return view("client.account_type", ['account_type' => $savedData]);
        }

        $request->validate(['account_type' => 'required'], [], [
            'account_type' => __('inputsname.account_type'),
        ]);
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');

            // Update the ClientProfile with the validated household size
            $accounttype =   ClientProfile::where('client_id', $client_id)
                ->update(['account_type' => $request['account_type']]);
            if ($accounttype) {
                $states = State::get()->map(function ($state) {
                    return [
                        'id' => $state['id'],
                        'name' => $state['name'],
                        'abbreviation' => $state['abbreviation'],
                    ];
                });

                return redirect()->route('client.client_information', ['locale' => app()->getlocale()]);
            }
        }
    }
    public function client_information(Request $request)
    {
        $client_id = session()->get('client_id');
        $account_type =  ClientProfile::where('client_id', $client_id)->pluck('account_type')->first();

        // dd($request->all());
        if (!$request->isMethod('POST')) {
            $data = ClientProfile::where('client_id', $client_id)
                ->select('title', 'fname', 'mname', 'lname', 'name_suffix', 'dob', 'ss_num', 'st_address', 'city', 'state', 'zipcode', 'phone')
                ->first()->toArray();


            $states = State::get()->map(function ($state) {
                return [
                    'id' => $state['id'],
                    'name' => $state['name'],
                    'abbreviation' => $state['abbreviation'],
                ];
            });

            return view('client.client_information', ['states' => $states, 'account_type' => $account_type, 'data' => $data]);
        }


        $validatedData = $request->validate([
            'title' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'name_suffix' => 'required',
            'dob' => 'required',
            'ss_num' => 'required',
            'st_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
        ], [], [
            'title' => __('inputsname.title'),
            'fname' => __('inputsname.fname'),
            'lname' => __('inputsname.lname'),
            'name_suffix' => __('inputsname.name_suffix'),
            'dob' => __('inputsname.dob'),
            'ss_num' => __('inputsname.ss_num'),
            'st_address' => __('inputsname.st_address'),
            'city' => __('inputsname.city'),
            'state' => __('inputsname.state'),
            'zipcode' => __('inputsname.zipCode'),
            'phone' => __('inputsname.phone'),
        ]);


        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            ClientProfile::where('client_id', $client_id)
                ->update([
                    'title' => $request['title'],
                    'fname' => $request['fname'],
                    'mname' => $request['mname'],
                    'lname' => $request['lname'],
                    'name_suffix' => $request['name_suffix'],
                    'dob' => $request['dob'],
                    'ss_num' => $request['ss_num'],
                    'st_address' => $request['st_address'],
                    'city' => $request['city'],
                    'state' => $request['state'],
                    'zipcode' => $request['zipcode'],
                    'phone' => $request['phone'],
                    'hearing' => $request['hearing'],
                ]);

            if ($account_type == 2) {
                return redirect()->route('client.client_information2', ['locale' => app()->getlocale()]);
            } else {
                return redirect()->route('client.attorney_information', ['locale' => app()->getlocale()]);
            }
        }



        // //         // Find the client profile
        //         $clientProfile = ClientProfile::where('client_id', session()->get('client_id'))->first();
        //         // dd($clientProfile->toArray());
        //         if ($clientProfile) {
        // //             // Update the client profile with validated data
        //             $clientProfile->update([
        //                 'fname' => $validatedData['fname'],
        //                 'mname' => $validatedData['mname'],
        //                 'lname' => $validatedData['lname'],
        //                 'dob' => $validatedData['dob'],
        //                 'ss_num' => $validatedData['ss_num'],
        //                 'st_address' => $validatedData['st_address'],
        //                 'city' => $validatedData['city'],
        //                 'state' => $validatedData['state'],
        //                 'zipcode' => $validatedData['zipcode'],
        //                 'phone' => $validatedData['phone'],
        //             ]);
        //             return redirect()->route('client.attorney_information', ['locale' => app()->getlocale()]);
        //         }



    }

    public function client_information2(Request $request)
    {
        $client_id = session()->get('client_id');
        if (!$request->isMethod('POST')) {
            $data = ClientProfile::where('client_id', $client_id)
                ->select('title2', 'fname2', 'mname2', 'lname2', 'name_suffix2', 'dob2', 'ss_num2', 'st_address2', 'city2', 'state2', 'zipcode2', 'phone2')
                ->first()->toArray();
            $states = State::get()->map(function ($state) {
                return [
                    'id' => $state['id'],
                    'name' => $state['name'],
                    'abbreviation' => $state['abbreviation'],
                ];
            });
            $account_type =  ClientProfile::where('client_id', $client_id)->pluck('account_type')->first();
            return view('client.client_information2', ['states' => $states, 'data' => $data, 'account_type' => $account_type]);
        }

        $validatedData = $request->validate([
            'title2' => 'required',
            'fname2' => 'required',
            'lname2' => 'required',
            'name_suffix2' => 'required',
            'dob2' => 'required',
            'ss_num2' => 'required',
            'st_address2' => 'required',
            'city2' => 'required',
            'state2' => 'required',
            'zipcode2' => 'required',
            'phone2' => 'required',
        ], [], [
            'title2' => __('inputsname.title'),
            'fname2' => __('inputsname.fname'),
            'lname2' => __('inputsname.lname'),
            'name_suffix2' => __('inputsname.name_suffix'),
            'dob2' => __('inputsname.dob'),
            'ss_num2' => __('inputsname.ss_num'),
            'st_address2' => __('inputsname.st_address'),
            'city2' => __('inputsname.city'),
            'state2' => __('inputsname.state'),
            'zipcode2' => __('inputsname.zipCode'),
            'phone2' => __('inputsname.phone'),
        ]);

        ClientProfile::where('client_id', $client_id)
            ->update([
                'title2' => $request['title2'],
                'fname2' => $request['fname2'],
                'mname2' => $request['mname2'],
                'lname2' => $request['lname2'],
                'name_suffix2' => $request['name_suffix2'],
                'dob2' => $request['dob2'],
                'ss_num2' => $request['ss_num2'],
                'st_address2' => $request['st_address2'],
                'city2' => $request['city2'],
                'state2' => $request['state2'],
                'zipcode2' => $request['zipcode2'],
                'phone2' => $request['phone2'],
                'hearing2' => $request['hearing2'],
            ]);
        return redirect()->route('client.attorney_information', ['locale' => app()->getlocale()]);
    }

    public function have_attorney(Request $request)
    {
        $client_id = session()->get('client_id');
        $client_attorney_id = ClientProfile::where('client_id', $client_id)->pluck('attorney_id')->first(); //attorney id

        if (!request()->isMethod('POST')) {
            $data = [
                'att_firm_name' => null,
                'att_title' => null,
                'att_fname' => null,
                'password' => null,
                'att_mname' => null,
                'att_lname' => null,
                'att_name_suffix' => null,
                'att_email' => null,
                'att_phone' => null,
                'att_fax' => null,
                'dated' => null
            ];
            if (!is_null($client_attorney_id)) {
                $data = ClientAttorny::where('attorney_id', $client_attorney_id)->first();
            }
            return view('client.have_attorney', ['data' => $data]);
        }

        $validatedData = $request->validate([
            'att_firm_name' => 'required|string|max:255',
            'att_title' => 'nullable',
            'att_fname' => 'required|string|max:255',
            'att_mname' => 'nullable',
            'att_lname' => 'required|string|max:255',
            'att_name_suffix' => 'nullable',
            'att_email' => 'required|email|max:255',
            'att_phone' => 'required|string|max:255',
            'att_fax' => 'nullable',
        ],[],[
            'att_firm_name' => __('inputsname.att_firm_name'),
            'att_title' => __('inputsname.att_title'),
            'att_fname' => __('inputsname.att_fname'),
            'att_mname' => __('inputsname.att_mname'),
            'att_lname' => __('inputsname.att_lname'),
            'att_name_suffix' => __('inputsname.att_name_suffix'),
            'att_email' => __('inputsname.att_email'),
            'att_phone' => __('inputsname.att_phone'),
            'att_fax' => __('inputsname.att_fax'),
        ]);

        if (is_null($client_attorney_id)) {
            $clientAttorney = ClientAttorny::create($validatedData);
            ClientProfile::where('client_id', $client_id)->update(['attorney_id' => $clientAttorney->attorney_id]);
        } else {
            $clientAttorney = ClientAttorny::where('attorney_id', $client_attorney_id)->update($validatedData);
        }

        return redirect()->route('client.price_package', ['locale' => app()->getlocale()]);
    }
    public function atorney_information(Request $request)
    {
        $client_id = session()->get('client_id');
        if (!$request->isMethod('POST')) {
            $data =  ClientProfile::where('client_id', $client_id)->select('account_type', 'attorney')->first()->toArray();
            return view('client.atorney_information', ['data' => $data]);
        }



        $validatedData = $request->validate([
            'attorney' => 'required'
        ],[],[
            'attorney' => __('inputsname.attorney'),
        ]);

        $clientProfile = ClientProfile::where('client_id', session()->get('client_id'))->first();
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            ClientProfile::where('client_id', $client_id)
                ->update(['attorney' => $request->attorney]);

            if ($request['attorney'] == "a") {
                return redirect()->route('client.have_attorney', ['locale' => app()->getlocale()]);
            } else {
                return redirect()->route('client.price_package', ['locale' => app()->getlocale()]);
            }
        }
    }

    public function price_package(Request $request)
    {
        $client_id = session()->get('client_id');
        $attorny =  ClientProfile::where('client_id', $client_id)->pluck('attorney')->first();

        if (!$request->isMethod('POST')) {
            $client =  ClientProfile::where('client_id', $client_id)->first();

            return view('client.price_package', ['attorny' => $attorny, 'pkg' => $client->pkg]);
        }


        // dd($request->toArray());
        $package = $request->input('package');
        $amount = 0;

        switch ($package) {
            case 1:
                $amount = 9.99;
                break;
            case 2:
                $amount = 29.99;
                break;
            case 3:
                $amount = 39.99;
                break;
            default:
                return back()->with('error', 'Invalid package selected.');
        }


        $clientProfile = ClientProfile::where('client_id', session()->get('client_id'))->first();
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            ClientProfile::where('client_id', $client_id)
                ->update([
                    'pkg' => $request->package,
                    'total_payment' => $amount,
                ]);
            return redirect()->route('client.optional_services', ['locale' => app()->getlocale()]);
            // return redirect()->route('client.household_size', ['locale' => app()->getlocale()]);
        }
    }

    public function optional_services(Request $request)
    {
        
        $client_id = session()->get('client_id');
        if (!$request->isMethod('POST')) {
            $client = ClientProfile::where('client_id', session()->get('client_id'))->first();

            $opt_pdf = $client->opt_pdf;
            $english_lang = $client->english_lang;
            $spanish_lang = $client->spanish_lang;
            $opt_mailed = $client->opt_mailed;
            $opt_phone = $client->opt_phone;
            $opt_attorney_fax = $client->opt_attorney_fax;
            $opt_email = $client->opt_email;

                
            return view('client.optional_services', ['opt_pdf' => $opt_pdf, 'english_lang' => $english_lang, 'spanish_lang' => $spanish_lang,  'opt_mailed' => $opt_mailed, 'opt_phone' => $opt_phone, 'opt_attorny_fax' => $opt_attorney_fax, 'opt_email' => $opt_email]);
        }

        if (!is_null(session()->get('client_id'))) {

            $clientP = ClientProfile::where('client_id', $client_id)
                ->update([
                    'opt_pdf' => $request['opt_pdf'] ? $request['opt_pdf']  : null,
                    'english_lang' => $request['english_lang'] ? $request['english_lang']  : null,
                    'spanish_lang' => $request['spanish_lang']  ? $request['spanish_lang']  : null,
                    'opt_mailed' => $request['opt_mailed']  ? $request['opt_mailed']  : null,
                    "opt_phone" => $request['opt_phone']  ? $request['opt_phone']  : null,
                    "opt_attorney_fax" => $request['opt_attorny_fax'] ? $request['opt_attorny_fax']  : null,
                    "opt_email" => $request['opt_email'] ? $request['opt_email']  : null,
                ]);

                
            return redirect()->route('client.payment_method', ['locale' => app()->getlocale()]);
        }
    }
    public function payment_method(Request $request)
    {
        if (!$request->isMethod('POST')) {
            return view('client.payment_method');
        }

        $payment_method = $request->input('payment_method');

        return redirect()->route('client.payment_verify', ['locale' => app()->getLocale()]);

        if ($payment_method === 'credit_card') {
            return redirect()->route('stripe.checkout');
        } elseif ($payment_method === 'paypal_account') {
            return redirect()->route('paypal.checkout');
        } else {
            return redirect()->back()->with('error', 'Invalid payment method selected.');
        }
    }

    public function payment_verify(Request $request)
    {

        if (!$request->isMethod('POST')) {
            $client = ClientProfile::where('client_id', session()->get('client_id'))->first();
            // dd($client->toArray());

            $lang = 0;
            $pkg = 0;
            $opt_pdf = 0;
            $opt_mailed = 0;
            $opt_phone = 0;
            $opt_attorny_fax = 0;
            $opt_email  = 0;
            $english_lang = (!is_null($client->english_lang)) ? true : false;
            $spanish_lang = (!is_null($client->spanish_lang)) ? true : false;
            if (!is_null($client->english_lang)) {
                $lang++;
            }
            if (!is_null($client->spanish_lang)) {
                $lang++;
            }
            
            // dd($lang);

            if ($client) {
                if ($client->pkg === "1") {
                    $pkg = 9.99;
                }
                if ($client->pkg === "2") {
                    $pkg = 29.99;
                }
                if ($client->pkg === "3") {
                    $pkg = 39.99;
                }
                if ($client->account_type == "2") {
                    
                    $pkg = $pkg * 2;
                    
                }
                
                // dd($pkg);
                if (!is_null($client->opt_pdf)) {
                    $opt_pdf = 9.99;
                    if ($lang == 2) {
                        $opt_pdf = $opt_pdf * 2;
                    }
                    // dd($opt_pdf);
                }

                if (!is_null($client->opt_mailed)) {
                    $opt_mailed = 9.99;
                }

                if (!is_null($client->opt_phone)) {
                    $opt_phone = 19.99;
                }

                if (!is_null($client->opt_attorney_fax)) {
                    $opt_attorny_fax = 5.99;
                    if ($client->account_type == "2") {
                        $opt_attorny_fax = $opt_attorny_fax * 2;
                    }
                }
                if (!is_null($client->opt_email)) {
                    $opt_email = 5.99;
                }
                // $total = $pkg + $opt_pdf + $opt_mailed + $opt_phone + $opt_attorny_fax + $opt_email;
                // dd("pkg: $pkg\npdf: $opt_pdf \nmailed: $opt_mailed \nphone: $opt_phone \nfax: $opt_attorny_fax \nmail: $opt_email\n total: $total" );
            }
            // dd($pkg);
            return view('client.payment_verify', [
                'pkg' => $client->pkg,
                'pkg_price' => $pkg,
                'account_type' => $client->account_type,
                'opt_pdf' => $opt_pdf,
                'opt_mailed' => $opt_mailed,
                'opt_phone' => $opt_phone,
                'opt_attorny_fax' => $opt_attorny_fax,
                'opt_email' => $opt_email,
                'lang' => $lang,
                'english_lang' => $english_lang,
                'spanish_lang' => $spanish_lang,
            ]);
        }
    }

    public function login(Request $request)
    {
        if (!$request->isMethod('POST')) {
            return view('client.login');
        }

        $request->validate([
            'client_email' => 'required|email',
            'client_password' => 'required'
        ]);

        $client = Client::where('client_email', $request->client_email)->first();

        if ($client && Hash::check($request->client_password, $client->client_password)) {
            // Update client status to 'online'
            $client->status = 'online';
            $client->save();

            // Store client_id in session
            session()->put('client_id', $client->client_id);

            // Redirect based on client's left_at attribute
            if ($client->left_at == url('en/client/payment-method-store')) {
                return redirect()->route('course.start_course', ['locale' => app()->getLocale()]);
            } else {
                return redirect($client->left_at);
            }
        } else {
            return back()->withErrors(['invalid' => 'Invalid email or password'])->withInput();
        }
    }





    //     public function register()
    //     {
    //         return view('client.register');
    //     }

    //     public function Court_District(Request $request)
    //     {


    //             if($request->method() == 'get'){
    //                 $courts = Court::with('state')->get(['id', 'name', 'state_id'])->map(function ($court) {
    //                     return [
    //                         'state' => $court['state']['name'],
    //                         'name' => $court['name'],
    //                         'id' => $court['id'],
    //                         'state_id' => $court['state_id'],
    //                     ];
    //                 })->toArray();
    //                 return view('client.court_district',['courts' => $courts]);
    //             }
    //         if($request->method() ==  'post'){
    //       $client_id= $request->client_id;
    //         // Validate the request data
    //         $validatedData = $request->validate([
    //             'client_id' => 'required|exists:client_profile,client_id', // Assuming client_id is the primary key in clientprofiles table
    //             'district_id' => 'required|integer', // Assuming district_id is an integer
    //         ]);
    //         $clientProfile = ClientProfile::where('client_id', $validatedData['client_id'])->first();
    //         if ($clientProfile) {
    //             // If record exists, update the district_id
    //            $updatevalue =  $clientProfile->update(['district_id' => $validatedData['district_id']]);
    //             //   dd($validatedData['']);
    //             if ($updatevalue) {
    //                 return view('client.household',['client' => $client_id]);
    //             }
    //             // Redirect or return a response as needed
    //             // return redirect()->back()->with('success', 'District updated successfully');
    //         } else {
    //             // Record not found, handle accordingly (e.g., show error message or redirect)
    //             // return redirect()->back()->with('error', 'Client profile not found');
    //         }
    //     }

    //     }

    //     public function Household_size(Request $request){

    //         // dd($request->all());
    //         $client_id= $request->client_id;
    //         // Validate the request data
    //         $validatedData = $request->validate([
    //             'client_id' => 'required|exists:client_profile,client_id', // Assuming client_id is the primary key in clientprofiles table
    //             'household' => 'required|integer', // Assuming district_id is an integer
    //         ]);
    //         // Check if the record exists in the clientprofile table

    //         $clientProfile = ClientProfile::where('client_id', $validatedData['client_id'])->first();

    //         if ($clientProfile) {

    //             // If record exists, update the district_id
    //            $updatevalue =  $clientProfile->update(['household' => $validatedData['household']]);
    //             //   dd($validatedData['']);
    //             if ($updatevalue) {
    //                 # code...
    //                 return view('client.account_type',['client' => $client_id]);

    //                 // return view("client.household");

    //             }

    //             // Redirect or return a response as needed
    //             // return redirect()->back()->with('success', 'District updated successfully');
    //         } else {
    //             // Record not found, handle accordingly (e.g., show error message or redirect)
    //             // return redirect()->back()->with('error', 'Client profile not found');
    //         }
    //     }
    //     public function account_type(Request $request){

    //         $client_id= $request->client_id;
    //         // Validate the request data
    //         $validatedData = $request->validate([
    //             'client_id' => 'required|exists:client_profile,client_id', // Assuming client_id is the primary key in clientprofiles table
    //             'account_type' => 'required|integer', // Assuming district_id is an integer
    //         ]);
    //         // Check if the record exists in the clientprofile table

    //         $clientProfile = ClientProfile::where('client_id', $validatedData['client_id'])->first();

    //         if ($clientProfile) {

    //             // If record exists, update the district_id
    //            $updatevalue =  $clientProfile->update(['account_type' => $validatedData['account_type']]);
    //             //   dd($validatedData['']);
    //             if ($updatevalue) {
    //                 # code...
    //                 $states = State::get()->map(function ($state){
    //                     return [
    //                         'id' => $state['id'],
    //                         'name' => $state['name'],
    //                         'abbreviation' => $state['abbreviation'],
    //                     ];
    //                 });
    //                 return view('client.client_information' , ['states' => $states, 'client' => $client_id]);
    //                 // return view('client.account_type',['client' => $client_id]);

    //                 // return view("client.household");

    //             }

    //             // Redirect or return a response as needed
    //             // return redirect()->back()->with('success', 'District updated successfully');
    //         } else {
    //             // Record not found, handle accordingly (e.g., show error message or redirect)
    //                 return view('client.account_type',['client' => $client_id]);
    //             }
    //     }
    //     public function client_information(Request $request) {
    //         // Dump and die to see all request data
    //         // dd($request->all());

    //         // Validate the request data
    //         $validatedData = $request->validate([
    //             'client_id' => 'required|exists:client_profile,client_id',
    //             'fname' => 'required|string|max:255',
    //             'mname' => 'nullable|string|max:255',
    //             'lname' => 'required|string|max:255',
    //             'dob' => 'required|date',
    //             'ss_num' => 'required|string|max:255',
    //             'st_address' => 'required|string|max:255',
    //             'city' => 'required|string|max:255',
    //             'state' => 'required|string|max:2',
    //             'zipcode' => 'required|string|max:10',
    //             'phone' => 'required|string|max:20',
    //         ]);

    //         // Find the client profile
    //         $clientProfile = ClientProfile::where('client_id', $validatedData['client_id'])->first();

    //         if ($clientProfile) {
    //             // Update the client profile with validated data
    //             $updatevalue = $clientProfile->update([
    //                 'fname' => $validatedData['fname'],
    //                 'mname' => $validatedData['mname'],
    //                 'lname' => $validatedData['lname'],
    //                 'dob' => $validatedData['dob'],
    //                 'ss_num' => $validatedData['ss_num'],
    //                 'st_address' => $validatedData['st_address'],
    //                 'city' => $validatedData['city'],
    //                 'state' => $validatedData['state'],
    //                 'zipcode' => $validatedData['zipcode'],
    //                 'phone' => $validatedData['phone'],
    //             ]);

    //             if ($updatevalue) {
    //                 $states = State::get()->map(function ($state) {
    //                     return [
    //                         'id' => $state['id'],
    //                         'name' => $state['name'],
    //                         'abbreviation' => $state['abbreviation'],
    //                     ];
    //                 });
    //                 return view('client.atorney_information', ['states' => $states, 'client' => $clientProfile]);
    //             }
    //         } else {
    //             // Record not found, handle accordingly (e.g., show error message or redirect)
    //             return view('client.account_type', ['client' => $request->client_id]);
    //         }
    //     }

    //     public function packges(Request $request){
    //         // $client= $request->client_id;

    //         // $client_id= $client->client_id;

    //         return view('client.price_package', ['client' => $request->client_id]);

    //     }

    //     public function legal_representation(){
    //         return view('client.legal_representation');
    //     }


    // public function store(Request $request)
    // {


    // $validatedData = $request->validate([
    //     'client_email' => 'required|email:filter|unique:client_login,client_email', // Corrected field name
    //     'confirm_email' => 'required|same:client_email', // Corrected field name
    //     'client_password' => 'required|min:6',
    //     'confirm_password' => 'required|same:client_password', // Corrected field name
    //     'progress' => 'nullable|numeric|between:0,99999999999999999999.99',
    //     'left_at' => 'nullable|string|max:500'
    // ]);
    // // dd($validatedData);
    // // Create a new client record
    // $client = Client::create([
    //     'client_email' => $validatedData['client_email'],
    //     'client_password' => bcrypt($validatedData['client_password']), // Encrypt the password
    //     'progress' => $validatedData['progress'] ?? null,
    //     'status' => "No",
    //     'left_at' => $validatedData['left_at'] ?? null
    // ]);

    // if ($client) {
    //     // Create a new client profile record associated with the client
    //     $clientProfile = ClientProfile::create([
    //         'client_id' => $client->client_id,
    //         // Add other fields based on your form data
    //     ]);

    //     // Check if the client profile was created successfully
    //     if ($clientProfile) {
    //         return redirect()->route('client.court_district');
    //     } else {
    //         // Delete the client record if the client profile creation fails
    //         $client->delete();
    //         // return back()->with('error', 'Failed to create client profile');
    //     }
    // } else {
    //     // Return an error response if client creation fails
    //     // return back()->with('error', 'Failed to register client');
    // }
    // }


}
