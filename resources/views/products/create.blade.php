@extends('app')

@section('content')

<h1>Add a new product</h1>

<hr/>

{!! Form::model($product = new \App\Product(), ['url' => 'products'])!!}
	@include('products.form', ['submitButtonText' => 'Add Product'])
{!! Form::close()!!}

@stop