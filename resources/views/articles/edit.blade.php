@extends('app')

@section('content')
	<h1>Edit {!! $article->title !!}</h1>
	<hr>
	<!-- Used "Form::model($article)" becouse need to fetch all auto data via id -->
{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
   
    @include ('articles.form', ['submitButtonText' => 'Update Article'])

{!! Form::close() !!}

@include('errors.list')

@stop