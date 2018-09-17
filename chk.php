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
    session_start();
    include './function/connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usr']) && isset($_POST['pass'])) {
        $usr = mysqli_real_escape_string($conn, $_POST['usr']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $key=$_POST['key'];
        $passmd5 = md5($pass);
        if (isset($passmd5) && $key==$_SESSION['token']){ 
            $sql = "SELECT loginname from opduser WHERE loginname='$usr' AND passweb='$passmd5'";
            $result = $conn->query($sql);
            $num = $result->num_rows;
            $conn->close();
        } else {
//            echo 'ตรงเชค session';
            header("Location: index.php");
        }
        if ($num == 1) {
            $data = $result->fetch_object();
            $_SESSION['user']=$data->loginname;
            session_write_close();
            header("Location: main.php");
        } else {
            echo '.';
            echo '<script>';
            echo 'sweetAlert({
    title: "ผิดพลาด",
    text: "ไม่พบรายการตามที่ท่านค้นหา",
    type: "warning"
},
function () {
    window.location.href = "index.php";
});';
            echo '</script>';
        }
    } else {

        }
    ?>
</html>