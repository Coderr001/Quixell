<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="submit">
    </form>
</body>
</html>