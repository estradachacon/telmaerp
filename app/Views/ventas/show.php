<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>
<h1><?= $peliculas->titles ?></h1>
<p><?= $peliculas->description ?></p>

<ul>
    <?php foreach ($imagenes as $i): ?>
        <li>
            <?= $i->imagen ?>
        </li>
    <?php endforeach ?>
</ul>
<?= $this->endSection() ?>