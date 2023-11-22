<?php
    $query30 = "SELECT * FROM valuta";
    $result = $link->query($query30);
    while ($conventor = $result->fetch_assoc()) {
        $rub_to_usd = $conventor['USD'];
        $usd_to_rub = 1 / $rub_to_usd;
    }

    if (isset($_POST['convert'])) {
        $rub_user = $_POST['rub_user'];
        $usd_user = $_POST['usd_user'];
        $USD = !empty($rub_user) ? $rub_user * $rub_to_usd : '';
        $RUB = !empty($usd_user) ? $usd_user * $usd_to_rub : '';
    }
?>
<div class="banner">
    <div class="banner_inner">
        <div class="conventor">
            <span class="convert_zagolovok"> USD - RUB</span>
            <form method="post">
                <div class="conventor1">
                    <div class="rub">
                        <input type="number" class="conventor_text" name="rub_user" placeholder="<?php echo $rub_user; ?>" min="0" step="any">  
                    </div>
                    <div class="usd">
                        <?php echo $USD; ?> 
                    </div>
                </div>
                <div class="wrapper">
                    <input type="submit" placeholder="Convertion" class="button_convert" name="convert" value="Convert">
                </div>
            </form>
        </div>
    </div>
</div>
