@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:100px;">
        <div class="col-md-3">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Categories</div>
                <!-- List group -->
                <ul class="list-group">
                @foreach($categories as $shop)
                        @foreach($shop['children'] as $category)

                            <li class="list-group-item">{{$category['title']}}</li>

                            @if ($category['children'])

                                @foreach($category['children'] as $subcategory)
                                    <li class="list-group-item">{{$subcategory['title']}}</li>
                                @endforeach

                            @endif

                        @endforeach
                @endforeach
                </ul>
            </div>

        </div>
        <div class="col-md-9">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Products</div>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10">First product</div>
                            <div class="col-md-2">12.99</div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
@stop