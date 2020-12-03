<style>
    

    li{
        list-style: none;
    }
    a{
        color: #6d6d6d;
    }
    a:hover{
        color: #f2b46d;
        text-decoration:none
    }

    h2{
        font-size: 34px;
        /* margin: 0; */
    }
    .topSet{
        margin-top: 150px;
    }
    .btn:active , .btn:focus {
        box-shadow: none;
        border: none !important;
    }

    .form-control:focus , .form-control:active{
        border: 2px solid #f2b46d; 
        box-shadow: none;
        transition: 1s;
    }

    h3{
        color: #f2b46d;
    }
    .container{
        max-width:1066px;
    }

    @media screen and (max-width:968px){
        .topSet{
            margin-top: 90px;
        }
    }

/* --------------------------------- */


    .lib , .productLeft .contect h3{
        margin-bottom: 26px;
    }

    .productLeft .contect p{
        margin-bottom: 70px;
    }
    .productImg ul{
        padding: 0;
    }
    .productImg li{
        width: 100%;
        height: 380px;
        overflow: hidden;
    }

    .productImg img , .productRight img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .productLeft{
        color: #6d6d6d;
    }

    .productRight li{
        width: 119px;
        height: 119px;
        overflow: hidden;
        margin-bottom:11px ;
    }

    
    .smallImg{
        overflow: overlay;
        height: 380px;
        padding: 0;
    }

    .smallImg::-webkit-scrollbar {
        width: 10px;
        color: #fff;
    }
 
    .smallImg::-webkit-scrollbar-track {
        border-radius: 5px;
        background: #fff;
        z-index: 1
    }
 
    .smallImg::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: #f2b46d;
        z-index: 2;
    }

    .smallImg li{
        border: 3px solid transparent;
        cursor: pointer;

    }

    .smallImg li.active{
        border: 3px solid #f2b46d;
    }

    .titleRWD, .sendAdd, .infoRWD, .contectRWD, .libRWD{
        display:none;
    }

    @media screen and (max-width:968px){
        .libRWD{
            display: block;
            width: 100%;
            margin: 0 30px 32px;
        }
        .titleRWD{
            display:block;
            margin:0 auto 32px;
        }
        
        .productLeft , .productImg{
            display:none;
        }
        .productRight{
            padding:0;
            width:auto !important;
        }
        .productRight li{
            width:100%;
            height:250px;
            border:none;
            margin:0;
        }
        .smallImg li.active{
            border:none;
        }
        .smallImg{
            overflow:hidden;
            height:250px;
            margin:0;
        }
        .contectRWD{
            display: block;
            margin: 30px 30px 0 30px;
            color: #707070;
            font-weight: bold;
            letter-spacing: 2px;
            line-height: 32px;
        }
    }

