<?php
    $query32 = "SELECT * FROM valuta";
    $result = $link->query($query32);
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
            <span class="convert_zagolovok"> RUB - USD </span>
            <form method="post">
                <div class="conventor2">
                    <div class="usd">
                        <input type="number" class="conventor_text" name="usd_user" placeholder="<?php echo $usd_user; ?>" min="0" step="any">  
                    </div>
                    <div class="rub">
                        <?php echo $RUB; ?>    
                    </div>
                </div>
                <div class="wrapper">
                    <input type="submit" placeholder="Convertion" class="button_convert" name="convert" value="Convert">
                </div>
            </form>
        </div>
    </div>
</div>
