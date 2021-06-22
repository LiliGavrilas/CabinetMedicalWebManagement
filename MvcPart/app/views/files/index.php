<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PagG.css">

    <title>Cabinet Medical Web Management</title>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.ico"/>
</head>
<body>
    <header>
        <ul>
            <?=$data['generalbar']?>
        </ul>
    </header>
    <main>
        <p><?=$data['type']?> files for username: <?=$data['username']?></p>
    </main>
    <footer>
        <p>About us. </p>
    </footer>
</body>
</html>