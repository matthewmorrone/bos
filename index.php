<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=.9, viewport-fit=cover">
<title>BOS Philly - Bringing Circuit Back to Philly</title>
<script> window.addEventListener('scroll', () => { document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight)); }, false); </script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/page.js/1.11.6/page.js"></script>
<!-- https://github.com/visionmedia/page.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
<link rel="icon" href="https://bosphilly.com/wp-content/uploads/2022/08/android-chrome-512x512-1-75x75.png" sizes="32x32">
<link rel="icon" href="https://bosphilly.com/wp-content/uploads/2022/08/android-chrome-512x512-1-300x300.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://bosphilly.com/wp-content/uploads/2022/08/android-chrome-512x512-1-300x300.png">
<meta name="msapplication-TileImage" content="https://bosphilly.com/wp-content/uploads/2022/08/android-chrome-512x512-1-300x300.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
::-webkit-scrollbar {
    display: none;
}
html {
    scroll-behavior: smooth;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    width: 100%;
    height: 100%;
    background-color: #04051A;
}
a {
    text-decoration: none;
}
header {
    background-image: url("img/backgrounds/header.webp");
    height: 100px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    border-bottom: 1px solid #ed208b;
}
#logo {
    width: 120px;
    height: 70px;
    margin-top: 15px;
    margin-left: 150px;
}
nav {
    margin-top: 15px;
    text-align: center;
    float: right;
    margin-right: 300px;
    display: inline;
    font-family: "Teko", Sans-serif;
    font-size: 25px;
    font-weight: 700;
}
nav a {
    color: white;
}
nav ul {
    display: inline-block;
    list-style-type: none;
    padding: 0;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
nav ul li:not(:last-child):after {
    content: '|';
    color: #ed208b;
    margin-left: 20px;
    font-size: 15px;
    vertical-align: middle;
}
.social {
    background-color: #ed208b;
    font-size: 15px;
    display: inline-block; 
    width: 30px; 
    height: 30px; 
    border-radius: 50%;
    vertical-align: middle;
}
.social i {
    vertical-align: middle;
    margin-top: 7px;
}
h2 {
    padding: 20px !important;
    color: white;
    font-family: "Teko", Sans-serif;
    text-align: center;
    font-size: 72px;
}
h2, p {
    text-align: center;
}
section {
    box-sizing: border-box;
    border-bottom: 2px solid #ed208b;
}
.splash {
    margin-top: 100px;
    border-bottom: 2px solid #ed208b;
}
.splash iframe {
    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 100vh;
}
.splash-title {
    position: absolute;
    text-align: center;
    width: 100%;
}
.splash-title h1 {
    color: #ED208B;
    font-family: "Teko", Sans-serif;
    font-size: 153px;
    font-weight: 600;
    line-height: 0.8em;
    margin-top: 300px;
}
.splash-title p {
    color: white;
    font-family: "Teko", Sans-serif;
    font-size: 37px;
    font-weight: 600;
    letter-spacing: 1.3px;
    margin-top: 0px;
}
.charity {
    height: 232px !important;
    color: white;
    font-family: "Teko", Sans-serif;
    text-align: center;
    overflow: hidden;
}
#parallax {
    height: 232px;
    width: 100%;
    background-image: url("img/backgrounds/charity-parallax.png");
    background-position: center;
    background-size: cover;
    position: relative;
    top: -200px;
    left: 0px;
    z-index: -1;
    zoom: 175%;    
}
.charity h2 {
    margin: 0px;
    padding-top: 50px;
    font-size: 69px;
    font-weight: 600;
}
.charity p {
    font-size: 19px;
}
.events {

}
.events .grid {
    width: 90%;
    margin: auto !important;
}
.event {
    border: 1px solid white;
    /* border-radius: 30px; */
    margin: 25px;
    text-align: center;
}
.event img {
    margin: auto;
    display: block;
}
.events h3 {
    font-size: 53px;
    color: white;
    font-family: "Teko", Sans-serif;
    text-align: center;
}
.events h4 {
    color: white;
    text-align: center;
    margin-top: 0px;
    margin-bottom: 0px;
}
.event span {
    color: white;
    float: right;
}
.events .button {
    display: block;
    background-color: #ED208B;
    color: white;
    border-radius: 5px;
    width: 100px;
    height: 25px;
    vertical-align: middle;
    text-align: center;
    font-family: 'Work Sans', sans-serif;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
}
.event .button:link {
    color: white !important;
}
.photos {
}
.models {
}
.djs {
}
.about {
}

