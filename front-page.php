<?php
/*
Template Name: Home Template
*/
?>


<?php get_header(); ?>

<!-- 

Applying dauntless ingenuity to 
entrepreneurship, coding and life

- Make logo
venture lateral coding, start up stuff, etc

- I like how the color changes here. Maybe use the color change here and there 
o http://www.themezilla.com/themes/blox/

- put arrows into the case studies section

take out all inline styling 

clear up style sheet and organize it

 -->

 
  <div class="row">
    <div class="span12">
      <h1 id="welcomeText" class="text-center" >Hey there! My name is Pavan 
          & I'm a Web Developer.<br> 
          Check out <a href="#caseStudies">my work</a>.</h1>
    </div> 
  </div>

<div class="row marginTop20">
  <div class="span12">
    <h1>My <img src="wp-content/themes/ventureLateralBootstrap/images/chops.png"></h1>
  </div>
</div>

<div class="row spaceOutList"><!--chops-->

  <div class="span3">
    <h2>Back End</h2>
    <ul class="lead">
      <li>PHP</li>
      <li>Code Igniter</li>
      <li>Ruby</li>
      <li>Ruby on Rails</li>
      <li>Git</li>

    </ul>
  </div>

  <div class="span3">
    <h2>Front End</h2>
    <ul class="lead">
      <li>Twitter Bootstrap</li>
      <li>WP Theme Development</li>
      <li>Mustache Engine</li>
      <li>HTML / CSS / Photoshop</li>
      <li>JavaScript / jQuery</li>
    </ul>
  </div>

  <div class="span3">
    <h2>Marketing</h2>
    <ul class="lead">
      <li>SEO</li>
      <li>A/B Testing</li>
      <li>Conversion Tracking</li>
      <li>Community Development</li>
      <li>Email Marketing</li>
    </ul>
  </div>

  <div class="span3">
    <h2>Lean Start Up</h2>
    <ul class="lead">
      <li>Minimmum Viability Product Design</li>
      <li>Defining Value &amp; Growth Assumptions</li>
      <li>Testing Assumptions</li>
    </ul>
  </div>

</div>


<a name="caseStudiesGohere" class="hiddenText">secret code: @7404823</a>


<div class="row marginTop60">
  <div class="span12">
    <h1 id="caseStudies">My Case Studies</h1>
  </div>
</div>

<div class="row marginTop20">
  <div class="span5">
    <span id="traverseCases">
      <a href="#" 
      class="btn btn-primary btn-large" 
      id="previous"><< Previous</a>

      <a href="#" 
      class="btn btn-primary btn-large" 
      id="next">Next >></a>
    </span>
  </div>

  <div class="span6" id="caseNames">
    <span id="caseStudyNameOne" class="normalDotFont"><strong>Healthcare Web App (1 of 4 Case Studies)</strong></span>
    <span id="caseStudyNameTwo" class="normalDotFont"><strong>Video/eCommerce Web App (2 of 4 Case Studies)</strong></span>
    <span id="caseStudyNameThree" class="normalDotFont"><strong>Corporate Back End System (3 of 4 Case Studies)</strong></span>
    <span id="caseStudyNameFour" class="normalDotFont"><strong>Small Business SEO (4 of 4 Case Studies)</strong></span>
  </div>

</div>


