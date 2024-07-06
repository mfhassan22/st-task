<x-layout>
    <x-slot:title>Writers</x-slot:title>
    
    <div class="max-w-sm  mt-20 p-4 shadow-md rounded-lg border-t-2 border-gray-400 dark:bg-gray-900 dark:text-white">
        <div class="flex justify-between pb-4">
            <p class="font-bold text-xl">Writers</p>
        </div>
        <ul class="flex flex-col pl-1">
        @foreach($books as $book)
            <li class="border-b py-2 dark:border-gray-600 flex justify-between">
                <a class="dark:text-gray-300">{{$book->title}}</a>
                <a href="{{ route('book.details', ['book' => $book->id]) }}" class="bg-gray-400 hover:bg-gray-700 text-white font-thin text-sm px-2 rounded-full" >Show</a>
            </li>
        @endforeach
        </ul>
    </div>

</x-layout>