@extends('layout\main')
@section('insides')

@if(session('s'))
    {{session('s')}}
@endif

@endsection