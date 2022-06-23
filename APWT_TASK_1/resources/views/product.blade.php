@extends('layouts.app')
@section('content')

        <h3> Our services </h3>
        
        <ul>
        @foreach($products as $pp)
        <li> {{$pp}} </li>
        @endforeach
        <ul>
 @endsection