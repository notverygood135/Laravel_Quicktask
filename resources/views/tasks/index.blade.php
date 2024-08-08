<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Task list') }}
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">Task</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $index => $task)
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center" scope="row">{{ $index + 1 }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $task->name }}</td>
                            <td class="text-gray-900 dark:text-gray-100 justify-center gap-2 flex">
                                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">
                                    <x-primary-button class="mt-4">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                </a>
                                <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button class="mt-4" type="submit">
                                        {{ __('Delete') }}
                                    </x-primary-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Task')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                        type="text"
                        name="name"
                        required/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <x-primary-button class="mt-4">
                    {{ __('+') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
