

$(document).ready(() => {
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });

    const card = new Card({
        form: 'form',
        container: '.card-wrapper',

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });


});
