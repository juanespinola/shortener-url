@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <div  class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">

            <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                <div class="space-y-2 mb-4">
                    <h2 class="text-base font-semibold mb-4">Preguntas Frecuentes (FAQ) sobre JustAnotherLinkCut.com</h2>
                    <p>En esta sección, encontrarás respuestas a las preguntas más comunes sobre cómo funciona nuestro acortador de links. Aprende cómo usar nuestro servicio de manera efectiva y cómo aprovechar al máximo las herramientas que ofrecemos. Si tienes alguna duda, es probable que encuentres la respuesta aquí.</p>
                </div>
                <div class="space-y-2" x-data="{ current: 0 }">
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 1}" x-on:click="current === 1 ? current = null : current = 1">
                            ¿Qué es un acortador de links y cómo funciona?
                            <div class="ml-auto" :class="{'rotate-180' : current === 1}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Un acortador de links es una herramienta que toma una URL larga y la convierte en una versión mucho más corta y manejable</p>
                                <p>Hablando de programación, es un conjunto de números y letras no repetidos que generar un conjunto de 6 letras, que tienen tu información.</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 2}" x-on:click="current === 2 ? current = null : current = 2">
                            ¿Cómo acorto un enlace?
                            <div class="ml-auto" :class="{'rotate-180' : current === 2}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Sencillamente colocas el link en el campo correspondiente, seleccionas la opción que deseas que se cree el link, pueden ser:</p>
                                <ul>
                                    <li>No expirar.</li>
                                    <li>Qr Code.</li>
                                    <li>Enviar por correo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 3}" x-on:click="current === 3 ? current = null : current = 3">
                            ¿Es seguro usar el acortador de links?
                            <div class="ml-auto" :class="{'rotate-180' : current === 3}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Si, la información guardada es tu email para registro y que puedas acceder a tus links (en caso de registro)</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 4}" x-on:click="current === 4 ? current = null : current = 4">
                            ¿Cuánto tiempo permanecen activos los enlaces acortados?
                            <div class="ml-auto" :class="{'rotate-180' : current === 4}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 4" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>48 horas, siempre y cuando no selecciones la opción de "No expirar".</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 5}" x-on:click="current === 5 ? current = null : current = 5">
                            ¿Cuánto cuesta el servicio?
                            <div class="ml-auto" :class="{'rotate-180' : current === 5}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 5" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Extremadamente caro... No, mentira. GRATIS</p>
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 6}" x-on:click="current === 6 ? current = null : current = 6">
                            ¿Cómo contacto con el soporte técnico?
                            <div class="ml-auto" :class="{'rotate-180' : current === 6}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 6" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Escribes en el formulario de contactos</p>
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

