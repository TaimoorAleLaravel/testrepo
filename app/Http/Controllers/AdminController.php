<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Client;
use App\Models\ClientAttorny;
use App\Models\ClientProfile;
use App\Models\DebtStructure;
use Illuminate\Http\Request;
use App\Models\Counselor;
use App\Models\CourseReason;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;


class AdminController extends Controller
{
    public function applyFilter(Request $request)
    {

        // dd($request->all());
        $query = ClientProfile::with(['client', 'court']);

        if ($request->has('clients_online')) {
            $query->whereHas('client', function ($q) {
                $q->where('status', 'online');
            });
        }

        if ($request->has('clients_chat')) {
            // $query->whereHas('client', function($q) {
            // $q->where('status', 'chat');
            $query->where('payment_status', 'paid');

            // });
        }

        if ($request->has('clients_eligible_to_chat')) {
            $query->where('payment_status', 'paid');
        }

        if ($request->has('clients_mine')) {
            $query->whereHas('client', function ($q) {
                $q->where('status', 'mine');
            });
        }

        if ($request->has('clients_paid')) {
            $query->where('payment_status', 'paid');
        }

        if ($request->has('clients_unpaid')) {
            $query->where('payment_status', 'unpaid');
        }

        if ($request->has('clients_learning')) {
            // Filter for clients with course_progress greater than 99.96
            // $query->where('course_progress', '>', 99.96);
            $query->whereNotNull('course_progress');
        }

        if ($request->has('clients_awaiting')) {
            // Filter for clients where course_progress is null
            $query->whereNull('course_progress');
        }

        if ($request->has('clients_all')) {
            ClientProfile::with(['client', 'court'])->get();
        }
        if ($request->has('lname') && $request->lname != null) {
            $sortOrder = $request->lname == 'DESC' ? 'DESC' : 'ASC';
            $query->orderBy('lname', $sortOrder);
        }

        // Apply filtering based on 'payment' status
        if ($request->has('payment') && $request->payment != null) {
            $paymentStatus = $request->payment == 'paid' ? 'paid' : 'unpaid';
            $query->where('payment_status', $paymentStatus);
        }

        // Apply filtering based on date range
        if ($request->has('fdate') && $request->fdate != null) {
            $startDate = now()->subDays($request->fdate)->startOfDay();
            $query->where('created_at', '>=', $startDate);
        }
        $clientProfiles = $query->paginate(10);
        // return response()->json($clientProfiles);
        return view('admin.index', ['clientProfiles' => $clientProfiles]);
    }
    public function applyFilterCounsler(Request $request)
    {
        //  dd($request->all());
        $query = ClientProfile::with(['client', 'court']);

        if ($request->has('clients_online')) {
            $query->whereHas('client', function ($q) {
                $q->where('status', 'online');
            });
        }

        if ($request->has('clients_chat')) {
            // $query->whereHas('client', function($q) {
            // $q->where('status', 'chat');
            $query->where('payment_status', 'paid');

            // });
        }

        if ($request->has('clients_eligible_to_chat')) {
            $query->where('payment_status', 'paid');
        }

        if ($request->has('clients_mine')) {
            $query->whereHas('client', function ($q) {
                $q->where('status', 'mine');
            });
        }

        if ($request->has('clients_paid')) {
            $query->where('payment_status', 'paid');
        }

        if ($request->has('clients_unpaid')) {
            $query->where('payment_status', 'unpaid');
        }

        if ($request->has('clients_learning')) {
            // Filter for clients with course_progress greater than 99.96
            // $query->where('course_progress', '>', 99.96);
            $query->whereNotNull('course_progress');
        }

        if ($request->has('clients_awaiting')) {
            // Filter for clients where course_progress is null
            $query->whereNull('course_progress');
        }

        if ($request->has('clients_all')) {
            ClientProfile::with(['client', 'court'])->get();
        }
        if ($request->has('lname') && $request->lname != null) {
            $sortOrder = $request->lname == 'DESC' ? 'DESC' : 'ASC';
            $query->orderBy('lname', $sortOrder);
        }

        // Apply filtering based on 'payment' status
        if ($request->has('payment') && $request->payment != null) {
            $paymentStatus = $request->payment == 'paid' ? 'paid' : 'unpaid';
            $query->where('payment_status', $paymentStatus);
        }

        // Apply filtering based on date range
        if ($request->has('fdate') && $request->fdate != null) {
            $startDate = now()->subDays($request->fdate)->startOfDay();
            $query->where('created_at', '>=', $startDate);
        }
        $clientProfiles = $query->paginate(10);
        // return response()->json($clientProfiles);
        return redirect()->route('admin.viewcounsler', ['locale' => app()->getLocale(), 'clientProfiles' => $clientProfiles]);
    }
    public function login()
    {

        return view('admin.login',  ['locale' => app()->getLocale()]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login', ['locale' => app()->getLocale()]);
    }

    public function logn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check user role and redirect accordingly
            if ($user->role === 'admin') {
                return redirect()->route('admin.index', ['locale' => app()->getLocale()]);
            } elseif ($user->role === 'counselor') {
                // Redirect to counselor dashboard
                // Example: return redirect()->route('counselor.dashboard');
            } else {
                // Handle other roles or redirect to default user dashboard
                // Example: return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function index()
    {
        $clientProfiles = ClientProfile::with(['client', 'court'])->paginate(10); // 10 records per page
        // dd($clientProfiles);
        return view('admin.index', ['clientProfiles' => $clientProfiles]);
    }
    public function show(Request $request)
    {
        $id = $request->id;

        // Initialize variables
        $clientProfile = null;
        $debtStructure = null;
        $budget = null;
        $courseReason = null;

        // Fetch client profile data with error handling
        try {
            $clientProfile = ClientProfile::with(['client', 'court.state'])->where('client_id', $id)->firstOrFail();
        } catch (\Exception $e) {
            // Log error or handle as needed
        }

        // Fetch debt structure data with error handling
        try {
            $debtStructure = DebtStructure::where('client_id', $id)->firstOrFail();
        } catch (\Exception $e) {
            // Log error or handle as needed
        }

        // Fetch budget data with error handling
        try {
            $budget = Budget::where('client_id', $id)->firstOrFail();
        } catch (\Exception $e) {
            // Log error or handle as needed
        }

        // Fetch course reason data
        $courseReason = CourseReason::where('client_id', $id)->first();

        // Prepare reasons array
        $reasons = [];
        if ($courseReason) {
            if ($courseReason->garnishment) $reasons[] = 'Garnishment';
            if ($courseReason->repossession) $reasons[] = 'Repossession';
            if ($courseReason->foreclosure) $reasons[] = 'Foreclosure';
            if ($courseReason->lawsuit) $reasons[] = 'Lawsuit';
            if ($courseReason->illness_disability) $reasons[] = 'Illness/Disability';
            if ($courseReason->divorce) $reasons[] = 'Divorce';
            if ($courseReason->Job_Loss) $reasons[] = 'Job Loss';
            if ($courseReason->c_c_debt) $reasons[] = 'Credit Card Debt';
            if ($courseReason->g_debt) $reasons[] = 'Gambling Debt';
            if ($courseReason->other) $reasons[] = 'Other';
        }
        $attorney = null;
        $client_attorney_id = ClientProfile::where('client_id', $id)->pluck('attorney_id')->first(); //attorney id
        if (!is_null($client_attorney_id)) {
            $attorney = ClientAttorny::where('attorney_id', $client_attorney_id)->first();
        }
        // dd($reasons);  
        return view('admin.clientprofile', compact('clientProfile', 'debtStructure', 'budget', 'reasons', 'attorney'));
    }
    public function addcounslerpage(Request $request)
    {
        return view('admin.add-Counselor', ['clientProfiles']);
    }

    // use Illuminate\Support\Facades\File; // Add this at the top if not already included

    public function addcounselor(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'counselor_name' => 'required',
            'counselor_email' => 'required|email|max:100|unique:counselor_login,counselor_email',
            'counselor_password' => 'required|string|min:8|confirmed',
            'counselor_signature' => 'required|image|max:4048', // 2MB Max
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the file is received
        if ($request->hasFile('counselor_signature')) {
            $file = $request->file('counselor_signature');
            $mimetype = $file->getMimeType();
            $originalName = $file->getClientOriginalName();
            $size = $file->getSize();

            // Log details for debugging
            Log::info("File received: $originalName, MIME type: $mimetype, Size: $size");

            // Generate a unique filename
            $filename = time() . '_' . $originalName;

            // Move the file to the public directory
            $file->move(public_path('counselor_signatures'), $filename);

            // Save the file URL in the database
            $data = $request->all();
            $data['counselor_signature'] = url('counselor_signatures/' . $filename);

            // Hash the password before saving
            // $data['counselor_password'] = Hash::make($data['counselor_password']);
            // $data['encrypted_password']= Crypt::encryptString($data['counselor_password']);


            // Create the counselor record
            $counsler =   Counselor::create($data);
            $counsler = User::create([
                'name' => $request->counselor_name,
                'email' => $request->counselor_email,
                'password' => $request->counselor_password,
                'role' => 'counselor'
            ]);
            event(new Registered($counsler));

            Auth::login($counsler);

            if ($counsler) {
                # code...
                $clientProfiles = ClientProfile::with(['client', 'court'])->get();
                // dd($clientProfiles);
                return view('admin.index', ['clientProfiles' => $clientProfiles]);
            }

            // return redirect()->back()->with('success', 'Counselor added successfully!');
        } else {
            return redirect()->back()->with('error', 'Counselor error: File not uploaded!');
        }
    }
    public function viewcounsler()
    {
        // Retrieve all counselors from the database
        $counselors = Counselor::paginate(10); // Adjust the number 10 to the number of items per page you want
        // Pass the counselors data to the view
        return view('admin.view-Counselor', ['counselors' => $counselors]);
    }
    public function editcounsler(Request $request)
    {
        // Retrieve the counselor's ID from the request
        $counslerId = $request->id;

        // Fetch the counselor's data from the database using the ID
        // $counselor = Counselor::find($counslerId);
        $counselor = Counselor::where('counselor_id', $counslerId)->firstOrFail();

        // Check if counselor exists
        if (!$counselor) {
            return redirect()->back()->with('error', 'Counselor not found.');
        }
        // dd($counselor);
        // Pass the counselor's data to the Blade view
        return view('admin.edit-Counsler', ['counselor' => $counselor]);
    }
    public function updatecounsler(Request $request)
    {
        // Validate the request
        $request->validate([
            'id' => 'required|exists:counselor_login,counselor_id',
            'counselor_name' => 'required|min:4',
            'counselor_email' => 'required|email',
            'counselor_password' => 'required|min:6|confirmed',
        ]);

        // Retrieve the counselor's ID from the request
        $counselorId = $request->id;

        // Find the counselor by ID
        $counselor = Counselor::where('counselor_id', $counselorId)->firstOrFail();

        // Update the counselor's data
        $counselor->counselor_name = $request->counselor_name;
        $counselor->counselor_email = $request->counselor_email;
        $counselor->counselor_password = $request->counselor_password;
        // $counselor->encrypted_password = Crypt::encryptString($request->counselor_password); // Encrypt the password
        $counselor->update();

       
        if ($counselor) {
            // Redirect with success message
            $clientProfiles = ClientProfile::with(['client', 'court'])->get();
            // dd($clientProfiles);
            return view('admin.index', ['clientProfiles' => $clientProfiles]);
        } else {
            return redirect()->back();
        }
    }



    public function deletecounsler(Request $request)
    {
        $counselorId = $request->id;
        // Find the counselor by ID
        $counselor = Counselor::where('counselor_id', $counselorId)->firstOrFail();

        // Check if counselor exists
        if ($counselor) {
            // Delete the counselor
            $counselor->delete();

            // Redirect back with success message
            return redirect()->back()->with('success', 'Counselor deleted successfully!');
        } else {
            // Redirect back with error message if not found
            return redirect()->back()->with('error', 'Counselor not found!');
        }
    }

    public function editcoursereason(Request $request)
    {
        // Validate the incoming request data if needed
        // $request->validate([...]);

        // Get the client_id from the request
        $client_id = $request->id;

        // Find the corresponding CourseReason record
        $courseReason = CourseReason::where('client_id', $client_id)->first();

        // Update the CourseReason record based on the request values
        $courseReason->update([
            'garnishment' => $request->garnishment == '300' ? 1 : 0,
            'repossession' => $request->repossession == '300' ? 1 : 0,
            'foreclosure' => $request->foreclosure == '300' ? 1 : 0,
            'lawsuit' => $request->lawsuit == '300' ? 1 : 0,
            'illness_disability' => $request->illness_disability == '300' ? 1 : 0,
            'divorce' => $request->divorce == '300' ? 1 : 0,
            'Job_Loss' => $request->Job_Loss == '300' ? 1 : 0,
            'c_c_debt' => $request->c_c_debt == '300' ? 1 : 0,
            'g_debt' => $request->g_debt == '300' ? 1 : 0,
            'other' => $request->other == '300' ? 1 : 0,
            // Add other fields here as needed
        ]);

        // Redirect or return a response as needed
        return redirect()->route('admin.clientprofile',  ['id' => $client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
    }

    public function editdebtstructure(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'household' => 'required|numeric',
            'cc_debt' => 'required|numeric',
            'med_debt' => 'required|numeric',
            'ul_debt' => 'required|numeric',
            'tax_debt' => 'required|numeric',
            'sl_debt' => 'required|numeric',
            'cl_debt' => 'required|numeric',
            'mort1_debt' => 'required|numeric',
            'mort2_debt' => 'required|numeric',
        ]);

        // Update the data in the database using the ClientDebtStructure model
        // $debtStructure = DebtStructure::find($request->id);
        $debtStructure = DebtStructure::where('client_id', $request->id)->first();

        if ($debtStructure) {
            $debtStructure->update($validatedData);
            // Optionally, you can add a success message here
        } else {
            return redirect()->back();

            // Handle if the debt structure record is not found
            // Optionally, you can add an error message here
        }
        return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');

        // Redirect back or to a specific route after updating
    }
    public function editclientRatio(Request $request)
    {
        $id = $request->input('id');
        $grossIncome = $request->input('total_income');
        $monthlyDebt = $request->input('total_expenses');
        $commitRatio = $request->input('commit_ratio');

        try {
            // Update the budget record in the database
            Budget::where('client_id', $id)->update([
                'total_income' => $grossIncome,
                'total_expenses' => $monthlyDebt,
                // 'commit_ratio' => $commitRatio,
            ]);

            // Success message or redirect to a success page
            return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } catch (\Exception $e) {
            // Handle any errors that may occur during the update process
            return back()->withInput()->withErrors('An error occurred. Please try again.');
        }
    }

    public function editaccountInfo(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'account_type' => 'required|integer',
            'client_email' => 'required|email',
            'household' => 'required|integer',
            'district_id' => 'required|integer',
            'client_password' => 'required', // or other password rules
            'id' => 'required|integer'
        ]);

        // Fetch the client profile based on the provided id
        $clientProfile = ClientProfile::where('client_id', $request->id)->firstOrFail();

        // Update the email in the ClientLogin table
        // $clientLogin = Client::findOrFail($request->id);
        $clientLogin = Client::where('client_id', $request->id)->firstOrFail();

        $clientLogin->client_email = $request->client_email;
        $clientLogin->client_password = $request->client_password; // Assuming you're using bcrypt for passwords

        $clientLogin->save();

        // Update the other fields in the ClientProfile table
        $clientProfile->account_type = $request->account_type;
        $clientProfile->household = $request->household;
        $clientProfile->district_id = $request->district_id;
        $clientProfile->save();

        // Redirect back with success message
        return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
    }

