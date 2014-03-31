@extends('layouts.eternity')

@section('styles')
  <link rel="stylesheet" href="/eternity/css/introjs.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
  <link href="/eternity/css/poshytip/tip-yellowsimple/tip-yellowsimple.css" rel="stylesheet"/>
  <link href="/eternity/css/poshytip/tip-yellow/tip-yellow.css" rel="stylesheet"/>
  <link href="/eternity/css/poshytip/tip-violet/tip-violet.css" rel="stylesheet"/>
  <link href="/eternity/css/poshytip/tip-skyblue/tip-skyblue.css" rel="stylesheet"/>
  <style>
    #aside-nav {
      top: 50px;
    }
    .progress {
      top: 45px;
    }
    .background-none {
      background: none !important;
    }
    .border-none {
      border: none !important;
    }
    .edit-bar {
      background-color: gray;
    }
    .progress {
      border: none;
      padding: 0px;
      height: inherit;
    }
    .progress .meter {
      height: 5px;
    }
    /* adjust for tour.js */
    .introjs-overlay {
      opacity: .05 !important;
    }
    .introjs-helperLayer {
      background-color: rgba(255,255,255,0.1);
    }
  </style>
@stop

@section('edit-bar')
  <div class="fixed">
    <nav data-step="1" data-intro="Welcome to your new site, {{{ $data->bride }}}. <br>This is your edit bar, it is only visible when you are editing your site." class="top-bar edit-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          Eternity - Tour
        </li>
      </ul><!-- /.title-area -->
      <section class="top-bar-section background-none">
        <!-- Right Nav Section -->
        <ul data-step="4" data-intro="When you are done making your edits you can save them." data-position="left" class="right background-none">
          <li class="has-form show-for-large-up background-none border-none">
            <a href="#" class="button">Save</a>
          </li>
        </ul><!-- /.right -->
      </section>
    </nav>
  </div>
  <div class="progress fixed">
    <span data-step="3" data-intro="This is your progress meter. It shows how much you have customized." class="meter" style="width: 50%"></span>
  </div>
@stop

