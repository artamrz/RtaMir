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