/* -----------quantity--------------- */

    .quantity{
        /* width: 100%; */
        padding: 0 25px;
        margin-bottom: 25px;
    }

    .input-number{
        font-size: 28px;
        width: 80px;
        vertical-align: top;
        text-align: center;
        outline: none;
        border: transparent;

    }

    .input-number , .input-number-decrement , .input-number-increment{
        height: 40px;
        user-select: none;
    }

    .input-number-decrement , .input-number-increment{
        display: inline-block;
        font-size: 18px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .input-number-decrement:active,
    .input-number-increment:active {
        background: #f2b46d;
        color: #fff;
    }    


/* ----------------------------------- */
    .swal-modal{
        width: 430px;
        height: 250px;
    }

    .toCart, .tolikeRWD{
        font-size: 24pt;
        line-height: 24pt;
    }

    .toCart i , .tolikeRWD i{
        vertical-align:middle;
        margin: 0 30px;
        cursor: pointer;
        transition: 1s;
    }

    .toCart i:hover{
        color: #f2b46d;
        transition: 1s;
    }

    .btnAdd{
        border:1.5px solid #f2b46d;
        background:#fff;
        width: 130px;
        height: 40px;
        color: #f2b46d;
        transition: .5s;
    }

    .btnAdd:hover{
        background:#f2b46d;
        color: #fff;
    }

    .likeAdd.active{
        color: #f2b46d;
    }

    @media screen and (max-width:968px){
        .infoRWD{
            display: block;
            width: 100%;
            position: fixed;
            bottom: 0;
            background: #fff;
            padding: 20px 0;
            box-shadow:0 0 15px #c4c5c5;
            z-index: 2;
        }
        .sizeRWD{
            width: 100%;
        }
        .tolikeRWD , .quantityRWD{
            display: flex;
            justify-content: space-between;
            margin: 0 50px 12px;
        }
        .tolikeRWD h3{
            margin:0;
        }
        .quantityRWD .quantity{
            font-size: 16px;
            line-height: 32px;
            margin: 0;
            color: #707070;
            word-spacing:12px ;
        }
        .tolikeRWD .likeAdd{
            color: #707070;
        }
        .toCartRWD .btn{
            width: 315px;
            padding: 0;
            border: 0;
            margin: 0 30px;
            border-radius: 0;
            background: #f2b46d;
            word-spacing: 12px;
            color: #fff;
        }
    }

    /* -------------------------------------- */

    main{
        margin: 70px 0 100px;
    }

    .pick{
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 36px;
    }

    .pick a.active{
        color: #f2b46d;
    }

    .tabcontent {
        display: none;
        height: 100%;
    }

    .pick a{
        font-size: 18pt;
        cursor: pointer;
        margin: 50px;
    }
    
    .comment{
        padding-left: 50px;
        font-size: 12pt;
        line-height: 24pt;
        width: 100%;
    }

    #About .discuss{
        overflow:overlay;
        height: 330px;
    }

    .discuss::-webkit-scrollbar {
        width: 10px;
        color: #fff;
    }
 
    .discuss::-webkit-scrollbar-track {
        border-radius: 5px;
        background: #fff;
        z-index: 1
    }
 
    .discuss::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: #fff;
        z-index: 2;
    }

    #About .discuss .member{
        display: flex !important;
        padding: 32px 0 24px;
        border-bottom: 1px solid  #707070;
    }

    .discussAdd{
        margin: 32px auto 0;
        max-width: 100%;
    }
    .discussAddPlace{
        flex-wrap: wrap;
    }

    .discussAdd .send{
        width: 100px;
        height: 42px;
        color: #fff;
        background: #f2b46d;
        word-spacing: 12px;
        position: absolute;
        right: 15px;
        
    }
    .discussStar{
        color: #b9b4b4;
        margin-bottom: 16px;
    }

    #About li{
        width: 110px;
        height: 110px;
        border-radius: 50%;
        overflow: hidden;
    }

    .memberComment{
        color: #707070;
    }

    .memberStar{
        display: flex;
        justify-content: space-between;
    }

    .memberComment .message{
        margin: 0 60px ;
    }

    .memberComment .message p{
        margin-bottom: 10px;
        line-height: 1.5rem;
    }

    @media screen and (max-width:968px){
        main{
            margin: 32px auto 40px;
        }
        .pick{
            flex-wrap:wrap;
            padding: 0;
            margin: 0 30px;
            border-bottom: 1px solid #707070;
        }
        .pick a{
            width:100%;
            margin: 0 auto 15px;
        }
        .comment{
            padding:5px;
            color: #707070;
            font-size: 14px;
        }

        .tablink{
            border-top: 1px solid #707070;
            padding-top: 15px;
        }
        .tabcontent{
            height: auto;
        }

        .productIntro{
            order: 1;
        }
        .productSending{
            order: 3;
        }
        .productComment{
            order: 5;
        }
        #Intro{
            order: 2;
        }
        #Sending{
            order: 4;
        }
        #About{
            order: 6;
        }
        /* ----------------- */
        #About .discuss{
            height: 200px;
        }
        #About li{
            width: 50px;
            height: 50px; 
        }
        .memberComment .message{
            margin: 0;
        }
        .containerBar{
            width:50px;
            padding: 0;
        }
        .memberStar h5{
            font-size: 16px;
            margin: 0;
            line-height: 32px;
        }
        .message{
            font-size: 12px;
            /* word-spacing: 6px; */
            letter-spacing: 2px;
        }

        .discussAddPlace{
            display: none;
        }
        .sendAdd{
            display: block;
            width: 100%;
            margin-bottom: 15px;
            background: #c4c5c5;
            word-spacing: 12px;
            color: #fff;
        }
        .sendAdd:hover{
            color: #fff;
        }
    }
    /* ------------------------------- */
    .rating {
        display: flex;
        transform: scaleX(-1);
        justify-content: flex-end;
    }
    .rating label {
        position: relative;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .rating label:not(:first-of-type) {
        padding-right: 2px;
    }

    .rating label:before {
        content: "\2605";
        font-size: 18px;
        color: #CCCCCC;
        line-height: 1;
    }

    .rating input {
        display: none;
    }

    .rating input:checked ~ label:before, .rating:not(:checked) > label:hover:before, .rating:not(:checked) > label:hover ~ label:before {
        color: #f2b46d;
    }

    /* -------------------------------------- */

    section h3{
        color: #707070;
        text-align: center;
    }

    .product{
        display: flex;
        margin:0 auto 90px;
        padding: 0;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .productItem{
        margin:20px 32px;
    }

    .product .f-box{
        width:230px;
        height:240px;
    }

    .RelatedInfo .productName{
        margin:8px 0;
        font-size: 12pt;
        color: #6b6b6b;
    }

    .product .f-box img , #About li img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    @media screen and (max-width:968px){
        .product{
            flex-wrap:unset;
            justify-content:unset;
            overflow: scroll; 
            margin-bottom: 120px;
        }
        .productItem{
            margin:0;
            position: relative;
        }
        .product .f-box{
            width:375px;
            height:240px;
        }
        .product .f-box img{
            width: 100%;
        }
        .RelatedInfo{
            position: absolute;
            bottom: 0;
        }
        .RelatedInfo h5{
            color: #fff !important;
            margin: 7.5px !important;
        }
    }
</style>