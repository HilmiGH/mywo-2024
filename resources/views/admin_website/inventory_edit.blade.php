@extends('admin_website.layouts.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">
                <div class="border w-96">
                    <div class="bg-gray-200 rounded-t-md p-4 border">
                        <h4 class="text-xl font-bold">Edit Object
                            <a href="{{ url('inventory') }}" class="float-right text-sm font-normal bg-red-600 p-2 text-white rounded-md">BACK</a>
                        </h4>
                    </div>
                    <div class="p-4 border">
                        
                        <form action="{{ url('update-inventory/'.$key) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Type</label>
                            <input class="border p-1 rounded-md" type="text" name="object_type" value="{{ $editdata['object_type'] }}">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Name</label>
                            <input class="border p-1 rounded-md" type="text" name="object_name" value="{{ $editdata['object_name'] }}">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Category</label>
                            <input class="border p-1 rounded-md" type="text" name="object_category" value="{{ $editdata['object_category'] }}">
                        </div>
                        
                        <div class="mb-3 flex flex-col">
                            <label for="">Object Stock</label>
                            <input class="border p-1 rounded-md" type="text" name="object_stock" value="{{ $editdata['object_stock'] }}">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Price</label>
                            <input class="border p-1 rounded-md" type="text" name="object_price" value="{{ $editdata['object_price'] }}">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Desc</label>
                            <input class="border p-1 rounded-md" type="text" name="object_desc" value="{{ $editdata['object_desc'] }}">
                        </div>

                        <div class="mb-3">
                            <button class="text-sm font-normal bg-blue-500 p-2 text-white rounded-md" type="submit">Save</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection