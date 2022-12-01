<section class="home ps-5 pe-5 pb-5">
<div class="text">Quản lý Bill đã thanh toán</div>
<table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Mã CB</th>
                  <th>Điểm KH</th>
                  <th>Điểm đến</th>
                  <th>Đi lúc</th>
                  <th>Tổng Giá</th>
                  <th>Hãng</th>
                  <th>Loại vé</th>
                  <th>Người đặt</th>
                  <th>SDT</th>
                  <th>Email</th>
                  <th>TG đặt</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rows as $key => $value):?>
                <tr>
                <td><?=$value['flight_code']?></td>
                  <td><?=$value['pointOfDeparture']?></td>
                  <td><?=$value['destination']?></td>
                  <td><?=$value['dateTime']?></td>
                  <td>X<?=$value['quantity']?>: <?=$value['price']?></td>
                  <td><?=$value['company']?></td>
                  <td> <?php 
                  foreach (selectAllTicket_type() as $key => $value1) {
                    if($value1['id'] == $value['type_ticket_id']){
                        echo$value1['name'];
                    }
                  }
                  ?></td>
                  <td><?=$value['name']?>: <?=$value['fullName']?></td>
                  <td>0<?=$value['tell']?></td>
                  <td><?=$value['email']?></td>
                  <td><?=$value['booking_date']?></td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
</section>
