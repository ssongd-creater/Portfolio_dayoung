<?php

  $write_name = addslashes($_POST['write_name']);
  $write_tit = addslashes($_POST['write_tit']);
  $write_con = addslashes($_POST['write_con']);
  $write_reg = date("Y-m-d");

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "INSERT INTO pofol(Pofol_comm_name,Pofol_comm_tit,Pofol_comm_con,Pofol_comm_reg) VALUES ('{$write_name}','{$write_tit}','{$write_con}','{$write_reg}')";

  mysqli_query($dbConn,$sql);

  $sql1 = "SELECT * FROM pofol";

  $pf_result = mysqli_query($dbConn, $sql1);
  $arr = array();

  while($pf_row = mysqli_fetch_array($pf_result)){
  array_push($arr,array(
    'pf_idx' => $pf_row['Pofol_comm_idx'],
    'pf_name' => $pf_row['Pofol_comm_name'],
    'pf_tit' => $pf_row['Pofol_comm_tit'],
    'pf_con' => $pf_row['Pofol_comm_con'],
    'pf_reg' => $pf_row['Pofol_comm_reg']
  ));
}

//var_dump($arr);

file_put_contents($_SERVER["DOCUMENT_ROOT"].'/dy_pofol/data/pf_table.json',json_encode($arr,JSON_UNESCAPED_UNICODE));
echo"
  <script>
    alert('게시글 입력이 완료되었습니다.');
    location.href='/dy_pofol/#4rd';
  </script>
  ";
?>