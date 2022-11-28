<section class="home">
    <div class="text">Tạo ưu đãi</div>

    <main class="infor">
        <form action="index.php?action=addEndow" method="post">
            <label for="">Tên ưu đãi</label>
            <br>
            <input type="text" name="NameCode" class="input-text" required>
            <br>
            <br>
            <label for="">Mã khuyến mãi</label>
            <br>
            <input type="text" name="CodeEndow" class="input-text" required>
            <br><br>

            <label for="">Số lượng mã</label>
            <br>
            <input type="number" name="AmountEndow" class="input-text" min="0" required>
            <br><br>
            <label for="">Ưu đãi theo số tiền(VNĐ)</label>
            <br>
            <input type="number" name="MoneyEndow" class="input-text" min="0" required>
            <br><br>
            <label for="">Ưu đãi theo theo phần trăm(%)</label>
            <br>
            <input type="number" name="PercentEndow" class="input-text" min="0" max="100" required>
            <br><br><br>
            <input name="addEndow" style="margin-left: 38%;" type="submit" class="btn-add" value="Tạo mã ưu đãi">
        </form>
    </main>
</section>
</div>

<script type="text/javascript" src="../js/admin.js"></script>