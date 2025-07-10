<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ProjectNocturne - Home</title>
    <meta name="description" content="Use ProjectNocturne to access useful tools like a world clock, custom alarms, timers, and stopwatches — all from your browser.">
    <meta name="keywords" content="online clock, online alarm, timer, stopwatch, tools, ProjectNocturne, web tools, online timer, free alarm, world clock">

    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
    <link rel="stylesheet" type="text/css" href="assets/css/general/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/general/dark-mode.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tools/tools.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.4.2/chroma.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script src="assets/js/general/initial-theme.js"></script>
</head>


<body>
    <div class="page-wrapper">
        <div class="main-content">
            <?php include 'includes/layouts/sidebar-desktop.php'; ?>
            <div class="general-content overflow-y">
                <div class="general-content-top">
                    <?php include 'includes/layouts/header.php'; ?>
                </div>
                <div class="general-content-scrolleable">
                    <?php include 'includes/layouts/sidebar-mobile.php'; ?>
                    <?php include 'includes/modules/module-overlays.php'; ?>
                    <div class="scrollable-content overflow-y">
                        <div class="general-content-bottom">
                            <div class="section-content">
                                <?php include 'includes/sections/everything.php'; ?>
                                <?php include 'includes/sections/alarm.php'; ?>
                                <?php include 'includes/sections/timer.php'; ?>
                                <?php include 'includes/sections/stopwatch.php'; ?>
                                <?php include 'includes/sections/worldClock.php'; ?>

                                <div class="section-legal-content disabled" data-section="privacy-policy">
                                    <h1>Política de Privacidad</h1>
                                    <p><strong>Última actualización:</strong> 10 de julio de 2025</p>

                                    <h2>1. Preámbulo y Compromiso</h2>
                                    <p>
                                        Bienvenido a ProjectNocturne. Nos comprometemos a proteger la privacidad y seguridad de los datos de nuestros usuarios. Esta Política de Privacidad detalla de manera exhaustiva los tipos de datos que recopilamos, los fines para los que se utilizan y los derechos que le asisten en relación con su información personal y de uso. El uso de este sitio web implica la aceptación de las prácticas descritas en el presente documento.
                                    </p>

                                    <h2>2. Responsable del Tratamiento de Datos</h2>
                                    <p>
                                        ProjectNocturne, en adelante "el Sitio", es el responsable del tratamiento de los datos recopilados a través de su plataforma web.
                                    </p>

                                    <h2>3. Principios de Tratamiento de Datos</h2>
                                    <p>
                                        Nuestro tratamiento de datos se adhiere a los siguientes principios fundamentales:
                                    </p>
                                    <ul>
                                        <li><strong>Licitud, Lealtad y Transparencia:</strong> Los datos son tratados de manera lícita, leal y transparente.</li>
                                        <li><strong>Limitación de la Finalidad:</strong> Los datos son recopilados con fines determinados, explícitos y legítimos.</li>
                                        <li><strong>Minimización de Datos:</strong> Solo recopilamos los datos estrictamente necesarios para los fines previstos.</li>
                                        <li><strong>Integridad y Confidencialidad:</strong> Aplicamos medidas técnicas y organizativas para garantizar la seguridad de los datos.</li>
                                    </ul>

                                    <h2>4. Tipos de Datos Recopilados</h2>
                                    <p>
                                        Para la prestación de nuestros servicios, recopilamos dos categorías principales de datos:
                                    </p>
                                    <p><strong>I. Datos Proporcionados Directamente por el Usuario:</strong></p>
                                    <ul>
                                        <li>
                                            <strong>Formulario de Sugerencias:</strong> Al enviar comentarios, recopilamos su <strong>dirección de correo electrónico</strong>, el <strong>tipo de sugerencia</strong> y el <strong>contenido del mensaje</strong>. Esta información es fundamental para procesar su solicitud, comunicarnos con usted y realizar mejoras en el servicio.
                                        </li>
                                    </ul>
                                    <p><strong>II. Datos de Uso Recopilados Automáticamente:</strong></p>
                                    <ul>
                                        <li>
                                            <strong>Identificador Único de Sesión (UUID):</strong> Asignamos un identificador universalmente único y anónimo a su navegador para realizar mediciones de uso agregado sin recopilar información personal identificable.
                                        </li>
                                        <li>
                                            <strong>Telemetría de Eventos:</strong> Registramos interacciones anónimas con la interfaz, tales como "crear_alarma" o "iniciar_temporizador". Estos datos, asociados a su UUID, son cruciales para el análisis de la usabilidad y la optimización de la experiencia del usuario.
                                        </li>
                                        <li>
                                            <strong>Datos Técnicos del Dispositivo:</strong> Recopilamos metadatos técnicos como su <strong>sistema operativo</strong> (ej. Windows, macOS), <strong>navegador web</strong> (ej. Chrome, Firefox) y versión, y el <strong>idioma</strong> preferido de su navegador.
                                        </li>
                                        <li>
                                            <strong>Información Geográfica (País):</strong> Para personalizar la experiencia del usuario, detectamos su <strong>país</strong> de origen mediante una consulta a su dirección IP a través del servicio de terceros `ipwho.is`. Es importante destacar que <strong>no almacenamos su dirección IP</strong> en nuestros servidores.
                                        </li>
                                    </ul>

                                    <h2>5. Finalidad del Tratamiento de Datos</h2>
                                    <p>
                                        Los datos recopilados se utilizan con los siguientes fines estratégicos:
                                    </p>
                                    <ul>
                                        <li><strong>Operación y Mantenimiento del Servicio:</strong> Para guardar sus configuraciones de herramientas (alarmas, temporizadores) a través de `localStorage` y garantizar la persistencia de su personalización.</li>
                                        <li><strong>Análisis y Mejora del Servicio:</strong> El análisis de los datos de uso anónimos nos permite identificar patrones de comportamiento, optimizar flujos de trabajo y priorizar el desarrollo de nuevas funcionalidades.</li>
                                        <li><strong>Comunicación y Soporte:</strong> Para responder a las consultas y sugerencias enviadas a través de nuestro formulario de contacto.</li>
                                        <li><strong>Personalización de la Experiencia:</strong> Para adaptar la interfaz, formatos de fecha/hora y el idioma del sitio a sus preferencias regionales.</li>
                                    </ul>

                                    <h2>6. Base Legal para el Tratamiento de Datos</h2>
                                    <p>
                                        El tratamiento de sus datos se basa en:
                                    </p>
                                    <ul>
                                        <li><strong>Su consentimiento explícito,</strong> al aceptar esta política de privacidad y al utilizar nuestro formulario de contacto.</li>
                                        <li><strong>Nuestro interés legítimo</strong> en mejorar y optimizar nuestro servicio a través del análisis de datos de uso anónimos.</li>
                                    </ul>

                                    <h2>7. Cookies y Tecnologías Similares</h2>
                                    <p>
                                        ProjectNocturne utiliza `localStorage` en su navegador para almacenar información esencial para el funcionamiento de la aplicación, como sus alarmas, temporizadores, relojes y preferencias de personalización. Esta tecnología es fundamental para la experiencia de usuario y no se utiliza para seguimiento publicitario.
                                    </p>
                                    <p>
                                        Para obtener más detalles sobre las tecnologías que utilizamos, por favor, revise nuestra <a href="#" data-action="cookies-policy" class="legal-link">Política de Cookies</a>.
                                    </p>

                                    <h2>8. Retención y Eliminación de Datos</h2>
                                    <p>
                                        Los datos almacenados en `localStorage` permanecen en su navegador hasta que usted decida eliminarlos borrando los datos de su navegador. Los datos de sugerencias (incluido el correo electrónico) y la telemetría anónima se conservan en nuestros servidores por un período necesario para cumplir con los fines para los que fueron recopilados, o según lo exija la ley.
                                    </p>

                                    <h2>9. Seguridad de los Datos</h2>
                                    <p>
                                        Implementamos medidas de seguridad técnicas y organizativas para proteger sus datos. La comunicación con nuestro servidor se realiza a través de canales seguros. El acceso a la base de datos está estrictamente restringido. Sin embargo, ningún método de transmisión por Internet o de almacenamiento electrónico es 100% seguro.
                                    </p>

                                    <h2>10. Derechos del Usuario</h2>
                                    <p>
                                        Usted tiene derecho a:
                                    </p>
                                    <ul>
                                        <li><strong>Acceder y Rectificar:</strong> Solicitar acceso a la información personal que podamos tener sobre usted (por ejemplo, a través de sus sugerencias) y solicitar su corrección.</li>
                                        <li><strong>Retirar el Consentimiento:</strong> Puede retirar su consentimiento en cualquier momento, lo que no afectará a la licitud del tratamiento basado en el consentimiento previo a su retirada.</li>
                                        <li><strong>Eliminar Datos Locales:</strong> Tiene control total para eliminar los datos de la aplicación almacenados en su navegador en cualquier momento.</li>
                                    </ul>

                                    <h2>11. Modificaciones a esta Política de Privacidad</h2>
                                    <p>
                                        Nos reservamos el derecho a modificar esta política en cualquier momento. Cualquier cambio será efectivo inmediatamente después de su publicación en esta página. Se indicará la fecha de la "Última actualización" en la parte superior del documento.
                                    </p>

                                    <h2>12. Contacto</h2>
                                    <p>
                                        Si tiene alguna pregunta o inquietud sobre esta Política de Privacidad, no dude en contactarnos a través de nuestro formulario de sugerencias.
                                    </p>
                                </div>

                                <div class="section-legal-content disabled" data-section="terms-conditions">
                                    <h1>Términos y Condiciones</h1>
                                    <p>Este es el contenido de tus términos y condiciones. Puedes reemplazarlo con tu texto real.</p>
                                </div>

                                <div class="section-legal-content disabled" data-section="cookies-policy">
                                    <h1>Política de Cookies</h1>
                                    <p><strong>Última actualización:</strong> 10 de julio de 2025</p>

                                    <h2>¿Qué son las Cookies y Tecnologías Similares?</h2>
                                    <p>
                                        Las cookies son pequeños archivos de texto que los sitios web colocan en su dispositivo mientras navega. Son ampliamente utilizadas para que los sitios web funcionen, o funcionen de manera más eficiente, así como para proporcionar información a los propietarios del sitio. ProjectNocturne utiliza tecnologías similares, específicamente el <strong>`localStorage`</strong> del navegador.
                                    </p>

                                    <h2>Nuestro Uso de `localStorage`</h2>
                                    <p>
                                        En lugar de las cookies tradicionales, ProjectNocturne depende del `localStorage` para mejorar su experiencia de usuario. Esta tecnología nos permite almacenar datos directamente en su navegador sin una fecha de vencimiento. A diferencia de las cookies, los datos de `localStorage` no se envían al servidor con cada solicitud, lo que hace que su uso sea más rápido y seguro para el almacenamiento del lado del cliente.
                                    </p>
                                    <p>
                                        Utilizamos `localStorage` para los siguientes propósitos estrictamente funcionales:
                                    </p>
                                    <ul>
                                        <li>
                                            <strong>Persistencia de Herramientas:</strong> Para guardar las alarmas, temporizadores, relojes mundiales y el estado del cronómetro que usted configura. Esto asegura que su información no se pierda cuando cierre la pestaña o el navegador.
                                        </li>
                                        <li>
                                            <strong>Preferencias de Usuario:</strong> Para recordar sus ajustes de personalización, como el tema de la interfaz (claro/oscuro), el idioma seleccionado y el formato de hora (12/24 horas).
                                        </li>
                                        <li>
                                            <strong>Identificador Anónimo:</strong> Para almacenar un identificador único (UUID) que nos permite realizar análisis de uso anónimos, como se detalla en nuestra Política de Privacidad.
                                        </li>
                                        <li>
                                            <strong>Ubicación Seleccionada:</strong> Para guardar el país que ha seleccionado o que hemos detectado, con el fin de personalizar su experiencia.
                                        </li>
                                    </ul>

                                    <h2>Control sobre sus Datos</h2>
                                    <p>
                                        Los datos almacenados en `localStorage` están bajo su control. Puede verlos y eliminarlos en cualquier momento a través de las herramientas de desarrollador de su navegador (generalmente en la pestaña "Aplicación" o "Almacenamiento"). Borrar los datos del sitio desde la configuración de su navegador eliminará toda la información que ProjectNocturne ha guardado.
                                    </p>
                                    <p>
                                        <strong>No utilizamos cookies ni tecnologías similares para fines publicitarios o de seguimiento de terceros.</strong>
                                    </p>
                                </div>
                                <div class="section-legal-content disabled" data-section="terms-conditions">
                                    <h1>Términos y Condiciones</h1>
                                    <p>Este es el contenido de tus términos y condiciones. Puedes reemplazarlo con tu texto real.</p>
                                </div>
                                <div class="section-legal-content disabled" data-section="cookies-policy">
                                    <h1>Política de Cookies</h1>
                                    <p>Este es el contenido de tu política de cookies. Puedes reemplazarlo con tu texto real.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="assets/js/general/init-app.js"></script>
    <script type="module" src="assets/js/general/main.js"></script>
    <script type="module" src="assets/js/general/translations-controller.js"></script>
    <script type="module" src="assets/js/general/location-manager.js"></script>
    <script type="module" src="assets/js/general/module-manager.js"></script>
    <script type="module" src="assets/js/general/theme-manager.js"></script>
    <script type="module" src="assets/js/general/language-manager.js"></script>
    <script type="module" src="assets/js/general/tooltip-controller.js"></script>
    <script type="module" src="assets/js/general/drag-controller.js"></script>
    <script type="module" src="assets/js/general/dynamic-island-controller.js"></script>
    <script type="module" src="assets/js/general/menu-interactions.js"></script>
    <script type="module" src="assets/js/general/color-search-system.js"></script>
    <script type="module" src="assets/js/general/event-tracker.js"></script>
    <script type="module" src="assets/js/components/palette-colors.js"></script>

    <script type="module" src="assets/js/tools/general-tools.js"></script>
    <script type="module" src="assets/js/tools/everything-controller.js"></script>
    <script type="module" src="assets/js/tools/alarm-controller.js"></script>
    <script type="module" src="assets/js/tools/timer-controller.js"></script>
    <script type="module" src="assets/js/tools/stopwatch-controller.js"></script>
    <script type="module" src="assets/js/tools/worldClock-controller.js"></script>

    <script type="module" src="assets/js/config/zoneinfo-controller.js"></script>

</body>

</html>