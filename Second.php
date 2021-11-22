<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Architect Website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

  </section>

<section class="about-us">
  <div class="section-header">
    <h1 class="section-heading">About Us</h1>
    <div class="underline"></div>
  </div>
  <div class="services">
    <div class="service">
      <div class="service-header">
        <i class="fas fa-pen-nib"></i>
        <h3>Interior</h3>
      </div>
      <p class="service-text">
      </p>
    </div>
    <div class="service">
      <div class="service-header">
        <i class="fas fa-paint-roller"></i>
        <h3>Exterior</h3>
      </div>
      <p class="service-text">
      </p>
    </div>
    <div class="service">
      <div class="service-header">
        <i class="fas fa-pencil-alt"></i>
        <h3>Design</h3>
      </div>
      <p class="service-text">    
      </p>
    </div>
    <div class="service">
      <div class="service-header">
        <i class="fas fa-paint-brush"></i>
        <h3>Decoration</h3>
      </div>
      <p class="service-text"> 
      </p>
    </div>
    <div class="service">
      <div class="service-header">
        <i class="fas fa-ruler-combined"></i>
        <h3>Planning</h3>
      </div>
      <p class="service-text">
      </p>
    </div>
    <div class="service">
      <div class="service-header">
        <i class="far fa-building"></i>
        <h3>Execution</h3>
      </div>
      <p class="service-text">
      </p>
    </div>
    <div class="about-us-img-wrapper">
      <img src="images/house.png" />
    </div>
  </div>
</section>

<section class="team">
  <div class="section-header">
    <h1 class="section-heading">Our Team</h1>
    <div class="underline"></div>
  </div>
  <div class="cards-wrapper">
    <div class="card" data-tilt>
      <div class="card-img-wrapper">
        <img src="images/person-1.jpg" alt="CEO" />
      </div>
      <div class="card-info">
        <h2>Manish Mittal</h2>
        <h3>CEO</h3>
        <p>
          "A Good Goal achiever!"
        </p>
        <button>Read More</button>
      </div>
    </div>
    <div class="card" data-tilt>
      <div class="card-img-wrapper">
        <img src="images/person-2.jpg" alt="Designer" />
      </div>
      <div class="card-info">
        <h2>Nidhi Arora</h2>
        <h3>Designer</h3>
        <p>
          "Design your home as same as you want"
        </p>
        <button>Read More</button>
      </div>
    </div>
    <div class="card" data-tilt>
      <div class="card-img-wrapper">
        <img src="images/person-3.jpg" alt="Architect" />
      </div>
      <div class="card-info">
        <h2>Aaisha Sharma</h2>
        <h3>Architect</h3>
        <p>
          "Knows your ideas better"
        </p>
        <button>Read More</button>
      </div>
    </div>
  </div>
</section>

<section class="contact">
  <div class="contact-wrapper">
    <div class="contact-left"></div>
    <div class="contact-right">
      <h1 class="contact-heading">Contact</h1>
      <form>
        <div class="input-group">
          <input type="text" class="field" />
          <label class="input-label">Full Name</label>
        </div>
        <div class="input-group">
          <input type="email" class="field" />
          <label class="input-label">Email</label>
        </div>
        <div class="input-group">
          <textarea class="field"></textarea>
          <label class="message">Message</label>
        </div>
        <input type="submit" class="submit-btn" value="Submit" />
      </form>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-content">
    <p class="copyright">
      Copyright &copy; 2020, CodeAndCreate - All Rights Reserved
    </p>
    <div class="social-list">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
</footer>
<a href="#" class="scroll-btn">
  <i class="fas fa-arrow-up"></i>
</a>
</div>
  </body>   
<script src="script.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"
></script>
<script src="tilt.js"></script>
</body>
</html>
