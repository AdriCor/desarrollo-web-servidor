<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo tipo de ticket</title>
</head>
<body>
    <form method="post" action="{{route('TicketType.store')}}">
        @csrf 
        <label> Tipo:</label>
        <input type="text" name="type"> <br><br>
    <input type="submit" value="crear">
    </form>
</body>
</html>