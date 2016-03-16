@extends('admin.main')
@section('content')
<h2>Статьи</h2>
<ul>
<li><a href="{{url('admin/articles')}}">Все статьи</a></li>
<li><a href="/admin/articles/create">Добавить статью</a></li>
</ul>
@endsection