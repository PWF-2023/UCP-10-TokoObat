<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <x-create-button-barang href="{{ route('barang.create') }}" />
                        </div>
                        <div>
                            @if (session('success'))
                                <p  x-data="{ show: true }" x-show="show" 
                                     x-transition  x-init="setTimeout(() => show = false, 5000)"
                                    class="text-sm text-green-600 dark:text-green-400">{{ session('success') }}
                                </p>
                            @endif
                            @if (session('danger'))
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                                    class="text-sm text-red-600 dark:text-red-400">{{ session('danger') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
                                <tr>
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Stok
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @forelse ($barang as $item)
                                    <tr class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700">
                                        <td scope="row" 
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            {{ $counter++ }}
                                        </td>
                                        <td scope="row" 
                                            class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                                            <a href="{{ route('barang.edit', [$item]) }}" class="hover:underline">
                                                {{ $item->nama_barang }}</a>
                                        </td>

                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            <a href="{{ route('barang.edit', [$item]) }}"
                                                class="hover:underline">
                                                {{ $item->stok_barang }} </a>
                                           
                                        </td>

                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            <a href="{{ route('barang.edit', [$item]) }}"
                                                class="hover:underline">
                                                {{ $item->harga_barang }} </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex space-x-3">
                                                <form action="{{ route('barang.destroy', $item) }}" method="Post">
                                                <a class="btn-sm btn btn-primary" href="{{ route('barang.edit',[$item->id]) }}">EDIT</a>
                                                    @csrf
                                                    @method('delete')
                                                    <x-danger-button type="submit" class="text-red-600 dark:text-red-400">
                                                        DELETE
                                                    </x-danger-button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            Empty
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                 
                </div>
            </div>
        </div>

</x-app-layout>