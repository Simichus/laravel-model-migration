@extends('layouts.main')

@section('title', 'TT 38 | ' . $detail->package_name)

@section('content')
 <section id="detail" class="container py-2">
    <h2>{{$detail->package_name}}</h2>
    <div>From: <strong>{{$detail->start_date}}</strong> To <strong>{{$detail->end_date}}</strong><div>  
    <div class="fs-3 my-2">Luogo: <strong>{{$detail->destination}}</strong></div>
    <div>{{$detail->description}}</div>

    <a class="btn btn-dark my-5" href="{{route('packages.index')}}" role="button">Torna alla lista pacchetti</a>

 </section>
@endsection