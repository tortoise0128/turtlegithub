<?php include __DIR__. "/_connect_db.php"?>

<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/shopping_Cart_Css.php"?>



<body>
    <!-- 01 -->
    <header class="shopping_header">
        <div class="logo_img"> 
            <div class="logoImgBlock">
                <img src="img/logoblack.png" alt="">
            </div>
            <div class="title">
                <h4 class="title_txet"><i class="fas fa-caret-right"></i> SHOPPING CART</h4>
                <h4 class="title_txet check">CHECK ORDER</h4>
                <h4 class="title_txet orser">ORDER COMPLETE</h4>
            </div>
        </div>
   <!-- 02 -->
        <div id="content">
            <div class="back_to_store">
                <a href="<?= WEB_ROOT ?>/product.php"><i class="fas fa-angle-left"></i> BACK TO STORE</a>
            </div>
            <?php if (empty($_SESSION['cart'])) : ?>
                <div>
                    <ul class="cart-empty">
                        <li><img src="img/Cart/cart-empty.png" alt=""></li>
                        <li class="clickMeBack"><a href="<?= WEB_ROOT ?>/product.php">購物車內沒有商品!<br>
                            點我回商品頁!
                        </a></li>
                    </ul>
                </div>
            <?php else: ?>
                <div id="content_two">
                    <div class="content_title">
                        <div class="title_item">
                            <h5 class="size_text">Item</h5>
                        </div>
                        <div class="title_project">
                            <h5 class="size_text2">Size</h5>
                            <h5 class="size_text2">Quantity</h5>
                            <h5 class="size_text2">Price</h5>
                            <i class="fas fa-trash-alt size_text2"></i>
                        </div>
                    </div>
                    <div class="content_scrollbar" id="scrollbar_style">
                        <div class="content_commodity">
                            
                        <?php foreach($_SESSION['cart'] as $i) :?>

                            <div class="content_one"
                                data-sid = "<?= $i['sid'] ?>"
                                data-name = "<?= $i['name']?>"
                                data-img = "<?= $i['img_small'] ?>"
                                data-size = "<?= $i['size'] ?>"
                                data-flower = "<?= $i['flower'] ?>"
                                data-price = "<?= $i['price'] ?>"
                                data-quantity = "<?= $i['quantity'] ?>"
                                data-intro = "<?= $i['intro']?>">


                                <figure class="commodity_img">
                                    <img src="img/small/<?= $i['img_small'] ?>-1.jpg">
                                </figure>
                                <div class="content_text_all">
                                <div class="content_text">
                                    <div><?= $i['name'] ?></div>
                                    <div><?= rand(1000,9999).- $i['sid'] ?></div>
                                    <br>
                                    <div><?= $i['flower'] ?></div>
                                </div>
                                </div>
                                <div class="content_project">
                                    <div class="content_size">
                                        <div><?= $i['size'] ?></div>
                                    </div>
                                    <div class="quantity npd-form-counter">
                                        <span class="input-number-decrement npd-form-counter-btn" data-type="reduce" type="number"> - </span>
                                        
                                            <input class="input-number npd-form-counter-quantity" type="text" value="<?= $i['quantity']?>" name="npd-activity-Quantity">
                                        
                                        <span class="input-number-increment npd-form-counter-btn" data-type="plus" type="number"> + </span>
                                    </div>
                                    <div class="content_price">
                                        <div class="price"></div>
                                    </div>
                                </div>
                                <div class="content_times remove-item">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>

                        <?php endforeach; ?>

                        </div>
                        <!--  -->
                        
                    </div>  
                </div>
            <?php endif;?>    
        </div>
    </header>
    <!-- 03 -->
    <div class="content_right">
        <div class="detail">
            
            <h2 class="shop_money">商品內容：</h2>

            <?php if (empty($_SESSION['cart'])) : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            購物車內沒有商品!
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="detail_scrollbar" id="detail_scrollbar">

                <?php foreach($_SESSION['cart'] as $i) :?>
                    <div class="projDetail" id="projDetail<?= $i['sid'] ?>">
                        <div class="detail_project">
                            <div><?= $i['name'] ?></div>
                            <div class="perProj">NT.<?= $i['price'] ?>/每組</div>
                        </div>
                        <div class="detail_project">
                            <div><?= $i['flower'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
                <div class="datail_border"></div>
                <div class="datail_name_next">
                    <div class="datail_name">
                        <div>共<span class="cart-count">0</span>件/商品金額總計：<span id="total-price"></span></div>
                    </div>
                </div>
                <?php if (isset($_SESSION['member'])) : ?>
                    <a type="button" class="datail_next" role="button" href="<?= WEB_ROOT ?>/shopping_CheckOrder.php">下一步</a>
                <?php else: ?>
                    <a type="button" class="toMember" role="button" href="member-login.php">
                        請先登入在結帳
                    </a>
                <?php endif;?>
            <?php endif; ?>
        </div>
        
    </div>
    

    <?php include __DIR__. "/_scripts.php"?>

    <script>
    $('.fa-trash-alt').click(function(){
        Swal.fire({
            title: '確定要刪除此商品嗎?',
            icon: 'warning',
            showCancelButton: true,
            showCloseButton:true,
            confirmButtonColor: '#F2B46D',
            cancelButtonColor: '#707070',
            confirmButtonText: '確 定',
            cancelButtonText: '取 消'
            }).then((result) => {
            if (result.value) {
                const p_item = $(this).closest('.content_one');
                const sid = p_item.attr('data-sid');
                $.get('handle-cart-api.php',{action: 'remove', sid:sid }, function(data){

                    setCartCount(data);
                    p_item.remove();
                    prepareCartTable();
                    $('#projDetail'+sid).remove();
                },'json');

                Swal.fire(
                'Deleted!',
                '已成功刪除此商品.',
                'success',
                
                )
            }
        })
    });

        

    $(".npd-form-counter-btn").on("click",function(){
        let row=$(this).closest(".npd-form-counter");
        let qty=parseInt(row.find(".npd-form-counter-quantity").val());
    //   console.log(qty)
    if($(this).data("type")=="plus"){
        qty++
        if(qty>99)qty=99;
    }else{
        qty--;
        if(qty<1)qty=1;
    }
    row.find(".npd-form-counter-quantity").val(qty)
    row.find(".npd-form-counter-quantity").change();

      let total=0;
      $(".npd-form-group").each(function(){

        let price=$(this).find(".npd-form-price").text();
        let amt=$(this).find(".npd-form-counter-quantity").val();
        let subtotal=amt*price;
        
        total += subtotal;
        $(".npd-form-subprice").text(total)
      })
    });




// -----三碼加 , ----
    const dallorCommas = function(n){
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };

// ----------------

    function prepareCartTable(){
        $p_items = $('.content_one');

        if (! $p_items.length && $('#total-price').length){
            location.reload();
            return;
        }

        let total =0;
        $p_items.each(function(){
                const sid = $(this).attr('data-sid');
                const price = $(this).attr('data-price');
                const quantity = $(this).attr('data-quantity');

                $(this).find('.price').text("NT. " +dallorCommas(quantity * price));
                $(this).find('.npd-form-counter-quantity').val(quantity);

                total += quantity * price;
                $('#total-price').text('NT.' + dallorCommas(total));

        });
    }
    prepareCartTable();


    const qty_sel = $('.npd-form-counter-quantity');
        qty_sel.on('change',function(){
            const p_item = $(this).closest('.content_one');
            const sid = p_item.attr('data-sid');
            console .log(sid +',' + $(this).val())

            const sendObj = {
                action: 'add',
                sid: sid,
                quantity: $(this).val()
            }

            $.get('handle-cart-api.php',sendObj , function(data){

                setCartCount(data);
                p_item.attr('data-quantity',sendObj.quantity);
                
                prepareCartTable();

            }, 'json');
        })


</script>
</body>
</html>