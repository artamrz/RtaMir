 @extends('wlc-main')

 @section('title','Home')


 @section('content') 

 <div class="d-flex justify-content-center m-5">
   <div class="row">
     <div class="col-md-4 ">
         <img src="{{ asset('img/RD.jpg')}}" class="mx-auto d-block rounded-circle border-3 m-3" width="140" height="140" alt=""/>
         <h3 class="fw-normal text-center">Context-Aware</h3>
         <p class="service text-center p-3">A responsive layout is no longer sufficient; dynamic adaptation of content and layout based on location, context, and connection speed must be prioritized.</p>
     </div>
     <div class="col-md-4 shadow rounded px-2">
       <img src="{{ asset('img/SEO.jpg')}}" class="mx-auto d-block rounded-circle m-3 border-3" width="140" height="140" alt=""/>
       <h3 class="fw-normal text-center">SEO Optimization</h3>
       <p class="service text-center p-3">Implements strategies to improve rankings on search engines and AI-driven resources, boosting organic traffic and visibility.</p>
     </div>
     <div class="col-md-4">
       <img src="{{ asset('img/CC1.jpg')}}" class="mx-auto d-block rounded-circle border-3 m-3" width="140" height="140" alt=""/>
       <h3 class="fw-normal text-center"> Balanced Design</h3>
       <p class="service text-center p-3 mb-0">Web and software designs should be interactive yet simple, ensuring that neither aspect is compromised for the sake of the other.</p>
     </div>
   </div>
 </div>
<div class="container-fluid py-4 angled-background-orange-5 d-flex py-3 justify-content-center">
    <div class="row w-100 justify-content-center align-items-center">
        <!-- Left Column: Text Content -->
        <div class="col-12 col-sm-4 text-center mb-3 mb-sm-0">
            <h3>No Need To Subscribe</h3>
            <p>Newsletters are outdated. Let's engage in more interactive ways.</p>
            <a href="/contact" class="btn btn-purple" style="width: 100%;">I Want To Know More</a>
        </div>
    </div>
</div>
</div>
 <div class="container-fluid spikes mt-5">
    <div class="row w-100 justify-content-center align-items-center" style="height: 200px;">
        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
              @foreach($posts as $post)
                  <h1 class="display-5 fw-bold">{{ $post->title }}</h1>
                    <p class="col-md-8 fs-4">{{ substr(strip_tags($post->body),0,270) }}{{strlen(strip_tags($post->body)) >300 ? "..." : ""}}</p>
                    <a href="{{url('rlog/'.$post->slug)}}" class="btn btn-dark">Read More</a>
                    <hr>
                @endforeach  
          </div>
        </div>        
    </div>
      
</div>
@endsection

        
     

 