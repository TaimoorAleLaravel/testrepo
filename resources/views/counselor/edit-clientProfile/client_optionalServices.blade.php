@extends('layout.app')
@section('main')
    <div class="container mt-4">


        <div class="mt-3">
            <span class="h2 text-success font-weight-normal"  >Edit Optional Services Info</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                    <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John  Doe</a></li>
                    <li class="breadcrumb-item"><a href="">Edit Optional Services Info</a></li>
                </ol>
            </nav>
        </div>

        <form action="{{ route('counsler.editoptionalService', ['locale' => app()->getLocale()]) }}" method="POST" class="email-form">
            @csrf
            <div class="row row-cols-1 row-cols-lg-2 g-4">
                <div class="col-6">

                    <div class="card h-100 srv_phone_interview border-0">
                        <input type="hidden" name="client_id" value="{{ $client_profile->client_id }}">


                        <div class="row g-0">

                            <div class="col-sm-4 col-lg-3 col-xl-2 text-center">
                                <img alt="Icon" class="img-fluid"
                                    src="https://completecreditcounseling.org/img/pdf.png">
                            </div>

                            <div class="col-sm-8 col-lg-9 col-xl-10">

                                <div class="card-body">
                                    <div>
                                        <input name="opt_pdf" type="hidden" value="0" autocomplete="off">
                                        <input class="form-check-input" type="checkbox" value="1" name="opt_pdf" id="client_srv_phone_interview">
                                        <label class="form-check-label" for="client_srv_phone_interview">Follow Along Document</label>
                                    </div>
                                
                                    <div>
                                        <b>$9.99 per account</b><br>
                                        This option is highly recommended because clients can print this pdf file
                                        which allows them to have a paper document to follow along with the online course.
                                        Also, after completing the course clients can save their information on this form for future reference.
                                        <br>
                                        <div class="ml-4">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="en" name="language" id="lang-en" checked>
                                                <label class="form-check-label" for="lang-en">English</label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="es" name="language" id="lang-es">
                                                <label class="form-check-label" for="lang-es">Spanish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-6">

                    <div class="card h-100 srv_cert_by_mail border-0">

                        <div class="row g-0">

                            <div class="col-sm-4 col-lg-3 col-xl-2 text-center">

                                <img alt="Icon" class="img-fluid"
                                    src="https://completecreditcounseling.org/img/hmail.jpg">

                            </div>

                            <div class="col-sm-8 col-lg-9 col-xl-10">

                                <div class="card-body">

                                    <div class="form-check mb-3">

                                        <input name="opt_mailed" type="hidden" value="0" autocomplete="off">

                                        <input class="form-check-input" type="checkbox" value="1" name="opt_mailed"
                                            id="client_srv_cert_by_mail"><label class="form-check-label"
                                            for="client_srv_cert_by_mail">Certificate
                                            mailed to client's home
                                            address</label>
                                    </div>

                                    <div class="checkbox-help"><b>$9.99 per account</b><br>

                                        We will mail your certificate to your home address. This service guarantees
                                        you will
                                        receive a paper copy of this important document for your personal records.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>




                <div class="col-6">

                    <div class="card h-100 srv_phone_interview border-0">

                        <div class="row g-0">

                            <div class="col-sm-4 col-lg-3 col-xl-2 text-center">

                                <img alt="Icon" class="img-fluid"
                                    src="https://completecreditcounseling.org/img/phone.jpg">

                            </div>

                            <div class="col-sm-8 col-lg-9 col-xl-10">

                                <div class="card-body">

                                    <div class="form-check mb-3">

                                        <input name="opt_phone" type="hidden" value="0" autocomplete="off">

                                        <input class="form-check-input" type="checkbox" value="1" name="opt_phone"
                                            id="client_srv_cert_by_phone_interview"><label class="form-check-label"
                                            for="client_srv_cert_by_phone_interview">Phone Interview </label>
                                    </div>

                                    <div class="checkbox-help"><b>$19.99 per account</b><br>

                                        At the end of the course there is a mandatory “Chat Session” which is an
                                        online
                                        “question and answer” interview with one of our certified credit counselors.
                                        This is
                                        a good option for those clients who would like to save time and rather speak
                                        to a
                                        live person over the phone instead of via online for the “Chat Session”.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-6">

                    <div class="card h-100 srv_cert_by_fax border-0">

                        <div class="row g-0">

                            <div class="col-sm-4 col-lg-3 col-xl-2 text-center">

                                <img alt="Icon" class="img-fluid"
                                    src="https://completecreditcounseling.org/img/fax.png">

                            </div>

                            <div class="col-sm-8 col-lg-9 col-xl-10">

                                <div class="card-body">

                                    <div class="form-check mb-3">

                                        <input name="opt_attorny_fax" type="hidden" value="0" autocomplete="off">

                                        <input class="form-check-input" type="checkbox" value="1"
                                            name="opt_attorny_fax" id="client_srv_cert_by_fax"><label
                                            class="form-check-label" for="client_srv_cert_by_fax">Certificate
                                            faxed to
                                            attorney</label>
                                    </div>

                                    <div class="checkbox-help"><b>$5.99 per person</b><br>

                                        Faxing this certificate provides you with peace of mind and assurance that
                                        your
                                        attorney will have a copy of your certificate promptly and many attorneys
                                        recommend
                                        faxing the certificate. This added method is important because email can
                                        accidentally be deleted or mistaken as spam.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-6">

                    <div class="card h-100 srv_cert_by_email border-0">

                        <div class="row g-0">

                            <div class="col-sm-4 col-lg-3 col-xl-2 text-center">

                                <img alt="Icon" class="img-fluid"
                                    src="https://completecreditcounseling.org/img/email.jpg">

                            </div>

                            <div class="col-sm-8 col-lg-9 col-xl-10">

                                <div class="card-body">

                                    <div class="form-check mb-3">

                                        <input name="opt_email" type="hidden" value="0" autocomplete="off">

                                        <input class="form-check-input" type="checkbox" value="1" name="opt_email"
                                            id="client_srv_cert_by_email"><label class="form-check-label"
                                            for="client_srv_cert_by_email">Certificate
                                            emailed to client</label>
                                    </div>

                                    <div class="checkbox-help"><b>$5.99 per account</b><br>

                                        We will email a copy of your certificate to the email address you provided
                                        when you
                                        registered.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-6">


                </div>

            </div>

            <br><br><br>

            <input type="submit" name="commit_opt" value="SAVE" class="btn btn-primary"
                data-disable-with="CONTINUE"><br><br>

        </form>

    </div>
@endsection
