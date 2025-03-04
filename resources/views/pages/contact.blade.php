
    @extends('main')
    @section('title','Contact')
    @section('content')
       <div class="row">

            <div class="p-5 mb-4 bg-light rounded-3">
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
