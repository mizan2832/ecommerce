@extends('front.welcome')
@section('title','Home')
@section('content')
<div class="container">

    <!--MAIN SLIDE-->
    @include('front.includes.home.slider')

    <!--BANNER-->
    {{-- @include('front.includes.home.banner') --}}

    <!--On Sale-->
    @include('front.includes.home.sale')

    <!--Latest Products-->
    @include('front.includes.home.latestProduct')

    <!--Product Categories-->
    @include('front.includes.home.categories')			

</div>
@endsection