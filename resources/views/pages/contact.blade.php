
    @extends('main')
    @section('title','Contact')
    @section('content')
       <div class="row">
            <div class="col-md-5 p-5 mb-4 m-2 bg-light rounded-3 offest-1">
                <h1><span class="badge bg-dark w-100 mb-3">Let's Connect</span></h1>
                <p class="fs-5">You can connect me by filling the form</p>
                <p class="fs-5">I am also pretty active on Linkedin and other social platforms the links are below</p>
                <p class="fs-5">Also if you are a developer, you can reach me on Github too.</p>
            </div>
            <div class="col-md-6 p-5 mb-4 m-2 bg-light rounded-3">
                <h1>Contact Me</h1>
                <hr>
                  <div class="form-group">
                    <label name="email">Email:</label>
                    <input id=email "type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" type="subject" name="subject" class="form-control">
                  </div>
                   <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" type="message" name="message" class="form-control" placeholder="Type your message here ..."></textarea>
                  </div>
                  <div class="form-group mt-1">
                        <input type="submit" name="" value="Send Message" class="btn btn-success">
                  </div>      
            </div>
        </div>
        @endsection

     

    @section('scripts')
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#message'))
                .then(editor => {
                    console.log("CKEditor initialized successfully.");
                })
                .catch(error => {
                    console.error("CKEditor initialization error:", error);
                });
        });
    </script>
@endsection
