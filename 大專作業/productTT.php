<?php 
include __DIR__. "/_connect_db.php";



$perPage = 12;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$where = " WHERE 1";

$rows = [];
$totalPages = 0;
$t_sql = "SELECT * FROM `product` $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];


if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) $page = 1;
    if ($page > $totalPages) {
        header('Location: productTT.php?page=' . $totalPages);
        exit;
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);

    $rows = $pdo->query($sql)->fetchAll();
}

$stmt = null;
$stmt = $pdo->query($sql);


?>

<?php include __DIR__. "/_html_header.php"?>
<?php include __DIR__. "/_navbar.php" ?>


<style>
    *{
        font-family: 'Lusitana', 'Noto Sans TC', serif; 
    }
    h5{
        color:#ccc;
    }

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

    .container{
        max-width:1366px;
    }

    .slider{
        margin: 150px auto 0;
    }
    .carousel-item{
        height:500px;
        overflow:hidden;
    }
    .carousel-item img{
        width:100%;
        height: 100%;
        object-fit: cover;
    }

    @media screen and (max-width:968px){
        .carousel-item{
            height: 200px;
        }
        .slider{
            margin: 80px auto 0;
        }
    }
/* --------------------------- */
    .main{
        display: flex;
    }
    .chose , .color , .price{
        margin:50px 25px;
    }

    .price h3{
        margin-bottom: 25px;
    }
    .category , .style {
        font-size:20px;
        color:#707070;
    }
    .categoryChose, .styleChose{
        padding:0 0 0 20px;
    }
    .colorSelect {
        padding: 0;
        margin-right: 3px;
        cursor: pointer;
        align-items: center;
        justify-content: center;

    }

    .chose h3 , .color h3 , .style h3 , .price h3{
        font-style:italic;
    }

    .colorChose{
        width:25px;
        height:25px;
        border-radius:50%;
        border:1px solid gray;
        margin:5px;
        cursor: pointer;
    }

    .form-check-input{
        background: #b9b4b4;
        border: 0 transparent;
    }

    .style > div{
        margin:5px; 
    }

    .style > div label{
        font-size: 20px;
    }

    .barLeft{
        background: #fff;
        z-index: 10;

    }

    @media screen and (max-width:968px){
        .barLeft{
            position: absolute;
            transform: translate(-400px);
            transition: 1s;
            height: 100vh;
            opacity: 0;
        }

        .barLeft.active{
            transform:translate(-10px);
            opacity:1;
            transition:1s;
            height: 100vh;
        }
    }
/* --------------------------- */


    .proTitle h1{
        margin:40px;
        font-weight: 700;
        font-size: 36px;
        color: #707070;
    }

    .proTitle nav li{
        list-style: none;
    }

    .filter{
        display: none;
    }

    .product{
        display: flex;
        margin:0;
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

    .productItem h4, .productItem h5{
        margin-top:10px;
    }

    .product .f-box img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .page{
        margin:0 100px;
        z-index: 1 !important;
    }

    .page-link{
        border: transparent;
        color: #707070;
        
    }
    .page-link:hover{
        background-color: #F4F4F4;
        color: #707070;
    }
    .fas{
        color: #6B6B6B;
        font-size: 24px;
    }
    .page-item.active .page-link{
        background-color:transparent;
        color:#F2B46D;
    }
/*-------boxBorder----------*/
   
    .boxBorder {
  width: 300px;
  height: 300px;
  display: inline-block;
  background: none;
  border: none;
  transition: color .2s;
  position: relative;
  overflow: hidden;
  transform: translateZ(0);
  cursor: pointer !important;
}

.boxBorder:before, .boxBorder:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 5px solid transparent;
  will-change: transform;
  transition: transform .3s ease;
  pointer-events: none;
  transform: translateZ(0);
}

.boxBorder:before {
  border-color: #F2B46D transparent;
  transform: skew(-81deg, 0);
}

.boxBorder:after {
  border-color: transparent #F2B46D;
  transform: skew(0, 70deg);
  transition: transform .4s;
}

.boxBorder:hover {
  color: #F2B46D;
}

