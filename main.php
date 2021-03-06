<?php
include 'role.php';
include './function/thaidate.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ระบบ Scan Barcode</title>
        <link href="css/css/bulma.min.css" rel="stylesheet" type="text/css"/>
        <script src="css/all.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include './function/sql.php';
        include_once 'nav.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vn'])) {
            $vn = $_POST["vn"];
            if ($vn != null) {
                $rs = getdata($vn, $conn);
            }
        } else {
            $vn = null;
        }
        ?>
        <br>
        <div class="container is-fluid">
            <div class="columns is-desktop">
                <div class="column is-3">
                    <div class="box has-background-primary">
                        <form action="main.php" method="post" >
                            <div class="field is-grouped">
                                <div class="control">
                                    <input onchange="this.form.submit()" autofocus class="input" type="text" name="vn" placeholder="VN">
                                </div>
                            </div>
                            <center>
                                <div class="field ">
                                    <div class="control">
                                        <button class="button is-link is-inverted">
                                            <span class="icon is-small">
                                                <i class="fas fa-search"></i>
                                            </span>

                                        </button>
                                    </div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <?php if (@$rs != null) { ?>
                    <div class="column is-9">
                        <div class="container is-fluid">
                            <div class="box">
                                <div class="container">
                                    <div class="columns is-half">
                                        <div class="column">
                                            <h1> HN :: <?php echo @$rs->hn; ?> </h1> 
                                        </div>
                                        <div class="column is-half">
                                            <h1> VN :: <?php echo @$rs->vn; ?> </h1> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="columns">
                                        <div class="column">
                                            <h1><?php
                                                echo @$rs->pname;
                                                ?></h1>
                                        </div>
                                        <div class="column">
                                            <h1><?php echo thaidate(@$rs->vstdate); ?> </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
