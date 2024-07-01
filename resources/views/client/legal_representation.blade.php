@extends('layout.app')
@section('main')
<div class="container mt-4">


    <h2 style="color: #000b57">Client Account Registration</h2>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mt-2">

            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

            <li class="breadcrumb-item"><a href="">Client Profile</a></li>

            <li class="breadcrumb-item"><a href="">Legal Representation</a></li>

        </ol>

    </nav>



    <form wire:submit.prevent="attorney_info" class="from group mt-4" >



        <div class="row">

            <div class="col-lg-6 ml-3 mb-3">
                <x-radiobtn label="Legal representation:" name="attorney" id1="client_type_of_attorney_a" id2="client_type_of_attorney_p" val1="a" val2="p" radio1="I have an Attorney" radio2="I do not have an Attorney"  />
            </div>

        </div>



        <div class="row">

            <div class="col-12 ml-3 my-5">

                <a href="client_personal_info" class="btn btn-primary">BACK</a>

                <input type="submit" name="commit_lr" value="CONTINUE" class="btn btn-primary"
                    data-disable-with="CONTINUE">

            </div>
        </div>

    </form>



</div>
@endsection