$(document).ready(function() {

    /* toggle button script */
    $(".read-more").click(function() {
        $(this).prev().slideToggle();
        if (($(this).text()) == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });

    /* custom selectbox */
    $("#selectWrapper").wrap("<div class='select-wrapper'></div>");
    $(".select-wrapper > ul").before("<span id='selectedOption' class='selected-option'></span>");
    var defaultValue = $("#selectWrapper li").first().attr("value");
    var defaultHtml = $("#selectWrapper li").first().html();
    $("#selectedOption").attr("value", defaultValue).html(defaultHtml);
    $("#selectWrapper li, #selectedOption").click(function() {
        $(this).addClass("selected");
        $(".program-status ul").slideToggle();
        $(".selected-option").toggleClass("rounded-corner dropdown-open").removeClass("selected");
        var selectItem = $(this).html();
        var selectItemVal = $(this).html();
        $("#selectedOption").attr("value", selectItemVal).html(selectItem);
    });

    /* preety photo script*/
    if ($("a[rel^='prettyPhoto']").length != 0) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: "fast",
            slideshow: 10000,
            hideflash: false,
            social_tools: '',
            default_width: "80%",
            allow_resize: true,
            horizontal_padding: 20
        });
    }

    /* dropdown slide change */
    var activeSlide = ".cycle-slide-active";
    var _activeSlideFunction = function() {
        var activeSlideStatus = $(activeSlide).attr("data-project-status");
        var activeSlideLogo = $(activeSlide).attr("data-project-logo");
        var activeSlideLogoStatus = $(activeSlide).attr("data-project-logo-status");
        _changeStatusLogo(activeSlideStatus, activeSlideLogo, activeSlideLogoStatus);
    }

    var _changeStatusLogo = function(slideStatus, slideLogo, slidelogoStatus) {
        $(".program-status .slide-project-status").text(slideStatus);
        $(".project-logo").attr("src", "images/" + slideLogo);
        $(".exec-head-icon p").text(slidelogoStatus);
    }

    $("#selectWrapper li").click(function() {
        var slideNo = parseInt(this.id);
        $("#cycle-slideshow").cycle(slideNo);
        _activeSlideFunction();
        return false;
    });

    $("#cycle-slideshow").on("cycle-update-view", function (e, optionHash, slideOptionsHash, currSlideEl) {
        var slideId = "#" + optionHash.currSlide;
        var slideElement = $(slideId);
        var currentSlideName = $("#selectWrapper").find(slideElement).attr("value");
        $("#selectedOption").text(currentSlideName);
        _activeSlideFunction();
    });

});

$(window).load(function() {
    $("#selectWrapper").mCustomScrollbar();
});
