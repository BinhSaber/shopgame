<div class="container-fluid " style="padding: 15px 0 0px;background-color: #f2f2f2;">
    <div class="container">
      <footer class="py-0">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>THÔNG TIN</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Điều khoản dịch vụ</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách bảo mật</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>TÀI KHOẢN</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Đăng kí</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Đăng nhập</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>LIÊN HỆ</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hotline: 0328113543 (8:00 - 22:00)</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Email: hotro@gamegacha.com</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>GỬI LIÊN HỆ</h5>
              <p>Nhận thông tin mới nhất từ chúng tôi.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" style="border-color:black;" placeholder="Email address">
                <button class="btn btn-primary" type="button">Send</button>
              </div>
            </form>
          </div>
        </div>

        <div class="flex-column flex-sm-row justify-content-between border-top">
          <p style="text-align: center; padding: 8px 0 8px; margin-bottom: 0px;">
            <strong><span style="color:#af1e30;">GAME GACHA 2022 INC</span>&copy;  ALL RIGHTS RESERVED.</strong>
          </p>
        </div>
      </footer>
    </div>
</div>
</body>
<script>
    var app = angular.module('admin', []);

    app.config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);

  // Quản lý Danh mục
  app.controller('danhmucList', function($scope) {
        $scope.categorys = [
            { id: 1, tendm:  "Fate Grand Order", hinhdm: "fgo.png" },
        ];

    });
  //List dm trong thêm sp
  app.controller('danhmucListsp', function($scope) {
      $scope.listdms = [
        { id: 1, tendm:  "Fate Grand Order", hinhdm: "fgo.png" },
      ];

  });

  //Table list sản phẩm
  app.controller('sanphamList', function($scope) {
      $scope.products = [
        { id: 1, tensp:  "Acc gem 6 xe", giasp:  "250.000", hinhsp:  "sp1.jpg", mota: "250 GA, 15 Tickets, 350+ SQ", trangthaisp: "Still", tkgame: "AmqWrElmG", mkgame: "admin123456", maloai: 1},
      ];

  });

