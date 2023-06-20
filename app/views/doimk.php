<?php
require_once __DIR__ . '/wit/header.php';
?>

<div class="container-body">
        <div class="form-dangky">
            <div class="card-header">
                <div class="card-title text-center">   
                    <h3>
                        <span class="fa-solid fa-lock"></span>
                        <strong>ĐỔI MẬT KHẨU</strong>
                        <hr>
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="/dangky">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Nhập mật khẩu hiện tại</label>
                            <div class="input-group">
                                <input class="form-control" name="password" placeholder="Nhập mật khẩu hiện tại"/>
                                <span class="input-group-text fa-solid fa-lock"></span>   
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Mật khẩu mới</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password_new" placeholder="Nhập mật khẩu mới"/> 
                                <span class="input-group-text fa-solid fa-key"></span>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Xác nhận mật khẩu mới</label>
                            <div class="input-group">
                                <input class="form-control" name="password_renew" placeholder="Nhập lại mật khẩu"/>
                                <span class="input-group-text fa-solid fa-key"></span>
                            </div>
                        </div>
                        <!-- btn dangky & dangnhap -->
                        <div class="d-grid gap-2" style="margin: 20px 0px 0px 0px;">
                            <button class="btn btn-danger" type="submit" name="dangky">
                                Cập nhật
                            </button>
                            <a href="/doimk" class="btn btn-outline-dark" type="button">
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