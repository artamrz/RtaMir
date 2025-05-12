<!--<div id="myCarousel" class="carousel slide carousel-fade mb-8" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
          <div class="carousel-caption">
              <p class="fs-1 badge bg-dark" style="--bs-bg-opacity:.35;">Web and App</p>
              <p class="fs-5">Connecting with your customers and building a relationship with them</p>
          </div>   
      </div>
      <img src="{{ asset('img/slide1.jpg') }}" class="d-block w-100" alt="First slide background">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/slide2.jpg')}}" class="d-block w-100" alt="Second slide background">
      <div class="container">
          <div class="col-6 d-flex justify-content-center justify-content-lg-end">
            <div class="carousel-caption">
              <p class="fs-1 badge bg-light" style="--bs-bg-opacity:.1;">Rlog</p>
              <p>A weekly blog about tech and the modern world, but in common sense</p>
            </div>
          </div>  
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/slide3.jpg')}}" class="d-block w-100" alt="Third slide background">
      <div class="container">
        <div class="col-6 d-flex justify-content-center justify-content-lg-end">
          <div class="carousel-caption">
            <p class="fs-1 badge bg-dark" style="--bs-bg-opacity:.3;">Content Creation</p>
            <p>You are the master in what you are doing. Do you need help marketing it?</p>
          </div>
        </div>
      </div>  
    </div>
  </div>-->

  <!-- Next and Previous Controls -->
  <!--<a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>-->

<input type="radio" name="position" id="pos1">
<input type="radio" name="position" id="pos2">
<input type="radio" name="position" id="pos3" checked>
<input type="radio" name="position" id="pos4">
<input type="radio" name="position" id="pos5">

<main id="carousel" class="order-first">
  <div class="item">
    <img src="{{ asset('img/1.jpg') }}" />
    <h3 class="name">Sally Sharpe</h3>
    <p class="occupation">Marketing Admin</p>
    <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, suscipit?</p>
  </div>
  <div class="item">
    <img src="{{ asset('img/2.jpg') }}" />
    <h3 class="name">Michael John</h3>
    <p class="occupation">Cybersecurity Engineer</p>
    <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, dolore.</p>
  </div>
  <div class="item">
    <img src="{{ asset('img/3.jpg') }}" />
    <h3 class="name">Mikayla Eddie</h3>
    <p class="occupation">Software Engineer</p>
    <p class="testimonial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, temporibus?</p>
  </div>
  <div class="item">
    <img src="{{ asset('img/4.jpg') }}" />
    <h3 class="name">Eve Smith</h3>
    <p class="occupation">UI/UX Designer</p>
    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, beatae?</p>
  </div>
  <div class="item">
    <img src="{{ asset('img/5.jpg') }}" />
    <h3 class="name">Luke Maxwell</h3>
    <p class="occupation">System Architect</p>
    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, tempore.</p>
  </div>
</main>

<!-- Centered Indicators -->
<div class="carousel-indicators">
    <label for="pos1"></label>
    <label for="pos2"></label>
    <label for="pos3"></label>
    <label for="pos4"></label>
    <label for="pos5"></label>
</div>
