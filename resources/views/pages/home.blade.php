@extends('layouts.app')

@section('content')
    @include('sections.hero')
    <section class="tech-section py-1" id="tecnologias">

        <div class="container" >

            <div class="section-title text-center mb-">

                <h2>Tecnologías & Herramientas</h2>

                <div class="title-line"></div>

            </div>

            <div class="row g-4 mt-1 justify-content-center">

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/laravel.png') }}" alt="Laravel">
                        <span>Laravel</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/php.png') }}" alt="">
                        <span>PHP</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/javaScript.png') }}" alt="">
                        <span>JavaScript</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/boostrap.png') }}" alt="">
                        <span>Bootstrap</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/mysql.png') }}" alt="">
                        <span>MySQL</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/wp.png') }}" alt="">
                        <span>WordPress</span>
                    </div>
                </div>

                <div class="col-lg col-md13 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/figma.png') }}" alt="">
                        <span>Figma</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/git.png') }}" alt="">
                        <span>Git</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/Shopify.png') }}" alt="">
                        <span>Shopify</span>
                    </div>
                </div>

                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/whm.png') }}" alt="">
                        <span>WHM</span>
                    </div>
                </div>
                <div class="col-lg col-md-1 col-3">
                    <div class="tech-card">
                        <img src="{{ asset('asset/images/cpanel.png') }}" alt="">
                        <span>CPanel</span>
                    </div>
                </div>

            </div>
            <section class="about-experience py-5"  id="sobremi">

                <div class="container" id="experiencia">

                    <div class="row">

                        <!-- SOBRE MI -->
                        <div class="col-lg-4">

                            <div class="about-box text-center">

                                <h2 class="section-heading">
                                    Sobre Mí
                                </h2>

                                <div class="heading-line"></div>

                                <p class="about-text">

                                    Más de 16 años desarrollando soluciones web a medida,
                                    sistemas empresariales, plataformas e-learning y
                                    experiencias UI/UX modernas.

                                </p>

                                <p class="about-text">

                                    Me especializo en Laravel, WordPress y en la
                                    administración de servidores con WHM/cPanel.

                                </p>

                                <div class="row g-3 mt-3">

                                    <div class="col-6">

                                        <div class="mini-card">

                                            <i class="fa-regular fa-circle-check"></i>

                                            <span>Enfoque en Calidad</span>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="mini-card">

                                            <i class="fa-solid fa-code"></i>

                                            <span>Código Limpio</span>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="mini-card">

                                            <i class="fa-solid fa-wand-magic-sparkles"></i>

                                            <span>Diseño Moderno</span>

                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <div class="mini-card">

                                            <i class="fa-solid fa-users"></i>

                                            <span>Soporte Confiable</span>

                                        </div>

                                    </div>

                                </div>

                                <a href="#contactame" class="btn btn-outline-primary mt-3">

                                    Más sobre mí

                                </a>
                                <a href="https://codebyacr.com/acdessin/" class="btn btn-outline-primary mt-3" target="_blanck">

                                    Mi Experiencia Freelance

                                </a>
                                <a href="https://codebyacr.com/acdessin/"  target="_blanck">

                                            <img class="text-center mt-3" src="{{ asset('asset/images/acdessin-logo.png') }}" alt="Nutriwell">
 </a>
                            </div>

                        </div>

                        <!-- EXPERIENCIA -->
                        <div class="col-lg-8">

                            <div class="experience-box">

                                <h2 class="section-heading">
                                    Experiencia Profesional
                                </h2>

                                <div class="heading-line"></div>

                                <div class="timeline">

                                    <div class="timeline-item">

                                        <div class="timeline-marker">
                                            <div class="timeline-marker-in">
                                            </div>
                                        </div>

                                        <div class="timeline-content">

                                            <span class="timeline-date">
                                                2023 - Actual
                                            </span>

                                            <h5>
                                                Full Stack Developer – Nutriwell
                                            </h5>

                                            <p>
                                                Desarrollo de sistemas empresariales,
                                                intranet, helpdesk y plataformas e-learning.
                                            </p>

                                        </div>

                                        <div class="timeline-logo">

                                            <img src="{{ asset('asset/images/nutriwell.png') }}" alt="Nutriwell">

                                        </div>

                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-marker">
                                            <div class="timeline-marker-in">
                                            </div>
                                        </div>

                                        <div class="timeline-content">

                                            <span class="timeline-date">
                                                2011 - 2023
                                            </span>

                                            <h5>
                                                Desarrollador Freelance acdessin
                                            </h5>

                                            <p>Desarrollo de paginas web y administracion de servidores.
                                                WordPress, PHP, UI/UX,
                                                plugins personalizados y SEO.
                                            </p>

                                        </div>

                                        <div class="timeline-logo">

                                            <img src="{{ asset('asset/images/acdessin-logo.png') }}" alt="Nutriwell">

                                        </div>

                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-marker">
                                            <div class="timeline-marker-in">
                                            </div>
                                        </div>

                                        <div class="timeline-content">
                                            <span class="timeline-date">
                                                2010 - 2011
                                            </span>
                                            <h5>
                                                JEFE DEL DEPARTAMENTO DE INFORMÁTICA – INEA </h5>

                                            <p>
                                                • Coordinación de soporte técnico para plazas comunitarias.<br>
                                                • Desarrollo de sistemas de información internos.
                                            </p>

                                        </div>

                                        <div class="timeline-logo">

                                            <img src="{{ asset('asset/images/inea.png') }}" alt="INEA">

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </section>

            {{-- PROYECTOS  --}}
            <section class="projects-section py-5" id="proyectos">

                <div class="container">

                    <div class="projects-header">

                        <h2>Proyectos Destacados</h2>

                        <div class="slider-controls">

                            <button id="prevProject" class="slider-btn ">
                                <i class="bi bi-chevron-left"></i>

                            </button>

                            <button id="nextProject" class="slider-btn">
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                    <div class="projects-slider ">

                        <div class="projects-track">

                            <!-- CARD 1 -->

                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/nutrinet.png') }}" class="project-image"
                                    alt="Nutrinet">

                                <div class="project-body">

                                    <span class="project-tag blue">
                                        Sistema Empresarial
                                    </span>

                                    <h5>Nutrinet</h5>

                                    <p>
                                        Intranet y sistema de helpdesk empresarial.
                                    </p>

                                    <small>
                                        Laravel • MySQL • Bootstrap
                                    </small>

                                </div>

                            </div>

                            <!-- CARD 2 -->

                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/universidad.png') }}" class="project-image"
                                    alt="Nutrinet">

                                <div class="project-body">

                                    <span class="project-tag green">
                                        E-learning
                                    </span>

                                    <h5>Universidad Nutriwell</h5>

                                    <p>
                                        Plataforma educativa y capacitaciones.
                                    </p>

                                    <small>
                                        Laravel • PHP • MySQL
                                    </small>

                                </div>

                            </div>

                            <!-- CARD 3 -->

                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/todosano.png') }}"
                                    class="project-image border" alt="TodoSano">

                                <div class="project-body">

                                    <span class="project-tag orange">
                                        E-commerce
                                    </span>

                                    <h5>Tienda Online</h5>

                                    <p>
                                        Pagos y gestión de pedidos.
                                    </p>

                                    <small>
                                        Laravel • JS • MySQL
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 4 -->

                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/nutriwell.jpg') }}"
                                    class="project-image border" alt="TodoSano">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site
                                    </span>

                                    <h5>Nutriwell</h5>

                                    <p>
                                        Productos y Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor • Figma
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 4 -->

                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/pedregal.jpg') }}"
                                    class="project-image border" alt="Pedregal">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site
                                    </span>

                                    <h5>Pedregal</h5>

                                    <p>
                                        Productos y Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor • Figma
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 6 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/universitas.png') }}"
                                    class="project-image border" alt="Pedregal">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Sistema
                                    </span>

                                    <h5>Universitas</h5>

                                    <p>
                                        Sistema aunto administrable, Productos y Contacto.
                                    </p>

                                    <small>
                                        php • mysql • Css • Html • Javascript 
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 7 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/diacon.jpg') }}"
                                    class="project-image border" alt="Pedregal">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site
                                    </span>

                                    <h5>Diacon</h5>

                                    <p>
                                        Productos y Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