<div class="row"><!-- case studies-->

  <div class="span12">

    <section class="caseStudyContent" id="inrTracker"><!--inrTracker-->

      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>

        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="active item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-main.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-calendar.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-inr.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-drugdosage.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-report.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/inrtracker-mealplanner.png"
            class="caseStudyCarouselImage img-polaroid"></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

        <p class="marginTop10">Note: Design by <a href="http://www.veronicacoulombe.com" target="_blank">Veronica Coulombe</a></p>

      </div>

      <h2 class="marginTop20">Company</h2> 

      <p class="lead"><a href="http://www.inrtracker.com/" target="_blank">INRtracker.com (alpha version)</a> (Summit, NJ)</p>

      <h2 class="marginTop20">Win</h2> 

      <p class="lead">5k+ uniques a month with 1000+ members signed up. 100s of patients use the site daily to manage their blood thinner therapy. </p>

      <h2 class="marginTop20">About Company</h2> 

      <p class="lead">INR Tracker provides the necessary online tools for Warfarin (blood thinner) patients to monitor their at home activity and better manage Warfarin interactions. The site's current online tools allow patients to record their INRs, drug dosages (which change often), exercise habits, & important dietary information such as Vitamin K & Alcohol.</p>

      <div class="row clearBoth">
        <div class="span2">
          <img class="img-polaroid quotePic" src="wp-content/themes/ventureLateralBootstrap/images/pavan.png">
        </div>

        <div class="span9">
          <blockquote>
          <i class="icon-quote-left marginRight largeFont"></i>
            <p class="normalFont quotes">The most gratifying thing about creating the alpha version of INR Tracker is seeing hundreds of patients use it to take control of their lives.</p>

            <small class="normalFont"><em>Me</em> <strong>Co-Founder</strong> of InrTracker.com</cite>
            </small>
          </blockquote>
        </div>
      </div>

      <h2 class="marginTop20">The Problem</h2> 
      <p class="lead">
        In early 2011, my girl friend got a Pulmonary Embolism and DVT due to a genetic blood clotting disease called Factor V Leiden. She survived (thank the stars) and was put on Warfarin.
        <br><br> Patients on Warfarin have to manage a diet so that their weekly Vitamin K intake is consistent. They have to do this, because Vitamin K directly impacts their Warfarin dosage. If they have too much Vitamin K (it nullifies their dosage) then they can get a blood clot, too little (it intensifies their dosage) and they can bleed out.
        <br><br>
        This is why Warfarin patients have to go to their doctor on a weekly basis to re-adjust their Warfarin dosage. Doctors do an INR test (time it takes blood to clot) on patients to find out what dosage the patients have to take. 
        <br><br>
        To make matters harder, Vitamin K isn't on food labels. I watched my girl friend struggle. She felt depressed, frustrated and defeated with her Warfarin treatment. She had to wait at doctors' offices on a weekly basis for long hours - week after week - month after month. Each time, the doctors would have no answers to why her INR was changing. She was lost and dismayed.
      </p>
      
      <h2 class="marginTop20">My Solution</h2> 
      <p class="lead">
        I coded a custom meal tracker that tracked my girl friend's vitamin k and automatically calculated her total Vitamin K for the week. The weekly Vitamin K totals were displayed conveniently on a calendar. I also made it easy for her to log other factors onto the calendar that may have affected her INR. 
      </p>
      
      <h2 class="marginTop20">Result</h2> 
      <p class="lead">
        Not only does this website help my girl friend manage her health & life better, it also helps 1000+ other blood thinner patients too. The website receives over 5k unique hits a month and has a 1000+ users (60%+ active).
      </p>
      
      <h2 class="marginTop20">Technology</h2> 
      <p class="lead">
        PHP, MySQL, jQuery, HTML, CSS, CSSUI.com framework, Authentication System, Database Table Searchable GUI
      </p>

      <h2 class="marginTop20">Learn More</h2> 
      <p class="lead">
        See INR Tracker's <a href="http://www.slideshare.net/pavankatepalli/inrtrackercom-deck" target="_blank">slide share</a>
      </p>

    </section>

    <section class="caseStudyContent" id="weCord"><!--WeCord-->


      <div id="myCarouselThree" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarouselThree" data-slide-to="0" class="active"></li>
          <li data-target="#myCarouselThree" data-slide-to="1"></li>
          <li data-target="#myCarouselThree" data-slide-to="2"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
          
          <div class="active item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/wecord-1.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/wecord-2.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/wecord-3.png"
            class="caseStudyCarouselImage img-polaroid"></div>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarouselThree" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarouselThree" data-slide="next">&rsaquo;</a>
      </div>

      <h2 class="marginTop20">Company</h2> 

      <p class="lead"><a href="http://www.wecord.co/" target="_blank">WeCord LLC</a> (Metuchen, NJ)</p>

      <h2 class="marginTop20">Win</h2> 

      <p class="lead">An alpha version of a complex idea was quickly and cleverly developed in order to save money, time and learn about the target market of customers and their needs.</p>

      <h2 class="marginTop20">About Company</h2> 

      <p class="lead">WeCord lets anyone quickly sell anything with a short video. Its Founder Winson Yuan, is a Jersey Guy and graduate of Temple University's Fox School of Business and Management. WeCord is his vision, his dream and I am proud to have made it possible for him. </p>


      <div class="row">
        <div class="span2">
          <img class="img-polaroid quotePic" src="wp-content/themes/ventureLateralBootstrap/images/winson.jpg">
        </div>

        <div class="span9">
          <blockquote>  
            <i class="icon-quote-left marginRight largeFont"></i>
            <p class="normalFont quotes">Very organized, well put together individual. Has great knowledge in his professed field. Very satisfied with work done for me and my business. 
            Highly recommend Pavan.</p>
            <small class="normalFont marginLeft"><em>Winson Yuan</em> <strong>Founder & CEO</strong> of WeCord LLC</cite>
            </small>
            <small class="smallFont marginLeft">recommendation taken from my <a href="http://www.linkedin.com/in/pavankat" target="_blank">linkedin</a></small>
          </blockquote>
        </div>
      
      </div>

      <h2 class="marginTop20">The Problem</h2> 
      <p class="lead">
        Winson (Founder of WeCord) had a vision. He wanted to change how video and e-commerce work together. Sounds crazy right? He wanted to take on eBay, Amazon and Craigslist all at the same time?!?! Well you have to be a little crazy to be an entrepreneur, and Winson wasn't scared of a few billion-dollar corporations. 

        <br><br>
        
        Winson got five figure quotes and 6 to 12 month time frames from other web development firms. He knew he couldn’t raise that much money from investors without having actual proof that his concept was working. All Winson wanted was to see whether his concept could be proven.
      </p>
      
      <h2 class="marginTop20">My Solution</h2> 
      <p class="lead">
        After getting a proposal from me, Winson was re-ignited with entrepreneurial fire. I gave Winson a short time frame and a lower quote than the other web development firms he went to. I was able to do this, because I recognized that his vision could be translated into a simple Minimum Viability Product. 
        <br><br>
        I realized that there were two assumptions that Winson was making about his product. One, people would come to the website and upload videos of products. Two, people would come to the website and buy products.

        <br><br>
        Sure there were more assumptions, but the ones I focused on allowed me to develop his product extremely fast (6 times faster than other web development firms) and hence 6 times less in cost than other web dev firms. This was integral in letting Winson test his idea out.

        <br><br>
        Because I truly cared about Winson succeeding: I made videos for Winson, which explained step by step how a user submits a product request, how Winson would approve or deny the product request, how a user would submit a video, how Winson would upload the video to youtube and how Winson would put the youtube video next to his product on the website.
      </p>
      
      <h2 class="marginTop20">Result</h2> 
      <p class="lead">
        Users on WeCord are able to upload a one minute simple video of a product, set a price and watch their product get bought up on the site.
      </p>
      
      <h2 class="marginTop20">Technology</h2> 
      <p class="lead">
        PHP, MySQL, jQuery, Mustache Template Engine, HTML, CSS, Authentication System, Admin Panel
      </p>

    </section>

    <section class="caseStudyContent" id="bigOrange"><!--bigOrange-->

      <div id="myCarouselTwo" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarouselTwo" data-slide-to="0" class="active"></li>
          <li data-target="#myCarouselTwo" data-slide-to="1"></li>
          <li data-target="#myCarouselTwo" data-slide-to="2"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/bigorange-0.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/bigorange-1.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/bigorange-2.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/bigorange-3.png"
            class="caseStudyCarouselImage img-polaroid"></div>
        </div>
        <!-- Carousel nav -->

        <a class="carousel-control left" href="#myCarouselTwo" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarouselTwo" data-slide="next">&rsaquo;</a>
      </div>

      <h2 class="marginTop20">Company</h2> 

      <p class="lead"><a href="http://www.bigorangeproductions.com/" target="_blank">Big Orange Productions Inc.</a> (Providence, RI)</p>

      <h2 class="marginTop20">Win</h2> 

      <p class="lead">Management saved a significant amount of time training reps and verifying whether they were proficient in product knowledge.</p>

      <h2 class="marginTop20">About Company</h2> 

      <p class="lead">Big Orange Productions specializes in advertising promotions that connect brands direct to consumers in fresh, engaging ways. They do National Mobile marketing Tours, In-Store Demonstrations, Guerrilla Marketing, College Events and more. They've worked with Brands like Verizon, Gatorade, Dove, Dunkin Donuts, Ford, Gillette, Mentos, MTV, Target and the list goes on.</p>


      <div class="row">
        <div class="span2">
          <img class="img-polaroid quotePic" src="wp-content/themes/ventureLateralBootstrap/images/samantha.jpg">
          
        </div>

        <div class="span9">
          <blockquote>
            
            <i class="icon-quote-left marginRight largeFont"></i>
            <p class="normalFont quotes">Pavan's approach to web development and his tenacity towards achieving our objectives were unmatched. He clearly understood our business goals <a href="#" id="orangeMore">see more >></a> <span id="orangeMoreView">as well as the technical goals. He formed an excellent technology plan/wire frame and then he executed them above and beyond what we expected. He made great instructional videos to teach us how to use the back end of the website, and he helped install the website seamlessly onto our server. We would definitely hire Pavan again to help us with our IT needs and we recommend him for any web development project. <a href="#" id="orangeLess"><< see less</a></span></p>
            <small class="normalFont marginLeft"><em>Samantha D'Amico</em> <strong>General Manager</strong> at Big Orange Productions Inc.</cite></small>

            <small class="smallFont marginLeft">recommendation taken from my <a href="http://www.linkedin.com/in/pavankat" target="_blank">linkedin</a></small>
            
          </blockquote>
        </div>

      </div>

      <h2 class="marginTop20">The Problem</h2> 
      <p class="lead">
        Big Orange Productions Inc hires and trains 100s of Brand Models/Reps across the nation. Each Rep is given a marketing campaign to promote at a location. However, Management had no simple way of determining whether Reps knew the ins and outs of the products they would be promoting. Adding to this challenge was that sometimes Reps were expected to promote many products at one time.
      </p>
      
      <h2 class="marginTop20">My Solution</h2> 
      <p class="lead">
        I coded custom add ons to a Closed Source Quiz Management System. Most importantly, I implemented the system onto their server and trained Mangement on how to use it. Because I am thorough, I made videos for Management, which explained how to upload quizzes/study-guides and evaluate the performance of their Reps.
      </p>
      
      <h2 class="marginTop20">Result</h2> 
      <p class="lead">
        Management can hold Reps accountable for knoweldge of the products that they promote. 100s of their Reps use this system on a weekly basis, and this system keeps Big Orange Productions ahead of their competition.
      </p>
      
      <h2 class="marginTop20">Technology</h2> 
      <p class="lead">
        PHP, MySQL, Smarty Template Engine, HTML, CSS
      </p>

    </section>

    <section class="caseStudyContent" id="languageDirections"><!--languageDirections-->


      <div id="myCarouselFour" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarouselFour" data-slide-to="0" class="active"></li>
          <li data-target="#myCarouselFour" data-slide-to="1"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="active item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/languagedirections-1.png"
            class="caseStudyCarouselImage img-polaroid"></div>
          <div class="item"><img
            src="wp-content/themes/ventureLateralBootstrap/images/languagedirections-2.png"
            class="caseStudyCarouselImage img-polaroid"></div> 

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarouselFour" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarouselFour" data-slide="next">&rsaquo;</a>
      </div>

      <h2 class="marginTop20">Company</h2> 

      <p class="lead"><a href="http://www.languagedirections.com/" target="_blank">Language Directions LLC</a> (Roseland, NJ)</p>

      <h2 class="marginTop20">Win</h2> 

      <p class="lead">Increased visibility (<span class="underline">Page one rankings on Google</span>) for keyword phrases like accent reduction and accent training, which generate dozens of leads on a monthly basis, organically, without Language Directions having to lift a finger.</p>

      <h2 class="marginTop20">About Company</h2> 

      <p class="lead">Language Directions is a full service language training company specializing in customized short and long-term instructional programs. They offer all levels of training &amp; support such as ESL, Accent Reduction, Spanish At Work, ServSafe&reg; Food &amp; Alcohol Safety and communication solutions for other industry compliance issues. Instruction is offered on-site in businesses or associations with flexible scheduling. Their clients include Fortune 500 Company ADP, The U.S. Military, Barnert Hospital, Englewood Hospital, Rutgers University and the list goes on.</p>

      <div class="row">
        <div class="span2">
          <img class="img-polaroid quotePic" src="wp-content/themes/ventureLateralBootstrap/images/sharlene.jpg">
        </div>

        <div class="span9">

          <blockquote>
            <i class="icon-quote-left marginRight largeFont"></i>
            <p class="normalFont quotes">
            Pavan delivered exactly what he promised: increased visibility for Language Directions on major search engines. With his creativity and expertise, <a href="#" id="langMore">see more >></a> <span id="langMoreView">he brought us to the first page of several within a relatively short period of time. He is knowledgeable, persistent, and easy to work with and can explain complicated concepts to those without a solid knowledge of the field. I enjoy working with him and have hired him for additional work. <a href="#" id="langLess"><< see less</a></span></p>
            <small class="normalFont marginLeft"><em>Sharlene Vichness</em> <strong>President</strong> at <a href="http://www.languagedirections.com/" target="_blank">Language Directions LLC</a></cite>
            </small>
            <small class="smallFont marginLeft">recommendation taken from my <a href="http://www.linkedin.com/in/pavankat" target="_blank">linkedin</a></small>
          </blockquote>

        </div>

      </div>

        <h2 class="marginTop20">The Problem</h2> 
        <p class="lead">
          Language Directions wanted to increase their online traffic and had a lot of unique content on their pages. SEO was a natural tactic that could be used to accomplish this goal but it was something Language Directions had not investigated in the past. When Language Directions started investigating SEO, only a small number of pages on their website had any type of SEO implemented.
        </p>
        
        <h2 class="marginTop20">My Solution</h2> 
        <p class="lead">
          I proposed a three stage plan to Language Directions. Stage 1 consisted of optimizing all the main web pages. Stage 2 consisted of optimizing all the sub pages. Finally, stage 3 consisted of integrating SEO into the business processes at Language Directions. 
        </p>
        
        <h2 class="marginTop20">Result</h2> 
        <p class="lead">
          In plain english, Language Directions got a lot more leads. All the leads told Language Directions that they found them from Google. Here are a <span class="underline">couple of the page one Google rankings</span> I helped Language Directions acquire: 

          <ul class="lead">

            <li>
              <strong>accent reduction</strong> - <span class="underline">1,900 exact phrase global searches</span>. 
            </li>

            <li class="marginTop20">  
              <strong>accent training</strong> - <span class="underline">720 exact phrase global searches</span>. I helped Language Directions beat Amazon for this keyword phrase. 
            </li>

          </ul>
        </p>
        
        <h2 class="marginTop20">Technology</h2> 
        <p class="lead">
          Traffic Travis for SEO Research
        </p>

    </section>

  </div>

</div>


<div class="container">


<?php get_footer(); ?>