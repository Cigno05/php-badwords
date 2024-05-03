<?php
$paragraph = $_GET['paragraph'];
// var_dump($paragraph);

$paragraphLenght = strlen($paragraph);
// var_dump($paragraphLenght);

$censored = $_GET['censored'];
// var_dump($censored);

$censoredReplace = str_replace($censored, '***', $paragraph, $censoredCount);
// var_dump($censoredReplace);


// echo '<pre>';
// var_dump($paragraph);

// var_dump($paragraphLenght);

// var_dump($censored);

// var_dump($censoredReplace);

// var_dump($censoredCount);


// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server BW</title>
</head>

<body>

    <div>
        <h1>Testo non censurato: <?php echo $paragraph ?></h1>
        <h2>La lunghezza del paragrafo non censurato è di <?php echo $paragraphLenght ?> caratteri</h2>
        <h1>Testo censurato: <?php echo $censoredReplace ?></h1>
        <h2>Parole censurate: <?php echo $censoredCount ?></h2>
    </div>

</body>

</html>