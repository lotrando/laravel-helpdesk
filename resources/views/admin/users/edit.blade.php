@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card col-6 m-auto border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Edit') }}
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
          @method('PATCH')
          @include('admin.users.partials.form', [
              'buttonName' => __('Update'),
          ])
        </form>
      </div>
    </div>
  </div>
@endsection
