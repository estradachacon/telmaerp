
<?= $this->extend('layouts/mainbody') ?>

<?= $this->section('title') ?>
    Telma ERP
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
    <!-- Puedes agregar estilos adicionales aquí si lo necesitas -->
<?= $this->endSection() ?>

<?= $this->section('header') ?>
    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://codeigniter.com" target="_blank">
                    <!-- SVG LOGO -->
                </a>
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="#">Home</a></li>
            <li class="menu-item hidden"><a href="https://codeigniter.com/user_guide/" target="_blank">Docs</a></li>
            <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Community</a></li>
            <li class="menu-item hidden"><a href="https://codeigniter.com/contribute" target="_blank">Contribute</a></li>
        </ul>
    </div>
    <div class="heroe">
        <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
        <h2>The small framework with powerful features</h2>
    </div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>About this page</h1>
    <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
    <p>If you would like to edit this page you will find it located at:</p>
    <pre><code>app/Views/welcome_message.php</code></pre>
    <p>The corresponding controller for this page can be found at:</p>
    <pre><code>app/Controllers/Home.php</code></pre>
<?= $this->endSection() ?>

<?= $this->section('further') ?>
    <section>
        <h1>Go further</h1>
        <h2>Learn</h2>
        <p>The User Guide contains an introduction, tutorial, a number of "how to" guides, and then reference documentation for the components that make up the framework. Check the <a href="https://codeigniter.com/user_guide/" target="_blank">User Guide</a> !</p>
        <h2>Discuss</h2>
        <p>CodeIgniter is a community-developed open source project, with several venues for the community members to gather and exchange ideas. View all the threads on <a href="https://forum.codeigniter.com/" target="_blank">CodeIgniter's forum</a>, or <a href="https://join.slack.com/t/codeigniterchat/shared_invite/zt-rl30zw00-obL1Hr1q1ATvkzVkFp8S0Q" target="_blank">chat on Slack</a> !</p>
        <h2>Contribute</h2>
        <p>CodeIgniter is a community driven project and accepts contributions of code and documentation from the community. Why not <a href="https://codeigniter.com/contribute" target="_blank">join us</a> ?</p>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>
<?= $this->endSection() ?>
