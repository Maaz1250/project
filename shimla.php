<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>backpackers.shimla</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .blogs {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .blg {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }
    </style>
     <style>

:root {
--dark: #222;
--light: #ccc;
--grey: #888;
--space: 20px;
}

body {
	background: dark;

	* {
		box-sizing: border-box;
	}
}

ol {
	list-style: none;
	padding: 0;
}

a {
	text-decoration: none;

	&,
	&:visited {
		color: dark;
	}
}

section {
	h1 {
		color: light;
		margin-bottom: 30px;
		font-size: 20px;
	}
}


main {
	max-width: 900px;
	margin: 0 auto;
	padding: 40px space;
}


.cards {
	font-size: 0;
	white-space: nowrap;
}

.card-outter {
	display: inline-block;
	padding-left: space;
}

.card {
	background: light;
	width: 250px;
	padding: space;

	.title {
		font-size: 16px;
		margin: 10px 0 6px;
	}

	.description {
		font-size: 12px;
		margin: 0;
	}
}


.slider-container {
	position: relative;
	overflow: hidden;
	margin: 0 -20px;



	&:before,
	&:after {
		position: absolute;
		top: 0;
		z-index: 1;
		content: "";
		display: block;
		width: space;
		height: 100%;
	}

	&:before {
		left: 0;
		background: linear-gradient(90deg, dark, transparent);
	}

	&:after {
		right: 0;
		background: linear-gradient(-90deg, dark, transparent);
	}
}

.slider {
	transition: transform 0.2s ease-out;

	&.active {
		transition: none;

		&,
		& a {
			cursor: grab;
		}

		+ .slider-indicator-bar {
			.slider-indicator {
				transition: none; 
			}
		}
	}
}

.slider-indicator-bar {
	position: relative;
	height: 5px;
	width: 100px;
	margin: 30px auto 0;
	background: lighten(dark, 6);
	border-radius: 2px;

	.slider-indicator {
		position: absolute;
		left: 0;
		content: "";
		height: 6px;
		background-color: lighten(dark, 18);
		border-radius: 2px;
		transition: left 0.2s ease-in-out;
	}
}



.slider-arrow {
	display: block;
	position: absolute;
	top: 50%;
	z-index: 2;
	width: 30px;
	height: 30px;
	background: light;
	border: 1px solid grey;
	border-radius: 50%;
	cursor: pointer;
	transform: translateY(-100%);
	transition: opacity 0.2s ease-in-out;
	box-shadow: 0 0 7px 0 rgba(dark, 0.4);

	&:hover {
		box-shadow: 0 0 7px 0 rgba(dark, 0.8);
	}

	&:before {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-family: verdana;
		font-size: 18px;
		color: grey;
	}

	&.disabled {
		opacity: 0;
	}

	&.left {
		left: 5px;

		&:before {
			margin-left: -1px;
			content: "\21F7";
		}
	}

	&.right {
		right: 5px;

		&:before {
			margin-left: 1px;
			content: "\21F8";
		}
	}
}
 </style>
     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row; /* Set flex direction to row for horizontal layout */
            justify-content: space-around; /* Optional: Adjust spacing as needed */
            align-items: stretch; /* Optional: Stretch items to equal height */
            padding: 20px;
            gap: 20px; /* Optional: Adjust gap between cards */
            overflow-x: auto; /* Optional: Add horizontal scroll if cards overflow */
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            cursor: pointer;
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            text-decoration: none;
            color: #333;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .card p {
            color: #666;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

  *,
  *::before,
  *::after {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }

  body {
    font-family: "Quicksand", sans-serif;
    place-items: center;
    height: 50vh;
  }

  .container-new {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    max-width: 1600px;
    margin-block: 2rem;
    gap: 2rem;
  }

  img.new {
    max-width: 0%;
    max-height: 0;
    display: block;
    object-fit: cover;
  }

  .card-new {
    display: flex;
    flex-direction: column;
    width: clamp(20rem, calc(20rem + 2vw), 22rem);
    overflow: hidden;
    box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.1);
    border-radius: 1em;
    background: #ece9e6;
    background: linear-gradient(to right, #ffffff, #ece9e6);
  }

  .card__body-new {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .tag-new {
    align-self: flex-start;
    padding: 0.25em 0.75em;
    border-radius: 1em;
    font-size: 0.75rem;
  }

  .tag-new + .tag-new {
    margin-left: 0.5em;
  }

  .tag-blue-new,
  .tag-brown-new,
  .tag-red-new {
    font-size: 0.6rem; /* Reduce the font size of the tags */
  }

  .card__body-new h4 {
    font-size: 1.5rem;
    text-transform: capitalize;
  }

  .card__footer-new {
    display: flex;
    padding: 1rem;
    margin-top: auto;
  }

  .user-new {
    display: flex;
    gap: 0.5rem;
  }

   /* Add this CSS for image sizing */
   .card__image-new {
    max-width: 100%; /* Set maximum width to 100% of its container */
    height: auto; /* Maintain aspect ratio, automatically adjusting the height */
  }

  .user__image-new {
    max-width: 40px; /* Adjust the maximum width of the user image */
    height: auto; /* Maintain aspect ratio, automatically adjusting the height */
  }
  .user__info-new > small {
    color: #666;
  }
    /* Add this CSS for the hover effect */
    .card-new {
    transition: transform 0.3s ease-in-out;
  }

  .card-new:hover {
    transform: scale(1.05); /* Adjust the scale factor for the desired zoom effect */
  }
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-dark sticky-top p-0">
        <a href="home.php" class="navbar-brand bg-dark d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white" style="background-color: black;">BACKPACKERS</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="abouthimachalpradesh.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="himachal.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore
                        backpackers</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="goa.html" class="dropdown-item">GOA</a>
                        <a href="himachal.html" class="dropdown-item">HIMACHAL PRADESH</a>
                        <a href="rajasthan.html" class="dropdown-item">RAJASTHAN</a>
                        <a href="kerala.html" class="dropdown-item">KERALA</a>
                        <a href="meghalaya.html" class="dropdown-item">MEGHALAYA</a>
                        <a href="uttarpradesh.html" class="dropdown-item">UTTAR PRADESH</a>
                    </div>
                </div>
                <a href="hotels/hotels.php" class="nav-item nav-link">Hotels</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="himachal pradeshimg/shimla/CARAOUSEL1.jpg" alt="img1">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">“Embracing
                                    the adventure of backpacking in <span class="text-secondary">SHIMLA</span>"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="himachal pradeshimg/shimla/CARAOUSEL2.jpg" alt="img2">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    "</span>Finding my path amidst the
                                    scenic trails of <span class="text-secondary">SHIMLA</span>"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="himachal pradeshimg/shimla/CARAOUSEL3.jpg" alt="img3">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    "Wandering through nature's playground in
                                    <span class="text-secondary">SHIMLA</span>"
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!--abut-->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="himachal pradeshimg\shimla\ABOUT.jpeg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5">Our Vision</h1>
                    <p class="mb-5">We started Backpackers with one simple belief — Everyone Must Trek. We wanted to do
                        this by bringing out information about treks, and by setting the right spirit of trekking in
                        India.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-mountain fa-3x text-dark mb-3"></i>
                            <h5>What We Are Known For</h5>
                            <p class="m-0">A trek that will make you Independent.</p>
                        </div>
                    </div>
                    <a href="about.html" class="btn btn-dark py-3 px-5">Explore More</a>
                    <a href="hotels/hotels.php" class="btn btn-dark py-3 px-5">Our Hostels</a>
                </div>
            </div>
        </div>
    </div>
    <!--about END-->
    <!--hostel
    &nbsp;&nbsp;&nbsp;&nbsp;<center>
        <div>
            <a href="hotels/hotels.php"
                class="btn btn-dark py-3 px-5">BACKPACKERS HOSTELS IN
                SHIMLA</a>
        </div>
    </center>
    <-- hostel END-->
    <!--Itinerary -->
    <main>
        <section class="slider-section">
      <center><h1 class="mb-5" style="font-size: 30px">ITINERARY</h1></center>
                <div class="slider-container">
                    <ol class="cards slider">
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a href="#">
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI1.jpg">
                                    <h2 class="title">7:00 AM</h2>
                                    <p class="description">Morning Bliss🌲🚶</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI2.jpg">
                                    <h2 class="title">9:00 AM</h2>
                                    <p class="description">Breakfast Delight🥣🌞
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a href="#">
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI3.jpg">
                                    <h2 class="title">11:00 AM</h2>
                                    <p class="description">Ridge Adventure🏰</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI4.jpg">
                                    <h2 class="title">12:00 PM</h2>
                                    <p class="description">Gothic Beauty🕍✨
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a href="#">
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI5.jpg">
                                    <h2 class="title">1:00 PM</h2>
                                    <p class="description">Historical Mansion 🏛📚</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI6.jpg">
                                    <h2 class="title">2:00 PM</h2>
                                    <p class="description">Tasty Ridge Delight 🍗🍽 </p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a href="#">
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI7.jpg">
                                    <h2 class="title">4:00 PM</h2>
                                    <p class="description">Wooden Treasures 🛍🪵</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI8.jpg">
                                    <h2 class="title">5:00 PM</h2>
                                    <p class="description">Divine Hill Retreat 🙏🌄</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a href="#">
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI9.jpg">
                                    <h2 class="title">6:00 PM</h2>
                                    <p class="description">Picture Perfect Sunset 🌅📸</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI10.jpg">
                                    <h2 class="title">7:30 PM</h2>
                                    <p class="description">Yummy Bakery Delights 🥐🍰</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI11.jpg">
                                    <h2 class="title">8:30 PM</h2>
                                    <p class="description">Live Music Feast 🎶🍕</p>
                                </a>
                            </div>
                        </li>
                        <li class="card-outter slider-item js-slider-item">
                            <div class="card">
                                <a>
                                    <img src="himachal pradeshimg\shimla\ITINERARY\ITI12.jpg">
                                    <h2 class="title">9:30 PM</h2>
                                    <p class="description">Nighttime Hostel Fun 🌙🏓</p>
                                </a>
                            </div>
                        </li>
                    </ol>
                    <div class="slider-indicator-bar js-slider-indicator-bar">
                        <div class="slider-indicator js-slider-indicator"></div>
                    </div>
                    <span class="js-slider-arrow slider-arrow left disabled"></span>
                    <span class="js-slider-arrow slider-arrow right"></span>
                </div>
        </section>
    </main>
  <script>
   const THRESHOLD = 20;

class SwipeSlider {
	constructor(slider) {
		this.startX = 0;
		this.oldX = 0;
		this.startPosition = 0;
		this.snapPosition = 0;
		this.isDown = false;
		this.userHasSwiped = false;

		// Init
		this.cacheElements(slider);
		this.setDimensions();
		this.setIndicator();
		this.bindHandlers();
	}

	cacheElements(slider) {
		this.slider = slider;
		this.items = this.slider.querySelectorAll(".js-slider-item");
		this.indicator = slider.parentNode.querySelector(".js-slider-indicator");
		this.indicatorBar = slider.parentNode.querySelector(
			".js-slider-indicator-bar"
		);
		this.arrows = slider.parentNode.querySelectorAll(".js-slider-arrow");
	}

	setDimensions() {
		const spacing = 20;
		const sliderWidth = this.slider.offsetWidth;
		const itemWidth = this.items[0].offsetWidth;
		const itemsWidth = this.items.length * itemWidth;

		this.itemWidth = itemWidth;
		this.maxAllowedW =
			sliderWidth < itemsWidth ? sliderWidth - itemsWidth - spacing : 0;
	}

	setIndicator() {
		if (!this.indicator) return;

		const times = (this.items.length * this.itemWidth) / this.slider.offsetWidth;
		const length = this.indicatorBar.offsetWidth / times;

		this.indicator.style.width = `${length}px`;
	}

	// Calculate

	calculateBoundaries(position, bounce = true) {
		const bounceMargin = bounce ? this.itemWidth / 4 : 0;

		if (position > bounceMargin) return bounceMargin;
		if (position < this.maxAllowedW - bounceMargin)
			return this.maxAllowedW - bounceMargin;

		return position;
	}

	calculateNextSnap(position, swipeNext) {
		let snapPosition =
			(parseInt(position / this.itemWidth, 10) - swipeNext) * this.itemWidth;

		if (snapPosition < this.maxAllowedW) snapPosition = this.maxAllowedW;
		return snapPosition;
	}

	moveIndicator(currPos) {
		if (!this.indicator) return;

		const indicatorPos =
			this.indicatorBar.offsetWidth - this.indicator.offsetWidth;
		const position = this.mapToRange(
			currPos,
			0,
			this.maxAllowedW,
			0,
			indicatorPos
		);

		this.indicator.style.left = `${position}px`;
	}

	moveSlider(position, snapPosition = null) {
		// When dragging we need 2 positions: current and snap on end
		this.snapPosition = snapPosition != null ? snapPosition : position;

		this.slider.setAttribute(
			"style",
			`transform: translate3d(${position}px, 0, 0)`
		);
	}

	// Helpers

	mapToRange(num, inMin, inMax, outMin, outMax) {
		return ((num - inMin) * (outMax - outMin)) / (inMax - inMin + outMin);
	}

	toggleArrowDisable() {
		this.arrows.forEach((el) => el.classList.remove("disabled"));

		if (this.snapPosition === 0) this.arrows[0].classList.add("disabled");
		else if (this.snapPosition === this.maxAllowedW)
			this.arrows[1].classList.add("disabled");
	}

	// Handlers

	bindHandlers() {
		// TODO: maybe add mousedwon and touchstart listeners here. Then add inside them
		// only the relevant move / end listeners (touch or mouse), and remove them on end
		this.slider.addEventListener("touchstart", (e) => this.handleTouchStart(e));
		this.slider.addEventListener("touchmove", (e) => this.handleTouchMove(e));
		this.slider.addEventListener("touchend", (e) => this.handleEnd(e));

		this.slider.addEventListener("mousedown", (e) => this.handleMouseStart(e));
		this.slider.addEventListener("mousemove", (e) => this.handleMouseMove(e));
		this.slider.addEventListener("mouseup", (e) => this.handleEnd(e));
		this.slider.addEventListener("mouseleave", (e) => this.handleEnd(e));

		this.slider.addEventListener("wheel", (e) => this.handleWheel(e));

		this.slider.addEventListener("click", (e) => this.handleClick(e));
		window.addEventListener("resize", () => this.handleResize());

		if (!this.arrows.length) return;

		this.arrows[0].addEventListener("click", (e) => this.handleArrowClick(e)); // left
		this.arrows[1].addEventListener("click", (e) => this.handleArrowClick(e)); // right
	}

	// Start

	handleTouchStart(e) {
		if (e.touches.length > 1) return;

		this.handleStart(e);
	}

	handleMouseStart(e) {
		e.preventDefault();

		this.handleStart(e);
	}

	handleStart(e) {
		this.isDown = true;
		this.userHasSwiped = false;
		this.startPosition = this.snapPosition;
		this.startX = (e.pageX || e.touches[0].pageX) - this.slider.offsetLeft;

		this.slider.classList.add("active");
	}

	// Move

	handleTouchMove(e) {
		if (e.touches.length > 1 || !this.isDown) return;

		this.handleMove(e);
	}

	handleMouseMove(e) {
		if (!this.isDown) return;

		e.preventDefault();
		this.handleMove(e);
	}

	handleMove(e) {
		const pageX = e.pageX || e.touches[0].pageX;
		const currX = pageX - this.slider.offsetLeft;
		const dist = currX - this.startX;

		if (Math.abs(dist) < THRESHOLD) return;

		const swipeNext = this.oldX - currX < 0 ? 0 : 1; // Swipe direction
		const accelerate = this.mapToRange(
			Math.abs(dist),
			THRESHOLD,
			window.innerWidth,
			1,
			3
		);
		const position = this.calculateBoundaries(
			this.startPosition + dist * accelerate
		);

		e.preventDefault();

		this.userHasSwiped = true;
		this.oldX = currX;

		this.moveSlider(position, this.calculateNextSnap(position, swipeNext));
		this.moveIndicator(position);
	}

	// End

	handleEnd() {
		if (!this.isDown) return;

		this.isDown = false;
		this.slider.classList.remove("active");

		this.moveSlider(this.snapPosition);
		this.moveIndicator(this.snapPosition);

		if (this.arrows.length > 0) this.toggleArrowDisable();
	}

	// Other Handlers

	handleWheel(e) {
		if (Math.abs(e.deltaX) < THRESHOLD) return;

		const step = 40;
		const snapPosition = this.snapPosition + step * Math.sign(e.deltaX);

		this.slider.classList.add("active"); // Will be removed on mouseleave
		this.moveSlider(this.calculateBoundaries(snapPosition, false));
		this.moveIndicator(snapPosition);
		this.toggleArrowDisable();
	}

	handleArrowClick(e) {
		const direction = e.target.classList.contains("left") ? 1 : -1;
		const position = this.calculateBoundaries(
			this.snapPosition + direction * this.itemWidth,
			false
		);

		this.slider.classList.remove("active");
		this.moveSlider(position);
		this.moveIndicator(position);
		this.toggleArrowDisable();
	}

	handleResize() {
		this.setIndicator();
		this.setDimensions();

		if (this.maxAllowedW > this.snapPosition) {
			this.moveSlider(this.maxAllowedW);
			this.moveIndicator(this.maxAllowedW);
		}
	}

	handleClick(e) {
		if (!this.userHasSwiped) return;

		e.preventDefault(); // Disallow click while swiping
		this.userHasSwiped = false;
	}
}

const sliders = document.querySelectorAll(".slider");
sliders.forEach((slider) => {
	new SwipeSlider(slider);
});

  </script>
    <!--Itinerary END-->
    <!-- THINGS TO DO Start -->
    <center><h1 class="mb-5" style="font-size: 30px">THINGS TO DO</h1></center>
    <div class="container">
        <a href="see-page.html" class="card">
            <img src="See.jpg" alt="SEE Image">
            <h3>SEE</h3>
            <p>DISCRIPTION</p>
        </a>

        <a href="eat-page.html" class="card">
            <img src="Eat.jpg" alt="EAT Image">
            <h3>EAT</h3>
            <p>DISCRIPTION</p>
        </a>

        <a href="shop-page.html" class="card">
            <img src="Shop.jpg" alt="SHOP Image">
            <h3>SHOP</h3>
            <p>DISCRIPTION</p>
        </a>

        <a href="places-page.html" class="card">
            <img src="Places.jpg" alt="NEAR BY Image">
            <h3>NEAR BY</h3>
            <p>DISCRIPTION</p>
        </a>
    </div>
    <!-- THINGS TO DO END -->

    <!-- Blogs Start -->
    <center><h1 class="mb-5" style="font-size: 30px">OUR BLOGS</h1></center>
    <div class="container-new">
  <div class="card-new">
    <div class="card__header-new">
      <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image-new" width="600">
    </div>
    <div class="card__body-new">
      <span class="tag-new tag-blue-new">Technology</span>
      <h4>What's new in 2022 Tech</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
    </div>
    <div class="card__footer-new">
      <div class="user-new">
        <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image-new">
        <div class="user__info-new">
          <h5>Jane Doe</h5>
          <small>2h ago</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card-new">
    <div class="card__header-new">
      <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image-new" width="600">
    </div>
    <div class="card__body-new">
      <span class="tag-new tag-brown-new">Food</span>
      <h4>Delicious Food</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
    </div>
    <div class="card__footer-new">
      <div class="user-new">
        <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image-new">
        <div class="user__info-new">
          <h5>Jony Doe</h5>
          <small>Yesterday</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card-new">
    <div class="card__header-new">
      <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image-new" width="600">
    </div>
    <div class="card__body-new">
      <span class="tag-new tag-red-new">Automobile</span>
      <h4>Race to your heart content</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
    </div>
    <div class="card__footer-new">
      <div class="user-new">
        <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image-new">
        <div class="user__info-new">
          <h5>John Doe</h5>
          <small>2d ago</small>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Blogs End -->

   <!-- Updated Footer Start -->
<div class="custom-container-fluid bg-dark text-light custom-footer pt-5 wow fadeIn" data-wow-delay="0.1s"
    style="margin-top: 6rem;">
    <div class="custom-container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>S.S AGRWAL COLLEGE,NAVSARI</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7201813403</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>backpackersmmd123@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
        </div>
    </div>
    <div class="custom-container">
        <div class="custom-copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">BACKPACKERS</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Updated Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function () {
            $(".itinerary-item h3").click(function () {
                $(this).parent(".itinerary-item").toggleClass("show-details");
            });
        });
    </script>
</body>

</html>