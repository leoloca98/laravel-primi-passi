<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel_First_Steps</title>

    <!-- Style -->
    <style>
        a {
            text-decoration: none;
            color: purple;
            font-weight: 700;
            margin: 0 30px;
        }
    </style>
</head>

<body>
    <section id="home" class="vh-100">
        <div class="container h-100">
            <div class="row d-flex flex-column justify-content-center align-items-center text-center h-100">
                <h1 class="mb-5">HOME</h1>
                <div>
                    <a href="{{ route('red') }}">DARKRED</a>
                    <a href="{{ route('blue') }}">CADETBLUE</a>
                    <a href="{{ route('green') }}">FORESTGREEN</a>
                    <a href="{{ route('gold') }}">GOLDENROD</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>