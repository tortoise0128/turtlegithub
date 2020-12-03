<?php 
include __DIR__. "/_connect_db.php";
$pageName = 'products';
$qs = []; // query string
$perPage = 12;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$style = isset($_GET['style']) ? intval($_GET['style']) : 0;

$where = ' WHERE 1 ';
if($cate_id){
    $where .= " AND `category`=$cate_id";
    $qs['cate'] = $cate_id;
}

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: product.php');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: product.php?page=' . $totalPages);
        exit;
    }if($totalPages<=5){
        for($i=1; $i<=$totalPages; $i++){
            $pageBtns[] = $i;
        }
    } else {
        $tmpAr1 = [];
        for($i=$page-2; $i<=$totalPages; $i++){
            if($i>=1) {
                $tmpAr1[] = $i;
            }
            if(count($tmpAr1)>=5){
                break;
            }
        }
        $pageBtns = $tmpAr1;
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}



$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: product.php');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: product.php?page=' . $totalPages);
        exit;
    }if($totalPages<=5){
        for($i=1; $i<=$totalPages; $i++){
            $pageBtns[] = $i;
        }
    } else {
        $tmpAr1 = [];
        for($i=$page-2; $i<=$totalPages; $i++){
            if($i>=1) {
                $tmpAr1[] = $i;
            }
            if(count($tmpAr1)>=5){
                break;
            }
        }
        $pageBtns = $tmpAr1;
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}

$Sql2 = "SELECT `style` FROM `product` WHERE 1 ";
$cate2 = $pdo->query($Sql2)->fetchAll();
foreach($cate2 as $value){
}


$Sql3 = "SELECT `color` FROM `product` WHERE 1";
$cate3 = $pdo->query($Sql3)->fetchAll();




// --- 分類資料
$c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0";
$cates = $pdo->query($c_sql)->fetchAll();

$Sql4 = "SELECT * FROM `categories` WHERE `parent_sid`=1";
$cate4 = $pdo->query($Sql4)->fetchAll();

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
    .chose , .color , .style , .price{
        margin:50px 25px;
    }

    .price h3{
        margin-bottom: 25px;
    }
    .category a{
        display: block;
    }
    .flowerChose{
        margin: 15px 0 15px 20px;
        cursor: pointer;
    }

    .chose .flowerChose.active{
        /* margin-left: 20px; */
        color: sandybrown;
    }

    .colorSelect .colorChose.active{
        border: 2px solid #000;
    }

    .chose h3 , .color h3 , .style h3 , .price h3{
        font-style:italic;
    }

    .colorSelect{
        display: flex;
        flex-wrap:wrap;
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

    .style > div input{
        width:16px;
        height:16px;
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

    /* -----Boxborder----- */
    
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
                <div class="chose">
                    <h3>Category</h3>
                    <div class="category">
                        <a type="button" class="btn-<?= $cate_id==0 ? '' : 'outline-' ?>" role="button" href="product.php">
                            <h5 class="flowerChose  
                            <?php if($cate_id==$c[''])echo "active"; ?>">全部</h5>
                        </a>
                        <?php foreach($cates as $c): ?>
                            <a type="button" class="btn-<?= $cate_id==$c['sid'] ? '' : 'outline-' ?> 
                            
                            " role="button"
                            href="?cate=<?= $c['sid'] ?>">
                            <h5 class="flowerChose <?php
                                if($cate_id==$c['sid'])echo "active";
                            ?>"><?= $c['name'] ?></h5>
                            </a>
                        <?php endforeach; ?>
                        <!-- <h5 class="flowerChose">束花</h5>
                        <h5 class="flowerChose">禮盒花</h5>
                        <h5 class="flowerChose">頭花</h5>
                        <h5 class="flowerChose">乾燥花</h5> -->
                    </div>
                </div>
                

                <form class="price">
                    <h3>Price</h3>

                    <div class="demo-output">
                        <input class="range-slider" type="hidden" value="0,4000" style="display: none;">
                    </div>    
                </form>


                <div class="color">
                    <h3>Color</h3>
                    <div class="colorSelect ">
                        
                        <div class="all colorChose active"></div>

                        <div class="white colorChose"></div>

                        <div class="orange colorChose" style="background:#f2b46d"></div>

                        <div class="red colorChose" style="background:#e04b3a"></div>

                        <div class="purple colorChose" style="background:#864ea6"></div>

                        <div class="blue colorChose" style="background:#3393c5"></div>

                        <div class="pink colorChose" style="background:#ce4c8d"></div>
                    </div>
                </div>

                <div class="style">
                    <h3>Style</h3>
                    

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle" checked>
                        <label class="form-check-label">
                            全部
                        </label>
                    </div>

                    <div class="form-check" for="proStyle">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="proStyle">
                        
                            七夕情人節
                        </label>
                    
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="proStyle">
                        
                            冬季戀歌
                        </label>
                    
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="proStyle">
                        
                            春意盎然
                        </label>
                        
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="proStyle">
                        
                            夏日實驗
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 ">
                <div class="product">
                    <?php foreach($rows as $r): ?>
                    
                    <div class="productItem <?php 
                    $styles=explode(',', $r["style"]);
                            foreach($styles as $styleNum){
                                echo "style".$styleNum." "; }?><?php  $colors=explode(',', $r["color"]);
                                foreach($colors as $colorNum){
                                    echo "color".$colorNum." "; }?>" data-sid="<?= $r['sid'] ?>" >
                        <div class="f-box boxBorder">
                            <a href="product_in.php?sid=<?= $r['sid']?>">
                                <img src="img/small/<?= $r['img_small'] ?>-1.jpg">
                            </a>
                        </div>
                        <h4><?= $r['name'] ?></h4>
                        <h5>NT.<?= $r['price'] ?></h5>
                    </div>
                
                    <?php endforeach; ?>
                </div>

                <div aria-label="Page navigation example" class="page">
                    
                
                    <ul class="pagination justify-content-end">
                        <li class="page-item <?= $page==1 ? 'disabled' : '' ?>">
                            <a class="page-link " href="?page=<?= $page-1 ?>">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                            <?php for($i=1; $i<=$totalPages; $i++):
                                $qs['page'] = $i;
                                ?>
                                <li class="page-item <?= $page==$i ? 'active' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query($qs) ?>"><?=$i?></a>
                                </li>
                            <?php endfor; ?>
                        <li class="page-item <?= $page==$totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page+1 ?>" >
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>





<?php include __DIR__. "/_scripts.php" ?>




<script>

    $(".flowerChose").on('click',function(){
        console.log("flower click")
        $(this).toggleClass("active")
        .siblings() .removeClass("active")
    })

    $(".colorChose").on('click',function(){
        console.log("color click")
        $(this).toggleClass("active")
        .siblings() .removeClass("active")
    })

    $(".filter").on('click',function(){
        console.log("filter click")
        $(".barLeft").toggleClass("active")
    })

    $('.range-slider').jRange({
        from: 0,
        to: 4000,
        step: 1,
        scale: ["NT."+0,"NT."+1000,"NT."+2000,"NT."+3000,"NT."+ 4000 + "up"],
        format: '%s',
        width: 250,
        showLabels: true,
        isRange : true,
        theme : "theme-blue",
    });

</script>
<script>  
 
  $(document).ready(function() {
        $(".white").click(function(){
    $(".color1").siblings().hide();
    $(".color1").show();
    });

  });


  $(".orange").click(function(){
  $(".color2").siblings().hide();
  $(".color2 ").show();
  });
 

</script>

<?php include __DIR__. "/_html_footer.php" ?>
