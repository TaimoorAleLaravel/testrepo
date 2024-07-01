@extends('layout.app')
@section('main')
    <div class="container mt-4">
        <h2 style="color: #000b57">@lang('client_sign-up.part5-heading')</h2>

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb mt-2">

                <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

                <li class="breadcrumb-item"><a href="">Client Profile</a></li>

                <li class="breadcrumb-item"><a href="">Method of Payment</a></li>

            </ol>

        </nav>



        <form action="{{ route('client.payment_method.store', ['locale' => app()->getLocale()]) }}" accept-charset="UTF-8"
            method="post">
            @csrf
            <div class="row ml-1">

                <div class="col-xl-4 col-lg-5 mb-3">

                    <h5 class="mb-3 label required">@lang('client_sign-up.part10-heading'):</h5>

                    <div class="mb-3">

                        <div class="form-check"><input class="form-check-input" type="radio" value="credit_card"
                                name="payment_method" id="client_payment_method_credit_card"><label class="form-check-label"
                                for="client_payment_method_credit_card">@lang('client_sign-up.part10-label1')</label></div>

                        <div class="form-check"><input class="form-check-input" type="radio" value="paypal_account"
                                name="payment_method" id="client_payment_method_paypal_account"><label
                                class="form-check-label" for="client_payment_method_paypal_account">@lang('client_sign-up.part10-label2')</label></div>

                        <div class="form-check"><input class="form-check-input" type="radio" value="money_order"
                                name="payment_method" id="client_payment_method_money_order"><label class="form-check-label"
                                for="client_payment_method_money_order">@lang('client_sign-up.part10-label3')</label></div>

                        <div class="form-check"><input class="form-check-input" type="radio" value="no_cost"
                                name="payment_method" id="client_payment_method_no_cost"><label class="form-check-label"
                                for="client_payment_method_no_cost">@lang('client_sign-up.part10-label4')</label></div>

                    </div>

                    <div class="row">

                        <div class="col-12 ml-3 my-5">

                            <a href="{{ route('client.optional_services', ['locale' => app()->getLocale()]) }}"
                                class="btn btn-primary">BACK</a>

                            <input type="submit" name="commit_top" value="CONTINUE" class="btn btn-primary">

                        </div>

                    </div>

                </div>



                <div class="col-xl-8 col-lg-7 mb-3">


                    <div class="alert alert-info payment d-none" id="paypal_account_info">

                        <h5>@lang('client_sign-up.part10-f1')</h5>
                        <p></p>

                    </div>

                    <div class="alert alert-info payment d-none" id="money_order_info">

                        @lang('client_sign-up.money_order')
                    </div>
                    <div class="alert alert-info payment d-none" id="no_cost_info">
                        @lang('client_sign-up.waiving_tuition_policy')
                    </div>

                </div>

            </div>

        </form>

    </div>


    <script>
        let inputs = document.querySelectorAll('input[type="radio"]');

        function setradio(parameter = '') {
            document.getElementById('no_cost_info').classList.add('d-none');
            document.getElementById('money_order_info').classList.add('d-none');
            document.getElementById('paypal_account_info').classList.add('d-none');
            if (parameter !== '') {
                document.getElementById(parameter).classList.remove('d-none');
            }
        }

        inputs.forEach(input => {
            input.addEventListener('click', function() {
                if (document.getElementById('client_payment_method_money_order').checked) {
                    setradio('money_order_info');
                } else if (document.getElementById('client_payment_method_paypal_account').checked) {
                    setradio('paypal_account_info');
                } else if (document.getElementById('client_payment_method_no_cost').checked) {
                    setradio('no_cost_info');
                } else {
                    setradio();
                }
            });
        });
    </script>
@endsection
