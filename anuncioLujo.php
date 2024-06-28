<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa terminados de Lujo</h1>

        <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp">
            <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio2.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$9,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>4</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                        alt="icono estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>5</p>
                </li>
            </ul>

            <p class="TextoLujo"> La casa cuenta con cinco amplias y elegantes habitaciones, cada una diseñada pensando en el confort y la
                privacidad. Cada habitación es un refugio de paz, con grandes ventanas que dejan entrar abundante luz
                natural y ofrecen vistas impresionantes de los alrededores. Imagina despertarte cada mañana con la brisa
                del mar y el sonido de las olas como tu despertador personal.<br>
                <br>
                Los cuatro baños de esta residencia están equipados con acabados de lujo. Desde elegantes encimeras de
                mármol hasta duchas tipo lluvia y bañeras de diseño, cada baño es un santuario donde podrás relajarte y
                rejuvenecer después de un largo día.<br>
                <br>
                La cocina es un verdadero sueño para cualquier chef, con electrodomésticos de última generación, amplias
                encimeras y una distribución que facilita el flujo de trabajo. Ya sea que disfrutes cocinar para tu
                familia o entretener a tus invitados, esta cocina será el corazón de tu hogar.<br>
                <br>
                Pero lo que realmente distingue a esta propiedad es su proximidad al mar. A tan solo unos pasos de la
                playa, podrás disfrutar de paseos matutinos por la arena, días de sol y mar, y espectaculares puestas de
                sol que pintan el cielo de colores vibrantes. Esta ubicación no solo te ofrece una casa, sino un estilo
                de vida donde el mar es tu vecino más cercano.</p>


        </div>
    </main>
    <?php 
    include './includes/templates/footer.php';
    ?>
    
<style>
.TextoLujo{
text-align: justify;
}
</style>