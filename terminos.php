<?php
// ===================== CONFIGURACIÓN =====================
$language = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';
$static = "assets/";
$pageTitle = ($language == 'en') ? 'Terms and Conditions - J&MDCleaning' : 'Términos y condiciones - J&MDCleaning';
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    
    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { 900: '#001f3f' },
                        orange: { 500: '#ff851b' }
                    },
                    borderRadius: { '4xl': '2rem' }
                }
            }
        }
    </script>

    <link rel="icon" href="<?= $static ?>img/icons/icon0.png" type="image/x-icon">
</head>
<body class="bg-slate-50 text-slate-800 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">
        <?php include 'header.php'; ?>

        <main class="flex-grow container mx-auto px-4 py-16">
            
            <!-- Contenedor del Documento -->
            <article class="max-w-4xl mx-auto bg-white p-8 md:p-16 rounded-4xl shadow-xl border border-slate-100">
                
                <?php if ($language == 'en'): ?>
                    <!-- ==================== VERSIÓN INGLÉS ==================== -->
                    <div id="content-en" class="space-y-10">
                        <header class="text-center space-y-4 border-b border-slate-100 pb-10">
                            <h1 class="text-1.5xl md:text-5xl font-black text-navy-900 italic uppercase">J&MDCleaning <br class="md:hidden"> Terms & Conditions</h1>
                            <p class="text-slate-500 italic">Welcome to J&MDCleaning. By using our services, you agree to comply with the following terms. Please read them carefully.</p>
                        </header>

                        <div class="space-y-8 text-slate-600 leading-relaxed">
                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">01.</span> Acceptance of Terms
                                </h2>
                                <p>By accessing and using the services of J&MDCleaning, you agree to be bound by these terms and conditions, as well as our privacy policy. If you do not agree with any of these terms, do not use our services.</p>
                            </section>

                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">02.</span> Service Description
                                </h2>
                                <p>J&MDCleaning offers professional cleaning services for carpets, furniture, sofas, dining sets, and all types of upholstery. Our goal is to provide a high-quality service to meet our clients' needs.</p>
                            </section>

                            <section class="bg-slate-50 p-6 rounded-2xl border-l-8 border-orange-500">
                                <h2 class="text-xl font-black text-navy-900 uppercase mb-4">03. Use of Service</h2>
                                <ul class="space-y-3">
                                    <li class="flex gap-3 font-medium text-navy-900"><span class="text-orange-500">■</span> <strong>Reservations:</strong> Subject to availability through our website.</li>
                                    <li class="flex gap-3 font-medium text-navy-900"><span class="text-orange-500">■</span> <strong>Cancellations:</strong> Must be made 24h in advance to avoid fees.</li>
                                    <li class="flex gap-3 font-medium text-navy-900"><span class="text-orange-500">■</span> <strong>Access:</strong> Adequate access to property must be provided.</li>
                                </ul>
                            </section>

                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">04.</span> Data Processing
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm italic">
                                    <div class="p-4 bg-white border border-slate-200 rounded-xl">Collection of name, address, and email to improve services.</div>
                                    <div class="p-4 bg-white border border-slate-200 rounded-xl">Implemented security measures to protect your info.</div>
                                </div>
                            </section>

                            <section class="pt-10 border-t border-slate-100 text-center">
                                <p class="text-sm">Questions? Contact us at <a href="mailto:jmdcleaning7@gmail.com" class="text-orange-500 font-bold hover:underline">jmdcleaning7@gmail.com</a> or <span class="text-navy-900 font-bold">8573968312</span></p>
                            </section>
                        </div>
                    </div>

                <?php else: ?>
                    <!-- ==================== VERSIÓN ESPAÑOL ==================== -->
                    <div id="content-es" class="space-y-10">
                        <header class="text-center space-y-4 border-b border-slate-100 pb-10">
                            <h1 class="text-1.5xl md:text-5xl font-black text-navy-900 italic uppercase">Términos y Condiciones <br class="md:hidden"> J&MDCleaning</h1>
                            <p class="text-slate-500 italic">Bienvenido a J&MDCleaning. Al utilizar nuestros servicios, aceptas cumplir con los siguientes términos. Por favor, léelos detenidamente.</p>
                        </header>

                        <div class="space-y-8 text-slate-600 leading-relaxed">
                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">01.</span> Aceptación de los Términos
                                </h2>
                                <p>Al acceder y utilizar los servicios de J&MDCleaning, aceptas estar obligado por estos términos y condiciones, así como por nuestra política de privacidad.</p>
                            </section>

                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">02.</span> Descripción del Servicio
                                </h2>
                                <p>Ofrecemos servicios de limpieza profesional para alfombras, muebles, sillones y comedores con más de 20 años de experiencia.</p>
                            </section>

                            <!-- Sección 03 con ajustes para móvil -->
                            <section class="bg-slate-50 p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 sm:border-l-8 border-orange-500 shadow-sm">
                                <h2 class="text-lg sm:text-xl font-black text-navy-900 uppercase mb-4 leading-tight">
                                    03. Uso del Servicio
                                </h2>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                        <span class="text-orange-500 flex-shrink-0 mt-1">■</span> 
                                        <span><strong>Reservas:</strong> Sujetas a disponibilidad vía web.</span>
                                    </li>
                                    <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                        <span class="text-orange-500 flex-shrink-0 mt-1">■</span> 
                                        <span><strong>Cancelaciones:</strong> Mínimo 24h antes para evitar recargos.</span>
                                    </li>
                                    <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                        <span class="text-orange-500 flex-shrink-0 mt-1">■</span> 
                                        <span><strong>Acceso:</strong> Se debe garantizar el ingreso a la propiedad.</span>
                                    </li>
                                </ul>
                            </section>

                            <section>
                                <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                                    <span class="text-orange-500">04.</span> Tratamiento de Datos
                                </h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm italic text-justify">
                                    <p>Recopilamos información personal para gestionar reservas y mejorar nuestra oferta de servicios.</p>
                                    <p>Implementamos medidas de seguridad para proteger tu información y no compartimos datos sin consentimiento.</p>
                                </div>
                            </section>

                            <section class="pt-10 border-t border-slate-100 text-center">
                                <p class="text-sm">¿Dudas? Contáctanos en <a href="mailto:jmdcleaning7@gmail.com" class="text-orange-500 font-bold hover:underline">jmdcleaning7@gmail.com</a> o al <span class="text-navy-900 font-bold">8573968312</span></p>
                            </section>
                        </div>
                    </div>
                <?php endif; ?>

            </article>
        </main>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
