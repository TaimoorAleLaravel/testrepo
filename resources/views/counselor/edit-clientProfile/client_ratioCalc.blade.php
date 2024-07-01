@extends('layout.app')
@section('main')
    <main class="bg-white min-vh-100">
        <div class="container">



            <article class="course">

                <div class="mt-3">
                    <span class="h2 text-success font-weight-normal">Edit Debt-to-Income Ratio Info</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Edit Debt-to-Income Ratio Info</a></li>
                        </ol>
                    </nav>
                </div>








                <form
                    action="{{ route('counsler.editclientRatio', ['locale' => app()->getLocale()]) }}"
                    method="POST" class="email-form">
                    @csrf

                    <div class="row">
                        <div class="col-lg-4 mb-3 p-3 bg-light">
                            <h5 class="mb-3">Total Income</h5>
                            <div class="mb-3">
                                <label class="form-label visually-hidden" for="client_ratio_json_income">Income</label>
                                <div class="input-group">
                                  <input type="hidden" name="id" value="{{ $id }}">

                                    <span class="input-group-text">$</span>
                                    <input id="client_ratio_json_income" name="total_income"
                                        value="{{ number_format($budget->total_income)}}" class="form-control" type="text"><span
                                        class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 p-3 bg-light">
                            <h5 class="mb-3">Total Expense</h5>
                            <div class="mb-3">
                                <label class="form-label visually-hidden" for="client_ratio_json_debt">Debt</label>
                                <div class="input-group">
                                  <span class="input-group-text">$</span>
                                  <input id="client_ratio_json_debt" name="total_expenses"
                                         value="{{ number_format($budget->total_expenses) }}"
                                         class="form-control" type="text">
                                  <span class="input-group-text">.00</span>
                              </div>
                              
                            </div>
                        </div>

                        <div class="col-lg-3 mb-3 ml-2">
                            <div class="alert alert-warning mb-0">
                                <h5 class="mb-3">Debt-to-Income Ratio</h5>
                                @php
              
                                    $dtiRatio = ($budget->total_expenses / $budget->total_income) * 100;
                                @endphp
                                
                                <div style="border-bottom: 1px solid gray;" class="mt-2">
                                    <span>Debt-to-Income ratio</span>
                                    <span class="float-right">{{ number_format($dtiRatio, 2) }}%</span>
                                </div>
                                <h3 id="client_ratio" style="color: green;">1%</h3>
                            </div>
                        </div>
                    </div>


                    <input type="submit" name="commit_ratio" value="SAVE" class="btn btn-primary"
                        data-disable-with="SAVE">
                </form>

            </article>




            <script>
                (function() {
                    let calcData, colorOf;

                    colorOf = function(n) {
                        return (n >= 36) ? 'red' : 'green';
                    };

                    calcData = function() {
                        let d, i, r;

                        d = parseInt("0" + document.querySelector('#client_ratio_json_debt').value.replace(/[^0-9]/, ''));
                        if (d < 0) d = 0;
                        document.querySelector('#client_ratio_json_debt').value = d;

                        i = parseInt("0" + document.querySelector('#client_ratio_json_income').value.replace(/[^0-9]/, ''));
                        if (i < 0) i = 0;
                        document.querySelector('#client_ratio_json_income').value = i;

                        if (i === 0) {
                            document.querySelector('#client_ratio').style.color = '#000';
                            document.querySelector('#client_ratio').innerText = 'Infinity';
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
