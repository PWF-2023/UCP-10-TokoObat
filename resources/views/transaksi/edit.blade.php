<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('transaksi.update', $transaksi) }}" class="">
                    
                        @csrf
                        @method('patch')

                            <div class="mb-6">
                                <x-input-label for="nama_customer" :value="__('Customer')" />
                                <x-text-input id="nama_customer" name="nama_customer" type="text" class="mt-1 block w-full"
                                    :value="old('name', $transaksi->nama_customer)" required autofocus autocomplete="nama_customer" />
                                <x-input-error class="mt-2" :messages="$errors->get('nama_customer')" />
                            </div>

                            <div class="mb-6">
                                <x-input-label for="jumlah_item" :value="__('Jumlah')" />
                                <x-text-input id="jumlah_item" name="jumlah_item" type="text" class="mt-1 block w-full"
                                    :value="old('name', $transaksi->jumlah_item)" required autofocus autocomplete="jumlah_item" />
                                <x-input-error class="mt-2" :messages="$errors->get('jumlah_item')" />
                            </div>


                            <div class="mb-6">
                                <x-input-label for="total_item" :value="__('Total')" />
                                <x-text-input id="total_item" name="total_item" type="text" class="mt-1 block w-full"
                                    :value="old('name', $transaksi->total_item)" required autofocus autocomplete="total_item" />
                                <x-input-error class="mt-2" :messages="$errors->get('total_item')" />
                            </div>


                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('transaksi.index') }}"
                                
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