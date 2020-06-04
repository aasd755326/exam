<?php
header('Content-Type: application/json; charset=UTF-8'); 
if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    @$input1 = $_POST["input1"]; 
    @$input2 = $_POST["input2"];
    @$input3 = $_POST["input3"];
    if ($input1 != null && $input2 != null && $input3 != null) { 
        echo json_encode(array(
            'input1' => $input1,
            'input2' => $input2,
            'input3' => $input3,
        ));
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
?>