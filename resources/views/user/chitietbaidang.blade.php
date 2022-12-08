<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tìm đồ thất lạc</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- /*=========COPY============*/ -->

    <!-- /*=========COPY============*/ -->
    <!--
        
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->



</head>

<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('user-trang-chu')}}">
                <i class="fas fa-film mr-2"></i>
                Trang chủ
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="{{route('user-trang-chu')}}">Trang
                            Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2" href="{{route('user-dang-bai')}}">Đăng Bài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="{{route('user-meo-tim-do')}}">Mẹo Tìm Đồ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{route('user-canh-bao-lua-dao')}}">Cảnh Báo Lừa Đảo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-5" href="{{route('user-ho-so')}}">Hồ Sơ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ asset('img/hero.jpg') }}">
        <form class="d-flex tm-search-form" action="{{ route('user-tim-kiem') }}">
            <input class="form-control tm-search-input" name="tim_kiem" type="search" placeholder="Tìm kiếm" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="col-xl-12 col-lg-7 col-md-6 col-sm-12" style="background-color: #E4E6E9;">
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-12 tm-text-primary">{{ $lsDangBai->tieu_de }}</h2>
            </div>

            <div class="row tm-mb-30">
                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                    <!-- /*=========COPY============*/ -->
                    <div class="display-container">
                        <?php
                        $item = explode('|', $lsDangBai->anh);
                        if (count($item) > 1) {
                            foreach (explode('|', $lsDangBai->anh) as $img) {
                        ?>
                                <img class="mySlides" src="/images/{{ $img }}">
                            <?php
                            }
                            ?>
                            <button class="image-button button-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="image-button button-right" onclick="plusDivs(1)">&#10095;</button>
                            <?php
                        } else {
                            foreach (explode('|', $lsDangBai->anh) as $img) {
                            ?>
                                <img class="mySlides" src="/images/{{ $img }}">
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div style="text-align:center">
                    <?php
                    for ($i = 1; $i <= count($item); $i++) {
                    ?>
                        <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span>
                    <?php
                    }
                    ?>
                </div>
                    <!-- /*=========COPY============*/ -->
                </div>

                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                               <!-- COPY -->
                <!-- Thử Nghiệm -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Nội Dung Báo Cáo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('xl-bao-cao') }}">
                                <div class="modal-body">
                                    <input type="hidden" name="bai_dang_id" value="{{ $lsDangBai->id }}">
                                    <input type="text" name="noi_dung_bao_cao" class="form-control" placeholder="Nội dung">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Báo Cáo</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Bạn có muốn hủy theo dõi bài đăng này không?</h5>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <form action="{{ route('xl-huy-theo-doi') }}">
                                <input type="hidden" name="dang_bai" value="{{ $lsDangBai->id }}">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Hủy theo dõi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Thử Nghiệm -->

                <div class="tm-text-gray-dark reposts">
                    <span class="repost-1">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v repost-1-a tm-text-gray-dark"></i></a>
                        <div class="dropdown-menu">
                            <form action="{{ route('xl-theo-doi') }}">
                                <input type="hidden" name="bai_dang" value="{{ $lsDangBai->id }}">
                                @if($baiDangId == null || $userId == null)
                                <button class="tm-text-primary dropdown-item" type="submit"><i class="fa fa-plus-square"> Theo dõi</i></button>
                                @elseif($baiDangId->bai_dang_id == $lsDangBai->id && $userId->nguoi_dung_id == Auth::user()->id)
                                <!-- <button class="tm-text-primary dropdown-item"><i class="fa fa-plus-square"> Đã Theo dõi</i></button> -->
                                <button type="button" class="tm-text-primary dropdown-item" data-toggle="modal" data-target="#exampleModalCenters"><i class="fa fa-minus-circle"> Hủy theo dõi</i></button>
                                @else
                                <button class="tm-text-primary dropdown-item" type="submit"><i class="fa fa-plus-square"> Theo dõi</i></button>
                                @endif
                            </form>
                            <!-- <a class="tm-text-primary dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-minus-circle"> Báo cáo</i></a> -->
                            <button class="tm-text-primary dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-minus-circle"> Báo cáo</i></button>
                        </div>
                    </span>
                    <span class="repost-2">
                        <a class="tm-text-gray-dark" href="{{ route('user-trang-chu')}}" data-toggle="tooltip" data-placement="bottom" title="Thoát trang chi tiết"><i class="fa fa-times repost-1-b"></i></a>
                    </span>
                </div>
                <!-- COPY -->
                    
                    <div class="tm-bg-gray tm-video-details">
              
                        <div class="mb-4">
                            <h4 class="tm-text-gray-dark mb-3">
                                Người đăng:
                                <a style="color: black;">
                                    <?php
                                    foreach ($lsUser as $nguoidung) {
                                        if ($nguoidung->id == $lsDangBai->nguoi_dung_id) {
                                            echo $nguoidung->ten;
                                        }
                                    } ?>
                                </a>
                            </h4>
                        </div>

                        <div>
                            <h4 class="tm-text-gray-dark mb-3">Loại tin:
                                @if($lsDangBai->loai == 0)
                                <span class="tm-text-gray-dark"> Mất đồ</span>
                                @else
                                <span class="tm-text-gray-dark"> Nhặt đồ</span>
                                @endif
                            </h4>
                        </div>
                        <div>
                            <h4 class="tm-text-gray-dark mb-3">Loại đồ vật:
                                <?php
                                foreach ($lsLoaiDoVat as $loaiDoVat)
                                    if ($loaiDoVat->id == $lsDangBai->loai_do_vat_id) {
                                        echo $loaiDoVat->ten;
                                    }
                                ?>
                            </h4>
                        </div>


                        <div class="mb-4 d-flex flex-wrap">
                            <h4 class="tm-text-gray-dark mb-3">
                                Thời gian: <span class="tm-text-primary"><?php $day = date_create($lsDangBai->thoi_gian);
                                                                            echo date_format($day, 'd/m/Y H:i'); ?></span>
                            </h4>
                        </div>
                        <div class="mb-4">
                            <h3 class="tm-text-gray-dark mb-3">Nội dung</h3>
                            <h2>{{ $lsDangBai->noi_dung }}</h2>
                        </div>
                        <div>
                            <h3 class="tm-text-gray-dark mb-3">Địa điểm</h3>
                            <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->phuong_xa }}</a>
                            <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->quan_huyen }}</a>
                            <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->tinh_tp }}</a>
                        </div>
                        <div>
                            @if($lsDangBai->nguoi_dung_id==Auth::id())
                            <a href="{{ route('user-chinh-sua-bai-dang',['id' => $lsDangBai->id]) }}">Chỉnh sửa</a>
                            @endif
                        </div>
                        <form action="{{ route('user-xoa-bai-dang',['id' => $lsDangBai->id]) }}"enctype="multipart/form-data" id="form-dang-nhap" method="POST">
                        @csrf
                        <button type="submit">Xóa</button>
                        </form>

                    </div>

                </div>
            </div>

            <!-- start accordion -->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#binhLuan" aria-expanded="true" aria-controls="collapseOne">
                        <p class="panel-title " style="display: inline; color:darkslategray;font-size: 25px;"><span class="tm-text-primary">Xem bình luận</span></p>
                    </a>
                    <div id="binhLuan" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                            <div class="tm-bg-gray pt-5 pb-3 tm-text-gray " style="border: solid;border-width: 1px; border-radius: 0px 0px 10px 10px;">
                                <form method="post" action="{{ route('user-binh-luan') }}" style="padding: 20px;">
                                    @csrf
                                    <div class=" tm-bg-gray pt-5 pb-3 tm-text-gray" style="border-top: solid; border-bottom: solid; border-width: 3px; ">

                                        <div class="form-group">
                                            <input class="form-control" style="height: 50px; width: 1000px;display: inline;border-radius:50px;border: solid;border-width: 1px;" name="noi_dung" placeholder="Viết bình luận... " />
                                            <!-- <p class="error_msg" id="noi_dung"></p> -->
                                            <input type=hidden name=bai_dang_id value="{{ $lsDangBai->id }}" />
                                            <input style="display: inline; height: 50px;width: 100px;border-radius:10px;" type=submit class="btn btn-success" value="Thêm" />
                                            <!-- <button class="btn btn-success btn-submit">Submit </button> -->
                                        </div>

                                    </div>

                                </form>



                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                                </div>

                                <div class="col-xl-8 col-lg-5 col-md-8 col-sm-12" style="overflow-y: auto; width:100%; height: 500px;">
                                    <div class="tm-bg-gray tm-video-details">

                                        @include('user\binh-luan', ['comments' => $lsDangBai->comments, 'bai_dang_id' => $lsDangBai->id])

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of accordion -->


        </div>



        <!-- <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Bài đăng khác
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ asset('img/img-01.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hangers</h2>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">16 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
            </div>
        </div> row -->
    </div> <!-- container-fluid, tm-container-content -->

    <!-- ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-submit").click(function(e) {
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var noi_dung = $("input[name='noi_dung']").val();
                var bai_dang_id = $("input[name='bai_dang_id']").val();

                $.ajax({
                    url: "{{ route('user-binh-luan') }}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        noi_dung: noi_dung,

                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.errors)) {
                            $(".error_msg").html('');
                            alert(data.success);
                        } else {
                            let resp = data.errors;
                            for (index in resp) {
                                $("#" + index).html(resp[index]);
                            }
                        }
                    }
                });

            });
        });
    </script>
    <!-- /ajax -->

    <br> <br> <br> <br> <br>

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Giới thiệu trang Tìm Đồ Thất Lạc</h3>
                    <h6>Đã bao giờ bạn bị rơi ví, mất giấy tờ, thất lạc thú cưng yêu quý của bạn chưa?</h6>
                    <p>Nếu đã từng lâm vào hoàn cảnh như vậy thì chắc chắn mọi người sẽ tìm cách để tìm lại những thứ mình bị mất.
                        Trang web <a rel="sponsored" href="{{route('user-trang-chu')}}">timdoVTS.com</a> được sinh ra để làm điều đó. </p>
                    <p>Tại đây mọi người có thể :

                    <div>- Đăng tin tìm đồ, nhặt được đồ.</div>
                    <div>- Đăng tin tìm thú cưng/ bắt được thú cưng bị lạc.</div>
                    <div>- Tìm người thân thất lạc/ gặp người thất lạc thì đăng tin giúp tìm người nhà.</div>
                    <div>- Đăng tin cho đồ không dùng nữa để người đang thiếu có thể lấy, tránh lãng phí tài nguyên cho xã hội.</div>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Thông tin liên hệ</h3>
                    <ul class="tm-footer-links pl-0">
                        <a>Có thể liên hệ qua các cách sau: </a> <br>
                        <a>- Qua email </a>
                        <ul>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201396@caothang.edu.vn</a>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201407@caothang.edu.vn</a>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201377@caothang.edu.vn</a>
                        </ul>
                        <a>- Qua form liên hệ </a>
                        <ul>
                        <li><a href="{{ route('user-lien-he') }}">form</a></li>
                        </ul>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <!-- <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Trang web được xây dựng năm 2022 từ trường Cao Đẳng Kỹ Thuật Cao Thắng
                </div>
                <div class="col-lg-4 col-md-10 col-20 px-20 text-right">
                    Được xây dựng bởi <a class="tm-text-gray" rel="sponsored" target="_parent">Đan Trường-Văn Vỹ-Kim Sơn</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('/js/plugins.js') }}"></script>
    <script src="{{ asset('/js/hinh.js') }}"></script>
    <script src="{{ asset('/js/alert.js') }}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>



</body>

</html>