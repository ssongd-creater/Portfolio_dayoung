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
    $sql = "SELECT * FROM pofol ORDER BY Pofol_comm_idx DESC";

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
<script>
  $(function() {
    $(".board_con").hide();
    $(".board_con").slice(0, 5).show();

    $(".more_btn").click(function() {
      //console.log($(".board-contents:hidden").length);
      $(".board_con:hidden").slice(0, 5).show();
    });
    //테이블 탭 활성화 기능

  });
  </script>
<!-- <script>
  const more_btn = document.querySelector(".board_more button");
  const board_con = document.querySelector(".board_con");
  //console.log(board_con);
  let current = 5;
  async function pfJson(){
    const pfTableJson = await fetch('/dy_pofol/data/pf_table.json');
    let writeTxt = await pfTableJson.json();
    let writeLength = writeTxt.length; //24
    let writeslide = Math.ceil(writeLength/5);

    //console.log(writeslide); 총길이에서 /5 확인
    


    //8/17 도전결과 참담!!
    // for(i=0; i < writeslide; i++){
    //   more_btn.addEventListener('click',function(){
    //     let slicef = i;
    //   let sliceButton = writeTxt.slice(slicef,current); //배열 5개씩 잘린게 확인됨,근데 잘린 5개가 반복이됨
    //   console.log(sliceButton);
    // });
    //};
    
    //console.log(writeTxt[0].pf_idx); //json data가 배열로 들어옴을 확인함
    // //console.log(more_btn);
  }
  pfJson().then(wirteTxt => {wirteTxt});
 //pfJson();
</script> -->
