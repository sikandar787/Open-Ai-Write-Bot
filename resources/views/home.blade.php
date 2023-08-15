@include('partials.header')

<main id="main">
    <!-- Home Page -->
    <section id="hero" class="hero">
        <img src="assets/img/99.jpg" alt="" data-aos="fade-in" />

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="w-50" data-aos="fade-up" data-aos-delay="100">
                        Text to Image with AI Image Generator
                    </h2>
                    <p class="w-50" data-aos="fade-up" data-aos-delay="200">
                        Convert words to images in seconds with Fotor's free AI image
                        generator.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- About Section - -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">
                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Text to Image Generator</h2>
                    <p>
                        We identified the potential of text-to-image generation as a
                        transformative technology with far-reaching applications.The<b>Text to Image Generator</b>
                        is the result of our relentless pursuit of excellence and our
                        dedication to pushing the boundaries of AI and machine learning.
                    </p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>User-Centric Approach</h3>
                                <p>
                                    Your satisfaction is at the heart of everything we do. We
                                    have designed the "Text to Image Generator" with a
                                    user-friendly interface.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Ethical AI Practices</h3>
                                <p>
                                    As advocates of ethical AI practices, we ensure that our
                                    AI-powered platform operates responsibly and ethically
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Creative Empowerment</h3>
                                <p>
                                    Our goal is to empower you with the ability to
                                    effortlessly create captivating visual content.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Continuous Improvement</h3>
                                <p>
                                    We are committed to continuous improvement and actively
                                    seek user feedback.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Features Section  -->
    <section id="features" class="features">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>We can help you to Generate your desire image.</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Ai will generate an Image for you</h3>
                    <p>
                        Our website's core feature is the "Text to Image Generator,"
                        which seamlessly converts your written descriptions into
                        stunning visual representations. Experience the power of
                        AI-driven content creation with just a few clicks.
                    </p>
                    <a href="{{ route('generate') }}" class="btn btn-get-started">Get Started</a>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="100">
                    <div class="image-stack">
                        <img src="assets/img/light-1.png" alt="" class="stack-front" />
                        <img src="assets/img/light-2.png" alt="" class="stack-back" />
                    </div>
                </div>
            </div>
            <!-- Features Item -->
            <div class="row gy-4 align-items-stretch justify-content-between features-item">
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                    <h3>AI Image Generation Unleashed:A New Era of Expression</h3>
                    <p>
                        AI Image Generation Unleashed: A New Era of Expression Welcome
                        to the cutting-edge world of AI Image Generation, where
                        creativity knows no bounds. Experience a new era of expression
                        as artificial intelligence empowers you to transform your ideas
                        into visually captivating masterpieces.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>AI Image Generation Unleashed respects your privacy and data security..</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i><span>
                                With AI Image Generation Unleashed, the possibilities are limitless, and the results are
                                awe-inspiring</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Embrace the new era of expression and become a pioneer in the ever-evolving landscape
                                of AI-driven creativity.</span>.
                        </li>
                    </ul>
                    <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                </div>
            </div>
            <!-- Features Item -->
        </div>
    </section>
    <!-- End Features Section -->

    <!-- Portfolio Section - Home Page -->
    <section id="generated-images" class="portfolio">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Ai Generated images</h2>
            <p>
                Here is some generated images
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/baby-1.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Baby</h4>
                            <a href="assets/img/baby-1.png" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/bikes.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cycle</h4>
                            <a href="assets/img/bikes.png" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/car 1.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Car</h4>
                            <a href="assets/img/car 1.png" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/car 2.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Car</h4>
                            <a href="assets/img/car 2.png" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/light-1.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Lamp</h4>
                            <a href="assets/img/mlight-1.png" title="App 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/light-2.png" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Lamp</h4>
                            <a href="assets/img/light-2.png" title="Product 3"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>

                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <!-- End Portfolio Container -->
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
</main>
@include('partials.footer')
