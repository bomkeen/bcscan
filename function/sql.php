<?php

include './function/connect.php';

function getdata($vn, $conn) {
    $sql = "SELECT ov.vstdate
,CONCAT(p.pname,' ',p.fname,' ',p.lname) as pname
,p.hn,ov.vn from ovst ov JOIN patient p on ov.hn=p.hn 
where  ov.vn=$vn";
    $result = $conn->query($sql);
    $num = $result->num_rows;
    if ($num != 0) {
        $data = $result->fetch_object();
    } else {
        $data = NULL;
    }
    $conn->close();
    return $data;
}
