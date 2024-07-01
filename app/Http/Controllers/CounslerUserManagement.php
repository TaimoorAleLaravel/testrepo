<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use App\Models\CourseReason;
use App\Models\DebtStructure;
use App\Models\ClientProfile;
use App\Models\Court;
use App\Models\Client;
use App\Models\ClientAttorny;

class CounslerUserManagement extends Controller

{
    public function clientReason(Request $request)
    {
        $id = $request->input('id');
        $courseReason = CourseReason::where('client_id', $id)->first();
        return view('counselor.edit-clientProfile.client_reason', compact('courseReason'));
    }

    public function clientDebtStructure(Request $request)
    {
        $id = $request->input('id');
        $debtStructure = DebtStructure::where('client_id', $id)->first();
        return view('counselor.edit-clientProfile.client_debtStructure', compact('debtStructure'));
    }

    public function clientRatio(Request $request)
    {
        $id = $request->id;
        $budget = Budget::where('client_id', $id)->firstOrFail();
        // dd($budget);
        if($budget){
            return view('counselor.edit-clientProfile.client_ratioCalc', compact('budget', 'id'));

        }
       return redirect()->back();
    }

    public function foreclosure()
    {
        return view('counselor.edit-clientProfile.foreclosure');
    }

    public function clientGarnishment()
    {
        return view('counselor.edit-clientProfile.client_garnishment');
    }

    public function clientLawsuit()
    {
        return view('counselor.edit-clientProfile.client_lawsuit');
    }

    public function clientAccountInfo(Request $request)
    {
        $id = $request->input('id');
        $clientProfile = ClientProfile::where('client_id', $id)->first();
        $courts = Court::with('state')->get(['id', 'name', 'state_id'])->map(function ($court) {
            return [
                'state' => $court['state']['name'],
                'name' => $court['name'],
                'id' => $court['id'],
                'state_id' => $court['state_id'],
            ];
        })->toArray();
        $district_id  = ClientProfile::where('client_id', $id)->pluck('district_id')->first();
        $clientlogin  = Client::where('client_id', $id)->first();

        return view('counselor.edit-clientProfile.client_accountInfo', compact('clientProfile', 'courts', 'district_id', 'clientlogin'));
    }

    public function clientPersonalInfo(Request $request)
    {
        $id = $request->input('id');
        $clientProfile = ClientProfile::where('client_id', $id)->first();
        return view('counselor.edit-clientProfile.client_personalInfo', compact('clientProfile'));
    }

    public function clientAttorney(Request $request)
    {
        $client_id = $request->id;
        $client_attorney_id = ClientProfile::where('client_id', $client_id)->pluck('attorney_id')->first(); //attorney id
        if (!is_null($client_attorney_id)) {
            $data = ClientAttorny::where('attorney_id', $client_attorney_id)->first();
        }
        else{
            $data = null;
        }

        return view('counselor.edit-clientProfile.client_attorney', ['data' => $data, 'client_id' => $client_id]);
    }
    public function client_courseInfo(Request $request){
        $id = $request->id;
        $clientProfile = ClientProfile::where('client_id', $id)->first();
       

        return view('counselor.edit-clientProfile.client_courseInfo', ['clientProfile' => $clientProfile,]);
    }

    public function clientOptionalServices(Request $request)
    {
        $id = $request->input('id');
        $clientProfile = ClientProfile::where('client_id', $id)->first();
        return view('counselor.edit-clientProfile.client_optionalServices',  ['client_profile' => $clientProfile]);
    }

    public function clientPayment(Request $request)
    {
        $id = $request->input('id');
        $clientProfile = ClientProfile::where('client_id', $id)->first();
        return view('counselor.edit-clientProfile.client_paymentInfo', ['client_profile' => $clientProfile]);
    }

    public function clientBudget(Request $request)
    {
        $id = $request->id;
        $budget = Budget::where('client_id', $id)->firstOrFail();
        if($budget){
            return view('counselor.edit-clientProfile.client_budget', compact('budget', 'id'));

        }
       return redirect()->back();
        // return view('counselor.edit-clientProfile.client_budget');
    }
  
}


