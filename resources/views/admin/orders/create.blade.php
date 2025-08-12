<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Order') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.orders.store') }}" method="POST">
                        @csrf
                        <!-- Add order fields here -->
                        <button type="submit" class="btn btn-primary">Add Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
