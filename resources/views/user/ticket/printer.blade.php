@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card col-12 col-md-8 m-auto mt-5 border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Ticket') . ' - ' . __('Printer') }}
      </div>
      <div class="card-body">
        {{-- Alert --}}
        @if (!Auth::user())
          <div class="alert alert-warning text-center" role="alert">
            {{ __('If you register, you will not need to re-enter your personal information.') }}
          </div>
        @endif
        {{-- Login Form --}}
        <form method="POST" action="#">
          @csrf
          {{-- Personal number input --}}
          <div class="row mb-3">
            <div class="col-12 col-md-2">
              <label class="form-label" for="personal_number">{{ __('Personal number') }}</label>
              <input class="form-control @error('personal_number') is-invalid @enderror"
                     id="personal_number" name="personal_number" type="text"
                     value="{{ Auth::user()->personal_number ?? old('personal_number') }}" autofocus>
              @error('personal_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            {{-- Printer Inventory number input --}}
            <div class="col-12 col-md-2">
              <label class="form-label" for="id_printer">{{ __('Printer IN') }}</label>
              <input class="form-control @error('id_printer') is-invalid @enderror" id="id_printer"
                     name="id_printer" type="text" value="{{ old('id_printer') }}">
              @error('id_printer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label" for="name">{{ __('Name') }}</label>
              <input class="form-control @error('name') is-invalid @enderror" id="name"
                     name="name" type="name" value="{{ Auth::user()->name ?? old('name') }}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-md-4">
              <label class="form-label" for="email">{{ __('Email') }}</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email"
                     name="email" type="email" value="{{ Auth::user()->email ?? old('email') }}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Title input --}}
          <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="title">{{ __('Title') }}</label>
              <input class="form-control @error('title') is-invalid @enderror" id="title"
                     name="title" type="text" value="{{ old('title') }}">
              @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Computer ID number input --}}
          <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="issue">{{ __('Issue') }}</label>
              <textarea class="form-control @error('issue') is-invalid @enderror" id="issue" name="issue"
                        type="text" value="{{ old('issue') }}" rows="10">
                    </textarea>
              @error('issue')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Category hidden field --}}
          <input name="category" type="hidden" value="printer">
          {{-- Buttons --}}
          <button class="btn btn-primary" type="submit">{{ __('Send') }}</button>
          <a class="btn btn-secondary" type="submit"
             href="{{ url()->previous() }}">{{ __('Back') }}
          </a>
        </form>
      </div>
    </div>
  </div>
@endsection
