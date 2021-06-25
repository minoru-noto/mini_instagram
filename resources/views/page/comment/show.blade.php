@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">

            

    <div class="w-100 mt-3">
    
                
                @foreach($comments as $comment)

                @if($comment->user_id == $postItem->user_id)
                <div class="mb-4">
                    <div class="">
                        <p>{{$postItem->user->name}}</p> 
                    </div>
                    <div class="p-3 mb-2 bg-success text-white rounded w-50">
                        <p>{{$comment->content}}</p>
                    </div>
                </div>
                @else
                <div class="row mb-4">
                    <div class="offset-md-5 col-md-7">
                        <div class="text-right">
                            <p>{{$comment->user->name}}</p> 
                        </div>
                        <div class="p-3 mb-2 bg-success text-white rounded">
                            <p>{{$comment->content}}</p>
                        </div>
                    </div>
                </div>
                @endif

            @endforeach
               


            <div　class="w-100">
                <form action="{{route('comment.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="post_item_id" value="{{$id}}">
                    <div class="d-flex">

                        <div>
                            <textarea name="content" class="form-control" id="" cols="67" rows="2"></textarea>
                        </div>
                        <div class="ml-3">
                            <button type="submit" class="p-3 btn btn-info">送信</button>
                        </div>

                    </div>
                    
                </form>
            </div>


            
    </div>
</div>


@endsection
