<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    // --------------購物清單檢視--------------------
    $(".dropdown").click(function() {
        $(".dropdown-menu").toggleClass("active")
    })
    // ---------------購物車的東西-----------------------------
    const cart_count = $('.cart-count'); // span tag
    const cart_short_list = $('.cart-short-list');

    $.get('thandlecart.php', function(data) {
        setCartCount(data);
    }, 'json');

    function setCartCount(data) {
        let count = 0;
        cart_short_list.empty();
        if (data && data.cart && data.cart.length) {
            for (let i in data.cart) {
                let item = data.cart[i];
                count += item.quantity;
                cart_short_list.append(`。<a class="dropdown-item" href="#">${item.flowername} -<span style="color: red;"> ${item.quantity} </span>-</a>`)
            }
            cart_count.text(count);
        }
    }
</script>