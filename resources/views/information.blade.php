@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <div  class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">
            <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                <div class="space-y-2" x-data="{ current: 1 }">
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 1}" x-on:click="current === 1 ? current = null : current = 1">
                            ¿Quién soy y por qué hice esto?
                            <div class="ml-auto" :class="{'rotate-180' : current === 1}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>
                                    Hola, soy un joven informático, hice esto para brindar un pequeño servicio rápido, sin evitar los 2108741 mil ads que existen en otras páginas, en la mía
                                    habra, más adelante, pero es para mantener el servidor activo, (las cuentas no se pagan solas amigoooos) en fín, bienvenido, te daré introducción a esta
                                    herramienta.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 2}" x-on:click="current === 2 ? current = null : current = 2">
                            ¿Por qué usar nuestro acortador de enlaces?
                            <div class="ml-auto" :class="{'rotate-180' : current === 2}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <ul>
                                    <li><strong>Facilidad de Uso:</strong> Copias tu link, seleccionas las opciones que quieres que tenga y te mostramos el link acortado.
                                        Solamente pasaron 15 segundos si lo haces fluido.</li>
                                    <li><strong>Seguridad y Confiabilidad:</strong> Sabemos lo importante que es la seguridad en
                                        línea. Todos los enlaces creados a través de
                                        nuestro servicio están protegidos contra el spam y el uso malintencionado. Además, nuestros
                                        servidores están optimizados para garantizar que tus enlaces estén siempre disponibles. A parte, no guardamos información personal.</li>
                                    <li><strong>Funcionalidades Avanzadas:</strong> Nuestro acortador de URLs no solo reduce la
                                        longitud de tus enlaces, sino que también ofrece
                                        funciones avanzadas como la personalización de URLs, la creación de enlaces que expiran
                                        automáticamente, puedes almacenarlos en un QR, mandarlos por mail e inclusive obtener información para marketing.</li>
                                    <li><strong>Mejor Estética:</strong> Un link corto se ve más limpio y profesional, lo que mejora la presentación
                                        de tus mensajes y contenido.</li>
                                    <li><strong>NO ALMACENAMOS TUS DATOS, voy directo al punto, no los queremos!</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 3}" x-on:click="current === 3 ? current = null : current = 3">
                            ¿Para quién es este servicio?
                            <div class="ml-auto" :class="{'rotate-180' : current === 3}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Para todo aquel que desee acortar su link, cada quien sabrá que realizar con él.</p>
                                <p>Y tambien te doy la posibilidad de saber cuantas personas y de donde abrieron tu link, simplemente con el buscador.</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 4}" x-on:click="current === 4 ? current = null : current = 4">
                            ¿Qué es un Link?
                            <div class="ml-auto" :class="{'rotate-180' : current === 4}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 4" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Un link, también conocido como enlace o hipervínculo, es una referencia en un documento digital que conduce a
                                    otro documento o recurso. Los links son fundamentales en la navegación web, ya que permiten a los usuarios
                                    acceder a otras páginas web, archivos, imágenes, videos y más con un simple clic. Los links están compuestos por
                                    una URL (Uniform Resource Locator), que es la dirección que indica a dónde llevará el enlace al usuario cuando
                                    lo seleccione. Esto es extraido de wiki</p>
                                <br/>
                                <img src="{{ url('') }}/imagenes/example_url.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 5}" x-on:click="current === 5 ? current = null : current = 5">
                            ¿Qué es un Acortador de Links?
                            <div class="ml-auto" :class="{'rotate-180' : current === 5}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 5" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Literalmente, vuelve tu link largo, en uno corto, asi de simple, por debajo ocurren muchas cosas que no es necesario que sepas (hablamos de programación)
                                    pero la simplemente es una herramienta potente para evitar links largos y fuera de estilo o diseño o simplemente, para que se vea más lindo.
                                </p>
                                <br>
                                <img src="{{ url('') }}/imagenes/example_shortener_url.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 6}" x-on:click="current === 6 ? current = null : current = 6">
                            ¿Por qué utilizar un Acortador de Links?
                            <div class="ml-auto" :class="{'rotate-180' : current === 6}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 6" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Utilizar un acortador de links ofrece numerosas ventajas, admitimos que es feo ver un link de youtube extremadamente largo, en uno cortito y sencillo.
                                    <img src="{{ url('') }}/imagenes/es-bellisimo-meme.jpg" class="img-fluid" alt="...">
                                    <br>
                                    <br>
                                    Primero, ayuda a hacer las URLs más limpias y
                                    presentables, especialmente en plataformas donde el espacio es limitado, como en redes sociales o
                                    mensajes SMS.
                                    <br>
                                    <br>
                                    <img src="{{ url('') }}/imagenes/facilito-meme.jpg" class="img-fluid" alt="...">
                                    <br>
                                    <br>
                                    Además, los links acortados son más fáciles de recordar y compartir, lo que mejora la experiencia del
                                    usuario.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 7}" x-on:click="current === 7 ? current = null : current = 7">
                            Ejemplos de Dónde Utilizar un Link Corto
                            <div class="ml-auto" :class="{'rotate-180' : current === 7}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 7" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Los links cortos son increíblemente versátiles lo podes usar en todos laaaaadoooos:</p>
                                <ul>
                                    <li><strong> Redes Sociales:</strong> Para compartir artículos, productos o promociones sin ocupar demasiado
                                        espacio en la publicación.</li>
                                    <li><strong>Campañas de Marketing:</strong> En correos electrónicos, mensajes de texto, y anuncios para rastrear
                                        la efectividad de cada enlace.</li>
                                    <li><strong>Presentaciones y Documentos:</strong> Para proporcionar acceso rápido a recursos adicionales sin
                                        saturar la presentación con URLs largas.</li>
                                    <li><strong>Tarjetas de Presentación Digitales:</strong> Donde un link corto y personalizado puede dirigir a los
                                        usuarios a tu perfil profesional o portafolio en línea.</li>
                                    <li><strong>Materiales Impresos:</strong> Como folletos, carteles, o tarjetas de visita, donde el espacio es
                                        limitado pero es importante incluir una URL.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Topbar -->
    @include('layouts.partials.auth.footer')
    <!-- End Topbar -->


@endsection
