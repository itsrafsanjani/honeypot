<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <label for="title">Title</label>
                        <input id="title" class="border border-gray-400 my-2 w-full" type="text" name="title"
                               value="{{ old('title') }}"
                               required autofocus/>

                        @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                        <label for="body">Body</label>

                        <textarea class="border border-gray-400 my-2 p-2 w-full"
                                  name="body"
                                  id="body"
                                  required
                                  autofocus
                        >{{ old('body') }}</textarea>

                        @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                        <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                                type="submit">
                            Publish
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
