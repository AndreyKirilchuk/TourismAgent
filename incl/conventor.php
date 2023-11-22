<div class="banner">
    <div class="banner_inner">
        <div class="conventor">
        <?php
            $query33 = "SELECT * FROM valuta";
            $result = $link->query($query33);
            while ($conventor = $result->fetch_assoc()) {
                echo'
                    <span class="CYRS">1 RUB = '.$conventor['USD'].' USD</span>
                    <div class="link_conventor">
                        <div class="link_conventor_button">
                            <a href="?page=conventor_Usd_to_Rub">
                                USD - RUB
                            </a>
                        </div>
                        <div class="link_conventor_button">
                            <a href="?page=conventor_Rub_to_Usd">
                                RUB - USD
                            </a>
                        </div>   
                    </div>
                ';
            }
        ?>
        </div>
    </div>
</div>
