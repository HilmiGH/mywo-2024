@extends('admin_website.layouts.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">

                @if (session('status'))

                    <h4 class="mb-2">{{ session('status') }}</h4>
                    
                @endif

                <div class="">
                    <div class="bg-gray-200 rounded-t-md p-4">
                        <h4 class="text-xl font-bold">Inventory - Total : {{ $total_objects }}
                            <a class="float-right text-sm font-normal bg-blue-500 p-2 text-white rounded-md" href="{{ url('add-inventory') }}">Add Object</a>
                        </h4>
                    </div>
                    <div class="">
                        
                        <table class="border border-collapse">
                            <thead class="">
                                <tr class="border">
                                    <th class="border p-2">No.</th>
                                    <th class="border p-2">Object Type</th>
                                    <th class="border p-2">Object Name</th>
                                    <th class="border p-2">Object Category</th>
                                    <th class="border p-2">Object Stock</th>
                                    <th class="border p-2">Object Price</th>
                                    <th class="border p-2">Object Desc</th>
                                    <th class="border p-2">Edit</th>
                                    <th class="border p-2">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @forelse ($objects as $key => $item )
                                    <tr>
                                        <td class="border p-1 text-center">{{ $i++ }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_type'] }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_name'] }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_category'] }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_stock'] }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_price'] }}</td>
                                        <td class="border p-1 text-center">{{ $item['object_desc'] }}</td>
                                        <td class="border p-1"><a href="{{ url('edit-inventory/'.$key) }}" class="text-sm font-normal bg-green-500 p-2 text-white rounded-md">Edit</a></td>
                                        <td class="border p-1">
                                            {{-- <a href="{{ url('delete-contact/'.$key) }}" class="">Delete</a> --}}
                                            <form action="{{ url('delete-inventory/'.$key) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-sm font-normal bg-red-600 p-2 text-white rounded-md">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection