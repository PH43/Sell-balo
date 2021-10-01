{{-- @extends('pages.index.header') --}}
@extends('pages.sanpham.index')



@section('content')

<div class="container">
        <div class="container-fliud">
            <div class="wrapper row">
                @foreach ($productID as $item)
                    
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{URL::asset('images/sanpham/'.$item->product_image)}}" alt="">
                            </div>
                            <div class="tab-pane" id="pic-2"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg" alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-3"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-4"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg" alt="Học thiết kế web bán hàng Online">
                            </div>
                            <div class="tab-pane" id="pic-5"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg" alt="Học thiết kế web bán hàng Online">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active">
                                <a data-target="#pic-1" data-toggle="tab"><img src="{{URL::asset('images/sanpham/'.$item->product_image)}}" alt="Học thiết kế web bán hàng Online"></a>
                            </li>
                            <li>
                                <a data-target="#pic-2" data-toggle="tab"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg" alt="Học thiết kế web bán hàng Online"></a>
                            </li>
                            <li>
                                <a data-target="#pic-3" data-toggle="tab"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt="Học thiết kế web bán hàng Online"></a>
                            </li>
                            <li>
                                <a data-target="#pic-4" data-toggle="tab"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg" alt="Học thiết kế web bán hàng Online"></a>
                            </li>
                            <li>
                                <a data-target="#pic-5" data-toggle="tab"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg" alt="Học thiết kế web bán hàng Online"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$item->product_name}}</h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div> <span class="review-no">123 đánh giá</span>
                        </div>
                        <p class="product-description">{{$item->product_desc}}</p>
                        <h4 class="price">Giá bán: {{$item->product_price}} đ</h4>
                        <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
                        </p>
                            <h5 class="sizes">Kích cỡ: 
                                <span class="size" data-toggle="tooltip" title="small"> </span>
                            </h5>
                        <h5 class="colors">Màu: <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span> <span class="color green"></span> <span class="color blue"></span>
                        </h5>
                        <div class="action">
                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button> </a>
                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>

    
@endsection

