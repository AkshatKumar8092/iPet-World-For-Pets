<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/png" href="image/paw_logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/536ff07e99.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/css/style.css">
  <script defer src="/js/landing.js"></script>

  <title>iPet | Premium Pet Care</title>

</head>

<body>

  <header class="header" id="#header">
    <nav class="nav nav__desktop">
      <img src="image/paw_logo.png" alt="Pet Care logo" class="nav__logo" id="logo">

      <ul class="nav__links">
        <li class="nav__item current">
          <a href="#section--1" class="nav__link nav__link--section">Our Services</a>
        </li>
        <li class="nav__item">
          <a href="#section--2" class="nav__link nav__link--section">Our Values</a>
        </li>
        <li class="nav__item">
          <a href="#section--4" class="nav__link nav__link--section">Reviews</a>
        </li>
      </ul>
    </nav>

    <div class="nav__mobile--wrap">
      <nav class="nav nav__mobile">
        <img src="image/paw_logo.png" alt="Pet Care logo" class="nav__logo" id="logo">
        <ul class="nav__links nav__links-mobile">
          <li class="nav__item current">
            <a href="#section--1" class="nav__link nav__link--section">Our Services</a>
          </li>
          <li class="nav__item">
            <a href="#section--2" class="nav__link nav__link--section">Our Values</a>
          </li>
          <li class="nav__item">
            <a href="#section--4" class="nav__link nav__link--section">Reviews</a>
          </li>
        </ul>
        <div class="nav__mobile--open">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="nav__mobile--close">
          <i class="fa-solid fa-x"></i>
        </div>
      </nav>
    </div>

    <div class="header__title">
      <h1>Take better care of <br />
        <span class="highlight"> Your Pet</span>
      </h1>
      <h4>Dedicated to Pets and People.</h4>
      <button class="btn btn--header" onclick="goto_run1()">Visit Site<i class="fa-solid fa-paw"></i></button>
      <img src="image/header__img.jpg" alt="Image of dog" class="header__img">
    </div>
  </header>

  <section class="section" id="section--1">
    <div class="section__title">
      <h2 class="section__desription">Our Services</h2>
      <h3 class="section__header">Where pet care is personal</h3>
    </div>

    <div class="services">
      <img src="image/boarding-lazy.jpg" data-src="image/boarding.jpg" alt="Dog with book"
        class="services__img lazy-img">
      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-boarding.svg" alt="Dog" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Boarding</h5>
        <p>Comfy boarding for dogs, cats and pocket pets.</p>
      </div>

      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-grooming.svg" alt="Grooming pet" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Grooming</h5>
        <p>Whether your pet needs a quick shampoo or “the works,” our expert groomers will make your furry friend
          fabulous.</p>
      </div>
      <img src="image/grooming-lazy.jpg" data-src="image/grooming.jpg" alt="Dog with with toothbrush"
        class="services__img lazy-img">

      <img src="image/camp-lazy.jpg" data-src="image/camp.jpg" alt="Dog playing computer"
        class="services__img lazy-img">
      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-camp.svg" alt="Bone" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Doggy Day Camp</h5>
        <p>Daytime playtime in a fun, safe environment. Your dog will spend the day doing what dogs do best: playing,
          snacking, napping and loving life.</p>
      </div>

      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-group.svg" alt="Paw" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Puppy Play Group</h5>
        <p>Daytime puppy playtime in a fun, safe environment. Puppies play in a supervised group that has strong pack
          tendencies due to consistent attendance. Since the group has limited change to pack members, your puppy
          achieves a clear rank within a pack of furry “friends for life,” plus gains impeccable social and behavioral
          skills that will carry through to adulthood.</p>
      </div>
      <img src="image/group-lazy.jpg" data-src="image/group.jpg" alt="Puppy" class="services__img lazy-img">

      <img src="image/training-lazy.jpg" data-src="image/training.jpg" alt="Viking dog"
        class="services__img lazy-img">
      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-training.svg" alt="Training" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Training</h5>
        <p>Basic and advanced classes for pets of all ages. We offer a wide range of classes for puppies, teenagers and
          adult dogs.</p>
      </div>

      <div class="services__service">
        <div class="services__icon">
          <img src="image/icon-vet.svg" alt="Vet" class="svg-icon">
        </div>
        <h5 class="services__header highlight">Vet Care</h5>
        <p>Veterinary care, preventative and wellness service clinics, and expertise. We take careful measures to ensure
          and enhance the well-being of all pets in our care.</p>
      </div>
      <img src="image/vet-lazy.jpg" data-src="image/vet.jpg" alt="Vet dog" class="services__img lazy-img">
    </div>
  </section>

  <section class="section" id="section--2">
    <div class="section__title">
      <h2 class="section__desription">Our Values</h2>
      <h3 class="section__header">Your pet’s well-being is our goal.</h3>
    </div>

    <div class="values">

      <div class="values__tab-container">
        <button class="btn values__tab values__tab--1 values__tab--active" data-tab="1">Open and honest
        </button>
        <button class="btn values__tab values__tab--2" data-tab="2">Enthusiasm,
          energy and ambition
        </button>
        <button class="btn values__tab values__tab--3" data-tab="3">Innovation
        </button>
        <button class="btn values__tab values__tab--4" data-tab="4">Experience</button>
      </div>

      <div class="values__content values__content--1 values__content--active">
        <div class="values__icon values__icon--1">
          <img src="image/icon-values1.svg" alt="icon box with heart">
        </div>
        <h5 class="values__header">
          We are open and honest.
        </h5>
        <p>
          We like to speak our minds. We’re not big fans of jargon and prefer to keep things simple, direct and clear.
          We like to listen and give direct answers to questions.
        </p>
      </div>

      <div class="values__content values__content--2">
        <div class="values__icon values__icon--2">
          <img src="image/icon-values2.svg" alt="icon">
        </div>
        <h5 class="values__header">
          We are fired up with enthusiasm, energy and ambition.
        </h5>
        <p>
          Not just for growth, but for building a sustainable future for our people and pets.
        </p>
      </div>

      <div class="values__content values__content--3">
        <div class="values__icon values__icon--3">
          <img src="image/icon-values3.svg" alt="icon">
        </div>
        <h5 class="values__header">
          We are strategically agile and tactically capable.
        </h5>
        <p>
          We like to challenge the way things are done, and always seek out innovative ways forward. That said, we are
          not interested in change for change’s sake.
        </p>
      </div>

      <div class="values__content values__content--4">
        <div class="values__icon values__icon--4">
          <img src="image/icon-values4.svg" alt="icon">
        </div>
        <h5 class="values__header">
          We invest in people and drive results through innovation, commitment and integrity.
        </h5>
        <p>
          We have a deep and intuitive understanding of the pet care industry, as well as extensive experience in
          driving the kinds of innovation that make a tangible difference.
        </p>
      </div>

    </div>

  </section>

  <section class="section" id="section--4">
    <div class="section__title section__title--testimonials">
      <h2 class="section__desription">Reviews</h2>
      <h3 class="section__header">What our clients are saying
      </h3>
    </div>

    <div class="slider">
      <div class="slide slider--1">
        <div class="testimonial">
          <blockquote class="testimonial__text">
            “Thank you, for another excellent groom on Lola. Highly recommend you for the calm and friendly environment
            and the services you provide for all dogs that enter the studio. Look forward to bringing Lola in again
            soon.”
          </blockquote>
          <address class="testimonial__author">
            <img src="image/testimonial1.jpg" alt="avatar" class="testimonial__avatar">
            <h6 class="testimonial__name">Demi Marie S.</h6>
            <p class="testimonial__date">Dec. 8, 2022</p>
          </address>
        </div>
      </div>

      <div class="slide slider--2">
        <div class="testimonial">
          <blockquote class="testimonial__text">
            My sitter took great care of my cat, above and beyond my expectations. I
            would book with Rover again in a heartbeat!
          </blockquote>
          <address class="testimonial__author">
            <img src="image/testimonial2.jpg" alt="avatar" class="testimonial__avatar">
            <h6 class="testimonial__name"> Danielle H.</h6>
            <p class="testimonial__date">June 3rd, 2022</p>
          </address>
        </div>
      </div>

      <div class="slide slider--3">
        <div class="testimonial">
          <blockquote class="testimonial__text">
            Everyone in the Pet Care is absolutely wonder. They have cared for our puppy since we moved to the area a
            few years ago. The staff was incredibly compassionate and handled the situation with the utmost care and
            delicacy. I would highly recommend to anyone!
          </blockquote>
          <address class="testimonial__author">
            <img src="image/testimonial3.jpg" alt="avatar" class="testimonial__avatar">
            <h6 class="testimonial__name">Michael P.</h6>
            <p class="testimonial__date">Apr 13, 2022</p>
          </address>
        </div>
      </div>


      <button class="slider__btn slider__btn--left"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="slider__btn slider__btn--right"><i class="fa-solid fa-arrow-right"></i></button>
      <div class="dots"></div>

    </div>


  </section>


  <footer class="footer">
    <ul class="footer__nav">
      <li class="footer__item">
        <a href="#section--1" class="footer__link">About</a>
      </li>
      
    </ul>
    <img src="image/paw_logo.png" alt="Logo" class="footer__logo">
    <p class="footer__copyright">
      © Made by <a href="https://a-akshat-a.netlify.app/" class="footer__link github-link" target="_blank">Anonymous-Akshat</a>
    </p>
  </footer>

  <div class="overlay hidden"></div>

  <button class="btn btn--scroll"><i class="fa-solid fa-arrow-up"></i></button>

</body>
<script>
function goto_run1() {
        window.location.href = "main.php";
    }
  </script>


</html>