
<x-layout>
    <h2>Currently Available</h2>

    @if($greeting == "Hello")
    <p>Hi from inside if statement</p>
    @endif

    <ul>
       @foreach($laravel as $lvr)
       <li>
            <x-card href="/laravel/{{ $lvr['id'] }}" :highlight="$lvr['skill'] > 70">
                <h3>{{ $lvr['name'] }}</h3>
            </x-card>
       </li>
       @endforeach
    </ul>
</x-layout>