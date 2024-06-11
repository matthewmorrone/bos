async function getPages(action) {
    let result;
    try {
        result = await $.ajax({
            url: 'wp.php',
            type: 'POST',
            dataType: "json",
            data: {
                action: action
            }
        });
    }
    catch (error) {
        console.error(error);
    }
    return result;
}
async function getPageById(action, id) {
    let result;
    try {
        result = await $.ajax({
            url: 'wp.php',
            type: 'POST',
            dataType: "json",
            data: {
                action: action,
                id: id
            }
        });
    }
    catch (error) {
        console.error(error);
    }
    return result;
}
async function getPageByName(action, name) {
    let result;
    try {
        result = await $.ajax({
            url: 'wp.php',
            type: 'POST',
            dataType: "json",
            data: {
                action: action,
                name: name
            }
        });
    }
    catch (error) {
        console.error(error);
    }
    return result;
}