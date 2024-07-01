@extends('layout.app')

@section('main')
<main class="bg-white min-vh-100">
    <!---------------------------------------------------- English --------------------------------------------------->

<div class="container">

<article class="course introduction">

<div class="mt-3">

<h2 style="color: #000b57">Chat Session</h2>
<nav aria-label="breadcrumb">

    <ol class="breadcrumb mt-3">

        <li class="breadcrumb-item"><a href=".php">Client Dashboard</a></li>

        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>

        <li class="breadcrumb-item"><a href="">Chat Session</a></li>

    </ol>

</nav>

</div>

<p><img alt="Image: Intro" class="videostill border img-fluid" src="https://completecreditcounseling.org/img/Chat Session_English.jpg"></p>


<h3>You are required to complete a mandatory Chat Session with one of our certified credit counselors. Once you have successfully finished this chat session you will be issued your certificate.
</h3>
<br><br>
<ul>
<li>This chat session can only be done during regular business hours, which are Monday to Friday from 9 am to Midnight EST.</li>
<li>If you are attempting to complete this chat session after business hours, please log back in during regular business hours to complete.</li>

</ul>
<br>
<h6> Please click the Continue button to go to the mandatory Chat Session</h6>
<div class="row">

<div class="col-12 my-5">

    <form class="button_to" method="get" action="{{ route('course.chat', ['locale' => app()->getlocale()]) }}">
        @csrf
        <input type="hidden" name="progress" value="100">

        <!-- <a href="client_profile" class="btn btn-primary">BACK</a> -->
        <input type="submit" name="commit_start" value="CONTINUE" class="btn btn-primary" data-disable-with="CONTINUE">

    </form>

</div>

</div>

</article>

<div class="progress my-5" style="height:1.5rem;">

<div class="progress-bar bg-dark" style="width:5rem">Progress</div>

<div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuemin="90" aria-valuemax="16" aria-valuenow="2"></div>

</div>

</div>

</main>
@endsection