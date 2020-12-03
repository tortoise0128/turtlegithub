<style>
* {
      box-sizing: border-box;
      font-family: 'Lusitana', 'Noto Sans TC', serif; 
    }


/* 01 */
.logoImgBlock{
    width: 200px;
    height: 200px;
    /* overflow: hidden; */
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
.check , .orser{
    color: #B9B4B4;
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
.commodity_img{
    margin-right: 10px;
    width:174px;
    height: 174px;
    overflow: hidden;
}
.commodity_img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
/* 滾輪以下 */
.content_scrollbar{
    height: 60vh;
    width: 102%;
    overflow-y: auto;
    /* margin-bottom: 25px; */
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

/* 數量 */

.input-number{
    font-size: 20px;
    width: 50px;
    text-align: center;
    outline: none;
    border: transparent;
    line-height: 150px;
}
.input-number , .input-number-decrement , .input-number-increment{
    height: 40px;
    user-select: none;
}
.input-number-decrement , .input-number-increment{
    display: inline-block;
    font-size: 24px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    font-weight: bold;
    cursor: pointer;
}
.input-number-decrement:active, .input-number-increment:active {
    color: #fff;
    background: #f2b46d;
    
}

/* 數量 */
.content_title{
    display: flex;
    justify-content: space-evenly;
    /* width: 53vw; */
}
.title_item{
    flex: 1;
    margin-left:100px;
    

}
.title_project{
    display: flex;
    width: 66%;
}
.size_text{
    font-size: 16px;
}
.size_text2{
    font-size: 16px;
    width: 200px;
    margin-right: 106px;
}
.content_one{
    display: flex;
    margin: 1vw;
}
.content_text_all{
    display: flex;
    align-items: center;
    width: 160px;
}
.content_project{
    display: flex;
    align-items: center;
}
.content_times{
    margin: 1vw;
    display: flex;
    align-items: center;
}
.content_times i{
    color: black;
    cursor:pointer;
}

/* 03 */
.content_right{
    background: #F4F4F4;
    position: absolute;
    right: 1px;
    top: 1px;
    height: calc(100vh - 1px);
    width: 20%;
}

.content_size , .quantity, .content_price{
    width: 200px;
    margin-left: 50px;
}
.content_size{
        text-align: center;
        width: 153px;
        margin-right: 46px;
    }
.shop_money{
    font-size: 16px;
}
.projDetail{
    padding: 15px 0;
    border-bottom: 1px solid #c4c4c4;
}
.detail{
    text-align: left;
    padding: 2vw;
    margin-top: 5vw;
}
.detail_project{
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    padding: 5px 20px 0 0;
}
.detail_scrollbar{
    height: 60vh;
    width: 109%;
    overflow-y: auto;
}
#detail_scrollbar::-webkit-scrollbar{
    width: 5px;
    background: #E4E4E4; 
    border-radius: 10px;
}
#detail_scrollbar::-webkit-scrollbar-track {
    border-radius: 10px;
}
#detail_scrollbar::-webkit-scrollbar-thumb {
    background: #6B6B6B; 
    border-radius: 10px;
}
.datail_name{
    font-size: 15px;
    text-align: center;
    position: relative;
    margin-top: 2vh;
    letter-spacing: 3px;
}
.datail_next{
    border:0;
    border-radius:10px;
    color: white;
    background-color: #F2B46D;
    text-align: center;
    line-height: 50px;
    width:150px;
    height:50px;
    cursor:pointer;
    margin: 0 0 0 4vw;
    position: relative;
    margin-top: 3vh;
    letter-spacing: 3px;
}
.datail_next:focus, .toMember:focus{
        outline: none;
        border: none;
    }
.datail_next:hover, .toMember:hover{
    background-color: #f2b30d;
    color: #fff;
    text-decoration: none;
}
.datail_border{
    position: relative;
    border-top: 1px solid black;
    margin-top: 3vh;
}
.swal2-styled.swal2-confirm , .swal2-styled.swal2-cancel{
    font-size: 16px;
    background: #f2b46d;
}
.swal2-cancel {
    color: #fff;
    background-color: #707070;
    width: 110px;
    word-spacing: 10px;
}
.swal2-confirm {
    background: #f2b46d;
    width: 110px;
    word-spacing: 10px;
}
.swal2-confirm:not([disabled]):hover {
    background-color: #F2B46D;
}
.swal2-cancel:not([disabled]):hover {
    background-color: #707070;
}
.swal2-cancel:focus , .swal2-confirm:focus  {
    box-shadow: none;
    outline: none;
}

.toMember{
    color: #fff;
    background: #707070;
    border:0;
    border-radius:10px;
    width:150px;
    height:50px;
    cursor:pointer;
    margin: 0 0 0 4vw;
    line-height: 52px;
    text-align: center;
    margin-top: 3vh;
    letter-spacing: 3px;
}



/* ------cart-empty------- */
.cart-empty{
    list-style: none;
    width: 55vw;
    /* height: 600px; */
}
.cart-empty li{
    font-size: 32px;
    color: #707070;
    text-align: center;
}
.cart-empty li img{
    width: 400px;
    height: 400px;
    margin-left: 25px;
}
.cart-empty li a{
    text-decoration: none;
    color: #707070;
}
.cart-empty li a:hover{
    color: #f2b46d;
}
.clickMeBack{
    transform: translateY(-80px);
}
</style>