
    @extends('main')
    @section('title','SEO')
    @section('content')
       <div class="carousel-box">

            <input type="radio" name="position" />
            <input type="radio" name="position" checked/>
            <input type="radio" name="position" />

            <div id="CarouselBox">
                <div class="item shadow rounded">
                <img src="{{ asset('img/1.jpg')}}" />
                <h3 class="name">Content Creation</h3>
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto,
                  suscipit?
                </p>
                </div>
            </div>

            <div id="CarouselBox">
                <div class="item shadow rounded">
                <img src="{{ asset('img/2.jpg')}}" />
                <h3 class="name">Content Creation</h3>
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto,
                  suscipit?
                </p>
                </div>
            </div>
            <div id="CarouselBox">
                <div class="item shadow rounded">
                <img src="{{ asset('img/3.jpg')}}" />
                <h3 class="name">Content Creation</h3>
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto,
                  suscipit?
                </p>
                </div>
            </div>
       
       </div>
    @endsection
    @section('scripts')

    @endsection

