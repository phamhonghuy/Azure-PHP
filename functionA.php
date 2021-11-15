<?php
    $data = file('question.txt') or die("Can't read file");
    
    array_shift($data);//Xóa phần tử đầu dư
    array_shift($data);
    $arrQuestion = array();
    foreach($data as $key => $value) {//cho chạy từng giá trị của mảng
        $tmp = explode("|", $value);//tách chuỗi thành mảng bằng ký tự ngăn cách
        $arrQuestion[$tmp[0]] = array("question" => $tmp[1]);//tạo mảng mới với key và mảng trong 
    }

?>