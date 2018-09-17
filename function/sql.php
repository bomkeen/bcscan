
<html>
    <head>
        <meta charset="UTF-8">
        <title>ระบบ Scan Barcode</title>
        <link href="./css/css/bulma.min.css" rel="stylesheet" type="text/css"/>
        <script src="./css/all.js" type="text/javascript"></script>
        <script src="css/sweetalert.min.js" type="text/javascript"></script>
        <link href="css/sweet-alert.css" rel="stylesheet" type="text/css"/>
    </head>
    
<?php

include './function/connect.php';

function getdata($vn, $conn) {
    $sql = "SELECT ov.vstdate
,CONCAT(p.pname,' ',p.fname,' ',p.lname) as pname
,p.hn,ov.vn from ovst ov JOIN patient p on ov.hn=p.hn 
where  ov.vn=$vn";
    $result = $conn->query($sql);
    @$num = $result->num_rows;
    if ($num != 0 && $num != NULL) {
        $data = $result->fetch_object();
    } else {
        echo '.';
            echo '<script>';
            echo 'sweetAlert({
    title: "ผิดพลาด",
    text: "กรุณาตรวจสอบข้อมูล user หรือ password",
    type: "warning"
});';
            echo '</script>';
        $data = NULL;
    }
    $conn->close();
    return $data;
}
?>
</html>