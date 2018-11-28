@extends('templates.layout')

@section('title', $title)

@section('content')

    <h1> {{ $title }} </h1>

    <ul>
        @foreach ($staff as $person)

          <li style="{{$loop->first ? 'color:red' : ""}}">  {{$person['name'] }} {{$person['lastname']}}</li>
            <!-- {{$loop->last}} {{$loop->remaining}} {{$loop->count}}-->
        @endforeach

    </ul>

    <ul>
        @forelse($staff as $person)
            <li>{{  $person['name'] }} {{ $person['lastname']  }}</li>

        <!--messagio da mostrare se l'array è vuoto -->
        @empty
            <li>no Staff</li>
        @endforelse
    </ul>
@stop

