<?php
$pageTitle = '';
require __DIR__ . '/turtle128.php';
// 自己的connect會要求置頂
// 不知道題目的sqlLink()是不是也要置頂
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL面試題目</title>
    <style>
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
            /* overflow: auto; */
        }

        .limitn {
            border: 1px solid aliceblue;
        }

        /* 第一題 */
        .pr1 {
            overflow: auto;
        }

        @media screen and (max-width: 768px) {
            .d-flex {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

        }
    </style>
</head>

<body>
    <header class="d-flex Introduce pt-3">
        <p class="headp" style="font-weight: bold;">您好，只是面試紀錄，無正確答案，請多多指教</p>
        <!-- 應該看得懂 mysql資料庫就不給拉 -->
    </header>
    <main class="container">
        <!-- 第一題 -->
        <div class="capybara">
            <strong id="q1">+ 第一題 +</strong>
            <p style="font-weight: bold;">請用SQL指令，建立資料表，結構如附圖</p>
            <!-- 有給圖片，但這邊貼圖好麻煩，直接給答案 -->
            <pre class="d-flex pr1">
                CREATE TABLE `test` (
                `id` int(10) NOT NULL,
                `name` varchar(10) NULL,
                `email` char(50) NULL,
                `password` char(10) NULL
                ) 
                ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
                ALTER TABLE `sqltest`
                ADD PRIMARY KEY (`id`);
            </pre>
            <!-- 沒用SQL指令建立資料表過，還想是要寫在哪裡匯入???結果是寫在"SQL"裡，這部分網路上還真的找不到，也許每個人的方法都不同，這部分沒什麼好教學 -->
            <!-- 沒有人把NULL寫出來，我匯出一個考題相似資料表參考，改出來的答案不知道正不正確? -->
            <!-- AUTO_INCREMENT好像只能到用習慣的新增去新增，反正題目沒有要 -->
            <!-- ALTER TABLE `test` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT 這個嗎?-->
            <!-- 丟掉資料表DROP TABLE `test` -->
        </div>
        <!-- 第二題 -->
        <div class="capybara">
            <strong id="q2">+ 第二題 +</strong>
            <p style="font-weight: bold;">請完成php程式，新增一筆資料到第一題的資料表</p>
            <form name="form" method="post" onsubmit="" novalidate>
                <!-- form也是考題之一，只是習慣到處copy根本筆試手寫不出什麼東西，尤其codepen的form超精美 -->
                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">電郵</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <!-- Shift + Del 清表單-->
                </div>
                <div class="form-group">
                    <label for="password">密碼</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="至少6位數字">
                </div>
                <button type="submit" class="btn btn-primary" name="send">送出</button>
                <!-- 其實我不知道他的send放哪裡，只是覺得寫完整，大概能找到答案 -->
            </form>
        </div>

    </main>
    <footer class="d-flex Introduce">
        <p class="headp ml-2" style="font-weight: bold;">"您好，感謝閱卷完畢"</p>
    </footer>
    <?php
    function sqlLink()
    {
        $db = mysqli_connect("127.0.0.0", "root", "");
        if (!$db) die("Erro: 無法連接MySQL伺服器!" . mysqli_connect_error());
        mysqli_select_db($db, "test") or
            die("Erro: 無法選擇資料庫!" . mysqli_error($db));
        mysqli_query($db, "SET NAMES utf8");
        return $db;
    }
    if (isset($_POST["send"])) {
        // 這區塊請寫出答案
        // ----------------------------
        // 這題我不會，看不懂他的sqlLink()
        // 用自己的connect新增可以，但會壞掉，警告說不能用connect裡設定好的$pdo，可是我是從老師的範例拿來改的耶...
        $sql = "INSERT INTO `test`(
            `name`, `email`, `password`) VALUES( ? , ? , ? )
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['name'],
            $_POST['email'],
            $_POST['password'],
        ]);
    }

    ?>
    <script>
    </script>
</body>

</html>