<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Admin</title>
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <!-- thư viện awesome -->
     <script src="https://kit.fontawesome.com/d0b90f6d80.js" crossorigin="anonymous"></script>
     <!-- link css -->
     <link rel="stylesheet" href="/assets/css/index-admin.css">
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

        .input-group .btn {
          position: relative;
        }

        .input-group .form-control {
          flex: 3;
          width: 100%;
          margin-bottom: 0;
        }
        body {
            background-size: cover;
            background-position: center;
        }
        .table-category-img {
          max-width: 100px;
        }
        .img-table-category img {
          max-width: 100px;
          height: auto;
        }
        .img-table-sp img {
          max-width: 100px;
          height: auto;
        }
    </style>
 </head>
 <body ng-app="home">
    <div class="container">
    <header>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/wp-admin">Home</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                Admin
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/wp-admin">Quản lý sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/wp-admin/ql-category">Quản lý danh mục</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/wp-admin/ql-user">Quản lý khách hàng</a>
                </li>
                
              </ul>
              <a href="/" type="submit" class="btn btn-primary">Quay về trang chủ</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    </div>