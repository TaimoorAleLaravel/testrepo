@extends('layout.app')
@section('main')

<div class="container">
    <article class="course introduction">
        <div class="mt-3">
            <h2 style="color: #000b57">@lang('course.p2_introduction')</h2>
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb mt-3">

                    <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>

                    <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>

                    <li class="breadcrumb-item"><a href="">Introduction</a></li>

                </ol>

            </nav>

        </div>

        <p><img alt="Image: Intro" class="videostill border img-fluid"
                src="https://completecreditcounseling.org/img/intro.png"></p>


        <!-- <p class="text-danger lead font-weight-normal">COURSE TAKES 60 to 90 MINUTES and MUST BE FILED WITHIN 180 DAYS </p> -->

        <div class="alert alert-danger text-dark">

            <h3>@lang('course.p2_disclaimer')</h3>
            <p class="lead">@lang('course.p2_f1')</p>

        </div>

        <p>@lang('course.p2_f2')</p>


        <p>@lang('course.p2_f3')</p>
        <p>@lang('course.p2_f4')</p>
        <p>@lang('course.p2_f5')</p>
        <p>@lang('course.p2_f6')</p>
        <p>@lang('course.p2_f7')</p>

        <p>@lang('course.p2_f8')</p>

        <div class="row">

            <div class="col-12 my-5">

                <form class="button_to" method="POST" action="{{ route('form.course_intro', ['locale' => app()->getlocale()]) }}">
                    @csrf
                     <input type="hidden" name="progress" value="10">
                    <a href="{{route('course.start_course' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary">@lang('lang.back')</a>
                    <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
                </form>

            </div>

        </div>

    </article>

    <div class="progress my-5" style="height:1.5rem;">

        <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>

        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuemin="0"
            aria-valuemax="16" aria-valuenow="2"></div>

    </div>

</div>
@endsection