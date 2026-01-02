<x-layout>
    <form action="{{ route('laravel.store') }}" method="POST">
    {{-- Add CSRF token for security, tells the server that the submit came from our site not from malicious --}}
    @csrf 
    <h2>Create a New Laravel</h2>

    <label for="name">Laravel Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <label for="skill">Laravel Skill(0-100):</label>
    <input type="number" id="skill" name="skill" value="{{ old('skill') }}" required>

    <label for="bio">Biography:</label>
    <textarea name="bio" id="bio" rows="5" required>{{ old('bio') }}</textarea>

    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>
        @foreach($dojos as $dojo)
        <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id')? 'selected' : ""}}>
            {{ $dojo->name }}
        </option>
        @endforeach
    </select>
    <button type="submit" class="btn mt-4">Create Laravel</button>

    @if($errors->any())
    <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
        <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</form>
</x-layout>