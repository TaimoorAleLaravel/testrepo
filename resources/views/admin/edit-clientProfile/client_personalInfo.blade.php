@extends('layout.app')

@section('main')
    <div class="container mt-4">

        {{-- Uncomment the line below if you want to debug and see the clientProfile data --}}
        {{-- {{ dd($clientProfile) }} --}}

        <div class="mt-3">
            <span class="h2 text-success font-weight-normal">Edit Client Info</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                    <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a></li>
                    <li class="breadcrumb-item"><a href="">Edit Client Info</a></li>
                </ol>
            </nav>
        </div>

        <form action="{{ route('admin.editpersonalInfo', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}" method="POST" class="email-form">
            @csrf
            <div class="row mt-2 ml-1">
                <div class="col-lg-5 mb-3 mr-5">
                    <div class="mb-3">
                        <label class="form-label required" for="student_first_name">First name*</label>
                        <input maxlength="32" required="required" class="form-control" size="32" type="text"
                            value="{{ $clientProfile['fname'] }}" name="fname" id="student_first_name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="student_middle_name">Middle name</label>
                        <input maxlength="32" class="form-control" size="32" type="text" name="mname"
                            id="student_middle_name" value="{{ $clientProfile['mname'] }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label required" for="student_last_name">Last name*</label>
                        <input maxlength="32" required="required" class="form-control" size="32" type="text"
                            value="{{ $clientProfile['lname'] }}" name="lname" id="student_last_name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label required" for="student_date_of_birth">Date of birth*</label>
                        <input start_year="2008" end_year="1900" min="1900-01-01" required="required" class="form-control"
                            type="date" name="dob" id="student_date_of_birth" value="{{ $clientProfile['dob'] }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label required" for="student_ssn_last_4">Last 4 digits of Social Security Number*</label>
                        <input size="4" minlength="4" maxlength="4" pattern="\d{4}" data-type="ssn4" required="required"
                            class="form-control" type="text" name="ss_num" id="student_ssn_last_4" value="{{ $clientProfile['ss_num'] }}">
                    </div>
                </div>
                <div class="col-lg-5 mb-3">
                    <div class="mb-3">
                        <label class="form-label required" for="student_street">Street address*</label>
                        <input maxlength="45" required="required" class="form-control" size="45" type="text"
                            value="{{ $clientProfile['st_address'] }}" name="st_address" id="student_street">
                    </div>

                    <div class="mb-3">
                        <label class="form-label required" for="student_phone_number">Phone number*</label>
                        <input size="15" minlength="12" maxlength="12" autocomplete="tel" required="required" class="form-control"
                            type="tel" name="phone" id="telle" value="{{ $clientProfile['phone'] }}">
                    </div>
                </div>
            </div>

            <input type="submit" name="commit_info" value="SAVE" class="btn btn-primary ml-1">
            <br><br>
        </form>
    </div>
@endsection
