@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <div class="container">

        <article class="course reason">
{{-- {{dd(courseReasons)}} --}}
                        
              <div class="mt-3">
                    <span class="h2 text-success font-weight-normal"  >Edit Reasons Info</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John  Doe</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Reasons Info</a></li>
                        </ol>
                    </nav>
                </div>


            
            

                <form action="{{ route('admin.editcoursereason', ['locale' => app()->getLocale()]) }}" method="post" class="email-form">
                    @csrf                
                <h5 class="mb-3">Reasons</h5>
              
                <input type="hidden" name="id" value="{{ $courseReason->client_id }}">

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->garnishment == 1 ? 'checked' : '' }} name="garnishment" id="client_reason_json_0">
                        <label class="form-check-label" for="client_reason_json_0">Garnishment</label>
                    </div>
                  
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->repossession == 1 ? 'checked' : '' }} name="repossession" id="client_reason_json_0">
                        <label class="form-check-label" for="client_reason_json_0">Repossession</label>
                    </div>


                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->foreclosure == 1 ? 'checked' : '' }} name="foreclosure" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_2">Foreclosure</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->lawsuit == 1 ? 'checked' : '' }} name="lawsuit" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_3">Lawsuit</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->illness_disability == 1 ? 'checked' : '' }} name="illness_disability" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_4">Illness / Disability</label>

                    </div>

                    <div class="form-check">

                        {{-- <input class="form-check-input" type="checkbox" value="Divorce" checked="" name="divorce" id="client_reason_json_5"> --}}
                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->divorce == 1 ? 'checked' : '' }} name="divorce" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_5">Divorce</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->Job_Loss == 1 ? 'checked' : '' }} name="Job_Loss" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_6">Job Loss</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->c_c_debt == 1 ? 'checked' : '' }} name="c_c_debt" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_7">Credit Card Debt</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->g_debt == 1 ? 'checked' : '' }} name="g_debt" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_8">Gambling Debt</label>

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $courseReason->client_id }}" {{ $courseReason->other == 1 ? 'checked' : '' }} name="other" id="client_reason_json_0">

                        <label class="form-check-label" for="client_reason_json_9">Other</label>

                    </div>

                </div>


                <input type="submit" name="commit_reasons" value="SAVE" class="btn btn-primary" data-disable-with="SAVE">

            </form>
            
        </article>





    </div>

    </main>

    @endsection