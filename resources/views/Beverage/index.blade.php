@extends('layouts.app')

@section('content')

@foreach( $beverage as $beverage)

    <h1>{{$beverage->name}}</h1>
    
@endforeach

@endsection
