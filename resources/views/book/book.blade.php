<x-layout>
    <x-slot:title>Book Details</x-slot:title>
    
    <div class="max-w-sm  mt-20 p-4 shadow-md rounded-lg border-t-2 border-gray-400 dark:bg-gray-900 dark:text-white">
    <div class="flex justify-between pb-4">
            <p class="font-bold text-xl">Book Details</p>
        </div>
        <ul class="flex flex-col pl-1">
            <li class="border-b py-2 dark:border-gray-600 flex justify-between">
               <span class="font-bold">Title:</span>
                <span class="font-thin" >{{$book->title}}</span>
            </li>
            <li class="border-b py-2 dark:border-gray-600 flex justify-between">
               <span class="font-bold">Author:</span>
                <span class="font-thin" >{{$book->writer->name}}</span>
            </li>
            <li class="border-b py-2 dark:border-gray-600 flex justify-between">
               <span class="font-bold">Date:</span>
                <span class="font-thin" >{{$book->created_at}}</span>
            </li>
        </ul>
    </div>

</x-layout>