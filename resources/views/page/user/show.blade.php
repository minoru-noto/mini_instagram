@extends('layouts.app')

@section('content')

<div class="pt-3 pl-3 pr-3 border-bottom pb-5">
    
    <div class="row">
        <div class="offset-md-1 col-md-2">
            <img src="{{asset('img/user_02.jpg')}}" alt="" width="80px" height="80px" class="rounded-circle">
        </div>
        <div class="col-md-2 ml-3 pt-3">
            <h5>{{$user->name}}</h5>
        </div>
        <div class="col-md-1 pt-3">
            <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-camera-retro text-dark"></i></a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    
                <a class="dropdown-item" href="{{ route('postItem.create') }}">
                    投稿する
                </a>
                
            </div>
        </diV>
        
        <div class="col-md-1 pt-3">
            <a href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class=""><i class="fas fa-cog text-dark"></i></a>
            
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
               
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    ログアウトする
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
            </div>
            
        </div>
    </div>
    
</div>

        <div class="container p-0">
          <div class="row w-100">
              
            @foreach($postItems as $postItem)
            <div class="col-md-4">
              <img src="{{asset($postItem->img_url)}}" width="227px" height="200px" alt="" class="border">
            </div>
            @endforeach
            
          </div>
        </div>

@endsection
