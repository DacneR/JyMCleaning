<?php
// ===================== CARGAR SISTEMA DE TRADUCCIONES =====================
require_once 'translations.php';
// Nota: translations.php maneja:
// - Sesiones ($_SESSION['lang'])
// - Detección automática de idioma
// - Override via ?lang=en|es
// - Variables disponibles: $language, $t[], $static
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t['page_description'] ?>">
    <title><?= $t['page_title'] ?></title>
    
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

                <!-- Main Banner -->
                <section class="max-w-5xl mx-auto rounded-3xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-orange-500/20 group">
                    <a href="#contact" class="block overflow-hidden">
                        <img title="<?= $t['banner_alt'] ?>" alt="<?= $t['banner_alt'] ?>" class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105" src="<?= $t['banner_image'] ?>">
                    </a>
                </section>

                <!-- First Presentation -->
                <section class="flex flex-col md:flex-row items-center gap-8 bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="flex-1 text-lg text-slate-600 leading-relaxed italic border-l-4 border-orange-500 pl-6">
                        <p><?= $t['intro_text'] ?></p>
                    </div>
                    <img class="h-24 w-24 md:h-32 md:w-32 object-contain hover:rotate-12 transition-transform flex-shrink-0" src="<?= $static ?>img/icons/icon0.png" alt="J&MD Cleaning Icon">
                </section>

                <!-- Promotion Section -->
                <section class="bg-navy-900 text-white p-10 md:p-16 rounded-4xl shadow-2xl relative overflow-hidden group">
                    <div class="relative z-10 text-center max-w-2xl mx-auto">
                        <h2 class="text-3xl md:text-4xl font-black mb-4 tracking-tighter italic uppercase text-orange-500"><?= $t['promo_title'] ?></h2>
                        <p class="text-slate-300 text-base md:text-lg leading-relaxed"><?= $t['promo_description'] ?></p>
                    </div>
                    <!-- Decoración visual -->
                    <div class="absolute -right-10 -bottom-10 h-40 w-40 bg-orange-500 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                </section>

                <!-- SECCIÓN CLEANING CASES -->
                <section class="bg-white p-6 md:p-12 rounded-3xl shadow-sm border border-slate-100">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="text-3xl md:text-4xl font-black text-navy-900 italic uppercase text-center mb-12 pb-4 border-b-4 border-orange-500 inline-block w-full"><?= $t['cleaning_cases_title'] ?></h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">
                            <!-- Caso 1: Alfombras -->
                            <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                    <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                         src="<?= $static ?>img/principal/alfombraMan.jpg" alt="<?= $t['case_carpet_image_alt'] ?>">
                                </div>
                                <div class="space-y-3 text-left">
                                    <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight"><?= $t['case_carpet_point1'] ?></span></p>
                                    <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight"><?= $t['case_carpet_point2'] ?></span></p>
                                    <p class="flex items-start gap-3"><span class="text-orange-500 text-xl flex-shrink-0">■</span> <span class="italic text-slate-600 leading-tight"><?= $t['case_carpet_point3'] ?></span></p>
                                </div>
                            </div>

                            <!-- Caso 2: Muebles -->
                            <div class="flex flex-col space-y-4 group hover:scale-105 transition-transform duration-300">
                                <div class="overflow-hidden rounded-2xl shadow-md group-hover:shadow-lg transition-shadow">
                                    <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                         src="<?= $static ?>img/principal/mueble.png" alt="<?= $t['case_furniture_image_alt'] ?>">
                                </div>
                                <div class="space-y-3 text-right">
                                    <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight"><?= $t['case_furniture_point1'] ?></span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                    <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight"><?= $t['case_furniture_point2'] ?></span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                    <p class="flex items-start justify-end gap-3"><span class="italic text-slate-600 leading-tight"><?= $t['case_furniture_point3'] ?></span> <span class="text-orange-500 text-xl flex-shrink-0">■</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Testimonials Carousel -->
                <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                    <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase"><?= $t['testimonials_title'] ?></h2>
                    <div class="carousel max-w-4xl mx-auto">
                        <div class="carousel-inner flex transition-all duration-500">
                            <!-- Item 1 -->
                            <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario0.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['testimonial1_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['testimonial1_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['testimonial1_text'] ?></p>
                                <p class="text-orange-500 font-black text-lg">★★★★</p>
                            </div>
                            <!-- Item 2 -->
                            <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario1.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['testimonial2_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['testimonial2_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['testimonial2_text'] ?></p>
                                <p class="text-orange-500 font-black text-lg">★★★★★</p>
                            </div>
                            <!-- Item 3 -->
                            <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario2.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['testimonial3_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['testimonial3_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['testimonial3_text'] ?></p>
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
                    <h2 class="text-3xl font-black text-navy-900 mb-6 italic uppercase"><?= $t['terms_title'] ?></h2>
                    <p class="text-slate-600 text-lg leading-relaxed italic border-l-4 border-orange-500 pl-6"><?= $t['terms_text'] ?></p>
                </section>

                <!-- Contact Us -->
                <section id="contact" class="bg-white rounded-4xl shadow-xl border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                    <div class="bg-orange-500 p-12 text-white flex flex-col justify-center space-y-4 md:w-1/3 hover:bg-orange-600 transition-colors duration-300">
                        <h2 class="text-4xl md:text-5xl font-black italic uppercase leading-none"><?= $t['contact_title'] ?><br><?= $t['contact_title_now'] ?></h2>
                        <p class="text-orange-100 italic"><?= $t['contact_subtitle'] ?></p>
                    </div>
                    <div class="p-8 md:p-12 flex-1 grid grid-cols-1 sm:grid-cols-2 gap-8 bg-white text-navy-900">
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                            <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/correo.png" alt="<?= $t['contact_email_label'] ?>">
                            <div>
                                <p class="text-sm text-slate-500 font-semibold"><?= $t['contact_email_label'] ?></p>
                                <p class="font-black text-sm break-all"><?= $t['contact_email'] ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 hover:translate-x-2 transition-transform duration-300 group">
                            <img class="h-10 w-10 group-hover:scale-110 transition-transform" src="<?= $static ?>img/icons/what.png" alt="<?= $t['contact_whatsapp_label'] ?>">
                            <div>
                                <p class="text-sm text-slate-500 font-semibold"><?= $t['contact_whatsapp_label'] ?></p>
                                <p class="font-black text-sm break-all"><?= $t['contact_whatsapp'] ?></p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>

        <?php include 'footer.php'; ?>

    </div>

    <script src="<?= $static ?>js/java.js"></script>

</body>
</html>