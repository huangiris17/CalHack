var exNum = document.getElementById("exNum").value;

<?php
  $mysqli = new mysqli('localhost', 'newUser', '', 'test');
  $result = $mysqli->query("SELECT nickName FROM input WHERE numDate = exNum;");
  $data = $result->fetch_all();
  $mysqli->close();
?>

