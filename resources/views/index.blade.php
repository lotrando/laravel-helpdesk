@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="wrapper mb-5">
      <a class="text-decoration-none" href="{{ route('user.tickets.create', ['type' => 'it']) }}">
        <div class="red card help-button rounded-4 p-2">
          <i class="fa-solid fa-computer p-4"></i>
          {{ __('IT department') }}
        </div>
      </a>
      <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'maintenance']) }}">
        <div class="orange card help-button rounded-4 p-2">
          <i class="fa-solid fa-screwdriver-wrench p-4"></i>
          {{ __('Maintenance department') }}
        </div>
      </a>
      <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'medical']) }}">
        <div class="blue card help-button rounded-4 p-2">
          <i class="fa-solid fa-suitcase-medical p-4"></i>
          {{ __('Medical device manager') }}
        </div>
      </a>
      @can('admin')
      @endcan
      <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'employee']) }}">
        <div class="purple card help-button rounded-4 p-2">
          <i class="fa-solid fa-user-plus p-4"></i>
          {{ __('New employee') }}
        </div>
      </a>
      <a class="text-decoration-none" href="{{ route('user.tickets.create', ['type' => 'roles']) }}">
        <div class="yellow card help-button rounded-4 p-2">
          <i class="fa-solid fa-users p-4"></i>
          {{ __('Employee rights') }}
        </div>
      </a>
      <a class="text-decoration-none"
         href="{{ route('user.tickets.create', ['type' => 'suggestion']) }}">
        <div class="green card help-button rounded-4 p-2">
          <i class="fa-regular fa-lightbulb p-4"></i>
          {{ __('Suggestion for improvement') }}
        </div>
      </a>
    </div>
  </div>
@endsection
