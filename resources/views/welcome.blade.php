@extends('layouts.app')

@section('content')


 <nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{action('ArticleController@index')}}">Index Article</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{action('ArticleController@create')}}">Create Article</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{action('ArticleController@edit', ['id' => Auth::id()])}}">Edit Article</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{action('ArticleController@show', ['id' => Auth::id()])}}">Show Article</a>
    </li>
  </ul>

</nav>
     
@endsection  