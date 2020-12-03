<?php 
include __DIR__. "/_connect_db.php";

$sql = "SELECT * FROM `product`";
$row = $pdo->query($sql)->fetchAll();


$Sql2 = "SELECT `style` FROM `product` WHERE 1 ";
$cate2 = $pdo->query($Sql2)->fetchAll();
foreach($cate2 as $value){
    // $styles=explode(',', $value["style"]);
    // foreach($styles as $styleNum){
    //         echo "style".$styleNum." ";
    // }
    // echo "<br/>";
}

$Sql3 = "SELECT `color` FROM `product` WHERE 1";
$cate3 = $pdo->query($Sql3)->fetchAll();




// --- 分類資料
$c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0";
$cates = $pdo->query($c_sql)->fetchAll();

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
/* ------------pagination---------- */

    .pagination{
        justify-content: flex-end;
    }
    .page{
        font-size: 16px;
        margin:0 20px;
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

    .disabled{
        display: none;
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
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle">
                        <label class="form-check-label">
                            畢業季

                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle">
                        <label class="form-check-label">
                            七夕情人節
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle">
                        <label class="form-check-label">
                            冬季戀歌
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle">
                        <label class="form-check-label">
                            春意盎然
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="proStyle">
                        <label class="form-check-label">
                            夏日實驗
                        </label>
                    </div>
                </div>
            </div>

            



            <div class="col-lg-9 " id="listId">
                <div class="product list">
                    <?php foreach($row as $r): ?>
                    
                        <div class="productItem <?php 
                            $styles=explode(',', $r["style"]);
                                    foreach($styles as $styleNum){
                                        echo "style".$styleNum." "; }?><?php  $colors=explode(',', $r["color"]);
                                        foreach($colors as $colorNum){
                                            echo "color".$colorNum." "; }?>" data-sid="<?= $r['sid'] ?>" >
                            <div class="f-box">
                                <a href="product_in?sid=<?= $r['sid'] ?>.php">
                                    <img src="img/small/<?= $r['img_small'] ?>.jpg">
                                </a>
                            </div>
                            <h4><?= $r['name'] ?></h4>
                            <h5>NT.<?= $r['price'] ?></h5>
                        </div>
                
                    <?php endforeach; ?>

                </div>
                <ul class="pagination"></ul>

            </div>
        </div>
    </div>
</div>





<?php include __DIR__. "/_scripts.php" ?>



<script>

    $(".flowerChose").on('click',function(){
        console.log("click")
        $(this).toggleClass("active")
        .siblings() .removeClass("active")
    })

    $(".colorChose").on('click',function(){
        console.log("click")
        $(this).toggleClass("active")
        .siblings() .removeClass("active")
    })

    $(".filter").on('click',function(){
        console.log("click")
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



    var options = {
        valueNames: [ 'name', 'category' ],
        page: 12,
        pagination: true,
    };
    var listObj = new List('listId', options);


  $(document).ready(function() {
        $(".white").click(function(){
    $(".color1").siblings().hide();
    $(".color1").show();
    listObj.update();
    });

  });



  $(".orange").click(function(){
  $(".color2").siblings().hide();
  $(".color2 ").show();
  });
 






</script>

<?php include __DIR__. "/_html_footer.php" ?>
