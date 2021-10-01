@extends('pages.sanpham.index')


@section('category')
    
<nav class="navbar navbar-expand-md bg-fade fixed-top ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <!-- <span class="navbar-toggler-icon " ></span> -->
  <i class="fa fa-bars" aria-hidden="true"></i>
</button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExampleDefault">
        <ul class="navbar-nav text-uppercase mt-3">
            <li class="nav-item active">
                <a class="nav-link" href="#home">
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
                <a class="nav-link" href="#products">
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


@endsection