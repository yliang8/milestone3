<?php

/* Clean Sessions */
session_start();
session_unset();
session_destroy();
?>

<!-- Clean Cookies -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script type="text/javascript">
setCookie('email', '', -1);
setCookie('password', '', -1);
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
window.location = "newIndex.php";
</script>
</body>
</html>