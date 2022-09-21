@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center container">
    <div class="wrapper">
      <a class="text-decoration-none" href="#">
        <div class="one card help-button p-2">
          {{ __('I have a problem with') }}
          <i class="fa-solid fa-computer p-4"></i>
          {{ __('computer') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="two card help-button p-2">
          {{ __('I have a problem with') }}
          <i class="fa-solid fa-print p-4"></i>
          {{ __('printer') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="three card help-button p-2">
          {{ __('I need service') }}
          <i class="fa-solid fa-screwdriver-wrench p-4"></i>
          {{ __('maintenance') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="four card help-button p-2">
          {{ __('I need') }}
          <i class="fa-solid fa-broom p-4"></i>
          {{ __('cleaning service') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="six card help-button p-2">
          {{ __('I need servis') }}
          <i class="fa-solid fa-suitcase-medical p-4"></i>
          {{ __('medical device') }}
        </div>

      </a>
      <a class="text-decoration-none" href="#">
        <div class="five card help-button p-2">
          {{ __('I need service') }}
          <i class="fa-solid fa-bell-concierge p-4"></i>
          {{ __('reception') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="seven card help-button p-2">
          {{ __('I need service') }}
          <i class="fa-solid fa-utensils p-4"></i>
          {{ __('stravovacího provozu') }}
        </div>
      </a>
      <a class="text-decoration-none" href="#">
        <div class="eight card help-button p-2">
          {{ __('I have') }}
          <i class="fa-regular fa-lightbulb p-4"></i>
          {{ __('suggestion for improvement') }}
        </div>
      </a>
    </div>
  </div>
@endsection
