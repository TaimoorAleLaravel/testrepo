@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <!---------------------------------------------------- English --------------------------------------------------->

    <div class="container">


        <article class="course">

            <div class="mt-3">

                <h2 style="color: #000b57">Debt-to-Income Ratio Calculator</h2>

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb mt-3">

                        <li class="breadcrumb-item"><a href="client_dashboard">Client Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>

                        <li class="breadcrumb-item"><a href="">Debt-to-Income Ratio Calculator</a>
                        </li>

                    </ol>

                </nav>

            </div>



            <p><img alt="Image: Video" class="videostill border img-fluid"
                    src="https://completecreditcounseling.org/img/debt_to_income_ratio.jpg"></p>






            <!--<div class="alert alert-info"><p>Fill out the form on this page carefully and take your time. Make sure you double-check the information you submit before proceeding. If any of the information is incorrect, you will be required by a counselor to go back and correct it, and this may cause your counseling session to take much longer.</p> <p>Please enter only whole numbers (do not include cents or decimals).</p></div>-->




            <form class="form-control" method="get" action="{{ route('course.rebuild_credit', ['locale' => app()->getlocale()]) }}">
                @csrf
                    <input type="hidden" name="_method" value="get" autocomplete="off"><input
                    type="hidden" name="authenticity_token"
                    value="gfpliGEVN_quE8PoqTq_VrK45SCLG5y-TJrfoa_VBZWtlWk-CHGmR_NOCAQ7jEAlTiBL7g5sS7VAdxbwhX3k2g"
                    autocomplete="off">





                <div class="row">

                    <div class="col-lg-4 mb-3 p-3 bg-light">

                        <h5 class="mb-3">Total Gross Income</h5>

                        <div class="mb-3">

                            <!--<label class="form-label visually-hidden" for="client_ratio_json_income">Income</label>-->

                            <div class="input-group">

                                <span class="input-group-text">$</span>

                                <input id="client_ratio_json_income" name="monthly_gross_income" wire:model="monthly_gross_income" min="0" required="" onchange="changeValue(this.value,'monthly_gross_income')" placeholder="0"  class="form-control" style="font-weight: bolder;" type="text"><span
                                    class="input-group-text">.00</span>
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-4 mb-3 p-3 bg-light">

                        <h5 class="mb-3">Total Gross Expenses</h5>

                        <div class="mb-3">

                            <!--<label class="form-label visually-hidden" for="client_ratio_json_debt">Expenses</label>-->
                            <div class="input-group"><span class="input-group-text">$</span>
                                <input id="client_ratio_json_debt" name="monthly_debt" wire:model="monthly_debt" min="0"
                                    required="" onchange="changeValue(this.value,'monthly_debt')"
                                    placeholder="0" value="0" class="form-control"
                                    style="font-weight: bolder;" type="text"><span
                                    class="input-group-text">.00</span>
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-3 mb-3 ml-2">

                        <div class="alert alert-danger text-dark" style="height:100%;">

                            <h5 class="mb-3">Debt-to-Income Ratio</h5>

                            <h3 id="client_ratio" style="color: green;">0%</h3>

                        </div>

                    </div>

                </div>



                <p>The Debt-to-Income Ratio tells you how much debt you carry in relation to your income. You
                    want
                    to keep your debt-to-income ratio to less than 36%. Anything above 36% is generally an
                    unhealthy
                    score.</p>
                <p>Add up all of your recurring monthly debt. Your recurring monthly debt includes your mortgage
                    (principal, interest, taxes and insurance) or rent, home equity loan payments, car loans,
                    student loans, your minimum monthly payments on any credit card debt, and any other loans
                    that
                    you might have.</p>
                <p>Gross income is the total amount of money you make, before all deductions and taxes.</p>
                <p>Even if you are making a lot of money, a high debt-to-income ratio signals that you are
                    overextending yourself. If your debt-to-income ratio is above 36%, you may want to consider
                    your
                    options, which may include bankruptcy.</p>



                <h3 class="alert alert-danger text-dark my-3">

                    Try to keep your debt-to-income ratio to less than 36%. Anything above 36% is generally an
                    unhealthy score.

                </h3>

                <input type="hidden" name="progress" value="60">

                <button class="btn btn-primary">@lang('lang.back')</button>
                <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>


            </form>
        </article>



        <div class="progress my-5" style="height:1.5rem;">

            <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

            <div class="progress-bar bg-success" role="progressbar" style="width: 60.0%"
                aria-valuemin="0" aria-valuemax="16" aria-valuenow="16">

            </div>

        </div>





        <script>
            (function() {

                let calcData, colorOf;



                colorOf = function(n) {

                    return (n >= 36) ? 'red' : 'green';

                };



                calcData = function() {

                    let d, i, r;



                    d = parseInt("0" + document.querySelector('#client_ratio_json_debt').value.replace(
                        /[^0-9 .]/, ''));

                    if (d < 0) d = 0;

                    document.querySelector('#client_ratio_json_debt').value = d;



                    i = parseInt("0" + document.querySelector('#client_ratio_json_income').value.replace(
                        /[^0-9 .]/, ''));

                    if (i < 0) i = 0;

                    document.querySelector('#client_ratio_json_income').value = i;



                    if (i === 0) {

                        document.querySelector('#client_ratio').style.color = '#000';

                        document.querySelector('#client_ratio').innerText = '-';

                    } else {

                        r = parseInt(d / (i / 100)) || 0;

                        document.querySelector('#client_ratio').style.color = colorOf(r);

                        document.querySelector('#client_ratio').innerText = r.toString() + '%';

                    }

                };



                document.querySelectorAll('input').forEach(el => {

                    el.addEventListener('change', calcData);

                    el.addEventListener('keyup', calcData);


                });



                calcData();

            })();
        </script>



    </div>

</main>
@endsection