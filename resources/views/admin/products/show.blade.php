<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Name:</strong> {{ $product->name }}</li>
                        <li class="list-group-item"><strong>Slug:</strong> {{ $product->slug }}</li>
                        <li class="list-group-item"><strong>Description:</strong> {{ $product->description }}</li>
                        <li class="list-group-item"><strong>Price:</strong> {{ $product->price }}</li>
                        <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
                        <li class="list-group-item"><strong>SKU:</strong> {{ $product->sku }}</li>
                        <li class="list-group-item"><strong>Image:</strong> {{ $product->image }}</li>
                        <li class="list-group-item"><strong>Category ID:</strong> {{ $product->category_id }}</li>
                    </ul>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
