@extends('layouts.auth')

@section('title', 'Veryfy Email')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Please check your email for verification</h4>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600" style="text-align: center;">
                New email verification link has been emailed to you!
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('verification.send') }}" class="needs-validation" novalidate="">
                @csrf
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Resend Verification Email

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
            </form>
        </div>
    </div>
    <div class="text-muted mt-5 text-center">
        Don't have an account? <a href="{{ route('register') }}">Create One</a>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
