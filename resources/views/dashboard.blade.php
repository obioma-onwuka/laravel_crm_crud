<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome") }} {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}! {{ __("You're logged in!") }}

                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-200">All Users</h3>
                            <p class="text-3xl font-bold text-blue-900 dark:text-blue-100">{{ \App\Models\User::count() }}</p>
                        </div>
                        
                        <div class="bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-green-800 dark:text-green-200">Users Joined Today</h3>
                            <p class="text-3xl font-bold text-green-900 dark:text-green-100">{{ \App\Models\User::whereDate('created_at', today())->count() }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
