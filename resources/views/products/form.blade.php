<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('sku', 'SKU') !!}
	{!! Form::text( 'sku', null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('price', 'Price:') !!}
	{!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('stock', 'Stock:') !!}
	{!! Form::text('stock', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category', 'Category:') !!}
	{!! Form::select('category', $categories, $product->category, ['class' => 'form-control',]) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>