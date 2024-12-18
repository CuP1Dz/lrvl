@extends('layouts.main')
@section('content')
<div class="grid">
    @foreach($reports as $item)
    <ul>
        <li>
            <p><a href="{{route('reports.show',$item->id)}}">ID: {{ $item['id'] }}</a></p>
            <p>Number: {{ $item['number'] }}</p>
            <p>Description: {{ $item['description'] }}</p>
            <div>
                <form action=" {{route('reports.destroy', $item->id)}} " method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить" class="btn">
                </form>
            </div>
        </li>
    </ul>
</div>

@endforeach

<div>
    <form method="POST" action="{{route('reports.store')}}">
        @csrf
      <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900">number</label>
                    <input name="number" type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="12asd4" required />
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">description</label>
                    <input name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="text" required />
                </div>
            </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Создать</button>
    </form>
</div>
@endsection()