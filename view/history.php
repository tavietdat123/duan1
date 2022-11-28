<div class="container_content">
    <div class="content">
        <!-- <?php
                $arr =  json_decode($_GET['$store']);
                ?> -->
        <div class="card p-4 pt-2 m-5 mt-2">
            <div class="d-flex  p-3">
                <div class="bk_plane me-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-id="IcProductFlightFill">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.24315 18.6216C4.14242 19.2724 4.72762 19.8576 5.37843 19.7569L6.5885 22.177C6.82109 22.6422 7.37143 22.8515 7.85432 22.6583L8.06676 22.5733C8.91113 22.2356 9.42133 21.3707 9.30853 20.4683L9 18L13.2857 14.4286L18.5103 22.2655C18.7901 22.6851 19.3385 22.8308 19.7896 22.6052L20.2243 22.3879C20.6694 22.1653 20.8831 21.6494 20.7257 21.1772L19 16L19.7929 15.2071C20.1834 14.8166 20.1834 14.1834 19.7929 13.7929L19.2071 13.2071C18.8837 12.8838 18.394 12.8282 18.0134 13.0403L17.1493 10.4478L21.8613 4.85221C22.5053 4.08744 22.457 2.95701 21.75 2.25003C21.043 1.54305 19.9126 1.49469 19.1478 2.13871L13.5522 6.85077L10.9597 5.9866C11.1719 5.60602 11.1163 5.11629 10.7929 4.79292L10.2071 4.20713C9.81658 3.81661 9.18342 3.81661 8.79289 4.20713L8 5.00003L2.82279 3.27429C2.35068 3.11692 1.83469 3.33065 1.61213 3.77576L1.39479 4.21044C1.16925 4.66152 1.3149 5.20996 1.73452 5.48971L9.57143 10.7143L6 15L3.53173 14.6915C2.62934 14.5787 1.76445 15.0889 1.4267 15.9333L1.34173 16.1457C1.14857 16.6286 1.35781 17.1789 1.82299 17.4115L4.24315 18.6216Z" fill="#30C5F7"></path>
                    </svg>
                </div>
                <div class="bk_trip ">
                    <span style="font-weight: 600;font-size:20px">Lịch Sử Đặt vé</span>
                </div>
            </div>
            <hr class="mt-0 line">
            <?php if($arr == []):?>
                <div class="cart_no_product justify-content-center align-items-center d-flex flex-column">
<img width="120"  src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png" alt="">
<span class="mt-3">Bạn chưa đặt chuyến bay nào</span>

</div>
            <?php endif ?>
            <?php foreach ($arr as $key => $value) : ?>
                <?php $row = pdo_query_one("select * from bill where id = $value") ?>
                <?php
                $type_id =  $row['type_ticket_id'];
                $ticket_type = pdo_query_one("select * from ticket_type where id = $type_id")['name']; ?>

                <div class="d-flex justify-content-between">
                    <div class="ps-3 pe-3 pb-3">
                        <div class="d-flex  mb-2 flex-column">
                            <p class="">Chuyến bay từ: <span class="me-3" style="font-weight: 600;"><?= $row['pointOfDeparture'] ?></span> Đến: <span style="font-weight: 600;"><?= $row['destination'] ?></span></p>
                            <p class="mt-3">Chuyến bay đi: <span style="font-weight: 600;"><?= $row['dateTime'] ?></span></p>
                            <span class="text-muted " style="font-size: 12px;">(yyyy-mm-dd hh:mi:ss)</span>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="me-4"><img src="img/<?= $row['company_img'] ?>" width="100" alt=""></div>
                            <div class="d-flex flex-column">
                                <p style="font-weight: 600;"><?= $row['company'] ?></p>
                                <p style="font-size: 12px;" class="text-muted">Loại vé: <span style="font-weight: 600;"><?= $ticket_type ?></span></p>
                            </div>
                        </div>
                        <div class="d-flex mt-4 ">

                            <div class="d-flex flex-column">
                                <p style="font-size: 14px;" class="d-flex"><span><?= $row['name'] ?>: </span> <span class="ms-3" style="font-weight: 600;"> <?= $row['fullName'] ?></span></p>
                                <p class="mt-2 mb-2 d-flex" style="font-size: 14px;"><span>SĐT:</span> <span class="ms-3" style="font-weight: 600;"> 0<?= $row['tell'] ?></span></p>
                                <p style="font-size: 14px;" class="d-flex"><span>Email: </span> <span class="ms-3" style="font-weight: 600;"><?= $row['email'] ?></span></p>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center align-items-end flex-column flex-end justify-content-end">
                        <p>Tổng giá : <span style="font-weight: 600;"><?= $row['price'] ?></span>$</p>
                        <?php if ($row['pay'] == 1) : ?>
                            <p>Trạng thái : <span>Chưa thanh toán</span></p>
                            <a href="#" class="btn btn-primary mt-2">Thanh Toán ngay</a>
                        <?php endif ?>
                        <?php if ($row['pay'] != 1) : ?>
                            <p>Trạng thái : <span>Đã thanh toán</span></p>
                        <?php endif ?>
                        <button  onclick="
                        let store  = JSON.parse(localStorage.getItem(history)) ?? []
                         let bill = store.filter((el)=>el!==<?=$row['id']?>)
                         localStorage.setItem(history, JSON.stringify(bill))
                         setTimeout(()=>{
                            let store = localStorage.getItem(history) ?? [] 
                            location.href = `index.php?action=history&$store=${store}`},500)"

                        class="btn btn-danger mt-2">Xóa</button>

                    </div>
                </div>
                <hr class="mt-0 line">
            <?php endforeach ?>
            <div class="p-3">
                <div class="text-center">
                    <a href="/index.php" style="font-size: 12px;">Xem thêm các chuyến bay khác</a>
                </div>
            </div>
        </div>
    </div>
</div>