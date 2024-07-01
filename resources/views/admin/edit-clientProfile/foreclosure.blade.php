@extends('layout.app')

@section('main')

<main class="bg-white min-vh-100">
    <div class="container">
        <article class="course foreclosure">
                        
          <div class="mt-3">
                <span class="h2 text-success font-weight-normal"  >Edit Foreclosure Info</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                        <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John  Doe</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Foreclosure Info</a></li>
                    </ol>
                </nav>
            </div>
    

    <form action="" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off"><input type="hidden" name="authenticity_token" value="mLVikfpXIkmb5iBhzqlBc1ZQ24ANeyzQT_u0q4YMZGy02m4nkzOz9Ma7641cH74Aqsh1TogM-9tDFn36rKSFIw" autocomplete="off">
        

        <div class="row ml-1">
        <div class="col-lg-5 mb-3">
            <h5 class="mb-3">Has it already occurred?</h5>
            <div class="mb-3">
                <label class="form-label visually-hidden" for="client_foreclosure_occurred">Foreclosure occurred</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="f_c_occurred" id="client_foreclosure_occurred_true">
                    <label class="form-check-label" for="client_foreclosure_occurred_true">Yes, the foreclosure has already occurred.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" checked="checked" name="f_c_occurred" id="client_foreclosure_occurred_false">
                    <label class="form-check-label" for="client_foreclosure_occurred_false">No, the foreclosure has not yet occurred.</label>
                </div>
            </div>
        </div>

        <div class="col-lg-5 mb-3">
            <div id="client_foreclosure_to_keep_input" class="">
            <h5 class="mb-3">Keeping the property?</h5>
            <div class="mb-3">
                <label class="form-label visually-hidden" for="client_foreclosure_to_keep">Foreclosure to keep</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="f_c_keep" id="client_foreclosure_to_keep_false">
                    <label class="form-check-label" for="client_foreclosure_to_keep_false">I am going to let the property go.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" checked="checked" name="f_c_keep" id="client_foreclosure_to_keep_true">
                    <label class="form-check-label" for="client_foreclosure_to_keep_true">I am planning to keep the property.</label>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-2 mb-3">
            <div id="client_foreclosure_sale_on_input" class="">
            <h5 class="mb-3">Sale date</h5>
            <div class="mb-3">
                <label class="form-label visually-hidden" for="client_foreclosure_sale_on">Foreclosure sale date</label>
                <input class="form-control" value="2023-03-31" type="date" name="f_c_sale" id="client_foreclosure_sale_on">
            </div>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-12 my-5">
            <input type="submit" name="commit_f_c" value="SAVE" class="btn btn-primary" data-disable-with="SAVE"></div>
        </div>
    </form>
    </article>




    <script>
        (function () {
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