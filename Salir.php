<?php
session_start();
session_destroy();
?>

<script>
    window.location.href = "index.php";
    history.pushState(null, null, "index.php");
    window.addEventListener("popstate", function () {
        history.pushState(null, null, "index.php");
    });
    alert("¡Has Salido, Vuelve Pronto!");
</script>
