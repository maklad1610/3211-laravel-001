<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Uses</title>
</head>
<body>
    <h1>All Users Page</h1>
    
    <div>

        @foreach($users as $user)
            <h3>{{$user['name']}}</h3>
        @endforeach

    </div>
</body>
</html>