.boxBorder:hover:before, .boxBorder:hover:after {
  transform: skew(0, 0);
}

    
    @media screen and (max-width:968px){

        .proTitle{
            flex-wrap: wrap;
        }

        .filter{
            display:inline;
        }

        .proTitle h1{
            margin: 25px auto;
            width: 100%;
            text-align: center;
        }

        .col-lg-9{
            padding: 0;
        }
        
        .productItem{
            margin:10px;
        }

        .productFilter{
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin:0 10px;
        }

        .product .f-box{
            width:150px;
            height:155px;
        }
        .page{
            margin:0 auto;
        }

        .page ul{
            justify-content: center !important;
        }
        .dropdown-menu{
            left: -30px;
        }
    }
    .come{
        display: block;
    }
    .bye{
        display: none;
        background-color: #000;

    }
    .form-check-label{
        display: block;
    }
    .styleList a{
        width: 100%;
    }

    /* ----------radio--------- */
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
        border: 1.5px solid #F2B46D;
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

    /* ---------radioColor---------- */
    .colorBtn[type="radio"] {
        appearance: none;
        display: inline-block;
        width: 24px;
        height: 24px;
        background-clip: content-box;
        border: 1px solid #707070;
        cursor:pointer;
    }
    #colorW[type=radio] {
        background-color: #fff;
    }
    #colorO[type=radio] {
        background-color: #f2b46d;
    }
    #colorR[type=radio] {
        background-color: #e04b3a;
    }
    #colorP[type=radio] {
        background-color: #864ea6;
    }
    #colorB[type=radio] {
        background-color: #3393c5;
    }
    #colorM[type=radio] {
        background-color: #ce4c8d;
    }
</style>

<div class="container">

    <div class="row slider">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/products/slide(1).jpg" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/products/slide(2).jpg" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/products/slide(3).jpg" class="d-block " alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="proTitle d-flex justify-content-between">
        <h1>全部</h1>

        <nav class="navbar navbar-expand-lg productFilter">
            <li class="filter">
                <a class="nav-link" href="#">
                    <i class="fas fa-sliders-h"></i>Filter <i class="fas fa-angle-down"></i>
                </a>
            </li>

            <li class=" dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                排列順序
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item dro-item" href="#">上架時間:由新到舊</a>
                    <a class="dropdown-item dro-item" href="#">上架時間:由舊到新</a>
                    <a class="dropdown-item dro-item" href="#">價格:由高到低</a>
                    <a class="dropdown-item dro-item" href="#">價格:由低到高</a>
                </div>
            </li>
        </nav>
    </div>

    <div class="row">
        <div class="col main">

            <div class="barLeft col-lg-3">
                <form name="form1">
                <div class="chose">
                    <h3>Category</h3>
                    <div class="">
                        <ul class="categoryChose">
                            <li>
                                <label class="category"><input type="radio" name="cate" class="input_all" value="0"  id="allFlower" checked>全部</label>
                            </li>
                            <li>
                                <label class="category"><input type="radio" name="cate" class="input_all" value="1" id="bouquet">花束</label>
                            </li>
                            <li>
                                <label class="category"><input type="radio" name="cate" class="input_all" value="2" id="giftFlower">禮盒花</label>
                            </li>
                            <li>
                                <label class="category"><input type="radio" name="cate" class="input_all" value="3" id="headFlower">頭花</label>
                            </li>
                            <li>
                                <label class="category"><input type="radio" name="cate" class="input_all" value="4" id="dryFlower">乾燥花</label>
                            </li>
                        </ul>
                    </div>
                </div>
                

                <div class="price">
                    <h3>Price</h3>

                    <div class="demo-output">
                        <input class="range-slider" type="hidden" value="0,4000" style="display: none;">
                    </div>    
                </div>


                <div class="color">
                    <h3>Color</h3>
                    <div>
                        <ul class="d-flex">
                            <li class="" >
                                <label class=" colorSelect ">
                                    <input type="radio" id="colorW" name="colorChose" value="1" class="colorBtn" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="" >
                                <label class=" colorSelect ">
                                    <input type="radio" id="colorO" name="colorChose" value="2" class="colorBtn" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="">
                                <label class=" colorSelect ">
                                    <input type="radio" id="colorR" name="colorChose" value="3" class="colorBtn " />
                                    <span></span>
                                </label>
                            </li>
                            <li class="">
                                <label class=" colorSelect ">
                                    <input type="radio" id="colorP" name="colorChose" value="4" class="colorBtn " />
                                    <span></span>
                                </label>
                            </li>
                            <li class="">
                                <label class="colorSelect ">
                                    <input type="radio" id="colorB" name="colorChose" value="5" class="colorBtn " />
                                    <span></span>
                                </label>
                            </li>
                            <li class="">
                                <label class="colorSelect ">
                                    <input type="radio" id="colorM" name="colorChose" value="6" class="colorBtn " />
                                    <span></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="chose">
                    <h3>Style</h3>
                    <ul class="styleChose">
                            <li>
                                <label class="style"><input type="radio" name="style" class="input_all" value="0"  id="allStyle" checked>全部</label>
                            </li>
                            <li>
                                <label class="style"><input type="radio" name="style" class="input_all" value="1" id="valentine">七夕情人節</label>
                            </li>
                            <li>
                                <label class="style"><input type="radio" name="style" class="input_all" value="2" id="winter">冬季戀歌</label>
                            </li>
                            <li>
                                <label class="style"><input type="radio" name="style" class="input_all" value="3" id="spring">春意盎然</label>
                            </li>
                            <li>
                                <label class="style"><input type="radio" name="style" class="input_all" value="4" id="summer">夏日實驗</label>
                            </li>
                        </ul>
                </div>
                </form>
            </div>

            <div class="col-lg-9 ">
                <div class="product">
                    
                </div>

                <div aria-label="Page navigation example" class="page">
                    
                
                    <ul class="pagination justify-content-end">
                        
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include __DIR__. "/_scripts.php" ?>


