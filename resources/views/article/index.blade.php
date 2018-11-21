@extends('layouts.app')

@section('content')

@include('menu')

I am in ArticleController@index {{ Auth::id()}}

<h2>Articles</h2>

<hr>


    @foreach ($articles as $article)
     
     <article>
     	
     	<h2><a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title}}</a></h2>

     	<div class="body"> {{$article->body}} </div>

     	<div class="body"> Written by {{$article->user->name}} </div>
     
     </article> 	


    @endforeach



@endsection