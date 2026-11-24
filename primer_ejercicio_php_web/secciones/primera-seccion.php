<div class="py-5 px-3 gap-3 section-items m-auto mb-5">

    <?php
    if (count($peliculas) > 0):
        foreach ($peliculas as $peli):
            createPeli($peli);
        endforeach;
    else:
        ?>
        <div class="alert alert-warning py-3 px-5 no-pelis">
            <p class="display-6 m-0 text-center">
                No hay películas disponibles
            </p>
        </div>
    <?php
    endif;
    ?>

</div>