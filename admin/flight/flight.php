<section class="home ps-5 pe-5 pb-5">
<div class="text">Quản lý chuyến bay</div>
<table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Điểm Khởi hành</th>
                  <th>Điểm đến</th>
                  <th>Thời gian</th>
                  <th><a class="btn btn-success" href="index.php?action=flight_add">Tạo Mới</a></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rows as $key => $value):?>
                <tr>
                  <td><?= $value['id']?></td>
                  <td><?= $value['pointOfDeparture']?></td>
                  <td><?= $value['destination']?></td>
                  <td><?= $value['dateTime']?></td>
                  <td>
                    <a class="btn btn-primary" href="/admin/index.php?action=flight_fix&id=<?=$value['id']?>">Sửa</a>
                    <a class="btn btn-danger" href="/admin/index.php?action=flight_remove&id=<?=$value['id']?>">Xóa</a>
                  </td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
</section>

<!--Table-->