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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  function sendWrite(){
      if(!document.write_form.write_name.value){
        alert('이름을 입력해 주세요.');
        return;
      }
      if(!document.write_form.write_tit.value){
        alert('제목을 입력해 주세요.');
        return;
      }

      if(!document.write_form.write_con.value){
        alert('내용을 입력해 주세요.');
        return;
      }
      document.write_form.submit();
    };
</script>