<?php
if ($_GET['catID'] == '') {
    ?>
    <div id="line"></div>
    <div id="slide">
        <div id="centerslide">
            <img src="<?= ADDRESS . 'img/' . $menuset_head_image->getDataDescLastID('image', 'id = 1') ?>" alt="<?= $portfolio_head_image->getDataDescLastID('alt', 'id = 1') ?>" width="812" height="230" />f
        </div>
    </div>
    <div id="line1"></div>
    <div id="content">
        <h1><?= $menuset_head_txt->getDataDescLastID('title', 'id = 1') ?></h1>

        <ul>

    <?php
    $sql1 = "SELECT * FROM " . $menuset->getTbl() . " WHERE status = 'ใช้งาน'";
    $query1 = $db->Query($sql1);
    $numRow1 = $db->NumRows($query1);
    if ($numRow1 > 0) {
        while ($row1 = $db->FetchArray($query1)) {
            ?>
                    <li>
                        <a href="<?=ADDRESS?>menuset/<?=$row1['id'] .'_'.$row1['name_ref']?>">
                            <img src="<?= ADDRESS ?>img/<?= $row1['image'] ?>" alt="" class="bordered" />
                            <p><span class="price">ราคา <?= $row1['price'] ?>.00 บาท</span></p>
                            <p><?= $row1['name'] ?></p>
                        </a>            


                    </li>
            <?php
        }
    }
    ?>
        </ul>
    </div>
<?php } else { ?>
    <?php
        $arrData = explode('_', $_GET['catID']);
    ?>
    <div id="line"></div>
    <div id="slide">
        <div id="centerslide">
            <img src="<?= ADDRESS . 'img/' . $menuset_head_image->getDataDescLastID('image', 'id = 1') ?>" alt="<?= $portfolio_head_image->getDataDescLastID('alt', 'id = 1') ?>" width="812" height="230" />f
        </div>
    </div>
    <div id="line1"></div>
    <div id="content">
        <h1><?= $menuset->getDataDesc('name', 'id = ' . $arrData[0]) ?></h1>

        <p align="center"><img src="<?= ADDRESS . 'img/' . $menuset->getDataDescLastID('image', 'id = ' . $arrData[0]) ?>" alt="<?= $menuset->getDataDescLastID('alt', 'id = ' . $arrData[0]) ?>" /></p>
        <p align="center"><span class="price">ราคา <?= $menuset->getDataDescLastID('price', 'id = ' . $arrData[0]) ?>.00 บาท</span></p>
        <p><?= $menuset->getDataDescLastID('detail', 'id = ' . $arrData[0]) ?></p>
    </div>


<?php } ?>
