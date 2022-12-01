<section class="home ps-5 pe-5 pb-5">
    <div class="text">Quản lý Vé</div>
    <table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Giá</th>
                <th>Tên Hãng</th>
                <th>Logo</th>
                <th>Trạng Thái</th>
                <th>Loại vé</th>
                <th>Số Lượng</th>
                <th>Chuyến</th>
                <th>Mã CB</th>
                <th>Chuyến bay</th>
                <th><a class="btn btn-success" href="index.php?action=ticket_add">Tạo Mới</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['price'] ?>$</td>
                    <td><?= $value['company'] ?></td>
                    <td><img src="../img/<?= $value['company_img'] ?>" width="100" /></td>
                    <td><?= $value['status'] == 1 ? "Còn" : "Hết" ?></td>
                    <td> <?= selectOneTicket_type($value['type_ticket_id'])['name'] ?></td>
                    <td><?= $value['quantity'] ?></td>
                    <td><?= $value['round_trip']==2 ? "Khứ hồi" : "Một chiều" ?></td>
                    <td><?= $value['flight_code'] ?></td>
                    <td style="font-size: 14px;">Từ: <?php $row = flight_select_one($value['flight_id']); echo$row['pointOfDeparture']; ?><br /> Đến: <?=$row['destination'] ?> <br/> <?=$row['dateTime'] ?> </td>
                    <td>
                        <a class="btn btn-primary" href="index.php?action=ticket_fix&id=<?= $value['id'] ?>">Sửa</a>
                        <a class="btn btn-danger" href="index.php?action=ticket_remove&id=<?= $value['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>