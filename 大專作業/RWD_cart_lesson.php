<?php include __DIR__. "/_html_header.php"?>

<?php include __DIR__. "/_navbar.php" ?>

<style>
       @media screen and (max-width:375px){
         /* .container{
           margin-bottom: 30px;
         } */
         .title p{
          font-weight: bold;
          font-size: 20px;
          color: #6B6B6B;
          margin-bottom: 23px;
         }
         /* 換收件資訊 */
         .title-infor{
          font-size: 20px;
          font-weight: bold;
          color:black;  
          /* letter-spacing: 3px; */
         }
         .false-infor{
           color: #E94D4D;
           font-size: 12px;
         }
         .person{
           display: flex;
           flex-direction: row;
           align-items: center;
           margin-bottom: 10px;
         }
         .false-infor{
           margin-left: 15px;
         }
         .form-group label{
           color: #707070 ;
           font-size: 14px ;
           font-weight: bold ;
         }
         .address{
           color: #707070 ;
           font-size: 14px ;
           font-weight: bold ;
         }
         .deliver{
           display: flex;
           flex-direction: column;
         }
        .form-check-label{
          margin-right: 270px;
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          padding-left: 10px;
          white-space: nowrap;

        }
      
        .form-check-label-two{
          margin-right: 242px;
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          padding-left: 10px;
          white-space: nowrap;
        }
        .form-group{
          padding: 10px;
        }
        .address{
          padding-left: 10px;
        }
        .form-check-label-three{
          margin-right: 237px;
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          padding-left: 10px;
          white-space: nowrap;
        }
        
        #emailHelp{
          color: #797979;
          font-size: 12px;
        }
        .title-infor .bank{
          color: #707070;
          font-size: 12px;
          font-weight: normal;
        }
        .form-check-label-four{
          /* margin-right: 228px; */
          color: #6B6B6B;
          font-size: 14px;
          font-weight: bold;
          padding-left: 10px;
        }
        .collapsible {
          background-color: #fff;
          color: black;
          cursor: pointer;
          /* padding: 18px; */
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 20px;
          font-weight: bold;
          outline: none !important;

    
          }

        .active, .collapsible:hover {
            /* background-color: #555; */
            }

        .collapsible:after {
          content: '\002B';
          color: #C4C5C5;
          font-weight: bold;
          float: right;
          margin-left: 5px;
          }

        .active:after {
          content: "\2212";
          }

        .content {
          padding: 0 18px;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
          /* background-color: #f1f1f1; */
          }
        .pro-img{
          width: 60px;
          height:60px;
        }
        .pro-img img{
          width: 100%;
        }
        .pro-word{
          color: #6B6B6B;
          font-size: 13px;
          font-weight: normal;
          
          
        }
        .pro-ano{
          color: #6B6B6B;
          font-size: 13px;
          font-weight: normal;
          
        }
        .product{
          display: flex;
          justify-content: space-between;
          width: 300px;
          padding-left: 20px;
          margin-bottom: 10px;
          align-items: center;
        }
        .pro-list{
          display: flex;
          flex-direction: column;
          
        }

        .container1{
          height: 56px;
          border-bottom: 1px solid #B9B4B4;   
          
          white-space: nowrap;
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
          white-space: nowrap;
        }
        .left-button{
          background: #B9B4B4;
          width: 50vw;
          height: 51px;
          display: flex;
          justify-content: center;
          color: #fff;
          border: none;
         
        }
        
        .left-button:hover{
          /* background: #F2B46D; */
          outline: none;
          border: none;

        }
        .right-button{
          background: #B9B4B4;
          width: 50vw;
          height: 51px;
          display: flex;
          justify-content: center;
          color: #fff;
          border: none;
          
        }
        .right-button:hover{
          /* background: #F2B46D; */
          outline: none;
          border: none;

        }
        .left-button p{
          margin-top: 10px;
        }
        .right-button p{
          margin-top: 10px;
          
        }
        input[type="text"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: inline-block;
        width: 20px;
        height: 20px;
        background-clip: content-box;
        border: 1px solid #CFCFCF;
        background-color: #D6D5D5;
        border-radius: 50%;
        }
        input[type="radio"]:checked {
            padding: 2px;
            background-color: #F2B46D !important;
            outline: none !important;
            border: 1px solid #F2B46D;

            
        }
        input[type="email"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="password"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        #inputState{
            border-color: none;
            box-shadow: none;
            
            outline: 0 none;
        }
        #inputState:focus{
            border: 1px solid black;
            

        }
        #exampleFormControlSelect1{
            border-color: none;
            box-shadow: none;
        }
        #exampleFormControlSelect1:focus{
            border: 1px solid black;
            background: #fff;
            

        }
        select option[selected]{
            /* background-color: palevioletred; */
            
        }
        select option{
          /* background-color: purple; */
          

        }
        .contact{
          color: #2E3192;
          display: flex;
          justify-content: center;
          font-size: 12px;
          margin-bottom: 10px;
        }
        .contact:hover{
          text-decoration: underline;
        }
        .bttn.active1{
          background:#F2B46D ;
        }
        .fa-chevron-circle-right{
          margin: 15px;
          margin-left: 0;
        }
        .fa-chevron-circle-left{
          margin-right: 0;
          margin-top: 15px;
        }
        .city select{
            border-radius: 0.25rem;
            border-width: 2px;
            outline: none;
            
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            font-weight: 400;
            background-clip: padding-box;
            width: 142px;
        }
        .d-flex{
            /* width: 345px; */
            display: flex;
            justify-content:space-between;
            margin-left: 9px;
        }
        .city select:focus{
            border: 1px solid black;
        }
        .city .district{
            margin-left: 40px ;
            color: #B9B4B4;
           
        }
        .city .county{
            color: #B9B4B4;

        }
        input[type="number"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="month"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        input[type="e-mail"]:focus{   
            border-color: none;
            box-shadow: none;
            border: 1px solid black;
            outline: 0 none;
        }
        .setL{
            width: 320px;
        }
        .form-check-label-four .creditcard{
            margin-left: 220px;
            
        }
        .form-check-label-four .useatm{
            margin-left: 230px;

        }
        .half{
            display: flex;
            flex-direction: row;
            text-align: center;
            margin-top: 0;
            padding-top: 0;
        }
        .half-one{
            margin-right: 20px;
            
        }
        .setXS{
            width: 100px;
        }
        
        
        
       
       
       
      
       }      
    </style>

