<?php include __DIR__. "/_connect_db.php"?>

<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/RWD_navbar.php" ?>

<style>
         @media screen and (max-width:375px){
             .title p{
                 font-weight: bold;
                 font-size: 20px;
                 color: #6B6B6B;
                 margin-bottom: 42px;
                 }
            /* 購物清單 */
            .card{
                width: 100px;
                height: 100px;
                margin-right: 15px;
            }
            .card img{
                width: 100%;
                height: 100px;
                object-fit:cover;
            }
            .list{
                display: flex;
                flex-direction: row;
                margin-bottom: 20px;
            }
            .list-title{
                color: #6B6B6B;
                font-size: 16px;
            }
            .size{
                color: #B9B4B4;
                margin-right: 20px;
            }
            .number{
                color:#B9B4B4;
                
            }
            .money{
                color: #6B6B6B;
                font-size: 16px;
            }
            .amount{
                color: #6B6B6B;
                font-size: 16px;
                display: flex;
                flex-direction: row;
            }
            .del{
                color: #707070;
                font-size: 10px;
                
            }
            button:focus{
                outline: none;
            }
          
            .detail{
                display: flex;
                justify-content:space-between;

            }
            .middle-sec{
                width: 190px;
            }
            .middle-word{
                margin-bottom: 22px;
                font-size: 12px;
                margin-top: 10px;
            }
            .del{
                /* padding-top: 50px; */
                margin-left: 30px;
                border: none;
                background: none;
            }
            .del:hover{
                border: none;
                

            }
            .left-arr{
                margin-right: 10px;
                border: none;
                background: none;
                color: #6B6B6B;
            }
            .right-arr{
                margin-left: 10px;
                border: none;
                background: none;
                color: #6B6B6B;

            }
            .container1{
                height: 56px;
                border-bottom: 1px solid #B9B4B4;
            }
            .total{
                color: #6B6B6B;
                font-size: 20px;
                /* margin-top: 26px; */
                padding: 15px;
                text-align: center;
                display: flex;
                justify-content: center;
            }
            .container2{
                display: flex;
                flex-direction: row;
                font-weight: bold;
                font-size: 20px;
                
               
            }
            .left-button{
                background: #B9B4B4;
                width: 188px;
                height: 51px;
                display: flex;
                justify-content: center;
                color: #fff;
                
                border: none;
            }
            .right-button{
                background: #B9B4B4;
                width: 188px;
                height: 51px;
                display: flex;
                justify-content: center;
                color: #fff;
                border: none;
                cursor:pointer;

            }
            .left-button p{
                margin-top: 10px;
            }
            .right-button p {
                margin-top: 10px;
                cursor:pointer;

            }
            .fa-chevron-circle-right{
                margin: 15px;
                margin-left: 0;
            }
            .fa-chevron-circle-left{
                margin-right: 0;
                margin-top: 15px;
            }
            .bttn.active1{
                 background:#F2B46D ;
            }
            .bttn{
                    letter-spacing: 6px;

            }
            
            
            .swal-button--cancel {
                color: #fff;
                background-color: #535151;
            }
            .swal-button--danger {
                background-color:#F2B46D;
            }
            .swal-button--danger:not([disabled]):hover {
                background-color: #F2B46D;
            }
            .swal-button--cancel:focus {
                box-shadow: none;
                outline: none;
            }
            .swal-button--danger:focus {
                box-shadow: none;
                outline: none;
            }
            .swal-footer{
                display: flex;
                justify-content: center;
            }
            /* 測試 */
            .quantity{
            /* padding-right: 54px; */
                /* padding-left: 65px; */
                color: #6B6B6B;
                font-size: 16px;
                display: flex;
                flex-direction: row;
             }
            .input-number{
                font-size:16px;
                width: 25px;
                text-align: center;
                outline: none;
                border: transparent;
                /* line-height: 150px; */
            }
            .input-number , .input-number-decrement , .input-number-increment{
                /* height: 40px; */
                user-select: none;
                /* background: pink; */
            }
            .input-number-decrement , .input-number-increment{
                display: inline-block;
                width: 10px;
                /* height: 40px; */
                text-align: center;
                margin-right: 10px;
                border: none;
                background: none;
                color: #6B6B6B;
                margin-left: 10px;
                border: none;
                background: none;
                color: #6B6B6B;
            }
            .input-number-decrement:active,
            .input-number-increment:active {
                color: #f2b46d;
            }
            .bottomAll{
                position: fixed;
                bottom: 0;
            }
            .size{
                margin-right:44px ;
            }
            .datail_next:focus, .toMember:focus{
                outline: none;
                border: none;
                color: #fff;
                list-style: none;
            }
            .datail_next{
                color: #fff;
                list-style: none;
            


            }
            .cart-empty{
                list-style: none;
            }
            .cart-empty img{
                width:100%;
            }
            .cart-empty{
                padding:0;
            }
            .clickMeBack{
                text-align: center;
                font-size: 28px;
            }
                       
        }


    </style>

  </head>
