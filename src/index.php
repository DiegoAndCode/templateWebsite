<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>  
  <?php 
    $title = "Home :: templateWebsite";
    include 'head.php'; 
  ?>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <section class="container col-xxl-8" id="emphasis">
      <div class="row flex-lg-row-reverse align-items-center py-5">
        <?php
          $today = date('Y-m-d');
          $date_end = '2024-07-31';

          $emphasis_image = "http://placehold.it/850x650&text=Banner1";
          $emphasis_image_alt = "Banner1";
          $emphasis_title = "Title of banner 1";
          $emphasis_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit.";

          if ($today <= $date_end) {
            $emphasis_image = "http://placehold.it/850x650&text=Banner2";
            $emphasis_image_alt = "Banner 2";
            $emphasis_title = "Title of banner 2";
            $emphasis_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit.";
          }
        ?>
        <div class="col-12 col-lg-6">
            <img src="<?= $emphasis_image ?>" class="img-fluid" alt="<?= $emphasis_image_alt ?>" loading="lazy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $emphasis_title ?></h1>
            <p class="lead"><?= $emphasis_text ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="#contact" class="btn btn-primary btn-lg px-4 me-md-2">Contact</a>
            </div>
        </div>        

      </div>
    </section>

    <div class="divider"></div>

    <section class="my-5" id="about">
      <div class="container">
          <h2 class="pb-2 border-bottom">About</h2>
          <div class="row row-cols-1 row-cols-md-2 align-items-md-center py-5">
              <div class="col d-flex flex-column align-items-start gap-2">
                <!--<h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome features</h2>-->
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum!</p>

                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
      
              <div class="col">
                  <img src="http://placehold.it/600x400&text=About" class="img-fluid" alt="About" loading="lazy">

              </div>
          </div>
      </div>
    </section>
    
    <div class="divider"></div>
    
    <section class="container my-5" id="services">
        <h2 class="pb-2 border-bottom">Services</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-cash-coin"></i>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Service 1</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.</p>
              <!--<a href="#" class="btn btn-primary">Primary button</a>-->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-bar-chart-line-fill"></i>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Service 2</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.</p>
              <!--<a href="#" class="btn btn-primary">Primary button</a>-->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-person-bounding-box"></i>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Service 3</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.</p>
              <!--<a href="#" class="btn btn-primary">Primary button</a>-->
            </div>
          </div>
        </div>
    </section>
    
    <div class="divider"></div>

    <section class="my-5" id="partners">
        <div class="container px-4 ">
            <h2 class="pb-2 border-bottom">Partners</h2>
        </div>

        <div class="p-5 text-center partner1">
            <div class="container py-5">
            <img src="http://placehold.it/800x250&text=Partner1" class="img-fluid" alt="Partner 1">
            <p class="col-lg-8 mx-auto lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="btn btn-secondary">See more</a>
            </div>
        </div>

        <div class="p-5 text-center partner2">
            <div class="container py-5">
            <img src="http://placehold.it/800x250&text=Partner2" class="img-fluid" alt="Partner 2">
            <p class="col-lg-8 mx-auto lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="btn btn-secondary">See more</a> 
            </div>
        </div>

        <div class="p-5 text-center partner3">
            <div class="container py-5">
            <img src="http://placehold.it/800x250&text=Partner3" class="img-fluid" alt="Partner 3">
            <p class="col-lg-8 mx-auto lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="btn btn-secondary">See more</a> 
            </div>
        </div>

        <div class="p-5 text-center partner4">
            <div class="container py-5">
            <img src="http://placehold.it/800x250&text=Partner4" class="img-fluid" alt="Partner 4">
            <p class="col-lg-8 mx-auto lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="#" class="btn btn-secondary">See more</a>            
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section class="container my-5" id="contact">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h2 class="display-4 fw-bold lh-1 text-body-emphasis">Contact</h2>
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ipsum!
            </p>
            <p class="lead">
                Av. Brigadeiro Faria Lima<br />
                Saquarema<br />
                CEP 22775-000<br />
                <br />
                <i class="bi bi-whatsapp me-3"></i><a href="https://wa.me/1199999999">(11) 9999-9999</a> | 
                <i class="bi bi-telephone mx-2"></i><a href="tel:1199999999">(14) 9999-9999</a><br />
                <i class="bi bi-envelope me-3"></i><a href="mailto:contact@website.com">contact@website.com</a> | <a href="mailto:contact2@website.com">contact2@website.com</a><br />
                <i class="bi bi-instagram me-3"></i><a href="https://www.instagram.com/instagram">@instagram</a><br />
                <i class="bi bi-clipboard-check me-3"></i><a href="/form/">See the form</a><br />
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start my-4 mb-lg-3">
              <a href="https://wa.me/1199999999" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">
                <i class="bi bi-whatsapp"></i> WhatsApp</a>
              <a href="/form/" class="btn btn-outline-secondary btn-lg px-4">
                <i class="bi bi-clipboard-check me-3"></i>See the Form</a>
            </div>
          </div>
          <div class="col-lg-5 p-0 overflow-hidden shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31798452.637231108!2d-73.1397803721432!3d-13.372209067240773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1716901638059!5m2!1spt-BR!2sbr" width="720" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>