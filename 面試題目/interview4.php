<?php
$pageTitle = '';
require __DIR__ . '/turtle128.php';
// 忘記primary key搞死自己
// 叫成績
$t_sql = "SELECT COUNT(sid) FROM `score`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$stmt = null;
$sql = sprintf("SELECT * FROM `score` WHERE `sid`");
$stmt = $pdo->query($sql);
// 叫學生
$t_sql = "SELECT COUNT(sid) FROM `student`";
$stmt2 = null;
$sql = sprintf("SELECT * FROM `student` WHERE `sid`");
$stmt2 = $pdo->query($sql);
// 叫班級
$t_sql = "SELECT COUNT(sid) FROM `class`";
$stmt3 = null;
$sql = sprintf("SELECT * FROM `class` WHERE `sid`");
$stmt3 = $pdo->query($sql);
// 加總?
$stmt4 = null;
// $sql = sprintf("SELECT `name`,`class name` FROM `class`,`student` WHERE `class`.`id`=`student`.`class_id`");
// SELECT sum(加總欄位) FROM `資料表名稱` WHERE 符合條件才列入加總 GROUP BY 根據此欄位相同才加總 
$sql = sprintf("SELECT `name`,`class name`,SUM(`score`) FROM `class`,`student`,`score` WHERE `class`.`id`=`student`.`class_id` AND `student`.`id`=`score`.`id` GROUP by `score`.`id`");
$stmt4 = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP面試題目</title>
    <STyle>
        body {
            background: whitesmoke;
        }

        .d-flex {
            display: flex;
        }

        .Introduce {
            background: rgb(240, 237, 237);
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .headp {
            overflow: auto;
        }

        /* -------------------------------------------- */

        .container {
            width: 90%;
            margin: 0 auto;
            background: white;
            padding: 10px;
        }

        strong {
            margin: 10% 0 10% 0;
            /* 不要直接在元素上下css */
        }

        .capybara {
            margin-left: 2%;
        }

        .limitn {
            border: 1px solid aliceblue;
        }

        /* 第一題 */

        #table {
            margin: 0 auto;
        }

        /* 第二題 */

        .table-striped {
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
        }

        .table3 {
            justify-content: space-around;
            align-items: center;
        }

        @media screen and (max-width: 768px) {
            .d-flex {
                display: flex;
                flex-wrap: wrap;
            }

        }
    </STyle>
</head>

