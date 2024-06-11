// this will be useful when I can figure out SPA logic in the htaccess
const router = new Navigo('/bos');
router.on("/", async (match) => {
    $('title').text(`BOS Philly - Bringing Circuit Back to Philly`);

    $("#splash, #charity, #events, #galleries, #models, #djs, #board").show();
    $("#content").hide();
})
.on("/:page", async (match) => {
    console.log(match.data.page);
    $('title').text(`${match.data.page.toTitleCase()} - BOS Philly`);

    $("#splash, #charity, #events, #galleries, #models, #djs, #board").hide();
    $("#content").show();

    let result = await getPages(match.data.page);
    console.log(result);
})
.on("/:page/:name", async (match) => {
    console.log(match.data.page, match.data.name);
    $('title').text(`${match.data.name.toTitleCase()} - BOS Philly`);

    $("#splash, #charity, #events, #galleries, #models, #djs, #board").hide();
    $("#content").show();

    let result = await getPageByName(match.data.page, match.data.name);
    console.log(result);
})
.resolve();