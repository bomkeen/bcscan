<html>
    <head>
        <meta charset="UTF-8">
        <title>ระบบ Scan Barcode</title>

        <link href="css/css/bulma.min.css" rel="stylesheet" type="text/css"/>
        <script src="css/all.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="container is-fullhd">
            <section class="hero is-primary">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="title">
                            ระบบ Scan Barcode
                        </h1>
                        <h2 class="subtitle">
                            โรงพยาบาลส่งเสริมสุขภาพตำบล วัดพระญาติการาม
                        </h2>
                    </div>
                </div>
            </section>
            <form action="chk.php" method="post" >
                <section class="section">

                    <div class="columns ">
                        <div class="column is-4 is-offset-4">
                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input required class="input is-info" name="usr" type="text" placeholder="HosXp Username">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input required class="input is-info" type="password" name="pass" placeholder="HosXp Password">
                                </div>
                            </div>
                            <div class="field is-grouped is-grouped-centered">

                                <div class="control">
                                    <button class="button is-primary">เข้าระบบ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </form>
            <footer class="footer">
                <div class="content has-text-centered">
                    <p>
                        <strong>ABSoft@2016</strong> 
                    </p>
                </div>
            </footer>
        </div>
    </body>    
</html>

