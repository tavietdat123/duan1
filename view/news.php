<?php
$loadAllNews = pdo_query("select * from news");
?>
<div class="container_content">
    <div class="content">
        <div class="exp_big_heading">
            <h3>TIN TỨC</h3>
        </div>
        <div class="news_content">
            <div class="row">
                <?php foreach($loadAllNews as $value){?>
                <div class="col-4">
                    <a class="news_wap" href="">
                        <div class="news_img"><img
                                src="https://alpha.elines.vn/static/upload/2020-11-12/1605152344421.jpg" alt="">
                        </div>
                        <div class="news_text">
                            <h5><?=$value['contenNew']?></h5>
                            <span><?=$value['dateNews']?></span>
                            <p><?=$value['descNew']?></p>
                        </div>
                    </a>
                </div>
                <?php
                }?>
            </div>
        </div>
    </div>
</div>