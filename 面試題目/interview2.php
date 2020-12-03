<!doctype html>
<html lang="en">

<head>
    <title>
        面試題目2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            margin: 0 auto;
            background: whitesmoke;
        }

        table {
            border: 1px solid black;
            margin: 0 auto;
        }

        td {
            border: 1px solid black;
        }

        .qanda {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <p>您好，承認跟php不熟，php測驗範例要長這樣。</p>
        </div>
        <!-- 測驗範例 模擬練習 非php -->
        <div class="d-flex p-2">
            <!-- 我是JavaScript -->
            <div class="c2 mr-5">
                <!-- 使用了JavaScript邏輯思考 -->
                <!-- php好像不是JavaScript的邏輯 -->
            </div>
            <!-- 我是HTML -->
            <div>
                <table>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Birthday</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Andus</td>
                        <td>2012-11-02</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dennis</td>
                        <td>2013-02-05</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kelly</td>
                        <td>2006-06-09</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Maggy</td>
                        <td>2003-07-30</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- 測驗範例 非php -->
        <div>
            <p class="qanda">
                無障礙網頁設計和一般網頁設計有甚麼不同?
            </p>
            <p>
                回答:老師在教學的時候有提到圖片中的Alt是無障礙網頁設計一種，還有tabindex鍵盤導航屬性，以前的Sitemap網站導覽有要求做無障礙網頁設計，現在好像偏SEO面向瀏覽器不是使用者。 <br> 有甚麼不同 <br> 我個人是覺得無障礙網頁設計簡約乾淨，必須符合可感知、可操作、可理解、穩健4原則，比較好找到自己要找的東西，而且會有一個無障礙標章。一般網頁設計就是上課會拿來參考設計的網站，花俏不知道重點在哪，但有種看電影的感覺。
            </p>
        </div>
        <div>
            <p class="qanda">
                請說明java,javascript,php,css,html這幾個語言的共通處和相異處?

            </p>
            <p>
                回答:共同處 <br> 都有框架 <br>
                相異處 <br> 建立一個網站，html是網站的身體，負責呈現使用者介面，css是網站的腦幹，負責身體該長怎樣和基本互動，大腦是javascript和java身體該怎麼擁有有情感的互動，php是身體的抓記憶進資料庫和放出資料的橋樑。
            </p>
        </div>

        <div>
            <p class="qanda">請使用 php 撰寫以下問題</p>
            <p>將字母 A~Z,每 3 個字一排,用 table 排出下列樣子
                (請用陣列搭配迴圈處理,而非直接使用 echo 輸出表格內容)
            </p>
            <p>
                將以下長字串
                Andus:2012-11-02,
                Dennis:102-02-05,
                Kelly:095/06/09,
                Maggy:92-7-30
                轉換為表單
            </p>
        </div>

        <!-- php考試題目作答 -->
        <div class=" d-flex p-3">
            <!-- php第一題 -->
            <!-- 好崩潰...超基礎的題目...foreach還怎樣都有AA...錯在哪裡啊(哭) -->
            <table>
                <!-- table border="1"-->
                <?php $arry = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
                //print_r($arry);
                ?>
                <?php for ($i = 0; $i < 1; $i++) : ?>

                    <?php for ($k = 1; $k < 10; $k++) : ?>
                        <!-- 有九行 -->
                        <tr>

                            <?php for ($j = 1; $j <= 3; $j++) : ?>
                                <td>
                                    <!-- 有三列 -->
                                    <?= sprintf($arry[$i]++) ?>

                                </td>
                            <?php endfor ?>

                        </tr>
                    <?php endfor ?>
                <?php endfor ?>

            </table>
            <!-- php第二題 -->
            <?php
            // $t2 = date("Y/m/d", strtotime("102-02-05"));
            // // $var = "20/04/2012";
            // // echo date("Y-m-d", strtotime($var));
            // $var = '095/06/09';
            // $date = str_replace('/', '-', $var);
            // echo date('Y-m-d', strtotime($date)) . '<br>';
            // $date = DateTime::createFromFormat('Y/m/d', "095/06/09");
            // echo $date->format('Y-m-d');
            // $date = new DateTime("104-06-10");
            // //上面得知就是在加上1911 year即可
            // $date->modify("+1911 year");
            // echo '民國年轉西元年:' . $date->format("Y-m-d H:i:s");
            // $t1 = $date->format("Y-m-d");
            // // 民國年轉西元年，並取得10天前的日期
            // $date = new DateTime("101-01-01");
            // $date->modify("+5 day");
            // $date->modify("+1911 year");
            // echo  $date->format("Y-m-d H:i:s");
            // ---------------------
            $date = new DateTime("102-02-05");
            $date->modify("+1911 year");
            $b2 = $date->format("Y-m-d");
            // -------------
            $date = DateTime::createFromFormat('Y/m/d', "095/06/09");
            $b31 = $date->format('Y-m-d');
            $date = new DateTime($b31);
            $date->modify("+1911 year");
            $b3 = $date->format("Y-m-d");
            // ---------------
            $date = DateTime::createFromFormat('Y-m-d', "92-7-30");
            $b41 = $date->format('Y-m-d');
            $date = new DateTime($b41);
            $date->modify("+1911 year");
            $b4 = $date->format("Y-m-d");
            // 民國年非1xx年3位數的話，DateTime會幫忙加上19xx當作西元，加上1911西元就有3000多年了
            ?>
            <table class="">
                <?php
                $namearry = array('sid' => '1', 'name' => 'Andus', 'birthday' => '2012-11-02');
                $namearry1 = array('sid' => '2', 'name' => 'Dennis', 'birthday' => $b2);
                $namearry2 = array('sid' => '3', 'name' => 'Kelly', 'birthday' => $b3);
                $namearry3 = array('sid' => '4', 'name' => 'Maggy', 'birthday' => $b4);
                $namearryall = array($namearry, $namearry1, $namearry2, $namearry3)

                ?>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Birthday
                    </td>
                </tr>
                <?php foreach ($namearryall as $m => $v) : ?>
                    <!-- $key => $value -->
                    <tr>
                        <td>
                            <?= sprintf($v['sid']) ?>
                        </td>
                        <td>
                            <?= sprintf($v['name']) ?>
                        </td>
                        <td>
                            <?= sprintf($v['birthday']) ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <!-- -----------第二題--------------- -->

        </div>
        <!-- php考試題目作答 -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        let letter1 = [
            ['A', 'B', 'C'],
            ['D', 'E', 'F'],
            ['G', 'H', 'I'],
            ['J', 'K', 'L'],
            ['M', 'N', 'O'],
            ['P', 'Q', 'R'],
            ['S', 'T', 'U'],
            ['V', 'W', 'X'],
            ['Y', 'Z', '']
        ];
        document.write("<table border=1 class=t2>");
        let t2 = document.querySelector(".t2");
        console.log(t2)
        // table.setAttribute("class","tab")
        for (let x = 0; x < 9; x++) {
            document.write("<tr>");
            for (let y = 0; y < 3; y++) {

                document.write(`<td></td>`);
                for (var b = 0; b < t2.rows.length; b++)
                    for (var d = 0; d < t2.rows[b].cells.length; d++)
                        t2.rows[b].cells[d].innerText = letter1[b][d];
            }
            document.write("</tr>");
        }
        document.write("</table>");
        let c2 = document.querySelector(".c2")
        c2.appendChild(t2)
    </script>
</body>

</html>