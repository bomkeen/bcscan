<?php 
include 'role.php';
?>
<nav class="navbar is-warning">
    <div class="navbar-brand">
        <a class="navbar-item" href="main.php">
            <img src="./img/logo.png" alt="" width="30" height="28">
        </a>
       
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="main.php">
                Home
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <!--                 <form action="main.php" method="post" >
                                <div class="field has-addons">
                  <div class="control">
                  <input onchange="this.form.submit()" autofocus class="input" type="text" name="vn" placeholder="Text input">
                  </div>
                  <div class="control">
                    <a class="button is-info">
                      Search
                    </a>
                  </div>
                </div>
                                </form>-->
                <div class="field is-grouped">
                    <p class="control">
                        <?php if ($online_status = 'Y') { ?>
                            <a class="bd-tw-button button has-text-success is-small">
                                <span class="icon has-text-success ">
                                    <i class="fab fa-angellist"></i>
                                </span>
                                <span class="has-text-success">
                                    Online
                                </span>
                            </a>
                        <?php } else { ?>
                            <a class="bd-tw-button button has-text-success is-small">
                                <span class="icon has-text-danger ">
                                    <i class="fas fa-ban"></i>
                                </span>
                                <span class="has-text-danger">
                                    Disconnect
                                </span>
                            </a>
                        <?php } ?>
                        <a class="button is-danger is-small" href="logout.php">
                            <span class="icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span class="">
                                Logout
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>