@extends('admin.admin-layout')
@section('main')
    <main class="bg-white min-vh-100">

        <div class="container">

            <article class="course reason">



                <header class="mt-3">

                    <span class="lead h2 text-success font-weight-normal"  >Administrator</span>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb mt-3">

                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>

                            <li class="breadcrumb-item"><a href="">Administrator</a></li>

                        </ol>

                    </nav>

                </header>

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif



                <br>
                {{-- <a href="{{ route('admin.viewcounsler',  ['locale' => app()->getlocale()]) }}"><button class="btn btn-outline-success">View Counselors</button></a>

                <a href="{{ route('admin.add-Counselor') }}"><button class="btn btn-outline-success">Add Counselor</button></a> --}}
                {{-- <br><br> --}}
                {{-- <br><br> --}}
                <span class="lead h2  font-weight-normal" style="font-size:2vw">View All Counselor</span>



                <br>



             <table id='SearchTable' style="display: none;" class="table table-hover table-striped ">

                

                    <thead>

                        <tr>

                            <th scope="col">#</th>

                            <th scope="col">Client’s Name / Email address</th>

                            <th scope="col">Attorney</th>

                            <th scope="col">Status</th>

                            <th scope="col">Court</th>

                            <th scope="col">Package</th>

                            <th scope="col">Flow</th>

                            <th scope="col">Chat</th>

                        </tr>

                    </thead>
                    <tbody id="showData">

                    </tbody>
                </table>
                <div class="container w-full">
                    <table id="defaultTable" class="table table-hover table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Counselor ID</th>
                                <th scope="col">Counselor Name</th>
                                <th scope="col">Counselor Email</th>
                                <th scope="col">Counselor Signature</th>
                                 <th scope="col">Password</th>
                                {{-- <th scope="col">Client ID</th> --}}
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($counselors as $counselor)
                                <tr>
                                    <td>{{ $counselor->counselor_id }}</td>
                                    <td>{{ $counselor->counselor_name }}</td>
                                    <td>{{ $counselor->counselor_email }}</td>
                                    <td>
                                        <img src="{{ $counselor->counselor_signature }}" alt="Signature" width="50">
                                    </td>
                                   <td>{{ $counselor->counselor_password }}</td>
                                    {{-- <td>{{ Crypt::decrypt($counselor->counselor_password) }}</td> --}}
                                    {{-- <td>{{ $counselor->client_id }}</td> --}}
                                    {{-- <td>{{ Crypt::decryptString($counselor->encrypted_password) }}</td> --}}

                                    <td>
                                        {{-- <a href="{{ route('admin.viewcounsler',  ['id'=> $counselor->counselor_id , 'locale' => app()->getlocale()]) }}" class="btn btn-success">Edit</a> --}}
                                        <form action="{{ route('admin.editcounsler', ['id'=> $counselor->counselor_id , 'locale' => app()->getlocale()]) }}" method="GET">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$counselor->counselor_id}}">
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.deletecounselor', ['id'=> $counselor->counselor_id , 'locale' => app()->getlocale()]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$counselor->counselor_id}}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="d-flex justify-content-center">
                    {{ $counselors->links() }}
                </div>
            
                <!-- Include Bootstrap JS and dependencies -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>            </article>

            </article>

        </div>

    </main>

    <br><br><br><br>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
