var work__li;

$(document).ready(function(){
    console.log('Ready');

    $('.btn--burger').click(() => {
        toggleBurger();
    });

});


toggleBurger = () => {
    console.log('Open Burger');
    $('.btn--burger').toggleClass('btn--burger--open');
    $('.navbar').toggleClass('navbar--open');
}
