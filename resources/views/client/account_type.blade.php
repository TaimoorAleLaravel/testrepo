
@extends('layout.app')
@section('main')
<div class="container mt-4">
    <h2 style="color: #000b57">@lang('client_sign-up.part4-heading')</h2>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mt-2">

            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

            <li class="breadcrumb-item"><a href="">Client Profile</a></li>

            <li class="breadcrumb-item"><a href="">Type of Account</a></li>

        </ol>

    </nav>
    <form action="{{ route('client.account_type.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf  
              <div class="row ml-1">
            <div class="col-lg-6 mb-3">
                <x-radiobtn label="{{__('client_sign-up.part4-field1')}} " name="account_type" id1="account_type_opt1" id2="account_type_opt2" val1="1" val2="2" radio1="{{__('client_sign-up.part4-field2')}}" radio2="{{__('client_sign-up.part4-field3')}}" value="{{$account_type}}" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-3 my-5">

                <a href="{{route('client.household_size' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>


                <button type="submit" class="btn btn-primary" >@lang('lang.continue')</button>

            </div>
        </div>
    </form>
</div>
@endsection