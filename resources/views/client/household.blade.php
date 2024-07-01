@extends('layout.app')
@section('main')
<div class="container mt-4">
        {{-- display success message of account creation --}}
    <h2 style="color: #000b57">@lang('client_sign-up.part3-heading')</h2>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mt-2">

            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

            <li class="breadcrumb-item"><a href="">Client Profile</a></li>

            <li class="breadcrumb-item"><a href="">Household Size</a></li>

        </ol>
    </nav>
    <form action="{{ route('client.household_size.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf  
        <div class="row ml-1">

            <div class="col-lg-6 mb-3">
                <div class="mb-3">
                    <x-input label="{{ __('client_sign-up.part3-field1') }}" name="household" id="client_household_size" type="number" pattern="[1-9]|1[0-5]"  max="15" min="1" required="1" value="{{$household}}"  />
                </div>
            </div>
        </div>
        {{-- <input type="hidden" name="client_id" value="{{ $client }}"> --}}
        <span class="lead">@lang('client_sign-up.part3-field2')<p></p>
            <div class="row">
                <div class="col-12 ml-3 my-5">
                    <a href="{{route('client.court_district' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary" >@lang('lang.back')</a>
                    <button type="submit" class="btn btn-primary" >@lang('lang.continue')</button>
                </div>
            </div>
        </span>
    </form>
</div>
@endsection