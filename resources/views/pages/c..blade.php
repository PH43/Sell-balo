
<!doctype html>
<html lang="en">

<head>

    <title>BOMBAG-Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://bombag.vn/wp-content/uploads/2021/07/balo-bom-logo.png" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js"></script>

   <!-- Styles -->

   <link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet">
    <script language="javascript" src="{{URL::asset('js/layout.js')}}"></script>

    <script src="https://kit.fontawesome.com/be73168b4c.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


</head>

<body>

    {{-- menu --}}
   @yield('category')
    {{-- end menu --}}

   




    


    <main>
        {{-- slide --}}
        <div id="carouselExampleIndicators" class="carousel slide hero" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>

            <div class="carousel-inner d-flex align-items-center position-relative ">
                @php 
                    $i = 0;
                @endphp
                @foreach($slider as $key => $slide)
                    @php 
                        $i++;
                    @endphp
                    <div class="carousel-item {{$i==1 ? 'active' : '' }}">
                        
                            <img class="d-flex  " alt="{{$slide->slider_desc}}" src="{{URL::asset('images/slider/'.$slide->slider_image)}}">
                           
                    </div>

                @endforeach  

                
                <div class="container-fluid container-fluid-max ">
                    <div class="row ml-3">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <h1 class="text-white font-weight-bold">HELLO SUMMER !</h1>
                            <h3 class="text-white ">NEW COLLECTION !</h3>
                            <div class="col-12 mt-3 px-5 ">
                                <a class="btn bg-bom text-white mr-4 p-3" href="" role="button">Nam</a>
                                <a class="btn bg-red text-white  p-3" href="" role="button">Nữ</a>
                            </div>
                        </div>
                    </div>
                </div>
                  
                    
                </div>

            </div>
          {{-- end slide --}}




        <!-- new collection section start -->
    <div class="layout_padding collection_section mt-5">
    	<div class="container">
    	    <h1 class="text-color-bom"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6 align-items-center">
    	    			<div class="about-img">
    	    				<a class="btn new_bt bg-bom text-white">New</a>
    	    				<div class="shoes-img"><img src="{{URL::asset('images/new-collection-1.jpg')}}"></div>
    	    				<p class="sport_text">Men Sports</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
    	    				<div class="star_icon ">
    	    					<ul>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
    	    			<a class="btn seemore_bt text-white">See More</a>
    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
    	    				<div class="shoes-img2"><img src="{{URL::asset('images/new-collection-2.jpg')}}"></div>
    	    				<p class="sport_text">Men Sports</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
    	    				<div class="star_icon">
    	    					<ul>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="text-green "><strong>HOT SALE</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	</div>
    </div>
    <div class="collectipn_section_3 layuot_padding pb-5">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="{{URL::asset('images/hot-sale.jpg')}}"></div>
    				</div>
    				<div class="col-md-4 sale-shock">
    					<div class="sale_text"><strong>SALE <br><span style="color: #0a0506;">SHOCK</span> <br>BALO</strong></div>
    					<div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
    					<button class="btn seemore">See More</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- new collection section end -->



        <div class="container">
            <h1 class="new_text"><strong>Popular Destinations</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>               
        </div>
        <!-- New Arrivals section start -->
    <div class="gallery_section py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="grid">
                            <figure class="effect-julia ">
                                <img src="https://bombag.vn/wp-content/uploads/2021/07/IMG_4776-2-960x750.jpg" alt="img22" />
                                <figcaption>
                                    <div>
                                        <p><span>New Collection</span></p>
                                        <p>Balo học sinh 2021</p>
                                        <p>And dives into the morning light</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="grid">
                            <figure class="effect-julia ">
                                <img src="https://bombag.vn/wp-content/uploads/2021/07/IMG_4025-1024x853.jpg" alt="img22" />
                                <figcaption>
                                    <h2>
                                    </h2>
                                    <div>
                                        <p><span>New Collection</span></p>
                                        <p>Balo học sinh 2021</p>
                                        <p>And dives into the morning light</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="grid">
                            <figure class="effect-julia ">
                                <img src="../img/OIP.jpg" alt="img22" />
                                <figcaption>
                                    <h2>
                                    </h2>
                                    <div>
                                        <p><span>New Collection</span></p>
                                        <p>Balo học sinh 2021</p>
                                        <p>And dives into the morning light</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-- New Arrivals section end -->

           

        <!-- PRODUCT -->
        @yield('content')
        <!-- ----- -->


        <!-- Banner -->
        <section id="popular-destinations" class="popular-destinations py-5 ">
            <div class="container-fluid container-fluid-max ">
                <h2 class="pb-3 text-color-bom text-center">BACK TO SCHOOL</h2>
                <div class="row">
                    <div class="col-12 col-sm-6 banner">
                        <img src="{{URL::asset('images/banner-col-1.jpg')}}" alt="">
                    </div>
                    <div class="col-12 col-sm-6 banner">
                        <img src="{{URL::asset('images/banner-col-2.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </section>
        <!-- ----- -->



        <section id="featured-destinations" class="featured-destinations bg-lightblue pd-30 ">
            <div class="row no-gutters">
                <div class="col-12 col-md-3 order-1">
                    <div class="gt-img" ><img src="{{URL::asset('images/anh9.jpg')}}" alt=""></div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center text-md-left ">
                    <div class="p-15">
                        <h2 class="pb-3 text-center text-color-bom py-2">Giới thiệu "BOMBAG"</h2>
                        <p><strong>Thành lập từ năm 1999, BOM được khách hàng yêu mến nhắc đến như một thương hiệu "bền bỉ với thời gian", một địa chỉ mua Balo, túi xách uy tín hàng đầu Việt Nam</strong></p>
                        <p>Trải qua hơn 20 năm thành lập và phát triển. BOM không ngừng nghiên cứu và cải thiện nhằm mang đến cho khách hàng những sản phẩm vừa thẩm mỹ, vừa đảm bảo chất lượng. Với slogan "Người bạn thân", BOM không giới hạn là một vật dụng,
                            đồ dùng thông thường mà tự đặt cho mình sứ mạng như một người bạn thân thiết, lắng nghe, sẻ chia với những nhu cầu, tâm tư, nguyện vọng của bạn.</p>
                        <a class="btn bg-red text-white" target="_blank" href="https://en.wikipedia.org/wiki/Neuschwanstein_Castle" role="button">Read More →</a>
                    </div>
                </div>

                <div class="col-12 col-md-5 d-flex align-items-center order-2 py-5">
                    <div class="row pd-30">
                        <div class="col-12 col-md-6 d-flex align-items-center order-2 p-15">
                            <div class="p-15">
                                <h6>TOP 6 BALO LAPTOP NỔI BẬT 2021</h6>
                                <p class="text-sm"> <i class="fa fa-clock-o mg-lr " aria-hidden="true"></i>1 Tháng Tám, 2021 <i class="fa fa-commenting-o mg-lr text-blue" aria-hidden="true"></i>2</p>
                                <a class="btn bg-bom text-white text-sm" target="_blank" href="https://en.wikipedia.org/wiki/%C3%85lesund" role="button">Read More →</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6  order-2 bang-tin ">
                            <img src="{{URL::asset('images/anh2.jpg')}}">
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center order-2 p-15">
                            <div class="p-15">
                                <h6>TOP 6 BALO LAPTOP NỔI BẬT 2021</h6>
                                <p class="text-sm"><i class="fa fa-clock-o mg-lr" aria-hidden="true"></i>1 Tháng Tám, 2021 <i class="fa fa-commenting-o mg-lr text-blue" aria-hidden="true"></i>2</p>
                                <a class="btn bg-bom text-white text-sm " target="_blank" href="https://en.wikipedia.org/wiki/%C3%85lesund" role="button">Read More →</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 order-2 bang-tin">
                            <img src="{{URL::asset('images/anh3.jpg')}}">
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="request-quote" class="pb-5 request-quote bg-lightblue">
            <div class="container-fluid container-fluid-max">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-auto py-3 text-center">
                        <h2 class="mb-0 text-color-bom">Ready to start your next journey?</h2>
                        <p class="mb-0 h4 text-color-bom font-weight-normal">Get in touch today!</p>
                    </div>
                    <div class="col-12 col-md-auto d-flex justify-content-center align-items-center">
                        <a class="btn bg-red text-white font-weight-bold" href="" role="button">
                    REQUEST A QUOTE 
                    <i class="ml-1 fas fa-hand-point-right"></i>
                  </a>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- footer -->
    <!-- <footer style="background-color: #2c292f"> -->
    <footer class="footers ">
        <div class="container py-5">
            <div class="row ">
                <div class="col-md-3 text-center text-md-left ">

                    <div class="py-0 text-center">
                        <div class="footers-logo">
                            <img src="https://bombag.vn/wp-content/uploads/2021/07/balo-bom-logo.png" alt="Logo">
                        </div>
                        <div class="footers-info mt-3">
                            <b>BOM SHOP</b>
                            <p>Since 1999</p>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                            <a href="https://www.instagram.com/"><i id="social-ita" class="fa fa-instagram-square fa-2x social"></i></a>
                            <a href="https://www.youtube.com/"><i id="social-yt" class="fa fa-youtube-play fa-2x social"></i></a>
                            <a href="https://plus.google.com/"><i id="social-re" class="fa fa-reddit-square fa-2x social"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 text-center text-md-left ">
                    <div class="py-2 my-4">
                        <h4>NỘI DUNG </h4>
                        <ul class="list-unstyled">
                            <li><a href="https://bombag.vn/">Trang chủ</a></li>
                            <li><a href="https://bombag.vn/shop/">Sản phẩm</a></li>
                            <li><a href="https://bombag.vn/thong-tin/">Thông tin</a></li>
                            <li><a href="https://bombag.vn/lien-he/">Liên hệ</a></li>
                            <li><a href="https://bombag.vn/cart/">Thanh toán</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 text-center text-md-left ">
                    <div class="py-2 my-4">
                        <h4>DANH MỤC </h4>
                        <ul class="list-unstyled">
                            <li><a href="https://bombag.vn/product-category/ba-lo/ba-lo-nam/">Balo nam</a></li>
                            <li><a href="https://bombag.vn/product-category/ba-lo/ba-lo-nu/">Balo nữ</a></li>
                            <li><a href="https://bombag.vn/product-category/ba-lo/ba-lo-nam/ba-lo-laptop/">Balo Laptop </a></li>
                            <li><a href="https://bombag.vn/product-category/ba-lo/ba-lo-thoi-trang/">Balo thời trang</a></li>
                            <li><a href="https://bombag.vn/product-category/tui-deo/">Túi đeo</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 my-4 text-center text-md-left ">
                    <div class="py-2">
                        <h4>CÁC CHI NHÁNH BOMSHOP </h4>
                        <div class="textwidget">
                            <b> <i class="fa fa-map-marker mx-2 "></i>TP.HCM:</b>
                            <p>47A Đường 3 tháng 2, P.11, Q.10, TP.HCM</p>

                            <b> <i class="fa fa-map-marker mx-2 "></i>ĐÀ NẴNG:</b>
                            <p>CN1: 191 Phan Chu Trinh, Đà Nẵng</p>
                            <p>CN2: 155 Lê Lợi, Đà Nẵng</p>
                            <p>CN3: 110 Nguyễn Thị Minh Khai, Đà Nẵng</p>

                            <b> <i class="fa fa-map-marker mx-2 "></i>HUẾ:</b>
                            <p>58 Đặng Thái Thân, TP.Huế</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>