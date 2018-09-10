<?php

if (!isset($_SESSION['userId'])) {
    echo "<script>
			window.location='login';
		</script>";
}
?>