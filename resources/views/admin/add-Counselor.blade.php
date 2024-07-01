@extends('admin.admin-layout')
@section('main')
    <div class="container mt-4">

        <header class="mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Counselor Registration</a></li>
                </ol>
            </nav>
        </header>


        <span class="lead h2 text-success"  >Counselor Registration</span>
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
      
<form action="{{ route('admin.addcounsler', ['locale' => app()->getlocale()]) }}" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="mb-3">
                        <label class="form-label required" for="client_email">Counselor Name *</label>
                        <input minlength="5" autocomplete="username" required="required" class="form-control"
                            type="text" name="counselor_name" id="client_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="client_email">Email address *</label>
                        <input minlength="5" autocomplete="email" required="required" class="form-control" type="email"
                            name="counselor_email" id="client_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="counselor_signature">Upload Signature *</label>
                        <input type="file" class="form-control" name="counselor_signature" accept="image/*" required>
                        <input type="hidden" name="progress" value="88">
                        @error('counselor_signature')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="client_password">Password *</label>
                        <input minlength="6" autocomplete="new-password" required="required" class="form-control"
                            type="password" name="counselor_password" id="client_password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label required" for="client_password_confirmation">Password
                            (confirm) *</label>
                        <input minlength="6" autocomplete="new-password" required="required" class="form-control"
                            type="password" name="counselor_password_confirmation" id="client_password_confirmation">
                    </div>
                    <a class="btn btn-primary" href="clients_online">Back</a>

                    <input type="submit" name="commit_res" value="Add Counselor" class="btn btn-primary">

                </div>

            </div>

        </form>
    </div>
@endsection