#partners h2 {
    background-image: url("img/backgrounds/partners.svg");
    text-align: left;
    letter-spacing: 3px;
    background-position: bottom center;
    background-size: cover;
}
#partners-grid {
    width: 80%;
    margin: auto !important;
}
#partners .column img {
    width: 200px;
    vertical-align: middle;
}

footer {
    height: 50%;
    background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url("img/backgrounds/footer.webp");
    background-position: center;
    background-size: cover;
    box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);

}
</style>
</head>
<body>
<header>
    <a href="http://bosphilly.com">
        <img id="logo" fetchpriority="high" width="1024" height="620" src="https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988-1024x620.png" class="attachment-large size-large wp-image-152" alt="BOS Logo" srcset="https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988-1024x620.png 1024w, https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988-300x182.png 300w, https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988-768x465.png 768w, https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988-1536x930.png 1536w, https://bosphilly.com/wp-content/uploads/2021/03/162528690_3841567515927956_3033548685814258535_n-2-e1616116421988.png 1982w" sizes="(max-width: 1024px) 100vw, 1024px">								
    </a>
    <nav>
        <ul>
            <li><a href="#events">Events</a></li>
            <li><a href="#photos">Photos</a></li>
            <li><a href="#models">Ambassadors</a></li>
            <li><a href="#djs">DJs</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <span>
            <a class='social' href="http://facebook.com/bosphilly" target="_blank"><i class="fab fa-facebook"></i></a>
            <a class='social' href="http://instagram.com/bosphilly" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class='social' href="mailto:info@bosphilly.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a class='social' href="https://soundcloud.com/bos-philly" target="_blank"><i class="fab fa-soundcloud"></i></a>
        </span>
    </nav>
</header>
<section id="splash" class="splash">
    <div class="splash-title">
        <h1>BOS PHILLY</h1>		
        <p>Bringing Circuit back to Philly!</p>
	</div>
    <iframe autoplay=1 frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Jungle Aftermovie 1"></iframe>
    <!-- src="https://www.youtube.com/embed/63ywvGq_OhY?controls=0&rel=0&playsinline=1&enablejsapi=1&origin=https://bosphilly.com&widgetid=1&autoplay=1" -->
</section>

<section id="charity" class="charity">
    <h2>$<span class="counter" start="0.00" end="75430.37"></span></h2>
    <p class="counter-title">Donated to local LGBT Charities since 2018</p>
    <img id='parallax' />
</section>

<section id="events" class="events">
    <h2>Events</h2>
    <div class="ui equal width relaxed centered grid">  
        <div class="column event">
            <img width="1024" height="299" src="img/events/opulence-banner.png"/>
            <span>Philly Pride June 1, 2024! Click for details…</span>
        </div>
        <div class="column row">
            <div class="column event">
                <img src="img/events/force.webp" />
                <h3>The Force</h3>
                <h4>May 4, 2024</h4>
                <h4>DJ Joshua Ruiz</h4>
                <a class='button' href="https://bosphilly.com/force/">Tickets</a>
            </div>
            <div class="column event">
                <img src="img/events/opulence-poster.jpg" />
                <h3>Opulence</h3>
                <h4>June 1, 2024</h4>
                <h4>DJ Alex Acosta</h4>
                <a class='button' href="https://bosphilly.com/opulence/">Tickets</a>
            </div>
            <div class="column event">
                <img src="img/events/tba.png" />
                <h3>TBA</h3>
                <h4>June 23, 2024</h4>
                <a class='button' href="https://bosphilly.com/tba/">Tickets</a>
            </div>
        </div>
        <div class="column row">
            <div class="column event">
                <img src="img/events/tba.png" />
                <h3>TBA</h3>
                <h4>July 20, 2024</h4>
                <a class='button' href="https://bosphilly.com/tba-2/">Tickets</a>
            </div>
            <div class="column event">
                <img src="img/events/tba.png" />
                <h3>TBA</h3>
                <h4>July 28, 2024</h4>
                <a class='button' href="https://bosphilly.com/tba-3/">Tickets</a>
            </div>
            <div class="column event">
                <img src="img/events/tba.png" />
                <h3>TBA</h3>
                <h4>September 1, 2024</h4>
                <a class='button' href="https://bosphilly.com/tba-4/">Tickets</a>
            </div>
        </div>
        <div class="column row">
            <div class="column event">
                <img src="img/events/tba.png" />
                <h3>OUTFest</h3>
                <h4>October 12, 2024</h4>
                <a class='button' href="https://bosphilly.com/outfest/">Tickets</a>
            </div>
            <div class="column event"></div>
            <div class="column event"></div>
        </div>
    </div>
    <a class='button' href="https://bosphilly.com/events/">More Events</a>