<!-- CARD 8 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/san-ar.jpg') }}"
                                    class="project-image border" alt="Pedregal">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site
                                    </span>

                                    <h5>San-ar</h5>

                                    <p>
                                        Productos y Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 9 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/pavigue.jpg') }}"
                                    class="project-image border" alt="Pedregal">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site • ecommerce
                                    </span>

                                    <h5>Pavigue</h5>

                                    <p>
                                        Productos Contacto y Pasarela de pagos.
                                    </p>

                                    <small>
                                        Wordpress • Elementor • ecommerce
                                    </small>

                                </div>

                            </div>
<!-- CARD 10 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/salondalia.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site 
                                    </span>

                                    <h5>Pavigue</h5>

                                    <p>
                                        Productos Contacto y Agenda de citas.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
<!-- CARD 11 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/ps-asesores.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site 
                                    </span>

                                    <h5>ps-asesores</h5>

                                    <p>
                                        Productos Contacto y Agenda de citas.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
<!-- CARD 12 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/biraco.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site auto administrable
                                    </span>

                                    <h5>Biraco</h5>

                                    <p>
                                        Productos Contacto y Agenda de citas.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
                            <!-- CARD 12 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/casayterrenostoluca.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site auto administrable
                                    </span>

                                    <h5>Casas y Terrenos Toluca</h5>

                                    <p>
                                        Productos Contacto y Agenda de citas.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
                             <!-- CARD 12 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/vayco.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site auto administrable
                                    </span>

                                    <h5>Vayco Comercializadora</h5>

                                    <p>
                                        Productos Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
 <!-- CARD 12 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/makita.png') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site auto administrable y tienda en linea
                                    </span>

                                    <h5>Makita M+exico</h5>

                                    <p>
                                        Productos Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor 
                                    </small>

                                </div>

                            </div>
 <!-- CARD 12 -->
                            <div class="project-card">

                                <img src="{{ asset('asset/images/proyectos/rubenfernadezlimacommx1.jpg') }}"
                                    class="project-image border" alt="Salon Dalia">

                                <div class="project-body">

                                    <span class="project-tag yellow">
                                        Web site auto administrable y tienda en linea
                                    </span>

                                    <h5>Ruben Fernadez Lima</h5>

                                    <p>
                                        CV y Contacto.
                                    </p>

                                    <small>
                                        Wordpress • Elementor  
                                    </small>

                                </div>

                            </div>



                        </div>

                    </div>
                    <div class="text-center mt-3 d-none">
                        <a href="#" class="btn-projects">
                            Ver todos los proyectos
                            <span class="arrow">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </section>

            <section class="services-section py-5" id="servicios">

                <div class="container">
                    <h2 class="section-heading">
                        Servicios que Ofrezco </h2>

                    <div class="heading-line"></div>


                    <div class="row g-4">

                        <!-- Servicio 1 -->

                        <div class="col-lg-3 col-md-6">

                            <div class="service-card">

                                <div class="service-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>

                                <div>

                                    <h5>Desarrollo Web</h5>

                                    <p>
                                        Aplicaciones web con Laravel y tecnologías modernas.
                                    </p>
                                    <div class="heading-line"></div>
                                </div>

                            </div>

                        </div>

                        <!-- Servicio 2 -->

                        <div class="col-lg-3 col-md-6">

                            <div class="service-card">

                                <div class="service-icon">
                                    <i class="bi bi-wordpress"></i>
                                </div>

                                <div>

                                    <h5>WordPress Expert</h5>

                                    <p>
                                        Sitios, plugins y soluciones personalizadas.
                                    </p>
                                    <div class="heading-line"></div>
                                </div>

                            </div>

                        </div>

                        <!-- Servicio 3 -->

                        <div class="col-lg-3 col-md-6">

                            <div class="service-card">

                                <div class="service-icon">
                                    <i class="bi bi-hdd-rack"></i>
                                </div>

                                <div>

                                    <h5>WHM / cPanel</h5>

                                    <p>
                                        Hosting, dominios, correos y administración.
                                    </p>
                                    <div class="heading-line"></div>
                                </div>

                            </div>

                        </div>

                        <!-- Servicio 4 -->

                        <div class="col-lg-3 col-md-6">

                            <div class="service-card">

                                <div class="service-icon">
                                    <i class="bi bi-display"></i>
                                </div>

                                <div>

                                    <h5>UI/UX Design</h5>

                                    <p>
                                        Interfaces enfocadas en experiencia de usuario.
                                    </p>
                                    <div class="heading-line"></div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- CTA -->

                    <div class="cta-box mt-4" id="contactame">

                        <div class="row align-items-center ">

                            <div class="col-lg-7 col-md-12">

                                <div class="cta-content">

                                    <div class="cta-icon">

                                        <i class="bi bi-send-fill"></i>

                                    </div>

                                    <div>

                                        <h3>
                                            ¿Tienes un proyecto en mente?
                                        </h3>

                                        <p>
                                            Estoy disponible para nuevos retos y oportunidades.
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5 col-md-12 text-center justify-content-center">

                                <div class="cta-buttons">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 p-3 align-items-center">
                                            <a href="#" class="btn btn-contact-proyecto" class="btn-contact"
   data-bs-toggle="modal"
   data-bs-target="#contactModal">
                                                Contáctame
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-sm-12 p-3 align-items-center">
                                            <a href="#" class="btn btn-projects-cta">
                                                Ver Proyectos
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>

                                    </div>




                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


        </div>

    </section>
    <footer class="footer">

        <div class="container">

            <div class="row gy-5">

                <!-- LOGO -->

                <div class="col-lg-4">

                    <div class="footer-brand text-center">


                        <img src="{{ asset('asset/images/acr-write.png') }}" class="logo " alt="<acr>">

                        <p class="text-center">
                            Desarrollo soluciones web modernas
                            con enfoque en rendimiento,
                            usabilidad y diseño.
                        </p>

                        <div class="footer-social">

                            <a href="#">
                                <i class="bi bi-github"></i>
                            </a>

                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="#">
                                <i class="bi bi-envelope-fill"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <!-- NAVEGACION -->

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <h5>Navegación</h5>

                    <ul>

                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#sobremi">Sobre mí</a></li>
                        <li><a href="#tecnologias">Stack</a></li>
                        <li><a href="#experiencia">Experiencia</a></li>

                    </ul>

                </div>

                <!-- NAVEGACION 2 -->

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <h5>&nbsp;</h5>

                    <ul>

                        <li><a href="#proyectos">Proyectos</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#contacto">Contactameo</a></li>

                    </ul>

                </div>

                <!-- SERVICIOS -->

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <h5>Servicios</h5>

                    <ul>

                        <li>Desarrollo Web</li>
                        <li>WordPress</li>
                        <li>WHM / cPanel</li>
                        <li>UI/UX Design</li>
                        <li>Mantenimiento</li>

                    </ul>

                </div>

                <!-- CONTACTO -->

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <h5>Contacto</h5>

                    <ul class="footer-contact">

                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            Toluca, Estado de México
                        </li>

                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            722 363 5998
                        </li>

                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            aconstantino@codebyacr.com
                        </li>

                    </ul>

                    <a href="https://wa.me/527223635998?text=Hola%20Agustín,%20vi%20tu%20portafolio%20y%20me%20gustaría%20obtener%20más%20información."
 class="btn-whatsapp">

                        <i class="bi bi-whatsapp"></i>

                        Hablemos

                    </a>

                </div>

            </div>

            <hr>

            <div class="footer-bottom">

                <p>
                    © 2026 Agustín Constantino Rugerio.
                    Todos los derechos reservados.
                </p>

                <p>
                    Hecho con ❤️ y código
                </p>

            </div>

        </div>

    </footer>
    {{-- @include('sections.stack') --}}

    {{-- @include('sections.about') --}}

    {{-- @include('sections.experience') --}}

    {{-- @include('sections.projects') --}}

    {{-- @include('sections.services') --}}

    {{-- @include('sections.cta') --}}
@endsection
