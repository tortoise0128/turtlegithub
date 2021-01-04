<?php
require __DIR__ . '/turtle128.php';
$pageName = 'booklist';
$pageTitle = '龜的資料表';
$perPage = 5; // 每頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看的頁數

$t_sql = "SELECT COUNT(sid) FROM `address_book`";
// 從`address_book`叫資料出來
//$t_stmt = $pdo->query($t_sql);
//$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$stmt = null;
$pageBtns = [];
if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    //  floor(10.5) == 10    floor(-10.5) == -11
    //  ceil(10.5) == 11    ceil(-10.5) ==-10
    if ($page < 1) {
        header('Location: tbooklist.php');
        exit; // die();
    }
    if ($page > $totalPages) {
        header("Location: tbooklist.php?page=$totalPages");
        exit; // die();
    }


    $sql = sprintf("SELECT * FROM address_book ORDER BY `sid` DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    // 升冪ASC 降冪DESC
    $stmt = $pdo->query($sql);
    // 我的頁數$pageBtns
    if ($totalPages <= 5) {
        for ($i = 1; $i <= $totalPages; $i++) {
            $pageBtns[] = $i;
        }
    } else {
        $tmpAr1 = [];
        for ($i = $page - 2; $i <= $totalPages; $i++) {
            if ($i >= 1) {
                $tmpAr1[] = $i;  // array push
            }
            if (count($tmpAr1) >= 5) {
                break;
            }
        }
        $tmpAr2 = [];
        for ($i = $page + 2; $i >= 1; $i--) {
            if ($i <= $totalPages) {
                array_unshift($tmpAr2, $i);
            }
            if (count($tmpAr2) >= 5) {
                break;
            }
        }
        $pageBtns = (count($tmpAr1) > count($tmpAr2)) ? $tmpAr1 : $tmpAr2;
    }
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
        <h3>龜的資料表</h3>
        <p>表格很大請左右滑動，謝謝</p>
    </div>
    <div class="book1">
        <?php if (!empty($stmt)) : ?>
            <!-- 我的頁數 -->
            <ul class="pagination">
                <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                    <!-- 三元運算 -->
                    <a class="page-link" href="?page=<?= $page - 1 ?>">
                        <i class="fas fa-arrow-circle-left"></i>
                    </a>
                </li>
                <?php foreach ($pageBtns as $i) : ?>
                    <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <!-- 生成頁數 -->
                <?php endforeach; ?>
                <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </li>
            </ul>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                沒有資料!!!
            </div>
        <?php endif; ?>
    </div>
    <div class="book1">
        <?php if (!empty($stmt)) : ?>
            <!-- 我的通訊錄 -->
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
                    <?php while ($r = $stmt->fetch()) : ?>
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
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <p class="book1">如欲新增資料，請到<a href="tbookinsert.php">新增資料</a>，謝謝</p>
</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    function delete_it(sid) {
        if (confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)) {
            location.href = 'tbooklistdel.php?sid=' + sid;
        }
    }
</script>
<?php require __DIR__ . '/tfoot.php' ?>