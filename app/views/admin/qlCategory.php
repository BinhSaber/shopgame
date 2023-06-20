<?php
  require_once __DIR__ . '/wit/header.php';
?>
<!-- carosel -->
<div class="container" style="margin-top: 50px;">
      <div class = "row">
         <article class=" row col-sm-4">
            <div class="row" style="padding: 0; max-height: 300px; overflow-y: scroll;">
              <div class="list-group" ng-controller="danhmucList">
                <a ng-repeat="category in categorys" ng-init="showCategory(category)" href="sanpham.html" class="list-group-item list-group-item-action">
                  <img ng-model="hinhdm" src="/assets/img/{{category.hinhdm}}" width="50px" class="category-img"/>
                  <span ng-model="tendm">{{category.tendm}}</span>
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
        <div class="sanpham" id="featured-3">
          <h2 class="pb-2 border-bottom">Danh mục</h2>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="margin-bottom: 20px;">
            Thêm danh mục
          </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <span class="fa fa-pen-to-square"></span>
                    Nhập danh mục
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Thêm dm-->
                    <form method="post" enctype="multipart/form-data" action="/wp-admin/ql-category">
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label>Tên danh mục</label>
                          <input class="form-control" name="tendm" placeholder="Tên danh mục"/>
                        </div>
                        <div class="form-group col-sm-12">
                          <label>Hình danh mục</label>
                          <div class="input-group">
                            <input type="file" name="hinhdm" class="form-control" id="inputGroupFile02">
                            <span class="input-group-text fa-solid fa-image"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-outline-primary" name="themdm" id="submit-btn" value="Submit" style="margin-top:10px;">
                            <span class="fa-solid fa-file-arrow-down"></span>
                            Thêm
                          </button>
                        </div>
                      </div>
                    </form>

                </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-outline-secondary" type="submit" data-bs-dismiss="modal">
                        <span class="fa-solid fa-file"></span>
                        Hủy
                    </button>
                </div>
            </div>
            </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" ng-controller="danhmucTable"> 
            <thead>
              <tr>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Hình</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
              </tr>
            </thead>
            <tbody>
              <!-- ng-repeat table -->
              <tr ng-repeat="category in categorys" ng-init="showCategory(category)">
                <th scope="row" name="id" ng-model="id">{{category.id}}</th>
                <td ng-model="tendm">{{category.tendm}}</td>
                <td class="img-table-category"><img src="/assets/img/{{category.hinhdm}}" ng-model="hinhdm"></td>
                <td>
                    <button type="button" ng-click="showInfo(category)" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#a{{category.id}}"  style="margin-bottom: 20px;">
                        Sửa
                      </button>
                    <!-- Modal -->
                    <div class="modal fade" id="a{{category.id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                <span class="fa fa-pen-to-square"></span>
                                Sửa danh mục
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form Update -->
                                <form method="post" enctype="multipart/form-data" action="/wp-admin/ql-category" ng-click="showInfo(category)">
                                    <div class="row">
                                        <input type="hidden" name="id" ng-model="id" value="{{category.id}}">
                                        <div class="form-group col-sm-12">
                                            <label>Tên danh mục</label>
                                            <input class="form-control" ng-model="tendm" name="tendm" placeholder="{{category.tendm}}" value="{{category.tendm}}"/>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Hình ảnh</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="hinhdm" id="inputGroupFile02">
                                                <span class="input-group-text fa-solid fa-image"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <input type="hidden" name="id" value="{{category.id}}">
                                          <button class="btn btn-outline-primary" type="submit" name="capnhatdm" style="margin-top:20px;">
                                            <span class="fa-solid fa-file-arrow-down"></span>
                                              Cập nhật
                                          </button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-secondary" type="submit" data-bs-dismiss="modal">
                                    <span class="fa-solid fa-file"></span>
                                    Hủy
                                </button>
                            </div>
                        </div>
                </td>
                <td>
                  <form method="POST" action="/wp-admin/ql-category" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{category.id}}">
                    <button type="submit" class="btn btn-danger" name="xoadm">Xóa</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container px-4 " id="featured-3">
          <!-- <h2 class="pb-2 border-bottom" style="text-align: center;">DANH MỤC ACC GAME</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
            <div class = "row card category" style="padding: 0px;">
              <div class = "card-body" style="padding: 0px;">
                  <img class="img-fluid" src="../images/fgo.png" style="border-radius:5px 5px 0px 0px"/>
                  <div class="container text-center" style="padding-left: 0px;">
                    <div class="row">
                      <div class="col">Fate Grand Order</div>
                    </div>
                  </div> 
                  <div class="container text-center" style="padding-left: 0px;">
                    <div class="row">
                      <button type="button" class="btn btn-primary">Mua ngay</button>
                    </div>
                  </div> 
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

<?php
require_once __DIR__ . '/wit/footer.php';
?>

app.controller('danhmucTable', function($scope) {
        $scope.categorys = [
            <?php
              foreach($listdm as $dm) {
                  extract($dm);
                  echo     "{ id: ".$id.", tendm:  '".$tendm."', hinhdm:  '".$hinhdm."' },";
              }
            ?>
        ];
        
      
    });
</script>