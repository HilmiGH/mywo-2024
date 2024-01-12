@extends('admin_website.layouts.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">
                <div class="border w-96">
                    <div class="bg-gray-200 rounded-t-md p-4 border">
                        <h4 class="text-xl font-bold">Add Object
                            <a href="{{ url('inventory') }}" class="float-right text-sm font-normal bg-red-600 p-2 text-white rounded-md">BACK</a>
                        </h4>
                    </div>
                    <div class="p-4 border">
                        
                        <form action="{{ url('add-inventory') }}" method="POST">
                        @csrf

                        <div class="mb-3 flex flex-col">
                            <label  for="">Object Type</label>
                            <input class="border p-1 rounded-md" type="text" name="object_type" class="">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Name</label>
                            <input class="border p-1 rounded-md" type="text" name="object_name" class="">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Category</label>
                            <input class="border p-1 rounded-md" type="text" name="object_category" class="">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Stock</label>
                            <input class="border p-1 rounded-md" type="text" name="object_stock" class="">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Price</label>
                            <input class="border p-1 rounded-md" type="text" name="object_price" class="">
                        </div>

                        <div class="mb-3 flex flex-col">
                            <label for="">Object Desc</label>
                            <input class="border p-1 rounded-md" type="text" name="object_desc" class="">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="text-sm font-normal bg-blue-500 p-2 text-white rounded-md">Save</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection