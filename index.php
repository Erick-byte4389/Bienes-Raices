<?php 
require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p class="textoSeguridad"> Ofrecemos seguridad en las transacciones. Asegura que todos los contratos y
                    acuerdos se manejen con transparencia y equidad, utilizando intermediarios de confianza y servicios
                    de custodia para manejar los fondos, elimina el riesgo de fraudes y malentendidos.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p class="TextoPrecio">Ofrecemos precios accesibles asi como propiedades modernas, con acabados de alta calidad, tecnología
                    de última generación y diseño arquitectónico atractivo, se cotizan más alto en el mercado. Las renovaciones
                    recientes, que mejoran tanto la funcionalidad como la estética del inmueble.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p class="TextoTiempo"> El tiempo es un recurso invaluable en el sector de bienes raíces. Nuestro compromiso es ayudarle a
                    gestionar y aprovechar el tiempo de manera efectiva en cada paso del proceso inmobiliario,
                    asegurando que cada transacción sea exitosa y que cada inversión genere valor a lo largo de los
                    años.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo.</p>
                    <p class="precio">$18,0000,000</p>

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
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg"
                                alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con terminados de lujo, cerca del mar.</p>
                    <p class="precio">$9,0000,000</p>

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
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg"
                                alt="icono habitaciones">
                            <p>5</p>
                        </li>
                    </ul>

                    <a href="anuncioLujo.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con acabados de madera, con una gran alberca.</p>
                    <p class="precio">$12,0000,000</p>

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
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg"
                                alt="icono habitaciones">
                            <p>6</p>
                        </li>
                    </ul>

                    <a href="anuncioAlberca.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

        </div> <!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto </p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>
    
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Juan De la torre</p>
            </div>
        </section>
    </div>
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