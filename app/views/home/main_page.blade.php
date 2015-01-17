@extends('layouts.master')

@section('content')

    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>E-Commerce Template</h1>
            <p class="lead">Get Your Style On</p>
        </div>

    </div>





    <div class="container">
        <div class="menu row">

            <div class="product col-sm-6">
                <a href="#"><img class="img-responsive" src="/products/{{$mainProduct->id}}/{{$mainProduct->image_src}}"><i class="btn btn-product fa fa-star"></i></a>
                <hr>
                <h2>{{$mainProduct->name}}</h2>
                <p>{{nl2br($mainProduct->description)}}</p>
                <hr>
                <h2 class="text-right">$39</h2>
                <button class="btn btn-primary btn-lg ">Add to Cart</button>
                <hr>


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#reviews">Reviews</a></li>
                    <li><a data-toggle="tab" href="#details">Details</a></li>
                    <li><a data-toggle="tab" href="#sizing">Sizing</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="reviews">

                        <h4>Buyer Reviews</h4>
                        <ul class="list-unstyled">
                            <li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                            <li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                            <li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
                            <li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                        </ul>

                    </div>
                    <div class="tab-pane" id="details"><h4>Product Informartion</h4></div>
                    <div class="tab-pane" id="sizing"><h4>Size Chart</h4></div>
                </div>


            </div>
            <div class="col-sm-6">
                <div class="productsrow">
                    @forelse($products as $product)
                    <div class="product menu-category">
                        <div class="menu-category-name list-group-item active">Accessories</div>
                        <div class="product-image">
                            <img class="product-image menu-item list-group-item" src="/products/{{$product->id}}/{{$product->image_src}}">
                        </div> <a href="#" class="menu-item list-group-item">{{$product->name}}<span class="badge">£28</span></a>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--/row-->
    </div>



    {{--<div class="row">--}}
        {{--<div class="col-md-3">--}}

            {{--<div class="panel panel-default">--}}
                {{--<!-- Default panel contents -->--}}
                {{--<div class="panel-heading">Categories</div>--}}
                {{--<!-- List group -->--}}
                {{--<ul class="list-group">--}}
                {{--@foreach($categories as $shop)--}}
                        {{--@foreach($shop['children'] as $category)--}}

                            {{--<li class="list-group-item">{{$category['title']}}</li>--}}

                            {{--@if ($category['children'])--}}

                                {{--@foreach($category['children'] as $subcategory)--}}
                                    {{--<li class="list-group-item">{{$subcategory['title']}}</li>--}}
                                {{--@endforeach--}}

                            {{--@endif--}}

                        {{--@endforeach--}}
                {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}

        {{--</div>--}}
        {{--<div class="col-md-9">--}}

            {{--<div class="panel panel-default">--}}
                {{--<!-- Default panel contents -->--}}
                {{--<div class="panel-heading">Products</div>--}}
                {{--<!-- List group -->--}}
                {{--<ul class="list-group">--}}
                {{--@forelse($products as $product)--}}
                    {{--<li class="list-group-item">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-10">{{ $product->name }}</div>--}}
                            {{--<div class="col-md-2">12.99</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@empty--}}
                    {{--<div class="alert alert-danger">Products not found!</div>--}}
                {{--@endforelse--}}
                {{--</ul>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}
@stop