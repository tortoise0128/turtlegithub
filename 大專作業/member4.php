<?php include __DIR__ . '/_html_header.php' ?>
<?php include __DIR__ . '/_navbar.php' ?>
<style>
    .row {
        height: 700px;
    }

    .Account {
        margin: 80px 0;
    }

    ul li {
        list-style: none;
    }

    .MainTitle {
        font-size: 44px;
        font-style: italic;
        margin-bottom: 20px;
    }

    .myAccount {
        font-size: 20px;
        margin-bottom: 50px;
    }

    .secondTitle {
        font-size: 40px;
    }

    ul .accountChose {
        font-size: 20px;
        color: #c4c5c5;
    }

    ul .accountChose:hover {
        text-decoration: none;
        color: #f2b46d;
    }

    ul a.active {
        color: #f2b46d;
    }

    .chose li {
        margin: 15px 0;
    }


    .main {
        margin-top: 260px;
    }
    .memberAll{
        display:flex;
        height: 100px;
        text-align: center;
        position: absolute;
        right: 900px;
        top: 280px;
        
    }
    .memberAll div{
        padding-top:30px;
        margin-left:15px;
    }
    .memberPicture{
        height: 87px;
        width: 87px;
        background-color: #f2b46d;
        border-radius: 50%;
    }
    .memberName{
        font-size: 26px;
    }
    .memberLevel{
        background-color: #c4c5c5;
        border-radius: 8px;
        text-align: center;
        color: white;
        margin-top: 10px;
        font-size: 14px;
    }

    .form-group {
        display: flex;
        align-items: center;
    }

    .formName {
        font-size: 20px;
        align-items: center;
        /* margin: 0 auto; */
    }

    .form-group2 {
        display: flex;
    }

    .formName2 {
        font-size: 20px;
        text-align: center;
        padding: 5px;
    }

    .qq,
    .hahah {
        padding: 0;
        width: 100%;
    }

    .WEWE {
        padding: 0 4px 0 0;
    }

    .drop-menu {
        max-width: 300px;
    }
    .dropName{
        color: #f2b46d;
        margin-top: 10px;
        cursor:pointer;
    }
    .formName2{
        font-size: 14px;
    }
    input {
        display: none;
    }
    .menu-list {
        background-color: #FFF;
        overflow: hidden;
        max-height: 0;
    }

    a {
        display: block;
        padding: 4px;
    }

    input:checked+.menu-list {
        max-height: 400px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-3 list">
            <ul class="Account">
                <li class="MainTitle">My Account</li>
                <li class="myAccount">我的帳戶</li>
            </ul>
            <ul class="chose">
                <li><a href="" class="accountChose">會員中心</a></li>
                <li><a href="" class="accountChose">訂單查詢</a></li>
                <li><a href="" class="accountChose">常見問答</a></li>
                <li><a href="" class="accountChose active">收藏</a></li>
            </ul>
        </div>
        <!-- --------------------------------- -->
        
        <div class=" memberAll ">
            <figure class="memberPicture">
                <img src="" alt="">
            </figure>
            <div><p class="memberName">Ying Chen</p></div>
            <div><p class="memberLevel" >一般會員</p></div>
        </div>   
        <div class="col-lg-9 main d-flex">
        <form class="col-lg-6">

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="formName col-lg-3">姓名</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ying Chen">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="formName col-lg-3">信箱</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="glory0502@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="formName col-lg-3">密碼</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="設定新密碼">
                </div>
                <div class="form-group">
                    <label for="inlineFormCustomSelectPref" class="formName col-lg-3">性別</label>
                    <select class="custom-select" id="inlineFormCustomSelectPref">
                        <option selected>性別</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inlineFormCustomSelectPref" class="formName col-lg-3">生日</label>
                    <select class="custom-select" id="inlineFormCustomSelectPref">
                        <option selected>1997/01/02</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="formName col-lg-3">電話</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0903667286">
                </div>
            </form>
            <form class="col-lg-9 dressform d-flex">
                <label for="exampleFormControlInput1" class="formName col-lg-2">地址</label>
                <div class=" hahah ">
                    <div class="col-lg-12 d-flex hahah">
                        <div class="form-group col-lg-4 qq WEWE">
                            <select id="inputState" class="form-control">
                                <option selected>城市/縣 </option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4 qq">
                            <select id="inputState" class="form-control">
                                <option selected>區/市/鄉/鎮</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <input type="email" class="form-control col-lg-8" id="exampleFormControlInput1" placeholder="設定新密碼">
                    <div class="drop-menu">
                        <label class="dropName" for="drop-menu">
                            新增送貨地址           <i class="fas fa-caret-down"></i>
                        </label>
                        <input type="checkbox" id="drop-menu">

                        <ul class="menu-list">
                            <li>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="formName2 col-lg-3">姓名</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ying Chen">
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                <label for="exampleFormControlInput1" class="formName2 col-lg-3">電話</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0903667286">
                                </div>
                            </li>
                             <li>
                                <div class="form-group">
                                <label for="exampleFormControlInput1" class="formName2 col-lg-3">城市</label>
                                <select id="inputState" class="form-control">
                                <option selected>城市/縣</option>
                                <option>...</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                <label for="exampleFormControlInput1" class="formName2 col-lg-3">  </label>
                                <select id="inputState" class="form-control">
                                <option selected>區/市/鄉/鎮</option>
                                <option>...</option>
                                </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                <label for="exampleFormControlInput1" class="formName2 col-lg-3">地址</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </li>
                   
                    </ul>
                </div>
        </div>
        </form>
    </div>

    <!-- --------------------------------- -->

</div>
</div>
<?php include __DIR__ . '/_html_footer.php' ?>
<?php include __DIR__ . '/_scripts.php' ?>

<script>

</script>