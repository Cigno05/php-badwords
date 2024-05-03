<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <form action="./server.php">

        <div>
            <label for="paragraph">Inserisci il tuo parafrafo</label>
            <textarea type="text" name="paragraph"></textarea>
        </div>
        <div>
            <label for="censored">Inserisci la parola da censurare</label>
            <input type="text" name="censored">
        </div>
        <button>Invia</button>
    </form>


</body>

</html>