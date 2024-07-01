@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">
    <!---------------------------------------------------- English --------------------------------------------------->
    <div class="container">
        <article class="course garnishment">
            <div class="mt-3">
                <h2 style="color: #000b57">Garnishment</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href=".php">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="">Garnishment</a></li>
                    </ol>
                </nav>
            </div>
            <img alt="Image: Video" class="videostill border img-fluid" src="https://completecreditcounseling.org/img/garnishment.jpg">
            <br><br>
            <!--<p>You mentioned earlier that a Garnishment is one of the reasons you are seeking counseling.</p>-->
            <form action="" accept-charset="UTF-8" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 ml-3 mb-3">
                        <h5 class="mb-3">Has the Garnishment already started?</h5>
                        <div class="mb-3">
                            <!--<label class="form-label visually-hidden" for="client_garnishment_started">Garnishment started</label>-->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="gar_started"
                                    id="client_garnishment_started_true">
                                <label class="form-check-label" for="client_garnishment_started_true">Yes, the
                                    garnishment has already started.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" checked="checked"
                                    name="gar_started" id="client_garnishment_started_false">
                                <label class="form-check-label" for="client_garnishment_started_false">No, the
                                    garnishment has not yet started.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-5">
                        <input type="hidden" name="progress" value="25">
                        <a href="client_reasons_explained.php" class="btn btn-primary">BACK</a>
                        <input type="submit" name="commit_gar" value="CONTINUE" class="btn btn-primary"
                            data-disable-with="CONTINUE">
                    </div>

                </div>
            </form>
        </article>
        <div class="progress my-5" style="height:1.5rem;">
            <div class="progress-bar bg-dark" style="width:5rem">Progress</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 25.0%" aria-valuemin="0"
                aria-valuemax="16" aria-valuenow="16">
            </div>
        </div>
    </div>

</main>
@endsection