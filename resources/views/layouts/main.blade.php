<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <title>Distance Calculator</title>
    <style>
        * {
            font-family: 'Mulish', sans-serif;
        }

    </style>
</head>

<body style="background-color: rgb(242, 249, 252)">
    <x-navbar />
    <div class="container mt-5">
        {{ $slot }}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
