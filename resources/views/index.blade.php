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
        @foreach($reports as $item)
                <div class="card__container">
                    <div class="text__container">
                        <p>{{ $item['id'] }}</p>
                        <p>{{ $item['created_at'] }}</p>
                        <p>{{ $item['updated_at'] }}</p>
                    </div>
                </div>
    @endforeach
    </div>
    
</body>
</html>