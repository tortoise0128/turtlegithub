<?php
require __DIR__ . '/turtle128.php';
$pageName = 'productlist';
$pageTitle = '龜的商品列表';
$qs = []; // query string
$perPage = 3;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$search = isset($_GET['search']) ? $_GET['search'] : '';

$where = ' WHERE 1 ';
if ($cate_id) {
    $where .= " AND `category_sid`=$cate_id ";
    // 類別標籤 我的子節點
    $qs['cate'] = $cate_id;
}
if ($search) {
    $search2 = $pdo->quote("%$search%");  // avoid SQL injection
    $where .= " AND (`author` LIKE $search2 OR `flowername` LIKE $search2 ) ";
}

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `products` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: tproductlist.php');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: tproductlist.php?page=' . $totalPages);
        exit;
    }
    $sql = sprintf("SELECT * FROM `products` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}
// --- 分類資料
$c_sql = "SELECT * FROM `categories` WHERE `parent_sid`=0";
$cates = $pdo->query($c_sql)->fetchAll();

?>
<?php include __DIR__ . '/thead.php' ?>
<style>
    .flowername {
        overflow: auto;
        /* text-overflow: ellipsis; */
        white-space: wrap;
    }

    .productitem {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .p-item {
        /* flex: 1; */
        width: 30%;
    }

    .card-img {
        width: 50%;
        height: 50%;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    @media screen and (max-width: 540px) {
        .book1 {
            width: 95%;
        }

        .page-item {
            /* width: 10%; */
        }

        .pagination {
            justify-content: space-evenly;
        }

        .p-item {
            /* flex: 1; */
            width: 100%;
        }
    }
</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <div class="productitem">
            <h3>龜的商品列表</h3>

            <!-- 搜尋 -->
            <form class="form-inline">
                <?php if (!empty($cate_id)) : ?>
                    <input type="hidden" name="cate" value="<?= $cate_id ?>">
                <?php endif ?>
                <input class="form-control" type="search" placeholder="Search" name="search" value="<?= htmlentities($search) ?>" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>

        <div class="productitem">
            <!-- 這個才是篩選器??? -->
            <!-- 資料庫裡有個categories做了一個父節點 -->
            <a type="button" class="btn btn-<?= $cate_id == 0 ? '' : 'outline-' ?>primary" role="button" href="tproductlist.php">所有商品</a>
            <!--   `category_sid`子節點 生成分類按鈕 -->
            <!--   -->
            <?php foreach ($cates as $c) : ?>
                <a type="button" class="btn btn-<?= $cate_id == $c['sid'] ? '' : 'outline-' ?>primary" role="button" href="?cate=<?= $c['sid'] ?>">
                    <?= $c['name'] ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="">
            <!-- 我的另一種頁數 -->
            <?php if ($totalRows < 1) : ?>
                <div class="alert alert-danger" role="alert">
                    查詢不到資料!!!
                </div>
            <?php endif; ?>

            <ul class="pagination">
                <li class="page-item">共</li>
                <?php for ($i = 1; $i <= $totalPages; $i++) :
                    $qs['page'] = $i;
                ?>
                    <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?<?= http_build_query($qs) ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item">頁</li>
            </ul>

        </div>

        <div class="productitem">
            <?php foreach ($rows as $r) : ?>
                <div class="p-item" data-sid="<?= $r['sid'] ?>">
                    <!-- 就sid -->
                    <div class="card">
                        <div class="card-img">
                            <img src="img/<?= $r['flower_img'] ?>.jpg" class="card-img-top" alt="商品圖">
                            <!-- 照片 -->
                            <!-- 記得統一成jpg格式 -->
                            <!-- 雖然老師說盡量不要用 中文.jpg 但好像沒影響 -->
                        </div>
                        <div class="">
                            <p class="flowername" title="商品名"><?= $r['flowername'] ?></p>
                            <!-- 商品名 -->
                            <p class="flowername" title="作者"><i class="fas fa-at"></i> <?= $r['author'] ?></p>
                            <!-- 作者 -->
                            <p class="" title="價位"><i class="fas fa-dollar-sign"></i> <?= $r['price'] ?></p>
                            <!-- 價位 -->
                            <p>
                                <select type="number" class="form-control" style="display: inline-block; width: auto;">
                                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                                <button type="button" class="btn btn-primary buy-btn">買拉</button>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const buy_btns = $('.buy-btn');

    buy_btns.click(function() {
        const p_item = $(this).closest('.p-item');
        const sid = p_item.attr('data-sid');
        const qty = p_item.find('select').val();

        const sendObj = {
            action: 'add',
            sid,
            quantity: qty
        }
        $.get('thandlecart.php', sendObj, function(data) {
            console.log(data);
            setCartCount(data);
        }, 'json');
    });
</script>


<?php require __DIR__ . '/tfoot.php' ?>