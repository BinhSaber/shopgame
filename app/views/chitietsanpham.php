<?php
require_once __DIR__ . '/wit/header.php';
?>
<style>
    .price {
          font-weight: 600;
          font-size: 24px;
          font-family: roboto-condensed-bold;
        }
    .price-text {
        color: #919191;
        text-transform: uppercase;
    }
</style>
<div class="container">
    <div class="row" style="margin-top: 25px;"> 
        <div ng-controller="sanphamSP">
            <div ng-repeat="sanpham in sanphams">
                <!-- Header Details Product -->
                <div class="container px-4 py-2" id="featured-3">
                <p class="pb-2 border-bottom" style="background-color: white; font-size: 20px;">
                    <span class="fa-solid fa-house"></span>
                    Trang chủ / 
                    <span style="color: gray;">{{sanpham.tensp}}</span>
                </p>
                <div class="header">
                    <h1 class="title-product">
                    {{sanpham.tensp}} 
                    </h1> 
                </div>
                <!-- Details Product -->
                <div class = "row">
                        <article class="row col-sm-6">
                            <div id="carouselExampleIndicators" class="carousel slide" style="padding-left: 0;">
                                <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner banner-slide">
                                <div class="carousel-item active">
                                    <img src="/assets/img/{{sanpham.hinhsp}}" class="d-block w-100" alt="banner-fgo">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/{{sanpham.hinhsp}}" class="d-block w-100" alt="banner-a9">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/{{sanpham.hinhsp}}" class="d-block w-100" alt="banner-e7">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </article>
                        <aside class="row col-sm-6">
                        <div class="container">
                            <div class="row" style="background-color: white;">
                            <div class="col-md-4">
                                <div class="box">
                                <div class="text-wrap">
                                    <div class="text text-center">Mã sản phẩm</div>
                                    <div class="text-1 text-center" style="color:green;">
                                    <span class="fa-solid fa-qrcode"></span>
                                    WG{{sanpham.id}}
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                <div class="text-wrap">
                                    <div class="text text-center">Tình trạng</div>
                                    <div class="text-1 text-center" style="color:green;">
                                    <span class="fa-solid fa-house-signal"></span>
                                    {{sanpham.trangthaisp}}
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                <div class="text-wrap">
                                    <div class="text text-center">Hướng dẫn</div>
                                    <div class="text-1 text-center" style="color:skyblue;">
                                    <span class="fa-solid fa-blog"></span>
                                    Xem hướng dẫn
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <br>
                            <div class="row" style="background-color: white;">
                            <div class="price-text">
                                Giá Sản Phẩm
                            </div>
                            <div class="price">{{sanpham.giasp}} VNĐ</div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                <button class="btn btn btn-danger btn-block">Mua Ngay</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </aside>
                        <div class="row" style="padding-left: 0;">
                            <div class="row col-sm-12">
                            <h1 class="row">CHI TIẾT TÀI KHOẢN</h1>
                            <div class="details" style="background-color: white;">
                                <ul class="list-unstyled">
                                <li>FGO Endgame Account Info</li>
                                <li>Server: Japan</li>
                                <li>Đăng nhập : Transfer Code</li>
                                <li>Chắc chắn sẽ có nhân vật : Castoria + Cáo Light + Skadi Summer + Skadi caster + Oberon + Archetype</li>
                                </ul>
                                <div class="warn" style="font-size: 20px;">
                                Hãy kiểm tra đủ nhân vật,tài nguyên,map trước khi gacha , nếu không đủ nhân vật như mô tả hãy báo cho Shop                     
                                </div>
                                <div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
              <hr>
              <div class="row" ng-controller="sanphamLQ">
                <div ng-repeat="sanphamlq in sanphamlqs">
                    <h2 class="row">Sản Phẩm Liên Quan</h2>
                    <div class = "row card product" style="padding: 0px;">
                        <div class = "card-body" style="padding: 0px;">
                            <a href="/chitietsanpham?sanpham={{sanphamlq.id}}" value="{{sanphamlq.id}}"><img class="img-fluid" src="/assets/img/{{sanphamlq.hinhsp}}" style="border-radius:5px 5px 0px 0px"/></a>
                            <div class="py-2 bg-gray-200 px-2" style="background-color: gray;"></div>
                            <div class="container text-center">
                            <div class="row row-cols-1">
                                <div class="col" style="color: blue; font-weight:bold;">{{sanphamlq.tensp}}</div>
                                <div class="col">{{sanphamlq.mota}}</div>
                                <div class="col">{{sanphamlq.trangthai}}</div>
                            </div>
                            </div> 
                            <div class="container text-center">
                            <div class="row row-cols-2">
                                <div class="col" style="border:1px solid red; border-radius: 3px;">{{sanphamlq.giasp}} đ</div>
                                <a href="/chitietsanpham?sanpham={{sanphamlq.id}}" class="col" style="text-decoration:none;">Mua</a>
                            </div>
                            </div> 
                        </div> 
                    </div> 
                </div>                 
            </div>
        </div>
        </div>
      </div>
      
    </div>
<?php
require_once __DIR__ . '/wit/footer.php';
?>

<script>
    //Show sản phẩm theo danh mục
    app.controller('sanphamSP', function($scope) {
        $scope.sanphams = [
            <?php
                extract($load1sp);
                $ttsp = ($trangthaisp == 0) ? "Còn" : "Hết";
                echo     "{ id: ".$id.", tensp:  '".$tensp."', giasp:  '".$giasp."', hinhsp:  '".$hinhsp."', mota: `".$mota."`, trangthaisp: '".$ttsp."', tkgame: '".$tkgame."', mkgame: '".$mkgame."', maloai: ".$maloai."},";
            ?>
        ];
    });
    // sp liên quan
    app.controller('sanphamLQ', function($scope) {
            $scope.sanphamlqs = [
                <?php
                    extract($load1sp);
                    $maloai_lq = $maloai;
                    $spchon = $id;
                    foreach($listsp as $sp) {
                        extract($sp);
                        if($maloai_lq == $maloai && $spchon != $id) {
                            $ttsp = ($trangthaisp == 0) ? "Còn" : "Hết";
                            echo     "{ id: ".$id.", tensp:  '".$tensp."', giasp:  '".$giasp."', hinhsp:  '".$hinhsp."', mota: `".$mota."`, trangthaisp: '".$ttsp."', tkgame: '".$tkgame."', mkgame: '".$mkgame."', maloai: ".$maloai."},";
                        }
                    }
                ?>
            ];

        });
</script>