    public function editpersonalInfo(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'fname' => 'required',
            'mname' => 'nullable',
            'lname' => 'required',
            'dob' => 'required|date',
            'ss_num' => 'required',
            'st_address' => 'required',
            'phone' => 'required',
        ]);

        // Find the client profile by ID
        // $clientProfile = ClientProfile::find($validatedData['id']);
        $clientProfile = ClientProfile::where('client_id', $validatedData['id'])->first();


        if ($clientProfile) {
            // Update the client profile with the validated data
            $clientProfile->update($validatedData);

            // Optionally, you can redirect to a different page with a success message
            return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } else {
            // Handle the case where the client profile is not found
            return redirect()->back()->withErrors(['msg' => 'Client profile not found.']);
        }
    }

    public function editattorneyInfo(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'att_firm_name' => 'nullable',
            'att_fname' => 'nullable',
            'att_mname' => 'nullable',
            'att_lname' => 'nullable',
            'att_email' => 'nullable',
            'att_phone' => 'nullable',
            'att_fax' => 'nullable',
        ]);
        $client_id = $request->client_id;
        // Get the attorney ID associated with the client
        $client_attorney_id = ClientProfile::where('client_id', $client_id)->pluck('attorney_id')->first();

        if ($client_attorney_id) {
            // Find the attorney record
            $attorney = ClientAttorny::where('attorney_id', $client_attorney_id)->first();

            if ($attorney) {
                // Update the attorney's information
                $attorney->att_firm_name = $request->att_firm_name;
                $attorney->att_fname = $request->att_fname;
                $attorney->att_mname = $request->att_mname;
                $attorney->att_lname = $request->att_lname;
                $attorney->att_email = $request->att_email;
                $attorney->att_phone = $request->att_phone;
                $attorney->att_fax = $request->att_fax;
                $attorney->save();

                // Redirect or return a response indicating success
                return redirect()->route('admin.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
            } else {
                // Handle case where attorney record is not found
                return redirect()->back()->with('error', 'Attorney not found.');
            }
        } else {
            // Handle case where client attorney ID is not found
            return redirect()->back()->with('error', 'Client attorney ID not found.');
        }
    }

    public function editCourseInfo(Request $request)
    {
        $data = validator([
            'package' => 'required'
        ]);
        if ($data) {
            $id = $request->id;
            $clientProfile = ClientProfile::where('client_id', $id)->first();
            $clientProfile->pkg = $request->package;
            // Save the updated client profile
            $clientProfile->save();

            return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } else {
            return redirect()->back()->with('error', 'Client attorney ID not found.');
        }
    }

    public function editpaymentInfo(Request $request)

    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|integer',
            'payment_method' => 'required|string',
            'payment_status' => 'nullable'
        ]);

        // Retrieve the ClientProfile using the provided ID
        $client_profile = ClientProfile::where('client_id', $request->id)->firstOrFail();

        if ($client_profile) {
            // Update the payment method and status
            $client_profile->payment_method = $request->payment_method == 'credit_card' ? 'Stripe' : 'Paypal';
            $client_profile->payment_status = $request->payment_status == 'on' ? 'paid' : 'unpaid';

            // Save the changes to the database
            $client_profile->save();

            // Redirect back with a success message
            return redirect()->route('admin.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } else {
            // Handle case where client profile is not found
            return redirect()->back()->with('error', 'Client profile not found.');
        }
    }
    public function editoptionalService(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'opt_pdf' => 'nullable|boolean',
            'language' => 'nullable|string|in:en,es',
            'opt_mailed' => 'nullable|boolean',
            'opt_phone' => 'nullable|boolean',
            'opt_attorney_fax' => 'nullable|boolean',
            'opt_email' => 'nullable|boolean',
        ]);

        // Retrieve the ClientProfile using the provided ID
        $client_profile = ClientProfile::where('client_id', $request->client_id)->firstOrFail();

        if ($client_profile) {
            // Update the optional services
            $client_profile->opt_pdf = $request->has('opt_pdf') ? $request->opt_pdf : null;
            $client_profile->english_lang = $request->language == 'en' ? 1 : null;
            $client_profile->spanish_lang = $request->language == 'es' ? 1 : null;
            $client_profile->opt_mailed = $request->has('opt_mailed') ? $request->opt_mailed : null;
            $client_profile->opt_phone = $request->has('opt_phone') ? $request->opt_phone : null;
            $client_profile->opt_attorney_fax = $request->has('opt_attorny_fax') ? $request->opt_attorny_fax : null;
            $client_profile->opt_email = $request->has('opt_email') ? $request->opt_email : null;

            // Save the changes to the database
            $client_profile->save();

            // Redirect back with a success message
            return redirect()->route('admin.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } else {
            // Handle case where client profile is not found
            return redirect()->back()->with('error', 'Client profile not found.');
        }
    }

    public function editbudgetInfo(Request $request)
    {
        $validatedData = $request->validate([
            'net_income' => 'nullable|numeric',
            'spouse_net_income' => 'nullable|numeric',
            'rent' => 'nullable|numeric',
            'condo' => 'nullable|numeric',
            'maintenance' => 'nullable|numeric',
            'pro_tax' => 'nullable|numeric',
            'housing_insurance' => 'nullable|numeric',
            'fur_app' => 'nullable|numeric',
            'doctor' => 'nullable|numeric',
            'dentist' => 'nullable|numeric',
            'medications' => 'nullable|numeric',
            'health_insurance' => 'nullable|numeric',
            'school_fee' => 'nullable|numeric',
            'books' => 'nullable|numeric',
            'school_activities' => 'nullable|numeric',
            'gas' => 'nullable|numeric',
            'electricity' => 'nullable|numeric',
            'water' => 'nullable|numeric',
            'garbage' => 'nullable|numeric',
            'sewer' => 'nullable|numeric',
            'telephone' => 'nullable|numeric',
            'cell_phone' => 'nullable|numeric',
            'cable' => 'nullable|numeric',
            'internet' => 'nullable|numeric',
            'automobile' => 'nullable|numeric',
            'license' => 'nullable|numeric',
            'transport_insurance' => 'nullable|numeric',
            'transport_maintenance' => 'nullable|numeric',
            'gasoline' => 'nullable|numeric',
            'public_trans' => 'nullable|numeric',
            'parking_tolls' => 'nullable|numeric',
            'restaurent' => 'nullable|numeric',
            'gifts' => 'nullable|numeric',
            'newspaper' => 'nullable|numeric',
            'movies_concerts' => 'nullable|numeric',
            'vacations' => 'nullable|numeric',
            'hobbies' => 'nullable|numeric',
            'clothing' => 'nullable|numeric',
            'laundery' => 'nullable|numeric',
            'membership' => 'nullable|numeric',
            'donations' => 'nullable|numeric',
            'allowance' => 'nullable',
            'child_support' => 'nullable|numeric',
            'child_care' => 'nullable|numeric',
            'pets' => 'nullable|numeric',
            'cosmetics' => 'nullable|numeric',
            'haircuts' => 'nullable|numeric',
            'personal_other' => 'nullable|numeric',
            'std_loan' => 'nullable|numeric',
            'gas_card' => 'nullable|numeric',
            'ds_card' => 'nullable|numeric',
            'cc_1' => 'nullable|numeric',
            'cc_2' => 'nullable|numeric',
            'cc_3' => 'nullable|numeric',
            'cc_4' => 'nullable|numeric',
            'cc_5' => 'nullable|numeric',
            'cc_6' => 'nullable|numeric',
            'cc_7' => 'nullable|numeric',
            'l_cc_other' => 'nullable|numeric',
            'savings' => 'nullable|numeric',
            's_i_401' => 'nullable|numeric',
            'stocks' => 'nullable|numeric',
            'mutual_funds' => 'nullable|numeric',
            'bonds' => 'nullable|numeric',
            'ira' => 'nullable|numeric',
            's_i_other' => 'nullable|numeric',
            'groceries' => 'nullable|numeric',
            'total_income' => 'nullable|numeric',
            'total_expenses' => 'nullable|numeric',
            'annual_expenses' => 'nullable|numeric',
            'total_savings' => 'nullable|numeric',
            'gross_income' => 'nullable|numeric',
            'monthly_debt' => 'nullable|numeric',
            'monthly_gross_income' => 'nullable|numeric',
        ]);

        // Create or update the Budget record
        // dd($validatedData);
        $client_id = $request->client_id;
        $updatevalue =  Budget::updateOrCreate(
            ['client_id' => $client_id],
            $validatedData
        );
        if ($updatevalue) {

            // dd($budgetData);
            return redirect()->route('admin.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        }


        // Redirect back to the budget page

        else {
            return redirect()->back();
        }
    }
}
