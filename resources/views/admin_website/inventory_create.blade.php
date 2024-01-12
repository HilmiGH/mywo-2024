@extends('admin_website.layouts.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">
                <div class="">
                    <div class="">
                        <h4>Add Object
                            <a href="{{ url('inventory') }}" class="float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="">
                        
                        <form action="{{ url('add-inventory') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Object Type</label>
                            <input type="text" name="object_type" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Object Name</label>
                            <input type="text" name="object_name" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Object Category</label>
                            <input type="text" name="object_category" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Object Stock</label>
                            <input type="text" name="object_stock" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Object Price</label>
                            <input type="text" name="object_price" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Object Desc</label>
                            <input type="text" name="object_desc" class="">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="">Save</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection