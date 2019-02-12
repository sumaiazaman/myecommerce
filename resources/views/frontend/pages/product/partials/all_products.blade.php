<div class="row">

 @foreach($products as $product)
  <div class="col-md-4">
      <div class="card">
      @php  $i=1; @endphp
      @foreach($product->images as $image)
        @if($i > 0)
        <a href="{!! route('products.show', $product->slug) !!}">
            <img class="card-img-top feature-img" src="{{asset('images/products/'.$image->image)}}" alt="{{ $product->title }}">
        </a>
        @endif
          @php  $i--; @endphp
      @endforeach
        <div class="card-body">
          <h4 class="card-title">
            <a href="{!! route('products.show', $product->slug) !!}">{{ $product->title }}</a>
          </h4>
          <p class="card-text">{{ $product->price }}</p>
          <a href="#" class="btn btn-outline-warning">Add to cart</a>
     </div>
   </div>
 </div>
  @endforeach

</div>
<div class="mt-4 pagination" >
  {{ $products->links() }}
</div>
