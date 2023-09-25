@extends('layouts.frontend')
@section('content')
    <!-- banner part start-->
@include('frontend.home.partials.banner')
    <!-- banner part start-->
@include('frontend.home.partials.feature_part')
    <!-- feature_part start-->

    <!-- upcoming_event part start-->

    <!-- product_list start-->
@include('frontend.home.partials.product_list')
    <!-- product_list part start-->

    <!-- awesome_shop start-->
@include('frontend.home.partials.awesome_shop')
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
@include('frontend.home.partials.product_list2')
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
@include('frontend.home.partials.subscribe_area')
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
@include('frontend.home.partials.client_logo')
    <!--::subscribe_area part end::-->
@endsection
