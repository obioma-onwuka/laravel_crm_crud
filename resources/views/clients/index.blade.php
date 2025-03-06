<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>

        @if (session()->has('success'))
            <div class="mt-4 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                {{ session('success') }}
            </div>
        @endif
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
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">Company Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white-500 uppercase">Company Address</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white-500 uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            
                                            @foreach ($clients as $client)


                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white-800">{{ $client->contact_name }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white-800">{{ $client->company_name }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white-800">{{ $client->company_email }}</td>

                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <a href="{{ route('clients.edit', $client->id) }}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this user?')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                      
                      
                                        </tbody>
                                    </table>

                                    <div class="mt-4 mb-4 p-4">

                                        {{ $clients->links() }}

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
