@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">
    <div class="container">
        <article class="course garnishment">
                        
              <div class="mt-3">
                    <span class="h2 text-success font-weight-normal"  >Edit Garnishment Info</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John  Doe</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Garnishment Info</a></li>
                        </ol>
                    </nav>
                </div>

              
    <form action="" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off"><input type="hidden" name="authenticity_token" value="HdhEqbZOEVPPV0U9MScWoNr_Ilyd2X_OVkgZsfRUmu8xt0gf3yqA7pIKjtGjkenTJmeMkhiuqMVapdDg3vx7oA" autocomplete="off">
        

        <div class="row">
        <div class="col-md-6 mb-3">
            <h5 class="mb-3">Has it already started?</h5>
            <div class="mb-3">
                <label class="form-label visually-hidden" for="client_garnishment_started">Garnishment started</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="gar_started" id="client_garnishment_started_true">
                    <label class="form-check-label" for="client_garnishment_started_true">Yes, the garnishment has already started.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" checked="checked" name="gar_started" id="client_garnishment_started_false">
                    <label class="form-check-label" for="client_garnishment_started_false">No, the garnishment has not yet started.</label>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-12 my-5">
            
            <input type="submit" name="commit_gar" value="SAVE" class="btn btn-primary" data-disable-with="SAVE"></div>
        </div>
    </form></article>



    </div>
    </main>
@endsection