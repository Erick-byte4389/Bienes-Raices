<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa con Alberca</h1>

        <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp">
            <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio3.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$12,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>5</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                        alt="icono estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>6</p>
                </li>
            </ul>

            <p class="TextoAlberca"> La casa cuenta con seis espaciosas y elegantes habitaciones, cada una diseñada para
                brindar el máximo confort y privacidad. Cada habitación es un refugio acogedor, con detalles de madera
                que aportan calidez y un toque rústico-chic, creando un ambiente sereno y relajante.<br>
                <br>
                Con cinco baños lujosamente equipados, nunca tendrán que preocuparse por el espacio. Cada baño cuenta
                con acabados de alta calidad, incluyendo hermosas encimeras, modernas duchas tipo lluvia y bañeras de
                diseño, ofreciendo un verdadero santuario para relajarse después de un largo día.<br>
                <br>
                En cuanto al estacionamiento, la casa ofrece dos amplios espacios, brindando la comodidad y seguridad
                necesarias para tus vehículos.<br>  
                <br>
                El corazón de esta propiedad es su impresionante alberca. Imagina disfrutar de largos días de verano
                nadando y relajándote junto a la piscina. Este espacio es perfecto para entretener a tus invitados,
                organizar barbacoas o simplemente disfrutar del sol en la privacidad de tu propio hogar.<br>    
                <br>
                La ubicación de esta casa también es excepcional. Rodeada de naturaleza, ofrece un ambiente tranquilo y
                sereno, ideal para aquellos que buscan un escape del ajetreo de la vida cotidiana. Sin embargo, sigue
                estando cerca de todas las comodidades y servicios que necesitas.</p>


        </div>
    </main>

    <?php 
    include './includes/templates/footer.php';
    ?>
<style>
    .TextoAlberca {
        text-align: justify;
    }
</style>