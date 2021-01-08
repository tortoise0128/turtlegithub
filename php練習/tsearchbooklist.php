<?php
require __DIR__ . '/turtle128.php';
$pageName = 'searchbooklist';
$pageTitle = '龜的可搜尋資料表';
$qs = []; // query string
$perPage = 0;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$search = isset($_GET['search']) ? $_GET['search'] : '';

$where = ' WHERE 1 ';
if ($cate_id) {
    $where .= " AND `sid`=$cate_id ";
    $qs['cate'] = $cate_id;
}
if ($search) {
    $search2 = $pdo->quote("%$search%");  // avoid SQL injection
    $where .= " AND (`name` LIKE $search2 OR `email` LIKE $search2 OR `mobile` LIKE $search2 ) ";
    $perPage = 1;
}

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `address_book` $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

if ($totalRows > 0) {
    $sql = sprintf("SELECT * FROM `address_book` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}
?>
<?php include __DIR__ . '/thead.php' ?>
<style>
    .book1 p {
        text-align: center;
        font-weight: bold;
        color: red;
        display: none;
    }

    .table-bordered,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }

    .table-bordered tr:nth-child(even) {
        background: aliceblue;
    }

    .table-bordered tr:nth-child(odd) {
        background-color: #f5f5f5;

    }

    .table-bordered td:hover {
        background-color: darkseagreen;

    }

    @media screen and (max-width: 540px) {
        .book1 {
            width: 95%;
        }

        .book1 p {
            display: block;
        }

        .page-item {
            /* width: 10%; */
        }

        .pagination {
            justify-content: space-evenly;
        }
    }
</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <div class="productitem">
            <h3>龜的搜尋列表</h3>

            <!-- 搜尋 -->
            <form class="form-inline">
                <?php if (!empty($cate_id)) : ?>
                    <input type="hidden" name="cate" value="<?= $cate_id ?>">
                <?php endif ?>
                <input class="form-control" type="search" placeholder="Search" name="search" value="<?= htmlentities($search) ?>" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>

        <div class="">
            <!-- 我的另一種頁數 -->
            <?php if ($totalRows < 1) : ?>
                <div class="alert alert-danger" role="alert">
                    查詢不到資料!!!
                </div>
            <?php endif; ?>

        </div>

        <div class="productitem">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><i class="fas fa-trash-alt"></i></th>
                        <th>#</th>
                        <th>姓名</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>birthday</th>
                        <th>address</th>
                        <th><i class="fas fa-edit"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r) : ?>
                        <tr>
                            <td>
                                <a href="javascript: delete_it(<?= $r['sid'] ?>)">
                                    <!-- 假的刪除 到tbooklistdel.php執行 -->
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td><?= $r['sid'] ?></td>
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $r['mobile'] ?></td>
                            <td><?= $r['birthday'] ?></td>
                            <td><?= htmlentities($r['address']) ?></td>
                            <!-- 不讓人 alert("hello") -->
                            <!--                    <td>-->
                            <?//= strip_tags($r['address']) ?>
                            <!--</td>-->
                            <td>
                                <a href="tbooklistedit.php?sid=<?= $r['sid'] ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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