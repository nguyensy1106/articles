@extends('layout') 
@section('content')
 <h1>{{ $article->title }}</h1>
    <hr/>
    <article>
        <div class="body">{{ $article->body }}</div>
    </article><br>
    {!! link_to(action('ArticlesController@edit', [$article->id]), 'Edit', ['class' => 'btn btn-primary']) !!}

    <br>
 	{!! link_to(action('ArticlesController@destroy', [$article->id]), 'detele', ['class' => 'btn btn-danger']) !!}
@endsection
