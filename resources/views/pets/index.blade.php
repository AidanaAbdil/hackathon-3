<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <header class="header">
        <div class="header-overlay">
            <h3 class="header-title">St. Hector's veterinary clinic</h3>
            <nav class="header-nav">
                <a href="#">Home</a>
                <a href="#">Contacts</a>
            </nav>
        </div>
    </header>

    <div class="search">
        <a href="{{ route('pets.create') }}" class="btn btn-primary">Add New Pet</a>
        <form action="{{route("pets.search")}}" method="post">
            @csrf
            <input type="text" name="search">
            <input type="submit" value="search">
        </form>
    </div>



    <h1>Have a look at the pets we care for!</h1>



    <br>

    <div class="pets-grid">
        @foreach($pets as $pet)
        <div class="pet-card">
            <img src="/images/pets/{{$pet->image->path}}" alt="Pet image">
            <div class="pet-info">
                <h3>{{ $pet->name }}</h3>
                <p>Age: {{ $pet->age }}</p>
                <p>Breed: {{ $pet->breed }}</p>
                <p>Owner: {{ $pet->owner->surname }}</p>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>