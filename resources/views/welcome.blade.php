<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRIJ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand"><b>PRIJ</b></a><img src="images/prij.jpg" alt="logo du prij" style="width: 50px; height: 50px;">
        <form class="d-flex">
            <a href="{{ route('jeune.index') }}" class="btn btn-outline-success" type="submit">Jeunes</a>
            <a class="btn btn-outline-danger" type="submit">Dépôt de fichiers</a>
        </form>
    </div>
</nav>
<img src="images/apcis.jpg" alt="logo de l'apcis" style="width: 500px; height: 300px; margin-top: 250px; margin-left: 700px;">
</body>
</html>
