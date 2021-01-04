<?php
require __DIR__ . '/turtle128.php';
$pageName = 'cart';
$pageTitle = '龜的購物車';
?>
<?php include __DIR__ . '/thead.php' ?>
<style>
    .p-item {
        /* flex: 1; */
        /* width: 30%; */
    }

    .card {
        /* width: 30%; */
        /* display: flex;
        justify-self: center; */
    }

    .card-img {
        width: 30%;
        height: 30%;
        margin-left: 30%;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<?php include __DIR__ . '/tnavbar.php' ?>
<div class="book">
    <div class="book1">
        <h3>龜的購物車</h3>
        <?php if (empty($_SESSION['cart'])) : ?>
            <div class="alert alert-danger" role="alert">
                購物車內沒有商品
            </div>
        <?php else : ?>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-trash-alt"></i></th>
                        <th scope="col">商品圖</th>
                        <th scope="col">商品名</th>
                        <th scope="col">單價</th>
                        <th scope="col">數量</th>
                        <th scope="col">小計</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $i) : ?>
                        <tr class="p-item" data-sid="<?= $i['sid'] ?>" data-price="<?= $i['price'] ?>" data-quantity="<?= $i['quantity'] ?>">
                            <td>
                                <a href="javascript:" class="remove-item"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td class="card">
                                <div class="card-img">
                                    <img class="card-img-top" src="img/<?= $i['flower_img'] ?>.jpg" alt="商品圖">
                                </div>
                            </td>
                            <td><?= $i['flowername'] ?></td>
                            <td class="price"></td>
                            <td class="quantity">
                                <select class="form-control qty">
                                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>
                            <td class="sub-total"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <div class="alert alert-success alertflex" role="alert">
                <div> 總計: <span id="total-price"></span></div>
                <div class="">
                    <?php if (isset($_SESSION['member'])) : ?>
                        <!-- <a type="button" class="btn btn-success" role="button" href="tbuystart.php">結帳</a> -->
                        <input type="button" value="結帳" onclick="location.href='tbuystart.php'">
                    <?php else : ?>
                        <!-- <a type="button" class="btn btn-danger" role="button" href="tlogin.php">請先登入再結帳</a> -->
                        <input type="button" value="請先登入再結帳" onclick="location.href='tlogin.php'">
                    <?php endif; ?>

                </div>
            </div>




        <?php endif; ?>

    </div>

</div>
<?php include __DIR__ . '/tscript.php' ?>
<script>
    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };

    function prepareCartTable() {
        const $p_items = $('.p-item');
        if (!$p_items.length && $('#total-price').length) {
            // location.href = location.href;
            location.reload();
            return;
        }
        let total = 0;
        $p_items.each(function() {
            const sid = $(this).attr('data-sid');
            const price = $(this).attr('data-price');
            const quantity = $(this).attr('data-quantity');

            $(this).find('.price').text('$ ' + dallorCommas(price));
            $(this).find('.qty').val(quantity);
            $(this).find('.sub-total').text('$ ' + dallorCommas(quantity * price));
            total += quantity * price;
            $('#total-price').text('$ ' + dallorCommas(total));
        })
    }
    prepareCartTable();


    const qty_sel = $('.qty');
    qty_sel.on('change', function() {
        const p_item = $(this).closest('.p-item');
        const sid = p_item.attr('data-sid');
        // alert(sid +', '+ $(this).val() )
        const sendObj = {
            action: 'add',
            sid: sid,
            quantity: $(this).val()
        }
        $.get('thandlecart.php', sendObj, function(data) {
            setCartCount(data); // navbar
            p_item.attr('data-quantity', sendObj.quantity);
            prepareCartTable();
        }, 'json');
    });

    $('.remove-item').on('click', function() {
        const p_item = $(this).closest('.p-item');
        const sid = p_item.attr('data-sid');
        if (confirm(`確定要刪除此項商品嗎?`)) {
            $.get('thandlecart.php', {
                action: 'remove',
                sid: sid
            }, function(data) {
                setCartCount(data); // navbar
                p_item.remove();
                prepareCartTable();
            }, 'json');
        }


    });
</script>
<?php require __DIR__ . '/tfoot.php' ?>