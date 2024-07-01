@extends('layout.app')
@section('main')
<div>
    <div id="header-carousel" class="carousel slide carousel-fade pointer-event" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('/assets/rashid.webp')}}" alt="Image">

            </div>
        </div>
    </div>



    <div class="row-fluid " style="background-color:#F2F4F8">
        <div class="text-details text-center pt-5 px-1" style="font-size:20px">
            <h3 class="text-dark ">@lang('home.bankruptcy-course')<br> @lang('home.bankruptcy-credit-counseling') </h3>
            <span class="text-dark"><strong>@lang('home.available-course')</strong> </span>
            <span class="text-dark" id="spavailability"><strong>@lang('home.spavailability')</strong> </span>
        </div>
    </div>





       
 
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center mt-5">
                <img src="{{asset('/assets/price-removebg-preview.webp')}}" alt="" style="width: 300px; height: 300px;" class="pricepic">
            </div>
            <div class="col-md-4 d-flex justify-content-center pb-3">
                <div class="bgfordiv" style="width: 350px; max-width: 100%;">
                    <section class="info-box text-center">
                        <div class="d-grid gap-2">
                            <a class="btn btn-lg text-light mb-3" style="background-color: #000b57; border-radius: 6px; width: 100%;" href="client/client_disclosure">New Client</a>
                            <a class="btn btn-lg text-light mb-3" style="background-color: #000b57; border-radius: 6px; width: 100%;" href="client/client_login">Returning Client</a>
                            <a class="btn btn-lg text-light" style="background-color: #000b57; border-radius: 6px; width: 100%;" href="">Attorney Login</a>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mt-5">
                <img src="{{asset('/assets/us-removebg-preview.webp')}}" alt="" style="width: 300px; height: 300px;" class="pricepictwo">
            </div>
        </div>
    </div>
    

    <div class="row-fluid mt-4">
        <div class="col d-flex justify-content-center mt-4">
            <ul class="mt-4 mb-4 points" style="font-size:20px">
                <li class="text-dark fs-4">@lang('home.home-list1-1') <span class="text-danger"> @lang('home.home-list1-2') </span></li>
                <li class="text-dark fs-4">@lang('home.home-list2')</li>
                <li class="text-dark fs-4">@lang('home.home-list3')</li>
                <li class="text-dark fs-4">@lang('home.home-list4')</li>
                <li class="text-dark fs-4">@lang('home.home-list5')</li>
                <li class="text-dark fs-4">@lang('home.home-list6')</li>
                <li class="text-dark fs-4">@lang('home.home-list7')</li>

            </ul>
        </div>
    </div>

    <div class="row w-100">
        <div class="col d-flex justify-content-center">
            <a href="{{route('client.register' , ['locale' => app()->getLocale()])}}" class="btn btn-danger px-4 py-3 py-md-3 px-md-5 me-3"
                style="border-radius:6px">@lang('home.register-text')</a>
        </div>
    </div>
    <br>
    <br>


</div>
@endsection