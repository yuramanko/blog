<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="email" class="form-control" id="title" placeholder="Title for the Post">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="5" placeholder="Enter Description for the Post"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