<body>
    <div class="container">
        <div class="title">
            <p><i class="fas fa-caret-right"></i> SHOPPING CART</p>
        </div>
    </div>
    <?php if (empty($_SESSION['cart'])) : ?>
                <div>
                    <ul class="cart-empty">
                        <li>
                            <img src="img/Cart/cart-empty.png" alt="">
                        </li>
                        <li class="clickMeBack">
                            <a href="<?= WEB_ROOT ?>/RWD_index.php">購物車內沒有商品!<br>
                                點我回商品頁!
                            </a>
                        </li>
                    </ul>
                </div>
            <?php else: ?>
    <div class="container ">
        <?php foreach($_SESSION['cart'] as $i) :?>
            <div class="list content_one"  
                data-sid = "<?= $i['sid'] ?>"
                data-name = "<?= $i['name']?>"
                data-img = "<?= $i['img_small'] ?>"
                data-size = "<?= $i['size'] ?>"
                data-flower = "<?= $i['flower'] ?>"
                data-price = "<?= $i['price'] ?>"
                data-quantity = "<?= $i['quantity'] ?>"
                data-intro = "<?= $i['intro']?>">
                
                <div class="card">    
                    <img src="img/small/<?= $i['img_small'] ?>-1.jpg" alt="">
                </div>
                <!-- 第一大塊圖片 結束-->
                <div class="middle-sec">
                    <div class="list-title">
                        <?= $i['name'] ?>
                    </div>
                        <!-- 第二塊的標題結束 -->
                    <div class="middle-word">
                        <div class="detail">
                            <div class="number">
                            <?= rand(1000,9999).- $i['sid'] ?>
                            </div>
                            <div class="size">
                            <?= $i['size'] ?>
                            </div>
                        </div>
                    </div>
                        <!-- 第二塊的尺寸貨號結束 -->
                    <div class="bottom-word">
                        <div class="detail">
                            <div class="money price">
                            </div>
                        <div class="quantity npd-form-counter">
                    <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
                    <input class="input-number npd-form-counter-quantity" type="text" value="<?= $i['quantity']?>" name="npd-activity-Quantity">
                    <span class="input-number-increment npd-form-counter-btn" data-type="plus"> + </span>
                        </div>
                        </div>
                    </div>
     <!-- 第二塊的價錢結束 -->
                </div>
                <!-- 第二大塊 結束-->
            
                <button class="del" type="button">
                <i class="fas fa-trash-alt"></i>
                </button>
                <!-- 第三大塊 結束 -->
            </div>
        <?php endforeach; ?>
    </div>
    <!-- 第二個購物清單 -->
    <div class="bottomAll">
  
    <!-- 換底線 -->
    <div class="container1"></div>
    <!-- 換總價 -->
        <div class="container">
            <div class="total">
            <div>共<span class="cart-count">0</span>件/商品金額總計：<span id="total-price"></span></div>
            </div>
        </div>
        <!-- 換兩個按鈕 -->
        <div class="container2">
            <button type="button" class="bttn left-button ">
            <p>上一步</p>
            </button>
            <?php if (isset($_SESSION['member'])) : ?>
            <a type="button" class="datail_next bttn right-button active1" role="button" href="<?= WEB_ROOT ?>/RWD_cart_3_course.php">
                <p>下一步</p>
            </a>
            <?php else: ?>
                <a type="button" class="bttn right-button active1 toMember" role="button" href="<?= WEB_ROOT ?>/RWD_mobile-1login.php">
                <p>請先登入在結帳</p>
            </a>  
            <?php endif;?>
        </div>
    </div>
    <?php endif;?>    

 

</body>
<?php include __DIR__. "/_scripts.php"?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

                $(this).find('.price').text("$. " +dallorCommas(quantity * price));
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