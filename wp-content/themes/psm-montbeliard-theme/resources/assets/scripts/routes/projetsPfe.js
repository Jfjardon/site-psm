import ScrollMagic from 'scrollmagic/scrollmagic/minified/ScrollMagic.min';
export default {
    init() {

    },
    finalize() {
        /*eslint-disable no-undef*/
        var controllerProjetPFESection = new ScrollMagic.Controller();
        var top_circ_anpfe = $('#top_circ_anpfe'),
            tirets_anpfe = $('#tirets_anpfe'),
            pfe_anpfe = $('#pfe_anpfe path'),
            fusee_anpfe = $('#fusee_anpfe'),
            bottom_circ_anpfe = $('#bottom_circ_anpfe'),
            stars_anpfe = $('#stars_anpfe path');

        var pfe_tl = new TimelineMax();

        $('#projects-page-presentation-section .picture svg').hover(function(){
            TweenLite.set(this, {cursor: "pointer"});
        });

        $('#projects-page-presentation-section .picture svg').click(function () {
            pfe_tl.restart();
        });

        pfe_tl.from([top_circ_anpfe, bottom_circ_anpfe], 1, {opacity:0, y:-100})
            .from(fusee_anpfe, 1, {opacity:0}, 0)
            .from(fusee_anpfe, 2, {x:-500, y:300, ease:Power4.easeOut}, 0)
            .staggerFromTo(stars_anpfe, 0.8, {scale:0, transformOrigin:"center"}, {scale:1, rotation:720}, 0.1, 0.5)
            .staggerFrom(pfe_anpfe, 0.2, {scale:1.3, transformOrigin:"center", opacity:0}, 0.1, 1)
            .from(tirets_anpfe, 0.5, {opacity:0,scale:2, transformOrigin:"center"}, 1.8)
            .to(pfe_anpfe, 0.5, {scale:1.1, transformOrigin:"center", ease:Power1.easeIn}, 1.5)
            .to(pfe_anpfe, 0.5, {scale:1, transformOrigin:"center", ease:Power1.easeOut}, 1.8)

        new ScrollMagic.Scene({
            triggerElement: "#projects-page-presentation-section .picture",
            triggerHook: "0.5",
        })
        //.addIndicators({name: "Rhizome animation", indent: 150}) // add indicators (requires plugin)
            .addTo(controllerProjetPFESection)
            .setTween(pfe_tl);
        /*eslint-enable no-undef*/
    },
};
