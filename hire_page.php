<?php
/*
Template Name: Hire Template
*/
?>
<?php get_header(); ?>

<!-- 
  If paid per hour, you pay me ahead for a block of hours. 

  I use freshbooks to keep track of my time. After each day I spent time billing you, you'll get an email from me with how much time I worked, what was done during that time, screen shots of my desktop while working, links to a github repository that show the code that I wrote/updated. 

  Milestones will have approximate timelines that are approximations.  
-->



<div class="row">
	<div class="span6 marginTop20 lead ">
		<h1>Things I can help you with:</h1>
		<ul class="spaceOutList">

		  <li class="marginTop20"><a href="#" id="ideaH">I have an idea,
		  	and I want you to build a prototype.</a></li>

		  <li class="marginTop20"><a href="#" id="businessH">I'm a business and I want you to build out 
				something.</a></li>

		  <li class="marginTop20"><a href="#" id="contractH">I'd like 
		  	to contract some work to you.</a></li>

		  <li class="marginTop20"><a href="#" id="learnH">I'm learning web dev &amp; 
		  	need help building my project.</a></li>

		</ul>
	</div>
	<div class="span6 marginTop20">
		<div id="formContainer">
			<h1 id="message" class="highlight">
				
			</h1>

			<form id="contact">
				<h1>What do you need help with?</h1> 
				<ul>
					<span class="marginTop20 sameLine">
						<li><label class="lead">Subject:</label> <input type="text" name="subject"></li>
						<li><label class="lead">Name:</label> <input type="text" name="name"></li>
						<li><label class="lead">Email:</label> <input type="text" name="email"></li>
					</span>
					<li class="marginTop20 sameLine"><label class="lead">Description:</label>					
					<textarea name="describe" class="textAreaDimensions"></textarea></li>
					
				</ul>
				
				<label class="lead"></label> <input class="lead" type="submit" value="submit">

			</form>
		</div>
	</div>
</div>

<hr>
<h1 id="hireHeading" class="marginBottom40"></h1>

<div id="custom"> 
	<h2 class="marginTop20">Custom App:</h2>

	<div class="row">

		<div class="span12">
			<p class="lead">Need something made? I'll make it happen.</p>
		</div>
	</div>
</div>

<div id="learn"> 
	<h2 class="marginTop20">Learn from me one on one</h2>

	<div class="row">
		<div class="span12">
			<p class="lead">If you have a question on how to get started coding for your start up idea then read this. But if you want me to sit down with you in person and help you one on one then definitely contact me. I'll get your environment set up on your computer, show you the basics of coding, how to insert, select, update, delete from a database using a form. It will cost you, but so would hiring someone to build your start up idea or taking a class, and this would be one on one, on your time. <!--Check out the reviews from my linked in:--></p> 
		</div>
	</div>
</div>


<div id="myProcess"> 
	<h2 class="marginTop20">My Process:</h2>

	<div class="row">

		<div class="span12">

			<p class="lead">
			By the end of these two phases, I'll help 
			you build a scalable repeatable business.
			</p>

			<h3>Phase One:</h3>

			<ol class="lead spaceOutList">
				<li>
				I'll help take your vision and translate it into assumptions (value, leap of faith, etc).
				</li>

				<li>
				I will take those assumptions and make a MVP (minimum viablity product) that will test your assumptions. 
				</li>
			</ol>

			<p class="lead">
			If we can get some positive results then we can move on to Phase Two. If not, then
			we can repeat Phase One until we get positive results.
			</p>

			<h3>Phase Two:</h3>

			<ol class="lead spaceOutList">
				<li>
				I'll crunch data and break up your user base into groups 
				based on their engagement level (cohort analysis). We can use 
				this to validate (a/b test) new features to see
				if we can get low engaging groups to convert into higher engaging groups.
				</li>

				<li class="marginTop10">
				Any new feature that you come up with must have the goal to change the engagement level of a user group. Then, using the Japanese product management method, <a href="http://en.wikipedia.org/wiki/Kanban_(development)" target="_blank">Kanban</a>, I will force us to validate every feature you come up with, and at the same time have a visual of all the features and how far they're along. I use <a href="http://www.trello.com" target="_blank">Trello</a> for this. <a href="#" id="processMore">See more >></a> 

				<span id="processMoreView">
					<a href="#" id="processLess"><< See less</a>
					<!-- row inside a span! omg! -->
					<div class="row">

						<!-- span inside a row inside a span! omg! -->
						<div class="span5">	
							<span class="paddingUp">
							A new feature would go into the BACK LOG column, and if being worked on, it would go into the IN PROGRESS column, then consequently the BUILT column and then if the feature is validated it would go into the VALIDATED category and can be taken out.
							</span>
						</div>

						<!-- span inside a row inside a span! omg! -->
						<div class="span5">
							<span class="paddingUp">
								<table class="lead table">
							  	<tr>
							  		<td>BACK LOG</td>
							  		<td>IN PROGRESS</td>
							  		<td>BUILT</td>
							  		<td>VALIDATED</td>
							  	</tr>
							  	<tr>
							  		<td></td>
							  		<td>G</td>
							  		<td>D</td>
							  		<td>F</td>
							  	</tr>
							  	<tr>
							  		<td>H-></td>
							  		<td>B-></td>
							  		<td>E</td>
							  		<td></td>
							  	</tr>
							  	<tr>
							  		<td>I-></td>
							  		<td>C-></td>
							  		<td>A</td>
							  		<td></td>
							  	</tr>

								</table>
							</span>
						</div>

					</div>
					
					<span class="paddingUp">
					Each category cannot contain more than 3 features at a time. This forces you and me to validate every feature and see whether it changed user behavior or not.
					</span>

					<span class="paddingUp">
					
					If it didn't, then that could effect the rest of the features you have planned, and you can effectively save yourself a lot of time and frustration. This also forces us to give the best possible experience to your user base.
					</span>
			
				</span>
				</li>
			</ol>

				

		</div>
	</div>

