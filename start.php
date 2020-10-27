<?php
require_once 'pages/templates/album_header.php';

require_once 'Classes/Card.php';
$card = new Card();

require_once 'Classes/FEATURES.php';
$featuresClass = new Features();

$features = $featuresClass->FEATURES;

?>
<main role="main">



    <div class="album py-5 bg-light">
        <div class="container">

            <?php

            $cards_in_row=0;
            foreach ($features as $index => $feature){



                if ($cards_in_row === 0) {
                    print '<div class="row">';
                }

//                $card->setContent($index, $feature['title'], $feature['description'], $feature['date_created'], $feature['link']);
                $card->setContent($index, $feature);
                $card->displayCard();


                $cards_in_row++;

                if ($cards_in_row === 3) {
                    print '</div>';
                    $cards_in_row = 0;

                }
            }
            ?>


            </div>
        </div>
</main>

<?php
require_once 'pages/templates/footer.php';
?>