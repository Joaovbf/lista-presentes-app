<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div>
                <x-primary-button :href="route('item.create')">
                    {{ __('Adicionar presente') }}
                </x-primary-button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Lista de presentes') }}
                    </h2>
                    <ul role="list" class="divide-y divide-gray-100">

                        @foreach($gifts as $gift)
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $gift->path_image ?: asset('image/imagem-presente.jpeg')  }}" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $gift->name }}</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                            {{ $gift->description }}</p>
                                    </div>
                                </div>
                                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">Cotas: {{ $gift->quotas }}</p>
                                    <x-primary-button :href="route('item.edit', $gift->id)">
                                        Editar Presente
                                    </x-primary-button>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
