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
                                    <div class="flex flex-row">
                                        <x-primary-button :href="route('item.edit', $gift->id)">
                                            Editar Presente
                                        </x-primary-button>
                                        <form action="{{ route('item.delete', $gift->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-primary-button class="bg-red-600 hover:bg-red-700 active:bg-red-600 ml-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </x-primary-button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
