@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="card col-6 m-auto border-0">
      <div class="card-header bg-dark-blue text-light">
        {{ __('Users') }}
      </div>
      <div class="card-body">
        <table class="table-hover table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">@sortablelink('name', __('Name'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th scope="col">@sortablelink('email', __('Email address'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th scope="col">@sortablelink('created_at', __('Created At'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th scope="col">@sortablelink('updated_at', __('Updated At'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th scope="col">
                <div class="d-grid">
                  <button class="btn btn-sm btn-block btn-success"
                          href="{{ route('admin.users.create') }}"
                          role="button">{{ __('Create') }}</button>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d. m. Y') }}</td>
                <td>{{ $user->updated_at->format('d. m. Y') }}</td>
                <td width="225px">
                  <div class="w-100 d-flex gap-1">
                    <a class="btn btn-sm btn-secondary" type="button"
                       href="{{ route('admin.users.show', $user->id) }}"><i
                         class="fa-solid fa-eye"></i>
                      {{ __('Show') }}</a>
                    <a class="btn btn-sm btn-primary" type="button"
                       href="{{ route('admin.users.edit', $user->id) }}"><i
                         class="fa-solid fa-pen"></i>
                      {{ __('Edit') }}</a>
                    <button class="btn btn-sm btn-danger" type="button"
                            onclick="event.preventDefault();
                  document.getElementById('delete-user-{{ $user->id }}').submit()"><i
                         class="fa-solid fa-trash"></i> {{ __('Delete') }}
                    </button>
                    <form class="d-none" id="delete-user-{{ $user->id }}"
                          action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $users->appends(\Request::except('page'))->render() !!}
      </div>
    </div>
  </div>
@endsection
