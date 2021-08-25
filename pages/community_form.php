<div class="section pgnum_5" data-anchor="4rd">
  <div class="center">
    <div class="vertical_center">
      <div class="contact">
        <div class="contact_icon">
          <i class="fa fa-comments-o"></i>
        </div>

        <div class="contact_board">
          <?php
        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        $sql = "SELECT * FROM pofol ORDER BY Pofol_comm_idx DESC";

        $pofol_result = mysqli_query($dbConn,$sql);
        //$pofol_row = mysqli_fetch_array($pofol_result);
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

          <h3><i class="fa fa-asterisk"></i>글을 입력해주세요</h3>
          <form class="contact_write" method="post" name="write_form" action="/dy_pofol/php/community_insert.php">
            <div class="write_box">
              <div class="write_tit">
                <span>이름</span>
                <input type="text" placeholder="이름을 입력해주세요." id="write_name" name="write_name">
                <span>제목</span>
                <input type="text" placeholder="제목을 입력해주세요." name="write_tit" id="write_tit">
              </div>
              <div class="write_con">
                <textarea placeholder="내용을 입력해주세요." name="write_con" id="write_con"></textarea>
              </div>
            </div>
          </form>
          <div class="write_btn">
            <button type="button" onclick="sendWrite()">글쓰기</button>
          </div>
          <!-- End of contact_board -->
        </div>
      </div>
    </div>

  </div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
  function sendWrite() {
    if (!document.write_form.write_name.value) {
      alert('이름을 입력해 주세요.');
      return;
    }
    if (!document.write_form.write_tit.value) {
      alert('제목을 입력해 주세요.');
      return;
    }

    if (!document.write_form.write_con.value) {
      alert('내용을 입력해 주세요.');
      return;
    }
    document.write_form.submit();
  };
  </script>
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