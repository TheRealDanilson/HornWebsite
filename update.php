<!DOCTYPE html>
<html>
<body

<p> <?php
shell_exec("sh update.sh 2>/dev/null >/dev/null &");
echo "Ran update command";
?> </p>

</body>
</html>
