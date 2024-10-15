<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<h1>Reports</h1>
<div class="grid">
        @foreach($report as $item)
                <div class="card__container">
                    <div class="text__container">
                        <p>{{ $item->id }}</p>
                        <p>{{ $item->number }}</p>
                    </div>
                </div>
        @endforeach
</div>

    {{ $report->links() }}
    
</body>
</html>