/*
    Created by Goldis
    https://mofi.net.ua
    02.11.2016
    Version: 1.0.0
*/

$.fn.parallax = function () {
    var windowWidth = $(window).width();
    // Parallax Scripts
    return this.each(function(i) {
        var $this = $(this);
        $this.addClass('parallax');

        function updateParallax(initial) {
            var containerHeight;

            if (windowWidth < 601) {
                containerHeight = ($this.height() > 0) ? $this.height() : $this.children("img").height();
            } else {
                containerHeight = ($this.height() > 0) ? $this.height() : 500;
            };

            var $img = $this.children("img").first();
            var imgHeight = $img.height();
            var parallax_dist = imgHeight - containerHeight;
            var bottom = $this.offset().top + containerHeight;
            var top = $this.offset().top;
            var scrollTop = $(window).scrollTop();
            var windowHeight = window.innerHeight;
            var windowBottom = scrollTop + windowHeight;
            var percentScrolled = (windowBottom - top) / (containerHeight + windowHeight);
            var parallax = Math.round((parallax_dist * percentScrolled));

            if (initial) {
                $img.css('display', 'block');
            };

            if ((bottom > scrollTop) && (top < (scrollTop + windowHeight))) {
                $img.css('transform', "translate3D(-50%," + parallax + "px, 0)");
            };

        }

        // Wait for image load
        $this.children("img").one("load", function() {
            updateParallax(true);
        }).each(function() {
            if (this.complete) $(this).trigger("load");
        });

        $(window).scroll(function() {
            windowWidth = $(window).width();
            updateParallax(false);
        });

        $(window).resize(function() {
            windowWidth = $(window).width();
            updateParallax(false);
        });

    });

};