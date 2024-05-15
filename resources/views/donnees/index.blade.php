<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Données</h1>
    <h3> {{ $variable }} </h3>
    <h3> {{ $age }} </h3>
    
    @foreach($names as $name)
        <div>
            Le nom est : {{ $name }}
            <hr />
        </div>
    @endforeach

</body>
</html>