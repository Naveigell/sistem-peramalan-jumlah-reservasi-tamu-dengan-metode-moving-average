@extends('layouts.admin.admin')

@section('content-title', 'Profile')

@section('content-body')
    @if ($message = session()->get('success'))
        <x-alert.success :message="$message"></x-alert.success>
    @endif
    <div class="col-12 col-md-12 col-lg-12 no-padding-margin">
        <div class="card">
            <form action="{{ route('auth.profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Change Password</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" value="">
                        @error('old_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" value="">
                        @error('new_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Retype New Password</label>
                        <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" value="">
                        @error('new_password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
