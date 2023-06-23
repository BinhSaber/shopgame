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
    var app = angular.module('user', []);

    app.config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);

      // list danh mục
      app.controller('danhmucList', function($scope) {
          $scope.categorys = [
            { id: 1, tendm:  "Fate Grand Order", hinhdm:  "fgo.png" },
          ];
      });

      // tenhienthi
      app.controller('tenHienThi', function($scope) {
          $scope.tenhienthi = [];
              <?php
                // if(isset($_SESSION['user'])) {
                //   echo     "'".$_SESSION['user'][3]."'";
                // } else {
                //   echo  "''";
                // }
              ?>

      });
      //Show home sản phẩm
      app.controller('sanphamList', function($scope) {
          $scope.products = [
            { id: 1, tensp:  "Acc gem 6 xe", giasp:  "250.000", hinhsp:  "sp1.jpg", mota: "250 GA, 15 Tickets, 350+ SQ", trangthaisp: "Still", tkgame: "AmqWrElmG", mkgame: "admin123456", maloai: 1},
              
          ];

      });
      //Show sản phẩm theo danh mục
      app.controller('sanphamDm', function($scope) {
            $scope.sanphamdms = [
                { id: 1, tensp:  "Acc gem 6 xe", giasp:  250000, hinhsp:  "sp1.jpg", mota: "250 GA, 150 ticket, 1k2 SQ", trangthaisp: "Still", tkgame: "AsMopHKms", mkgame: "admin123456", maloai: 1},

            ];

      });

      // Load ten dm
      app.controller('danhmucOne', function($scope) {
        $scope.danhmucones = [
            { id: 1, tendm:  "Fate Grand Order", hinhdm:  "sp1.jpg" },

        ];
      });

        // Person Information
        app.controller('khachhangOne', function($scope) {
            $scope.users = [
                { id: 1, tenhienthi:  "BinhMai", email: "binhmai@gmail.com" ,  phone: 0358901247},

            ];

        });


         //Show sản phẩm theo danh mục
    app.controller('sanphamSP', function($scope) {
        $scope.sanphams = [
            { id: 1, tensp:  "Acc gem 6 xe", giasp:  250000, hinhsp:  "accgem4xe.png", mota: "250+ GA, 150 Ticket, 1k2 SQ - 100% Have Waver", trangthaisp: "Still", tkgame: "AmaksfwBV", mkgame: "admin123456", maloai: 1}
        ];
    });
    // sp liên quan
    app.controller('sanphamLQ', function($scope) {
            $scope.sanphamlqs = [
                { id: 1, tensp:  "Acc gem 6 xe", giasp:  250000, hinhsp:  "accgem4xe.png", mota: "250+ GA, 150 Ticket, 1k2 SQ - 100% Have Waver", trangthaisp: "Still", tkgame: "AmaksfwBV", mkgame: "admin123456", maloai: 1}
            ];

        });

  </script>
   </html>


