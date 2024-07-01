@extends('layout.app')
@section('main')
    <main class="bg-white min-vh-100">
        <!---------------------------------------------------- English --------------------------------------------------->
        <div class="container">
            <article class="course foreclosure">
                <div class="mt-3">
                    <h2 style="color: #000b57">Foreclosure</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                            <li class="breadcrumb-item"><a href="">Foreclosure</a></li>
                        </ol>
                    </nav>
                </div>
                <img alt="Image: Video" class="videostill border img-fluid"
                    src="https://completecreditcounseling.org/img/foreclouser.jpg">
                <br><br>
                <form action="" accept-charset="UTF-8" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 mb-3 ml-3">
                            <h5 class="mb-3">Has the Foreclosure already occurred?</h5>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="1" name="f_c_occurred"
                                        id="client_foreclosure_occurred_true">
                                    <label class="form-check-label" for="client_foreclosure_occurred_true">Yes, the
                                        foreclosure has already occurred.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="0" 
                                        name="f_c_occurred" id="client_foreclosure_occurred_false">
                                    <label class="form-check-label" for="client_foreclosure_occurred_false">No, the
                                        foreclosure has not yet occurred.</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 ml-5">
                            <div id="client_foreclosure_to_keep_input">
                                <h5 class="mb-3">Do you plan on keeping the property?</h5>
                                <div class="mb-3">
                                    <!--<label class="form-label visually-hidden" for="client_foreclosure_to_keep">Foreclosure to keep</label>-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="0" name="f_c_keep"
                                            id="client_foreclosure_to_keep_false">
                                        <label class="form-check-label" for="client_foreclosure_to_keep_false">I plan to let
                                            the property go to Foreclosure.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="1" 
                                            name="f_c_keep" id="client_foreclosure_to_keep_true">
                                        <label class="form-check-label" for="client_foreclosure_to_keep_true">I plan to keep
                                            the property.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div id="client_foreclosure_sale_on_input">
                                <h5 class="mb-3">Sale date</h5>
                                <x-input label="Foreclosure sale date" name="dob" type="date"
                                    id="student_honorific_prefix" min="1910-01-01" />
                                <script>
                                    // Get the current date
                                    const today = new Date();
                                    // Format the date to YYYY-MM-DD
                                    const year = today.getFullYear();
                                    const maxDate = `${year}-12-31`;
                                    // Set the max attribute to the current date
                                    document.getElementById('student_honorific_prefix').setAttribute('max', maxDate);
                                </script>
                                <!--<input start_year="2008" end_year="1900" min="1900-01-01"  max="2006-12-31" required="required" class="form-control" type="date" name="dob" id="student_date_of_birth"-->
                                <!-- value="" -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-5">
                            <input type="hidden" name="progress" value="22">
                            <a href="client_reasons_explained" class="btn btn-primary">BACK</a>
                            <input type="submit" name="commit_f_c" value="CONTINUE" class="btn btn-primary"
                                data-disable-with="CONTINUE">
                        </div>
                    </div>
                    <div class="progress my-5" style="height:1.5rem;">
                        <div class="progress-bar bg-dark" style="width:5rem">Progress</div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 22.0%" aria-valuemin="0"
                            aria-valuemax="16" aria-valuenow="16">
                        </div>
                    </div>
        </div>
        </form>
        </article>
       
        <script>
            (function() {
                function initForeclosureOne() {
                    if (document.getElementById('client_foreclosure_occurred_true').checked) {
                        document.getElementById('client_foreclosure_to_keep_input').classList.add('d-none');
                        document.getElementById('client_foreclosure_sale_on_input').classList.add('d-none');
                    } else {
                        document.getElementById('client_foreclosure_to_keep_input').classList.remove('d-none');
                        initForeclosureTwo();
                    }
                }

                function initForeclosureTwo() {
                    if (document.getElementById('client_foreclosure_to_keep_true').checked) {
                        document.getElementById('client_foreclosure_sale_on_input').classList.remove('d-none');
                    } else {
                        document.getElementById('client_foreclosure_sale_on_input').classList.add('d-none');
                    }
                }
                document.querySelectorAll('input[name="f_c_occurred"]')
                    .forEach(el => el.addEventListener('change', initForeclosureOne));
                document.querySelectorAll('input[name="f_c_keep"]')
                    .forEach(el => el.addEventListener('change', initForeclosureTwo));
                initForeclosureOne();
            })();
        </script>
        </div>
    </main>
@endsection
