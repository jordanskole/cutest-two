<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{{ $title }}}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/default-theme.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/barebones.css">

    <!-- load our fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic">

    @yield('stylesheets')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="/container">
    	<div class="row">
    		<div class="col-md-3 col-lg-3">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
              <nav class="nav side-nav primary-nav">
                <li><a class="text-center" href="#main"><h1 class="brand">J + H</h1></a></li>
                <li><a class="text-center" href="#our-story">Our Story</a></li>
                <li><a class="text-center" href="#photos">Photos</a></li>
                <li><a class="text-center" href="#wedding-party">Wedding Party</a></li>
                <li><a class="text-center" href="#gifts">Gifts</a></li>
                <li><a class="text-center" href="#lodging">Lodging</a></li>
                <li><a class="text-center" href="#subscribe">Subscribe</a></li>
                <li><a class="text-center" href="/logout">Logout</a></li>
              </nav><!-- /.nav -->
            </div><!-- /.col-md-8 -->
          </div><!-- /.row -->
        </div><!-- /.div -->
        <div class="col-md-8 col-lg-9">
          <section id="main" class="row section-odd">
            <div class="col-md-12 col-lg-12">
              <header class="row">
                <h2 class="text-center section-title"><span>Jordan</span> <em>and</em> <span>Heather</span></h2>
                <p class="subline text-center">Invite you to celebrate their wedding</p>
                <img class="img-responsive" src="/img/hero.jpg">
              </header><!-- /.row -->
              <div class="row divider">
                <div class="date-container col-md-6 col-lg-6">
                  <span class="day-date text-right">Saturday, August 16</span>
                  <span class="day-year accent text-right">2014</span>
                </div><!-- /.col-md-6 -->
                <div class="date-container col-md-6 col-lg-6">
                  <span class="day-time text-left">Three o'clock in the afternoon</span>
                  <span class="day-location accent text-left">Cherry Basket Farm</span>
                  <span class="day-time text-left">5530 W BAY SHORE DR, NORTHPORT</span>
                  <span class="day-meta text-left">dinner + dancing to follow</span>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->
              <hr>
              <div class="row">
                <div class="col-md-12 col-lg-12 text-center">
                  <a class="btn btn-primary btn-lg" href="#">Subscribe to Updates</a>
                  <a class="btn btn-primary btn-lg" href="#">Add to Calendar</a>
                </div><!-- /.col-md-3 -->
              </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
          </section><!-- /.row -->
          <section id="our-story" class="row section-even">
            <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                <h2 class="section-title">Our Story</h2>
                <span class="hearts"></span>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-4 col-md-offset-2 col-md-offset-2 col-lg-offset-2">
                <img class="img-responsive" src="/img/jordan_square.jpg">
                <blockquote>
                  <p>
                    Raised as a wild child in New Hampshire, where the moutains meet the sea, Jordan moved to Pure Michigan in 1999. He attended high school in Lansing, and discovered his passions at LCC. It wasn't until he transfered to MSU to study economics that he met Heather. 
                    Jordan instantly recognized that he was in trouble when he caught himself falling in love with his roommate. During the summer of 2007, Heather and Jordan were inseperable, a trend that has continued ever since. Their adventures together have taken them to far corners of the earth, and will continue to propel them into one of life's greatest adventures in 2014.
                  </p>
                  <footer>Jordan's Story</footer>
                </blockquote>
              </div><!-- /.col-md-4 -->
              <div class="col-md-4 col-lg-4">
                <img class="img-responsive" src="/img/heather_square.jpg">
                <blockquote>
                  <p>
                    Heather really loves dogs and Jordan.
                  </p>
                  <footer>Heather's Story</footer>
                </blockquote>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </section><!-- /#our-story -->
          <section id="photos" class="row section-odd">
            <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                <h2 class="section-title">Photos</h2>
                <span class="hearts"></span>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-3 col-lg-3 col-sm-6">
                <a class="" href="/img/engagement_2.jpg">
                  <img class="img-responsive" src="/img/engagement_2.jpg">
                </a>
              </div><!-- /.col-md-3 -->
              <div class="col-md-3 col-lg-3 col-sm-6">
                <a class="" href="/img/the_dog.jpg">
                  <img class="img-responsive" src="/img/the_dog.jpg">
                </a>
              </div><!-- /.col-md-3 -->
              <div class="col-md-3 col-lg-3 col-sm-6">
                <a class="" href="/img/the_city.jpg">
                  <img class="img-responsive" src="/img/the_city.png">
                </a>
              </div><!-- /.col-md-3 -->
              <div class="col-md-3 col-lg-3 col-sm-6">
                <a class="" href="/img/the_legend.jpg">
                  <img class="img-responsive" src="/img/the_legend.png">
                </a>
              </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
          </section><!-- /#photos -->
          <section id="wedding-party" class="row section-even">
            <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                <h2 class="section-title">Groomsmen</h2>
                <span class="hearts"></span>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <div id="carousel-groomsmen" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-groomsmen" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-groomsmen" data-slide-to="1"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/img/ben_skole.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Ben Skole</h3>
                        <p>
                          I haven't known Ben my whole life, but I have known him for all of his. As my only brother, Ben and I spent our childhood running around the woods of New Hampshire together. We were together when we moved to Michigan in 1999, and we have been best friends our entire lives.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/stavros_christakos.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Steven Christakos</h3>
                        <p>
                          One of my favorite memories of Steve and my friendship happened when we were in middle school. Steve's mom was out of town, and his sister Kiki had been tasked with watching him. It didn't take much for us to convince Kiki to let us hide in the basement until Steve got home. <br>
                          For all his size and facial hair, Steve is actually the kindest of souls, he even fightens easily! We waited until he got comfortable (as he could be) before we fired up the circular saw in his basement and let out a howl. Good thing we planted the cameras at the front door!
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/kevin_kent.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Kevin Kent</h3>
                        <p>
                          I've spent almost as much time living with Kevin as I have with Heather. Kevin and I signed the lease on our first apartment together before I was even 18, and I officially moved in on the morning of my 18th birthday. For years we continued our expansion of East Lansing real estate, always having the place to be. <br>
                          Life hasn't always been as good as it is with Heather, as coming of age brings with it a fair set of heartbreak. Through all of the ups and downs Kevin and I have been there to support and love each other like brothers.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/brandon_kearney.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Brandon Kearney</h3>
                        <p>
                          Brandon and I were friends in high school, but it wasn't really until college that we became close friends. Brandon was always there in times of adventure, a level ship sailing in a sea of crazy. Brandon went to college in Oakland, so when Heather and I started dating he was there to show me around Rochester Hills. Brandon and Natasha are always up for a game night, and are one of our favorite couples couples.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/john_hubbard.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>John Hubbard</h3>
                        <p>
                          Grease covered hands and messy garages told the story of Hubbard and I. Friends since middle school shop classes we were always tinkering with something. If it was building speaker system that would peel the roof off a Buick or some sort of home-made artilary we would build it. It's no wonder that John grew up to be one of the smartest people I know. Even though we are full-fledged adults now, that doesn't stop John from putting his skills to the work of mischief.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/terren_massey.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Terren Massey</h3>
                        <p>
                          Terren and I have been friends since middle school. All the way back when our shop teacher would scream at the whole group of us for misbehaving. After school we would bike to the mall together, and talk about girls. We could have never imagined that one day I would be marrying the most beautiful woman on earth, and Terren would be standing up in my wedding.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/todd_johnson.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Todd</h3>
                        <p>
                          Todd rarely opens his eyes, takes his shirt off more than Matthew Mcconaughey, and thinks he's batman. Careful around cameras with this one -- he will try and kiss you. 
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/john_venturini.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>John Venturini</h3>
                        <p>
                          More than friends at this point John will officially be family. John and I have formed a strong friendship based on the relationship between Heather and her sister Ashley (John's wife). The four of us go everywhere together, or at least everywhere with good food! 
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/pat_seidlein.jpg" alt="Steven Christakos">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Pat Seidlein</h3>
                        <p>
                          The Honorable Pat Seidlein! Okay, okay, so Pat isn't a judge, but he is one of the most honorable and thoughtful friends Heather and I have. He also happens to be ordained (and a major crimes prosecutor. Not relevant but makes for great conversation). That's why Heather and I are so excited that Pat will be officiating our wedding. We couldn't think of anybody better to perform our ceremony!
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                  </div><!-- /.carousel-inner -->

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-groomsmen" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-groomsmen" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div><!-- /.carousel -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                <h2 class="section-title">Bridesmaids</h2>
                <span class="hearts"></span>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <div id="carousel-groomsmen" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-groomsmen" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-groomsmen" data-slide-to="1"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/img/ash.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Ashley - Maid of Honor</h3>
                        <p>
                          Ashley was my very first friend on this earth. She also happens to be my lovely older sister! We are insanely close and unquestionably weird. I had the honor of being her maid of honor and she has already been amazing as mine!
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/chels.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Chelsea - Bridesmaid</h3>
                        <p>
                          Chelsea is my first baby cousin and although we used to clash while growing up, like when she poured chocolate syrup on my head ;), she is such an amazing person and friend to me now. We can be found busting out funky dance moves and making ugly faces at any time. Honestly we are more like sisters and I admire her so much!
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/jenna.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Jenna - Bridesmaid</h3>
                        <p>
                          Jenna came along soon after Chelsea and was the sweetest little lady there ever was! She has since grown up to become the funniest person I know and is incredibly talented. I cannot say enough how proud I am of her and how much I love her! She's another sister rather than cousin!
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/marisa.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Marisa - Bridesmaid</h3>
                        <p>
                          Marisa and I first met in middle school, but we became close in high school. We have been attached at the hip ever since and I had the honor of standing up in her wedding two years ago. She is an incredibly kind and loyal person who I love dearly. I feel fortunate to have her as my friend and frequently call on her to make sure there is still normalcy in this world! (Oh! and her sweet little baby Sophia will be a part of our pint-sized gaggle!)
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/nat.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Natalie - Bridesmaid</h3>
                        <p>
                          Natalie and I were pretty inseparable in high school, whether we were at cheerleading practice, eating salsa and chips or sneaking out together. We spent our first year at MSU together as well and have been great friends ever since! I stood up in Natalie's wedding in 2012 and am thrilled she's doing the same for me. Nat can always make me laugh and is such a caring, thoughtful friend! 
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/tricia.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Tricia - Bridesmaid</h3>
                        <p>
                          Tricia and I met in high school where we spent most of our time goofing around. She was my honorary roommate at MSU freshmen year and we have been very close ever since. I stood up in Tricia's wedding in 2013 and had a blast! Our families are very close and I'm so happy to have her as a part of our big day. Tricia is a very down to earth person who I can count when I need something and to lighten any mood! 
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/monika.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Monika - Bridesmaid</h3>
                        <p>
                          Monika and I met in middle school and have remained close after all these years. We were partners in crime in college, living together for 2 years. She is such a fun friend who is always up for anything. 
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/erin.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Erin - Bridesmaid</h3>
                        <p>
                          Erin and I literally have the exact same silly sense of humor, so naturally, I LOVE to be around her and laugh my butt off! We met in high school and our families became very close. I've always thought of Erin as kind of a sister. She is such an amazing person and has always been so wonderful a friend.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                    <div class="item">
                      <img src="/img/katie.jpg" alt="Ben Skole">
                      <div class="carousel-caption">
                      </div><!-- /.carousel-caption -->
                      <div class="carousel-lower">
                        <h3>Katie - Junior Bridesmaid</h3>
                        <p>
                          Katie is my littlest cousin by a wee bit. She came along and has been fanciful since day one! She is smart as a whip and artisticly talented, too. Katie has grown to be such a beautiful girl and I'm so happy to have her as my junior bridesmaid.
                        </p>
                      </div><!-- /.carousel-lower -->
                    </div><!-- /.item -->
                  </div><!-- /.carousel-inner -->

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-groomsmen" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-groomsmen" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div><!-- /.carousel -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </section><!-- /#wedding-party -->
          <section id="gifts" class="row section-odd">
            <div class="row">
              <div class="col-md-12 col-lg-12 text-center">
                <h2 class="section-title">Gifts</h2>
                <span class="hearts"></span>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <p class="content-block">
                  We give thanks that even in a tough economy we are able to live a comfortable lifestyle. Through our adventures we have realized that not everyone is so fortunate. We are deeply appriciative of any gifts that you can provide to help us start our lives as a family, or in our honor to somebody less fortunate.
                </p>
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
          </section><!-- /#gifts -->
          <section id="lodging" class="row section-even">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="section-title-container text-center">       
                  <h2 class="section-title">Lodging</h2>
                  <span class="hearts"></span>
                </div>
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-lg-6">
                  <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/600x600">
                  </a>
                </div><!-- /.col-md-6 -->
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <p class="content-block">
                  Hotels near the venue are few and far between so please book your room as soon as possible. We will have shuttles going to and from the wedding to at least two of the Traverse City hotels. Please subscribe below for details as they arrive.
                  <br><br>
                  Leelanau Sands is nearby, as are several cottages, inns, and b&b's. We recommend checking <a href="http://vrbo.com">VRBO</a> and <a href="www.airbnb.com/c/jskole">AirBnB</a> as well for options.
                </p>
              </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
          </section><!-- /#lodging -->
          <section id="subscribe" class="row section-odd">
            <div class="row">
              <div class="section-title-container text-center">       
                <h2 class="section-title">Subscribe</h2>
                <span class="hearts"></span>
              </div>
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <form>
                  <fieldset class="rsvp-details">
                    <!-- Displays a global alert if required fields are missing -->
                    <div class="js-display"></div>
                    <legend>
                      Subscribe to receive updates, and to stay in touch for any last minute changes!
                    </legend>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" value="" name="FNAME" class="input-field form-control" id="mce-FNAME" placeholder="Your first name is required" required>
                          <span class="help-block">First Name is required.</span>
                        </div><!-- /.form-group -->
                      </div><!-- /.col-md-6 -->
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input type="text" value="" name="LNAME" class="input-field form-control" id="mce-LNAME" placeholder="Your last name is required" required>
                          <span class="help-block">Last Name is required.</span>
                        </div><!-- /.form-group -->
                      </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="name@yourdomain.com" required>
                          <span class="help-block">Valid Email is required.</span>
                        </div><!-- /.form-group -->
                      </div><!-- /.col-md-6 -->
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="tel" class="input-field form-control" id="phone" name="phone" value="" placeholder="A phone number is optional">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                  </fieldset>
                  <fieldset class="rsvp-attendance">
                    <legend>Will you be attending? (Please still complete your RSVP)</legend>
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="radio1">
                          <input type="radio" value="1" name="group[21105]" id="radio1 mce-group[21105]-21105-0" style="display:none;" required>
                          <span class="custom radio"></span>
                          <span class="radio-label">Accepts with Pleasure!</span>
                        </label>
                      </div><!-- /.form-group -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="radio2">
                          <input type="radio" value="2" name="group[21105]" id="mce-group[21105]-21105-1 radio2" style="display:none;" required>
                          <span class="custom radio"></span>
                          <span class="radio-label">Declines with Regret.</span>
                        </label>
                      </div><!-- /.form-group -->
                    </div><!-- /.col-md-6 -->
                  </fieldset>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_00ce810e3100b769ecb6b2c05_be38a16a58" value=""></div>
                  <button type="submit" class="btn btn-primary btn-lg" id="js-submit-btn">
                    <i class="fa fa-envelope"></i> 
                    <span class="btn-label">Subscribe</span>
                  </button>
                </form>
              </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
            <div id="map-canvas" style="width:100%; height:500px;"></div>
          </section><!-- /#subscribe -->
          <footer class="section-odd"> 
            @if(!Auth::check()) 
              <p class="pull-left">
                <a href="{{ URL::route('login')}}">Login</a> 
              </p>
            @endif
            <p class="pull-right">          
              Do you like this site?
              <a href="mailto:jordan@skole.us?subject=I%20want%20a%20site%20like%20this!" title="E-mail Us">
                Yes
              </a> / No. 
            </p>
          </footer><!--END footer-->
        </div><!-- /.col-md-8 -->
    	</div><!-- /.row -->
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    @yield('scripts')
  </body>
</html>