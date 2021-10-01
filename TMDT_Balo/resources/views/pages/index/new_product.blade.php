@extends('layout')


@section('product')

<section id="popular-destinations" class="popular-destinations py-2 bg-light ">
    <div class="container-fluid container-fluid-max ">
        <!-- PRODUCT -->
        <div class="row">
            
            <div class="col-12 text-center">
                <h1 class="py-3 text-color-bom">New Arrivals Products</h1>
            </div>
            
            @foreach($new_product as $key => $product)
            <div class="col-12 col-sm-6 col-md-3">
                <a href="" class="text-white">
                    <figure class="position-sticky overflow-hidden">
                        <img class="img-fluid" src="{{URL::asset('images/sanpham/'.$product->product_image)}}" alt="Vienna">
                        <figcaption class="d-flex align-items-center justify-content-center position-absolute">
                            <h3>New</h3>
                        </figcaption>
                    </figure>
                    <div class="text-center font-weight-bold">
                        <h5 class="text-h">{{$product->product_name}}</h5>
                        <p class="text-color-bom">{{$product->product_price}} <u>VNĐ</u></p>
                    </div>
                </a>
            </div>
          
            @endforeach
        </div>
        <div class="row">
            <div class="col text-center py-3">
                <a class="btn bg-red text-white" href="" role="button">More Destinations ↓</a>
            </div>
        </div>
        <!-- ---- -->

    </div>
</section>


@endsection