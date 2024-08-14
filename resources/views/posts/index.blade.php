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
                    {{ __('Post list') }}
                </div>
            </div>
            <a href="{{ route('posts.create') }}">
                <x-primary-button class="mt-4">
                    {{ __('Create new post') }}
                </x-primary-button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{__('Title')}}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{__('Content')}}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{__('Category')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $index => $post)
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center" scope="row">{{ $index + 1 }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $post->title }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $post->content }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $post->category }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
