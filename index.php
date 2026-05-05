<?php
// ===================== CONFIGURACIÓN =====================
$language = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';
$static = "assets/";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($language == 'en') ? 'Home - J&MDcleaning' : 'Inicio - J&MDcleaning' ?></title>
    
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
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>

    <link rel="icon" href="<?= $static ?>img/icons/icon-new.png" type="image/x-icon">
</head>
<body class="bg-slate-50 text-slate-900 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">

        <?php include 'header.php'; ?>

        <!-- ===================== MAIN CONTENT ===================== -->
        <main class="flex-grow container mx-auto px-4 py-8 lg:px-8">
            
            <!-- Contenedor Dinámico -->
            <div class="flex flex-col space-y-16">

            <?php if ($language == 'en'): ?>
                    <!-- ==================== VERSIÓN INGLÉS ==================== -->
                    
                    <!-- Main Banner -->
                    <section class="max-w-5xl mx-auto rounded-3xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-orange-500/20 group">
                        <a href="#contact" class="block overflow-hidden">
                            <img title="J&MDCleaning - Contact Us!" class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105" src="<?= $static ?>img/banners/bann-en.png">
                        </a>
                    </section>

                    <!-- First Presentation -->
                    <section class="flex flex-col md:flex-row items-center gap-8 bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="flex-1 text-lg text-slate-600 leading-relaxed italic border-l-4 border-orange-500 pl-6">

                        <p>At our company, we are dedicated to providing the best cleaning services to meet all your needs. We clean carpets, restaurants, and offices with the utmost dedication and professionalism.</p>                        </div>
                        <img class="h-24 w-24 md:h-32 md:w-32 object-contain hover:rotate-12 transition-transform flex-shrink-0" src="<?= $static ?>img/icons/icon0.png">
                    </section>

                    <!-- Promotion Section -->
                    <section class="bg-navy-900 text-white p-10 md:p-16 rounded-4xl shadow-2xl relative overflow-hidden group">
                        <div class="relative z-10 text-center max-w-2xl mx-auto">
                            <h2 class="text-3xl md:text-4xl font-black mb-4 tracking-tighter italic uppercase text-orange-500">Promotion: Business Service</h2>
                            <p class="text-slate-300 text-base md:text-lg leading-relaxed">Hire the monthly cleaning of all your office spaces, including carpets, furniture, and dining rooms, and receive a 25% discount in the first month. Keep your work environment clean and healthy with our specialized service.</p>
                        </div>
                        <!-- Decoración visual -->
                        <div class="absolute -right-10 -bottom-10 h-40 w-40 bg-orange-500 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                    </section>
                    <!-- SECCIÓN CLEANING CASES -->
                    <section class="bg-white p-6 md:p-12 rounded-3xl shadow-sm border border-slate-100">
                        <div class="max-w-6xl mx-auto">
                            <h2 class="text-3xl md:text-4xl font-black text-navy-900 italic uppercase text-center mb-12 pb-4 border-b-4 border-orange-500 inline-block w-full">Remove All Those Stains!</h2>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">
                                <!-- Caso 1: Alfombras -->
                                <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                    <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                        <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                             src="<?= $static ?>img/principal/alfombraMan.jpg" alt="Cleaning Carpet">
                                    </div>
                                    <div class="space-y-3 text-left">
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Revive the original color of your carpet.</span></p>
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Professional care for your carpets.</span></p>
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Advanced technology for stubborn stains.</span></p>
                                    </div>
                                </div>

                                <!-- Caso 2: Muebles -->
                                <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                    <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                        <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                             src="<?= $static ?>img/principal/mueble.png" alt="Furniture Cleaning">
                                    </div>
                                    <div class="space-y-3 text-right">
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">We remove food stains from your furniture.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">Deep cleaning, we remove pet odors.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">Restore furniture damaged by DIY cleaning.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Testimonials Carousel -->
                    <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                        <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase">Customer Reviews</h2>
                        <div class="carousel max-w-4xl mx-auto">
                            <div class="carousel-inner flex transition-all duration-500">
                                <!-- Item 1 -->
                                <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario0.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Horacio Restrepo</h3>
                                    <p class="max-w-md italic text-slate-600">"Excellent service! I was very satisfied with the cleaning of my carpets. I recommend it!"</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★</p>
                                </div>
                                <!-- Item 2 -->
                                <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario1.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Juliana Mojica</h3>
                                    <p class="max-w-md italic text-slate-600">"Great job. My furniture looks like new. Highly recommended!"</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★★</p>
                                </div>
                                <!-- Item 3 -->
                                <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario2.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Marcela Orozco</h3>
                                    <p class="max-w-md italic text-slate-600">"Professional and efficient! They removed all the stains from my mattresses."</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★</p>
                                </div>
                            </div>
                            <div class="carousel-indicators flex justify-center gap-3 mt-8">
                                <span class="dot active w-3 h-3 rounded-full bg-orange-500 cursor-pointer transition-all" onclick="currentSlide(1)"></span>
                                <span class="dot w-3 h-3 rounded-full bg-slate-300 cursor-pointer transition-all hover:bg-slate-400" onclick="currentSlide(2)"></span>
                                <span class="dot w-3 h-3 rounded-full bg-slate-300 cursor-pointer transition-all hover:bg-slate-400" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                    </section>

                    <!-- Terms and Conditions -->
                    <section class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-slate-100">
                        <h2 class="text-3xl font-black text-navy-900 mb-6 italic uppercase">Terms and Conditions</h2>
                        <p class="text-slate-600 text-lg leading-relaxed italic border-l-4 border-orange-500 pl-6">At J&MDCleaning, we are committed to providing professional cleaning services with over 20 years of experience. By using our services, you agree to our terms and conditions, including the cancellation policy and responsible handling of your personal data. We protect your information and use it only to improve our offer.</p>
                    </section>

                    <!-- Contact Us -->
                    <section id="contact" class="bg-white rounded-4xl shadow-xl border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                        <div class="bg-orange-500 p-12 text-white flex flex-col justify-center space-y-4 md:w-1/3 hover:bg-orange-600 transition-colors duration-300">
                            <h2 class="text-4xl md:text-5xl font-black italic uppercase leading-none">Contact<br>Us Now!</h2>
                            <p class="text-orange-100 italic">We're ready to help you</p>
                        </div>
                        <div class="p-8 md:p-12 flex-1 grid grid-cols-1 sm:grid-cols-2 gap-8 bg-white text-navy-900">
                            <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                                <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/correo.png" alt="Email">
                                <div>
                                    <p class="text-sm text-slate-500 font-semibold">Email</p>
                                    <p class="font-black text-sm break-all">jmdcleaning7@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                                <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/what.png" alt="WhatsApp">
                                <div>
                                    <p class="text-sm text-slate-500 font-semibold">WhatsApp</p>
                                    <p class="text-2xl font-black">8573968312</p>
                                </div>
                            </div>
                        </div>
                    </section>

                <?php else: ?>
                    <!-- ==================== VERSIÓN ESPAÑOL ==================== -->
                    
                    <!-- Main Banner -->
                    <section class="max-w-5xl mx-auto rounded-3xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-orange-500/20 group">
                        <a href="#contact" class="block overflow-hidden">
                            <img title="J&MDCleaning - Contactanos!" class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105" src="<?= $static ?>img/banners/bann-es.png">
                        </a>
                    </section>

                    <!-- First Presentation -->
                    <section class="flex flex-col md:flex-row items-center gap-8 bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="flex-1 text-lg text-slate-600 leading-relaxed italic border-l-4 border-orange-500 pl-6">
                            <p>En nuestra empresa, nos dedicamos a ofrecer los mejores servicios de limpieza para satisfacer todas sus necesidades. Limpiamos alfombras, restaurantes, y oficinas con la mayor dedicación y profesionalismo.</p>
                        </div>
                        <img class="h-24 w-24 md:h-32 md:w-32 object-contain hover:rotate-12 transition-transform flex-shrink-0" src="<?= $static ?>img/icons/icon0.png">
                    </section>

                    <!-- Promotion Section -->
                    <section class="bg-navy-900 text-white p-10 md:p-16 rounded-4xl shadow-2xl relative overflow-hidden group">
                        <div class="relative z-10 text-center max-w-2xl mx-auto">
                            <h2 class="text-2xl md:text-4xl font-black mb-4 tracking-tighter italic uppercase text-orange-500">Promoción: Servicio Empresarial</h2>
                            <p class="text-slate-300 text-base md:text-lg leading-relaxed">Contrate la limpieza mensual de todos sus espacios de oficina, incluyendo alfombras, muebles y comedores, y reciba un 25% de descuento en el primer mes. Mantenga su ambiente de trabajo limpio y saludable con nuestro servicio especializado y regular.</p>
                        </div>
                        <!-- Decoración visual -->
                        <div class="absolute -right-10 -bottom-10 h-40 w-40 bg-orange-500 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                    </section>

                    <!-- SECCIÓN CLEANING CASES -->
                    <section class="bg-white p-6 md:p-12 rounded-3xl shadow-sm border border-slate-100">
                        <div class="max-w-6xl mx-auto">
                            <h2 class="text-3xl md:text-4xl font-black text-navy-900 italic uppercase text-center mb-12 pb-4 border-b-4 border-orange-500 inline-block w-full">¡Remueve todas esas manchas!</h2>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">
                                <!-- Caso 1: Alfombras -->
                                <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                    <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                        <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                             src="<?= $static ?>img/principal/alfombraMan.jpg" alt="Limpieza de Alfombras">
                                    </div>
                                    <div class="space-y-3 text-left">
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Revive el color original de tu alfombra.</span></p>
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Cuidado profesional para tus alfombras.</span></p>
                                        <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight">Tecnología avanzada para manchas rebeldes.</span></p>
                                    </div>
                                </div>

                                <!-- Caso 2: Muebles -->
                                <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                    <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                        <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                             src="<?= $static ?>img/principal/mueble.png" alt="Limpieza de Muebles">
                                    </div>
                                    <div class="space-y-3 text-right">
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">Deshacemos las manchas de alimentos en tus muebles.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">Limpieza profunda, eliminamos manchas y olores.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                        <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight">Restauramos muebles dañados por intentos caseros.</span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Testimonials Carousel -->
                    <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                        <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase">Opiniones de Clientes</h2>
                        <div class="carousel max-w-4xl mx-auto">
                            <div class="carousel-inner flex transition-all duration-500">
                                <!-- Item 1 -->
                                <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario0.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Horacio Restrepo</h3>
                                    <p class="max-w-md italic text-slate-600">"¡Excelente servicio! Quedé muy satisfecho con la limpieza de mis alfombras. ¡Lo recomiendo!"</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★</p>
                                </div>
                                <!-- Item 2 -->
                                <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario1.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Juliana Mojica</h3>
                                    <p class="max-w-md italic text-slate-600">"Gran trabajo. Mis muebles quedaron como nuevos. ¡Muy recomendado!"</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★★</p>
                                </div>
                                <!-- Item 3 -->
                                <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                    <img src="<?= $static ?>img/usuarios/usuario2.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                    <h3 class="font-bold text-xl text-navy-900">Marcela Orozco</h3>
                                    <p class="max-w-md italic text-slate-600">"¡Profesionales y eficientes! Eliminaron todas las manchas de mis colchones."</p>
                                    <p class="text-orange-500 font-black text-lg">★★★★</p>
                                </div>
                            </div>
                            <div class="carousel-indicators flex justify-center gap-3 mt-8">
                                <span class="dot active w-3 h-3 rounded-full bg-orange-500 cursor-pointer transition-all" onclick="currentSlide(1)"></span>
                                <span class="dot w-3 h-3 rounded-full bg-slate-300 cursor-pointer transition-all hover:bg-slate-400" onclick="currentSlide(2)"></span>
                                <span class="dot w-3 h-3 rounded-full bg-slate-300 cursor-pointer transition-all hover:bg-slate-400" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                    </section>

                    <!-- Terms and Conditions -->
                    <section class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-slate-100">
                        <h2 class="text-2xl font-black text-navy-900 mb-6 italic uppercase">Términos y Condiciones</h2>
                        <p class="text-slate-600 text-lg leading-relaxed italic border-l-4 border-orange-500 pl-6">En J&MDCleaning nos comprometemos a ofrecer servicios de limpieza profesional con más de 20 años de experiencia. Al usar nuestros servicios, aceptas nuestros términos y condiciones, incluyendo la política de cancelaciones y el tratamiento responsable de tus datos personales. Protegemos tu información y la utilizamos únicamente para mejorar nuestra oferta.</p>
                    </section>

                    <!-- Contact Us -->
                    <section id="contact" class="bg-white rounded-4xl shadow-xl border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                        <div class="bg-orange-500 p-12 text-white flex flex-col justify-center space-y-4 md:w-1/3 hover:bg-orange-600 transition-colors duration-300">
                            <h2 class="text-2xl md:text-5xl font-black italic uppercase leading-none">¡Contacta<br>nos ahora!</h2>
                            <p class="text-orange-100 italic">Estamos listos para ayudarte</p>
                        </div>
                        <div class="p-8 md:p-12 flex-1 grid grid-cols-1 sm:grid-cols-2 gap-8 bg-white text-navy-900">
                            <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                                <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/correo.png" alt="Correo">
                                <div>
                                    <p class="text-sm text-slate-500 font-semibold">Correo</p>
                                    <p class="font-black text-sm break-all">jmdcleaning7@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                                <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/what.png" alt="WhatsApp">
                                <div>
                                    <p class="text-sm text-slate-500 font-semibold">WhatsApp</p>
                                    <p class="font-black text-sm break-all">8573968312</p>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

            </div> <!-- Fin flex-col space-y-16 -->
        </main>

        <!-- ===================== FOOTER ===================== -->
        <?php include 'footer.php'; ?>

    </div>

    <script src="<?= $static ?>js/java.js"></script>
</body>
</html>