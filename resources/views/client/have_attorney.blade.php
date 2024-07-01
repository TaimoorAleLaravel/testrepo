@extends('layout.app')
@section('main')
    <div class="container mt-4">
        <h2 style="color: #000b57">@lang('client_sign-up.part4-heading')</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Client Profile</a></li>
                <li class="breadcrumb-item"><a href="">Attorney Information</a></li>
            </ol>
        </nav>
        <span class="text-weight-bold" style="font-size:2vw">Attorney information</span>
        <form action="{{ route('client.have_attorney-store', ['locale' => app()->getLocale()]) }}" accept-charset="UTF-8" method="post">
            @csrf
            <div class="row ml-1">
                <div class="col-lg-5 mb-3 mt-2">
                    <x-input label="{{__('inputsname.att_firm_name')}}*" type="text" name="att_firm_name" id="client_attorney_attributes_firm_name" size="128" maxlength="128" value="{{ $data['att_firm_name'] }}" />
                    <x-selectbox label="{{__('inputsname.att_title')}}" name="att_title" id="client_attorney_attributes_honorific_prefix" disabledOpt="Select Title" :options="config('constants.titles')" value="{{$data['att_title']}}" />
                    <x-input label="{{__('inputsname.att_fname')}}*" type="text" name="att_fname" id="client_attorney_attributes_first_name" size="32" maxlength="32" value="{{ $data['att_fname'] }}" />    
                    <x-input label="{{__('inputsname.att_mname')}}" type="text" name="att_mname" id="client_attorney_attributes_middle_name" size="32" maxlength="32" value="{{ $data['att_fname'] }}" />
                    <x-input label="{{__('inputsname.att_lname')}}*" type="text" name="att_lname" id="client_attorney_attributes_last_name" size="32" maxlength="32" value="{{ $data['att_fname'] }}" />
                    <x-selectbox label="{{__('inputsname.att_name_suffix')}}" name="att_name_suffix" id="client_attorney_attributes_honorific_suffix" disabledOpt="Select suffix" :options="config('constants.suffixes')" value="{{$data['att_name_suffix']}}"  />
                </div>
                <div class="col-lg-5 mb-3 ml-5 mt-2">
                    <x-input label="{{__('inputsname.att_email')}}*" type="email" name="att_email"
                    id="client_attorney_attributes_first_name" size="64" maxlength="64"
                    value="{{ $data['att_email'] }}" />
                    <x-input label="{{__('inputsname.att_phone')}}*" type="tel" name="att_phone"
                    id="telle" size="32" maxlength="32"
                    value="{{ $data['att_phone'] }}" />
                    
                    <x-input label="{{__('inputsname.att_fax')}}" type="tel" name="att_fax"
                    id="client_attorney_attributes_fax_number" size="32" maxlength="32" min="10" max=20 size="15"
                    value="{{ $data['att_fax'] }}" />
                   
                </div>
            </div>
            <a href="{{ route('client.attorney_information', ['locale' => app()->getLocale()]) }}"
                class="btn btn-primary">@lang('lang.back')</a>
            <input type="submit" name="commit_att" value="CONTINUE" class="btn btn-primary"
                data-disable-with="CONTINUE">
            <br><br>
        </form>
    </div>
@endsection
