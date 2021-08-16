<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creater SsongD</title>
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Full Page Plugin Link -->
  <link rel="stylesheet" href="/dy_pofol/fullpage_lib/jquery.fullpage.css">
  <!-- Main Style Code Sheet -->
  <link rel="stylesheet" href="/dy_pofol/css/style.css">
  <!-- Google font Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap"rel="stylesheet">
  <!-- Main Google font Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Gowun+Dodum&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">


  <?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
    $sql = "SELECT * FROM pofol ORDER BY Pofol_comm_idx DESC LIMIT 10";

    $pofol_result = mysqli_query($dbConn,$sql);
    $pofol_row = mysqli_fetch_array($pofol_result);
  ?>
  <h2>Community Board</h2>
    <ul>
      <li class="board_tit">
        <span>번호</span>
        <span>이름</span>
        <span>제목</span>
        <span>등록일</span>
      </li>
      <?php
      $rowpage = 5;

      while($pofol_row = mysqli_fetch_array($pofol_result)){
        $pofol_idx = $pofol_row['Pofol_comm_idx'];
        $pofol_name = $pofol_row['Pofol_comm_name'];
        $pofol_tit = $pofol_row['Pofol_comm_tit'];
        $pofol_con = $pofol_row['Pofol_comm_con'];
        $pofol_reg = $pofol_row['Pofol_comm_reg'];
      ?>
      <li class="board_con">
        <span><?=$pofol_idx?></span>
        <span><?=$pofol_name?></span>
        <span><a href="/dy_pofol/pages/community_detail.php?detail_idx=<?=$pofol_idx?>"><?=$pofol_tit?></a></span>
        <span><?=$pofol_reg?></span>
      </li>
      <?php }?>
    </ul>
    <div class="board_more">
      <button type="button" class="more_btn">더보기</button>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script>
  $(document).ready(function(){
    $(".more_btn").on('click',function(){
      $.ajax({
        url:"/dy_pofol/php/community_insert.php",
        method:'post',
        data:'html',
        dataType:'json',
        success:function(data){
          $("board_con").append(data);
        }
      })
    });




  });
</script> -->

