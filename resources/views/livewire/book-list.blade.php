<div>
    <header class="flex justify-between">
        <div>
            <p class="font-bold text-3xl mb-4 font-mono">Hello {{$name}}!</p>
            <p>Here's a List Of your Book Reviews...</p>
        </div>
        <div>
            <form wire:submit="$refresh">
                <label for="name">Your Name:</label>
                <input type="text" id="name" wire:model="name">
                <button class="cursor-pointer">Update</button>
            </form>
        </div>
    </header>
    <div>
        <p class="text-end mb-1">Books: <span class="font-extrabold">{{$count}}</span></p>
    </div>
    <ul class="list">
        @foreach($books as $book)
            <li class="flex flex-col items-start justify-center" wire:key="{{$book->id}}">
                <h3>Title: <span class="font-extrabold">{{$book->title}}</span></h3>
                <h4>Author: <span class="font-extrabold">{{$book->author}}</span></h4>
                <p>Rating: <span class="font-extrabold">{{$book->rating}}/5</span></p>
                <div class="flex justify-center items-center gap-2">
                    <button
                        class="bg-transparent cursor-pointer hover:bg-amber-500 text-gray-400 font-semibold hover:text-white py-2 px-4 border border-amber-500 hover:border-transparent rounded">
                        Edit
                    </button>
                    <button
                        wire:click="destroy({{$book}})"
                        wire:confirm="Are you sure you want to delete this book?"
                        class="bg-transparent cursor-pointer hover:bg-red-500 text-gray-400 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                        Delete
                    </button>
                </div>
                <p class="self-end text-sm">Created: {{$book->created_at->diffForHumans()}}</p>
            </li>
        @endforeach
    </ul>
    <div class="mt-4">
        {{$books->links()}}
    </div>
</div>
