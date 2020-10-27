<?php
require_once 'templates/album_header.php';
require_once '../description.php';

?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>No More Types for Scripts and Links </h1>
        <p class="lead text-muted">You possibly still add the type attribute to your link and script tags. This is no
            longer necessary. It's implied that both of these tags refer to stylesheets and scripts, respectively. As
            such, we can remove the type attribute all together.</p>
    </div>
</section>

<main role="main">

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <script src="https://gist.github.com/vaseapinkov/82c82c6c9ed1c6be709516c30469c2e4.js"></script>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'templates/footer.php';
?>

