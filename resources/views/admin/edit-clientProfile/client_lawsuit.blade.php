@extends('layout.app')
@section('main')

<main class="bg-white min-vh-100">
    <div class="container">
        <article class="course lawsuit">
                        
          <div class="mt-3">
                <span class="h2 text-success font-weight-normal"  >Edit Lawsuit Info</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                        <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John  Doe</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Lawsuit Info</a></li>
                    </ol>
                </nav>
            </div>

          
                
    


    <form action="" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off"><input type="hidden" name="authenticity_token" value="Iodj__qGtDnuBRplpAsMKTTDraWiWYwTKFsAktv_C5QO6G9Jk-IlhLNY0Yk2vfNayFsDaycuWxgktsnD8Vfq2w" autocomplete="off">
        

        <div class="row ml-1">
        <div class="col-lg-6 mb-3">
            <div class="mb-3">
                <label class="form-label required" for="client_lawsuit_creditors">Lawsuit creditors</label>
                <input class="form-control" type="text" value="" name="ls_creditors" id="client_lawsuit_creditors">
            </div>
            <div class="mb-3">
                <label class="form-label" for="client_lawsuit_amount">Lawsuit amount</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input min="0" max="1000000" step="1" pattern="\d{1,10}" class="form-control" type="number" value="" name="ls_amount" id="client_lawsuit_amount">
                    <span class="input-group-text">.00</span></div></div>
            <div class="mb-3">
                <label class="form-label required" for="client_lawsuit_reason">Lawsuit reason</label>
                <input class="form-control" type="text" value="" name="ls_reason" id="client_lawsuit_reason">
            </div>
        </div>
        </div>
        
        <input type="submit" name="commit_ls" value="SAVE" class="btn btn-primary" data-disable-with="SAVE">
    </form>
        
    </article>


    </div>
</main>

@endsection