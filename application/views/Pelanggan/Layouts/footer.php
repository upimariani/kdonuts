<!-- Footer Section Begin -->
<footer class="footer spad">

</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/mixitup.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/main.js"></script>
<!-- <script type="text/javascript" src="<?= base_url('asset/rating/') ?>js/jquery.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('asset/rating/') ?>js/star-rating.js"></script>
<script type="text/javascript" src="<?= base_url('asset/rating/') ?>js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var $inp = $('.rating-input');
        $inp.rating({
            min: 0,
            max: 5,
            step: 1,
            size: 'sm',
            showClear: false
        });
    });
</script>
<script>
    console.log = function() {}
    $("#ongkir").on('change', function() {
        $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
        $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

        $(".total").html($(this).find(':selected').attr('data-total'));
        $(".total").val($(this).find(':selected').attr('data-total'));

        $(".price").html($(this).find(':selected').attr('data-price'));
        $(".price").val($(this).find(':selected').attr('data-price'));

    });
</script>

</body>

</html>