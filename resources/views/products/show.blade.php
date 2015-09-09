@extends('app')

@section('content')
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-6">
					<div class="product service-image-left">
						<center>
							<img src="http://placehold.it/600x320">
						</center>
					</div>
					<br/>
				</div>
					
				<div class="col-md-6">
					<div class="product-title pull-left">{{$product->title}}</div> 
					<span class="glyphicon glyphicon-pencil pull-left product-edit" aria-hidden="true"></span>
					<div class="clearfix"></div>
					<small>SKU: {{$product->sku}}</small>
					<div class="product-desc">{{$product->description}}</div>
					<hr>
					<div class="product-price">$ {{$product->price}}</div>
					<div class="product-stock {{!$product->in_stock ? 'product-out-of-stock' :'' }} "> {{$product->in_stock ? 'In Stock' : 'Out of Stock'}}</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart 
						</button>
					</div>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<!-- <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li> -->
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								{{$product->description}}
							</section>
						</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection('content')