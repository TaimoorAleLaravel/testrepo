@extends('layout.app')

@section('main')

<div class="container mt-4">
    <div class="mt-3">
        <span class="h2 text-success font-weight-normal">Edit Attorney Info</span>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif
      
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a></li>
                <li class="breadcrumb-item"><a href="">Edit Attorney Info</a></li>
            </ol>
        </nav>
    </div>

    <form action="{{ route('counsler.editattorneyInfo', ['locale' => app()->getLocale()]) }}" accept-charset="UTF-8" method="post">
        @csrf
        <div class="row ml-1">
            <div class="col-lg-5 mb-3 mt-2">
                <div class="mb-3">
                    <input type="hidden" name="client_id" value="{{ $client_id }}">

                    <label class="form-label required" for="client_attorney_attributes_firm_name">Attorney's law firm name*</label>
                    <input maxlength="128" required="required" class="form-control" size="128" type="text" value="{{ $data->att_firm_name ?? '' }}" name="att_firm_name" id="client_attorney_attributes_firm_name">
                </div>
                <div class="mb-3">
                    <label class="form-label required" for="client_attorney_attributes_first_name">Attorney's first name*</label>
                    <input maxlength="32" required="required" class="form-control" size="32" type="text" value="{{ $data->att_fname ?? '' }}" name="att_fname" id="client_attorney_attributes_first_name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_attorney_attributes_middle_name">Attorney's middle name</label>
                    <input maxlength="32" class="form-control" size="32" type="text" value="{{ $data->att_mname ?? '' }}" name="att_mname" id="client_attorney_attributes_middle_name">
                </div>
                <div class="mb-3">
                    <label class="form-label required" for="client_attorney_attributes_last_name">Attorney's last name*</label>
                    <input maxlength="32" required="required" class="form-control" size="32" type="text" value="{{ $data->att_lname ?? '' }}" name="att_lname" id="client_attorney_attributes_last_name">
                </div>
            </div>
            <div class="col-lg-5 mb-3 ml-5 mt-2">
                <div class="mb-3">
                    <label class="form-label required" for="client_attorney_attributes_email_address">Attorney's email address*</label>
                    <input maxlength="64" required="required" class="form-control" size="64" type="email" value="{{ $data->att_email ?? '' }}" name="att_email" id="client_attorney_attributes_email_address">
                </div>
                <div class="mb-3">
                    <label class="form-label required" for="client_attorney_attributes_phone_number">Attorney's phone number*</label>
                    <input size="15" minlength="10" maxlength="12" autocomplete="tel" required="required" class="form-control" type="tel" value="{{ $data->att_phone ?? '' }}" name="att_phone" id="telle">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="client_attorney_attributes_fax_number">Attorney's fax number</label>
                    <input size="15" minlength="10" maxlength="12" autocomplete="tel" class="form-control" type="tel" value="{{ $data->att_fax ?? '' }}" name="att_fax" id="client_attorney_attributes_fax_number">
                </div>
            </div>
        </div>

        <input type="submit" name="commit_att" value="SAVE" class="btn btn-primary" data-disable-with="SAVE">
    </form>
    <br><br>
</div>

@endsection
