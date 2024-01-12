@extends('firebase.app')

@section('content')
    <div class="m-8">
        <div class="flex mx-4 flex-wrap">
            <div class="">
                <div class="">
                    <div class="">
                        <h4>Edit Contact
                            <a href="{{ url('contacts') }}" class="float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="">
                        
                        <form action="{{ url('update-contact/'.$key) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ $editdata['email'] }}" class="">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" value="{{ $editdata['password'] }}" class="">
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