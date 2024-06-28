<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Desde nuestros humildes comienzos, hemos crecido y evolucionado, pero nuestros valores fundamentales
                    han permanecido inalterados. La integridad, el compromiso y la dedicación a nuestros clientes son
                    los pilares que han sostenido cada uno de nuestros logros. Nos enorgullece ser una empresa que ha
                    sido sinónimo de confianza y excelencia en el sector inmobiliario durante un cuarto de siglo.</p>

                <p>A lo largo de estos años, hemos tenido el privilegio de ayudar a miles de familias a encontrar su
                    hogar ideal, a inversores a descubrir oportunidades rentables y a empresas a establecerse en
                    ubicaciones estratégicas. Cada transacción, cada proyecto y cada cliente han dejado una huella en
                    nuestra historia, y estamos inmensamente agradecidos por la confianza que han depositado en
                    nosotros.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p class="textoSeguridad">Ofrecemos seguridad en las transacciones. Asegura que todos los contratos y
                    acuerdos se manejen con transparencia y equidad, utilizando intermediarios de confianza y servicios
                    de custodia para manejar los fondos, elimina el riesgo de fraudes y malentendidos.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p class="TextoPrecio">Ofrecemos precios accesibles asi como propiedades modernas, con acabados de alta calidad, tecnología
                    de última generación y diseño arquitectónico atractivo, se cotizan más alto en el mercado. Las
                    renovaciones
                    recientes, que mejoran tanto la funcionalidad como la estética del inmueble, pueden incrementar su
                    valor de manera considerable.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p class="TextoTiempo">El tiempo es un recurso invaluable en el sector de bienes raíces. Nuestro compromiso es ayudarle a
                    gestionar y aprovechar el tiempo de manera efectiva en cada paso del proceso inmobiliario,
                    asegurando que cada transacción sea exitosa y que cada inversión genere valor a lo largo de los
                    años.</p>
            </div>
        </div>
    </section>
    <?php 
    include './includes/templates/footer.php';
    ?>
   
<style>
    .textoSeguridad{
text-align: justify;

    }
    .TextoPrecio{
        text-align: justify;
    }
    .TextoTiempo{
text-align: justify;
    }

</style>