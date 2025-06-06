 @extends('wlc-main')

 @section('title','Home')

 @section('content')
 <section class="next-section py-5"> 
 <div class="d-flex justify-content-center m-5 text-sandy">
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
  <div id="collapse-down" class="container-fluid py-4 angled-background-orange-5 d-flex py-3 justify-content-center">
      <div class="row w-100 justify-content-center align-items-center">
          <div class="col-12 col-sm-4 text-center mb-3 mb-sm-0">
              <h3>Before Subscribing</h3>
              <p>Do you think Newsletters are outdated? Let's engage in more interactive ways.</p>
              <a id="toggleBtn" class="btn btn-purple mb-3" style="width: 100%;">I Want To Know More ▼</a>
              <hr>
          </div>
        
        <div id="moreContent" class="collapse-section">
          <div class="row align-items-center mb-4">
                <div class="col-lg-4 col-md-5 offset-md-1">
                  <p class="fw-bold">
                  In this video,<span class="badge bg-dark"> Brett Malinowski </span> breaks down how launching a newsletter can be a simple yet powerful online business with high income potential. By choosing a niche you're familiar with and delivering valuable content weekly, you can grow a loyal audience. Once your readership builds, you can monetize through sponsorships, use effective hooks to increase return visits, and leverage lead magnets to drive growth. It's a clear path to steady, consistent income over time.
                </div>
                <div class="col-lg-5 col-md-6  offset-md-1 video-wrapper mb-4">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/sSLuP0PoYuM?si=pzP9r9s31TFJ_9ZS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> 
            </div>    
         </div>          
      </div> 
  </div>
</div>
 <div class="container-fluid d-flex spikes mt-5">
   
        <div class="scroll-container d-flex overflow-auto py-5 px-2 gap-3">
            <div class="container-fluid d-flex py-5">
            @foreach($posts as $post)  
              <a href="{{url('rlog/'.$post->slug)}}" class="card-link-wrapper">      
                <div class="item-card card-holder rounded-3 bg-dark text-light mx-3">
                      @if($post->image)
                      <a href="{{url('rlog/'.$post->slug)}}"><img src="{{ url('img/post_img/' . $post->image) }}" class="post-img" alt="Post Title"/></a>
                      @endif
                      <div class="card-body card-caption">
                            <main>
                                <h2 class="">{{ $post->title }}</h2>
                                <p class="">{{ substr(strip_tags($post->body),0,100) }}{{strlen(strip_tags($post->body)) >70 ? "..." : ""}}</p>
                            </main>
                            <footer>
                                <div>
                                    <p class="fst-italic"> {{ date('M j Y', strtotime($post->created_at)) }}</p>
                                </div>
                                <a href="{{url('rlog/'.$post->slug)}}"><img src="img/right-arrow-orange.png" class="" width="30" height="30" alt="Read The Post"/></a>
                            </footer>
                      </div>
                </div>
              </a>  
            @endforeach  
            </div>      
        </div>    
  </div>
      
</div>
</section>
@endsection

@section('scripts') 
<script>
  const btn = document.getElementById("toggleBtn");
  const content = document.getElementById("moreContent");

  btn.addEventListener("click", () => {
    const isExpanded = content.classList.contains("show");

    if (isExpanded) {
      // Collapse
      content.style.maxHeight = content.scrollHeight + "px"; // Set height first for transition
      requestAnimationFrame(() => {
        content.style.maxHeight = "0px";
      });
      content.classList.remove("show");
      btn.textContent = "I Want To Know More ▼";
    } else {
      // Expand
      content.classList.add("show");
      content.style.maxHeight = content.scrollHeight + "px";
      btn.textContent = "Show Less ▲";
    }
  });

  // Optional: reset maxHeight after transition to allow reflow if content changes
  content.addEventListener("transitionend", () => {
    if (content.classList.contains("show")) {
      content.style.maxHeight = "none";
    }
  });
</script>

@endsection

        
     

 