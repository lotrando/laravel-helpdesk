@extends('layouts.app')

@section('content')
  <div class="container mb-5">
    <div class="d-flex justify-content-center align-items-center">
      <div class="wrapper">
        <a class="text-decoration-none"
           href="{{ route('user.tickets.create', ['type' => 'computer']) }}">
          <div class="red card help-button rounded-4 p-2">
            {{ __('I have a problem with') }}
            <i class="fa-solid fa-computer p-4"></i>
            {{ __('computer') }}
          </div>
        </a>
        <a class="text-decoration-none"
           href="{{ route('user.tickets.create', ['type' => 'maintenance']) }}">
          <div class="orange card help-button rounded-4 p-2">
            {{ __('I need service') }}
            <i class="fa-solid fa-screwdriver-wrench p-4"></i>
            {{ __('maintenance') }}
          </div>
        </a>
        {{-- <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'cleaning_service']) }}">
        <div class="four card help-button rounded-4 p-2">
          {{ __('I need') }}
          <i class="fa-solid fa-broom p-4"></i>
          {{ __('cleaning service') }}
        </div>
      </a> --}}
        <a class="text-decoration-none"
           href="{{ route('user.tickets.create', ['type' => 'medical']) }}">
          <div class="blue card help-button rounded-4 p-2">
            {{ __('I need servis') }}
            <i class="fa-solid fa-suitcase-medical p-4"></i>
            {{ __('medical device') }}
          </div>
        </a>
        {{-- <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'reception ']) }}">
        <div class="five card help-button rounded-4 p-2">
          {{ __('I need service') }}
          <i class="fa-solid fa-bell-concierge p-4"></i>
          {{ __('reception') }}
        </div>
      </a> --}}
        {{-- <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'catering_operation']) }}">
        <div class="seven card help-button rounded-4 p-2">
          {{ __('I need service') }}
          <i class="fa-solid fa-utensils p-4"></i>
          {{ __('catering operation') }}
        </div>
      </a> --}}
        <a class="text-decoration-none"
           href="{{ route('user.tickets.create', ['type' => 'suggestion']) }}">
          <div class="green card help-button rounded-4 p-2">
            {{ __('I have suggestion') }}
            <i class="fa-regular fa-lightbulb p-4"></i>
            {{ __('for improvement') }}
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection
