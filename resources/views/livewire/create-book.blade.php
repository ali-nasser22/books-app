<div class="max-w-lg mx-auto my-10 bg-white shadow-2xl rounded-2xl p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add a Book</h2>

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" wire:model="title"
                   placeholder="Enter book title"
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-4 py-2 shadow-sm">
            @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Author</label>
            <input type="text" wire:model="author"
                   placeholder="Enter author name"
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-4 py-2 shadow-sm">
            @error('author') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
            <input type="number" wire:model="rating" max="5" min="1"
                   placeholder="1 - 5"
                   class="w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-4 py-2 shadow-sm">
            @error('rating') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="pt-4">
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-200">
                Save Book
            </button>
        </div>
    </form>
</div>
