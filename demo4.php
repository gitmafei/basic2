<?php
    //数据类型的转换
//     $sum = 0;
//     $total = 1.22;
//     $sum = $total;//隐式转换

     $sum = 1.22;
     $total = (int)$sum;//显式转换


     echo gettype($total);

?>