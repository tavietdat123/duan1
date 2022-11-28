<section class="home">
    <div class="text">Danh sách thành viên</div>

    <main class="sms">
        <table border=1>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>

            <?php
            // $rows = pdo_query("select * from account");
            foreach ($loadAllMembers as $loadAll) {
                extract($loadAll);

                $fixMember = "index.php?action=fixMember&id=" . $id;

                $deleteMember = "index.php?action=deleteMember&id=" . $id;
                $open_user = "index.php?action=onpen_user&id=" . $id;
                $lock_user = "index.php?action=lock_user&id=" . $id;
                //check trang thái
                $check_button_status = '';
                if($role==0){
                    $check_button_status = 'ADMIN';
                }else{
                if($status==0){
                $check_button_status = '<a href="' . $lock_user . '"><input type="button" style = "width: 75%;" class="btn-add" value="Khóa tài khoản"></a>';
                }else{
                $check_button_status = '<a href="' . $open_user . '"><input type="button" style = "width: 75%;" class="btn-add" value="Mở khóa tài khoản"></a>';
                }
            }
                //check_role
                $check_role = '';
                if($role==0){
                $check_role = 'Admin';
                }else{
                $check_role = 'Thành viên';
                }
                echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $fullName . '</td>
                            <td>' . $passWord . '</td>
                            <td>' . $email . '</td>
                            <td>' . $check_role . '</td>
                            <td>' . $check_button_status . '</td>
                            <td><a href="' . $fixMember . '"><input type="button" value="Sửa" style = "width: 50px;" class="btn-add name="btn-fix"></a>
                            <br><br>
                            <a href="' . $deleteMember . '"><input type="button" value="Xóa" style = "width: 50px;" class="btn-add name="btn-delete"></a></td>
                        </tr>
                    ';
            }
            ?>
        </table>
    </main>
</section>


</div>

<script type="text/javascript" src="../js/admin.js"></script>