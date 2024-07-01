<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\Client;
use App\Models\Messages;
use App\Models\ClientProfile;
use App\Models\CourseReason;
use App\Models\DebtStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    //
    public function submitForm(Request $request)
    {
        // Fetch the client profile using the client ID from the request (assuming client_id is passed in the request)

        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            $clientProfile = ClientProfile::find($client_id);

            if ($clientProfile) {
                // If course_progress is null, set it to 0 before increasing it
                $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                // Increase course_progress by 10%
                $clientProfile->course_progress += 14.28;

                // Save the updated client profile
                $clientProfile->update();
            }
            // Redirect to the desired route
            return redirect()->route('course.course_intro', ['locale' => app()->getLocale()]);
        }
    }

    public function course_intro(Request $request)
    {
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            $clientProfile = ClientProfile::find($client_id);

            if ($clientProfile) {
                // If course_progress is null, set it to 0 before increasing it
                $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                // Increase course_progress by 10%
                $clientProfile->course_progress += 14.28;

                // Save the updated client profile
                $clientProfile->save();
            }

            return redirect()->route('course.seeking_reason',  ['locale' => app()->getlocale()]);
        }
    }
    public function seeking_reason(Request $request)
    {
        $client_id = session()->get('client_id');
        // dd($course->toArray());
        if (!$request->isMethod('POST')) {
            $course = [
                'garnishment' =>  Null,
                'repossession' =>  Null,
                'foreclosure' =>  Null,
                'lawsuit' => Null,
                'illness_disability' =>  Null,
                'divorce' =>  Null,
                'Job_Loss' =>  Null,
                'c_c_debt' =>  Null,
                'g_debt' =>  Null,
                'other' =>  Null,
            ];
            $result = CourseReason::where('client_id', $client_id)->first();
            if (!is_null($result)) {
                $course = $result;
            }
            // dd(!is_null($course['garnishment']));
            return view('course.seeking_reason', ['locale' => app()->getLocale(), 'course' => $course]);
        }
        // Capture all incoming request data
        $data = $request->all();
        // dd(isset($data['garnishment'])?1:0);
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');

            $result =    CourseReason::where('client_id', $client_id)->first();
            // dd($query);

            // Create a new CourseReason instance and store the data
            $array = [
                'garnishment' => isset($data['garnishment']) ? 1 : Null,
                'repossession' => isset($data['repossession']) ? 1 : Null,
                'foreclosure' => isset($data['foreclosure']) ? 1 : Null,
                'lawsuit' => isset($data['lawsuit']) ? 1 : Null,
                'illness_disability' => isset($data['illness_disability']) ? 1 : Null,
                'divorce' => isset($data['divorce']) ? 1 : Null,
                'Job_Loss' => isset($data['Job_Loss']) ? 1 : Null,
                'c_c_debt' => isset($data['c_c_debt']) ? 1 : Null,
                'g_debt' => isset($data['g_debt']) ? 1 : Null,
                'other' => isset($data['other']) ? 1 : Null,
                // 'f_c_occurred' => isset($data['f_c_occurred']) ? 1 : null,
                // 'f_c_keep' => isset($data['f_c_keep']) ? 1 : null,
                // 'f_c_sale' => isset($data['f_c_sale']) ? 1 : null,
                // 'gar_started' => isset($data['gar_started']) ? 1 : 0,
                // 'ls_creditors' => isset($data['ls_creditors']) ? 1 : null,
                // 'ls_amount' => isset($data['ls_amount']) ? 1 : null,
                // 'ls_reason' => isset($data['ls_reason']) ? 1 : null,
                // 'dated' => $data['dated'] ?? now(),
            ];
            if ($result) {
                $result->update($array);
            } else {
                $array['client_id'] = $client_id;
                CourseReason::create($array);
            }
        } else {
            return redirect()->back();
        }
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            $clientProfile = ClientProfile::find($client_id);

            if ($clientProfile) {
                // If course_progress is null, set it to 0 before increasing it
                $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                // Increase course_progress by 10%
                $clientProfile->course_progress += 14.28;

                // Save the updated client profile
                $clientProfile->save();
            }

            // Redirect to another route
            return redirect()->route('course.seeking_reason_explain', ['locale' => app()->getLocale()]);
        }
    }

    public function seeking_reason_explain(Request $request)
    {
        $client_id = session()->get('client_id');

        if (!$request->isMethod('POST')) {
            $courseReason = CourseReason::where('client_id', $client_id)->first();
            return view('course.seeking_reason_explain', ['locale' => app()->getLocale() , 'courseReason' => $courseReason ]);
        }
        if (!is_null(session()->get('client_id'))) {
            $clientProfile = ClientProfile::find($client_id);
            if ($clientProfile) {
                // If course_progress is null, set it to 0 before increasing it
                $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                // Increase course_progress by 10%
                $clientProfile->course_progress += 14.28;

                // Save the updated client profile
                $clientProfile->save();
            }

            return redirect()->route('course.debt_structure',  ['locale' => app()->getlocale()]);
        }
    }
    // public function debt_structure(Request $request)
    // {
    //     dd($request->all());

    //     return redirect()->route('course.debt_structure',  ['locale' => app()->getlocale()]);
    // }
    public function debt_structure(Request $request)
    {

        $client_id = session()->get('client_id'); 

        // Validate the incoming request data
        $validatedData = $request->validate([
            'household' => 'nullable|integer',
            'cc_debt' => 'nullable|numeric',
            'sl_debt' => 'nullable|numeric',
            'med_debt' => 'nullable|numeric',
            'cl_debt' => 'nullable|numeric',
            'ul_debt' => 'nullable|numeric',
            'mort1_debt' => 'nullable|numeric',
            'tax_debt' => 'nullable|numeric',
            'mort2_debt' => 'nullable|numeric',
            'total_debt' => 'nullable|numeric',
        ]);
        if (!is_null(session()->get('client_id'))) {

            // $clientProfile = ClientProfile::where('client_id', session()->get('client_id'))->first();
            DebtStructure::updateOrCreate(
                ['client_id' => $client_id],
                $validatedData
            );

            // Create or update the DebtStructure record

            if (!is_null(session()->get('client_id'))) {
                $client_id = session()->get('client_id');
                $clientProfile = ClientProfile::find($client_id);

                if ($clientProfile) {
                    // If course_progress is null, set it to 0 before increasing it
                    $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                    // Increase course_progress by 10%
                    $clientProfile->course_progress += 14.28;

                    // Save the updated client profile
                    $clientProfile->save();
                }
                // Redirect back to the debt structure page
                return redirect()->route('course.budget_calculator', ['locale' => app()->getLocale()]);
            }
        } else {
            return redirect()->route('course.debt_structure',  ['locale' => app()->getlocale()]);
        }
    }

    public function budget_calculator(Request $request)
    {
        // dd($request->monthly_gross_income);
        // Validate the incoming request data
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
        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            $updatevalue =  Budget::updateOrCreate(
                ['client_id' => $client_id],
                $validatedData
            );
            if ($updatevalue) {
                if (!is_null(session()->get('client_id'))) {
                    $client_id = session()->get('client_id');
                    $budgetData = Budget::where('client_id', $client_id)->first();
                    // dd($budgetData);
                    if ($budgetData) {

                        $clientProfile = ClientProfile::find($client_id);

                        if ($clientProfile) {
                            // If course_progress is null, set it to 0 before increasing it
                            $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                            // Increase course_progress by 10%
                            $clientProfile->course_progress += 14.28;

                            // Save the updated client profile
                            $clientProfile->save();
                        }
                        return view('course.budget_chart', ['budget' => $budgetData]);
                    }
                }
            }


            // Redirect back to the budget page
        } else {
            return redirect()->route('course.budget_calculator', ['locale' => app()->getLocale()]);
        }
    }

    public function editBudget(Request $request){
        // dd($request->all());
        $id = session()->get('client_id');
        $budget = Budget::where('client_id', $id)->firstOrFail();
        if($budget){
            return view('course.edit_budget', compact('budget', 'id'));

        }
       return redirect()->back();
    }
    public function updateBudget(Request $request){
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
            return redirect()->route('course.visual_identification', ['locale' => app()->getLocale()]);

            // return redirect()->route('admin.clientprofile',  ['id' => $request->client_id,  'locale' => app()->getLocale()])->with('success', 'Course Reason updated successfully');
        }


        // Redirect back to the budget page

        else {
            return redirect()->back();
        }    }

    // use Illuminate\Http\Request;
    // use App\Models\ClientProfile;



    // use Illuminate\Http\Request;
    // use Illuminate\Support\Facades\File;
    // use App\Models\ClientProfile;

    public function visual_identity(Request $request)
    {
        // Validate the request
        $request->validate([
            'profile_img' => 'required|image|max:2048', // 2MB Max
        ]);

        // Handle the file upload
        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = public_path('profile_images');

            // Ensure the directory exists
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
            }

            // Move the file to the public directory
            $file->move($path, $filename);

            // Get the authenticated user's profile (assuming user is authenticated)
            if (!is_null(session()->get('client_id'))) {
                $client_id = session()->get('client_id');
                $clientProfile = ClientProfile::where('client_id', $client_id)->firstOrFail();

                // Update the profile image URL in the database
                $clientProfile->profile_img = url('profile_images/' . $filename);
                $clientProfile->save();

                if (!is_null(session()->get('client_id'))) {
                    $client_id = session()->get('client_id');
                    $clientProfile = ClientProfile::find($client_id);

                    if ($clientProfile) {
                        // If course_progress is null, set it to 0 before increasing it
                        $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                        // Increase course_progress by 10%
                        $clientProfile->course_progress += 14.28;

                        // Save the updated client profile
                        $clientProfile->save();
                    }

                    return redirect()->route('course.chat_session', ['locale' => app()->getLocale()]);
                }
            }
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }

    public function visual_identity_camera(Request $request)
    {
        // Validate the request
        $request->validate([
            'dataUri' => 'required|string',
        ]);

        // Get the image data from the request
        $imageData = $request->dataUri;

        // Strip out the base64 part
        $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
        $imageData = str_replace(' ', '+', $imageData);

        // Decode the base64 data
        $decodedData = base64_decode($imageData);

        // Generate a unique filename
        $imageName =  time() . '_' . uniqid() . '.jpeg';
        $path = public_path('profile_images');

        // Ensure the directory exists
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        // Save the file to the public directory
        $filePath = $path . '/' . $imageName;
        file_put_contents($filePath, $decodedData);

        if (!is_null(session()->get('client_id'))) {
            $client_id = session()->get('client_id');
            $clientProfile = ClientProfile::where('client_id', $client_id)->firstOrFail();

            // Update the profile image URL in the database
            $clientProfile->profile_img = url('profile_images/' . $imageName);
            $clientProfile->save();

            if (!is_null(session()->get('client_id'))) {
                $client_id = session()->get('client_id');
                $clientProfile = ClientProfile::find($client_id);

                if ($clientProfile) {
                    // If course_progress is null, set it to 0 before increasing it
                    $clientProfile->course_progress = $clientProfile->course_progress ?? 0;

                    // Increase course_progress by 10%
                    $clientProfile->course_progress += 14.28;

                    // Save the updated client profile
                    $clientProfile->save();
                }

                // Redirect to the desired route
                return redirect()->route('course.chat_session', ['locale' => app()->getLocale()]);
            }
        }
    }

    public function chat(Request $request)
    {
        $client_id = session()->get('client_id');

        if (!$request->isMethod('POST')) {
            $allClients = Client::get();
            $client = Client::where('client_id', $client_id)->first();
            $messages = Messages::where('sender', $client_id)
                ->orWhere('receiver', $client_id)
                ->get();

            // Convert messages to collection and sort by created_at
            // Prepare messages with formatted dates
            foreach ($messages as &$message) {
                $message['formatted_date'] = $this->formatDate($message['created_at']);
                $message['formatted_time'] = $this->formatTime($message['created_at']);
            }


            // dd($messages->toArray());
            $messages = collect($messages)->sortBy('created_at')->values()->all();
            // dd($allClients->toArray());
            return view('course.chat', ['data' => $client, 'messages' => $messages, 'clients' => $allClients]);

            // $client = Client::where('client_id', $client_id)->first();
            // $messages = Messages::where('sender', $client_id)
            // ->orWhere('receiver', $client_id)
            // ->get();

            // dd($messages->toArray());
            // return view('course.chat' , ['data' => $client , 'messages' => $messages]);
        }
    }
    public function resourceId_handler(Request $request)
    {
        if ($request->input('conn') === "initial") {
            Client::where('client_id', session()->get('client_id'))->update(['connection' => $request->input('resource_id')]);
        } else {
            Client::where('client_id', session()->get('client_id'))->update(['connection' => NULL]);
        }
    }

    private function formatDate($date)
    {
        $carbonDate = \Carbon\Carbon::parse($date);
        if ($carbonDate->isToday()) {
            return 'Today';
        } elseif ($carbonDate->isYesterday()) {
            return 'Yesterday';
        } else {
            return $carbonDate->format('m/d/Y');
        }
    }

    private function formatTime($datewithTime)
    {
        $carbonDate = \Carbon\Carbon::parse($datewithTime);
        return $carbonDate->format('h:i A');
    }
}
