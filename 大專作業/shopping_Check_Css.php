<style>
    * {
      box-sizing: border-box;
      font-family: 'Lusitana', 'Noto Sans TC', serif; 
    }
    body{
        background-color: #F4F4F4;
    }

    ::placeholder , input{
        letter-spacing: 2px;
    }
    .imgFix{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* 01 */
    .logoImgBlock{
        width: 200px;
        height: 200px;
    }
    .logoImgBlock img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .logo_img{
        display: flex;
        margin: 2vw 0 0 3vw;
    }
    .title{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 30%;
        margin-left: 21px;
    }
    .title_txet{
        font-size: 17px;
    }   
    .shopping, .order{
        color: #B9B4B4;
    }
    
    .content_title_text{
        font-size: 16pt;
        margin-bottom: 20px;
        margin-top: 35px;
    }
    /* 02 */
    #content{
        display: flex;
    }
    .back_to_store{
        color: #B9B4B4;
        font-size: 12pt;
        text-align: right;
        margin: 2vw 30px 0 90px;
    }
    .back_to_store a{
        text-decoration: none;
        color: #B9B4B4;
    }
    .receive{
        margin-left: 2%;
        font-size: 12pt;
    }
    .receive input{
        padding: 5px; 
        background:white;
        border: 1px solid #DEDCDC;
        border-radius: 5px;
    }
    .phone_name{
        display: flex;
        margin-top: 10px;
    }

    .phone{
        margin-left:10px;
    }
    
    .numbering{
        margin-top: 10px;
    }
    .city, .town{
        background: white;
        padding: 6px;
        border: 1px solid #DEDCDC;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 10px;
    }
    .time_bu_input, .transport_bu_input{
        display: flex;
        justify-content: space-between;
        width: 400px;
        align-items: center;
    }
    .payment{
        flex-wrap: wrap;
        width: 500px;
    }
    .payment_bu{
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
        width:100%;
    }
    .payment_bu label{
        width:100%;

    }
    .bank_code{
        display: flex;
        align-items: center;
        margin-left: 32px;
        /* margin-top: 10px; */
        font-size: 12pt;
    }
    .bank_input{
        margin-left: 10px;
    }
    .account_code, .credit_code, .credit_month, .credit_number{
        width: 260px;
        margin-top: 10px;
        margin-left: 32px;
        font-size: 12pt;
    }
    .account_input, .account_shop{
        margin-top: 10px;
        margin-left: 32px;
    }
    .credit_security{
        margin-top: 10px;
    }
    .credit_input{
        margin-top: 13px;
    }
    .transport_shipping,.transport_bu_input{
        margin-bottom: 13px;
    }
    /* 地址 */
    .twzipcode{
        display: flex;
        justify-content: flex-start;
        width: 100%;
    }
    .form-control{
        width:195px;
    }
    .form-control:focus {
        border-color: none;
        box-shadow: none;
        border: 1.5px solid #F2B46D;
        outline: 0 none;
    }
    .city{
        margin-right: 10px;
    }
    /* 地址 */

    /* input width */
    .inputS{
        width:100px;
    }
    .inputM{
        width:195px;
    }
    .inputL{
        width:400px;
    }

    /* 03 */
    .detail{
        background-color: #FFFFFF;
        position: absolute;
        right: 0%;
        top: 1px;
        height: calc(100vh - 1px);
        text-align: left;
        padding: 2vw;
    }

    /* radio  https://stackoverflow.com/questions/45327086/how-change-the-color-of-the-radio-button*/
    input[type="radio"] {
        appearance: none;
        display: inline-block;
        width: 18px;
        height: 18px;
        background-clip: content-box;
        border: 1px solid #CFCFCF;
        background-color: #F4F4F4;
        border-radius: 50%;
    }
    input[type="radio"]:checked {
        padding: 2px;
        background-color: #F2B46D;
        outline: none !important; 
        border: 1px solid #F2B46D;
    }
    input[type="radio"]:focus{
        outline: none;
    }
    .input_all{
        margin-right: 5px;
        margin-left: 10px;
        cursor: pointer;
    }
    
    ::placeholder{
        color: lightgray;
    }
    /* radio end */

    /* 滾輪以下 */
    .content_scrollbar{
        height: 550px;
        width: 55vw;
        overflow-y: scroll;
    }   
    #scrollbar_style::-webkit-scrollbar{
        width: 5px;
        background: #E4E4E4; 
        border-radius: 10px;
    }
    #scrollbar_style::-webkit-scrollbar-track {
        border-radius: 10px;
    }
    #scrollbar_style::-webkit-scrollbar-thumb {
        background: #6B6B6B; 
        border-radius: 10px;
    }
    /* 滾輪以上 */

    .datail_button{
        position: absolute;
        right: 37vw;
        top: 35vw;
    }
    .darail_policy a{
        font-size: 12pt;
        text-decoration: none;
        margin-left: 55%;
        color: #2E3192;
    }


    /* 03 */
    .content_receive{
        color: #282828;
    }
    .detail_content{
        display: flex;
        margin: 15px 0;
    }
    .commodity_img{
        width: 135px;
        height: 135px;
        overflow: hidden;
        margin-bottom: 9px;
    }
    
    .content_text{
        width: 200px;
        font-size: 12pt;
        margin: auto 15px;
        
    }
    .content_price{
        margin:auto 0;
    }
    .detail_scrollbar{
        height: 600px;
        width: 25vw;
        overflow-y: scroll;
        margin-top: 95px;
    }
    .datail_border{
        position: relative;
        border-top: 1px solid black;
        margin-top: 2vw;
    }
    .datail_name{ 
        position: relative;
        text-align: center;
        margin-top: 2vh;
        letter-spacing: 3px;
    }

    .LastPage{
        color: #fff;
        background: #707070;
        border:0;
        border-radius:10px;
        width:150px;
        height:50px;
        cursor:pointer;
        line-height: 52px;
        text-align: center;
        letter-spacing: 3px;
        margin-top: 10px;
    }
    .NextPage{
        border:0;
        border-radius:10px;
        color: #fff !important;
        background-color: #F2B46D;
        text-align: center;
        line-height: 50px;
        width:150px;
        height:50px;
        cursor:pointer;
        position: relative;
        letter-spacing: 3px;
        margin-top: 10px;
    }
    .NextPage:focus, .LastPage:focus, .btnList:focus{
        outline: none;
        border: none;
    }
    .NextPage:hover{
        background-color: #ebab4b;
        color: #fff !important;
        text-decoration: none;
    }
    .LastPage:hover{
        background-color: #666666;
        color: #fff;
        text-decoration: none;
    }
    .btnList{
        background: none;
        color: blue;
        border:0;
        font-size: 12px;
    }
    .darail_policy{
        text-align: center;
    }
    .btnList:hover{color: #F2B46D; }
    .form-text{color: red; }
</style>
