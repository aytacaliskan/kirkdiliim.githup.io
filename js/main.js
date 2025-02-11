(function ($) {
    "use strict";
    
    $(document).ready(function () {
        /* Mevcut kodlarınız */
        // Dropdown on mouse hover
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown')
                    .on('mouseover', function () {
                        $('.dropdown-toggle', this).trigger('click');
                    })
                    .on('mouseout', function () {
                        $('.dropdown-toggle', this).trigger('click').blur();
                    });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
        
        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
            return false;
        });
        
        // Testimonials carousel
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1500,
            dots: true,
            loop: true,
            items: 1
        });
        
        
        /*--------------------------------------
          Fotoğraf Galerisi İşlevselliği (Modal)
        ---------------------------------------*/
        // Modal elementlerini seçiyoruz
        let modal = document.getElementById("imageModal");
        let modalImg = document.getElementById("modalImage");
        let closeBtn = document.getElementsByClassName("close")[0];
        let galleryImages = document.querySelectorAll(".gallery-img");
        let currentIndex = 0;
        
        // Galerideki her fotoğrafa tıklandığında modalı açıp fotoğrafı gösteriyoruz
        galleryImages.forEach((img, index) => {
            img.addEventListener("click", () => {
                currentIndex = index;
                modal.style.display = "flex"; // Modal "flex" olarak gösterilir
                modalImg.src = img.src;
            });
        });
        
        // Kapatma butonuna tıklandığında modalı kapatıyoruz
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };
        
        // Önceki butonu: önceki fotoğrafı göster
        document.getElementById("prevBtn").onclick = function () {
            currentIndex = (currentIndex === 0) ? galleryImages.length - 1 : currentIndex - 1;
            modalImg.src = galleryImages[currentIndex].src;
        };
        
        // Sonraki butonu: sonraki fotoğrafı göster
        document.getElementById("nextBtn").onclick = function () {
            currentIndex = (currentIndex === galleryImages.length - 1) ? 0 : currentIndex + 1;
            modalImg.src = galleryImages[currentIndex].src;
        };
        
        // Modal dışına tıklandığında modalı kapatıyoruz
        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    });
    
})(jQuery);