</head>


<body>
  <div class="container">
    <div class="title">
        <p><i class="fas fa-caret-right"></i> CHECK ORDER</p>
    </div>
  </div>
  <!-- 換收件資訊 -->
  <div class="container">
    <div class="person">
      <div class="title-infor">
        <p>報名資料</p>
      </div>
      
    </div>
  </div>
  <!-- 換表格 -->
<div class="container">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput" name="email">
                    <div class="bold-title">電子郵件</div>
                    <input type="e-mail" class="form-control setL" id="formGroupExampleInput" placeholder="glory7788@gmail.com">
                </label>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput" name="memebername">
                    <div class="bold-title">收件人姓名</div>
                    <input type="text" class="form-control setL" id="formGroupExampleInput2" placeholder="Ying Wang">
                </label>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput" name="phone">
                    <div class="bold-title">手機號碼</div>
                    <input type="number" class="form-control setL" id="formGroupExampleInput3" placeholder="0955-970-067">
                </label>
            </div>
        </form>
        <div class="form-group">
                <label for="formGroupExampleInput" name="tax">
                    <div class="bold-title">統一編號</div>
                    <input type="number" class="form-control setL" id="formGroupExampleInput2">
                </label>

        </div>
</div>
  <!-- 報名人數 -->
  <div class="container">
    <div class="deliver">
        <div class="title-infor"> 
        <p>報名人數</p>
        </div>
        <div class="form-group">
        
        <select class="form-control" id="exampleFormControlSelect1">
          <option selected>1</option>
          <option>2</option>
      
        </select>
      </div>
    </div>
  </div>
 
  <!-- 付款方式 -->
  <div class="container">
    <div class="person">
      <div class="title-infor">
        <p>付款方式</p>
        <div class="form-check form-check-inline form-credit">
            <label class="form-check-label-four" for="inlineRadio1" name="atm">ATM轉帳
                    <input class="form-check-input useatm" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                
        </div>

        <div class="atm">
            <div class="form-group">
                <label  for="exampleInputEmail1" class="bank" >請輸入銀行代碼</label>
                <input type="number" class="form-control setXS" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="bank">請輸入轉出帳號...(14位)</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
                <small id="emailHelp" class="form-text text-muted">轉入帳號：斑斕  700-01322345123</small>
            </div>
            </label>
        </div>
         <!-- 信用卡 -->
        <div class="form-check form-check-inline form-credit">
            <label class="form-check-label-four" for="inlineRadio1" name="credit">信用卡付款
                <input class="form-check-input creditcard" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        </div>
        <div class="creditblank"> 
            <div class="form-group">
                <label  for="exampleInputEmail1" class="bank" >信用卡卡號</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group half">
                <div class="half-one">
                    <label for="exampleInputPassword1" class="bank">信用卡有效截止日期</label>
                    <input type="number" class="form-control setXS" id="exampleInputPassword1" >
                </div>
                <div class="half-two">
                    <label for="exampleInputPassword1" class="bank">信用卡背面最後三碼</label>
                    <input type="number" class="form-control setXS" id="exampleInputPassword1">
                </div>
                
            </div>
          <!-- <div class="form-group">
                <label for="exampleInputPassword1" class="bank">信用卡背面最後三碼</label>
                <input type="number" class="form-control setXS" id="exampleInputPassword1">
          </div> -->
        </div>
        </label>
      </div>
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
   <div class="container">
     <a href="" class="contact">契約條款</a>
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

   <?php include __DIR__. "/_scripts.php"?>
   <script src="tw-city-selector-master/dist/tw-city-selector.js"></script>
   <script>
    //     var coll = document.getElementsByClassName("collapsible");
    //   var i;
      
    //   for (i = 0; i < coll.length; i++) {
    //     coll[i].addEventListener("click", function() {
    //       this.classList.toggle("active");
    //       var content = this.nextElementSibling;
    //       if (content.style.maxHeight){
    //         content.style.maxHeight = null;
    //       } else {
    //         content.style.maxHeight = content.scrollHeight + "px";
    //       } 
    //     });
    //   }
        // 按鈕顏色
    $(".bttn").click(function(){
        $(this).addClass("active1").siblings().removeClass("active1")
      })
    //   
    new TwCitySelector();

     //信用卡==
     $(document).ready(function(){
      $(".creditcard").click(function(){
       $(".atm").hide();
       $(".creditblank").show();

      })
    });
    //atm==
    $(document).ready(function(){
      $(".useatm").click(function(){
       $(".creditblank").hide();
       $(".atm").show();

      })
    });

    
  </script>

