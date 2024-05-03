<?php
$paragraph = $_GET['paragraph'];
// var_dump($paragraph);

$paragraphLenght = strlen($paragraph);
// var_dump($paragraphLenght);

$censored = $_GET['censored'];
// var_dump($censored);

$censoredReplace = str_ireplace($censored, '***', $censored);
// var_dump($censoredReplace);

$censoredLenght = strlen($censored);
// var_dump($censoredLenght);

$censoredReplaceSimbol = str_repeat('*', $censoredLenght);
// var_dump($censoredReplaceSimbol);

echo '<pre>';
var_dump($paragraph);

var_dump($paragraphLenght);

var_dump($censored);

var_dump($censoredReplace);

var_dump($censoredLenght);

var_dump($censoredReplaceSimbol);

echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server BW</title>
</head>

<body>

    <p>
    <h1><?php echo $paragraph ?></h1>
    <h3>La lunghezza del paragrafo leggibile è di <?php echo $paragraphLenght ?> caratteri</h3>
    </p>
    <p>
    <h1>Sostituzione con 3 aterischi: <?php echo $censoredReplace ?></h1>
    <h1>Sostituzione con 1 aterisco per carattere: <?php echo $censoredReplaceSimbol ?></h1>
    <h3>La lunghezza del paragrafo censurato è di <?php echo $censoredLenght ?> caratteri</h3>
    </p>

</body>

</html>