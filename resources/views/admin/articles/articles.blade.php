@extends('admin.main')
@section('content')
<h2>Статьи</h2>
<table>
<tr>
<td>ID</td>
<td>Название</td>
</tr>
@foreach ($articles as $article)
<tr>
<td>{{$article->id}}</td>
<td>{{$article->title}}</td>
</tr>
@endforeach
@endsection