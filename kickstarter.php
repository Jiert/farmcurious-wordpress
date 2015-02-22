<?php
/*
 * Template Name: Kickstarter
 * Description: A Page Template with a darker design.
 */
get_header();
?>

<div id="content" class="single-page kickstarter">
  <div class="page-header">
    <h1>The FARMcurious Kickstarter Project!</h1>
  </div>

  <div class="row-fluid">
    <div class="span12 mound">
      <p>I hope you're having an awesome day. You're here because you're part of my inner circle of family, friends and supporters. You may not know this but the success of my Kickstarter will rely heavily on how many people share it with their own personal networks.</p>
      <p>Would you please take a few seconds to spread the FARMcurious love?</p>
      <p>Thanks so much for having my back,</p>
      <p>Nicole</p>
    </div>
  </div>

  <div class="row-fluid">
    <div class="mound span4">
      <h2>Facebook</h2>
      <p>Share the FARMcurious Fermenting Set with your friends</p>
      <a id="facebook" class="btn btn-large btn-primary"> <i class="icon-facebook icon-large"></i>Facebook</a>
    </div>
    <div class="mound span4">
      <h2>Twitter</h2>
      <p>Tweet about the FARMcurious kickstarter</p>
      <a id="twitter" class="btn btn-large btn-primary"> <i class="icon-twitter icon-large"></i>Twitter</a>
    </div>
    <div class="mound span4">
      <h2>Watch our Video</h2>
      <p>Thanks in advance for supporting our campaign</p>
      <a id="kickstarter" href="https://www.kickstarter.com/projects/2021939414/farmcurious-fermenting-set" target="_blank" class="btn btn-large btn-primary">
        <i class="icon-play icon-large"></i>Kickstarter
      </a>
    </div>
  </div>

  <br>

  <div class="row-fluid">
    <p>Support Progress:</p>
    <div class="progress progress-striped active">
      <div class="bar" style="width: 0%;"></div>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span12">
      <h2>Blog about our Kickstarter Launch!</h2>
      <p>In order to create buzz, we’re asking everyone to post on the same date. Please consider publishing your coverage on: </p>
      <ul>
        <li>Wed, April 23</li>
        <li>Tues, April 29</li>
        <li>Tuesday, May 13</li>
      </ul>

      <p>If you have a blog, we’d love for your to share our project with your community. You could:</p>
      <ul>
        <li>Host a giveaway - email Nicole@farmcurious.com to set it up</li>
        <li>Post about the health benefits of fermentation and link to our Kickstarter</li>
        <li>Post about the things that keep people from fermenting like:</li>
        <ul>
          <li>Fear of yeast and mold growing on top</li>
          <li>Space limitations </li>
          <li>Expense of fancy fermentation setup</li>
          <li>Lack of knowledge on how to do it</li>
          <li>Unwillingness to have something 'smelly' in the house</li>
          <li>Not sure whether they like to eat fermented things or how to use them</li>
        </ul>
        <li>Explain how the FARMcurious Fermenting Sets addresses these issues by:</li>
        <ul>
          <li>Fermenting batches in standard wide-mouth mason jars without risking explosion</li>
          <li>Minimizing the risk of growing nasty yeast and mold in your fermented food</li>
          <li>Fermenting smaller batches with more variety, allowing for more experimentation</li>
          <li>Avoiding committing storage space to single-use bulky fermentation crocks</li>
          <li>Experimenting more and explore more varieties of fermented yumminess</li>
          <li>Reducing off-putting funky fermenting smells</li>
        </ul>

      </ul>
      <br>
      <br>
    </div>
  </div>


  <script>
    (function(){
      var $progressBar = $('.bar'),
          facebook = false,
          twitter = false,
          kickstarter = false,
          width;  

      function widthStyle(style){
        width = Number($progressBar[0].style.width.replace('%','')) + 33;
        return width <= 66 ? width.toString() + '%' : '100%';
      } 

      $('#facebook').click(function(){
        var w = 580, h = 300,
            left = (screen.width/2)-(w/2),
            top = (screen.height/2)-(h/2);
                      
        if ((screen.width < 480) || (screen.height < 480)) {
          window.open ('http://www.facebook.com/share.php?u=https://www.kickstarter.com/projects/2021939414/farmcurious-fermenting-set', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
        } 
        else {
          window.open ('http://www.facebook.com/share.php?u=https://www.kickstarter.com/projects/2021939414/farmcurious-fermenting-set', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);   
        }

        if (facebook) return;

        $progressBar.css('width', widthStyle());
        facebook = true;
      });

      $('#twitter').click(function(){
        var loc = encodeURIComponent('http://kck.st/Ql9bdP'),
            title = "Check out this mason jar fermenting set by @farmcurious on Kickstarter",
            w = 580, h = 300,
            left = (screen.width/2)-(w/2),
            top = (screen.height/2)-(h/2);
                  
            window.open('http://twitter.com/share?text=' + title + '&url=' + loc, '', 'height=' + h + ', width=' + w + ', top='+top +', left='+ left +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');

        if (twitter) return;

        $progressBar.css('width', widthStyle());
        twitter = true;
      });

      $('#kickstarter').click(function(){
        if (kickstarter) return;

        $progressBar.css('width', widthStyle());
        kickstarter = true;
      });

    })()
  </script>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>