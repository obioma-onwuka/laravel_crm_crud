<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                    
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">First Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">Last Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">Email</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white-500 uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            
                                            @foreach ($users as $user)


                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white-800">{{ $user->first_name }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white-800">{{ $user->last_name }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white-800">{{ $user->email }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                                        Edit / Delete
                                                    </button>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                      
                      
                                        </tbody>
                                    </table>

                                    <div class="mt-4 mb-4 p-4">

                                        {{ $users->links() }}

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
