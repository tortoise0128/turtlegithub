<?php
$pageTitle = '';
require __DIR__ . '/turtle128.php';
// 忘記primary key搞死自己
// 叫Student資料表
$t_sql = "SELECT COUNT(sid) FROM `student 3.11`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$stmt = null;
$sql = sprintf("SELECT * FROM `student 3.11` WHERE `sid`");
$stmt = $pdo->query($sql);
// 叫Exam資料表
$t_sql = "SELECT COUNT(sid) FROM `exam 3.11`";
$stmt2 = null;
$sql = sprintf("SELECT * FROM `exam 3.11` WHERE `sid`");
$stmt2 = $pdo->query($sql);
// 叫1999出生ID
$stmt3 = null;
$sql = sprintf("SELECT `id`,`birthdate` FROM `student 3.11` WHERE YEAR(birthdate)='1999'");
$stmt3 = $pdo->query($sql);
// 叫C#=75的學生
$stmt4 = null;
$sql = sprintf("SELECT `name`,`subject`,`score` FROM `student 3.11`,`exam 3.11` WHERE `student 3.11`.`id`=`exam 3.11`.`id` AND `subject`='C#' AND `score`='75'");
$stmt4 = $pdo->query($sql);
// 'Stark','Rogers'
$stmt5 = null;
$sql = sprintf("SELECT `birthdate`,`name`,`score` FROM `student 3.11`,`exam 3.11` WHERE `student 3.11`.`id`=`exam 3.11`.`id` AND `subject`='C#' AND `name`IN('Stark','Rogers')");
$stmt5 = $pdo->query($sql);
// 不及格
$stmt6 = null;
$sql = sprintf("SELECT `name`,`subject`,`score` FROM `student 3.11`,`exam 3.11` WHERE `student 3.11`.`id`=`exam 3.11`.`id` AND `subject`='C#' AND `score`<60");
$stmt6 = $pdo->query($sql);
$stmt7 = null;
$sql = sprintf("SELECT COUNT(*),`subject` FROM `exam 3.11` WHERE `subject`='C#' AND `score`<60");
$stmt7 = $pdo->query($sql);
// 加總排名
$stmt8 = null;
$sql = sprintf("SELECT `name`, SUM(`score`) FROM `student 3.11`,`exam 3.11` WHERE `student 3.11`.`id`=`exam 3.11`.`id` GROUP by `student 3.11`.`id` ORDER BY `SUM(``score``)` DESC");
$stmt8 = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL面試題目</title>
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
        <!-- 題目 -->
        <div class="capybara">
            <strong id="q1">+ SQL語法 +</strong>
            <p style="font-weight: bold;">根據下列兩個資料表回答1~5題</p>
            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- Student -->
                        <!-- var json = 
        `[{"ID":"A0001","Name":"Andy","BirthDate":"1999-01-02"},
       {"ID":"A0002","Name":"Rose","BirthDate":"1999-03-15"},
       {"ID":"A0003","Name":"Stark","BirthDate":"1999-09-23"},
       {"ID":"A0004","Name":"Rogers","BirthDate":"1998-12-02"},
       {"ID":"A0005","Name":"Alice","BirthDate":"1999-07-17"}]`; -->
                        <table class="table-striped table-bordered">
                            <caption>Student 資料表</caption>
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>BirthDate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['id'] ?></td>
                                        <td><?= $r['name'] ?></td>
                                        <td><?= $r['birthdate'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- Exam -->
                        <!-- var json = 
        `[{"ID":"A0001","Subject":"C#","Score":75},
       {"ID":"A0001","Subject":"Java","Score":80},
       {"ID":"A0002","Subject":"C#","Score":58},
       {"ID":"A0002","Subject":"Java","Score":71},
       {"ID":"A0003","Subject":"C#","Score":90},
       {"ID":"A0003","Subject":"Java","Score":88},
       {"ID":"A0004","Subject":"C#","Score":82},
       {"ID":"A0004","Subject":"Java","Score":70},
       {"ID":"A0005","Subject":"C#","Score":50},
       {"ID":"A0005","Subject":"Java","Score":56}]`; -->
                        <table class="table-striped table-bordered">
                            <caption>Exam 資料表</caption>
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt2->fetch()) : ?>
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
            </div>
        </div>
        <!-- 第一題 -->
        <div class="capybara">
            <strong id="q2">+ 第一題 +</strong>
            <p style="font-weight: bold;">查詢Student資料表中1999年出生的ID</p>
            <!-- 聽說沒學過的人都答得出來，我被DATE整過，看到時間就怕，我還是做不出1999/01/02格式 -->
            <!-- SELECT `id`,`birthdate` FROM `student 3.11` WHERE MONTH(birthdate)='2'居然非常直覺 -->
            <p>SELECT `ID`,`Birthdate` FROM `Student 資料表` WHERE YEAR(Birthdate)='1999'</p>
            <!-- var json = `
[{"ID":"A0001","BirthDate":"1999-01-02"},
{"ID":"A0002","BirthDate":"1999-03-15"},
{"ID":"A0003","BirthDate":"1999-09-23"},
{"ID":"A0005","BirthDate":"1999-07-17"}] `; -->
            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- 1999 -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>ID</th>
                                    <th>BirthDate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt3->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['id'] ?></td>
                                        <td><?= $r['birthdate'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- 第二題 -->
        <div class="capybara">
            <strong id="q2">+ 第二題 +</strong>
            <p style="font-weight: bold;">查詢Exam資料表中C#分數75分的學生姓名</p>
            <!-- 聽說沒學過的人都答得出來，我不知道能這麼直接=75阿 -->
            <p>SELECT `Name`,`Subject`,`Score` FROM `Student 資料表`,`Exam 資料表` WHERE `Student 資料表`.`ID`=`Exam 資料表`.`ID` AND `Subject`='C#' AND `Score`='75'</p>
            <!-- var json = `
[{"Name":"Andy","Subject":"C#","Score":75}] `; -->
            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- C#=75 -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt4->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['name'] ?></td>
                                        <td><?= $r['subject'] ?></td>
                                        <td><?= $r['score'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- 第三題 -->
        <div class="capybara">
            <strong id="q2">+ 第三題 +</strong>
            <p style="font-weight: bold;">查出(`Birthdate`, `Name`, `Score`) VALUES('1999/09/23', 'Stark', '90'),('1998/12/02', 'Rogers', '82')；這樣的結果</p>
            <!-- 如果成績分散在C#和Java要怎麼辦? -->
            <p>SELECT `Birthdate`,`Name`,`Score` FROM `Student 資料表`,`Exam 資料表` WHERE `Student 資料表`.`ID`=`Exam 資料表`.`ID` AND `Subject`='C#' AND `Name`IN('Stark','Rogers')</p>
            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- 'Stark','Rogers' -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Birthdate</th>
                                    <th>Name</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt5->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['birthdate'] ?></td>
                                        <td><?= $r['name'] ?></td>
                                        <td><?= $r['score'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- 第四題 -->
        <div class="capybara">
            <strong id="q2">+ 第四題 +</strong>
            <p style="font-weight: bold;">請問C#有幾個人不及格</p>
            <p>SELECT `Name`,`Subject`,`Score` FROM `Student 資料表`,`Exam 資料表` WHERE `Student 資料表`.`ID`=`Exam 資料表`.`ID` AND `Subject`='C#' AND `Score` &lt; 60 </p>
            <!-- 我不知道是在問人還是人數都給吧 -->
            <p>SELECT COUNT(*),`Subject` FROM `Exam 資料表` WHERE `Subject`='C#' AND `Score` &lt; 60</p>
            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- 不及格 -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt6->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['name'] ?></td>
                                        <td><?= $r['subject'] ?></td>
                                        <td><?= $r['score'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- C#=75 -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>不及格 &lt; 60 人數</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt7->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['COUNT(*)'] ?></td>
                                        <td><?= $r['subject'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- 第五題 -->
        <div class="capybara">
            <strong id="q2">+ 第五題 +</strong>
            <p style="font-weight: bold;">查出兩科目加總分數最高的人</p>
            <!-- 我只會降冪和升冪，再想想 -->
            <p>SELECT `Name`, SUM(`Score`) FROM `Student 資料表`,`Exam 資料表` WHERE `Student 資料表`.`ID`=`Exam 資料表`.`ID` GROUP by `Student 資料表`.`ID` ORDER BY `SUM(``Score``)` DESC
            </p>

            <div class="limitn table3 d-flex ">
                <div>
                    <?php if (!empty($stmt)) : ?>
                        <!-- C#=75 -->
                        <table class="table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Name</th>
                                    <th>SumScore</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($r = $stmt8->fetch()) : ?>
                                    <tr>
                                        <!-- <td><?= $r['sid'] ?></td> -->
                                        <td><?= $r['name'] ?></td>
                                        <td><?= $r['SUM(`score`)'] ?></td>
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
        let item = 7;
        for (let i = item; i < 10; i++) {
            item++;
            console.log(`10 i ${i}`)
            // i = 7 8 9
            console.log(`item ${item}`)
            // item = 8 9 10
        }
        let x = 2;
        for (let i = x; i < 5; i++) {
            if (i / 2 == 1) {
                x = x + 1;
                console.log(`fir i ${i}`)
                // i = 2
                console.log(`fir x ${x}`)
                // x = 3
            } else if (i % 3 == 0) {
                x = x + 2;
                console.log(`sec i ${i}`)
                // i = 3
                console.log(`sec x ${x}`)
                // x = 5
            } else {
                x = x * i;
                console.log(`thr i ${i}`)
                // i = 4
                console.log(`thr x ${x}`)
                // x = 20
            }
        }
    </Script>
</body>

</html>