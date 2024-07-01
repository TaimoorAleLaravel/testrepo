@extends('layout.app')
@section('main')
<div class="container mt-4">  
    <h2 style="color: #000b57">{{ __('client_sign-up.part2-heading') }}</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="">Client Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Client Profile</a></li>
            <li class="breadcrumb-item"><a href="">Court District</a></li>
        </ol>
    </nav>
    <form action="{{ route('client.court_district.store', ['locale' => app()->getLocale()]) }}" method="POST" class="form-group mt-4">
        @csrf       
         <div class="row ml-1">
            <div class="col-lg-6 mb-3">
                <div class="mb-3">
                    {{-- <input type="hidden" name="client_id" value="{{ $client->client_id }}"> --}}

                    <label class="form-label required lead fw-normal" for="district_id">@lang('client_sign-up.part2-field1')</label><br>
                    <select class="form-select @if($errors->first('district_id')) is-invalid @endif" aria-label="Default select example" name="district_id" id="district_id">
                        <option selected disabled  value="null" >Court district</option>
                        @php $currentState = null; @endphp

                        @foreach($courts as $court)
                            @if($currentState !== $court['state'])
                                <optgroup label="{{ $court['state'] }}">
                                    @php $currentState = $court['state']; @endphp
                            @if($currentState !== null)
                                </optgroup>
                            @endif
                            @endif
                    
                            <option value="{{ $court['id'] }}"   {{ $court['id'] == $district_id ? 'selected' : '' }} >{{ $court['name'] }}</option>
                    
                            @if ($loop->last)
                                </optgroup>
                            @endif
                        @endforeach

                    </select>
                    <div class="invalid-feedback">{{$errors->first('district_id')}}</div>
                    
                </div>
                
                <div>
                    
                    <button type="submit" class="btn btn-primary">@lang('lang.continue')</button>
                </div>
                @for($i = 0; $i<=8; $i++)
                    @php echo "<br>" @endphp
                @endfor
            </div>

        </div>

    </form>

</div>
@endsection