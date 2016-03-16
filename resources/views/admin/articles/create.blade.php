@extends('admin.main')

@section('content') 

{{ $message or '' }}

<form method="POST" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">

Название статьи:<br>

<input type="text" name="title"><br>

Текст статьи:<br>

<textarea name="content"></textarea><br>

<input type="hidden" name="_token" value="{{csrf_token()}}">

<input type="submit" value="Сохранить">

</form>

@endsection