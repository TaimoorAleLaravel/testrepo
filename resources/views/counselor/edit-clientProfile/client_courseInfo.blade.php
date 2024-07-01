@extends('layout.app')
@section('main')
    <style>
        .card {
            border-width: 2px;
        }

        .card-header {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        h4 {
            margin-bottom: 2px;
        }

        .package {
            cursor: pointer;
        }

        .package.selected {
            border: 2px solid #0013a29d;
        }
    </style>
    <div class="container mt-4">
        <div class="mt-3">
            <span class="h2 text-success font-weight-normal">Edit Course Info</span>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                    <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a></li>
                    <li class="breadcrumb-item"><a href="">Edit Course Info</a></li>
                </ol>
            </nav>
        </div>

        <form action="{{ route('counsler.editCourseInfo', ['locale' => app()->getLocale()]) }}" method="POST" class="email-form">
            @csrf
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3 mb-3 plans">
                <div class="col">
                    <div class="m-2 card h-100 package basic" data-name="basic" for="basic">
                        <div class="card-header">
                            <input type="hidden" name="id" value="{{ $clientProfile->client_id }}">
                            <input type="radio" value="1" id="basic" name="package" 
                                {{ $clientProfile->pkg == 1 ? 'checked' : '' }}>
                            <h4>Basic Package</h4>
                        </div>
                        <div class="card-body">
                            <img alt="Image: Basic Package" width="100%" height="230px" class="mx-auto d-block" src="https://completecreditcounseling.org/counselor/img/pkg_basic1.jpg">
                            <ul>
                                <li>Counseling Course</li>
                                <li>Read at your own pace</li>
                                <li>Live chat and email support</li>
                                <li>Certificate of Counseling provided after course completion</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><strong>$9.99 per person</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="m-2 card h-100 package regular" data-name="regular">
                        <div class="card-header">
                            <input type="radio" value="2" id="audio" name="package" 
                                {{ $clientProfile->pkg == 2 ? 'checked' : '' }}>
                            <h4>Audio Package</h4>
                        </div>
                        <div class="card-body">
                            <img alt="Image: Regular Package" width="100%" height="230px" class="mx-auto d-block" src="https://completecreditcounseling.org/counselor/img/pkg_audio.jpg">
                            <ul>
                                <li>Counseling Course</li>
                                <li>Listen and read at your own pace</li>
                                <li>Telephone, Live chat and email support</li>
                                <li>Certificate of Counseling provided after course completion</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><strong>$29.99 per person</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="m-2 card h-100 package premium" data-name="premium">
                        <div class="card-header">
                            <input type="radio" value="3" id="video" name="package" 
                                {{ $clientProfile->pkg == 3 ? 'checked' : '' }}>
                            <h4>Video Package</h4>
                        </div>
                        <div class="card-body">
                            <img alt="Image: Premium Package" width="100%" height="230px" class="mx-auto d-block" src="https://completecreditcounseling.org/counselor/img/pkg_video.jpg">
                            <ul>
                                <li>Counseling Course</li>
                                <li>Watch, listen and read at your own pace</li>
                                <li>Telephone, Live chat and email support</li>
                                <li>Certificate of Counseling provided after course completion</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <p class="checkbox-help"><b>$39.99 per person</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12 my-5 ml-3">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </form>
    </div>
@endsection
