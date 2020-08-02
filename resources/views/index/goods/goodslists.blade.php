@extends('layout.shop')
@section('title','商品详情')
@section('content')

	<!-- navbar top -->
	@include('layout.top')
	<!-- end navbar top -->

	<!-- side nav right-->
    @include('layout.navright')
	<!-- end side nav right-->

	<!-- navbar bottom -->
    @include('layout.bottom')
	<!-- end navbar bottom -->

	<!-- menu -->
	<div class="menus" id="animatedModal2">
		<div class="close-animatedModal2 close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="container">
				<div class="row">
					<div class="col s4">
						<a href="index.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-home"></i>
								</div>
								Home
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="product-list.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bars"></i>
								</div>
								Product List
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="shop-single.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-eye"></i>
								</div>
								Single Shop
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="wishlist.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-heart"></i>
								</div>
								Wishlist
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="cart.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								Cart
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="checkout.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-credit-card"></i>
								</div>
								Checkout
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="blog.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bold"></i>
								</div>
								Blog
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="blog-single.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-file-text-o"></i>
								</div>
								Blog Single
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="error404.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-hourglass-half"></i>
								</div>
								404
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="testimonial.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-support"></i>
								</div>
								Testimonial
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="about-us.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								About Us
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="contact.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								Contact
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="setting.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-cog"></i>
								</div>
								Settings
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="login.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-sign-in"></i>
								</div>
								Login
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="register.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
								Register
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	<!-- cart menu -->
	<div class="menus" id="animatedModal">
		<div class="close-animatedModal close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="cart-menu">
				<div class="container">
					<div class="content">
						<div class="cart-1">
							<div class="row">
								<div class="col s5">
									<img src="img/cart-menu1.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="cart-2">
							<div class="row">
								<div class="col s5">
									<img src="img/cart-menu2.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="total">
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h6>Total</h6>
							</div>
							<div class="col s5">
								<h6>$41.00</h6>
							</div>
						</div>
					</div>
					<button class="btn button-default">Process to Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart menu -->

	<!-- shop single -->
	<div class="pages section">
		<div class="container">
			<div class="shop-single">
				<img src="/storage/{{$res->goods_img}}" alt="">
				<h5>商品名称：{{$res['goods_name']}}</h5>
				<div class="price">商品单价：${{$res['goods_price']}}</div>
				<p id="goods_id" goods_id="{{$res->goods_id}}">商品简介：{{$res['goods_desc']}}</p>
				<input type="text" id="buy_number">
				<button type="button" class="btn button-default addCart">加入购物车</button>
			</div>
			<div class="col s9" id="shoucang" shoucang="{{$shoucang['s_id']}}">
					<div class="review-title">
						@if($shoucang['is_shoucang']==2)
						<span>
							<strong id="shoucang2"><font>❤</font>收藏</strong>
						</span>
						@else
						<span>
							<strong id="shoucang"><font color="red">❤</font>收藏</strong>
						</span>
						@endif
					</div>
				</div>
			<div class="review">
					<h5>n 条评论</h5>
					<div class="review-details">
						<div class="row">
							<div class="prism-player" id="player-con"></div>
							<div class="col s3">
								<img src="img/user-comment.jpg" alt="" class="responsive-img">
							</div>
							@foreach($pinglun as $k=>$v)
							<div goods_id="{{$v->goods_id}}" class="col s9">
								<div class="review-title">
									<span><strong user_id="{{$v->id}}" class="user_id">{{$v->name}}</strong> | {{date('Y-m-d H:i:s',$v->p_time)}} | <a href="">回复</a></span>
								</div>
								<p>{{$v->p_content}}</p>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			<script>
                var player = new Aliplayer({
                        "id": "player-con",
                        "source": "/storage/{{$shi['m3u8']}}",
                        "width": "50%",
                        "height": "250px",
                        "autoplay": true,
                        "isLive": false,
                        "rePlay": false,
                        "playsinline": true,
                        "preload": true,
                        "controlBarVisibility": "hover",
                        "useH5Prism": true
                    }, function (player) {
                        console.log("The player is created");
                    }
                );
			</script>

				<div class="review-form">
					<div class="review-head">
						<h5>在下面发布评论</h5>
					</div>
					<div class="row">
						<form class="col s12 form-details">
							<div class="input-field">
								<textarea name="textarea-message" id="textarea1" cols="30" rows="10" class="materialize-textarea" class="validate" placeholder="YOUR REVIEW"></textarea>
							</div>
							<div class="form-button">
								<div class="btn button-default aaaaa">点击评论</div>
							</div>
						</form>
					</div>
				</div>
		</div>
	</div>
	<!-- end shop single -->

	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->

	<!-- footer -->
	@include('layout.foot')
	<!-- end footer -->

	@endsection
<script src="/static/jquery.js"></script>

<script>
	//评论
		$(document).ready(function(){
			$('.aaaaa').click(function(){
				var content=$('#textarea1').val();
				var goods_id=$('#goods_id').attr('goods_id')

				$.ajax({
					url:"{{url('index/pinglun')}}",
					data:{content:content,goods_id:goods_id},
					type:"post",
					success:function(res){
						if(res=='ok'){
							alert("评论成功!请手动刷新");
						}else{
							alert("评论失败");
						}
					}
				});
			})
			//收藏变为未收藏
			$('#shoucang').click(function(){
				var shoucang=$('#shoucang').attr('shoucang')
                var goods_id=$('#goods_id').attr('goods_id')
				$.ajax({
					url:"{{url('index/shoucang')}}",
					data:{shoucang:shoucang,goods_id:goods_id},
					type:"post",
					success:function(res){
						if(res=="ok"){
							alert("取消收藏成功！请手动刷新");
						}
					}
				});
			})
			//未收藏变为收藏
			$('#shoucang2').click(function(){
				var shoucang=$('#shoucang').attr('shoucang')
                var goods_id=$('#goods_id').attr('goods_id')
				$.ajax({
					url:"{{url('index/shoucang2')}}",
					data:{shoucang:shoucang,goods_id:goods_id},
					type:"post",
					success:function(res){
					    // console.log(res);
						if(res=="ok"){
							alert("收藏成功！请手动刷新");
						}
					}
				});
			})
			//加入购物车
			$('.addCart').click(function(){
				var goods_id=$('#goods_id').attr('goods_id')
				var buy_number=$('#buy_number').val()
				$.ajax({
					url:"{{url('index/addCart')}}",
					data:{goods_id:goods_id,buy_number:buy_number},
					type:"post",
					success:function(res){
						if(res=="ok"){
							if(window.confirm("加入购物车成功！点击确定进入购物车")){
								location.href="/index/cart/";
							}

						}
					}
				});
			})
		})
</script>
