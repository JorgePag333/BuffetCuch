<?php
session_start();
unset($_SESSION['carro']);
unset($_SESSION['carro1']);
?>
<script>
    window.location = "../carrito.php";
</script>
