<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('barang.update', $barang) }}" class="">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <x-input-label for="nama_barang" :value="__('Nama')" />
                            <x-text-input id="nama_barang" name="nama_barang" type="text" class="mt-1 block w-full"
                                :value="old('nama_barang', $barang->nama_barang)" required autofocus autocomplete="nama_barang" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="stok_barang" :value="__('Stok')" />
                            <x-text-input id="stok_barang" name="stok_barang" type="number" class="mt-1 block w-full"
                                :value="old('stok_barang', $barang->stok_barang)" required autofocus autocomplete="stok_barang" />
                            <x-input-error class="mt-2" :messages="$errors->get('stok_barang')" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="harga_barang" :value="__('Price')" />
                            <x-text-input id="harga_barang" name="harga_barang" type="decimal" class="mt-1 block w-full form-control"
                                :value="old('harga_barang', $barang->harga_barang)" required autofocus autocomplete="harga_barang" />
                            <x-input-error class="mt-2" :messages="$errors->get('harga_barang')" />
                        </div>

                        

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('barang.index') }}"
                                
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest
                            text-gray-700 uppercase transition duration-150 ease-in-out
                            bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-800
                            dark:border-gray-500 dark:text-gray-300 hover:bg-gray-50
                            dark:hover:bg-gray-700 focus:outline-none focus:ring-2
                            focus:ring-indigo-500 focus:ring-offset-2
                            dark:focus:ring-offset-gray-800 disabled:opacity-25">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>