</div>

<div id="lean"> 
	<h2 class="marginTop20">I'll help you stay lean</h2>

	<div class="row">
		<div class="span12">
			<p class="lead">I didn't just read the Lean Start Up - I LIVED IT, and practiced it for my 
			<a href="http://www.inrtracker.com" target="_blank">start up</a>. I believe that entrepreneurship is about having vision but more importantly managing that vision through core lean start up techniques like:</p>

			<ul class="spaceOutList lead">
				<li>Validated Learning</li>
				<li>Innovation Accounting</li>
				<li>the Build Measure Learn Cycle</li>
				<li>Tuning The Engine</li>
			</ul>

			<!-- 

			– you should always build something out because user interactions speak volumes more than a focus group, surveys and market research does. That's because customers don’t know what they want and have trouble expressing it. It’s not until the customer actually clicks buttons and uses your app that you know that it holds water – it’s not until users repeat usage of your app that you know it has value – it’s not until users start taking actions to spread your app that you know asdfkljasklfl (growth assumption).

			- Product part -> MVP to test your value hypothesis and start strategizing what features to build out to test out your growth hypothesis – I can use bootstrap to get things done fast and use minimal design or contract design work out to a designer if you want things looking great

			- Measuring this is important – talk about how you can help show measurement of the data to drive the next features.

			- Learn – learning is important -> what pivot do you have to take – what features to expand on – it all depnds on how users are using the site


			- I’ll help you AIM your product at early adopters: It’s improtant to aim your launch around a community of early adopters. Early adopters don’t care about incomplete products. Dropbox and INR Tracker did it. -->
		</div>
	</div>
</div>

<div id="fast"> 
	<h2 class="marginTop20">I'll help you build fast</h2>
	<div class="row">
		<div class="span12">
		<p class="lead">I don't reinvent the wheel - I use pre-made solutions when applicable to reduce the time that I bill you. I do this, because I have my own start up, and my time is valuable to me. If you've worked with other freelancers, I'm sure you could appreciate this.</p> 

		<p class="lead">Also, I'm an agile developer, which means if 
		you tell me that your users should 
		be able to vote on which basketball team 
		will win, then THAT'S ALL YOU NEED TO TELL ME.</p> 

		<p class="lead">I'll code that out like pancakes.</p> 

		<p class="lead">Then a month passes and you ask, 
		can you make it so my users can only vote on 
		teams that are nationally ranked? I'll be able to  
		get that done fast, because I code in a way 
		so that new features can easily be integrated in.</p>
		</div>
	</div>
</div>

<div id="mobile"> 
	<h2 class="marginTop20">I'll make it mobile</h2>
	<div class="row">
		<div class="span12">
			<p class="lead">I can make anything mobile! This website looks good on any mobile device.</p>
		</div>
	</div>
</div>

<div id="market"> 
	<h2 class="marginTop20">I'll help you with marketing</h2>

	<div class="row">
		<div class="span12">
		<p class="lead">At the very least I GUARANTEE you’ll have 
		people trying your app, because 
		I’ll guide you on how to target early adopters.</p>

		<p class="lead">You can trust me because I’ve done this before 
			for my start up, <a href="http://www.inrtracker.com" target="_blank">
			INRtracker.com</a>. I acquired our early adopters for monetarily nothing.</p>

		<p class="lead">Once your initial business assumptions are proven,
		I can help make sure your users become repeat users 
		by fine-tuning your site based on user interactions.</p>

		<p class="lead">I also have experience with SEO. <a href="http://www.inrtracker.com" target="_blank">INR Tracker</a> gets the majority of its
		sign ups from search engine traffic. We have page one rankings for "coumadin diet" and "vitamin k foods", which drive 5k+ unique hits to our website each month.</p>

		</div>
	</div>
</div>

