<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
            <a href="{{route('admin.menus.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                New Menu
            </a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Category name
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Image
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Description
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Price
                                    </th>
                                    <th scope="col" class="py-3 px-6" colspan="3">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                            {{$menu->name}}
                                        </th>
                                        <td class="py-4 px-6">
                                            <img src="{{ asset('storage/' . $menu->image) }}" width="130" alt="">
                                        </td>
                                        <td class="py-4 px-6">
                                            {{$menu->description}}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{$menu->price}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex space-x-2">
                                                <a href="{{route('admin.menus.edit',$menu->id)}}"
                                                   class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">
                                                    Edit
                                                </a>
                                                <form method="POST" enctype="multipart/form-data" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                      action="{{route('admin.menus.destroy',$menu->id)}}" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
