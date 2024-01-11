@extends('guest_website.layouts.app')

@section('content')
    <form action="">
        <h1>Login</h1>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" name="email" class="border-2">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="text" name="password" class="border-2">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn bg-red-600">Login</button>
        </div>
    </form>

    <h1>If below me is nothing then the code doesn't work</h1>
    @for ($collection as $key -> $item)
        <div>
            {{ $item['email'] }}
        </div>
    @endfor

@endsection