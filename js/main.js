jQuery(document).ready(function($) {
    var $secondaryNav = $('.cd-secondary-nav'),
        secondaryNavTopPosition = $secondaryNav.offset().top,
        taglineOffsetTop = $('#cd-intro-tagline').offset().top + $('#cd-intro-tagline').height() + parseInt($('#cd-intro-tagline').css('paddingTop')),
        $contentSections = $('.cd-section'),
        $bodyHtml = $('body, html');

    // Scroll event
    $(window).on('scroll', function() {
        var scrollTop = $(window).scrollTop();
        
        // Hide logo and button on scroll past tagline
        $('#cd-logo, .cd-btn').toggleClass('is-hidden', scrollTop > taglineOffsetTop);

        // Fix secondary navigation
        if (scrollTop > secondaryNavTopPosition) {
            $secondaryNav.addClass('is-fixed');
            $('.cd-main-content').addClass('has-top-margin');
            setTimeout(function() {
                $secondaryNav.addClass('animate-children');
                $('#cd-logo, .cd-btn').addClass('slide-in');
            }, 50);
        } else {
            $secondaryNav.removeClass('is-fixed animate-children');
            $('.cd-main-content').removeClass('has-top-margin');
            $('#cd-logo, .cd-btn').removeClass('slide-in');
        }

        // Update active link in secondary navigation
        updateSecondaryNavigation(scrollTop);
    });

    // Update active link
    function updateSecondaryNavigation(scrollTop) {
        $contentSections.each(function() {
            var $section = $(this),
                sectionHeight = $section.outerHeight(),
                sectionTop = $section.offset().top,
                $anchor = $secondaryNav.find('a[href="#' + $section.attr('id') + '"]');

            $anchor.toggleClass('active', scrollTop + $(window).height() > sectionTop && scrollTop < sectionTop + sectionHeight);
        });
    }

    // Mobile menu toggle
    $('.cd-secondary-nav-trigger').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('menu-is-open');
        $secondaryNav.find('ul').toggleClass('is-visible');
    });

    // Smooth scrolling on secondary nav links
    $secondaryNav.find('ul a').on('click', function(event) {
        event.preventDefault();
        var target = $(this.hash);
        $bodyHtml.animate({
            scrollTop: target.offset().top - $secondaryNav.height() + 1
        }, 400);
        // Close mobile menu
        $('.cd-secondary-nav-trigger').removeClass('menu-is-open');
        $secondaryNav.find('ul').removeClass('is-visible');
    });

    // Primary navigation toggle (mobile)
    $('.cd-primary-nav').on('click', function(event) {
        if ($(event.target).is('.cd-primary-nav')) {
            $(this).children('ul').toggleClass('is-visible');
        }
    });
});
