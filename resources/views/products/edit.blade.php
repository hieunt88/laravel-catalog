@extends('app')

@section('content')

<h1>Edit: {{$product->title}} </h1>

<hr/>

{!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]])!!}
	@include('products.form', ['submitButtonText' => 'Update Product'])
{!! Form::close()!!}

@stop