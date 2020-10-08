<?php
    
$conn = new mysqli("localhost","admin","recipe123", "RECIPE_DB");


// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connection success";

//데이터를 JSON 형식으로 출력
echo json_encode($out, JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE); 

?>
