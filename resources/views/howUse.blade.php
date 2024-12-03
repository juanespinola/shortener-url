@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <div  class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">

            <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                <h2 class="text-base font-semibold mb-4">Without Register</h2>
                <div class="space-y-2" x-data="{ current: 0 }">
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 1}" x-on:click="current === 1 ? current = null : current = 1">
                            Utilizar los servicios
                            <div class="ml-auto" :class="{'rotate-180' : current === 1}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Puedes agregar la url en el cuadro mostrado por la imagen, seleccionar las opciones deseadas.</p>
                                <img src="{{ url('') }}/imagenes/pasos/guest/paso1.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 2}" x-on:click="current === 2 ? current = null : current = 2">
                            Puedes copiar el código QR y también enviar por correo el código QR.
                            <div class="ml-auto" :class="{'rotate-180' : current === 2}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/guest/paso2.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 3}" x-on:click="current === 3 ? current = null : current = 3">
                            Si quieres seguir el proceso de tu URL, puedes copiar la url generada, ingresar a tracklist y pegar el código para visualizar
                            <div class="ml-auto" :class="{'rotate-180' : current === 3}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/guest/paso3.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                <h2 class="text-base font-semibold mb-4">With Register</h2>
                <div class="space-y-2" x-data="{ current: 0 }">
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 1}" x-on:click="current === 1 ? current = null : current = 1">
                            Registrar tus datos
                            <div class="ml-auto" :class="{'rotate-180' : current === 1}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 1" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Puedes registrarte para poder almacenar tus links y seguir más detalladamente.</p>
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso1.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 2}" x-on:click="current === 2 ? current = null : current = 2">
                            Utilizar los servicios
                            <div class="ml-auto" :class="{'rotate-180' : current === 2}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 2" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <p>Puedes agregar la url en el cuadro mostrado por la imagen, seleccionar las opciones deseadas.</p>
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso2.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 3}" x-on:click="current === 3 ? current = null : current = 3">
                            Puedes copiar el código QR y también enviar por correo el código QR.
                            <div class="ml-auto" :class="{'rotate-180' : current === 3}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 3" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso3.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 4}" x-on:click="current === 4 ? current = null : current = 4">
                            Si quieres seguir el proceso de tu URL, puedes copiar la url generada, ingresar a tracklist y pegar el código para visualizar
                            <div class="ml-auto" :class="{'rotate-180' : current === 4}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 4" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso4.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 5}" x-on:click="current === 5 ? current = null : current = 5">
                            Para visualizar la lista de links que te pertenecen, debes estar registrado y logueado.
                            <div class="ml-auto" :class="{'rotate-180' : current === 5}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 5" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso5.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 6}" x-on:click="current === 6 ? current = null : current = 6">
                            Cuentas con gráficos asi también puedes la opción de ver los registros de los últimos 7 días, 30 días y 90 días, tanto de todos los links, como de uno previamente seleccionado.
                            <div class="ml-auto" :class="{'rotate-180' : current === 6}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 6" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso6.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg">
                        <button type="button" class="p-4 w-full flex items-center text-gray" :class="{'!text-dark dark:!text-white' : current === 7}" x-on:click="current === 7 ? current = null : current = 7">
                            Ejemplo de gráfico
                            <div class="ml-auto" :class="{'rotate-180' : current === 7}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor" d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z"></path>
                                </svg>
                            </div>
                        </button>
                        <div x-cloak x-show="current === 7" x-collapse>
                            <div class="space-y-2 p-4 text-lightgray text-sm font-normal dark:border-gray/20 border-t-2 border-lightgray/10">
                                <img src="{{ url('') }}/imagenes/pasos/auth/paso6-2.png" class="img-fluid" alt="...">
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
