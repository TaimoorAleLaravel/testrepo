@extends('layout.app')

@section('main')
<div class="container mt-4">
    <h2 style="color: #000b57"> @lang('client_sign-up.part1-heading') </h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
<div class="alert alert-warning">
    {{ session('error') }}
</div>
@endif
    <form action="{{ route('client.register.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf
        <div class="row">
            @php
                $email = 'Email';
                $confirmemail = 'Confirm Email';
                $password = 'Password';
                $confirmpassword = 'Confirm Password';
            @endphp

            <div class="col-lg-8 mb-3 ml-3">
                <x-input label="{{ __('client_sign-up.part1-field1') }}" name="client_email" id="email" type="email" value="{{ old('client_email') }}" :pre="$email" required />
                <x-input label="{{ __('client_sign-up.part1-field1') }} ({{ __('client_sign-up.part1-field2') }})" name="confirm_email" id="email-confirm" type="email" value="{{ old('confirm_email') }}" :pre="$confirmemail" required />
                <x-input label="{{ __('client_sign-up.part1-field3') }}" name="client_password" id="password" type="password" value="{{ old('client_password') }}" :pre="$password" required />
                <x-input label="{{ __('client_sign-up.part1-field4') }}" name="confirm_password" id="password-confirm" type="password" value="{{ old('confirm_password') }}" :pre="$confirmpassword" required />
                <button type="submit" class="btn btn-primary custom-btn">@lang('lang.create-account')</button>
                <div class="mt-2">
                    <p>{{ __('client_sign-up.part1-field5') }} <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}" class="link-primary">{{ __('lang.login') }}</a></p>
                </div>
                <div class="mt-4 mb-4 lead">
                    <ul>
                        <li>@lang('client_sign-up.part1-l1')</li>
                        <li>@lang('client_sign-up.part1-l2')</li>
                        <li>@lang('client_sign-up.part1-l3')</li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
