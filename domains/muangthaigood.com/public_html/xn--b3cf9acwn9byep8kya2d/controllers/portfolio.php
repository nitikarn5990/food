<div id="line"></div>
<div id="slide">
    <div id="centerslide">
        <img src="<?=ADDRESS .'img/'. $portfolio_head_image->getDataDescLastID('image', 'id = 1')?>" alt="<?= $portfolio_head_image->getDataDescLastID('alt', 'id = 1')?>" width="812" height="230" />f
    </div>
</div>
<div id="line1"></div>
<div id="content">
  <h1><?= $portfolio_head_txt->getDataDescLastID('title', 'id = 1') ?></h1>
    <p style="text-align:center;">

        <?php
        $sql1 = "SELECT * FROM " . $portfolio->getTbl() . " WHERE status = 'ใช้งาน'";
        $query1 = $db->Query($sql1);
        $numRow1 = $db->NumRows($query1);
        if ($numRow1 > 0) {
            while ($row1 = $db->FetchArray($query1)) {
                ?>
                <a href="<?= ADDRESS ?>img/<?= $row1['image'] ?>" rel="lightbox[example]" title=""><img src="<?= ADDRESS ?>img/<?= $row1['image'] ?>" alt="<?= $row1['alt'] ?>" class="bordered" /></a>

                <?php
            }
        }
        ?>
    </p>

</div>
<script>

      initLightbox();

  

</script>
