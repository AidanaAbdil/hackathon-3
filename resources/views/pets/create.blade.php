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
        <h1>Create new patient</h1>

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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
    </div>
</body>

</html>