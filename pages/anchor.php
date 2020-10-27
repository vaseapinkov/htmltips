<?php
require_once 'templates/album_header.php';
require_once '../description.php';
?>


<main role="main">

    <div class="container">
        <div class="row justify-content-center">
            <h3 class="mb-2">Enter user name of skype user: <span id="username" contenteditable="true">Username</span>
            </h3>
        </div>

        <div class="row mt-2 justify-content-center">
            <h3>Enter e-mail address: <span id="email" contenteditable="true">someone@gmail.com</span></h3>
        </div>

        <div class="row mt-2 justify-content-center">
            <div class="btn-group">
                <a id="skype_btn" class="btn btn-secondary" href="skype:username?chat">Start chat with the username</a>
                <a id="mail_btn" class="btn btn-secondary" href="mailto:someone@gmail.com">Send email</a>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <script src="https://gist.github.com/vaseapinkov/93d142c097d21ad4073d0a087deddf35.js"></script>
            </div>
        </div>
    </div>
</main>

<script>
    document.getElementById('skype_btn').addEventListener('click', function () {
        let input = document.getElementById('username').innerText;
        this.setAttribute('href', 'skype:' + input + '?chat');
    })

    document.getElementById('mail_btn').addEventListener('click', function () {
        let input = document.getElementById('email').innerText;
        this.setAttribute('href', 'mailto:' + input);
    })
</script>

<?php
require_once 'templates/footer.php';
?>
