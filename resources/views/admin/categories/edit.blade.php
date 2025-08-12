<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required placeholder="Enter category name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug', $category->slug) }}" required placeholder="Enter category slug">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter category description">{{ old('description', $category->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Parent ID</label>
                            <input type="number" name="parent_id" class="form-control" value="{{ old('parent_id', $category->parent_id) }}" placeholder="Enter parent category ID (optional)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="80" class="mt-2">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Active</label>
                            <select name="is_active" class="form-control">
                                <option value="1" @if($category->is_active) selected @endif>Active</option>
                                <option value="0" @if(!$category->is_active) selected @endif>Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
