jQuery(document).ready(function($) {
    $('.list_navigation .nav_list a').each(function() {
        var sectionPrestation = $('.prestations_sections');
        sectionPrestation.hide();
        $(this).on('click', function(e) {
            $('.prestations_sections').removeClass('show');
            $('.list_navigation .nav_list a').removeClass('active');

            e.preventDefault();
            var showSection = $(this).attr('data-section');
            console.log(showSection);

            $(this).addClass('active');

            $('#' + showSection).addClass('show');

        })
    })

    $('.site_type').slick({
        infinite: true
    });
    $('.concept_web').slick({
        infinite: true,
        slidesToShow: 3
    });
    $('.prestation_web').slick({
        infinite: true
    });
    $('.prestation_web').slick({
        infinite: true
    });
});