@extends('layout.app')
@section('main')
    <style>
        .card {
            border-width: 2px;
        }

        .card-header {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        h4 {
            margin-bottom: 2px;
        }

        .package {
            cursor: pointer;
        }

        .package.selected {
            border: 2px solid #0013a29d;
        }
  
    </style>
    <div class="container mt-4">
        <h2 style="color: #000b57">@lang('client_sign-up.part5-heading')</h2>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="#">Client Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Client Profile</a></li>
                <li class="breadcrumb-item"><a href="#">Packages</a></li>
            </ol>
        </nav>

        <h2 style="color: #000b57">@lang('client_sign-up.part8-field1')</h2>
        <h3 class="lead mt-3 mb-3 font-weight-bold">@lang('client_sign-up.part8-field2')</h3>

        <form method="post" action="{{ route('client.price_package.store', ['locale' => app()->getLocale()]) }}" class="form group mt-4">
            @csrf
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3 mb-3 plans">
                <div class="col">
                    <div class="m-2 card h-100 package basic  {{ ($pkg == 1)? 'selected' : '' }}  " data-name="basic" for="basic">
                        <div class="card-header">
                            <input type="radio" value="1" id="basic" wire:model="package" name="package" {{ ($pkg == 1)? 'checked' : '' }}>
                            <h4>@lang('client_sign-up.part8-field3')</h4>
                        </div>
                        <div class="card-body ">
                            <img alt="Image: Basic Package" width="100%" height="230px" class="mx-auto d-block mb-2"
                                src="https://completecreditcounseling.org/img/basic_pack.jpg">
                            <ul>
                                <li>@lang('client_sign-up.part8-l1')</li>
                                <li>@lang('client_sign-up.part8-l2')</li>
                                <li>@lang('client_sign-up.part8-l3')</li>
                                <li>@lang('client_sign-up.part8-l4')</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><strong>@lang('client_sign-up.part8-field6')</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="m-2 card h-100 package regular {{ ($pkg == 2)? 'selected' : '' }} " data-name="regular">
                        <div class="card-header">
                            <input type="radio" value="2" id="audio" wire:model="package" name="package" {{ ($pkg == 2)? 'checked' : '' }}>
                            <h4>@lang('client_sign-up.part8-field4')</h4>
                        </div>
                        <div class="card-body">
                            <img alt="Image: Regular Package" width="100%" height="230px" class="mx-auto d-block mb-2"
                                src="https://completecreditcounseling.org/img/audio_pack.png">
                            <ul>
                                <li>@lang('client_sign-up.part8-l5')</li>
                                <li>@lang('client_sign-up.part8-l6')</li>
                                <li>@lang('client_sign-up.part8-l7')</li>
                                <li>@lang('client_sign-up.part8-l8')</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><strong>@lang('client_sign-up.part8-field7')</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="m-2 card h-100 package premium {{ ($pkg == 3)? 'selected' : '' }}" data-name="premium">
                        <div class="card-header">
                            <input type="radio" value="3" id="video" wire:model="package" name="package" {{ ($pkg == 3)? 'checked' : '' }} >
                            <h4>@lang('client_sign-up.part8-field5')</h4>
                        </div>
                        <div class="card-body">
                            <img alt="Image: Premium Package" width="100%" height="230px" class="mx-auto d-block mb-2"
                                src="https://completecreditcounseling.org/img/video_pack.jpg">
                            <ul>
                                <li>@lang('client_sign-up.part8-l9')</li>
                                <li>@lang('client_sign-up.part8-l10')</li>
                                <li>@lang('client_sign-up.part8-l11')</li>
                                <li>@lang('client_sign-up.part8-l12')</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><b>@lang('client_sign-up.part8-field8')</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <h3 class="lead mt-3 mb-3 font-weight-bold">@lang('client_sign-up.part8-field9')</h3>

            <div class="row ml-2 justify-content-end">
                <div class="col-md-4 col-sm-6 mb-4 mr-3 mt-3">
                    <h5 class="mb-3">@lang('client_sign-up.part8-field10')</h5>
                    <p>@lang('client_sign-up.part8-field11')</p>
                    <audio id="audioplayer" controls controlslist="nodownload" preload class="w-100 mb-3">
                        <source src="../audio/sample.mp3" type="audio/mpeg">
                    </audio>
                </div>

                <div class="col-md-4 col-sm-6 mb-4 videosample mt-3">
                    <h5 class="mb-3">@lang('client_sign-up.part8-field12')</h5>
                    <p>@lang('client_sign-up.part8-field13')</p>
                    <div>
                        <video width="100%" height="300" controls controlslist="nodownload">
                            <source src="../videos/English/sample.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 my-5 ml-3">
                    @if($attorny  == 'a')
                    <a href="{{ route('client.have_attorney', ['locale' => app()->getLocale()]) }}"
                        class="btn btn-primary">@lang('lang.back')</a>
                    @else
                    <a href="{{ route('client.attorney_information', ['locale' => app()->getLocale()]) }}"
                        class="btn btn-primary">@lang('lang.back')</a>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
                </div>
            </div>
        </form>
    </div>
@endsection

{{-- @section('script')
<script>
    $(document).ready(function() {
        $('.package').click(function() {
            $('.package').removeClass('selected');
            $(this).addClass('selected');
            $('input[name="pkg"]').val($(this).find('input[type="radio"]').prop('checked', true).val());
           
        });
    });
</script>
@endsection --}}
