@extends("layout.shop")
@section("title",'收货地址添加')
@section('content')
    @include('layout.top');
    <!-- side nav right-->
    @include('layout.navright');
    <!-- end side nav right-->

    @include('layout.bottom');
    @foreach($cart as $k =>$v)
        <div class="cart section">
            <div class="container">
                <div class="pages-head">
                    <h3>CART</h3>
                </div>
                <tr class="content">
                    <div class="cart-1">
                        <div class="row">
                            <div class="col s5">
                                <h5>Image</h5>
                            </div>
                            <div class="col s7">
                                <img src="/storage/{{$v->goods_img}}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Name</h5>
                            </div>
                            <div class="col s7">
                                <h5><a href="">{{$v->goods_name}}</a></h5>
                            </div>
                        </div>
                        <div class="row" id="aaa">
                            <div class="col s5">
                                <h5>Quantity</h5>
                            </div>
                            <div class="col s7">
                                <input value="{{$v->buy_number}}" placeholder="{{$v->buy_number}}" type="text" class="buy_number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s5">
                                <h5>Price</h5>
                            </div>
                            <div class="col s7">
                                <p goods_price="{{$v->goods_price}}" class="goods_price" value="{{$v->goods_price}}">{{$v->goods_price}}</p>
                            </div>
                        </div>
                        <div class="row aaa" goods_id="{{$v->goods_id}}" id="bbb">
                            <div class="col s5">
                                <h5>Action</h5>
                            </div>
                            <div class="col s7">
                                <h5><i class="fa fa-trash" id="del" ></i></h5>
                            </div>
                        </div>

                        <div class="total">
                            <div class="row">
                                <div class="col s7">
                                    <h5>小计</h5>
                                </div>
                                <div class="col s5 dd">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col s7">
                                <h5>总价</h5>
                            </div>
                            <div class="col s5">
                                <h5>$20.00</h5>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col s7">
                                <h6>Total</h6>
                            </div>
                            <div class="col s5">
                                <h6></h6>
                            </div>
                        </div>
                        </div>
                        <button class="btn button-default">Process to Checkout</button>
                    </div>
                </tr>
            </div>
        </div>
    </div>
            <!-- end index -->

            <!-- loader -->
            <div id="fakeLoader"></div>
            <!-- end loader -->
        @endforeach
            <!-- footer -->
            <div class="footer">
                <div class="container">
                    <div class="about-us-foot">
                        <h6>Mstore</h6>
                        <p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
                    </div>
                    <div class="social-media">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-google"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="copyright">
                        <span>© 2017 All Right Reserved</span>
                    </div>
                </div>

            </div>

            @endsection
            <script src="/static/jquery.js"></script>
            <script>
                //单删
                $(function(){
                    $(document).on("click","#del",function(){
                        var _this = $(this);
                        var goods_id = $('.aaa').attr('goods_id');
                        $.ajax({
                            url:"{{url('index/cartDel')}}",
                            data:{goods_id:goods_id},
                            type:"post",
                            success:function (res) {
                                  console.log(res);
                            }
                        })
                    })
                    //获取商品购买量
                    $(document).on("blur",'.buy_number',function(){
                        var _this=$(this);//当前失去焦点
                        //获取商品ID
                        var goods_id =_this.parents("#aaa").siblings("#bbb").attr("goods_id");
                        // alert(goods_id);return  false
                        //1.验证文本框的值
                        var buy_number=_this.val();//购买数量
                        if(buy_number==""){
                            alert("商品购买量不为空");
                            return false
                        }

                        //重新获取小计
                        var goods_price =_this.parents("#aaa").next().find("p").attr('goods_price');
                        $.ajax({
                            url:"{{url('index/toPrice')}}",
                            type:"post",
                            data:{buy_number:buy_number,goods_id:goods_id,goods_price:goods_price},
                            success:function(res){
                                _this.parents('#aaa').siblings(".total").find(".dd").children().text('￥'+res);
                            }
                        });
                    });

                })

            </script>
