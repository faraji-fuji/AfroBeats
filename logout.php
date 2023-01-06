<script>
    function logout() {
        window.location.assign('index.php');
    }
</script>

<?php
session_unset();
echo "<script> logout() </script>";
?>