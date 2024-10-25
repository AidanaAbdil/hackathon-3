<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h2>Pets found</h2>
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