<body>
    <!-- Alt + Shift + F 自動排版 -->
    <header class="d-flex Introduce pt-3">
        <p class="headp" style="font-weight: bold;">您好，只是面試紀錄，無正確答案，請多多指教</p>
        <!-- 應該看得懂 mysql資料庫就不給拉 -->
    </header>
    <main class="container">
        <!-- 第一題 -->
        <div class="capybara">
            <strong id="q1">+ 第一題 +</strong>
            <p style="font-weight: bold;">請將下列表格資料用JSON陣列表示</p>
            <div class="limitn table2">

            </div>
            <!-- 第二題 -->
            <div class="capybara">
                <strong id="q2">+ 第二題 +</strong>
                <p style="font-weight: bold;">有三個SQL TABLE:成績、學生、班級，請寫一條SQL產生個人成績加總結果</p>
                <div class="limitn table3 d-flex ">
                    <div>
                        <!-- var json = `
[{"id":1,"subject":"國文","score":"65"},
{"id":1,"subject":"英文","score":"75"},
{"id":2,"subject":"國文","score":"60"},
{"id":2,"subject":"英文","score":"70"},
{"id":3,"subject":"國文","score":"80"},
{"id":3,"subject":"英文","score":"50"},] `; -->

                        <?php if (!empty($stmt)) : ?>
                            <!-- score -->
                            <table class="table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>ID</th>
                                        <th>科目</th>
                                        <th>成績</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r = $stmt->fetch()) : ?>
                                        <tr>
                                            <!-- <td><?= $r['sid'] ?></td> -->
                                            <td><?= $r['id'] ?></td>
                                            <td><?= $r['subject'] ?></td>
                                            <td><?= $r['score'] ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div>
     <!-- var json = `
[{"id":1,"class_id":1,"name":"王大明"},
{"id":2,"class_id":1,"name":"黃小毛"},
{"id":3,"class_id":2,"name":"陳大大"}] `; -->                


                        <?php if (!empty($stmt2)) : ?>
                            <!-- student -->
                            <table class="table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>ID</th>
                                        <th>班級ID</th>
                                        <th>姓名</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r2 = $stmt2->fetch()) : ?>
                                        <tr>
                                            <!-- <td><?= $r2['sid'] ?></td> -->
                                            <td><?= $r2['id'] ?></td>
                                            <td><?= $r2['class_id'] ?></td>
                                            <td><?= $r2['name'] ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div>
 <!-- var json = `
[{"id":1,"class name":"三年 五班"},
{"id":2,"class name":"三年 六班"}] `; -->  

                        <?php if (!empty($stmt3)) : ?>
                            <!-- class -->
                            <table class="table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>ID</th>
                                        <th>班級</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r3 = $stmt3->fetch()) : ?>
                                        <tr>
                                            <!-- <td><?= $r3['sid'] ?></td> -->
                                            <td><?= $r3['id'] ?></td>
                                            <td><?= $r3['class name'] ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                    <div>
                        <!-- 他要的答案 -->
 <!-- var json = `
[{"class name":"三年 五班","name":"王大明","Total":140},
{"class name":"三年 五班","name":"黃小毛",""Total":130},
{"class name":"三年 六班","name":"陳大大","Total":130}] `; -->  

                        <?php if (!empty($stmt4)) : ?>
                            <!-- 答案 -->
                            <table class="table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>班級</th>
                                        <th>姓名</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r4 = $stmt4->fetch()) : ?>
                                        <tr>
                                            <td><?= $r4['class name'] ?></td>
                                            <td><?= $r4['name'] ?></td>
                                            <td><?= $r4['SUM(`score`)'] ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </main>
    <footer class="d-flex Introduce">
        <p class="headp ml-2" style="font-weight: bold;">"您好，感謝閱卷完畢"</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <Script>
        // 第一題
        // https://www.w3schools.com/code/tryit.asp?filename=GHYGTEA5D18G
        document.write("<table border=1 class=table id=table>");
        // 不小心在這裡把style設定完了...
        function json2table(jsonString, $table) {
            var json = JSON.parse(jsonString);
            // JSON.parse() 方法把會把一個JSON字串轉換成 JavaScript的數值或是物件。另外也可選擇使用reviver函數讓這些數值或是物件在被回傳之前做轉換。
            var cols = Object.keys(json[0]);

            var headerRow = '';
            var bodyRows = '';

            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            $table.html('<thead class=th><tr class=tr1></tr></thead><tbody class=tb></tbody>');

            cols.map(function(col) {
                // map()將一個陣列放進另一個陣列
                headerRow += '<th class=th1>' + capitalizeFirstLetter(col) + '</th>';
                console.log(`直條${col}`)
            });

            json.map(function(row) {
                bodyRows += '<tr class=tr2>';

                cols.map(function(colName) {
                    bodyRows += '<td>' + row[colName] + '</td>';
                    console.log(`橫條${row}`)
                    console.log(row)
                    console.log(`格子名${colName}`)
                    console.log(colName)
                })

                bodyRows += '</tr>';
            });

            $table.find('thead tr').append(headerRow);
            $table.find('tbody').append(bodyRows);
        }
        let table2 = document.querySelector(".table2")
        table2.appendChild(table)
        var json = `[{"學號":1,"姓名":"王大明","成績":"90"},
{"學號":2,"姓名":"張小飛","成績":"80"},
{"學號":3,"姓名":"黃小毛","成績":"50"},
{"學號":4,"姓名":"李大仁","成績":"70"}]`;

        json2table(json, $("#table"));
        // 原來jq可以這樣寫啊
    </Script>
</body>

</html>