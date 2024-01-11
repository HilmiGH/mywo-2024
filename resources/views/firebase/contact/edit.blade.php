@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Contact
                            <a href="{{ url('contacts') }}" class="btn btn-sm btn-danger float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ url('update-contact/'.$key) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ $editdata['email'] }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" value="{{ $editdata['password'] }}" class="form-control">
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
@endsection