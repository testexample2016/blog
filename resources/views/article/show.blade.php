@extends('layouts.app')

@section('content')

@include('menu')

@include('error.error')

I am in ArticleController@show {{ Auth::id()}}

<h2>{{$article->title}}</h2>

<hr>

<article>
	
	{{$article->body}}

</article>

<hr>

@can('update', $article)

 <a href="{{ action('ArticleController@edit', [$article->id]) }}" class="btn btn-info" role="button"> Edit Article</a>

@endcan

@endsection