@extends('layout.app')
@section('main')
    <div class="container mt-4">


        <h2 style="color: #000b57">@lang('client_sign-up.part4-heading')</h2>

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb mt-2">

                <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

                <li class="breadcrumb-item"><a href="">Client Profile</a></li>

                <li class="breadcrumb-item"><a href="">Legal Representation</a></li>

            </ol>

        </nav>



        <form action="{{ route('client.attorney_information.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
            @csrf


            <div class="row">

                <div class="col-lg-6 ml-3 mb-3">
                    <x-radiobtn label="{{__('client_sign-up.part6-field1')}}:" name="attorney" id1="client_type_of_attorney_a"
                        id2="client_type_of_attorney_p" val1="a" val2="p" radio1="{{__('client_sign-up.part6-field2')}}"
                        radio2="{{__('client_sign-up.part6-field3')}}" value="{{$data['attorney']}}" />
                </div>

            </div>



            <div class="row">

                <div class="col-12 ml-3 my-5">
                    
                    @if ($data['account_type'] === "2")
                        <a href="{{ route('client.client_information2', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-primary">@lang('lang.back')</a>
                    @else
                        <a href="{{ route('client.client_information', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-primary">@lang('lang.back')</a>
                    @endif
                    <input type="submit" name="commit_lr" value="CONTINUE" class="btn btn-primary"
                        data-disable-with="CONTINUE">

                </div>
            </div>

        </form>



    </div>
@endsection
