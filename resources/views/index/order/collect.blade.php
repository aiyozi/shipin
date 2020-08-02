@extends("layout.shop")
@section("title",'收货地址添加')
@section('content')
    @include('layout.top')
    <!-- side nav right-->
    @include('layout.navright')
    <!-- end side nav right-->

    @include('layout.bottom')

    <!-- single post -->
    <div class="pages section">
        <div class="container">
            <div class="blog-single">
                </div>
                <div class="comment">
                    <h5>1 Comments</h5>
                    <div class="comment-details">
                        <div class="row">
                            <div class="col s3">
                                <img src="/static/img/user-comment.jpg" alt="">
                            </div>
                            <div class="col s9">
                                @foreach($goods as $v)
                                <div class="comment-title">
                                    <img src="/storage/{{$v->goods_img}}" alt="">
                                    <strong>用户名:{{$v->name}}</strong></br>商品名称:{{$v->goods_name}} <a href=""></a></span>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <div class="comment-head">
                        <h5>Post Comment in Below</h5>
                        <p>Lorem ipsum dolor sit amet consectetur*</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end single post -->



    <!-- loader -->
    <div id="fakeLoader"></div>
    <!-- end loader -->
@endsection

