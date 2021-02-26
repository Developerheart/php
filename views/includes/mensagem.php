<?php


if (isset($_SESSION['MENSAGEM'])): ?>

    <script>
        window.onload = function (){
            M.toast({html: '<?php echo $_SESSION['MENSAGEM'];?>'})
        };
    </script>
    <?php
    session_unset();
    session_abort();
endif;