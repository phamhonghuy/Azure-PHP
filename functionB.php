<?php
    $data = file('options.txt') or die("Can't read file");
    
    array_shift($data);//Xóa phần tử đầu dư
    $arrOptions = array();
    foreach($data as $key => $value) {//cho chạy từng giá trị của mảng
        $tmp = explode("|", $value);//tách chuỗi thành mảng bằng ký tự ngăn cách
        $arrOptions[$tmp[0]][$tmp[1]] = array("answer" => $tmp[2], "point" => $tmp[3]);//tạo mảng mới với key và mảng trong 
    }
?>