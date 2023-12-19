@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tickets') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        @foreach ($tickets as $ticket)
                            <li class="list-item"><a href="{{ route('tickets.show', $ticket['id']) }}">{{ $ticket['title'] }} - {{ $ticket['description'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</div>

@endsection
