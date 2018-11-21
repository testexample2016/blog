@extends('layouts.app')

@section('content')

@include('menu')

@include('error.error')


I am in admin ArticleController@index {{ Auth::id()}}

@endsection