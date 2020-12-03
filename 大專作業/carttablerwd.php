<?php include __DIR__ . "/_html_header.php" ?>



<style>
    .mewberlist {
        margin-top: 75px;
        flex-direction: column;
        align-items: center;
    }

    /* ------------------------ */
    .mewall1 {
        width: 315px;

        /* line-height: 20px; */
    }

    .mewp {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }


    .mewtotal {
        justify-content: space-between;
        margin-bottom: 4px;

    }

    .mewp7 {
        font-size: 20px;
    }

    .mewp1 {
        font-size: 16px;
    }

    .mewp2 {
        font-size: 16px;
    }

    .mewp3 {
        font-size: 16px;
        margin-bottom: 14px;
    }

    .mewp4 {
        font-size: 16px;
        margin-bottom: 15px;
    }

    /* -------------------------- */
    .mewall2 {
        width: 315px;
        height: 315px;
        padding: 15px;
        margin-bottom: 15px;
        border-top: 1px solid #B9B4B4;
        border-bottom: 1px solid#B9B4B4;
        overflow: auto;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: #6B6B6B;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #E4E4E4;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #E4E4E4;
    }

    /* ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.432);
        border-radius: 10px;
    }

    :-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.274);
    } */

    .mewtotal2 {
        justify-content: space-between;
    }

    .mewtext {
        line-height: 15px;
    }

    /* ----------------------- */
    .mewall3 {
        width: 315px;
        line-height: 15px;
    }

    .mewtotal3 {
        justify-content: space-between;
        /* width: 315px ; */
    }

    /* --------------------------------------------- */

    .simplycofe {
        /* width: 270px; */
        flex-direction: column;
        align-items: flex-end;
        line-height: 19px;
        margin-top: 15px;
    }

    .simplycofe1 {
        width: 260px;
        justify-content: space-between;
    }

    .mewp5 {
        font-size: 13px;
        margin-bottom: 19px;
    }

    .mewp6 {
        font-size: 13px;
        margin-right: 5px;
        margin-bottom: 19px;
    }


    /* -------------------------------- */


    .fa-chevron-circle-left {
        /* margin-right: 57px; */
        color: rgba(255, 255, 255, 0.808);
        margin-top: 7px;
    }

    .fa-chevron-circle-right {
        /* margin-left: 57px; */
        color: rgba(255, 255, 255, 0.808);
        margin-top: 7px;

    }

    .bttn {
        justify-content: center;
        align-items: center;
        margin-top: 85px;
        height: 51px;
        width: 50vw;
        border: none;
        outline: none !important;
        /* 不想要邊框要加 !important*/
        background: #B9B4B4;
        font-size: 20px;
        font-weight: bold;
        color: white;

    }

    .bttn.active {
        background: orange;
    }

    .bttn1 {
        width: 375px;
    }
</style>
</head>

<body>

    <div class="mewberlist d-flex">
        <div class="mewall1">
            <p class="mewp">會員訂單明細</p>
            <div class="mewtotal d-flex">
                <p class="mewp7">金額總計</p>
                <p class="mewp7">NT.17,580</p>
            </div>
            <p class="mewp3">古小美</p>
            <p class="mewp4">台北市大安區和平東路二段106號11樓</p>
        </div>
        <!-- -------------------------------------------------- -->
        <div class="mewall2">
            <div class="mewtext">
                <div class="mewtotal2 d-flex">
                    <p class="mewp1">訂單日期</p>
                    <p class="mewp2">2020 / 06 / 21</p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="mewp1">匯款方式</p>
                    <p class="mewp2">ATM付款</p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="mewp1">送貨方式</p>
                    <p class="mewp2">宅配</p>
                </div>
                <div class="mewtotal2 d-flex">
                    <p class="mewp1">購買件數</p>
                    <p class="mewp2">7 件</p>
                </div>
            </div>
            <!-- ------------------------------------------------------ -->
            <div class="simplycofe d-flex">
                <!-- <div class="simplycofe1 d-flex">
                    <p class="mewp5">Simply Cafe Latte</p>
                    <p class="mewp6">1</p>
                </div>
                <div class="simplycofe1 d-flex">
                    <p class="mewp5">English Romance Bouquet</p>
                    <p class="mewp6">2</p>
                </div>
                <div class="simplycofe1 d-flex">
                    <p class="mewp5">Simply Gorgeous Bouquet</p>
                    <p class="mewp6">1</p>
                </div>
                <div class="simplycofe1 d-flex">
                    <p class="mewp5">Simply Cafe Latte</p>
                    <p class="mewp6">1</p>
                </div>
                <div class="simplycofe1 d-flex">
                    <p class="mewp5">English Romance Bouquet</p>
                    <p class="mewp6">1</p>
                </div>
                <div class="simplycofe1 d-flex">
                    <p class="mewp5">Simply Gorgeous Bouquet</p>
                    <p class="mewp6">1</p>
                </div> -->

                <table class="simplycofe d-flex">
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">Simply Cafe Latte</td>
                        <td class="mewp6">1</td>
                    </tr>
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">English Romance Bouquet</td>
                        <td class="mewp6">2</td>
                    </tr>
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">Simply Gorgeous Bouquet</td>
                        <td class="mewp6">1</td>
                    </tr>
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">Simply Cafe Latte</td>
                        <td class="mewp6">1</td>
                    </tr>
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">English Romance Bouquet</td>
                        <td class="mewp6">1</td>
                    </tr>
                    <tr class="simplycofe1 d-flex">
                        <td class="mewp5">Simply Gorgeous Bouquet</td>
                        <td class="mewp6">1</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- --------------------------------------------------- -->
        <div class="mewall3">
            <div class="mewtotal3 d-flex">
                <p class="mewp1">產品金額</p>
                <p class="mewp2">NT.17,500</p>
            </div>
            <div class="mewtotal3 d-flex">
                <p class="mewp1">運費</p>
                <p class="mewp2">NT.80</p>
            </div>
            <div class="mewtotal3 d-flex">
                <p class="mewp1">會員折扣金額</p>
                <p class="mewp2">NT.0</p>
            </div>
        </div>
        <div class="bttn1 d-flex">
            <button class="bttn d-flex"><i class="fas fa-chevron-circle-left"></i>修改</button>
            <button class="bttn d-flex active">確認<i class="fas fa-chevron-circle-right"></i></button>
        </div>
    </div>


    <?php include __DIR__ . "/_scripts.php" ?>

    <script>
        $(".bttn").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        })
    </script>