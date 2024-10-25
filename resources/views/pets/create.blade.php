<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create new patient</h1>
    <form action={{route('pets.store')}} method="post">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name"><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age"><br>
        <label for="owner">Owner:</label><br>
        <input type="text" name="owner"><br>
        <label for="breed">Breed:</label><br>
        <input type="text" name="breed"><br>
        <label for="species">Species:</label><br>
        <input type="text" name="species"><br>
        <label for="weight">Weight:</label><br>
        <input type="text" name="weight"><br>
        <label for="image">Image:</label><br>
        <input type="text" name="image"><br>
        <input type="submit" value="Save">
    </form>
</body>

</html>