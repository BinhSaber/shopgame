<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.header')
</head>

<!-- carosel -->
<div class="container">
    <div class = "row">
       <article class=" row col-sm-4">

          <div class="row" style="padding: 0; max-height: 300px; overflow-y: scroll;">
          <div class="list-group" ng-controller="danhmucList">
              <a ng-repeat="category in categorys" ng-init="showCategory(category)"  href="sanpham?danhmuc=<%category.id%>" class="list-group-item list-group-item-action">
                <img ng-model="hinhdm" src="/assets/img/<%category.hinhdm%>" width="50px" class="category-img"/>
                <span ng-model="tendm"><%category.tendm%></span>
              </a>
            </div>
          </div>
        </article>
           <aside class="row col-sm-8">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner banner-slide">
                <div class="carousel-item active">
                  <img src="/assets/img/bannerfgo.jpg" class="d-block w-100" alt="banner-fgo">
                </div>
                <div class="carousel-item">
                  <img src="/assets/img/bannera9.jpg" class="d-block w-100" alt="banner-a9">
                </div>
                <div class="carousel-item">
                  <img src="/assets/img/bannere7.png" class="d-block w-100" alt="banner-e7">
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
             </div>
           </aside>
         </div>
    </div>
   </div>
  <div class="container">
    <div class="row" style="margin-top: 25px;">
      <div class="container px-4 py-2" id="featured-3">
        <h2 class="pb-2 border-bottom">Sản Phẩm Nổi Bật</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-4" ng-controller="sanphamList">
          <div ng-repeat="product in products" class = "row card product" style="padding: 0px;">
            <div class = "card-body" style="padding: 0px;">
                <a href="/chitietsanpham?sanpham=<%product.id%>" value="<%product.id%>"><img class="img-fluid" src="/assets/img/<%product.hinhsp%>" style="border-radius:5px 5px 0px 0px"/></a>
                <div class="py-2 bg-gray-200 px-2" style="background-color: gray;"></div>
                <div class="container text-center">
                  <div class="row row-cols-1">
                    <div class="col" style="color: blue; font-weight:bold;"><%product.tensp%></div>
                    <div class="col"><%product.mota%></div>
                    <div class="col" style="margin-top: 5px;">Trạng thái: <%product.trangthaisp%></div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row row-cols-2">
                      <div class="col" style="border:1px solid red; border-radius: 3px;"><%product.giasp%> đ</div>
                      <a href="/chitietsanpham?sanpham=<%product.id%>" class="col" style="text-decoration:none;">Mua</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container px-4 " id="featured-3" ng-controller="danhmucList">
        <h2 class="pb-2 border-bottom" style="text-align: center;">DANH MỤC ACC GAME</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
          <div ng-repeat="category in categorys" class = "row card category" style="padding: 0px;">
            <div class = "card-body" style="padding: 0px;">
                <img class="img-fluid" src="/assets/img/<%category.hinhdm%>" style="border-radius:5px 5px 0px 0px"/>
                <div class="container text-center" style="padding-left: 0px;">
                  <div class="row">
                    <div class="col"><%category.tendm%></div>
                  </div>
                </div>
                <div class="container text-center" style="padding-left: 0px;">
                  <div class="row">
                    <button type="button" class="btn btn-primary"><a href="sanpham?danhmuc=<%category.id%>" style="color:white;text-decoration:none;">Mua ngay</a></button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('client.footer')
