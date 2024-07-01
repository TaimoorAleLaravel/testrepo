@extends('layout.app')
@section('main')
<main class="bg-white min-vh-100">

    <!---------------------------------------------------- English --------------------------------------------------->

<div class="container">











<article class="course snapshot">

<div class="mt-3">

    <h2 style="color: #000b57">Visual Identification</h2>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mt-3">

            <li class="breadcrumb-item"><a href="">Client dashboard</a></li>

            <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>

            <li class="breadcrumb-item">

                <a href="">Visual Identification</a>
            </li>

        </ol>

    </nav>

</div>



<video class="videostill border img-fluid" controls="" controlslist="nodownload">

<source src="https://completecreditcounseling.org/videos/English/Visual_Identification.mp4" type="video/mp4">

</video>

<p>You are required to provide visual identification. Please take a photograph
    of your face next to your valid government issued ID such as a Driver’s License,
    State ID, or Passport. <b> Your face and ID must be in the same photo together. </b>
    If you are taking the course with your spouse or partner both of your faces and IDs must
    be in the same photo together.
</p>
<div class="row justify-content-center">

    <div class="col-md-8 mb-3 ml-2 text-center">
        <h3>Example Photo For Individual Account</h3>
        <img src="https://completecreditcounseling.org/img/individual.jpg" alt="PIC" height="300px" width="80%">


    </div>
    <div class="col-md-12 mb-3 mt-3 ml-2 text-center">
        <h3>Example Photo For Joint Account</h3>

        <img src="https://completecreditcounseling.org/img/joint.jpg" alt="PIC" height="300px" width="80%">


    </div>
    <div class="col-md-12 mb-3 ml-2 text-center">
        <p>To take your picture with this device you are using click the “Take a Snapshot” button below.</p>

        <h3>To take a photo click “Take a Snapshot” </h3>

        <a href="{{route('course.visual_identification_camera' , ['locale' => app()->getLocale()])}}" class="btn btn-primary mt-2">Take a Snapshot</a>

    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12 mb-3 ml-2 text-center">
        <p>If you are unable to take the picture from this device you are using you can take the picture from another device and upload the picture here.
            <br>
        </p>



    </div>
</div>


<br>


<form class="form-control" method="post" action="{{ route('form.visual_identity', ['locale' => app()->getlocale()]) }}" enctype="multipart/form-data">
    @csrf    
    <div class="row justify-content-center">
        <div class="col-lg-6 mb-3 text-center">
            <h3>To upload a photo click “Choose File”</h3>
            <p class="text-end">
                <input type="hidden" name="progress" value="88">
                <input type="file" class="btn btn-primary" name="profile_img" accept="image/*" required="">
            </p>
            <p>(MAX SIZE: 2 MB)</p>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col-12 my-5">
            <a href="client_profile" class="btn btn-primary">BACK</a>
            <input type="submit" name="commit_img" value="CONTINUE" class="btn btn-primary" data-disable-with="CONTINUE">
        </div>
    </div>
</form>






<div class="modal fade" id="modalHelp" tabindex="-1" role="dialog" aria-labelledby="modalHelpLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

        <div class="modal-content">

            <div class="modal-header">



            </div>

            <div class="modal-body">
                <h4>Common client mistakes include:</h4>
                <dl>
                    <dt>Attorney email address</dt>
                    <dd><i>lawyer@lawfirm.com</i> is an email address. <i>www.lawyer.com</i> is a website.

                        Make sure you are entering an email address and not a website.</dd>

                    <dt>Attorney fax</dt>
                    <dd>If your attorney does not have a fax number, you can just enter all zeroes for the fax number.

                        It is a required field, so you cannot skip it.</dd>

                </dl>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>



</article>



<div class="progress my-5" style="height:1.5rem;">

<div class="progress-bar bg-dark" style="width:5rem">Progress</div>

<div class="progress-bar bg-success" role="progressbar" style="width: 88.00%" aria-valuemin="0" aria-valuemax="16" aria-valuenow="15">

</div>

</div>





</div>

</main>
@endsection