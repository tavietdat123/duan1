<section class="home">
    <div class="text">Danh sách thành viên</div>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Role</th>
                <th>Thao tác</th>
            </tr>

            <?php

            foreach ($rows as $loadAll) {
                extract($loadAll);

                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $fullName . '</td>
                            <td>' . $passWord . '</td>
                            <td>' . $email . '</td>
                            <td>' . $role . '</td>

                            <td><a href="' . $fix_member . '"><input type="button" value="Sửa" name="btn-fix"></a>
                            <a href="' . $delete_member . '"><input type="button" value="Xóa" name="btn-delete"></a></td>
                        
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>

    <!-- <article class="add-fix-delete">
        <a href="index.php?action=addInfor"><input type="button" value="Nhập thêm" name="btn-add"></a>
    </article> -->
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>