@extends('layout.app')
@section('main')

<div class="container">
    <article class="course reason">
        <div class="mt-3">
            <h2 style="color: #000b57">Reason for Seeking Credit Counseling </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Credit Counseling Session</a></li>
                    <li class="breadcrumb-item"><a href="">Reason for Seeking Credit Counseling </a>
                    </li>
                </ol>
            </nav>
        </div>
        <!--<div class="alert alert-success mt-3">-->
        <!--</div>-->
        <p><img alt="Image: Video" class="videostill border img-fluid"
                src="https://completecreditcounseling.org/img/reasons.jpg"></p>
        <p>Now, because every client is different, the first step of the process is to get an idea of why you
            have fallen into debt.</p>
        <p>Which of the following reasons best applies to you? (Please select one or more of the following)</p>
        <form class="button_to" method="POST" action="{{ route('form.seeking_reason', ['locale' => app()->getlocale()]) }}">
            @csrf
                        <!-- <h5 class="mb-3">Reason seeking counseling choices</h5>-->
            <div class="mb-3">
                
                {{-- Error in the bottom line --}}

                <x-checkbox name="garnishment" value="Garnishment" label="Garnishment" id="client_reason_json_0" check="{{!is_null($course['garnishment'])}}" />
                <x-checkbox name="repossession" value="Repossession" label="Repossession" id="client_reason_json_1" check="{{!is_null($course['repossession'])}}" />
                <x-checkbox name="foreclosure" value="Foreclosure" label="Foreclosure" id="client_reason_json_2" check="{{!is_null($course['foreclosure'])}}" />
                <x-checkbox name="lawsuit" value="Lawsuit" label="Lawsuit" id="client_reason_json_3" check="{{!is_null($course['lawsuit'])}}" />
                <x-checkbox name="illness_disability" value="Illness/Disability" label="Illness / Disability" id="client_reason_json_4" check="{{!is_null($course['illness_disability'])}}" />
                <x-checkbox name="divorce" value="Divorce" label="Divorce" id="client_reason_json_5" check="{{!is_null($course['divorce'])}}" />
                <x-checkbox name="Job_Loss" value="Job Loss" label="Job Loss" id="client_reason_json_6" check="{{!is_null($course['Job_Loss'])}}" />
                <x-checkbox name="c_c_debt" value="Credit Card Debt" label="Credit Card Debt" id="client_reason_json_7" check="{{!is_null($course['c_c_debt'])}}" />
                <x-checkbox name="g_debt" value="Gambling Debt" label="Gambling Debt" id="client_reason_json_8" check="{{!is_null($course['g_debt'])}}" />
                <x-checkbox name="other" value="Other" label="Other" id="client_reason_json_9" check="{{!is_null($course['other'])}}" />
            </div>
            <input type="hidden" name="progress" value="15">
            <a href="{{route('course.course_intro' , ['locale' => app()->getLocale() ])}}" class="btn btn-primary">@lang('lang.back')</a>
            <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
        </form>
    </article>
    <div class="progress my-5" style="height:1.5rem;">
        <div class="progress-bar bg-dark" style="width:5rem">@lang('lang.progress')</div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 15.0%" aria-valuemin="0"
            aria-valuemax="16" aria-valuenow="16"></div>
    </div>
</div>
@endsection