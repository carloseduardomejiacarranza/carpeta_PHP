<?php


function createPeli($peli)
{
    ?>
    <div class="item border rounded-3 py-4 px-3 position-relative">
        <div class="img-container">
            <img src="<?= $peli['imagen']; ?>" alt="<?= $peli['titulo']; ?>">
        </div>
        <div>
            <h2 class="h4 m-0 mb-3"><?= $peli["titulo"]; ?></h2>
            <p class="m-0 mb-3">
                <?= $peli["universo"]; ?>
            </p>
        </div>
    </div>
    <?php
}


