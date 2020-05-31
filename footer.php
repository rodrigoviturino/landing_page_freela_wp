<footer class="footer">
    <div class="container">
        <ul>
            <li>
                <a href="#">&copy; Todos os direitos reservados.</a>
            </li>

            <li>
                <a href="#"></a>
            </li>

            <li>
                <a href="#">Desenvolvido por Rodrigo Viturino</a>
            </li>
        </ul>
    </div>
    
</footer>
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<script>
  let swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>

<?php wp_footer(); ?>
</body>
</html>