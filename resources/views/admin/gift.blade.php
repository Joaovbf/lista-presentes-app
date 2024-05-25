<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div>
                <x-primary-button :href="route('dashboard')">
                    {{ __('Listagem de presentes') }}
                </x-primary-button>
            </div>
        </div>
    </x-slot>

    @if ($errors->any())
        <div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-300 rounded px-6 py-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Presente') }}
                    </h2>
                    <form enctype="multipart/form-data" method="post" action="{{ isset($gift) ? route('item.update', $gift->id) : route('item.create') }}">
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Presente</h2>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="nome do presente" value="{{ isset($gift) ? $gift->name : old('name') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Descrição</label>
                                        <div class="mt-2">
                                            <textarea id="about" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ isset($gift) ? $gift->description : old('description') }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Imagem do presente</label>
                                        <div class="mt-2 flex items-center gap-x-3">
                                            @if(isset($gift) && !empty($gift->path_image))
                                                <img class="rounded-full w-48" src="{{ $gift->path_image ?? ""}}" alt="Imagem do presente">
                                            @endif
                                            <input type="file" accept="image/*" name="image" id="photo" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <label for="quotas" class="block text-sm font-medium leading-6 text-gray-900">Quantidade de Cotas</label>
                                        <div class="mt-2">
                                            <input type="number" name="quotas" id="quotas" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ isset($gift) ? $gift->quotas : old('quotas') }}">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <label for="value" class="block text-sm font-medium leading-6 text-gray-900">Valor</label>
                                        <div class="mt-2">
                                            <input type="number" step="0.01" name="value" id="value" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ isset($gift) ? $gift->value : old('value') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
