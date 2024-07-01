@extends('layout.app')

@section('main')
    <div class="container mt-4">
        <span class="h2 text-success font-weight-normal">Edit Payment Information</span>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="clients_online">Clients</a></li>
                <li class="breadcrumb-item"><a href="">John Doe</a></li>
                <li class="breadcrumb-item"><a href="">Edit Payment Information</a></li>
            </ol>
        </nav>

        <form action="{{ route('counsler.editpaymentInfo', ['id' => $client_profile->client_id, 'locale' => app()->getLocale()]) }}" method="POST" class="email-form">
            @csrf
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="mb-6 ml-3">
                        <input type="hidden" name="id" value="{{ $client_profile->client_id }}">

                        <label class="form-label required lead font-weight-normal" for="payment_method">Payment Method</label><br>
                        <select class="form-select required" name="payment_method" id="payment_method">
                            <option disabled>Select payment method</option>
                            <option value="credit_card" {{ $client_profile->payment_method == 'Stripe' ? 'selected' : '' }}>By Card</option>
                            <option value="paypal_account" {{ $client_profile->payment_method == 'Paypal' ? 'selected' : '' }}>By Paypal account</option>
                        </select>
                        <br>
                        <input type="checkbox" name="payment_status" id="paid" {{ $client_profile->payment_status == 'paid' ? 'checked' : '' }}>
                        <label for="paid">Paid</label>
                    </div>
                    <div>
                        <input type="submit" name="commit_edit_payment" value="Save" class="btn btn-primary mt-4">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
