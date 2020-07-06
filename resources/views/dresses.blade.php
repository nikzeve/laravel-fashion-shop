<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            @foreach ($dresses as $dress)
                <li>{{ $dress->tipo }}</li>
            @endforeach
        </ul>


    </body>
</html>
