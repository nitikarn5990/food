<div id="line"></div>
<div id="slide">
    <div id="centerslide">
        <img src="<?= ADDRESS . 'img/' . $portfolio_head_image->getDataDescLastID('image', 'id = 1') ?>" alt="<?= $portfolio_head_image->getDataDescLastID('alt', 'id = 1') ?>" width="812" height="230" />f
    </div>
</div>
<div id="line1"></div>
<div id="content">
    <h1><?= $portfolio_head_txt->getDataDescLastID('title', 'id = 1') ?></h1>
  
 <div class="row">
        <?php
        $sql1 = "SELECT * FROM " . $portfolio->getTbl() . " WHERE status = 'ใช้งาน'";
        $query1 = $db->Query($sql1);
        $numRow1 = $db->NumRows($query1);
        if ($numRow1 > 0) {
            while ($row1 = $db->FetchArray($query1)) {
                ?>
   
            <div class="col-md-3">
                <a href="<?= ADDRESS ?>img/<?= $row1['image'] ?>" rel="lightbox[example]" title="">
                    <img src="<?= ADDRESS ?>img/<?= $row1['image'] ?>" alt="<?= $row1['alt'] ?>"  class="bordered" style="height: 158px;" />

                </a>
                <p class="text-center" style="font-family: Arial;font-size: 12px;">
                    <?= $row1['name'] ?>
                </p>
            </div>

            <?php
        }
    }
    ?>
 </div>



</div>
<script>

    initLightbox();



</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
