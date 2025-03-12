
    @extends('main')
    @section('title','Contact')
    @section('content')
       <div class="row bg-sandy text-dark">
            <div class="col-md-5 p-5 m-2 rounded-5">
                <h3 class="btn-purple w-100 d-block text-center mb-3 p-3 rounded-3">LET'S BUILD BRIDGES</h3>
                <p class="fs-5">You can connect me by filling the form or email me at </p>
                <p class="fs-5">I am also pretty active on <a href="https://www.linkedin.com/in/artamir" class="text-dark"><i class="fa-brands fa-linkedin"></i></a> and other social platforms the links are below</p>
                <p class="fs-5">Also if you are a developer, you can reach me on <a href="https://github.com/artamrz" class="text-dark"><i class="fab fa-github"></i> </a>too.</p>
                
            </div>
            <div class="col-md-6 p-5 mb-4 m-2 bg-dark text-light rounded-5">
                <h1 class="my-2">Contact Me</h1>
                <hr>
                <form action="{{ route('contact.store') }}" method="POST" data-parsley-validate>
                    @csrf   
                  <div class="form-group">
                    <label name="email">Your email so I can get back to you:</label>
                    <input id="email" type="email" name="email" class="form-control mt-3" required>
                  </div>
                  <div class="form-group">
                    <label name="subject">Great, What are we gonna talk about:</label>
                    <input id="subject" type="text" name="subject" class="form-control my-3" required>
                  </div>
                   <div class="form-group">
                    <label name="message">Spill the tea: </label>
                    <textarea id="message" type="message" name="message" class="form-control my-3" placeholder="Type your message here ..." rows="4" required></textarea>
                  </div> 
                  <div class="form-group mt-1">
                        <button type="submit" class="btn btn-orange my-3 w-100">Done! Let's Talk!</button>
                  </div> 
                </form>       
            </div>
        </div>
        @endsection

     

    @section('scripts')
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
@endsection
