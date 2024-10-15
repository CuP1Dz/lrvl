@extends('layouts.main')
@section('content')
<div class="grid">
    <ul>
        @foreach($reports as $item)
            <li>
                <p>ID: {{ $item['id'] }}</p>
                <p>Number: {{ $item['number'] }}</p>
                <p>Description: {{ $item['description'] }}</p>
            </li>
        @endforeach
    </ul>
</div>

@endsection()