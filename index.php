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
                        <form action="index.php" method="post">
                            <div class="field is-grouped">
                                <div class="control">
                                    <input class="input" type="text" name="vn" placeholder="Text input">
                                </div>

                            </div>
                            <center>
                                <div class="field is-pulled-right">
                                    <div class="control">
                                        <button class="button is-link">Submit</button>
                                    </div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <div class="column is-9">
                    <div class="container is-fluid">
                        <div class="box has-background-info">
                            <div class="box">

                                <div class="columns is-half">
                                    <div class="column">
                                        <h1> HN :: <?php echo @$rs->hn; ?> </h1> 
                                    </div>
                                    <div class="column is-half">
                                        <h1> VN :: <?php echo @$rs->vn; ?> </h1> 
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <h1><?php
                                            echo @$rs->pname;
                                            ?></h1>
                                    </div>
                                    <div class="column">
                                        <h1><?php echo @$rs->vstdate; ?> </h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <section class="section">

            </section>
    </body>
</html>
