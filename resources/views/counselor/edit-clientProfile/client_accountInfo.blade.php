@extends('layout.app')
@section('main')
    <main class="bg-white min-vh-100">
        <div class="container">
            <article class="course foreclosure">
                {{-- {{ dd($clientProfile) }} --}}
                <div class="mt-3">
                    <span class="h2 text-success font-weight-normal">Edit Account Info</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../clients_all">Clients</a></li>
                            <li class="breadcrumb-item"><a href="../counselor_chat_with_client.php?client=181">John Doe</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Edit Account Info</a></li>
                        </ol>
                    </nav>
                </div>


                <form action="{{ route('counsler.editaccountInfo', ['id' => $clientProfile->client_id, 'locale' => app()->getLocale()]) }}" method="POST" class="email-form">

                    @csrf

                    <div class="row ml-1 justify-content-between">
                        <div class="col-5 mb-3">

                            <div class="mb-3">
                                <label for="account_type">Type of account: </label> <br>
                                <select class="form-select" name="account_type" id="account_type">
                                    <option selected="" value="1">Individual Account</option>
                                    <option value="2">Joint Account</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-5 mb-3">
                            <div class="mb-3">
                                <label class="form-label required" for="client_email">Email address</label>
                                <input minlength="5" autocomplete="username" required="required" class="form-control"
                                    type="email" value="{{ $clientlogin['client_email'] }}" name="client_email" id="client_email">
                            </div>
                        </div>
                        <div class="col-5 mb-3">
                            <div class="mb-3">
                                <label class="form-label required" for="client_household_size">Household size (1-15)</label>
                                <input required="required" size="2" maxlength="2" pattern="\d+" class="form-control"
                                    type="number" value="{{ $clientProfile['household'] }}" name="household" id="client_household_size">
                            </div>
                        </div>
                        <div class="col-5 mb-3">
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
                        </div>
                        <div class="col-5 mb-3">
                            <div class="mb-3">
                                <label class="form-label required" for="client_password">Reset Password</label>
                                <input required="required" class="form-control" type="text" value="{{ $clientlogin['client_password'] }}"
                                    name="client_password" id="client_password">
                            </div>
                        </div>
                        <div>

                        </div>

                        <div class="row">
                            <div class="col-12 my-5">
                                <input type="submit" name="commit" value="SAVE" class="btn btn-primary"
                                    data-disable-with="SAVE">
                            </div>
                        </div>

                    </div>
                </form>
            </article>





        </div>
    </main>
@endsection
