<?php
require_once __DIR__ . '/wit/header.php';
?>

<div class="container-body">
        <div class="form-dangky">
            <div class="card-header">
                <div class="card-title text-center">   
                    <h3>
                        <span class="fa fa-pen-to-square"></span>
                        <strong>THÔNG TIN NGƯỜI DÙNG</strong>
                        <hr>
                    </h3>
                </div>
            </div>
            <div class="card-body" ng-controller="khachhangOne">
                <form method="post" enctype="multipart/form-data" action="/profile">
                    <div ng-repeat="user in users" class="row">
                        <div class="form-group col-sm-12">
                            <input type="hidden" name="id" ng-model="id" value="{{user.id}}">
                            <label>Tên hiển thị</label>
                            <div class="input-group">
                                <input class="form-control" name="tenhienthi" placeholder="{{user.tenhienthi}}" value="{{user.tenhienthi}}"/>
                                <span class="input-group-text fa-solid fa-signature"></span>   
                            </div>
                            
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Email</label>
                            <div class="input-group">
                                <input class="form-control" name="email" placeholder="{{user.email}}" value="{{user.email}}"/> 
                                <span class="input-group-text fa-solid fa-envelope"></span>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Số điện thoại</label>
                            <div class="input-group">
                                <input class="form-control" name="phone" placeholder="{{user.phone}}" value="{{user.phone}}"/> 
                                <span class="input-group-text fa-solid fa-phone"></span>
                            </div>
                        </div>

                        <div class="d-grid gap-2" style="margin-top:10px;">
                            <button class="btn btn-danger" name="capnhatprofile" type="submit">
                                Cập nhật
                            </button>
                            <a href="/profile" class="btn btn-outline-dark" type="button">
                                <span class="fa-solid fa-user-xmark "></span>
                                Hủy
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="card-footer text-center">
                or sign up with:
                <br>
                <span class="fa-solid fa-circle"></span>
                <span class="fa-solid fa-circle"></span>
                <span class="fa-solid fa-circle"></span>
                <span class="fa-solid fa-circle"></span>
            </div> -->
        </div>
    </div>
  </div>

<?php
require_once __DIR__ . '/wit/footer.php';
?>

<script>
    app.controller('khachhangOne', function($scope) {
        $scope.users = [
            <?php
                extract($_SESSION['user']);
                echo     "{ id: ".$_SESSION['user'][0].", tenhienthi:  '".$_SESSION['user'][1]."', email: '".$_SESSION['user'][4]."' ,  phone: '".$_SESSION['user'][5]."'}, ";
            ?>
        ];

    });
</script>