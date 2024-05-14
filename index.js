async function loadTiles() {
    let photos = await $get("events.csv");
    photos = photos.trim().split("\n").map(line => line.split(","));
    let $photosGrid = $("#photos .grid");
    photos.each(photo => {
        let [event, url, image] = [...photo]
        $photosGrid.append(`<div class="tile container">
            <a href="${url}">
                <img src="${image}" class="hover" />
                <div class="overlay"><div class="hover-text">${event}</div></div>
            </a>
        </div>`);
    });

    let models = await $get("models.csv");
    models = models.trim().split("\n").map(line => line.split(","));
    let $modelGrid = $("#models .grid");
    models.each(model => {
        let [event, url, image] = [...model]
        $modelGrid.append(`<div class="tile container">
            <a href="${url}">
                <img src="${image}" class="hover" />
                <div class="overlay"><div class="hover-text">${event}</div></div>
            </a>
        </div>`);
    });

    let djs = await $get("djs.csv");
    djs = djs.trim().split("\n").map(line => line.split(","));
    let $djGrid = $("#djs .grid");
    djs.each(dj => {
        let [event, url, image] = [...dj]
        $djGrid.append(`<div class="tile container">
            <a href="${url}">
                <img src="${image}" class="hover" />
                <div class="overlay"><div class="hover-text">${event}</div></div>
            </a>
        </div>`);
    });
}

let hasFired = false;
let increment = 1000;
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});
$(window).scroll(function() {
    // sticky header
    let sticky = $('header'), scroll = $(window).scrollTop();
    if (scroll > 0) sticky.addClass('fixed');
    else sticky.removeClass('fixed');

    // charity counter animation
    let hT = $('#charity').offset().top,
        hH = $('#charity').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT + hH - wH)) {
        if (hasFired) return;
        let start = Math.round(parseFloat($(".counter").attr("start")), 2);
        let current = Math.round(parseFloat($(".counter").attr("current")), 2);
        let end = Math.round(parseFloat($(".counter").attr("end")), 2);
        $(".counter").text(start);

        let interval = setInterval(function() {
            let value = Math.round(parseFloat($(".counter").attr("current")), 2);
            if (value + increment <= end) {
                value += increment;
                $(".counter").attr("current", Math.round(value, 2));
                $(".counter").text(USDollar.format($(".counter").attr("current")))
            }
            else if (increment > .001) {
                increment /= 10;
            }
            else {
                clearInterval(interval);
            }
        }, 15)
        hasFired = true;
    }
}).scroll();

// parallax image movement
let currentZoom = 1;
let minZoom = 1;
let maxZoom = 2;
let stepSize = 0.005;
let deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
alert(deviceWidth)
let mobileScrollDirection = 1;

window.addEventListener('touchstart', function(e) {
    start = e.changedTouches[0];
});
window.addEventListener('touchmove', function(e) {
    let end = e.changedTouches[0];
    mobileScrollDirection = end.screenY - start.screenY > 0 ? -1 : 1
});

function parallax(event) {
    let direction = event.deltaY > 0 ? 1 : -1;
    if (deviceWidth <= 600) direction = mobileScrollDirection;
    zoomImage(direction);
}
['wheel', 'scroll', 'touchmove']
    .forEach(event => document.querySelector('body').addEventListener(event, parallax, false));

function zoomImage(direction) {
    let newZoom = currentZoom + direction * stepSize;
    if (newZoom < minZoom || newZoom > maxZoom) {
        return;
    }
    currentZoom = newZoom;
    let image = document.querySelector('#parallax');
    image.style.transform = 'scale(' + currentZoom + ')';
}

// smooth scroll when clicking header links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const offsetTop = target.offsetTop - $("header").height();
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
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
};

$(() => {
    $.ajaxSetup({cache: false});
    $("#splash video").width($("#splash").width());
    loadTiles();

    // hide and show the menu on mobile
    $("#mobileToggle").click(() => $("nav ul").slideToggle());
});