<script>  

const productArea = $('.product');
const page = $(".pagination")


const productTpl = function(obj){
    return `<div class="productItem " data-sid="${obj.sid}" >
            <div class="f-box boxBorder">
                <a href="product_in.php?sid=${obj.sid}">
                    <img src="img/small/${obj.img_small}-1.jpg">
                </a>
            </div>
            <h4>${obj.name}</h4>
            <h5>NT.${obj.price}</h5>
        </div>`
};

function pageBtnTpl(obj){
            //obj.i  頁碼
            //obj.isActive 當前這頁要做反白
            return `<li class="page-item ${obj.isActive ? 'active' : '' }">
                    <a class="page-link" href="javascript:gotoPage(${obj.i})">${obj.i}</a>
                </li>`;
        }


function productGet(data) {
    if (data && data.rows) {
        for (let i in data.rows) {
            productArea.append(productTpl(data.rows[i]));
            }
        }
    }

function productHash(){
    let h = location.hash.slice(1);
    let sendObj = {};

    try {
        sendObj = JSON.parse(h);
    }catch(ex){
        sendObj = {}
    }
    // info.innerHTML = h;

    $.get('product_api2.php', sendObj, function(data){

        console.log('data',data)

        page.empty();
        page.append(`<li class="page-item ${data.page===1 ? 'disabled' : '' }">
                        <a class="page-link" href="javascript:gotoPage(${data.page-1})" >
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>`);

        for (let s in data.pageBtns){
            page.append( pageBtnTpl({
                i: data.pageBtns[s],
                isActive : data.pageBtns[s] === data.page
            }) );
        }

        page.append(`<li class="page-item ${data.page===data.totalPages ? 'disabled' : '' }">
                        <a class="page-link" href="javascript:gotoPage(${data.page+1})" >
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>`);

        productArea.empty();
        for(let s in data.rows){
            productArea.append( productTpl(data.rows[s]) );
        }

    },'json');
};

    window.addEventListener('hashchange', productHash);
    productHash();

    let fObj = {};

    function getUserSelectData() {
        fObj = {};
        fObj.cate = document.form1.cate.value;
        fObj.colorChose = document.form1.colorChose.value;
        fObj.style = document.form1.style.value;
        fObj.prices = range_slider.val();
    }

    // function whenUserSelected(event) {

    // }

    $('form[name=form1] input[type=radio]').click(function(){
        getUserSelectData();
        location.href = '#' + JSON.stringify(fObj);

    });
    function gotoPage(page){
        getUserSelectData();
        fObj.page = page;
        location.href = '#' + JSON.stringify(fObj);
    }
    // $('.categoryChose input.cate').change(function(){
    //     fObj = {};

    //     fObj.cate = $('input.cate').val();

    // })







    const range_slider = $('.range-slider');
    range_slider.jRange({
        from: 0,
        to: 4000,
        step: 1,
        scale: [0,1000,2000,3000, 4000],
        format: '%s',
        width: 250,
        showLabels: true,
        isRange : true,
        theme : "theme-blue",
        ondragend: function(){
            console.log(range_slider.val());
            getUserSelectData();
            location.href = '#' + JSON.stringify(fObj);
        },
    });

</script>

<?php include __DIR__. "/_html_footer.php" ?>
