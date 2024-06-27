<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic View</title>
</head>
<body>
    <h6>BASIC VIEW</h6>
    <ul>
        @foreach($superCars as $row)
            <li>{{ $row['name'] }}</li>
            <li>{{ $row['HP'] }}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>
