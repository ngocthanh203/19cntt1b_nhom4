<!-- section tên đăng nhập và thoát -->
  <div class="user_info">
    <?php
        if(isset($_SESSION['username'])){
            if ($_SESSION['level'] == 1)
              echo "Xin Chào Admin ".$_SESSION['username']." | ";
            else
              echo "Xin Chào Sinh Viên ".$_SESSION['username']." | ";
    ?>     <input type="button" onclick="window.location='logout.php'" value="Thoát">
        <?php  }   ?>

  </div>
