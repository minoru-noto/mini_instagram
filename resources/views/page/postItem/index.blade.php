@extends('layouts.app')

@section('content')

<div class="">
    
    @foreach($postItems as $postItem)
    <div class="card mb-3" style="">
      <div class="row">
          
          <div class="col-md-6">
              <div class="row p-2">
                <div class="offset-md-1 col-md-2">
                    <img src="{{asset($postItem->user->img_url)}}" alt="" width="45px" height="45px" class="rounded-circle">
                </div>
                <div class="col-md-7 mt-2">
                    <p class="">{{$postItem->user->name}}</p>
                </div>
              </div>
          </div>
          
          <div class="offset-md-3 col-md-3">
              <div class="text-right mr-5 mt-3"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <a><i class="fas fa-ellipsis-h fa-2x"></i></a>
              </div>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('user.show',$postItem->user_id)}}">アカウント情報</a>
                
                @if( Auth::user()->id != $postItem->user_id )
                <a class="dropdown-item" href="#">メッセージを送る</a>
                @endif
                
                @if( Auth::user()->id == $postItem->user_id )
                <form action="{{route('postItem.destroy',$postItem->id)}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <button class="dropdown-item text-danger">投稿を削除する</button>
                    </div>
                </form>
                @endif
                
                @if( Auth::user()->id != $postItem->user_id )
                <a class="dropdown-item text-danger" href="#">フォローをやめる</a>
                @endif
                
              </div>
          </div>
          
      </div>
      <img src="{{ asset($postItem->img_url) }}" width="100%" height="500px">
      <div class="card-body">
        <div class="d-flex mb-2">
            <a href="#" class="mr-3"><i class="far fa-heart text-dark"></i></a>
             @if( Auth::user()->id != $postItem->user_id )
            <a href="{{route('comment.show',$postItem->id)}}" class=""><i class="far fa-comment text-dark"></i></a>
            @endif
        </div>
        <p class="card-text">@<strong><a href="#">{{$postItem->user->name}}</a></strong>  {{ $postItem->comment }}</p>
        <p><a href="{{route('comment.show',$postItem->id)}}">{{ count($postItem->comments)}}件のコメントとやりとり</a></p>
        <p class="card-text"><small class="text-muted">{{$postItem->created_at->format('Y年m月d日')}}</small></p>
      </div>
    </div>
    @endforeach
    
    
    
</div>


@endsection
