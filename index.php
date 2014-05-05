<?php
  require_once('template.php');
  print $open;
?>

    <header>
      <?php print $logo; ?>
      <h1>Robe<span style="letter-spacing: 2px">rt</span> Kuyke<span style="letter-spacing: -1px">nda</span>ll</h1>
      <h2>Columbia University, NYC</h2>
    </header>
    <section>
      <p>
        Texas State University &mdash; Computer Science B.Sc. and Honors Studies minor '12.
        <br /> Columbia University in the City of New York &mdash; Computer Science M.Sc. SEAS '15.
        <br /> <a href="Kuykendall-CV.pdf">Resume</a> (pdf), last updated October 2013</a>.
      </p>
        
      <p></p>
    </section>
    
		<div id="sections">
    
      <section>
        <h3>I love building web applications.</h3>
        <ul>
          <li><a href="http://simplici7y.com">Simplici7y</a> (<a href="https://github.com/rkuykendall/Simplici7y">github</a>) &mdash; File sharing for the <a href="http://source.bungie.org">Aleph One</a> community. Written in Ruby on Rails in 2007, updated in 2011.</li>
          <li><a href="http://dani365.com/years/2008/months/6">Dani 365</a> &mdash; Photo sharing site and &ldquo;365&rdquo; photo-a-day project. Written in Ruby on Rails in 2008.
          <li><a href="http://www.pfhorums.com">The Pfhorums</a> &mdash; Forum for <a href="http://source.bungie.org">Aleph One</a> open source project, founded in 2005, managed but not coded.</li>
        </ul>
      </section>
      
    <section>
      <h3>I write articles and <a href="/design">enjoy design</a>.</h3>
      <ul>
        <?php include("./articles/listing.php"); ?>
      </ul>
    </section>
      
    <section>
      <h3>I would love to hear from you.</h3>
      <ul>
        <li>Email &mdash; 
          <script>
            <!-- 
              // http://rumkin.com/tools/mailto_encoder/custom.php
              ML="rlot>\"< mu.ya@if=/kdhcbe:n";
              MI="6<7D0G?@58<>132H02FG03=0B9;BGIC<11:E285402FG03=0B9;BGIC<11:E286A<4";
              OT="";
              for(j=0;j<MI.length;j++){
              OT+=ML.charAt(MI.charCodeAt(j)-48);
              }document.write(OT);
            // -->
          </script>
          <noscript>Encrypted Address</noscript>
        </li>
        <li>Phone &mdash; 
          &#43;&#49;&#32;&#40;&#50;&#49;&#48;&#41;&#32;&#50;&#48;&#52;&#45;&#56;&#51;&#57;&#49;
        </li>
        <li>Location &mdash; 135th &amp; Broadway</li>
        <li>AIM &mdash; 
          <script>
            <!--
            // http://rumkin.com/tools/mailto_encoder/custom.php
            ML="kn@ecamtrydbuol.";
            MI="8=;387280<9031:5>>?4=6";
            OT="";
            for(j=0;j<MI.length;j++){
            OT+=ML.charAt(MI.charCodeAt(j)-48);
            }document.write(OT);
            // -->
          </script>
          <noscript>Encrypted Address</noscript>
        </li>
        <li>Google Talk &mdash; 
          <script>
            <!--
            // http://rumkin.com/tools/mailto_encoder/custom.php
            ML="kn@ecamtrydbuol.";
            MI="8=;387280<9031:5>>?4=6";
            OT="";
            for(j=0;j<MI.length;j++){
            OT+=ML.charAt(MI.charCodeAt(j)-48);
            }document.write(OT);
            // -->
          </script>
          <noscript>Encrypted Address</noscript>
        </li>
      </ul>
    </section>
        
    <section>
      <h3>You can also find me online.</h3>
      <ul>
        <li>GitHub &mdash; <a href="https://github.com/rkuykendall">rkuykendall</a></li>
        <li>Facebook &mdash; <a href="https://www.facebook.com/robert.kuykendall">robert.kuykendall</a></li>
        <li>Hacker News &mdash; <a href="https://news.ycombinator.com/threads?id=rkuykendall-com">rkuykendall-com</a></li>
        <!-- li>Google Plus &mdash; <a href="https://plus.google.com/109526716594260505389/">Robert Kuykendall</a></li -->
        <!-- li>Twitter &mdash; <a href="https://twitter.com/rkuykendall">rkuykendall</a></li -->
        <li>LinkedIn &mdash; <a href="http://www.linkedin.com/in/robertrkuykendall">robertrkuykendall</a></li>
        <li>Last.fm  &mdash; <a href="http://www.last.fm/user/Appleswitch">appleswitch</a></li>
        <li>Stack Overflow &mdash; <a href="http://stackoverflow.com/users/224873/robert-kuykendall">Robert Kuykendall</a></li>
        <li>Wikipedia &mdash; <a href="http://en.wikipedia.org/wiki/Special:Contributions/Rkuykendall">rkuykendall</a></li>
        <li>Flickr  &mdash; <a href="http://www.flickr.com/photos/appleswitch">appleswitch</a> Photos from '08-'10</li>
      </ul>
    </section>
    
  </div>
    
<?php print $close;
