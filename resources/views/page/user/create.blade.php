@extends('layouts.app')

@section('content')


<div class="container pt-5 pb-5">
    <div class="w-75 mx-auto ">
        <form action="{{route('user.update',$user->id)}}" method="POST">
            
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
          <div class="form-group">
            <label for="exampleInputEmail1">名前</label>
            <input name="name" value="{{$user->name}}" type="text" class="form-control" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">メールアドレス</label>
            <input name="email" value="{{$user->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="text-center mt-5">
            <button type="submit" class="btn btn-primary w-75">変更</button>
          </div>
        </form>
    </div>
</div>

@endsection
