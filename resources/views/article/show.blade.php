@extends('layouts.app')

@section('content')

@include('menu')

I am in ArticleController@show {{ Auth::id()}}

<h2>{{$article->title}}</h2>

<hr>

<article>
	
	{{$article->body}}

</article>

<hr>

 <a href="{{ action('ArticleController@edit', [$article->id]) }}" class="btn btn-info" role="button"> Edit Article</a>


@endsection