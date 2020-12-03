<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/_navbar.php" ?>

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
                width: 100px;
                height: 100px;
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
                margin-bottom: 30px;
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
                margin-top: 26px;
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
            }
            .left-button p{
                margin-top: 10px;
            }
            .right-button p {
                margin-top: 10px;
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
                padding-left: 65px;
                color: #6B6B6B;
                font-size: 16px;
                display: flex;
                flex-direction: row;
                
                
             }
            .input-number{
                font-size: 20px;
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
                            
                }


    </style>

  </head>
  <body>
  <div class="container">
        <div class="title">
            <p><i class="fas fa-caret-right"></i> SHOPPING CART</p>
        </div>
    </div>

    <!-- 購物清單 -->
    <div class="container">
        <div class="list">
            <div class="card">    
                <img src="img/180748 (4).jpg" alt="">
            </div>
            <!-- 第一大塊圖片 結束-->
            <div class="middle-sec">
                <div class="list-title">
                    Simply Cafe Latte
                </div>
                <!-- 第二塊的標題結束 -->
                <div class="middle-word">
                    <div class="detail">
                        <div class="number">
                            036115
                        </div>
                        <div class="size">
                            35*20
                        </div>
                    </div>
                </div>
                <!-- 第二塊的尺寸貨號結束 -->
                <div class="bottom-word">
                    <div class="detail">
                        <div class="money">
                            6000$
                        </div>
                        <div class="quantity npd-form-counter">
     <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
      <input class="input-number npd-form-counter-quantity" type="text" value="1" name="npd-activity-Quantity">
       <span class="input-number-increment npd-form-counter-btn" data-type="plus"> + </span>
    </div>
                    </div>
                </div>
                <!-- 第二塊的價錢結束 -->
            </div>
            <!-- 第二大塊 結束-->
            <!-- <div class="del">
                <i class="fas fa-times"></i>
            </div> -->
            <button class="del" type="button">
            <i class="fas fa-trash-alt"></i>
            </button>
            
            <!-- 第三大塊 結束 -->
        </div>
    </div>
    <!-- 第二個購物清單 -->
    <div class="container">
        <div class="list">
            <div class="card">    
                <img src="img/180748 (1).jpg" alt="">
            </div>
            <!-- 第一大塊圖片 結束-->
            <div class="middle-sec">
                <div class="list-title">
                    Simply Cafe Latte
                </div>
                <!-- 第二塊的標題結束 -->
                <div class="middle-word">
                    <div class="detail">
                        <div class="number">
                            036115
                        </div>
                        <div class="size">
                            35*20
                        </div>
                    </div>
                </div>
                <!-- 第二塊的尺寸貨號結束 -->
                <div class="bottom-word">
                    <div class="detail">
                        <div class="money">
                            6000$
                        </div>
                        <div class="quantity npd-form-counter">
     <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
      <input class="input-number npd-form-counter-quantity" type="text" value="1" name="npd-activity-Quantity">
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
    </div>
    <!-- 第三個購物清單 -->
    <div class="container">
        <div class="list">
            <div class="card">    
                <img src="img/180748 (6).jpg" alt="">
            </div>
            <!-- 第一大塊圖片 結束-->
            <div class="middle-sec">
                <div class="list-title">
                    Simply Cafe Latte
                </div>
                <!-- 第二塊的標題結束 -->
                <div class="middle-word">
                    <div class="detail">
                        <div class="number">
                            036115
                        </div>
                        <div class="size">
                            35*20
                        </div>
                    </div>
                </div>
                <!-- 第二塊的尺寸貨號結束 -->
                <div class="bottom-word">
                    <div class="detail">
                        <div class="money">
                            6000$
                        </div>
                        <div class="quantity npd-form-counter">
     <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
      <input class="input-number npd-form-counter-quantity" type="text" value="1" name="npd-activity-Quantity">
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
    </div>
    <!-- 第四個購物清單 -->
    <div class="container">
        <div class="list">
            <div class="card">    
                <img src="img/180748 (8).jpg" alt="">
            </div>
            <!-- 第一大塊圖片 結束-->
            <div class="middle-sec">
                <div class="list-title">
                    Simply Cafe Latte
                </div>
                <!-- 第二塊的標題結束 -->
                <div class="middle-word">
                    <div class="detail">
                        <div class="number">
                            036115
                        </div>
                        <div class="size">
                            35*20
                        </div>
                    </div>
                </div>
                <!-- 第二塊的尺寸貨號結束 -->
                <div class="bottom-word">
                    <div class="detail">
                        <div class="money">
                            6000$
                        </div>
                        <div class="quantity npd-form-counter">
     <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
      <input class="input-number npd-form-counter-quantity" type="text" value="1" name="npd-activity-Quantity">
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
    </div>

    <!-- 換底線 -->
    <div class="container1"></div>

    <!-- 換總價 -->
    <div class="container">
        <div class="total">
            <p>Total：NT.‭24000‬</p>
        </div>
    </div>
    <!-- 換兩個按鈕 -->
    <div class="container2">
       
        <button type="button" class="bttn left-button ">
          <i class="fas fa-chevron-circle-left"></i><p>上一步</p>
         </button>
         <button type="button" class="bttn right-button active1">
             <p>下一步</p><i class="fas fa-chevron-circle-right"></i>
         </button>
    </div>
    <!-- 測試 -->
    <!-- <div class="quantity npd-form-counter">
     <span class="input-number-decrement npd-form-counter-btn" data-type="reduce"> - </span>
      <input class="input-number npd-form-counter-quantity" type="text" value="1" name="npd-activity-Quantity">
       <span class="input-number-increment npd-form-counter-btn" data-type="plus"> + </span>
    </div> -->

  </body>
<?php include __DIR__. "/_scripts.php"?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
      $('.fa-trash-alt').click(function(){
        // swal("確定要刪除商品嗎?", "You clicked the button!", "warning",{button: "取消"});
        
        swal({
            title: "確定要刪除商品嗎?",
            icon: "warning",
            buttons: ["取消","確定"],
            dangerMode: true,
            confirmButtonColor:"#fd7e14",
            cancelButtonText:"#fd7e14"
            
            
            
        });
       
      });
//       document.querySelector('deleteBtn').addEventListener("click",function(){
//             swal("確定要刪除商品嗎?", "You clicked the button!", "warning");
// });
// document.getElementById('deleteBtn2').addEventListener("click",function(){
//             swal("確定要刪除商品嗎?", "You clicked the button!", "warning");
// });
    // 按鈕顏色
    $(".bttn").click(function(){
        $(this).addClass("active1").siblings().removeClass("active1")
      })

    // 數量加減
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
        // let price=parseInt(row.find(".npd-form-price").text());
        // let subtotal=qty*price;
        // console.log(subtotal);
      
      let total=0;
      $(".npd-form-group").each(function(){

        let price=$(this).find(".npd-form-price").text();
        let amt=$(this).find(".npd-form-counter-quantity").text();
        let subtotal=amt*price;
        total += subtotal;
        $(".npd-form-subprice").text(total)
      })


    });
  

</script>

  </script>