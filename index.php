<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">    
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">    
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries-min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>Omnifood</title>    
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="resources/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="resources/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="resources/favicons/manifest.json">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <header>
      <nav>
        <div class="row">
          <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
          <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
          <ul class="main-nav">
            <li>
              <a href="#features">
                <span class="eng">
                Food delivery
                </span>
                <span class="ita">
                Consegna
                </span>
              </a>
            </li>
            <li>
              <a href="#works">
                <span class="eng">
                How it works
                </span>
                <span class="ita">
                Come funziona
                </span>
              </a>
            </li>
            <li>
              <a href="#cities">
                <span class="eng">
                Our cities
                </span>
                <span class="ita">
                Dove siamo
                </span>
              </a>
            </li>
            <li>
              <a href="#plans">
                <span class="eng">
                Sign up
                </span>
                <span class="ita">
                Registrati
                </span>
              </a>
            </li>
            <li class="changeLang">
              <span class="active-IT">IT</span> | <span  class="active-EN">EN</span>
            </li>
          </ul>
          <span class="nav-mobile" onclick="openNav()"><i class="ion-navicon"></i></span>
          <div class="changeLang"><span class="active-IT">IT</span> | <span class="active-EN">EN</span></div>
          
        </div>
      </nav>
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="#features" onclick="closeNav()">
            <span class="eng">
              Food delivery
            </span>
            <span class="ita">
              Consegna
            </span>
          </a>
          <a href="#works" onclick="closeNav()">
            <span class="eng">
              How it works
            </span>
            <span class="ita">
              Come funziona
            </span>
          </a>
          <a href="#cities" onclick="closeNav()">
            <span class="eng">
              Our cities
            </span>
            <span class="ita">
              Dove siamo
            </span>
          </a>
          <a href="#plans" onclick="closeNav()">
            <span class="eng">
              Sign up
            </span>
            <span class="ita">
              Registrati
            </span>
          </a>
        </div>
      </div>
      <div class="hero-text-box">
        <h1>
          <span class="eng">
          Goodbye junk food.<br>Hello super healthy meals.
          </span>
          <span class="ita">
          Addio cibo spazzatura.<br>Benvenuti pranzetti super salutari.
          </span>
        </h1>
        <a href="#" class="btn btn-full js--scroll-to-plans">
          <span class="eng">
          I’m hungry
          </span>
          <span class="ita">
          Ho fame
          </span>
        </a>
        <a href="#" class="btn btn-ghost js--scroll-to-start">
          <span class="eng">
          Show me more
          </span>
          <span class="ita">
          Mostrami altro
          </span>
        </a>
      </div>
    </header>
    <section id="features" class="section-features js--section-features">
      <div class="row">
        <h2>
          <span class="eng">
            Get food fast &mdash; not fast food
          </span>
          <span class="ita">
            Ricevi subito del buon cibo &mdash; non da fast food
          </span>
        </h2>
        <p class="long-copy">
          <span class="eng">
            Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
          </span>
          <span class="ita">
            Ciao, siamo Omnifood, il nuovo servizio di consegna a domicilio. Sappiamo che sei sempre preso dal lavoro e che non hai nemmeno tempo di cucinare. Lascia che ce ne occupiamo noi, siamo i migliori e te ne accorgerai!
          </span>
        </p>
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <i class="ion-ios-infinite-outline icon-big"></i>
          <h3>
            <span class="eng">
              Up to 365 days/year
            </span>
            <span class="ita">
              365 giorni all'anno
            </span>
          </h3>
          <p>
            <span class="eng">
              Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
            </span>
            <span class="ita">
              Non dovrai più cucinare! Sul serio. Il nostro piano premium include un servizio che copre 365 giorni/anno. Puoi ovviamente  scegliere piani più flessibili che si conformino al tuo stile di vita.
            </span>
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-stopwatch-outline icon-big"></i>
          <h3>
            <span class="eng">
              Ready in 20 minutes
            </span>
            <span class="ita">
              Pronto in 20 minuti
            </span>
          </h3>
          <p>
            <span class="eng">
              You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
            </span>
            <span class="ita">
              Ci metteremo solo 20 minuti per portare un delizioso e sano pranzo direttamente a casa tua. Lavoriamo con i migliori chef di ogni città e siamo sicuri che sarai soddisfatto al 100%.
            </span>
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-nutrition-outline icon-big"></i>
          <h3>
            <span class="eng">
              100% organic
            </span>
            <span class="ita">
              100% BIO
            </span>
          </h3>
          <p>
            <span class="eng">
              All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
            </span>
            <span class="ita">
              Tutte le nostre verdure sono fresche, biologiche ed a chilomentro 0. Gli animali vengono allevati senza l’uso di ormoni e antibiotici. Tutto ciò fa bene alla tua salute, all’ambiente ed è anche più buono!
            </span>
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-cart-outline icon-big"></i>
          <h3>
            <span class="eng">
              Order anything
            </span>
            <span class="ita">
              Ordina ciò che vuoi
            </span>
          </h3>
          <p>
            <span class="eng">
              We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
            </span>
            <span class="ita">
              Non diamo limiti alla tua fantasia, il che significa che puoi ordinare qualsiasi cosa tu voglia. Puoi anche scegliere dal nostro menu che contiene più di 100 piatti deliziosi. La scelta sta a te!
            </span>
          </p>
        </div>
      </div>
    </section>
    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
            <img class="ita" src="resources/img/1.jpg" alt="Bibimap Coreano con uova e verdure">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
            <img class="ita" src="resources/img/2.jpg" alt="Semplice pizza italiana con pomodori ciliegino">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
            <img class="ita" src="resources/img/3.jpg" alt="Petto di pollo alla griglia con contorno di verdure">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/4.jpg" alt="Autumn pumpkin soup">
            <img class="ita" src="resources/img/4.jpg" alt="Vellutata autunnale di zucca">
          </figure>
        </li>
      </ul>
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
            <img class="ita" src="resources/img/5.jpg" alt="Bistecca Paleo con verdure">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
            <img class="ita" src="resources/img/6.jpg" alt="Baguette salutista con uova e verdure">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
            <img class="ita" src="resources/img/7.jpg" alt="Burger con cheddar e bacon">
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img class="eng" src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
            <img class="ita" src="resources/img/8.jpg" alt="Granulato con ciliegie e fragole">
          </figure>
        </li>
      </ul>
    </section>
    
    <section id="works" class="section-steps">
      <div class="row">
        <h2>
          <span class="eng">
            How it works &mdash; Simple as 1, 2, 3
          </span>
          <span class="ita">
            Come funziona &mdash; Semplice come contare
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 steps-box">
          <img class="app-screen js--wp-2" src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone">
        </div>
        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>
              <span class="eng">
                Choose the subscription plan that best fits your needs and sign up today.
              </span>
              <span class="ita">
                Scegli il piano di abbonamento che più ti si addice e registrati subito.
              </span>
            </p>
          </div>
          <div class="works-step">
            <div>2</div>
            <p>
              <span class="eng">
                Order your delicious meal using our mobile app or website. Or you can even call us!
              </span>
              <span class="ita">
                Scegli un piatto delizioso dalla app mobile o dal sito. Puoi anche telefonarci!
              </span>
            </p>
          </div>
          <div class="works-step">
            <div>3</div>
            <p>
              <span class="eng">
                Enjoy your meal after less than 20 minutes. See you the next time!
              </span>
              <span class="ita">
                Goditi il tuo piatto in meno di 20 minuti. Alla prossima volta!
              </span>
            </p>
          </div>
          <a href="#" class="btn-app">
            <img class="eng" src="resources/img/download-app.svg" alt="App Store Button">
            <img class="ita" src="resources/img/download-app.svg" alt="Bottone App Store">
          </a>
          <a href="#" class="btn-app">
            <img class="eng" src="resources/img/download-app-android.png" alt="Play Store Button">
            <img class="ita" src="resources/img/download-app-android.png" alt="Bottone Play Store">
          </a>
        </div>
      </div>
    </section>
    
    <section id="cities" class="section-cities">
      <div class="row">
        <h2>
          <span class="eng">
            We're currently in these cities
          </span>
          <span class="ita">
            Ci trovi nelle seguenti città
          </span>
        </h2>
      </div>
      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img class="eng" src="resources/img/lisbon.jpg" alt="Lisbon">
          <img class="ita" src="resources/img/bergamo.jpg" alt="Bergamo">
          <h3>
            <span class="eng">Lisbon</span>
            <span class="ita">Bergamo</span>
          </h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            <span class="eng">1600+ happy eaters</span>
            <span class="ita">1600+ saziati e felici</span>          
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            <span class="eng">60+ top chefs</span>
            <span class="ita">60+ chef al top</span>          
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">
              <span class="eng">@omnifood_lx</span>
              <span class="ita">@omnifood_bg</span>                      
            </a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img class="eng" src="resources/img/san-francisco.jpg" alt="San Francisco">
          <img class="ita" src="resources/img/milano.jpg" alt="Milano">
          <h3>
            <span class="eng">San Francisco</span>
            <span class="ita">Milano</span>
          </h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            <span class="eng">3700+ happy eaters</span>
            <span class="ita">3700+ saziati e felici</span>          
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            <span class="eng">160+ top chefs</span>
            <span class="ita">160+ chef al top</span>          
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">
              <span class="eng">@omnifood_sf</span>
              <span class="ita">@omnifood_mi</span>          
            </a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img class="eng" src="resources/img/berlin.jpg" alt="Berlin">
          <img class="ita" src="resources/img/roma.jpg" alt="Roma">
          <h3>
            <span class="eng">Berlin</span>
            <span class="ita">Roma</span>
          </h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            <span class="eng">2300+ happy eaters</span>
            <span class="ita">2300+ saziati e felici</span>          
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            <span class="eng">110+ top chefs</span>
            <span class="ita">110+ chef al top</span>          
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">
              <span class="eng">@omnifood_berlin</span>
              <span class="ita">@omnifood_roma</span>          
            </a>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img class="eng" src="resources/img/london.jpg" alt="London">
          <img class="ita" src="resources/img/napoli.jpg" alt="Napoli">
          <h3>
            <span class="eng">London</span>
            <span class="ita">Napoli</span>
          </h3>
          <div class="city-feature">
            <i class="ion-ios-person icon-small"></i>
            <span class="eng">1200+ happy eaters</span>
            <span class="ita">1200+ saziati e felici</span>          
          </div>
          <div class="city-feature">
            <i class="ion-ios-star icon-small"></i>
            <span class="eng">50+ top chefs</span>
            <span class="ita">50+ chef al top</span>          
          </div>
          <div class="city-feature">
            <i class="ion-social-twitter icon-small"></i>
            <a href="#">
              <span class="eng">@omnifood_london</span>
              <span class="ita">@omnifood_napoli</span>          
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-testimonials">
      <div class="row">
        <h2>
          <span class="eng">
            Our customers can't live without us
          </span>
          <span class="ita">
            I nostri clienti non possono vivere senza di noi
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            <span class="eng">Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!</span>
            <span class="ita">Omnifood è semplicemente fantastico! Ho appena creato una startup e non ho tempo nemmeno per cucinare, quindi Omnifood mi ha salvato la vita. Ora che ne faccio uso non potrei più vivere senza i miei buonissimi pranzetti giornalieri!</span>
            <cite><img src="resources/img/customer-1.jpg" alt="Alberto Duncan">Alberto Duncan</cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            <span class="eng">Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!</span>
            <span class="ita">Pranzi economici, salutari e saporitissimi, consegnati direttamente a casa mia. Abbiamo molti servizi di consegna cibo qui a Lisbona, ma nessuno avvicina nemmeno alla lontana Omnifood. Io e la mia famiglia ne siamo innamorati!</span>
            <cite><img src="resources/img/customer-2.jpg" alt="Joana Silva">Joana Silva</cite>
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            <span class="eng">I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!</span>
            <span class="ita">Stavo cercando un servizio di consegna cibo veloce e semplice qui a San Francisco. Ne ho provati molti ed alla fine ho scelto Omnifood. E' il miglior servizio di consegna nella Bay Area. Continuate così!</span>
            <cite><img src="resources/img/customer-3.jpg" alt="Milton Chapman">Milton Chapman</cite>
          </blockquote>
        </div>
      </div>
    </section>
    <section id="plans" class="section-plans js--section-plans">
      <div class="row">
        <h2>
          <span class="eng">
            Start eating healthy today
          </span>
          <span class="ita">
            Comincia subito a mangiar sano
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <div class="plan-box js--wp-4">
            <div>
              <h3>
                Premium
              </h3>
              <p class="plan-price">
                <span class="eng">
                  399$ <span>/ month</span>
                </span>
                <span class="ita">
                  210&euro; <span>/ mese</span>
                </span>
              </p>
              <p class="plan-price-meal">
                <span class="eng">
                  That’s only 13.30$ per meal
                </span>
                <span class="ita">
                  Solo 7&euro; a pasto
                </span>
              </p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    1 meal every day
                  </span>
                  <span class="ita">
                    1 pasto al giorno
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Order 24/7
                  </span>
                  <span class="ita">
                    Ordini 24/7
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Access to newest creations
                  </span>
                  <span class="ita">
                    Accesso a nuove creazioni
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Free delivery
                  </span>
                  <span class="ita">
                    Consegna gratis
                  </span>
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-full">
                <span class="eng">
                Sign up now
                </span>
                <span class="ita">
                Registrati
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>
                Pro
              </h3>
              <p class="plan-price">
                <span class="eng">
                  149$ <span>/ month</span>
                </span>
                <span class="ita">
                  80&euro; <span>/ mese</span>
                </span>
              </p>
              <p class="plan-price-meal">
                <span class="eng">
                  That’s only 14.90$ per meal
                </span>
                <span class="ita">
                  Solo 8&euro; a pasto
                </span>
              </p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    1 meal 10 days/month
                  </span>
                  <span class="ita">
                    10 pasti al mese
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Order 24/7
                  </span>
                  <span class="ita">
                    Ordini 24/7
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Access to newest creations
                  </span>
                  <span class="ita">
                    Accesso a nuove creazioni
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Free delivery
                  </span>
                  <span class="ita">
                    Consegna gratis
                  </span>
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">
                <span class="eng">
                Sign up now
                </span>
                <span class="ita">
                Registrati
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>
                Starter
              </h3>
              <p class="plan-price">
                <span class="eng">
                  19$ <span>/ meal</span>
                </span>
                <span class="ita">
                  10&euro; <span>/ pasto</span>
                </span>
              </p>
              <p class="plan-price-meal">
                <span class="eng">&nbsp;</span>
                <span class="ita">&nbsp;</span>
              </p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    1 meal
                  </span>
                  <span class="ita">
                    1 pasto
                  </span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Order from 8 am to 12 pm
                  </span>
                  <span class="ita">
                    Ordini dalle 8 am alle 12 pm
                  </span>
                </li>
                <li>
                  <i class="ion-ios-close-empty icon-small"></i>
                  <span class="eng"></span>
                  <span class="ita"></span>
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>
                  <span class="eng">
                    Free delivery
                  </span>
                  <span class="ita">
                    Consegna gratis
                  </span>
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">
                <span class="eng">
                Sign up now
                </span>
                <span class="ita">
                Registrati
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="map-box">
      <div class="map"></div> 
      <div class="form-box" id="form">
        <div class="row">
          <h2>
            <span class="eng">
              We're happy to hear from you
            </span>
            <span class="ita">
              Felici di sentirti
            </span>
          </h2>
        </div>
        <div class="row">
          <form method="post" action="mailer.php" class="contact-form">
            <div class="row">
              <?php if($_GET['success'] == 1) {
                  echo "<div class=\"form-messages success\"><span class=\"eng\">Thank you! Your message has been sent.</span>         <span class=\"ita\">Grazie! Il tuo messaggio è stato spedito.</span></div>";
                }
                if($_GET['success'] == -1) {
                  echo "<div class=\"form-messages error\"><span class=\"eng\">Oops! Something went wrong. Please try again!</span>         <span class=\"ita\">Ops! Hai commesso qualche errore. Riprova di nuovo!</span></div>";
                }
              ?>
            </div>
            
            <div class="row">
              <div class="col span-1-of-3">
                <label for="name">
                  <span>
                    Name
                  </span>
                </label>
              </div>
              <div class="col span-2-of-3">
                <input id="name" type="text" name="name" placeholder="Your Name">
              </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label for="email">
                  <span>
                    Email
                  </span>
                </label>
              </div>
              <div class="col span-2-of-3">
                <input id="email" type="email" name="email" placeholder="Your Email">
              </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label>
                  <span>
                    How did you find us?
                  </span>
                </label>
              </div>
              <div class="col span-2-of-3">
                <select name="find-us">
                  <option value="friends" selected>Friends</option>
                  <option value="search">Search engine</option>
                  <option value="ad">Advertisment</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label for="news">
                  <span>
                    Newsletter
                  </span>
                </label>
              </div>
              <div class="col span-2-of-3">
                <input type="checkbox" name="news" id="news" checked>
                <span> Yes, please</span>
              </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label for="message">
                  <span>
                    Drop us a line
                  </span>
                </label>
              </div>
              <div class="col span-2-of-3">
                <textarea id="message" name="message" placeholder="Your message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label>&nbsp;</label>
              </div>
              <div class="col span-2-of-3">
                <input type="submit" value="Send it!" name="submit">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li>
              <a href="#">
                <span class="eng">About us</span>
                <span class="ita">Chi siamo</span>
              </a>
            </li>
            <li>
              <a href="#">
                Blog
              </a>
            </li>
            <li>
              <a href="#">
                <span class="eng">Press</span>
                <span class="ita">Dicono di noi</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="eng">iOS App</span>
                <span class="ita">App iOS</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="eng">Android App</span>
                <span class="ita">App Android</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col span-1-of-2">
          <ul class="social-links">
            <li>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>
          Made with <i class="ion-ios-heart"></i> by Simotae. All rights reserved.
        </p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/respond@1.4.2(respond.min.js+respond.src.js)"></script>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw9_Q1Az6DghnNDzubNgM07ZwfQcF4MI8"></script>
    <script src="resources/js/changeLang-min.js"></script>
    <script src="resources/js/openMobileNav-min.js"></script>
    <script src="resources/js/script-min.js"></script>
    <script src="resources/js/gmaps.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-83657812-13', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>