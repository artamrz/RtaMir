<div id="myCarousel" class="carousel slide carousel-fade mb-8" data-bs-ride="carousel">
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
  </div>

  <!-- Next and Previous Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
