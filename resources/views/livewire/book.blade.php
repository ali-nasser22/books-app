<div class="max-w-lg mx-auto mt-10">
    <div
        class="bg-gradient-to-br from-white to-gray-50 shadow-xl rounded-3xl p-8 border border-gray-200/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2 leading-tight">{{ $book->title }}</h2>
        </div>
        <div class="space-y-4">
            <div class="flex items-center space-x-3 p-3 bg-gray-50/50 rounded-xl">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Author</p>
                    <p class="text-gray-900 font-semibold">{{ $book->author }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-gray-50/50 rounded-xl">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Added</p>
                    <p class="text-gray-900 font-semibold">{{ $book->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        <div class="mt-6 pt-6 border-t border-gray-200/50">
            <div class="flex items-center justify-between text-sm text-gray-500">
                <span>Book ID: #{{ $book->id }}</span>
            </div>
        </div>
    </div>
</div>
