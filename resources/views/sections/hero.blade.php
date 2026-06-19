<section class="hero-section" id="inicio">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6" style="z-index: 10">

                <span class="badge-acr">

                    ¡Hola! Soy

                </span>
                <h1 class="hero-title">

                    Agustín Constantino
                    <span>Rugerio</span>

                </h1>

                <h3 class="hero-subtitle">

                    Full Stack Developer

                    <span class="orange-tit border-start text-center px-2">
                        UI/UX Designer
                    </span>

                </h3>

                <p class="hero-text">

                    Desarrollo plataformas empresariales,
sistemas web y experiencias digitales
que ayudan a las empresas a optimizar
procesos, incrementar productividad
y mejorar su presencia digital.

                </p>

                <div class="d-flex gap-3 mt-4">

                    <a href="#" class="btn-acr btn-acr-primary">

                        <i class="fa-solid fa-code"></i>

                        Ver Proyectos

                    </a>

                    <a href="{{ asset('asset/Documentos/cv-Agustin-Constantino-Rugerio -2026.pdf') }}" target="blank"
                        class="btn-acr btn-acr-outline">

                        <i class="fa-solid fa-download"></i>

                        Descargar CV

                    </a>

                </div>
                <div class="hero-social mt-4">

                    <a href="#">
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>

                    <a href="mailto:aconstantino@codebyacr.com">
                        <i class="fa-regular fa-envelope"></i>
                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center">

                {{-- <div class="hero-bg"></div> --}}
                <div class="hero-photo-container">

                                      <img src="{{ asset('asset/images/codebyacr-1-a.png') }}" class="hero-photo" alt="Agustín Constantino">
                                      <img src="{{ asset('asset/images/proyectos/rubenfernadezlimacommx1.jpg') }}"


                    <!-- CARD 1 -->
                    <div class="hero-card card-laravel">

                        <div class="card-icon laravel">
                            <i class="fa-brands fa-laravel"></i>
                        </div>

                        <div>
                            <h5>Laravel</h5>
                            <span>Laravel Expert</span>
                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="hero-card card-figma">

                        <div class="card-icon figma">
                            <i class="fa-brands fa-figma"></i>
                        </div>

                        <div>
                            <h5>Figma</h5>
                            <span>UI/UX Design</span>
                        </div>

                    </div>

                    <!-- CARD 3 -->
                    <div class="hero-card card-wordpress">

                        <div class="card-icon wordpress">
                            <i class="fa-brands fa-wordpress"></i>
                        </div>

                        <div>
                            <h5>WordPress</h5>
                            <span>E-commerce & SEO</span>
                        </div>

                    </div>
                    <div class="hero-card card-fullstack">

                        <div class="card-icon fullstack">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div>
                            <h5>Full Stack</h5>
                            <span>Laravel · PHP · JS</span>
                        </div>

                    </div>
                    {{-- <img src="{{ asset('asset/images/codebyacr-1.png') }}" class="hero-photo" alt="Agustín Constantino"> --}}
                    <span class="particle p1"></span>
                    <span class="particle p2"></span>
                    <span class="particle p3"></span>
                    <span class="particle p4"></span>


                </div>

            </div>

        </div>

</section>
