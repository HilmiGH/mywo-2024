@extends('admin_website.layouts.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">

                @if (session('status'))

                    <h4 class="mb-2">{{ session('status') }}</h4>
                    
                @endif

                <div class="">
                    <div class="">
                        <h4>Inventory - Total : {{ $total_objects }}
                            <a href="{{ url('add-inventory') }}" class="float-right">Add Object</a>
                        </h4>
                    </div>
                    <div class="">
                        
                        <table class="">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Object Type</th>
                                    <th>Object Name</th>
                                    <th>Object Category</th>
                                    <th>Object Stock</th>
                                    <th>Object Price</th>
                                    <th>Object Desc</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @forelse ($objects as $key => $item )
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item['object_type'] }}</td>
                                        <td>{{ $item['object_name'] }}</td>
                                        <td>{{ $item['object_category'] }}</td>
                                        <td>{{ $item['object_stock'] }}</td>
                                        <td>{{ $item['object_price'] }}</td>
                                        <td>{{ $item['object_desc'] }}</td>
                                        <td><a href="{{ url('edit-inventory/'.$key) }}" class="">Edit</a></td>
                                        <td>
                                            {{-- <a href="{{ url('delete-contact/'.$key) }}" class="">Delete</a> --}}
                                            <form action="{{ url('delete-inventory/'.$key) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="">Delete</button>
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