<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="grid">
        @foreach($array as $item)
                <div class="card__container">
                    <img  class="card__img" src="{{ $item['path'] }}" alt="{{ $item['title'] }}" width="100">
                    <div class="text__container">
                        <p>{{ $item['title'] }}</p>
                        <p>{{ $item['price'] }}</p>
                    </div>
                </div>
    @endforeach
    </div>
    
</body>
</html>
