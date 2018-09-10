<?php

session_start();
$email = $_SESSION['userId'];
echo $email;
if (isset($_SESSION['userId'])) {
    session_unset();
    session_destroy();
    ?>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            window.location = 'login';
        });
    </script>
    <?php

}
?>


