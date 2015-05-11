<?php include('vars.php') ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title><?= $title ?> - Robert Kuykendall</title>
    <meta name="Description" content="Graduating Computer Science student at Texas State University in San Marcos, looking to do research on the web, ubiquitous computing, and interaction design.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
     
    <!-- ==============================
          W3C Valid HTML & CSS
         ============================== -->
  
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <link href='/style.css' rel='stylesheet' type='text/css'>
    
    <style>
      section {
        margin: 200px auto;
        width: 680px;
      }
      section p {
        margin: 50px 0;
      }
      .box {
        width: 680px;
        display: block;
        margin: 0px;
        line-height: 0.6em;
        letter-spacing: 0em;
      }
      
      .box {
        text-align: justify;
      }
      .box:after {
        content: "";
        display: inline-block;
        width: 100%;
      }
      
      .browser {
        font-weight: bold;
        background: transparent url('chromebg.jpg') no-repeat top left;
        color: transparent;
        -webkit-text-stroke: 1px rgba(0,0,0,0.6);
        background-size: 100%;

        -webkit-background-clip: text;
        /* let's assume that one day it's supported */
        -moz-background-clip: text;
        background-clip: text;
      }
    </style>
    <script src="/javascript/jquery-1.8.2.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.box').each(function ( i, box ) {

            var width = $( box ).width(),
                html = '<span style="white-space:nowrap"></span>',
                line = $( box ).wrapInner( html ).children()[ 0 ],
                n = 150;

            $( box ).css( 'font-size', n )
            while ( $( line ).width() > width ) {
                $( box ).css( 'font-size', --n );
            }

            $( box ).html( $( line ).html() );
        });
      });
    </script>
  </head>
  
  <body>

    <header>
      <p>Written by <a href="/">Robert Kuykendall</a>.</p>
      <h1><?= $title; ?></h1>
      <h2><?= date("l, F jS, Y", $published); ?> </h2>
    </header>

    <blockquote><strong>Hi new viewer.</strong> I know what you're wondering: <em>&ldquo;how does he keep his nostrils so clean?&rdquo;</em></blockquote>
    
    <p>I was the new viewer, on July 6th, 2006, and so I sat and watched. The video ramped from a whisper to a shout and then ran at breakneck speeds through ugly myspace pages, ranting comment replies, science news, international politics, and ended with a chess move in a game against the audience. <a href="http://www.zefrank.com/theshow/archives/2006/07/070606.html">The video was 3 minutes, absolutely hilarious, and informative</a>. Then I found out there would be a new one the next day, and every weekday after that, for one full year. This was <strong>The Show, with Ze Frank</strong>, and <a href="http://www.youtube.com/watch?v=IXBEI_WZNK4">it changed video on the web</a>.</p>
    
    <p>Five years after that last episode of <strong>The Show</strong>, Ze began again, with <a href="http://www.youtube.com/watch?v=RYlCVwxoL_g">an invocation for beginnings</a>. What Ze is doing now is amazing, but it's just not for me. However, I come back to that invocation time and time again for inspiration and motivation.</p>
    
    <p><strong><em>Here is the full text of Ze Frank's <a href="">Invocation for Beginnings</a>:</em></strong></p>

    <section>
      
      <p><span class="box" style="color: #ddd">Don't call it a comb-back; I'll have hair for years.</span></p>
      
      <p><span class="box" style="font-weight: bold; line-height: 1em;">I’m scared.</span> <span class="box">I’m scared that my abilities are gone.</span> <span class="box">I’m scared that I’m going to fuck this up.</span> <span class="box">And I’m scared of you.</span></p>
        
      <p><span class="box" style="line-height: 0.3em">I don’t want to <span style="color: #C91C00;">start</span>, but I will.</span> <span class="box">This is an invocation for anyone who hasn’t begun,</span> <span class="box">who’s stuck in a terrible place between zero and one.</span></p>
      
      <p><span class="box">Let me realize that my past failures at follow-through are no indication of my future performance.</span> <span class="box">They’re just <span style="color: #880606">healthy</span> <span style="color: #D53D0C">little</span> <span style="color: #FF8207">fires</span> that are going to warm up my ass.</span></p>
      
      <!--<div style="width: 680px;">
        <p style="width: 320px; float: left;"><span class="box" style="width: 340px; line-height: 70px">If my <abbr title="fuck it let’s do it">FILDI</abbr> is strong,</span> <span class="box" style="width: 340px;">let me keep him in a velvet box until I really, really need him.</span></p>
        
        <p style="width: 320px; float: right;"><span class="box" style="width: 340px; line-height: 70px">If my <abbr title="fuck it let’s do it">FILDI</abbr> is weak</span> <span class="box" style="width: 340px;">let me feed him oranges and not let him gorge himself on ego and arrogance.</span></p>
        <hr width="680px" style="height: 0px; border: none;">
      <div>-->
      
      <p><span class="box">Let me not hit up my <span style="color: white; background-color: #3B5998; display: inline-block; padding: 7px 6px; font-size: 0.8em;">Facebook</span> like it’s a crack pipe</span> <span class="box">Keep the <span class="browser">browser</span> closed.</span></p>
        
      <p><span class="box">If I catch myself wearing a too-too (too fat, too late, too old)</span> <span class="box">let me shake it off like a donkey would shake off something it doesn’t like.</span></p> 
      
      <p><span class="box" style="line-height: 0.4em">And when I get that feeling in my stomach</span> <span class="box">you know the feeling when all of a sudden you get a ball of energy</span> <span class="box">and it shoots down into your legs and up into your arms</span> <span class="box">and tells you to get up and stand up and go to the refrigerator</span> <span class="box" style="line-height: 0.8em"><span style="color:#E8E479">and</span> <span style="color:#DEC54B">get</span> <span style="color:#EDEA8A">a</span> <span style="color:#CD9A2D">cheese</span> <span style="color:#E2CE5B">sandwich,</span></span> <span class="box" style="line-height: 0.3em">that’s my <span style="color: #FC320E">cheese monster</span> talking.</span> <span class="box">And my cheese monster will never be satisfied by cheddar,</span> <span class="box">only the <span style="color: #42D697;">cheese of accomplishment</span>.</span></p>
        
      <p><span class="box">Let me think about the people who I care about the most, and how when they fail or disappoint me&hellip;</span> <span class="box">I still love them, I still give them chances, and I still see the best in them.</span> <span class="box" style="border-bottom: 4px solid black; font-weight: bold;">Let me extend that generosity to myself.</span></p>
      
      <p><span class="box">Let me find and use metaphors to help me understand the world around me</span> <span class="box">and give me the strength to get rid of them when it’s apparent they no longer work.</span></p>
        
      <p><span class="box">Let me thank the parts of me that I don’t understand</span> <span class="box">or are outside of my rational control like my creativity and my courage.</span> <span class="box">And let me remember that my courage is a wild dog.</span> <span class="box">It won’t just come when I call it, I have to chase it down and hold on as tight as I can.</span></p>
        
      <p><span class="box" style="line-height: 0.2em; font-weight: bold;">Let me not be so vain</span> <span class="box">to think that I’m the sole author of my victories and a victim of my defeats.</span></p>
      
      
      <p><span class="box" style="font-weight: bold">Let me remember that the unintended meaning that people project</span> <span class="box">onto what I do is neither my fault or something I can take credit for.</span></p>
      
      <p><span class="box" style="line-height: 0.3em;">Perfectionism may look good in his shiny shoes</span> <span class="box">but he’s a little bit of an asshole and no one invites him to their pool parties.</span></p>
      
      <p><span class="box">Let me remember that the impact of criticism is often not the intent of the critic,</span> <span class="box">but when the intent is evil, that’s what the block button’s for.</span> <span class="box">And when I eat my critique, let me be able to separate out the good advice from the bitter herbs.</span></p>
        
      <p>
        <span class="box" style="line-height: 20px; margin-bottom: -30px; position: relative; right: 10px;">There are few people who won’t be disarmed by a genuine smile.</span>
        <span class="box" style="line-height: 20px; position: relative; left: 10px;">A big impact on a few can be worth more than a small impact</span>
      </p>
        
      <p><span class="box" style="line-height: 1em;">Let me not think of my work <span style="position: relative; top: 10px;">only as a stepping stone<span style="position: relative; top: 10px;">to something else,</span></span></span> <span class="box" style="line-height: 1em;">and if it is, <span style="position: relative; top: 10px; font-weight: bold">let me become fascinated <span style="position: relative; top: 10px;">with the shape of the stone.</span></span></span></p>
      
      <p><span class="box">Let me take the idea that has gotten me this far and put it to bed.</span> <span class="box">What I am about to do will not be that, but it will be something.</span></p>
        
      <p><span class="box">There is no need to sharpen my pencils anymore.</span> <span class="box" style="font-weight: bold;"><span style="color: #F292A0">My</span><span style="color: #FFAC2C"> pencils are sharp enou</span><span style="color: #555">gh.</span></span> <span class="box">Even the dull ones will make a mark. Warts and all.</span> <span class="box" style="font-weight: 600; color: #C91C00;">Let’s start this shit up.</p>
        
      <p><span class="box" style="margin-top: 8em; color: #666;">And god let me enjoy this. Life isn’t just a sequence of waiting for things to be done.</span></p>
    </section>
    
    <footer>
      <div id="disqus_thread"></div>
	  <script type="text/javascript">
	  	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	  	var disqus_shortname = 'rkuykendall'; // required: replace example with your forum shortname
  
	  	/* * * DON'T EDIT BELOW THIS LINE * * */
	  	(function() {
	  		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	  		dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	  		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	  	})();
	  </script>
	  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

      <h3>More Articles</h3>
      <ul>
        <?php include("../listing.php"); ?>
      </ul>
    </footer>
    
    <script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-11153057-4");
		pageTracker._trackPageview();
		} catch(err) {}</script>
   </body>
</html>