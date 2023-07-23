<?php

function say($what)
{
    echo $what;
}

?>

<html>
<head>
    <title>Hello from Container</title>
</head>
<body>
    <?php say("Vciente Monfort: Hello from " . php_uname("r")); ?>
</body>
</html>