</section>

<section id="photos" class="photos">
    <h2>Photos</h2>
</section>

<section id="models" class="models">
    <h2>Ambassadors</h2>
</section>

<section id="djs" class="djs">
    <h2>DJs</h2>
</section>

<section id="about" class="about">
    <h2>About Us</h2>
</section>

<section id="partners" class="partners">
    <h2>Partners:</h2>
    <div id="partners-grid" class="ui equal width relaxed centered grid">
        <div class="column row">
            <div class="column"><a href="https://circuitmom.com/"><img style="width: 100px;" src="img/partners/circuit-mom.png" /></a></div>
            <div class="column"><a href="https://www.waygay.org/"><img src="img/partners/william-way.png" /></a></div>
            <div class="column"><a href="https://www.andrewchristian.com/"><img src="img/partners/andrew-christian.png" /></a></div>
            <div class="column"><a href="https://heymistr.com/"><img src="img/partners/mistr.png" /></a></div>
        </div>
        <div class="column row">
            <div class="column"><a href="https://www.instagram.com/alexanderjohnphoto/?hl=en"><img src="img/partners/alexander-john.png" /></a></div>
            <div class="column"><a href="https://cherryfund.org/"><img src="img/partners/the-cherry-fund.png" /></a></div>
            <div class="column"><a href="https://www.marriott.com/en-us/hotels/phlcc-fairfield-inn-and-suites-philadelphia-downtown-center-city/overview/"><img src="img/partners/fairfield-marriott.png" /></a></div>
            <div class="column"><a href="https://www.sickening.events/"><img src="img/partners/sickening-events.png" /></a></div>
        </div>
    </div>
</section>

<footer>
</footer>

<script>
Object.defineProperty(Object.prototype, "define", {
    configurable: true,
    enumerable: false,
    writable: true,
    value: function(name, value) {
        if (Object[name]) {
            delete Object[name];
        }
        Object.defineProperty(this, name, {
            configurable: true,
            enumerable: false,
            writable: true,
            value: value
        });
        return this;
    }
});


Math.define("nativeRound", Math.round)
Math.define("round", function(i, n) {
    return +i.toFixed(n);
});

let hasFired = false;
let increment = 1000;
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});
$(window).scroll(function() {
    let hT = $('#charity').offset().top,
        hH = $('#charity').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT+hH-wH)) {
        if (hasFired) return;
        let start = Math.round(parseFloat($(".counter").attr("start")), 2);
        let end = Math.round(parseFloat($(".counter").attr("end")), 2);
        $(".counter").text(start);
        
        let interval = setInterval(function() {
            let value = Math.round(parseFloat($(".counter").text()), 2);
            if (value + increment < end) {
                value += increment;
                $(".counter").text(Math.round(value, 2));
            }
            else if (increment > .001) {
                increment /= 10;
            }
            else {
                clearInterval(interval);
            }
        }, 10)
        hasFired = true;
    }
});

let currentZoom = 1.5; 
let minZoom = 1; 
let maxZoom = 2; 
let stepSize = 0.01;

  
$('body')[0].addEventListener('wheel', function(event) { 
    let direction = event.deltaY > 0 ? -1 : 1; 
    zoomImage(direction); 
});

function zoomImage(direction) { 
    let newZoom = currentZoom + direction * stepSize; 
  
    if (newZoom < minZoom || newZoom > maxZoom) { 
        return; 
    } 
  
    currentZoom = newZoom;
  
    let image = document.querySelector('#parallax'); 
    image.style.transform = 'scale(' + currentZoom + ')'; 
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        const offsetTop = target.offsetTop;

        scrollTo(document.documentElement, offsetTop, 600);
    });
});

function scrollTo(element, to, duration) {
    const start = element.scrollTop;
    const change = to - start;
    const increment = 20;

    let currentTime = 0;

    const animateScroll = function() {
        currentTime += increment;
        const val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

Math.easeInOutQuad = function(t, b, c, d) {
    t /= d/2;
    if (t < 1) return c/2*t*t + b;
    t--;
    return -c/2 * (t*(t-2) - 1) + b;
};
</script>
</body>
</html>
