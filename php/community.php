<?php 

?>



<h2>Community Board</h2>
  <ul>
    <li class="board_tit">
      <span>번호</span>
      <span>이름</span>
      <span>제목</span>
      <span>등록일</span>
    </li>
    <li class="board_con">
      <span>1</span>
      <span></a>어디회사</span>
      <span><a href="#">이력서 보내주세요</a></span>
      <span>2021-08-15</span>
    </li>
  </ul>


<form class="contact_write" method="post" id="write_form">
  <h3><i class="fa fa-asterisk"></i>글을 입력해주세요</h3>
  <div class="write_box">
    <div class="write_tit">
      <span >이름</span>
      <input type="text" placeholder="이름을 입력해주세요." id="write_name">
      <span>제목</span>
      <input type="text" placeholder="제목을 입력해주세요." id="write_input">
  </div>
  <div class="write_con">
    <textarea placeholder="내용을 입력해주세요." name="write_con"></textarea>
  </div>
</div>
</form>
<div class="write_btn">
  <button type="button">글쓰기</button>
</div>