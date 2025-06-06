 @extends('main')

 @section('title','Rlog')
 
 @section('content')   

<div class="row bg-dark">
    <div class="p-5 mb-4 shodow border border-light border-2 rounded-3">
              <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">welcome to my Rlog!</h1>
                <p class="col-md-8 fs-4">This is my first blog using Laravel version 8. Hope you find it intresting! please check my most popular posts!</p>
                <button class="btn btn-outline-dark btn-lg" type="button">Most Popular Post</button>
              </div>
        </div>
    </div>

    <div class="row align-items-md-stretch"> 
        <div class="col-md-6 bg-sandy text-dark p-4 rounded-3">
           @foreach($posts as $post)
                <div class="">
                    @if($post->image)
                    <img src="{{ url('img/post_img/' . $post->image) }}" class="img-fluid mx-auto d-block m-3 mx-auto d-block" alt="Post Image"/>
                    @endif
                    <h2>{{ $post->title }}</h2>
                    <p> {{ substr(strip_tags($post->body),0,270) }}{{strlen(strip_tags($post->body)) >300 ? "..." : ""}}</p>
                    <a href="{{url('rlog/'.$post->slug)}}" class="btn btn-orange w-100">Read More</a>
                </div>
           @endforeach 
        </div>  
        <div class="d-flex justify-content-center mt-4">
            {!!  $posts->links() !!}
        </div>
    </div>    
</div>
@endsection
  
     

 