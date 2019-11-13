@extends('frontend.layouts.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$loai_s->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{Route('home')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($loai as $l)
							<li><a href="">{{$l->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										@if($sp->promotion_price !=0)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">sale</div>
										</div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="https://sohanews.sohacdn.com/2017/photo-5-1508291513081.jpg" height="200px" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price" style="font-size: 20px">
												@if($sp->promotion_price !=0)
												<span class="flash-del">{{number_format($sp->unit_price)}}</span>
												<span class="flash-sale">{{number_format($sp->promotion_price)}}</span>
												@else
												<span>{{number_format($sp->unit_price)}}</span>
												@endif

											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $sp_k)
								<div class="col-sm-4">
									<div class="single-item">
										@if($sp_k->promotion_price !=0)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">sale</div>
										</div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img src="https://3.bp.blogspot.com/-ALjY21v5Xig/U8eI-sROIBI/AAAAAAAACSA/R032Ds4SjhM/s1600/dong-ho-deo-tay-nam-dep-nhat-2014+(3).JPG" height="200px" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp_k->name}}</p>
											<p class="single-item-price" style="font-size: 20px">
												@if($sp_k->promotion_price !=0)
												<span class="flash-del">{{number_format($sp_k->unit_price)}}</span>
												<span class="flash-sale">{{number_format($sp_k->promotion_price)}}</span>
												@else
												<span>{{number_format($sp_k->unit_price)}}</span>
												@endif

											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$sp_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->@endsection