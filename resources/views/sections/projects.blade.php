<section class="projects-section py-3" id="proyectos" aria-labelledby="projects-title">
    <div class="container">
        <div class="projects-header">
            <h2 id="projects-title">Proyectos Destacados</h2>

            <div class="slider-controls" aria-label="Controles del carrusel de proyectos">
                <button
                    type="button"
                    id="prevProject"
                    class="slider-btn"
                    aria-label="Ver proyecto anterior"
                    aria-controls="projectsTrack"
                >
                    <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>

                <button
                    type="button"
                    id="nextProject"
                    class="slider-btn"
                    aria-label="Ver siguiente proyecto"
                    aria-controls="projectsTrack"
                >
                    <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="projects-slider">
            <div class="projects-track" id="projectsTrack">
                <x-project-card
                    image="Nutrinet.png"
                    alt="Sistema empresarial NutriNet"
                    title="NutriNet"
                    client="Nutriwell"
                    type="Sistema empresarial"
                    description="Sistema empresarial interno desarrollado para Nutriwell."
                    status="Proyecto interno"
                    :technologies="[
                        ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
                        ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
                        ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
                        ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap'],
                    ]"
                />

                <x-project-card
                    image="universidad.png"
                    alt="Plataforma Universidad Nutriwell"
                    title="Universidad Nutriwell"
                    client="Nutriwell"
                    type="Plataforma e-learning"
                    description="Plataforma de aprendizaje en línea para la capacitación de usuarios."
                    status="Proyecto interno"
                    :technologies="[
                        ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
                        ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
                        ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
                    ]"
                />

                <x-project-card
                    image="todosano.png"
                    alt="Tienda en línea Todo Sano"
                    title="Tienda online Todo Sano"
                    client="Todo Sano"
                    type="Comercio electrónico"
                    description="Tienda en línea con pagos y gestión de pedidos."
                    :technologies="[
                        ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
                        ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
                        ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
                    ]"
                />

                <x-project-card
                    image="nutriwell.jpg"
                    alt="Sitio web de Nutriwell"
                    title="Nutriwell"
                    client="Nutriwell"
                    type="Sitio web corporativo"
                    description="Presentación de productos y medios de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                        ['name' => 'Figma', 'icon' => 'fa-brands fa-figma'],
                    ]"
                />

                <x-project-card
                    image="pedregal.jpg"
                    alt="Sitio web de Pedregal"
                    title="Pedregal"
                    client="Pedregal"
                    type="Sitio web corporativo"
                    description="Catálogo de productos y canales de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                        ['name' => 'Figma', 'icon' => 'fa-brands fa-figma'],
                    ]"
                />

                <x-project-card
                    image="universitas.png"
                    alt="Sistema web Universitas"
                    title="Universitas"
                    client="Universitas"
                    type="Sistema web autoadministrable"
                    description="Sistema autoadministrable para presentar productos y facilitar el contacto."
                    :technologies="[
                        ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
                        ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
                        ['name' => 'CSS', 'icon' => 'fa-brands fa-css3-alt'],
                        ['name' => 'HTML', 'icon' => 'fa-brands fa-html5'],
                        ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
                    ]"
                />

                <x-project-card
                    image="diacon.jpg"
                    alt="Sitio web de Diacon"
                    title="Diacon"
                    client="Diacon"
                    type="Sitio web y catálogo"
                    description="Catálogo de productos y datos de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="san-ar.jpg"
                    alt="Sitio web de San-ar"
                    title="San-ar"
                    client="San-ar"
                    type="Sitio web y catálogo"
                    description="Catálogo de productos y datos de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="pavigue.jpg"
                    alt="Tienda en línea de Pavigue"
                    title="Pavigue"
                    client="Pavigue"
                    type="Tienda en línea"
                    description="Catálogo de productos, contacto y pasarela de pagos."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                        ['name' => 'E-commerce', 'icon' => 'fa-solid fa-cart-shopping'],
                    ]"
                />

                <x-project-card
                    image="salondalia.jpg"
                    alt="Sitio web de Salón Dalia"
                    title="Salón Dalia"
                    client="Salón Dalia"
                    type="Sitio web y agenda de citas"
                    description="Catálogo, información de contacto y agenda de citas."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="ps-asesores.jpg"
                    alt="Sitio web de PS Asesores"
                    title="PS Asesores"
                    client="PS Asesores"
                    type="Sitio web"
                    description="Información de productos, contacto y agenda de citas."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="biraco.jpg"
                    alt="Sitio web de Biraco"
                    title="Biraco"
                    client="Biraco"
                    type="Sitio web autoadministrable"
                    description="Catálogo de productos, contacto y agenda de citas."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="casayterrenostoluca.jpg"
                    alt="Portal de Casas y Terrenos Toluca"
                    title="Casas y Terrenos Toluca"
                    client="Casas y Terrenos Toluca"
                    type="Portal inmobiliario autoadministrable"
                    description="Publicación de propiedades, información de contacto y agenda de citas."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="vayco.jpg"
                    alt="Sitio web de Vayco Comercializadora"
                    title="Vayco Comercializadora"
                    client="Vayco Comercializadora"
                    type="Sitio web autoadministrable"
                    description="Catálogo de productos e información de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="makita.png"
                    alt="Sitio y tienda en línea de Makita México"
                    title="Makita México"
                    client="Makita México"
                    type="Tienda en línea autoadministrable"
                    description="Catálogo de productos, tienda en línea y contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />

                <x-project-card
                    image="rubenfernadezlimacommx1.jpg"
                    alt="Sitio profesional de Rubén Fernández Lima"
                    title="Rubén Fernández Lima"
                    client="Rubén Fernández Lima"
                    type="Sitio web autoadministrable"
                    description="Currículum profesional y medios de contacto."
                    :technologies="[
                        ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress'],
                        ['name' => 'Elementor', 'icon' => 'fa-solid fa-puzzle-piece'],
                    ]"
                />
            </div>
        </div>
    </div>
</section>
