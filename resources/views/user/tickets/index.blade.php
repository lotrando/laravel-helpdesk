@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="card col-12 m-auto mb-3 border-0 shadow-lg">
      <div class="card-header bg-dark-blue text-light">
        {{ __('My Tickets') }}
      </div>
      <div class="card-body col-12">
        <table class="table-hover table">
          <thead>
            <tr>
              <th>@sortablelink('title', __('Title'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th>@sortablelink('status', __('Status'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              <th>@sortablelink('category', __('Category'), ['filter' => 'visible'], ['class' => 'text-decoration-none text-muted'])</th>
              @can('user')
                <th scope="col">
                  <div class="d-grid">
                    <div class="dropdown">
                      <button class="btn btn-sm btn-success dropdown-toggle" id="dropdownMenuButton1"
                              data-bs-toggle="dropdown" type="button" aria-expanded="false">
                        Create
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'it']) }}">{{ __('Ticket') . ' ' . __('for') . ' ' . __('IT department') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'maintenance']) }}">{{ __('Ticket') . ' ' . __('for') . ' ' . __('maintenance department') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'medical']) }}">{{ __('Ticket') . ' ' . __('for') . ' ' . __('administrator of hospital resources') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'employee']) }}">{{ __('New Employee') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'permission']) }}">{{ __('Permissions') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                             href="{{ route('user.tickets.create', ['type' => 'suggestion']) }}">{{ __('I have an idea for improvement') }}</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </th>
              @endcan
            </tr>
          </thead>
          <tbody>
            @foreach ($tickets as $ticket)
              <tr>
                <td>{{ $ticket->title }}</td>
                <td><span
                        class="badge @if ($ticket->status === 'closed') bg-danger
                        @elseif ($ticket->status === 'progress') bg-warning
                        @elseif ($ticket->status === 'compleded') bg-success @endif bg-secondary">
                    {{ $ticket->status }}
                  </span></td>
                <td>
                  <span
                        class="badge @if ($ticket->category === 'it') bg-danger
                        @elseif ($ticket->category === 'medical') bg-info
                        @elseif ($ticket->category === 'maintenance') bg-warning @endif bg-secondary">
                    {{ $ticket->category }}
                  </span>
                </td>
                @can('user')
                  <td width="100px">
                    <div>
                      <a class="btn btn-sm btn-primary" type="button"
                         href="{{ route('user.tickets.show', $ticket->id) }}"><i
                           class="fa-solid fa-eye"></i> {{ __('Show') }}
                      </a>
                    </div>
                  </td>
                @endcan
              </tr>
            @endforeach
          </tbody>
        </table>
        {!! $tickets->appends(\Request::except('page'))->render() !!}
      </div>
    </div>
  </div>
@endsection
