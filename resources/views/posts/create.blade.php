<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Create new post") }}
                </div>
            </div>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full"
                        type="text"
                        name="title"
                        required/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="content" :value="__('Content')" />
                    <x-text-input id="content" class="block mt-1 w-full"
                        type="text"
                        name="content"
                        required/>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="category" :value="__('Category')" />
                    <x-text-input id="category" class="block mt-1 w-full"
                        type="text"
                        name="category"
                        required/>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>

