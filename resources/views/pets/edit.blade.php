<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit patient details</h1>
    <form action="{{route('pets.update')}}" method="post">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" value="{{old('name', $pet->name)}}"><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age" value="{{old('age', $pet->age)}}"><br>
        <label for="owner">Owner:</label><br>
        <input type="text" name="owner" value="{{old('owner', $pet->owner_id)}}"><br>
        <label for="breed">Breed:</label><br>
        <input type="text" name="breed" value="{{old('breed', $pet->breed)}}"><br>
        <label for="species">Species:</label><br>
        <input type="text" name="species" value="{{old('species', $pet->species)}}"><br>
        <label for="weight">Weight:</label><br>
        <input type="text" name="weight" value="{{old('weight', $pet->weight)}}"><br>
        <label for="image">Image:</label><br>
        <input type="text" name="image" value="{{old('image', $pet->image_id)}}"><br>
        <input type="submit" value="Save">
    </form>
</body>

</html>