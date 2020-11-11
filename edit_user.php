<?php
include_once("header.php");
?>

<body>
  <?php

  $dsn = "mysql:host=localhost;dbname=member;charset=utf8";
  $pdo = new PDO($dsn, 'root', '');
  // 編輯會員資料
  $user_id = $_GET['id']; //login資料表的id .member資料表login_id
  $user_sql = "select * from `login`,`member` where `login`.`id`=`member`.`login_id` AND `login`.`id`='$user_id'";
  $user = $pdo->query($user_sql)->fetch();


  ?>
</body>
<div class="container aligh-item-">
  <h2 class="text-center">編輯資料</h2>
  <form action="save_user.php" method="post" class="col-12 bg-light">
    <div class="form-row">
      <input type="hidden" name="id" value="<?= $user['id']; ?>">
      <div class="form-group col-md-6">
        <label for="inputEmail4">帳號:</label>
        <input type="text" name="acc" value="<?= $user['acc'] ?>" class="form-control" placeholder="請輸入帳號">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">密碼:</label>
        <input type="password" name="pw" value="<?= $user['pw'] ?>" class="form-control" placeholder="請輸入密碼">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">姓名:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control" placeholder="請輸入姓名">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">生日:</label>
        <input type="date" name="birthday" value="<?= $user['birthday'] ?>" class="form-control" placeholder="請輸入生日">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">地址:</label>
        <input type="text" name="addr" value="<?= $user['addr'] ?>" class="form-control" placeholder="請輸入地址">
      </div>
      <div class="form-group col-md-12">
        <label for="inputEmail4">Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="請輸入Email">
      </div>
      <div class="form-group col-md-6">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">學歷:</label>
        <select name="education" id="" class="form-control">
          <option value="國中" <?= ($user['education'] == '國中') ? "selected" : ""; ?>>國中</option>
          <option value="高中" <?= ($user['education'] == '高中') ? "selected" : ""; ?>>高中</option>
          <option value="大學/專科" <?= ($user['education'] == '大學/專科') ? "selected" : ""; ?>>大學/專科</option>
          <option value="碩士" <?= ($user['education'] == '碩士') ? "selected" : ""; ?>>碩士</option>
          <option value="博士" <?= ($user['education'] == '博士') ? "selected" : ""; ?>>博士</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">角色:</label>
        <select name="role" id="" class="form-control">
          <option value="會員" <?= ($user['role'] == '會員') ? "selected" : ""; ?>>會員</option>
          <option value="VIP" <?= ($user['role'] == 'VIP') ? "selected" : ""; ?>>VIP</option>
          <option value="管理員" <?= ($user['role'] == '管理員') ? "selected" : ""; ?>>管理員</option>
        </select>
      </div>
    </div>
    <input type="submit" value="確認修改" class="btn btn-primary my-3 ">
    <input type="reset" value="重置" class="btn btn-primary my-3 ">
  </form>
</div>
<?php
include_once("footer.php");
?>