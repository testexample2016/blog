@extends('layouts.app')

@section('content')

@include('error.error')

I am in ArticleController@edit {{ Auth::id()}}

<h1>Edit:  {{ $article->title }}</h1>

<hr/>

{!! Form::model($article, ['method'=>'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

@include('article.userform', ['submitButtonText' => 'Update Article'])


{!!Form::close() !!}

@endsection