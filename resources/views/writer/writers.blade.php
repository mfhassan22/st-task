<x-layout>
    <x-slot:title>Writers</x-slot:title>
    
    <div class="max-w-sm  mt-20 p-4 shadow-md rounded-lg border-t-2 border-gray-400 dark:bg-gray-900 dark:text-white">
        <div class="flex justify-between pb-4">
            <p class="font-bold text-xl">Writers</p>
        </div>
        <ul class="flex flex-col pl-1">
        @foreach($writers as $writer)
            <li class="border-b py-2 dark:border-gray-600 flex justify-between">
                <a class="dark:text-gray-300">{{$writer->name}}</a>
                <a href="{{ route('writers.books', ['id' => $writer->id]) }}" class="bg-gray-400 hover:bg-gray-700 text-white font-thin text-sm px-2 rounded-full" >Books</a>
            </li>
        @endforeach
        </ul>
    </div>

</x-layout>