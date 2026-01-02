<x-layout>
    <h2>{{ $laravel->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{ $laravel->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $laravel->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Informations</h3>
        <p><strong>Dojo name:</strong>{{ $laravel->dojo->name }}</p>
        <p><strong>Location:</strong>{{ $laravel->dojo->location }}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{ $laravel->dojo->description }}</p>
    </div>

</x-layout>
