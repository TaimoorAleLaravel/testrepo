@extends('layout.app')
@section('main')

<div class="container mt-4">
    <h2 style="color: #000b57">@lang('client_sign-up.part4-heading')</h2>
    <nav aria-label="breadcrumb">
       <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Client Profile</a></li>
            <li class="breadcrumb-item"><a href="">Client Information</a></li>
        </ol>
    </nav>
    @if($account_type === "1")
    <span class="fs-3 font-weight-normal" style="font-size:2vw">{{__('client_sign-up.part5-field1')}}</span>
    @else
    <span class="fs-3 font-weight-normal" style="font-size:2vw">{{__('client_sign-up.part5-field2')}}</span>
    @endif
    <form action="{{ route('client.client_information.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf
        <div class="row mt-2 ml-1">
            <div class="col-lg-5 mb-3 mr-5">
                <x-selectbox label="{{__('inputsname.title')}}" name="title" id="student_honorific_prefix" disabledOpt="Select Title" :options="config('constants.titles')" value="{{$data['title']}}" />
                <x-input label="{{__('inputsname.fname')}}*" type="text" name="fname" id="student_first_name" size="32" maxlength="32" value="{{$data['fname']}}" />
                <x-input label="{{__('inputsname.mname')}}" type="text" name="mname" id="student_middle_name" size="32" maxlength="32" value="{{$data['mname']}}" />
                <x-input label="{{__('inputsname.lname')}}*" type="text" name="lname" id="student_last_name" size="32" maxlength="32" value="{{$data['lname']}}" />
                <x-selectbox label="{{__('inputsname.name_suffix')}}" name="name_suffix" id="student_honorific_suffix" disabledOpt="Select suffix" :options="config('constants.suffixes')" value="{{$data['name_suffix']}}"  />    
                <x-input label="{{__('inputsname.dob')}}*" name="dob" type="date"  id="student_honorific_prefix" min="1910-01-01" max="2008-12-31" value="{{$data['dob']}}" />
                <x-input label="{{__('client_sign-up.part5-field4')}} {{__('inputsname.ss_num')}}"  type="text" name="ss_num" id="student_ssn_last_4"  pattern="\d{4}" minlength="4" maxlength="4" size="4"  value="{{$data['ss_num']}}" />
             </div>

            <div class="col-lg-5 mb-3">
                <x-input label="{{__('inputsname.st_address')}}*" type="text" maxlength="45" size="45" name="st_address" id="student_street" value="{{$data['st_address']}}" />
                <x-input  label="{{__('inputsname.city')}}*"  type="text"  maxlength="45" size="45"  name="city"  id="student_city"  value="{{$data['city']}}" />
                <div class="mb-3 {{$errors->has('state') ? 'is-invalid' : ''}}">
                    <label class="form-label required" for="student_region_code">{{__('inputsname.state')}}*</label>
                    <select class="form-select @if($errors->first('state')) is-invalid @endif " name="state" id="student_region_code" >
                        <option value="null" selected disabled>Select state</option>
                        @foreach($states as $state)
                            <option value="{{$state['abbreviation']}}" {{ ($state['abbreviation'] === $data['state']) ? 'selected' : '' }}>{{$state['name']}}</option>
                        @endforeach
                    </select>
                    @error('state') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <x-input  label="{{__('inputsname.zipCode')}}*" type="text" minlength="5" maxlength="10" size="10"  name="zipcode" pattern="^[0-9]*$"   id="student_postal_code" value="{{$data['zipcode']}}" />
                <x-input  label="{{__('inputsname.phone')}}*"  type="tel"  minlength="12"  maxlength="12"  size="15"  name="phone"  id="student_phone_number"  {{-- required="true"  autocomplete="tel"  --}} value="{{$data['phone']}}" />
            </div>
        </div>
        {{-- <a href="{{ route('client_type_of_account') }}" class="btn btn-primary">BACK</a> --}}
        
        <a href="{{route('client.account_type' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>

        <button type="submit" class="btn btn-primary" >@lang('lang.continue')</button>
        <br><br>
    </form>

</div>
@endsection
