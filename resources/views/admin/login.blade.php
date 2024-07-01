@extends('layout.app')

@section('main')
  <style>

        .close {
            background: transparent;
        }

    </style>
    <div class="container mt-4">
        <h2 style="color: #000b57"> Admin Login </h2>
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

        <form action="{{ route('admin.login.store', ['locale' => app()->getLocale()]) }}" method="POST"
            class="from group mt-4">
            @csrf

            <div class="row">


                @if ($errors->first('invalid'))
                <div class="col-lg-8 ml-3 mb-3">
                    <div
                        class="alert alert-danger alert-dismissible fade show d-flex justify-content-between p-1 px-3 mx-auto w-100 w-lg-75">
                        <p  class="m-0 fs-5">Email or Password is wrong.</p>
                        <span style="font-size:22px" class="m-0 " data-bs-dismiss="alert" aria-hidden="true" aria-label="Close">&times;</span>
                        
                    </div>
                </div>
                @endif
                
                
                <div class="col-lg-8 mb-3 ml-3">
                    <x-input label="{{ __('client_sign-up.part1-field1') }}" name="email" id="email" type="email"
                        value="{{ old('email') }}" />
                    <x-input label="{{__('inputsname.password')}}" name="password" id="password" type="password"
                        error_msg="this is erorr" />
                    <button type="submit" class="btn btn-primary custom-btn">Login</button>
                    <div class="mt-2">
                        {{-- <p>{{__('client_sign-up.account_yet')}} <a
                                href="{{ route('client.register', ['locale' => app()->getLocale()]) }}"
                                class="ink-primary">{{__('lang.signup')}}</a></p> --}}
                    </div>
                    {{-- <div class="mt-4 mb-4 lead">
                        <ul>
                            <li> @lang('client_sign-up.part1-l1') </li>
                            <li> @lang('client_sign-up.part1-l2')</li>
                            <li>
                                @lang('client_sign-up.part1-l3')
                            </li>
                        </ul>
                    </div> --}}
                </div>

            </div>
        </form>

    </div>
@endsection
