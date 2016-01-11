<div id="line"></div>
<div id="slide">
    <div id="centerslide">

        <?php
        $sql1 = "SELECT * FROM " . $txt_slide->getTbl() . " WHERE status = 'ใช้งาน'";
        $query1 = $db->Query($sql1);
        $numRow1 = $db->NumRows($query1);
        if ($numRow1 > 0) {
            while ($row1 = $db->FetchArray($query1)) {
                ?>
                <div class="txtslide"><img src="<?= ADDRESS ?>img/<?= $row1['image'] ?>" width="812" height="230" /></div>

                <?php
            }
        }
        ?>
        <article class="demo_block">
            <ul id="demo1" style="list-style:none; position:0; margin:0;">
                <?php
                $sql = "SELECT * FROM " . $slides->getTbl() . " WHERE status = 'ใช้งาน' ORDER BY sort ASC";
                $query = $db->Query($sql);
                $numRow = $db->NumRows($query);
                if ($numRow > 0) {
                    while ($row = $db->FetchArray($query)) {
                        ?>
                        <li><a href="#slide1"><img src="<?= ADDRESS ?>img/<?= $slides_file->getDataDescLastID("file_name", "slides_id = " . $row['id']) ?>" width="935" height="455"/></a></li>

                        <?php
                    }
                }
                ?>

            </ul>
        </article>
        <script>
            $(function () {
                var demo1 = $("#demo1").slippry({
                    transition: 'fade',
                    useCSS: true,
                    speed: 1000,
                    pause: 3000,
                    auto: true,
                    preload: 'visible'
                });

                $('.stop').click(function () {
                    demo1.stopAuto();
                });

                $('.start').click(function () {
                    demo1.startAuto();
                });

                $('.prev').click(function () {
                    demo1.goToPrevSlide();
                    return false;
                });
                $('.next').click(function () {
                    demo1.goToNextSlide();
                    return false;
                });
                $('.reset').click(function () {
                    demo1.destroySlider();
                    return false;
                });
                $('.reload').click(function () {
                    demo1.reloadSlider();
                    return false;
                });
                $('.init').click(function () {
                    demo1 = $("#demo1").slippry();
                    return false;
                });
            });
        </script>
    </div>
</div>
<div id="line1"></div>
<div id="content">
    <ul>
        <?php
        $sql = "SELECT * FROM " . $sub_images->getTbl() . " WHERE status = 'ใช้งาน' ORDER BY sort ASC";
        $query = $db->Query($sql);
        $numRow = $db->NumRows($query);
        if ($numRow > 0) {
            while ($row = $db->FetchArray($query)) {
                ?>
                <li><img src="<?= ADDRESS ?>img/<?= $row['image'] ?>"/></li>
                <?php
            }
        }
        ?>

    </ul>
    <div class="clear"></div>
    <h1><?= $home->getDataDescLastID('home_title', 'id = 1') ?></h1>
    <p>
        <?= $home->getDataDescLastID('home_detail', 'id = 1') ?>
    </p>
</div>