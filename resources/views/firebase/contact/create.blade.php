@extends('firebase.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">
                <div class="">
                    <div class="">
                        <h4>Add Contact
                            <a href="{{ url('contacts') }}" class="float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="">
                        
                        <form action="{{ url('add-contact') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="">
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

{{-- @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Contact
                            <a href="{{ url('contacts') }}" class="btn btn-sm btn-danger float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ url('add-contact') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}