@extends('layouts.app')

@section('content')
  <div class="container mb-3">
    <div class="card col-12 col-xl-10 m-auto border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Ticket') . ' ' . __('for') . ' ' . __('IT department') }}
      </div>
      <div class="card-body">
        {{-- Alert --}}
        @if (!Auth::user())
          <div class="alert alert-warning text-center" role="alert">
            {{ __('If you register, you will not have to re-enter your personal information and you will see the history of your requests.') }}
          </div>
        @endif
        {{-- Computer Ticket Form --}}
        <form method="POST" action="#">
          @csrf
          {{-- Personal number input --}}
          <div class="row">
            <div class="col-12 col-lg-2">
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
            {{-- User Name input --}}
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
            {{-- User Email input --}}
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

          <div class="row">
            {{-- Computer ID number input --}}
            <div class="col-12 col-lg-2">
              <label class="form-label" for="id_pc">{{ __('Computer ID') }}</label>
              <input class="form-control @error('id_pc') is-invalid @enderror" id="id_pc"
                     name="id_pc" type="text" value="{{ old('id_pc') }}">
              @error('id_pc')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            {{-- Type issue input --}}
            <div class="col-12 col-lg-10">
              <label class="form-label" for="fault">{{ __('Fault type') }}</label>
              <select class="form-select @error('fault') is-invalid @enderror" id="fault"
                      name="fault" type="text">
                <option value="">{{ __('Select the fault type') }}</option>
                @foreach ($it_faults as $fault)
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
          </div>
          {{-- Issue Title input --}}
          <div class="row">
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
                        type="text" value="{{ old('issue') }}" rows="7"></textarea>
              @error('issue')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{-- Category hidden field --}}
          <input name="category" type="hidden" value="it">
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
