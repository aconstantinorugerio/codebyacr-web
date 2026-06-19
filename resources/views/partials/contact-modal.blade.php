<div class="modal fade" id="contactModal" tabindex="-1">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content contact-modal">

            <div class="modal-header border-0 modal-backgroun-azul">

                <div>

                    <h4 class="fw-bold mb-1">
                        Hablemos de tu proyecto
                    </h4>

                    <small class="text-muted ">
                       <span class="perfil"> Desarrollo Web · Laravel · UI/UX · Automatización</span>
                    </small>

                </div>
                <div class="modal-divider"></div>

                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="row g-4 align-items-center">

                    <!-- CONTACTO -->

                    <div class="col-lg-4">

                        <div class="contact-info">

                            <h5 class="mb-4">

                                <i class="fa-solid fa-address-card"></i>

                                Información de contacto

                            </h5>

                            <p>

                                <a href="https://wa.me/527223635998" target="_blank" class="contact-link">

                                    <i class="fa-brands fa-whatsapp"></i>

                                    722 363 5998

                                </a>

                            </p>

                            <p>
                                <i class="fa-solid fa-envelope"></i>
                                aconstantino@codebyacr.com
                            </p>

                            <p>
                                <i class="fa-brands fa-linkedin"></i>
                                LinkedIn
                            </p>

                            <p>
                                <i class="fa-brands fa-github"></i>
                                GitHub
                            </p>

                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                Toluca, Estado de México
                            </p>

                        </div>

                    </div>

                    <!-- FOTO -->

                    <div class="col-lg-3 text-center">

                        <img src="{{ asset('asset/images/codebyacr.png') }}" class="contact-photo" alt="Agustín">

                        <h5 class="mt-3">
                            Agustín Constantino
                        </h5>

                        <span>
                            Full Stack Developer
                        </span>
                        <div class="availability-badge mt-3">

                            <i class="fa-solid fa-circle"></i>

                            Disponible para proyectos

                        </div>

                    </div>

                    <!-- FORMULARIO -->

                    <div class="col-lg-5">

<form id="contactForm"
      action="{{ route('contacto.store') }}"
      method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <input type="email" class="form-control" name="correo" placeholder="Correo">

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono">

                                </div>

                                <div class="col-md-6 mb-3">

                                    <input type="text" class="form-control" name="empresa" placeholder="Empresa">

                                </div>

                            </div>

                            <div class="mb-3">

                                <textarea class="form-control" rows="5" name="mensaje" placeholder="Cuéntame sobre tu proyecto">
                                </textarea>

                            </div>
<div id="mensajeRespuesta"></div>
                            <button type="submit" class="btn-acr w-100">

                                <i class="fa-regular fa-paper-plane me-2"></i>

                                Enviar Mensaje

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
