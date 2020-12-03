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
                background: #F2B46D;
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
                        <div class="amount">
                            <!-- <div class="left-arr"><i class="fas fa-caret-left"></i></div> -->
                            <button class="left-arr" type="button"><i class="fas fa-caret-left"></i></button>
                            <div class="one">01</div>
                            <button class="right-arr" type="button"><i class="fas fa-caret-right"></i></button>
                            <!-- <div class="right-arr"><i class="fas fa-caret-right"></i></div> -->
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
                <i class="fas fa-times"></i>
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
                        <div class="amount">
                            <!-- <div class="left-arr"><i class="fas fa-caret-left"></i></div> -->
                            <button class="left-arr" type="button"><i class="fas fa-caret-left"></i></button>
                            <div class="one">01</div>
                            <button class="right-arr" type="button"><i class="fas fa-caret-right"></i></button>
                            <!-- <div class="right-arr"><i class="fas fa-caret-right"></i></div> -->
                        </div>
                    </div>
                </div>
                <!-- 第二塊的價錢結束 -->
            </div>
            <!-- 第二大塊 結束-->
            <button class="del" type="button">
                <i class="fas fa-times"></i>
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
                        <div class="amount">
                            <!-- <div class="left-arr"><i class="fas fa-caret-left"></i></div> -->
                            <button class="left-arr" type="button"><i class="fas fa-caret-left"></i></button>
                            <div class="one">01</div>
                            <button class="right-arr" type="button"><i class="fas fa-caret-right"></i></button>
                            <!-- <div class="right-arr"><i class="fas fa-caret-right"></i></div> -->
                        </div>
                    </div>
                </div>
                <!-- 第二塊的價錢結束 -->
            </div>
            <!-- 第二大塊 結束-->
            <button class="del" type="button">
                <i class="fas fa-times"></i>
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
                        <div class="amount">
                            <!-- <div class="left-arr"><i class="fas fa-caret-left"></i></div> -->
                            <button class="left-arr" type="button"><i class="fas fa-caret-left"></i></button>
                            <div class="one">01</div>
                            <button class="right-arr" type="button"><i class="fas fa-caret-right"></i></button>
                            <!-- <div class="right-arr"><i class="fas fa-caret-right"></i></div> -->
                        </div>
                    </div>
                </div>
                <!-- 第二塊的價錢結束 -->
            </div>
            <!-- 第二大塊 結束-->
            <button class="del" type="button">
                <i class="fas fa-times"></i>
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
        <!-- <div class="left-button">
            <p><i class="fas fa-arrow-circle-left"></i>上一步</p>
        </div>
        <div class="right-button">
            <p><i class="fas fa-arrow-circle-right"></i>下一步</p>
        </div> -->
        <button type="button" class="left-button">
            <p><i class="fas fa-arrow-circle-left"></i>上一步</p>
        </button>
        <button type="button" class="right-button">
            <p>下一步<i class="fas fa-arrow-circle-right"></i></p>
        </button>
    </div>
  </body>
  
