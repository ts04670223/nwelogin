<?php

$title = "註冊帳號";
include_once("header.php");
?>

<body>
    <div class="container">
        <h2 class="text-center">註冊帳號</h2>
        <form action="add_user.php" method="post" class="col-6 bg-light m-auto">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">帳號:</label>
                    <input type="text" name="acc" class="form-control"placeholder="請輸入帳號">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">密碼:</label>
                    <input type="password" name="pw" class="form-control"placeholder="請輸入密碼">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">姓名:</label>
                    <input type="text" name="name" class="form-control"placeholder="請輸入姓名">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">生日:</label>
                    <input type="date" name="birthday" class="form-control"placeholder="請輸入生日">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">地址:</label>
                    <input type="text" name="addr" class="form-control"placeholder="請輸入地址">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email:</label>
                    <input type="email" name="email" class="form-control"placeholder="請輸入Email">
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">學歷:</label>
                    <select name="education" id="" class="custom-select my-1 mr-sm-2">
                        <option value="國中">國中</option>
                        <option value="高中">高中</option>
                        <option value="大學/專科">大學/專科</option>
                        <option value="碩士">碩士</option>
                        <option value="博士">博士</option>
                    </select>
                    <input type="submit" value="確認新增" class="btn btn-primary m-3">
                    <input type="reset" value="重置" class="btn btn-primary m-3">
        </form>
    </div>
</body>
<?php
include_once("footer.php");
?>