<div id="seo"> 
	<h2 class="marginTop20">SEO Strategy & Implementation</h2>

	<div class="row">

		<div class="span12">

			<p class="lead">
				I'll make a SEO strategy that'll work really well for you. I'll even implement it for you if you want.
			</p>

			<p class="lead">I got the following rankings for <a href="http://www.inrtracker.com" target="_blank">INR Tracker</a>:</p>
			
			<p class="lead">#2 on Google for “coumadin diet” which gets 6600 global monthly searches</p>
	
			<p class="lead">#2 on Google for “vitamin k foods” which gets 8100 global monthly searches</p>

			<p class="lead">I ran a SEO Agency called <a href="http://www.rockstarvisible.com" target="_blank">Rockstar Visible</a>. I managed online strategy for a Window Film Factory, a patent lawyer, and a Language Consulting Company. I sold it awhile back because I wanted to move on from just doing SEO.</p>

			<p class="lead">My past start up, <a href="http://www.webpronews.com/both-bloggers-and-advertisers-win-with-new-crowd-sourcing-platform-2011-09" target="_blank">Bloggers Compete</a>, gave me unique insight on how to leverage the blogosphere for higher search engine rankings. </p> 
		</div>
	</div>
</div>

<div id="conversion"> 
	<h2 class="marginTop20">Conversion Tracking</h2>

	<div class="row">

		<div class="span12">
			<p class="lead">Google Analytics doesn't tell you everything. Want to know how many people are clicking on a button, downloading a certain file? Who these people are? What else they do on your site? </p>

			<p class="lead">Ex: If you have a sign up now button that on a page that gets 1000 hits a month but no one clicks on it. That's bad. But it's even worse if you don't even know about it!</p>
		</div>
	</div>
</div>

<div id="hype">
	<h2 class="marginTop20">I can get hype</h2>
	<div class="row">
		<div class="span12">
		<p class="lead">
		Bloggers Compete, one of my past start ups was featured on <a href="http://www.webpronews.com/both-bloggers-and-advertisers-win-with-new-crowd-sourcing-platform-2011-09" target="_blank">Web Pro News</a>, <a href="http://www.blogworld.com/2011/08/29/bloggerscompete-com-bloggers-compete-advertisers-win/" target="_blank">Blog World</a> and <a href="http://weblogbetter.com/2011/08/01/promote-blog-contest/" target="_blank">We Blog Better</a>.</p>


		<iframe width="560" height="315" src="http://www.youtube.com/embed/fYcxGVSerPE" frameborder="0" allowfullscreen></iframe>

		</div>
	</div>
</div>

<div id="sales">
	<h2 class="marginTop20">I have sales chops</h2>
	<div class="row">
		<div class="span12">
		<p class="lead">I not only code, but I was one of the best outside sales people for QuickerFood.com, a start up that had a successful exit. I know how to prospect leads, cold call, meet with people, close them and get them to hand over a check.</p> 

		<p class="lead">Here's a review that the Managing Partner of QuickerFood.com gave me on my linkedin profile.</p>

		<div class="row">
		  <div class="span2">
		    <img class="img-polaroid quotePic" src="/wp-content/themes/ventureLateralBootstrap/images/jon.jpg">
		  </div>

		  <div class="span9">

		    <blockquote>
		      <i class="icon-quote-left marginRight largeFont"></i>
		      <p class="normalFont quotes">
		      The best evaluation of a persons performance is how they compare against their peers. In summer of 2008, my company hired 140 college students as sales reps. Pavan was among the top 3 reps. This evaluation is not only based on sales performance but also communication and enthusiasm towards the position.</p>
		      <small class="normalFont marginLeft"><em>Jon Feldman</em> <strong>Managing Partner</strong> at <a href="http://www.offcampus101.com/" target="_blank">OC101 Enterprise, LLC</a> (Allston, MA)</cite>
		      </small>
		      <small class="smallFont marginLeft">recommendation taken from my <a href="http://www.linkedin.com/in/pavankat" target="_blank">linkedin</a></small>
		    </blockquote>

		  </div>

		</div>
		</div>
	</div>
</div>

<div id="motivate">
	<h2 class="marginTop20">I'll motivate you</h2>
	<div class="row">
		<div class="span12">
			<p class="lead">
			I was a speaker for TEdxRutgers. Check me out on <a href="http://tedxtalks.ted.com/video/TEDxRutgers-Pavan-Katepalli-040" target="_blank">ted.com</a>!</p>

			<iframe width="560" height="315" src="http://www.youtube.com/embed/CE8r1Hf6Yew" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div id="trust">
	<h2 class="marginTop20">Trust me</h2>
	<div class="row">
		<div class="span12">
			<p class="lead">I don't take on a bunch of clients at the same time to make an extra buck. I take on a max of 3 clients at one time. You'll get my time and attention.</p> 

			<p class="lead">If you work with me, things will WORK (I test the hell out of everything I make).</p> 

			<p class="lead">I truly care about my clients and the work that I put out. I want everyone I work with to succeed. If there's a process you have to follow to use something that I made for you, then I'll make a video of how to do that process and I will send it over to you.</p>

		</div>
	</div>
</div> 

<?php get_footer(); ?>