@extends('layout\mainSign')
@section('insides')

@if(session('s'))
    {{session('s')}}
@endif

@endsection