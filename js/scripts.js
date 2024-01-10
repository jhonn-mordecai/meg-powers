$(function() {
    
    // Collapsible Main Menu
    $('a.menu-toggle').on('click', function(e) {
        e.preventDefault();
        
        let icon = $(this).find('i');
        let hiddenNav = $(this).parent().next('ul.nav');
        
        hiddenNav.toggleClass('expanded');
        icon.toggleClass('rotate-90'); 

        hiddenNav.hasClass('expanded') ? $(this).attr('aria-expanded', true) : $(this).attr('aria-expanded', false);
    });

    // Gallery Modal
    let galleryModal = $('#galleryModal');
    let modalImg = $('#modal_img');
    let modalCaption = $('.modal-caption-info');

    $('.gallery-thumbnail').on('click', function(e){
        e.preventDefault();

        let img = $(this).find('img');

        let imgSrc = img.attr('src');
        let altText = img.attr('alt');
        let caption = img.data('info');
        let refLink = $(this).next('.ref-link');

        modalImg.attr('src', imgSrc);
        modalImg.attr('alt', altText);
        modalCaption.text(caption);

        if (refLink.length) {
            let linkUrl = refLink.html();
            $('.link-url').html(`
                <a href="${linkUrl}" title="Open in new window" target="_blank">${linkUrl}</a>
            `);
        }

        galleryModal.modal('show');
    });

    $(galleryModal).on('hidden.bs.modal', function(){
        modalImg.attr('src', '');
        modalImg.attr('alt', '');
        modalCaption.text('');
        $('.link-url').html('');
    });


    $('.tab-btn').on('click', function(e){
        e.preventDefault();

        let id = $(this).attr('id');
        let target = '#'+id;

        if ( $(this).hasClass('active') ) {
            return false;
        } else {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');

            $('.project-gallery').fadeOut();
            $(target+'.project-gallery').css('display', 'grid').fadeIn();
        }


    });


});

$(document).keyup(function(e) {
    if (e.keyCode == 27) { 
       $('ul.nav').removeClass('expanded');
       $('a.menu-toggle').attr('aria-expanded', false);
       $('a.menu-toggle').find('i').removeClass('rotate-90');
   }
});