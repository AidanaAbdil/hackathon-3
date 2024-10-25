<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <h1>Animals List</h1>

    <form action="{{route("pets.search")}}" method="post">
    @csrf
        <input type="text" name="search">
        <input type="submit" value="search">
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Species</th>
                <th>Owner Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->age }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->owner->surname }}</td> 
                  
            @endforeach
        </tbody>
    </table>
</body>
</html>