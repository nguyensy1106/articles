@extends('layout') 
@section('content')
<div class="container">
 {!! link_to('articles/create', 'Add new article', ['class' => 'btn btn-primary']) !!}
  <h2>Articles</h2>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created_at</th>
        <th colspan="2">Function</th>
      </tr>
    </thead>
    <tbody>
     @foreach($articles as $article)
          <tr>
            <td><a href="{{ url('articles', $article->id) }}">#{{$article->id}}</a></td>
            <td>{{$article->title}}</td>
            <td>{{$article->body}}</td>
            <td>{{$article->created_at}}</td>
            <td colspan="" rowspan="" headers="">{!! link_to(action('ArticlesController@edit', [$article->id]), 'Edit', ['class' => 'btn btn-primary']) !!}</td>
            <td colspan="" rowspan="" headers="">{!! link_to(action('ArticlesController@destroy', [$article->id]), 'Detele', ['class' => 'btn btn-danger']) !!}</td>
          </tr>
    @endforeach
    </tbody>
  </table>
   <div class="pagination pagination-lg">{{ $articles->links() }}</div>
</div>
@endsection


