@extends('layout.app')
@section('main')
<div class="container mt-4">

{{-- {{dd($debtStructure)}} --}}

    <div class="mt-3">
        <span class="h2 text-success font-weight-normal"  >Edit Debt Structure Info</span>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a></li>
                <li class="breadcrumb-item"><a href="">Edit Debt Structure Info</a></li>
            </ol>
        </nav>
    </div>

    <form action="{{ route('counsler.editdebtstructure', ['locale' => app()->getLocale()]) }}" method="POST" class="email-form">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-4 mb-3">
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{  $debtStructure['client_id']  }}">

                    <label class="form-label required" for="client_household_size">Household size</label>
                    <input min="1" max="20" step="1" class="form-control" type="number" value="{{ $debtStructure['household'] }}" name="household" id="client_household_size">
                </div>
            </div>
    
            <div class="col-md-4 mb-3 ml-3">
                <div class="mb-3">
                    <label class="form-label" for="client_credit_card_debt">Credit card debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['cc_debt'] }}" name="cc_debt" id="client_credit_card_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_medical_debt">Medical debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['med_debt'] }}" name="med_debt" id="client_medical_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_unsecured_loan_debt">Unsecured loan debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['ul_debt'] }}" name="ul_debt" id="client_unsecured_loan_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_tax_debt">Tax debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['tax_debt'] }}" name="tax_debt" id="tax_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3 mb-3 ml-3">
                <div class="mb-3">
                    <label class="form-label" for="client_student_loan_debt">Student loan debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['sl_debt'] }}" name="sl_debt" id="client_student_loan_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_car_loan_debt">Car loan debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['cl_debt'] }}" name="cl_debt" id="client_car_loan_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_mortgage1_debt">Mortgage1 debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['mort1_debt'] }}" name="mort1_debt" id="client_mortgage1_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_mortgage2_debt">Mortgage2 debt</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input min="0" max="1000000" step="1" class="form-control" type="number" value="{{ $debtStructure['mort2_debt'] }}" name="mort2_debt" id="client_mortgage2_debt">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="commit_debt" value="SAVE" class="btn btn-primary" data-disable-with="SAVE">
    </form>
    
</div>
@endsection