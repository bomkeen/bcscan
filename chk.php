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
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usr']) && isset($_POST['pass'])) {
        $usr = mysqli_real_escape_string($conn, $_POST['usr']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $passmd5 = md5($pass);
        if (isset($passmd5)) {
            $sql = "SELECT loginname from opduser WHERE loginname='$usr' AND passweb='$passmd5'";
            $result = $conn->query($sql);
            $num = $result->num_rows;
            $conn->close();
        } else {
            header("Location: index.php");
        }
        if ($num == 1) {
            $data = $result->fetch_object();
            session_start();
            header("Location: main.php");
        } else {
            echo '.';
            echo '<script>';
            echo 'sweetAlert({
    title: "ผิดพลาด",
    text: "กรุณาตรวจสอบข้อมูล user หรือ password",
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