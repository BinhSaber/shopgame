<head>
    @include('client.header')
</head>

<div class="container">
    <div class="row" style="margin-top: 25px;">
      <div  class="container px-4 py-2" id="featured-3">
        <div ng-controller="danhmucOne">
          <div ng-repeat="danhmucone in danhmucones">
            <h2 class="pb-2 border-bottom"><%danhmucone.tendm%></h2>
          </div>
        </div>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-4" ng-controller="sanphamDm">
          <div ng-repeat="sanphamdm in sanphamdms" class = "row card product" style="padding: 0px;">
            <div class = "card-body" style="padding: 0px;">
            <a href="/chitietsanpham?sanpham=<%sanphamdm.id%>" value="<%sanphamdm.id%>"><img class="img-fluid" src="/assets/img/<%sanphamdm.hinhsp%>" style="border-radius:5px 5px 0px 0px"/></a>
                <div class="py-2 bg-gray-200 px-2" style="background-color: gray;"></div>
                <div class="container text-center">
                  <div class="row row-cols-1">
                    <div class="col" style="color: blue; font-weight:bold;"><%sanphamdm.tensp%></div>
                    <div class="col"><%sanphamdm.mota%></div>
                    <div class="col" style="margin-top: 5px;">Trạng thái: <%sanphamdm.trangthaisp%></div>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row row-cols-2">
                      <div class="col" style="border:1px solid red; border-radius: 3px;"><%sanphamdm.giasp%> đ</div>
                      <a href="/chitietsanpham?sanpham=<%sanphamdm.id%>" class="col" style="text-decoration:none;">Mua</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@include('client.footer')
