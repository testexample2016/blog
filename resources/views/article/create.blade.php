@extends('layouts.app')

@section('content')

@include('menu')

@include('error.error')

I am in ArticleController@create {{ Auth::id()}}

<h1>Write a New Article</h1>


<hr/>

{!! Form::open(['action' => 'ArticleController@store']) !!}


@include('article.userform', ['submitButtonText' => 'Add Article'])
   

{!! Form::close() !!}

@endsection