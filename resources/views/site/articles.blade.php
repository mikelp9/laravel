@foreach($articles as $article)
	<h2><a href="{{action('FrontController@show',['id'=>$article->id])}}">{{$article->title}}</a></h2>
	<small>Дата статьи: {{$article->updated_at}}</small>
	<div>{{str_limit($article->content, 30)}}</div>
@endforeach

<h3>Pagination:</h3> {{ $articles->links() }}