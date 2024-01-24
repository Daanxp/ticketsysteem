@extends('base')

@section('content')
    <h1>Upcomming Events</h1>
    <h3>Evenementen beheer</h3>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Startdatum</th>
            <th>Prijs</th>
            <th>Adres</th>
            <th>Locatie</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <th><a href="{{ route('events.edit', $event->id) }}"> {{ $event->title }}</a></th>
                <th>{{ $event->start_date }}</th>
                <th>€ {{  $event->ticket_price }}</th>
                <th>{{ $event->address }}</th>
                <th>{{ $event->city }}</th>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{ route('events.create') }}" role="button">Nieuw evenement aanmaken</a>
@endsection