<?php

function say()
{
    fscanf(STDIN, "%s", $ex1);
    echo $ex1;  

}

?>

<html>
<head>
    <title>Hello from Container</title>
</head>
<body>
    <?php say(); ?>
</body>
</html>
