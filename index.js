async function loadTiles() {

    let events = await getPages("events");
    if (events.length) {
        events = events.map(event => {
            return {
                name: event.post_title,
                date: event.fields.date_of_event,
                timestamp: luxon.DateTime.fromMillis(Date.parse(event.fields.date_of_event)),
                url: `events/${event.post_name}`,
                image: event.image
            }
        }).sort(function (a, b) {
            return a.timestamp > b.timestamp ? 1 : a.timestamp < b.timestamp ? -1 : 0;
        });
        let $eventsGrid = $("#events .grid");
        events.each(event => {
            $eventsGrid.append(`<div class="event">
                <a href="${event.url}">
                    <img src="${event.image}" />
                    <h3>${event.name}</h3>
                    <h4>${event.date}</h4>
                    <button>Tickets</button>
                </a>
            </div>`);
        });
    }

    async function tileLoader(url) {
        let pages = await getPages(url);
        if (pages.length) {
            pages = pages.map(page => {
                return {
                    name: page.post_title,
                    url: `${url}/${page.post_name}`,
                    image: page.image || ''
                }
            });
            let $pagesGrid = $(`#${url} .grid`);
            pages.each(page => {
                $pagesGrid.append(`<div class="tile container">
                    <a href="${page.url}">
                        <img src="${page.image}" class="hover" />
                        <div class="overlay"><div class="hover-text">${page.name}</div></div>
                    </a>
                </div>`);
            });
        }
    }
    tileLoader("galleries");
    await tileLoader("models");
    $(`#models .grid`).randomize()
    await tileLoader("djs");
    $(`#djs .grid`).randomize()
}

let hasFired = false;
let increment = 1000;
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});

// TODO: sticky header
/*
$(window).scroll(function() {
    let sticky = $('header'), scroll = $(window).scrollTop();
    if (scroll > 0) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});
*/

$(window).scroll(function () {
    function elementScrolled(elem) {
        let docViewTop = $(window).scrollTop();
        let docViewBottom = docViewTop + $(window).height();
        let elemTop = $(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }
    if (elementScrolled('#charity')) {
        if (hasFired) return;
        let start = Math.round(parseFloat($(".counter").attr("start")), 2);
        let end = Math.round(parseFloat($(".counter").attr("end")), 2);
        $(".counter").text(start);

        let interval = setInterval(function () {
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
        }, 15);
        hasFired = true;
    }
});


// parallax image movement
let currentZoom = 1;
let minZoom = 1;
let maxZoom = 2;
let stepSize = 0.005;
let deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
let mobileScrollDirection = 1;

window.addEventListener('touchstart', function (e) {
    start = e.changedTouches[0];
});
window.addEventListener('touchmove', function (e) {
    let end = e.changedTouches[0];
    mobileScrollDirection = end.screenY - start.screenY > 0 ? -1 : 1
});
['wheel', 'scroll', 'touchmove']
    .forEach(event => document.querySelector('body').addEventListener(event, parallax, false));


function parallax(event) {
    let direction = event.deltaY > 0 ? 1 : -1;
    if (deviceWidth <= 600) direction = mobileScrollDirection;
    zoomImage(direction);
}

function zoomImage(direction) {
    let newZoom = currentZoom + direction * stepSize;
    if (newZoom < minZoom || newZoom > maxZoom) {
        return;
    }
    currentZoom = newZoom;
    let image = document.querySelector('#parallax');
    image.style.transform = 'scale(' + currentZoom + ')';
}

function scrollTo(element, to, duration) {
    const start = element.scrollTop;
    const change = to - start;
    const increment = 20;

    let currentTime = 0;

    const animateScroll = function () {
        currentTime += increment;
        const val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

Math.easeInOutQuad = function (t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
};

$(() => {
    $.ajaxSetup({ cache: false });
    $("#splash video").width($("#splash").width());
    loadTiles();

    // hide and show the menu on mobile
    $("#mobileToggle").click(() => $("nav ul").slideToggle());
});



