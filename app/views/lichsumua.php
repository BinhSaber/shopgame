<?php
require_once __DIR__ . '/wit/header.php';
?>

<div class="container bill">
        <div class="form-dangky">
            <div class="card-header">
                <div class="card-title text-center">   
                    <h3>
                        <span class="fa-solid fa-clock-rotate-left"></span>
                        <strong>LỊCH SỬ MUA HÀNG</strong>
                        <hr>
                    </h3>
                </div>
            </div>
            <div class="card-body" ng-controller="lichsuBill">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình sản phẩm</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="bill in bills">
                        <th scope="row">{{bill.id}}</th>
                        <td>{{bill.tensp}}</td>
                        <td>{{bill.hinhsp}}</td>
                        <td>{{bill.tkgame}}</td>
                        <td>{{bill.mkgame}}</td>
                        </tr>
                    </tbody>
                </table>
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
    app.controller('lichsuBill', function($scope) {
            $scope.bills = [
                <?php
                    foreach($listbill as $bill) {
                        extract($bill);
                        echo     "{ id: ".$id.", tkgame:  '".$tkgame."', mkgame:  '".$mkgame."' , makh:  '".$_SESSION['user'][0]."'},";
                    }
                ?>
            ];
    });
</script>