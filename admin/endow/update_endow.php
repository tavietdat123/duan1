<section class="home">
    <div class="text" style="margin-left:-1% ;">Cập nhật ưu đãi</div>

    <main class="infor">
        <form action="index.php?action=updateEndow" method="post">
            <label for="">ID</label>
            <br>
            <input type="number" name="id" class="input-text" value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
            <br>
            <br>
            <label for="">Tên ưu đãi</label>
            <br>
            <input type="text" name="NameCode" class="input-text"
                value="<?php if (isset($NameCode) && ($NameCode != "")) echo $NameCode; ?>">
            <br>
            <br>
            <label for="">Mã khuyến mãi</label>
            <br>
            <input type="text" name="CodeEndow" class="input-text"
                value="<?php if (isset($CodeEndow) && ($CodeEndow != "")) echo $CodeEndow; ?>">
            <br><br>

            <label for="">Số lượng mã</label>
            <br>
            <input type="number" name="AmountEndow" class="input-text" min="0"
                value="<?php if (isset($AmountEndow) && ($AmountEndow != "")) echo $AmountEndow; ?>">
            <br><br>
            <label for="">Ưu đãi theo số tiền(VNĐ)</label>
            <br>
            <input type="number" name="MoneyEndow" class="input-text" min="0"
                value="<?php if (isset($MoneyEndow) && ($MoneyEndow != "")) echo $MoneyEndow; ?>">
            <br><br>
            <label for="">Ưu đãi theo theo phần trăm(%)</label>
            <br>
            <input type="number" name="PercentEndow" class="input-text" min="0" max="100"
                value="<?php if (isset($PercentEndow) && ($PercentEndow != "")) echo $PercentEndow; ?>">
            <br><br>
            <input name="updateEndow" style="margin-left: 33%;margin-bottom:50px ;width: 150px;" type="submit"
                class="btn-add" value="Cập nhật ưu đãi" onclick="return confirm('Bạn có muốn cập nhật không ?')">
        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>