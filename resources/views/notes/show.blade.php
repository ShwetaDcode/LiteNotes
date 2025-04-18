<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if(session('success'))
                    <div style="background-color:green;color:white;">
                    {{session('success')}}
                    </div>
                @endif
                <div class="flex">
                    <p class="opacity-70">
                        <strong> Created: </strong> {{$note->created_at->diffForHumans()}}
                    </p> 
                    <p class="opacity-70 ml-8">
                    <strong> <br>Updated at: </strong> {{$note->updated_at->diffForHumans()}}
                    </p>
                    <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-auto"><br><br><br>Edit Note</a>
                    <form action="{{ route('notes.destroy',$note) }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure want to delete this?')">Delete Note</button>
                    </form>
                </div>
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text=4xl">
                        {{$note->title}}
                    </h2>
                    <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
                </div>
        </div>
    </div>
</x-app-layout>
