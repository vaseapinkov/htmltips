<?php

require_once 'Classes/FEATURES.php';
$featuresClass = new Features();

$page_id = $_GET['data'];

$features = $featuresClass->FEATURES;
$title = '';
$description = '';
$next_page_name = '';
$next_page_title = '';

foreach ($features as $index => $feature){
    if ($index == $page_id){
        $title = $feature['title'];
        $description = $feature['description'];
        break;
    }
}
//print $features[$page_id+1]['link'];
if (isset($features[$page_id+1]['link'])){
    $next_page_link = $features[$page_id+1]['link'].'?data='.(string)($page_id+1);
    $next_page_title = $features[$page_id+1]['title'];
}else{
    $next_page_link = $features[1]['link'].'?data=1';
    $next_page_title = $features[1]['title'];
}
?>


<section class="jumbotron text-center">
        <div class="container">
            <h1><?php echo $title?></h1>
            <p class="lead text-muted"><?php echo $description?></p>
            <p>
                <a href="../start.php" class="btn btn-primary my-2">Go back</a>
<!--                <a href="--><?php //echo $features[$page_id+1]['link']?><!--?data=--><?php //echo $page_id+1?><!--" class="btn btn-secondary my-2">See what com next</a>-->
                <a href="<?php echo $next_page_link?>" class="btn btn-secondary my-2"><?php echo $next_page_title?></a>
            </p>
        </div>
    </section>