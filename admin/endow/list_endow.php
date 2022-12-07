<section class="home">
    <div class="text">Danh sách ưu đãi </div>
    <article class="add-fix-delete">
        <a href="index.php?action=taoEndow"><input type="button" value="Tạo ưu đãi" name="btn-add"></a>
    </article>
    <main class="sms">
        <table border=1>
            <tr>
                <th>Tên ưu đãi</th>
                <th>Mã ưu đãi</th>
                <th>Số lượng mã ưu đãi</th>
                <th>Ưu đãi theo số tiền(VNĐ)</th>
                <th>Ưu đãi theo phần trăm(%)</th>
                <th>Trạng thái ưu đãi</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($loadAllEndow as $loadAll) {
                extract($loadAll);
                $sua = "index.php?action=suaEndow&id=" . $id;
                $xoa ="index.php?action=xoaEndow&id=" . $id;
                $open_endow = "index.php?action=onpen_endow&id=" . $id;
                $lock_endow = "index.php?action=lock_endow&id=" . $id;
                $endow_status = '';
                if($AmountEndow ==0){
                    $endow_status = '<a href="' . $sua . '"><input type="button" style = "width: 75%;" class="btn-add" value=" Vui lòng thêm số lượt ưu đãi !"></a>';
                }else{
                if($status==0){
                $endow_status = '<a href="' . $lock_endow . '"><input type="button" style = "width: 75%;" class="btn-add" value="Đóng ưu đãi"></a>';
                }else{
                $endow_status = '<a href="' . $open_endow . '"><input type="button" style = "width: 75%;" class="btn-add" value="Mở ưu đãi"></a>';
                }
            }
                echo '
                <tr>
                    <td>'.$NameCode.'</td>
                    <td>'.$CodeEndow.'</td>
                    <td>'.$AmountEndow.'</td>
                    <td>'.$MoneyEndow.'</td>
                    <td>'.$PercentEndow.'</td>
                    <td>'.$endow_status.'</td>
                    <td><a href="' . $sua . '"><input type="button" value="Sửa" name="btn-fix" ></a>
                    <a href="' . $xoa . '"><input type="button" value="Xóa" name="btn-delete"></a></td>
                </tr>';
                }?>
        </table>

    </main>
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>