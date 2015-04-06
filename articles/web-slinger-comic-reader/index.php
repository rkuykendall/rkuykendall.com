<?php include('vars.php'); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title><?= $title ?> - Robert Kuykendall</title>
    <meta name="Description" content="<?php include("short.html") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
     
    <!-- ==============================
          W3C Valid HTML & CSS
         ============================== -->
  
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='/style.css' rel='stylesheet' type='text/css'>
    <style>
      section img {
        margin-bottom: 15px;
      }
      i {
        font-style: italic;
      }
      
      a.button {
        display: block;
        padding: 20px;
        width: 640px;
        text-align: center;
        color: white;
        font-weight: 600;
        font-size: 26px;
        background-color: #06C;
        margin-bottom: 15px;
      }
      a:hover.button {
        background-color: transparent;
        color: #06C;
        text-decoration: none;
      }
    </style>
  </head>
  
  <body>

    <header>
      <a href="http://rkuykendall.com/"><img alt="" id="logo" src="/logo.png" /></a>
      <p>Written by <a href="http://rkuykendall.com/">Robert Kuykendall</a>.</p>
      <h1><?= $title ?></h1>
      <h2><?= date("l, F jS, Y", $published); ?> </h2>
    </header>
    
    <section>
      <a href="http://rkuykendall.com/webslinger/"><img src="images/full-spread.jpg" /></a>
      <a href="http://rkuykendall.com/webslinger/" class="button">Link to <i>Web Slinger</i> Comic Book Reader</a>
      
      <h2>Raymond's Comic Book Reader</h2>
      <p>My favorite comic readers are <a href="http://dancingtortoise.com/simplecomic/">Simple Comic</a> on OS X and <a href="https://play.google.com/store/apps/details?id=com.rookiestudio.perfectviewer&hl=en">Perfect Viewer</a> on Android. However, last month I found myself in front of a big, beautiful iMac screen, a comic I wanted to read on the desktop, and no way to view it. I couldn't run native applications, and Java wasn't installed, so I turned to the web. I fought my way past the registration and uploader on <a href="http://www.allcomicsonline.com/">All Comics</a> only to be disappointed by:</p>
      
      <ol>
        <li>Very slowly loading pages,</li>
        <li>No keyboard support,</li>
        <li>A large, unnecessary interface,</li>
        <li>No support for full two-page spreads,</li>
        <li>And no support for fitting images to the interface.</li>
      </ol>
      
      <p>I continued searching, and was surprised to find faster reader with a better uploader attached to an developer tutorial titled &ldquo;<a href="http://www.raymondcamden.com/index.cfm/2012/5/29/Building-an-HTML5-Comic-Book-Reader">Building an HTML5 Comic Book Reader</a>&rdquo; by <a href="http://www.raymondcamden.com/page.cfm/about-me">Raymond Camden</a>. Raymond's comic reader was only a weekend project, and had all the same interface problems as All Comics, but It was fast and open for improvements. </p>
      
      <a href="http://www.raymondcamden.com/demos/2012/may/28/"><img src="images/comicviewer.png" /></a>    
      
      <h2>Framework &amp; Style Updates</h2>
      <p>Once I had the code running locally, I upgraded the versions of Bootstrap and jQuery, moved the title to a navbar, and switched to a dark theme. I cleaned up the copy and made small changes to familiarize myself with the source code. Once I began to understand the control flow, I was able to move the controls to the navbar to be cleaner and more compact.</p>
      
      <a href="http://rkuykendall.com/webslinger/"><img src="images/start-page.jpg" /></a> <br />

      <h2>Adding Missing Features</h2>
      <p>Once I had the code updated, cleaned, and understood, adding features was quick and easy:
      <ol>
        <li><strong>Fit to width</strong> and <strong>fit to height</strong> were implemented by css, and buttons were added to change the class name in jQuery.</li>
        <li><strong>Keyboard controls</strong> were added using <a href="https://github.com/jeresig/jquery.hotkeys">jquery.hotkeys</a>, maintained by jQuery author John Resig.</li>
        <li><strong>Two page spread</strong> took longer, as it required a rewrite of the comic page display code.</li>
      </ol>
      <a href="http://rkuykendall.com/webslinger/"><img src="images/full-spread.jpg" /></a>
  
      <h2>Hitting a Wall</h2>
      <p>The only feature I was unable to add was Dropbox support. Dropbox was how I got my CBZ files onto the iMac to begin with, and integrating it into the UI via the <a href="https://www.dropbox.com/developers/chooser">Dropbox Chooser</a> looked simple. However, Dropbox requires that you request user files from your server, and not through Javascript in the browser:</p>
        
      <blockquote>
        <p><strong>Dropbox Support:</strong> Thanks for writing in. It looks like the issue here is that our content servers (dl.dropbox.com) don't currently allow arbitrary cross domain access in JavaScript. (This doesn't apply to accessing the file directly in your browser, or downloading to your server locally, which is generally what one would do with the link returned by Chooser.) [&hellip;] This is something that would need to be enabled on our side, so I'll be sure to pass this on as feedback.</p>
      </blockquote>  
        
      <h2>Naming &amp; Publishing</h2>
      <p>After a few hours of work, Raymond replied to <a href="http://www.raymondcamden.com/index.cfm/2012/5/29/Building-an-HTML5-Comic-Book-Reader#c2DCDC6B6-924D-59C5-1E7A546B79CAC44F">my comment on his blog post</a> and happily agreed to upload his code to GitHub for me to fork. However, I had built this project not just as a tutorial, but in the hope that somebody would find it useful. Useful things become familiar, and should be found easily in a search engine. Thus, any useful thing gets a name. And what better name for a web-based comic reader than &ldquo;Web-Slinger&rdquo;?</p>

      <a href="https://github.com/rkuykendall/HTML5ComicBookReader" class="button">Fork the project on GitHub</a>

      <h2 style="font-style: italic">&ldquo;END?&rdquo;</h2>  
      <p>I hope somebody finds this project useful, reads a few comics, or even adds a feature. However, even if nobody ever sees this page, I've built a great comic experience for myself. Next time I'm in front of a big pretty iMac and can't install any software, my friendly neighborhood web-slinger will be there to save the day.</p>
          
      <img src="images/single-page-responsive.jpg" />
      
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
      <h3 style="padding-top: 1em">More Articles</h3>
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
    <script src="/javascript/retina/retina.js"></script>
   </body>
</html>