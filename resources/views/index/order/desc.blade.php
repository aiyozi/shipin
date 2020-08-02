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

                <div class="blog-single-content">
                    <h5></h5>
                    <div class="date">
                        <span>
                            <i class="fa fa-calendar"></i>
                            <input type="button" value="收藏">

                        </span>
                    </div>
                    @foreach($data as $k=>$v)
                        <img src="/storage/{{$v->goods_img}}" alt="">
                        评论用户<input type="text" placeholder="{{$v->name}}">
                        评论内容 <input type="text" placeholder="{{$v->p_content}}">
                        评论商品 <input type="text" placeholder="{{$v->goods_name}}">
                    @endforeach

                </div>
                <div class="comment">
                    <h5>1 Comments</h5>
                    <div class="comment-details">
                        <div class="row">
                            <div class="col s3">
                                <img src="/static/img/user-comment.jpg" alt="">
                            </div>
                            <div class="col s9">
                                <div class="comment-title">
                                    <span><strong>John Doe</strong> | Juni 5, 2016 at 9:24 am | <a href="">Reply</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis accusantium corrupti asperiores et praesentium dolore.</p>
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

