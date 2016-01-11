<div id="line"></div>
<div id="slide">
    <?= $contact->getDataDescLastID('google_map', 'id = 1') ?>
</div>
<div id="line1"></div>
<div id="content">
    <h1> <?= $contact->getDataDescLastID('contact_title', 'id = 1') ?></h1>
    <p> <?= $contact->getDataDescLastID('contact_detail', 'id = 1') ?></p>
    <?php
@session_start();
if ($_POST ["submit_bt"] == 'Send') {
    $chk = 0;
    $cpt = $_POST['capt'];
    if ($cpt != $_SESSION['CAPTCHA']) {
        ?>
        <script> alert('Error code');</script>
    <?php
    } else {

        $chk = 1;
        $arrData = array();

        $arrData = $functions->replaceQuote($_POST);

        $contact_message->SetValues($arrData);

        if ($contact_message->GetPrimary() == '') {

            $contact_message->SetValue('created_at', DATE_TIME);

            $contact_message->SetValue('updated_at', DATE_TIME);
        } else {

            $contact_message->SetValue('updated_at', DATE_TIME);
        }

        $contact_message->SetValue('status', 'no read');

        // $contact_message->Save();

        if ($contact_message->Save()) {

            echo "<script>  alert('Send Success');</script>";
        } else {
            echo "<script>  alert('Error');</script>";
        }
    }
}
?>


    <form action="<?php echo ADDRESS ?>contact" method="post" class="form-send-msg">

        <p> Name<br />
            <span>
                <input type="text" name="txt_name" value="<?= $chk == 0 ? $_POST['txt_name'] : '' ?>"

                       class="input" required="required" />
            </span> </p>
        <p> Email.<br />
            <span>
                <input type="email" name="txt_email" class="input" value="<?= $chk == 0 ? $_POST['txt_email'] : '' ?>"

                       required="required" />
            </span> </p>
        <p> Tel<br />
            <span>
                <input type="text" name="txt_tel" value="<?= $chk == 0 ? $_POST['txt_tel'] : '' ?>"

                       class="input" required="required" />
            </span> </p>
        <p> Subject<br />
            <span>
                <input type="text" name="txt_subject" value="<?= $chk == 0 ? $_POST['txt_subject'] : '' ?>" 

                       class="input" required="required" />
            </span> </p>
        <p> Message<br />
            <span>
                <textarea name="txt_message" class="area" 
                          required="required" rows="7" cols="50"><?= $chk == 0 ? $_POST['txt_message'] : '' ?></textarea>
            </span> </p>
        <p>
            Enter Code
            <input type="text" name="capt" id="capt" required=""/> <img src="image_capt.php" id="mycapt"  align="absmiddle" />

            <img id="changeCpt" src="https://www.e-cnhsp.sp.gov.br/GFR/imagens/refresh.png" style="vertical-align: middle;cursor: pointer;">
        </p>
        <p>
            <input id="submit_bt" name="submit_bt" type="submit" value="Send"

                   style="width: 80px; height: 30px;" />
            <input name="reset"

                   type="reset" value="Reset" style="width: 80px; height: 30px;" />
        </p>
    </form>

<style>
    .form-send-msg p{
        margin-bottom: 10px;
    }
    #contant input{
        height: 20px;
        width: 300px;
    }
    #capt{
        width: 100px;
    }
    textarea{
        background-color: white;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">



    $('#changeCpt').click(function (e) {
        var v = Math.random();
        $('#mycapt').attr('src', 'image_capt.php?v=' + v);
    });

</script>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("iframe").width("100%").height("230");

    });
</script>
