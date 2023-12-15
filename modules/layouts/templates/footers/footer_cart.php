<script>
    AddToCartModalContent = window.AddToCartModalContent || function (title) {
        var html = ''
            + '<section style="text-align: center;">'
            + '<h5>' + title + '</h5>'
            + '<p><?php _ejs("has been added to your cart"); ?>