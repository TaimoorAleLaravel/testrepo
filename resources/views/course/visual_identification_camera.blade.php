@extends('layout.app')

@section('main')
    <!-- Bootstrap CSS -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2>Take a Snapshot</h2>
                <div class="row">
                    <div class="col">
                        <div id="my_camera" class="mb-3"></div>
                    </div>
                    <div class="col">


                        <div class="mb-3">
                            <img id="captured_image" src="" style="display:none; max-width: 100%; height: auto;" />
                        </div>
                    </div>
                </div>

                <form id="uploadForm" action="{{route('course.visual_identification_camera_store' , ['locale' => app()->getLocale()])}}" method="post">
                    @csrf 
                    <input type="hidden" name="dataUri" id="dataUri">

                    <input class="btn btn-primary " type="button" value="Take Snapshot" onClick="take_snapshot()">
                    <button type="submit" class="btn btn-success">Upload Image</button>
                </form>
                <br><br>
                <br><br>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                document.getElementById('dataUri').value = data_uri;
                document.getElementById('captured_image').src = data_uri;
                document.getElementById('captured_image').style.display = 'block';
            });
        }
    </script>
@endsection
