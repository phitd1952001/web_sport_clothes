<header id="header"><!--header-->
		<div class="header_top">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								
								<li><a href="#"><i class="fa fa-phone"></i>{{getSetting('phone')}} </a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> {{getSetting('mail')}}</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{getSetting('facebook')}}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="{{getSetting('google')}}"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="{{route('fe.home')}}"><img style="height:39px; width:139px"  src="https://hanoicomputercdn.com/media/lib/19-02-2022/logo-hacomtrangch.png" alt="" /></a>
						</div>
						<!-- <div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							`	<?php
									$id=session()->get('id');
									if($id==NULL){

								?>
								<li><a href="{{route('login_checkout')}}"><i class="fa fa-crosshairs"></i>Thanh to??n</a></li>
								<?php
									}else{
								?>
								<li><a href="{{route('checkout')}}"><i class="fa fa-crosshairs"></i>Thanh to??n</a></li>
								<?php
									}
								?>
								
								
								<li><a href="{{route('show_cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<?php
									$id=session()->get('id');
									if($id==NULL){

								?>
								<li><a href="{{route('login_checkout')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
								<?php
									}else{
								?>
								<li><a  href="{{route('logout_customer')}}"><i class="fa fa-lock"></i> ????ng xu???t</a></li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('fe.home')}}" class="active">Trang ch???</a></li>
								<li class="dropdown"><a href="#">Danh m???c<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
									@foreach($categories as $key => $category)
                                        <li><a href="{{route('categoryfe',['id'=>$category->id])}}">{{$category->name}}</a></li>
										@endforeach
										<!-- <li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  -->
                                    </ul>
                                </li> 
								<!-- <li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  -->
								<li><a href="{{route('show_cart')}}">Gi??? h??ng</a></li>
								<li><a href="{{route('contact')}}">Li??n l???c</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="search_box pull-right">
							<form action="{{route('search')}}" method="post">
								@csrf
							<input type="text" name="keyword_submit" placeholder="T??m ki???m s???n ph???m"/>
							<input type="submit" value="T??m ki???m" style="margin-top:0px; color:black" class="btn btn-sm btn-primary" >
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	