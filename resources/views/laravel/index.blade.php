<x-layout>
    <div class="max-w-6xl mx-auto px-4 py-10">

        <h2 class="text-3xl font-bold text-gray-800 mb-8">
            Currently Available
        </h2>

        <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($laravel as $lvr)
                <li>
                    <x-card 
                        href="{{ route('laravel.show',$lvr->id) }}" 
                        :highlight="$lvr['skill'] > 70"
                        class="block p-6 rounded-xl border bg-white shadow-sm hover:shadow-lg transition"
                    >
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ $lvr->name }}
                            </h3>

                            <span class="text-sm px-3 py-1 rounded-full
                                {{ $lvr['skill'] > 70 
                                    ? 'bg-green-100 text-green-700' 
                                    : 'bg-gray-100 text-gray-600' }}">
                                {{ $lvr['skill'] }}%
                            </span>
                        </div>
                    </x-card>
                </li>
            @endforeach
        </ul>

    </div>

    {{ $laravel->links() }}
</x-layout>
