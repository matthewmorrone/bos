function query() {
    let qs = {}, slice = 1;
    if (window.location.pathname.startsWith("/bos")) slice = 2;
    let [page, name] = [...window.location.pathname.split("/").slice(slice)]
    qs.page = page, qs.name = name;
    return qs;
}
let qs = query();
$(async () => {
    if (qs.page && qs.name) {
        $("title").text(`${qs.name} - BOS Philly`);
        let result = await getPageByName(qs.page, qs.name);
        console.log(result);
    }
    else if (qs.page) {
        $("title").text(`${qs.page} - BOS Philly`);
        $("#content").html(`<section id="${qs.page}" load></section>`);
    }
});

async function load(page) {
    return fetch(`pages/${page}.html`)
        .then(response => response.text())
}

$("[load]").each(async (i, el) => {
    let page = $(el).attr("id");
    let response = await load(page);
    document.querySelector(`#${page}`).outerHTML = response;
});


