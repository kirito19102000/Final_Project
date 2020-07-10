@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$detail->Name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{Route('Home')}}">Home</a> / <span>Đetails</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$detail->image}}" alt="" height="250px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$detail->Name}}</p>
								<p class="single-item-price">
											@if($detail->unit_price==0)
												<span class="flash-sale">Free</span>
											@elseif($detail->promotion_price==0)
												<span class="flash-sale">{{$detail -> unit_price}}</span>
											@else
												<span class="flash-del">{{$detail -> unit_price}}</span>
												<span class="flash-sale">{{$detail -> promotion_price}}</span>
											@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$detail->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">

								<a class="add-to-cart pull-left" href="{{Route('AddtoCart',$detail->id)}}"><i>Add</i></a>

								@if($detail->ID_type=='TP2')
								<a class="add-to-cart pull-left" href="{{$detail->link}}"><i>Read</i></a>
								@else
									@foreach($lib as $library)
									@if($library->username==Auth::user()->username)
									<a class="add-to-cart pull-left" href="{{$detail->link}}"><i>Read</i></a>
									@elseif(Auth::guard('admin')->check())
									<a class="add-to-cart pull-left" href="{{$detail->link}}"><i>Read</i></a>
									@endif
									@endforeach
								@endif
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Comments</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$detail->description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Comments</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>

				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->

				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection