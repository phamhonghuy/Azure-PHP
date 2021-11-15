<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="style.css">
        <title>Trắc nghiệm tính cách</title>
    </head>
    <body>
        <?php 
            require_once 'functionA.php'; 
            require_once 'functionB.php'; 
            $newArray = array();
            foreach($arrQuestion as $key => $value) {
                $newArray[$key]["question"] = $value["question"]; 
                $newArray[$key]["sentences"] = $arrOptions[$key]; 
            }
            // echo "<pre>";
            // print_r($newArray);
            // echo "</pre>";
        ?>
        <div class="content">
            <h1>Trắc nghiệm tính cách</h1>
            <form action="result.php" method="post">
                <?php
                $i = 1;
                foreach($newArray as $key => $value){
                    echo '<div class="question">';
                    echo '<p>
                    <span>Câu hỏi '. $i .':</span>'.$value["question"].'
                    </p>';
                    echo '<ul>';
                    foreach($value["sentences"] as $keyC => $valueC ){
                        echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">' .$valueC["answer"].'</label></li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                    $i++;
                }
                ?>
                <input type="submit" id="submit" value="Submit">
            </form>
        </div>
    </body>
    <footer></footer>
</html>