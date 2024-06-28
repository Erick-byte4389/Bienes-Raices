<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Lago</h1>

        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$15,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                        alt="icono estacionamiento">
                    <p>1</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p class="TextoLago">Esta casa es más que una propiedad; es un santuario de elegancia y confort. Con cuatro amplias recámaras,
                cada una diseñada para proporcionar el máximo confort y privacidad, esta residencia es perfecta para
                familias grandes o para aquellos que disfrutan de recibir invitados. Cada recámara está bañada por luz
                natural y ofrece vistas impresionantes del lago y sus alrededores. <br>
                <br>
                Contamos con tres baños completamente equipados con acabados de primera calidad. Cada detalle ha sido
                cuidadosamente seleccionado para brindar una experiencia de lujo y sofisticación. <br>
                <br>
                El área de estacionamiento es igualmente conveniente, con espacio para un vehículo. Sabemos lo
                importante que es la seguridad y la comodidad para usted, por lo que hemos diseñado este espacio
                pensando en sus necesidades diarias.<br>
                <br>
                Pero lo que realmente hace única a esta propiedad es su ubicación. Situada a orillas del lago, ofrece
                una experiencia de vida inigualable. Disfrute de amaneceres espectaculares, actividades acuáticas y
                paseos relajantes al atardecer. Este es un lugar donde puede desconectarse del ajetreo de la ciudad y
                disfrutar de la serenidad y la belleza de la naturaleza.</p>

            
        </div>
    </main>
    <?php 
    include './includes/templates/footer.php';
    ?>
    
<style>
    .TextoLago{
        text-align: justify;
    }
</style>