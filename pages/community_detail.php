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

     <?php include $_SERVER["DOCUMENT_ROOT"]."/dy_pofol/include/header.php"; ?>

  <div class="section pgnum_5" data-anchor="4rd">
    <div class="center">
      <div class="contact">
        <div class="contact_icon">
        <i class="fa fa-comments-o"></i>
      </div>

      <div class="contact_board detail_board">
        <?php
        $detail_idx = $_GET['detail_idx'];
        //echo $detail_idx;
        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        $sql = "SELECT * FROM pofol WHERE Pofol_comm_idx=$detail_idx ORDER BY Pofol_comm_idx DESC";

        $detail_result = mysqli_query($dbConn,$sql);
        $detail_row = mysqli_fetch_array($detail_result);

        //$detail_idx = $detail_row['Pofol_comm_idx'];
        $detail_name = $detail_row['Pofol_comm_name'];
        $detail_tit = $detail_row['Pofol_comm_tit'];
        $detail_con = $detail_row['Pofol_comm_con'];
        $detail_reg = $detail_row['Pofol_comm_reg'];
        ?>
        <h2>Community View Contents</h2>
        <p><i class="fa fa-asterisk"> </i> Post by <?=$detail_name?> / <?=$detail_reg?></p>
          <ul class="detail_board_ul">
            <li class="board_tit board_detail">
              <span>제목</span>
              <span><?=$detail_tit?></span>
            </li>
            <li class="board_con board_detail_con">
              <span><?=$detail_con?></span>
            </li>
          </ul>

        <div class="board_more">
          <button type="button" class="more_btn">뒤로가기</button>
        </div>
          <!-- End of contact_board -->
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  const backBtn = document.querySelector('.more_btn');
  //console.log(backBtn);
  backBtn.addEventListener('click',function(){
    location.href='/dy_pofol/#4rd';
  });
</script>
