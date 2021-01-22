<div class="d-block d-md-none" id="is_mobile"></div>
<div class="d-none d-lg-block" id="is_desktop"></div>
<div class="is-header-mobile d-none d-xl-block"></div>
<div id="fb-root"></div>
<script data-footer="" src="<?= base_url('footer/footer9078.js?theme=4&amp;language=pt-br&amp;local=body&amp;fa=5') ?>" type="text/javascript"></script>
<script src="<?= base_url('static/CACHE/js/b62a7e0a97e2.js') ?>" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        Base.init();
    });
</script>
<script>
    News.init();
</script>
<script>
    window.addEventListener('load', function() {
        $('.lazy-banner').each(function(item) {
            $(this).attr('style', 'background-image:' + $(this).attr('data-lazy-bg'));
        });
    });
</script>
<script src="<?= base_url('static/js/slick.min-1.8.js') ?>"></script>
<script>
    Carousel.banner();
</script>
<script>
    Carousel.gm_recommends();
</script>
<script>
    SwitchRankHome.init();
</script>
<script src="<?= base_url('static/js/superclamp-0.1.5.js') ?>"></script>
<script>
    $('.clamp').clamp();
</script>