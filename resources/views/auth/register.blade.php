@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card col-12 col-md-6 m-auto border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Register') }}
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          {{-- Personal number register input --}}
          <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="personal_number">{{ __('Personal number') }}</label>
              <input class="form-control @error('personal_number') is-invalid @enderror"
                     id="personal_number" name="personal_number" type="text"
                     value="{{ old('personal_number') }}" autofocus>
              @error('personal_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Last Name register input --}}
          <div class="row mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label" for="last_name">{{ __('Last name') }}</label>
              <input class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                     name="last_name" type="text" value="{{ old('last_name') }}">
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="first_name">{{ __('First name') }}</label>
              <input class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                     name="first_name" type="text" value="{{ old('first_name') }}">
              @error('first_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Email register input --}}
          <div class="row mb-3">
            <div class="col-12 col-md-6">
              <label class="form-label" for="email">{{ __('Email address') }}</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email"
                     name="email" type="email" value="{{ old('email') }}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="phone">{{ __('Phone') }}</label>
              <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                     name="phone" type="text" value="{{ old('phone') }}">
              @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Password register input --}}
          <div class="row mb-3">
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
          {{-- Password register input --}}
          <div class="row mb-4">
            <div class="col-12">
              <label class="form-label"
                     for="password_confirmation">{{ __('Password confirmation') }}</label>
              <input class="form-control @error('password_confirmation') is-invalid @enderror"
                     id="password_confirmation" name="password_confirmation" type="password">
              @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Buttons --}}
          <button class="btn btn-primary" type="submit">{{ __('Register') }}</button>
          <a class="btn btn-secondary" type="submit"
             href="{{ url()->previous() }}">{{ __('Back') }}</a>
        </form>
      </div>
    </div>
  </div>
@endsection
