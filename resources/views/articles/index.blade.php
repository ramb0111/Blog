@extends('sharing')

@section('content')
<h1>All the titles are listed here</h1>
<hr/>
<ul>
@foreach($articles as $article)
  <article>
   <ol> <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2> <ol>
  </article>
@endforeach
</ul>
@stop