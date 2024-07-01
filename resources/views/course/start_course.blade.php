@extends('layout.app')
@section('main')
    <div class="container">
        <article class="course introduction">
            <div class="mt-3">
                <h2 style="color: #000b57">@lang('course.start_course')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                        <li class="breadcrumb-item"><a href="">Start Course</a></li>
                    </ol>
                </nav>
                <div>
                    <img alt="Image: Start" class="videostill border img-fluid"
                        src="https://completecreditcounseling.org/img/Start.jpg">
                </div>
                <h3>@lang('course.p1_f1')</h3>
                <br><br>
                <ul>
                    <li>@lang('course.p1_l1')</li>
                    <li>@lang('course.p1_l2')</li>
                    <li>@lang('course.p1_l3')</li>
                    <li>@lang('course.p1_l4')</li>
                </ul>
                <br>
                <div class="row mb-5">
                    <div class="col-md-6 col-sm-12">
                        <h6>@lang('course.p1_f2')</h6>
                        <a href="{{ route('download.followPdf', ['locale' => app()->getLocale() ]) }}" download="" _blank> <img alt="Icon"
                                class="img-fluid" src="https://completecreditcounseling.org/img/pdf.png"></a>
                        <h6>@lang('course.p1_f3')</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <h6 class=" my-5">@lang('course.p1_f4')</h6>
                        <!-- resources/views/your_view.blade.php -->
                        <form class="button_to" method="POST" action="{{ route('form.submit', ['locale' => app()->getlocale()]) }}">
                            @csrf
                            <input type="hidden" name="progress" value="0">
                            <button class="btn btn-primary" type="submit">@lang('lang.continue')</button>
                        </form>

                    </div>
                </div>
            </div>
        </article>
        <div class="progress my-5" style="height:1.5rem;">
            <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="16"
                aria-valuenow="2"></div>
        </div>
    </div>
@endsection
