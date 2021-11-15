<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="style.css">
        <title>Trắc nghiệm tính cách</title>
    </head>
    <body>
        <?php
        $data = file('question.txt') or die("Can't read file");
        $point = 0;
        array_shift($data);
        array_shift($data);

        foreach ($data as $key => $value) {
            $tmp = explode("|", $value);
            $point = $point + $_POST[$tmp[0]];
        }
        $data1 = file('result.txt') or die("Can't read file");
        array_shift($data1);
        foreach ($data1 as $key1 => $value1) {
            $tmp = explode("|", $value1);
            $max = $tmp[1];
            $min = $tmp[0];
            $content = $tmp[2];
            if($point >= $min && $point <= $max){
                $result = $content;
                break;
            }
        }
        // echo "<pre>";
        // print_r($data1);
        // echo "</pre>";
        ?>
        <div class="content">
            <h1>Kết quả Trắc nghiệm</h1>
            <p style ="margin: 10px 0 0 20px;"><b>Tổng số điểm của bạn là: </b><?php echo $point; ?></p>
            <p style ="margin: 10px 10px 10px 20px; text-align:justify; "><?php echo $result; ?></p>
        </div>
    </body>
</html>