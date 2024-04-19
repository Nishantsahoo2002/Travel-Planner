<?php
session_start();

session_destroy();
header('Location: index.html');
?>
<script>
    alert("You are Logged Out.");
</script>