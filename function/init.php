  <?php
        
        class init {
            public function gettoken() {
                session_start();
                $token = mb_strtoupper(md5(mb_strtoupper(strval(bin2hex(openssl_random_pseudo_bytes(32))))));
                $_SESSION['token'] = $token;
                session_write_close();
                return $token;
            }
           }
        
        ?>