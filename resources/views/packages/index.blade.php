@extends('layouts.main')

@section('title', 'TT 38 | Pacchetti Viaggio')

@section('content')
    @foreach ($packages as $package)
    <div class="py-3">
        @include('partials.travel_card')
    </div>
    @endforeach
@endsection