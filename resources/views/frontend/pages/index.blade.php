@extends('frontend.layouts.master')

@section('content')

{{--Start sidebar + content--}}
<div class="container margin-top-20">  {{--margin-top-20 class from style.css--}}
  <div class="row">
    <div class="col-md-4">
    @include('frontend.partials.product-sidebar')
    </div>
    <div class="col-md-8">
      <div class="widget">
        <h3>All Products</h3>
          @include('frontend.pages.product.partials.all_products')
      </div>
    </div>
  </div>
</div>

{{--End sidebar + content--}}
@endsection
