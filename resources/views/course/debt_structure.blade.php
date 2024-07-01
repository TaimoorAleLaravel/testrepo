@extends('layout.app')
@section('main')
<div class="container mt-4">
    <h2 style="color: #000b57">Debt Structure</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="client_dashboard">Client Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
            <li class="breadcrumb-item"><a href="">Debt Structure</a></li>
        </ol>
    </nav>
    <p><img alt="Image: Video" class="videostill border img-fluid"
            src="https://completecreditcounseling.org/img/debt_structure.jpg"></p>
    <p>Fill out the form on this page carefully and take your time. Make sure you double-check
        the information you submit before proceeding. If any of the information is incorrect,
        you will be required by a counselor to go back and correct it, and this may cause
        your counseling session to take much longer. The information will not be saved until
        you click "Continue” at the bottom of the page.
        <b>Please keep track of the information you provide here as you may be asked to verify
            it during the Chat Session at the end of the course.</b>
    </p>
    <p>Please enter only whole numbers (do not include cents or decimals).</p>
    <form class="button_to" method="POST" action="{{ route('form.debt_structure', ['locale' => app()->getlocale()]) }}">
        @csrf       
         <div class="row justify-content-md-start">
            
            {{-- <div class="col-md-4 mb-3">
                <x-input label="Household size" name="household" id="client_household_size" type="number"
                    min="1" max="20" step="1" value="12" placeholder="0" />
            </div>
            <div class="col-md-7 mb-3 ml-3 ">
                <div class="row">
                    <div class="col-md-7">
                        <x-input label="Credit card debt" type="number" name="cc_debt"
                            id="client_credit_card_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />
                    </div>
                    <div class="col-md-5">
                        <x-input label="Student loan debt" type="number" name="sl_debt"
                            id="client_student_loan_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />

                    </div>
                    <div class="col-md-7">
                        <x-input label="Medical debt" type="number" name="med_debt"
                            id="client_medical_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />


                    </div>
                    <div class="col-md-5">

                        <x-input label="Car loan debt" type="number" name="cl_debt"
                            id="client_car_loan_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />
                    </div>

                    <div class="col-md-7">
                        <x-input label="Unsecured loan debt" type="number" name="ul_debt"
                            id="client_unsecured_loan_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />
                    </div>
                    <div class="col-md-5">
                        <x-input label="Mortgage 1 debt" type="number" name="mort1_debt"
                            id="client_mortgage1_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />
                    </div>
                    <div class="col-md-7">
                        <x-input label="Tax debt" type="number" name="tax_debt" id="client_tax_debt"
                            min="0" max="1000000" placeholder="0" step="1" pre="$"
                            post=".00" />

                    </div>
                    <div class="col-md-5">
                        <x-input label="Mortgage 2 debt" type="number" name="mort2_debt"
                            id="client_mortgage2_debt" min="0" max="1000000" placeholder="0"
                            step="1" pre="$" post=".00" />
                    </div>
                </div>
            </div> --}}

            <div class="col-md-4">
                <x-input label="Household size" name="household" id="client_household_size" type="number"
                min="1" max="20" step="1" value="12" placeholder="0" />
            </div>
            <div class="col-md-4 mb-3 ml-3">
                <x-input  label="Credit card debt" type="number" name="cc_debt" id="client_credit_card_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Medical debt" type="number" name="med_debt" id="client_medical_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Unsecured loan debt" type="number" name="ul_debt" id="client_unsecured_loan_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Tax debt" type="number" name="tax_debt" id="client_tax_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
            </div>
            <div class="col-md-3 mb-3 ml-3">
                <x-input  label="Student loan debt" type="number" name="sl_debt" id="client_student_loan_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Car loan debt" type="number" name="cl_debt" id="client_car_loan_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Mortgage 1 debt" type="number" name="mort1_debt" id="client_mortgage1_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
                <x-input  label="Mortgage 2 debt" type="number" name="mort2_debt" id="client_mortgage2_debt" min="0" max="1000000" placeholder="0" step="1" pre="$" post=".00" />
            </div>

        </div>

        <input type="hidden" name="progress" value="30">
        <button class="btn btn-primary">@lang('lang.back')</button>
        <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>

    </form>

    <div class="progress my-5" style="height:1.5rem;">
        <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 30.0%" aria-valuemin="0"
            aria-valuemax="16" aria-valuenow="4">
        </div>
    </div>
</div>
@endsection