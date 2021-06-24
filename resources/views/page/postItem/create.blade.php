@extends('layouts.app')

@section('content')

<div class="container p-5 ">
    
            @if (session('post_success'))
                <div class="p-3 mt-3 mb-2 bg-success text-white w-50 mx-auto rounded">
                    <div class="text-center">
                        <i class="fas fa-clipboard"></i>  {{ session('post_success') }}
                    </div>
                </div>
            @endif
    
    <form action="{{route('postItem.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    
    <div class="form-group">
        <label for="exampleFormControlFile1">投稿写真を選択</label>
        <input name="img_url" type="file" class="form-control-file" id="file-sample">
        <img id="file-preview" class="mt-3" style="width:400px;height:300px;">
      </div>
    
      <div class="form-group">
        <label for="exampleInputEmail1">投稿内容の入力</label>
        <input name="comment" type="text" class="form-control" placeholder="">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    document.getElementById('file-sample').addEventListener('change',function(e){
       
       var file = e.target.files[0];
       
       var fileReader = new FileReader();
       
       fileReader.onload = function() {
       
       var dataUri = this.result;
       
       var img = document.getElementById('file-preview');
       img.src = dataUri;
       
       }
       
       fileReader.readAsDataURL(file);
        
    });
</script>
@endsection
