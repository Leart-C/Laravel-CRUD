<x-layout>
    <h2>{{ $laravel->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{ $laravel->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $laravel->bio }}</p>
    </div>

</x-layout>
