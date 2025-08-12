<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Name:</strong> {{ $category->name }}</li>
                        <li class="list-group-item"><strong>Slug:</strong> {{ $category->slug }}</li>
                        <li class="list-group-item"><strong>Description:</strong> {{ $category->description }}</li>
                        <li class="list-group-item"><strong>Parent ID:</strong> {{ $category->parent_id }}</li>
                        <li class="list-group-item"><strong>Status:</strong> {{ $category->is_active ? 'Active' : 'Inactive' }}</li>
                    </ul>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
