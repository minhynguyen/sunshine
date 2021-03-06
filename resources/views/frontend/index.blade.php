@extends('frontend.layout.app')   
@section('content')

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="{{ asset ('theme/obaju/img/main-slider1.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset ('theme/obaju/img/main-slider2.jpg')}}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset ('theme/obaju/img/main-slider3.jpg')}}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{ asset ('theme/obaju/img/main-slider4.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->


            <!-- search -->
        <div>
            <div class="container-fluid">
                <form class="navbar-form navbar-right"> 
                    <div class="form-group">
                        <input type="text" class="form-control" id="txttuKhoa" placeholder="Tìm Kiếm" style="width: 100%" value="{{$tuKhoa or ''}}">
                    </div>
                    <div class="form-group">
                        <select id="cmbLoai" class="form-control">
                            <option value="0">ALL</option>
                            @foreach($dsLoai as $l)
                            <option value="{{$l->l_ma}}">{{$l->l_ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cmbChude" class="form-control">
                            <option value="0">ALL</option>
                            @foreach($dsChude as $cd)
                            <option value="{{$cd->cd_ma}}">{{$cd->cd_ten}}</option>
                            @endforeach
                        </select>
                    </div>

                    <?php 
                        $dsGia = [];
                        for($i=200000; $i<=2200000; $i+= 200000){
                            array_push($dsGia, $i);
                        }
                     ?>
                     <div class="form-group">
                        <select id="cmbgiaTu" class="form-control">
                            <option value="0">ALL</option>
                            @foreach($dsGia as $gia)
                            <option value="{{$gia}}">{{number_format($gia)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cmbgiaDen" class="form-control">
                            <option value="0">ALL</option>
                            @foreach($dsGia as $gia)
                            <option value="{{$gia}}">{{number_format($gia)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button id="btnTimkiem" class=" btn btn-default navbar-right" type="button">Tìm Kiếm</button>
                    </div>
                </form>
            </div>
        </div>
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Sản Phẩm Của Chúng Tôi</h2>
                        </div>
                    </div>
                </div>

                <!-- /.container -->
<div class="product-slider">
    @foreach ($dsSanPham as $sanpham)
    <div class="item">
        <div class="product">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <a href="detail.html">
                            <img src="{{ asset ('upload/' .$sanpham->sp_hinh)}}" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="back">
                        <a href="detail.html">
                            <img src="{{ asset ('upload/' .$sanpham->sp_hinh)}}" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <a href="detail.html" class="invisible">
                            <img src="{{ asset ('upload/' .$sanpham->sp_hinh)}}" alt="" class="img-responsive">
            </a>
            <div class="text">
                <h3><a href="detail.html">{{ $sanpham->sp_ten }}</a></h3>
                <p style="text-align: center;">{{ $sanpham->sp_thongtin }}</p>
                <p class="price">{{ $sanpham->sp_giaban }}</p>
                
                <ngcart-addtocart template-url="{{asset('vendor/ngCart/template/ngCart/addtocart.html')}}" id="{{$sanpham->sp_ma}}" name="{{$sanpham->sp_ten}}" price="{{$sanpham->sp_giaban}}" quantity="1" quantity-max="10" data="item">Add to Cart</ngcart-addtocart>
            </div>
            <!-- /.text -->
        </div>
    <!-- /.product -->
</div>
@endforeach
</div>
            </div>
            <!-- /#hot -->
<div class="container">
            <!-- *** HOT END *** -->

</div>
            <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
            <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get Inspired</h3>
                        <p class="lead">Get the inspiration from our world class designers</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset ('theme/obaju/img/getinspired1.jpg')}}" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset ('theme/obaju/img/getinspired2.jpg')}}" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset ('theme/obaju/img/getinspired3.jpg')}}" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** GET INSPIRED END *** -->

            <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>

                        </div>

                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->

            <!-- *** BLOG HOMEPAGE END *** -->


        </div>

    

@endsection

@section('script')
    <script>


    $(document).ready(function(){
        $("#btnTimkiem").click(function(){
        tuKhoa = $('#txttuKhoa').val().trim();
        tuKhoa = tuKhoa == "" ? "-" : tuKhoa;
        maLoai = $('#cmbLoai :selected').val();
        maChude = $('#cmbChude :selected').val();
        giaTu = $('#cmbgiaTu :selected').val();
        giaDen = $('#cmbgiaDen :selected').val();

        location.href = "/timkiem/"+tuKhoa+"/"+maLoai+"/"+maChude+"/"+giaTu+"/"+giaDen;


    });
});
</script>
@endsection
