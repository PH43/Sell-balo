
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
   <link href="{{ URL::asset('css/detail.css') }}" rel="stylesheet">
    <script language="javascript" src="{{URL::asset('js/category_view.js')}}"></script>

    <script src="https://kit.fontawesome.com/be73168b4c.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light text-h bg-white fixed-top ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon " ></span> -->
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExampleDefault">
            <ul class="navbar-nav text-uppercase mt-3 ">
                <li class="nav-item active">
                    <a class="nav-link " href="#home">
                        <i class="fa fa-home" aria-hidden="true"></i> Trang Chủ
                    </a>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamenu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link "> <i class="fa fa-suitcase" aria-hidden="true"></i> Sản Phẩm</a>
                    <div aria-labelledby="megamenu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container-fluid p-0">
                          <div class="row bg-dark text-light rounded-0 m-0 px-5 shadow-sm">  
                            <div class="col-12">
                              <div class="p-4">
                                <div class="row mx-3">
                                    @foreach ($category as $item)
                                  <div class="col-sm-6 col-lg-3 mb-4 ">
                                    <h6 class="font-weight-bold ">{{$item->category_name}}</h6>
                                    <ul class="list-unstyled">
                                        @foreach ($item->childrenCategories as $childrenCategory)
                                        @include('pages.category.child_category',['child_category'=>$childrenCategory])
                                        @endforeach
                                    </ul>
                                  </div>
                            @endforeach
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#products">
                        <i class="fa fa-envelope"></i> Thông tin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        <i class="fa fa-phone"></i> Liên Hệ
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <section>
        <div class="col-12 text-center">
            <h1 class="py-3 text-color-bom">New Arrivals Products</h1>
        </div>
            <div class="row">
                <div class="col-12 col-sm-9">
                    @yield('content')
                </div>
                <div class="col-12 col-sm-3">
                    <h4>Giỏ hàng</h4>
                    <hr>
                </div>
            </div>
    </section>



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