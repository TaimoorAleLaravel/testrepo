@extends('layout.app')
@section('main')

<div class="container mt-4">
    <h2 style="color: #000b57">@lang('client_sign-up.part4-heading')</h2>
    <nav aria-label="breadcrumb">
       <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="">@lang('client_dashboard.dashboard')</a></li>
            <li class="breadcrumb-item"><a href="">@lang('client_dashboard.profile')</a></li>
            <li class="breadcrumb-item"><a href="">@lang('client_dashboard.information')</a></li>
        </ol>
    </nav>
    <span class="fs-3 font-weight-normal" style="font-size:2vw">{{__('client_sign-up.part5-field3')}}</span>

    <form action="{{ route('client.client_information2.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf
        <div class="row mt-2 ml-1">
            <div class="col-lg-5 mb-3 mr-5">
                <x-selectbox label="{{__('inputsname.title')}}" name="title2" id="student_honorific_prefix" disabledOpt="Select Title" :options="config('constants.titles')" value="{{$data['title2']}}" />
                <x-input label="{{__('inputsname.fname')}}*" type="text" name="fname2" id="student_first_name" size="32" maxlength="32" value="{{$data['fname2']}}" />
                <x-input label="{{__('inputsname.mname')}}" type="text" name="mname2" id="student_middle_name" size="32" maxlength="32" value="{{$data['mname2']}}" />
                <x-input label="{{__('inputsname.lname')}}*" type="text" name="lname2" id="student_last_name" size="32" maxlength="32" value="{{$data['lname2']}}" />
                <x-selectbox label="{{__('inputsname.name_suffix')}}" name="name_suffix2" id="student_honorific_suffix" disabledOpt="Select name suffix" :options="config('constants.suffixes')" value="{{$data['name_suffix2']}}"  />    
                <x-input label="{{__('inputsname.dob')}}*" name="dob2" type="date"  id="student_honorific_prefix" min="1910-01-01" max="2008-12-31" value="{{$data['dob2']}}" />
                <x-input label="{{__('client_sign-up.part5-field4')}} {{__('inputsname.ss_num')}}"  type="text" name="ss_num2" id="student_ssn_last_4"  pattern="\d{4}" minlength="4" maxlength="4" size="4"  value="{{$data['ss_num2']}}" />
             </div>

            <div class="col-lg-5 mb-3">
                <x-input label="{{__('inputsname.st_address')}}*" type="text" maxlength="45" size="45" name="st_address2" id="student_street" value="{{$data['st_address2']}}" />
                <x-input  label="{{__('inputsname.city')}}*"  type="text"  maxlength="45" size="45"  name="city2"  id="student_city"  value="{{$data['city2']}}" />
                <div class="mb-3 {{$errors->has('state') ? 'is-invalid' : ''}}">
                    <label class="form-label required" for="student_region_code">{{__('inputsname.state')}}*</label>
                    <select class="form-select @if($errors->first('state2')) is-invalid @endif " name="state2" id="student_region_code" >
                        <option value="null" selected disabled>Select State</option>
                        @foreach($states as $state)
                            <option value="{{$state['abbreviation']}}" {{ ($state['abbreviation'] === $data['state2']) ? 'selected' : '' }}>{{$state['name']}}</option>
                        @endforeach
                    </select>
                    @error('state2') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <x-input  label="{{__('inputsname.zipCode')}}*" type="text" minlength="5" maxlength="10" size="10"  name="zipcode2" pattern="^[0-9]*$"   id="student_postal_code" value="{{$data['zipcode2']}}" />
                <x-input  label="{{__('inputsname.phone')}}*"  type="tel"  minlength="12"  maxlength="12"  size="15"  name="phone2"  id="student_phone_number"  {{-- required="true"  autocomplete="tel"  --}} value="{{$data['phone2']}}" />
            </div>
        </div>
        {{-- <a href="{{ route('client_type_of_account') }}" class="btn btn-primary">BACK</a> --}}

        @if($account_type === 1)
        <a href="{{route('client.account_type' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>
        @else
        <a href="{{route('client.client_information' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>
        @endif

        <button type="submit" class="btn btn-primary" >@lang('lang.continue')</button>
        <br><br>
    </form>

</div>
@endsection
