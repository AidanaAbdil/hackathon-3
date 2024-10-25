<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <div class="header-overlay">
            <h3 class="header-title">St. Hector's veterinary clinic</h3>
        </div>
    </header>

    <div class="form-container">
        <h1>Edit patient details</h1>

        @include ('pets.success')

        <form action="{{route('pets.update')}}" method="post">

            @csrf

            <input type="hidden" name="pet_id" value="{{$pet->id}}">
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
    </div>
</body>

</html>