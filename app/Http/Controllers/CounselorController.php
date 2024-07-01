<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Client;
use App\Models\ClientAttorny;
use App\Models\ClientProfile;
use App\Models\DebtStructure;
use Illuminate\Http\Request;
use App\Models\CourseReason;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CounselorController extends Controller
{
    public function applyFilter(Request $request) 
    {

        // dd($request->all());
        $query = ClientProfile::with(['client', 'court']);
    
        if ($request->has('clients_online')) {
            $query->whereHas('client', function($q) {
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
            $query->whereHas('client', function($q) {
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
        return view('counselor.dashboard', ['clientProfiles' => $clientProfiles]);

    }

   
    public function login(Request $request)
    {
            return view('counselor.login',  ['locale' => app()->getLocale()]);
            
        
       
    }

    public function logn(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        // Auth::login($counsler);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // $user = Auth::user();
            $user = User::where('email', $request->email)->first();

            
            // Check user role and redirect accordingly
            if ($user->role === 'counselor') {
                return redirect()->route('counsler.admin-layout', ['locale' => app()->getLocale()]);
            }  else {
                // Handle other roles or redirect to default user dashboard
                // Example: return redirect()->route('user.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
        public function index()
    {
        $clientProfiles = ClientProfile::with(['client', 'court'])->paginate(10);
        // dd($clientProfiles);
        return view('counselor.dashboard', ['clientProfiles' => $clientProfiles]);
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
        return view('counselor.clientprofile', compact('clientProfile', 'debtStructure', 'budget', 'reasons', 'attorney'));
    }
   
    public function editcoursereason(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data if needed
        // $request->validate([...]);

        // Get the client_id from the request
        $client_id = $request->id;

        // Find the corresponding CourseReason record
        $courseReason = CourseReason::where('client_id', $client_id)->first();

        // Update the CourseReason record based on the request values
        $courseReason->update([
            'garnishment' => $request->garnishment == '1' ? 1 : 0,
            'repossession' => $request->repossession == '1' ? 1 : 0,
            'foreclosure' => $request->foreclosure == '1' ? 1 : 0,
            'lawsuit' => $request->lawsuit == '1' ? 1 : 0,
            'illness_disability' => $request->illness_disability == '1' ? 1 : 0,
            'divorce' => $request->divorce == '1' ? 1 : 0,
            'Job_Loss' => $request->Job_Loss == '1' ? 1 : 0,
            'c_c_debt' => $request->c_c_debt == '1' ? 1 : 0,
            'g_debt' => $request->g_debt == '1' ? 1 : 0,
            'other' => $request->other == '1' ? 1 : 0,
            // Add other fields here as needed
        ]);

        // Redirect or return a response as needed
        return redirect()->route('counsler.clientprofile',  ['id' => $client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
    }

    public function editdebtstructure(Request $request)
    {
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
        return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');

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
            return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
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
        return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
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
            return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        } else {
            // Handle the case where the client profile is not found
            return redirect()->back()->withErrors(['msg' => 'Client profile not found.']);
        }
    }

    public function editattorneyInfo(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'att_firm_name' => 'nullable|string',
            'att_fname' => 'nullable|string',
            'att_mname' => 'nullable|string',
            'att_lname' => 'nullable|string',
            'att_email' => 'nullable|email',
            'att_phone' => 'nullable|string',
            'att_fax' => 'nullable|string',
        ]);
    
        $client_id = $request->client_id;
        // Get the attorney ID associated with the client
        $client_attorney_id = ClientProfile::where('client_id', $client_id)->pluck('attorney_id')->first();
    
        // Update or create the attorney's information
        $attorney = ClientAttorny::updateOrCreate(
            ['attorney_id' => $client_attorney_id], // Condition to find the record, if null, it will create a new one
            [
                'att_firm_name' => $request->att_firm_name,
                'att_fname' => $request->att_fname,
                'att_mname' => $request->att_mname,
                'att_lname' => $request->att_lname,
                'att_email' => $request->att_email,
                'att_phone' => $request->att_phone,
                'att_fax' => $request->att_fax
            ]
        );
    
        // Check if new attorney was created and link it with client if necessary
        if (!$client_attorney_id) {
            ClientProfile::where('client_id', $client_id)->update(['attorney_id' => $attorney->attorney_id]);
        }
    
        // Redirect or return a response indicating success
        return redirect()->route('counsler.clientprofile', ['id' => $request->client_id, 'locale' => app()->getLocale()])
                         ->with('success', 'Attorney information updated successfully');
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

            return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
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
            return redirect()->route('counsler.clientprofile',  ['id' => $request->id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
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
            return redirect()->route('counsler.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
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
            return redirect()->route('counsler.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        }


        // Redirect back to the budget page

        else {
            return redirect()->back();
        }
    }
}
