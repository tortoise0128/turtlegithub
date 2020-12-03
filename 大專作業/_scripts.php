
<script src="lib/jquery-3.5.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> 

<!-- 刪除提醒小視窗 -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<!-- 以下是input type="radio" 改顏色 -->
<script src="jQuery-TWzipcode-master/jquery.twzipcode.js"></script>
<script src="jQuery-TWzipcode-master/jquery.twzipcode.min.js"></script>
<script src="jQuery-TWzipcode-master/twzipcode.js"></script>


<script src="jRange/jquery.range.js"></script>

<!-- listjs -->
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>


<!-- lettering.js v0.7.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<!-- Textillate.js v0.4.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.ui.js'></script>

<!-- 課程內頁 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<!-- countNum -->
<script>
    const cartCount = $('.cart-count')

    $.get('handle-cart-api.php', function(data){
        setCartCount(data);
    },'json')

    function setCartCount(data){
        let count = 0;
        if(data && data.cart && data.cart.length){
            for(let i in data.cart){
                let item = data.cart[i];
                count += item.quantity;
            }
            cartCount.text(count);
        }
    }

</script>