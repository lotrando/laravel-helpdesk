@extends('layouts.app')

@section('content')
  <div class="container mb-3">
    <div class="card col-12 col-xl-10 m-auto border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Ticket') . ' ' . __('for') . ' ' . __('administrator of hospital resources') }}
      </div>
      <div class="card-body">
        {{-- Alert --}}
        @if (!Auth::user())
          <div class="alert alert-warning text-center" role="alert">
            {{ __('If you register, you will not have to re-enter your personal information and you will see the history of your requests.') }}
          </div>
        @endif
        {{-- Login Form --}}
        <form action="#" method="POST">
          @csrf
          {{-- Personal number input --}}
          <div class="row mb-3">
            <div class="col-12 col-lg-2">
              <label class="form-label" for="personal_number">{{ __('Personal number') }}</label>
              <input autofocus class="form-control @error('personal_number') is-invalid @enderror"
                     id="personal_number" name="personal_number" type="text"
                     value="{{ Auth::user()->personal_number ?? old('personal_number') }}">
              @error('personal_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-lg-4">
              <label class="form-label" for="name">{{ __('Name') }}</label>
              <input class="form-control @error('name') is-invalid @enderror" id="name"
                     name="name" type="name" value="{{ Auth::user()->name ?? old('name') }}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-lg-4">
              <label class="form-label" for="email">{{ __('Email') }}</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email"
                     name="email" type="email" value="{{ Auth::user()->email ?? old('email') }}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="col-12 col-lg-2">
              <label class="form-label" for="phone">{{ __('Phone') }}</label>
              <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                     name="phone" type="email" value="{{ Auth::user()->phone ?? old('phone') }}">
              @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Type issue input --}}
          {{-- <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="fault">{{ __('Fault type') }}</label>
              <select class="form-select @error('fault') is-invalid @enderror" id="fault"
                      name="fault" type="text">
                <option value="">{{ __('Select the fault type') }}</option>
                @foreach ($hospital_faults as $fault)
                  <option value="{{ $fault->id }}"
                          @if (old('fault') == $fault->id) selected @endif>{{ __($fault->name) }}
                  </option>
                @endforeach
              </select>
              @error('type')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div> --}}
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
          {{-- Issue input --}}
          <div class="row mb-3">
            <div class="col-12">
              <label class="form-label" for="issue">{{ __('Issue') }}</label>
              <textarea class="form-control @error('issue') is-invalid @enderror" id="issue" name="issue"
                        rows="7" type="text" value="{{ old('issue') }}"></textarea>
              @error('issue')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Category hidden field --}}
          <input name="category" type="hidden" value="medical">
          {{-- Buttons --}}
          <button class="btn btn-primary" type="submit">{{ __('Send') }}</button>
          <a class="btn btn-secondary" href="{{ url()->previous() }}"
             type="submit">{{ __('Back') }}
          </a>
        </form>
      </div>
    </div>
  </div>
@endsection