@section('content')
  <div id="section-0">        
    <header>        
      <h2 id="firstStop" class="section-title">
        <span data-step="2" data-intro="Underlined items are editable. You can click on them to make changes." id="brides-name" data-title="Brides name" data-pk="{{ $data->uuid }}" class="editable editable-click" data-name="bride">{{{ $data->bride }}}</span> <em>and</em> <span data-title="Grooms name" data-pk="{{ $data->uuid }}" class="editable editable-click" data-name="groom">{{{ $data->groom }}}}</span>
      </h2>
    </header>
    <p class="subline">Invite You to Celebrate At their Wedding</p>
    <img src="/eternity/img/hero.jpg" alt="Placeholder" class="hero-unit fade-in" />
    <div class="row divider date-section">
      <div class="large-6 small-12 columns">
        <div class="date-container col-1">
          <span class="day-date">{{ $data->date->toFormattedDateString() }}</span>
          <span class="day-year accent">2014</span>
        </div>
      </div>
      <div class="large-6 small-12 columns">
        <div class="date-container col-2">
          <span class="day-time">Three O’Clock in the afternoon</span>
          <span class="day-location accent editable editable-click" data-name="venue" data-pk="{{ $data->uuid }}" data-title="Venue name:">{{{ $data->venue }}}</span>
          <span class="day-address">5530 W Bay Shore Dr, Northport</span>
          <span class="day-meta">dinner + dancing to follow</span>
        </div>
      </div>
    </div><!-- END .row -->
  </div><!-- END #section-0 -->

  <div class="callout">
    <a href="#section-6" class="button radius js-scroll">
      <i class="fa fa-envelope"></i> <span class="btn-label">Subscribe to updates!</span>
    </a>
    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Jordan%20%26%20Heather%20get%20Married&dates=20140816/20140816&details=&location=5530%20W%20BAY%20SHORE%20DR%2C%20NORTHPORT&trp=true&sprop=Jordan%20%26%20Heather%20get%20Married&sprop=name:http%3A%2F%2Fcutest-two.com" target="_blank" class="button radius">
      <i class="fa fa fa-calendar-o"></i> <span class="btn-label">Add to calendar!</span>
    </a>
  </div><!-- END .callout -->

  <div id="section-1" class="section-odd row">
    <div class="section-title-container">       
      <h2 class="section-title">Our Story</h2>
      <span class="hearts"></span>
    </div>
    <div class="small-12 large-10 large-centered columns">                        
      <div class="row">
        <div class="small-12 large-6 columns section-groom">
          <img data-step="5" data-intro="Upload a photo from anywhere using InkFilePicker" src="/eternity/img/jordan_square.jpg" alt="Groom"/>
          <blockquote class="caption-1">
            <p>
              Raised as a wild child in New Hampshire, where the moutains meet the sea, Jordan moved to Pure Michigan in 1999. He attended high school in Lansing, and discovered his passions at LCC. It wasn't until he transfered to MSU to study economics that he met Heather. 
            </p>
            <p>
              Jordan instantly recognized that he was in trouble when he caught himself falling in love with his roommate. During the summer of 2007, Heather and Jordan were inseperable, a trend that has continued ever since. Their adventures together have taken them to far corners of the earth, and will continue to propel them into one of life's greatest adventures in 2014. 
            </p>
            <strong class="right">- Jordan's Story</strong>
          </blockquote>
        </div>
        <div class="small-12 large-6 columns section-bride">
          <img src="/eternity/img/heather_square.jpg" alt="Bride" />
          <blockquote class="caption-2">
            <p>
              Heather really loves dogs and Jordan.
            </p>
            <strong class="right">- Heather's Story</strong>
          </blockquote>
        </div>
      </div><!-- END .row -->
    </div><!-- END .small-12  -->       
  </div><!-- END #section-1 -->

  <div id="section-2" class="row">          
    <div class="section-title-container">       
      <h2 class="section-title">Photos</h2>
      <span class="hearts"></span>
    </div>
    <div class="small-12 columns" >
      <ul class="clearing-thumbs" data-clearing>
        <li>
          <a href="/eternity/img/engagement_2.jpg">
            <img src="/eternity/img/engagement_2.jpg" alt="The Engagement" class="fade-in" data-step="6" data-intro="Upload as many photos as you need to tell your story.">
            <span class="overlay-label">The Engagement</span>
          </a>
        </li>
        <li>
          <a href="/eternity/img/the_dog.jpg">
            <img src="/eternity/img/the_dog.jpg" alt="The Dog" class="fade-in">
            <span class="overlay-label">The Dog</span>
          </a>
        </li>
        <li>
          <a href="/eternity/img/the_city.png">
            <img src="/eternity/img/the_city.png" alt="The City" class="fade-in">
            <span class="overlay-label">The City</span>
          </a>
        </li>
        <li>
          <a href="/eternity/img/the_legend.png">
            <img src="/eternity/img/the_legend.png" alt="The Legend" class="fade-in">
            <span class="overlay-label">The Legend</span>
          </a>
        </li>
      </ul>
    </div>          
  </div><!-- END #section-2 -->

  <div id="section-3" class="section-odd">
    <div class="row">
      <div class="section-title-container">       
        <h2 class="section-title" data-step="7" data-intro="Wedding parties vary in size. No worries, upload as few or as many as you need.">Groomsmen</h2>
        <span class="hearts"></span>
      </div>
      <div class="small-11 small-centered large-6 large-centered columns">      
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="/eternity/img/ben_skole.jpg" alt="Ben Skole"/>
              <p class="flex-caption">
                I haven't known Ben my whole life, but I have known him for all of his. As my only brother, Ben and I spent our childhood running around the woods of New Hampshire together. We were together when we moved to Michigan in 1999, and we have been best friends our entire lives. 
              </p>
            </li>
            <li>
              <img src="/eternity/img/stavros_christakos.jpg" alt="Steve Christakos" />
              <p class="flex-caption">
                One of my favorite memories of Steve and my friendship happened when we were in middle school. Steve's mom was out of town, and his sister Kiki had been tasked with watching him. It didn't take much for us to convince Kiki to let us hide in the basement until Steve got home. <br>
                For all his size and facial hair, Steve is actually the kindest of souls, he even fightens easily! We waited until he got comfortable (as he could be) before we fired up the circular saw in his basement and let out a howl. Good thing we planted the cameras at the front door!
              </p>
            </li>
            <li>
              <img src="/eternity/img/kevin_kent.jpg" alt="Placeholder" />
              <p class="flex-caption">
                I've spent almost as much time living with Kevin as I have with Heather. Kevin and I signed the lease on our first apartment together before I was even 18, and I officially moved in on the morning of my 18th birthday. For years we continued our expansion of East Lansing real estate, always having the place to be. <br>
                Life hasn't always been as good as it is with Heather, as coming of age brings with it a fair set of heartbreak. Through all of the ups and downs Kevin and I have been there to support and love each other like brothers.
              </p>
            </li>
            <li>
              <img src="/eternity/img/brandon_kearney.jpg" alt="Brandon Kearney" />
              <p class="flex-caption">
                Brandon and I were friends in high school, but it wasn't really until college that we became close friends. Brandon was always there in times of adventure, a level ship sailing in a sea of crazy. Brandon went to college in Oakland, so when Heather and I started dating he was there to show me around Rochester Hills. Brandon and Natasha are always up for a game night, and are one of our favorite couples couples. 
              </p>
            </li>
            <li>
              <img src="/eternity/img/john_hubbard.jpg" alt="John Hubbard" />
              <p class="flex-caption">
                Grease covered hands and messy garages told the story of Hubbard and I. Friends since middle school shop classes we were always tinkering with something. If it was building speaker system that would peel the roof off a Buick or some sort of home-made artilary we would build it. It's no wonder that John grew up to be one of the smartest people I know. Even though we are full-fledged adults now, that doesn't stop John from putting his skills to the work of mischief.
              </p>
            </li>
            <li>
              <img src="/eternity/img/terren_massey.jpg" alt="Placeholder" />
              <p class="flex-caption">
                Terren and I have been friends since middle school. All the way back when our shop teacher would scream at the whole group of us for misbehaving. After school we would bike to the mall together, and talk about girls. We could have never imagined that one day I would be marrying the most beautiful woman on earth, and Terren would be standing up in my wedding.
              </p>
            </li>
            <li>
              <img src="/eternity/img/todd_johnson.jpg" alt="Placeholder" />
              <p class="flex-caption">
                Todd rarely opens his eyes, takes his shirt off more than Matthew Mcconaughey, and thinks he's batman. Careful around cameras with this one -- he will try and kiss you. 
              </p>
            </li>
            <li>
              <img src="/eternity/img/john_venturini.jpg" alt="Placeholder" />
              <p class="flex-caption">
                More than friends at this point John will officially be family. John and I have formed a strong friendship based on the relationship between Heather and her sister Ashley (John's wife). The four of us go everywhere together, or at least everywhere with good food! 
              </p>
            </li>
            <li>
              <img src="/eternity/img/pat_seidlein.jpg" alt="Placeholder" />
              <p class="flex-caption">
                The Honorable Pat Seidlein! Okay, okay, so Pat isn't a judge, but he is one of the most honorable and thoughtful friends Heather and I have. He also happens to be ordained (and a major crimes prosecutor. Not relevant but makes for great conversation). That's why Heather and I are so excited that Pat will be officiating our wedding. We couldn't think of anybody better to perform our ceremony!
              </p>
            </li>
          </ul>
        </div><!-- END .flexslider -->
      </div><!-- END .small-11 -->
    </div><!-- END .row -->
  </div><!-- END #section-3 -->

  <div id="section-4">
    <div class="row">       
      <div class="section-title-container">       
        <h2 class="section-title">Bridesmaids</h2>
        <span class="hearts"></span>
      </div>
      <div class="small-11 small-centered large-6 large-centered columns">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="/eternity/img/ash.jpg" alt="Placeholder" />
              <h4>Ashley - Maid of Honor</h4>
              <p class="flex-caption">
                Ashley was my very first friend on this earth. She also happens to be my lovely older sister! We are insanely close and unquestionably weird. I had the honor of being her maid of honor and she has already been amazing as mine! 
              </p>
            </li>
            <li>
              <img src="/eternity/img/chels.jpg" alt="Placeholder" />
              <h4>Chelsea - Bridesmaid</h4>
              <p class="flex-caption">
                Chelsea is my first baby cousin and although we used to clash while growing up, like when she poured chocolate syrup on my head ;), she is such an amazing person and friend to me now. We can be found busting out funky dance moves and making ugly faces at any time. Honestly we are more like sisters and I admire her so much!
              </p>
            </li>
            <li>
              <img src="/eternity/img/jenna.jpg" alt="Placeholder" />
              <h4>Jenna - Bridesmaid</h4>
              <p class="flex-caption">
                Jenna came along soon after Chelsea and was the sweetest little lady there ever was! She has since grown up to become the funniest person I know and is incredibly talented. I cannot say enough how proud I am of her and how much I love her! She's another sister rather than cousin! 
              </p>
            </li>
            <li>
              <img src="/eternity/img/marisa.jpg" alt="Placeholder" />
              <h4>Marisa - Bridesmaid</h4>
              <p class="flex-caption">
                Marisa and I first met in middle school, but we became close in high school. We have been attached at the hip ever since and I had the honor of standing up in her wedding two years ago. She is an incredibly kind and loyal person who I love dearly. I feel fortunate to have her as my friend and frequently call on her to make sure there is still normalcy in this world! (Oh! and her sweet little baby Sophia will be a part of our pint-sized gaggle!)
              </p>
            </li>
            <li>
              <img src="/eternity/img/nat.jpg" alt="Placeholder" />
              <h4>Natalie - Bridesmaid</h4>
              <p class="flex-caption">
                Natalie and I were pretty inseparable in high school, whether we were at cheerleading practice, eating salsa and chips or sneaking out together. We spent our first year at MSU together as well and have been great friends ever since! I stood up in Natalie's wedding in 2012 and am thrilled she's doing the same for me. Nat can always make me laugh and is such a caring, thoughtful friend! 
              </p>
            </li>
            <li>
              <img src="/eternity/img/tricia.jpg" alt="Placeholder" />
              <h4>Tricia - Bridesmaid</h4>
              <p class="flex-caption">
                Tricia and I met in high school where we spent most of our time goofing around. She was my honorary roommate at MSU freshmen year and we have been very close ever since. I stood up in Tricia's wedding in 2013 and had a blast! Our families are very close and I'm so happy to have her as a part of our big day. Tricia is a very down to earth person who I can count when I need something and to lighten any mood! 
              </p>
            </li>
            <li>
              <img src="/eternity/img/monika.jpg" alt="Placeholder" />
              <h4>Monika - Bridesmaid</h4>
              <p class="flex-caption">
                Monika and I met in middle school and have remained close after all these years. We were partners in crime in college, living together for 2 years. She is such a fun friend who is always up for anything.  
              </p>
            </li>
            <li>
              <img src="/eternity/img/erin.jpg" alt="Placeholder" />
              <h4>Erin - Bridesmaid</h4>
              <p class="flex-caption">
                Erin and I literally have the exact same silly sense of humor, so naturally, I LOVE to be around her and laugh my butt off! We met in high school and our families became very close. I've always thought of Erin as kind of a sister. She is such an amazing person and has always been so wonderful a friend.   
              </p>
            </li>
            <li>
              <img src="/eternity/img/katie.jpg" alt="Placeholder" />
              <h4>Katie - Junior Bridesmaid</h4>
              <p class="flex-caption">
                Katie is my littlest cousin by a wee bit. She came along and has been fanciful since day one! She is smart as a whip and artisticly talented, too. Katie has grown to be such a beautiful girl and I'm so happy to have her as my junior bridesmaid.  
              </p>
            </li>
          </ul>
        </div><!-- END .flexslider -->
      </div><!-- END .small-11 -->
    </div><!-- END .row -->         
  </div><!-- END #section-4 -->

  <div id="section-5" class="section-odd" >        
    <div class="section-title-container">       
      <h2 class="section-title">Gifts</h2>
      <span class="hearts"></span>
    </div>
    <div class="small-12 large-6 large-centered columns wrapper">       
      <ul class="small-block-grid-1 large-block-grid-2 block-grid">
        <li>
          <a href="https://secure.williams-sonoma.com/registry/rjmd2jtmw5/registry-list.html" class="block-logo">
            <img src="/eternity/img/williams_sonoma.jpg" alt="Logo" data-step="8" data-intro="Make sure people know where you have registered. Adding a registry is a breeze."/>
          </a>
        </li>
        <li>
          <a href="http://my.charitywater.org/cutest-two" class="block-logo">
            <img src="/eternity/img/charity_water.png" alt="Logo" />
          </a>
        </li>
        <li>
          <a href="http://www.myregistry.com/Visitors/Giftlist.aspx?sid=071d6ac1-c633-437a-bb3c-6d4a1cf1e2a3" class="block-logo">
            <img src="/eternity/img/my_registry.jpg" alt="Logo" />
          </a>
        </li>
        <li>
          <a href="http://www.target.com/wedd/registry/l_0DNuRozIu_hhkdAIJGDw" class="block-logo">
            <img src="/eternity/img/target.png" alt="Logo" />
          </a>
        </li>
        
        
      </ul>
      <p class="content-block">
        We give thanks that even in a tough economy we are able to live a comfortable lifestyle. Through our adventures we have realized that not everyone is so fortunate. We are deeply appriciative of any gifts that you can provide to help us start our lives as a family, or in our honor to somebody less fortunate. 
      </p><!-- END .content-block -->
    </div>
  </div><!-- END #section-5 -->

  <div id="section-6">        
    <div class="section-title-container">       
      <h2 class="section-title">Lodging</h2>
      <span class="hearts"></span>
    </div>
    <div class="small-12 large-6 large-centered columns wrapper">       
      <ul class="small-block-grid-1 large-block-grid-2 block-grid">
        <li>
          <a href="http://www.bayshore-resort.com/" class="block-logo">
            <img src="/eternity/img/bayshore_resort.png" alt="Logo" />
          </a>
        </li>
        <li>
          <a href="http://www.holidayinnresorts.com/hotels/us/en/traverse-city/tvcmi/hoteldetail" class="block-logo">
            <img src="/eternity/img/holiday_inn_bw.jpeg" alt="Logo" />
          </a>
        </li>
        <li>
          <a href="http://www.traversecitycambriasuites.com/" class="block-logo">
            <img src="/eternity/img/cambria_suites.png" alt="Logo" />
          </a>
        </li>
        <li>
          <a href="http://www.whalebackinn.com/index.php" class="block-logo">
            <img src="/eternity/img/whaleback_inn.svg" alt="Logo" />
          </a>
        </li>
      </ul>
      <p class="content-block" class="text-left">
        Hotels near the venue are few and far between so please book your room as soon as possible. We will have shuttles going to and from the wedding to at least two of the Traverse City hotels. Please subscribe below for details as they arrive.
        <br><br>
        Leelanau Sands is nearby, as are several cottages, inns, and b&b's. We recommend checking <a href="http://vrbo.com">VRBO</a> and <a href="www.airbnb.com/c/jskole">AirBnB</a> as well for options.
      </p><!-- END .content-block -->
    </div>
  </div><!-- END #section-5 -->

  <div id="section-7" class="js-form" >          
    <div class="section-title-container">       
      <h2 class="section-title">Subscribe</h2>
      <span class="hearts"></span>
    </div>
    <div class="small-12 large-10 large-centered columns">

      <form data-abide novalidate method="post" action="http://jordanskole.us2.list-manage.com/subscribe/post?u=00ce810e3100b769ecb6b2c05&amp;id=be38a16a58" class="rsvp-form custom validate" id="js-form mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">      
        <fieldset class="rsvp-details" data-step="9" data-intro="Sending emails from the app is easy. We provide beautiful templates and a simple interface to help you get started.">
          <!-- Displays a global alert if required fields are missing -->
          <div class="js-display"></div>
          <legend>
            Subscribe to receive updates, and to stay in touch for any last minute changes!
          </legend>
          <div class="row">
            <div class="large-6 columns">
              <label for="firstname">First Name</label>
              <input type="text" value="" name="FNAME" class="input-field" id="mce-FNAME" placeholder="Your first name is required" required>
              <small class="error">First Name is required.</small>
            </div>
            <div class="large-6 columns">
              <label for="lastname">Last Name</label>
              <input type="text" value="" name="LNAME" class="input-field" id="mce-LNAME" placeholder="Your last name is required" required>
              <small class="error">Last Name is required.</small>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns">
              <label for="email">Email</label>
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="name@yourdomain.com" required>
              <small class="error">Valid Email is required.</small>
            </div>
            <div class="large-6 columns">
              <label for="phone">Phone</label>
              <input type="tel" class="input-field" id="phone" name="phone" value="" placeholder="A phone number is optional">
            </div>
          </div>
        </fieldset>
        <fieldset class="rsvp-attendance">
          <legend>Will you be attending? (Please still complete your RSVP)</legend>
          <div class="large-6 columns">
            <label for="radio1">
              <input type="radio" value="1" name="group[21105]" id="radio1 mce-group[21105]-21105-0" style="display:none;" required>
              <span class="custom radio"></span>
              <span class="radio-label">Accepts with Pleasure!</span>
            </label>
          </div>
          <div class="large-6 columns">
            <label for="radio2">
              <input type="radio" value="2" name="group[21105]" id="mce-group[21105]-21105-1 radio2" style="display:none;" required>
              <span class="custom radio"></span>
              <span class="radio-label">Declines with Regret.</span>
            </label>
          </div>
        </fieldset>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_00ce810e3100b769ecb6b2c05_be38a16a58" value=""></div>
        <button type="submit" class="button radius" id="js-submit-btn">
          <i class="fa fa-envelope"></i> 
          <span class="btn-label">Subscribe</span>
        </button>
      </form>

      <p>
        For any questions please email us:
        <a href="mailto:wedding@skole.us" title="E-mail Us">
          wedding@skole.us
        </a>
      </p>
    </div><!-- END .large-8 -->
    <div id="map-canvas" style="width:100%; height:500px;"></div> 
  </div><!-- END .row -->
@stop

@section('tour')

@stop

@section('scripts')
  <script src="/eternity/js/vendor/intro.js"></script>
  <script src="/eternity/js/vendor/jquery.poshytip.min.js"></script>
  <script src="/eternity/jquery-editable/js/jquery-editable-poshytip.js"></script>
  <script>
    $(document).ready(function(){
      introJs().setOptions({"showStepNumbers": false}).start();
      $('.editable').editable({
        url: "/tour/put",
        ajaxOptions: {
            type: 'PUT'
        },
        error: function(response, newValue) {
          if(response.status === 500) {
              return 'Service unavailable. Please try later.';
          } else {
              console.log(response.responseText);
          }
        }
      });
    });
  </script>
@stop