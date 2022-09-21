@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card col-6 m-auto border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Login') }}
      </div>
      <div class="card-body">
        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}">
          @csrf
          {{-- Email login input --}}
          <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="email">{{ __('Email address') }}</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email"
                     name="email" type="email" value="{{ old('email') }}" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Password login input --}}
          <div class="row mb-4">
            <div class="col-12">
              <label class="form-label" for="password">{{ __('Password') }}</label>
              <input class="form-control @error('password') is-invalid @enderror" id="password"
                     name="password" type="password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Buttons --}}
          <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
          <a class="btn btn-secondary" type="submit"
             href="{{ url()->previous() }}">{{ __('Back') }}</a>
        </form>
      </div>
    </div>
  </div>
@endsection
