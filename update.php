<!DOCTYPE html>
<html>
<body

<?php

shell_exec("sh update.sh 2>/dev/null >/dev/null &");
echo "Ran update command";
?>

</body>
</html>
