@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">
    <!---------------------------------------------------- English --------------------------------------------------->
    <div class="container">
        <article class="course lawsuit">
            <div class="mt-3">
                <h2 style="color: #000b57">Lawsuit</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="">Lawsuit</a></li>
                    </ol>
                </nav>
            </div>
            <img alt="Image: Video" class="videostill border img-fluid" src="  https://completecreditcounseling.org/img/lawsuit.jpg">
            <!--<p>"Please fill out the following information.<br>*Enter only whole numbers  and do not include cents or decimals"</p>-->
            <form action="" accept-charset="UTF-8" method="post">
                @csrf
                <br>
                <div class="row">
                    <div class="col-md-6 ml-3 mb-3">
                        <div class="mb-3">
                            <h5 class="mb-3">Please enter the name of your creditor and the amount of the lawsuit.</h5>

                            <div class="row">
                            <div class="col">
                                <x-input label="Creditor" name="ls_creditors" type="text" id="client_lawsuit_creditors"  /> 
                            </div>    
                            <div class="col">
                                <x-input  label="Lawsuit amount" type="number" name="ls_amount" pattern="\d{1,10}" id="client_student_loan_debt" min="0" max="1000000" placeholder="0" step="1" pre="$"  post=".00" />
                                </div>
                        
                            </div>
                        </div>
                    
  
                    </div>
                </div>
                <input type="hidden" name="progress" value="27">
                <a href="client_reasons_explained" class="btn btn-primary">BACK</a>
                <input type="submit" name="commit_ls" value="CONTINUE" class="btn btn-primary"
                    data-disable-with="CONTINUE">
            </form>
        </article>
        <div class="progress my-5" style="height:1.5rem;">
            <div class="progress-bar bg-dark" style="width:5rem">Progress</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 27.0%" aria-valuemin="0"
                aria-valuemax="16" aria-valuenow="16">
            </div>
        </div>
    </div>
</main>
@endsection