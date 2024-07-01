@extends('layout.app')

@section('main')
    <div class="container mt-4">

        <h2 style="color: #000b57">@lang('client_sign-up.part5-heading')</h2>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="#">Client Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Client Profile</a></li>
                <li class="breadcrumb-item"><a href="#">Optional Services</a></li>
            </ol>
        </nav>

        <h3 class="mb-3">@lang('client_sign-up.part9-field1')</h3>

        <form action="{{ route('client.optional_services.store', ['locale' => app()->getLocale()]) }}" accept-charset="UTF-8" method="post">
            @csrf
            <div class="row row-cols-1 row-cols-md-2 g-4">

                <div class="col">
                    <div class="card h-100 srv_phone_interview border-0">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid" src="https://completecreditcounseling.org/img/pdf.png">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-10">
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input name="opt_pdf" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_pdf" id="client_srv_phone_interview" {{ !is_null($opt_pdf) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="client_srv_phone_interview">@lang('client_sign-up.pdf-option.label')</label>
                                    </div>
                                    <div>
                                        <b>@lang('client_sign-up.pdf-option.price')</b><br>
                                        @lang('client_sign-up.pdf-option.description')
                                        <br>
                                        <div class="ml-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="en" name="english_lang" id="lang-en" {{ !is_null($english_lang) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="lang-en">@lang('client_sign-up.pdf-option.language.english')</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="es" name="spanish_lang" id="lang-es" {{ !is_null($spanish_lang) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="lang-es">@lang('client_sign-up.pdf-option.language.spanish')</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 srv_cert_by_mail border-0">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid" src="https://completecreditcounseling.org/img/hmail.jpg">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-10">
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input name="opt_mailed" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_mailed" id="client_srv_cert_by_mail" {{ !is_null($opt_mailed) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="client_srv_cert_by_mail">@lang('client_sign-up.mailed-option.label')</label>
                                    </div>
                                    <div class="checkbox-help"><b>@lang('client_sign-up.mailed-option.price')</b><br>
                                        @lang('client_sign-up.mailed-option.description')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 srv_phone_interview border-0">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid" src="https://completecreditcounseling.org/img/phone.jpg">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-10">
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input name="opt_phone" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_phone" id="client_srv_cert_by_phone_interview" {{ !is_null($opt_phone) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="client_srv_cert_by_phone_interview">@lang('client_sign-up.phone-option.label')</label>
                                    </div>
                                    <div class="checkbox-help"><b>@lang('client_sign-up.phone-option.price')</b><br>
                                        @lang('client_sign-up.phone-option.description')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 srv_cert_by_fax border-0">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid" src="https://completecreditcounseling.org/img/fax.png">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-10">
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input name="opt_attorny_fax" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_attorny_fax" id="client_srv_cert_by_fax" {{ !is_null($opt_attorny_fax) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="client_srv_cert_by_fax">@lang('client_sign-up.fax-option.label')</label>
                                    </div>
                                    <div class="checkbox-help"><b>@lang('client_sign-up.fax-option.price')</b><br>
                                        @lang('client_sign-up.fax-option.description')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 srv_cert_by_email border-0">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid" src="https://completecreditcounseling.org/img/email.jpg">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-10">
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input name="opt_email" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_email" id="client_srv_cert_by_email" {{ !is_null($opt_email) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="client_srv_cert_by_email">@lang('client_sign-up.email-option.label')</label>
                                    </div>
                                    <div class="checkbox-help"><b>@lang('client_sign-up.email-option.price')</b><br>
                                        @lang('client_sign-up.email-option.description')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br><br><br>

            <a href="{{ route('client.price_package', ['locale' => app()->getLocale()]) }}" class="btn btn-primary">@lang('lang.back')</a>

            <input type="submit" name="commit_opt" value="@lang('lang.continue')" class="btn btn-primary" data-disable-with="@lang('lang.continue')"><br><br>

        </form>

    </div>
@endsection
