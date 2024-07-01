@extends('layout.app')
@section('main')
<div class="container mt-4">

                
    <h2 style="color: #000b57">Client Account Registration</h2>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mt-2">

            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

            <li class="breadcrumb-item"><a href="">Client Profile</a></li>

            <li class="breadcrumb-item"><a href="">Attorney Information</a></li>

        </ol>

    </nav>

    <span class="text-weight-bold" style="font-size:2vw">Attorney information</span>

                    <form action="../process/process_client_att_info.php" accept-charset="UTF-8" method="post">

        <div class="row ml-1">

            <div class="col-lg-5 mb-3 mt-2">

                <div class="mb-3">

                    <label class="form-label required" for="client_attorney_attributes_firm_name">Attorney's law firm name*</label>

                    <input maxlength="128" required="required" class="form-control" size="128" type="text" value="" name="att_firm_name" id="client_attorney_attributes_firm_name">

                </div>

                <div class="mb-3"><label class="form-label" for="client_attorney_attributes_honorific_prefix">Attorney's title</label>

                    <select class="form-control" name="att_title" id="client_attorney_attributes_honorific_prefix">

                        <option value="" label=" "></option>

                        <option value="Mr.">Mr.</option>

                        <option value="Ms.">Ms.</option>

                    </select>

                </div>`

                <div class="mb-3">

                    <label class="form-label required" for="client_attorney_attributes_first_name">Attorney's first name*</label>

                    <input maxlength="32" required="required" class="form-control" size="32" type="text" value="" name="att_fname" id="client_attorney_attributes_first_name">
                </div>

                <div class="mb-3"><label class="form-label" for="client_attorney_attributes_middle_name">Attorney's middle name</label>

                    <input maxlength="32" class="form-control" size="32" type="text" name="att_mname" id="client_attorney_attributes_middle_name">
                </div>

                <div class="mb-3"><label class="form-label required" for="client_attorney_attributes_last_name">Attorney's last name*</label>

                    <input maxlength="32" required="required" class="form-control" size="32" type="text" value="" name="att_lname" id="client_attorney_attributes_last_name">
                </div>

                <div class="mb-3"><label class="form-label" for="client_attorney_attributes_honorific_suffix">Attorney's name suffix</label>

                    <select class="form-control" name="att_name_suffix" id="client_attorney_attributes_honorific_suffix">
                        <option value="" label=" "></option>

                        <option value="Sr.">Sr.</option>

                        <option value="Jr.">Jr.</option>

                        <option value="I">I</option>

                        <option value="II">II</option>

                        <option value="III">III</option>

                        <option value="IV">IV</option>

                        <option value="V">V</option>

                        <option value="VI">VI</option>

                        <option value="VII">VII</option>

                        <option value="VIII">VIII</option>
                    </select>
                </div>

            </div>

            <div class="col-lg-5 mb-3 ml-5 mt-2">



                <div class="mb-3"><label class="form-label required" for="client_attorney_attributes_email_address">Attorney's email address*</label>

                    <input maxlength="64" required="required" class="form-control" size="64" type="email" name="att_email" id="client_attorney_attributes_email_address">
                </div>

                <div class="mb-3"><label class="form-label required" for="client_attorney_attributes_phone_number">Attorney's phone number*</label>

                    <input size="15" minlength="12" maxlength="12" autocomplete="tel" required="required" class="form-control" type="tel" name="att_phone" id="telle">
                </div>

                <div class="mb-3"><label class="form-label" for="client_attorney_attributes_fax_number">Attorney's fax number</label>

                    <input size="15" minlength="10" maxlength="20" autocomplete="tel" class="form-control" type="tel" name="att_fax" id="client_attorney_attributes_fax_number">
                </div>

            </div>

        </div>



        <a href="{{route('client.account_type' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>

        <input type="submit" name="commit_att" value="CONTINUE" class="btn btn-primary" data-disable-with="CONTINUE">

        <br><br>

    </form>



</div>
@endsection