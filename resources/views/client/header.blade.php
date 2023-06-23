<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Shop Game Gacha</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <!-- thư viện awesome -->
     <script src="https://kit.fontawesome.com/d0b90f6d80.js" crossorigin="anonymous"></script>
     <!-- link css -->
     <link rel="stylesheet" href="/index-user.css">
     <!-- link angularJS -->
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
     <!-- icon favicon -->
     <link rel="shortcut icon" type="image/png" href="/assets/img/logo.png"/>

     <style>
        .btn-outline-light {
          color: #fff;
          border-color: #fff;
        }

        .btn-outline-light:hover {
          color: #000;
          background-color: #fff;
        }

        .form-control {
          border-color: #fff;
        }

        .input-group {
          position: relative;
          display: flex;
          flex-wrap: wrap;
          align-items: stretch;
          width: 100%;
        }
        .title-product {
            color: white;
            font-size: 35px;
            font-family: 'Roboto-Condensed-Bold';
            /* color: #000; */
            margin: 0px;
            text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;
        }
        .input-group .btn {
          position: relative;
        }

        .input-group .form-control {
          flex: 3;
          width: 100%;
          margin-bottom: 0;
        }

        body {
            background-image: url('/assets/img/background.jpg');
            background-size: cover;
            background-position: center;
        }

        .bill {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 450px;
        }
     </style>
 </head>
 <body ng-app="user">
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a class="logo" href="/"><img src="/assets/img/logo.png"></a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-3 text-white">Trang chủ</a></li>
            <li><a href="#" class="nav-link px-3 text-white">Giới thiệu</a></li>
            <li><div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Danh mục
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" ng-controller="danhmucList">
                <li ng-repeat="category in categorys" ng-init="showCategory(category)" >
                  <a class="dropdown-item" href="sanpham?danhmuc=<%category.id%>" value="<%category.id%>">
                    <input type="hidden" name="id" value="<%category.id%>">
                    <img ng-model="hinhdm" src="/assets/img/<%category.hinhdm%>" width="50px"/>
                      <span ng-model="tendm"><%category.tendm%></span>
                  </a>
                </li>
              </ul>
            </div></li>
            <li><a href="/giohang" class="nav-link px-3 text-white">Giỏ hàng</a></li>
            <li><a href="#" class="nav-link px-3 text-white">Liên hệ</a></li>
          </ul>

          <form class="col-12 col-lg-3 mb-3 mb-lg-0 me-lg-3" role="search">
            <div class="input-group">
              <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
              <button class="btn btn-outline-light" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
          <?php
             if (isset($_SESSION['user']) && ($_SESSION['user'][2]=='thành viên')) {
          ?>
          <div class="text-end" ng-controller="tenHienThi">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <%tenhienthi%>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile">Thông tin người dùng</a></li>
                <li><a class="dropdown-item" href="/doimk">Đổi mật khẩu</a></li>
                <li><a class="dropdown-item" href="/lichsubill">Lịch sử mua hàng</a></li>
                <li><a class="dropdown-item" href="/logout">Đăng xuất</a></li>
              </ul>
            </div>
          </div>
          <?php
             } else if (isset($_SESSION['user']) && $_SESSION['user'][2]=='admin') {
          ?>
          <div class="text-end" ng-controller="tenHienThi">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <%tenhienthi%>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/profile">Thông tin người dùng</a></li>
                  <li><a class="dropdown-item" href="/doimk">Đổi mật khẩu</a></li>
                  <li><a class="dropdown-item" href="/lichsubill">Lịch sử mua hàng</a></li>
                  <li><a class="dropdown-item" href="/wp-admin">Vào trang quản trị</a></li>
                  <li><a class="dropdown-item" href="/logout">Đăng xuất</a></li>
                </ul>
              </div>
          </div>
          <?php
            } else {
          ?>
          <div class="text-end">
            <a href="/dangnhap"><button type="button" class="btn btn-outline-light me-2">Đăng nhập</button></a>
            <a href="/dangky"><button type="button" class="btn btn-warning">Đăng ký</button></a>
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </header>
