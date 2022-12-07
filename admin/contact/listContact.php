<section class="home">
    <div class="text">Danh sách phản hồi </div>
    <main class="sms">
        <table border=1>
            <tr>
                <th>Tên khách hàng</th>
                <th>SĐT</th>
                <th>Nội dung</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($loadAllContact as $loadAll) {
                extract($loadAll);
                $xoa ="index.php?action=deleteContact&id=" . $id;
                echo '
                <tr>
                    <td>'.$name.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$content.'</td>
                    <td><a href="' . $xoa . '"><input type="button" value="Xóa" name="btn-delete"></a></td>
                </tr>';
                }?>
        </table>

    </main>
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>