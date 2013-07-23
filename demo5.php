<?php
    //设置类型settype()
    $sum=100;
    //中途将$sum类型转换成字符串型
      echo settype($sum,"string");
    
    //这个时候$sum的100不是数字，而是字符串"100"
    echo gettype($sum);


?>