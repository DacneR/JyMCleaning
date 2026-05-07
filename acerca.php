<?php require_once 'translations.php'; ?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t['about_page_description'] ?>">
    <meta name="keywords" content="<?= $t['page_keywords'] ?>">
    <title><?= $t['about_page_title'] ?></title>
    
    <!-- SEO: Canonical & Hreflang Tags -->
    <link rel="canonical" href="https://jmdcleaning.com/acerca.php<?= strpos($_SERVER['REQUEST_URI'], '?') !== false ? '?lang=' . $language : '' ?>">
    <link rel="alternate" hreflang="en" href="https://jmdcleaning.com/acerca.php?lang=en">
    <link rel="alternate" hreflang="es" href="https://jmdcleaning.com/acerca.php?lang=es">
    <link rel="alternate" hreflang="x-default" href="https://jmdcleaning.com/acerca.php">
    
    <link rel="stylesheet" href="<?= $static ?>css/style.css">

    <link rel="icon" href="<?= $static ?>img/icons/icon0.webp" type="image/x-icon">
</head>
<body class="bg-slate-50 text-slate-800 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">
        <?php include 'header.php'; ?>

        <main class="flex-grow container mx-auto px-4 py-12 lg:px-8">
            
            <!-- Contenedor Principal -->
            <div class="max-w-6xl mx-auto space-y-16">

                <!-- Quiénes Somos Section -->
                <section class="bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                    <h1 class="text-4xl md:text-5xl font-black text-navy-900 italic uppercase mb-8 text-center"><?= $t['about_who_title'] ?></h1>
                    <p class="text-lg text-slate-600 leading-relaxed text-justify max-w-4xl mx-auto italic border-l-4 border-orange-500 pl-6 mb-10">
                        <?= $t['about_who_text'] ?>
                    </p>
                    <div class="flex justify-center">
                        <div class="rounded-3xl overflow-hidden shadow-lg">
                            <img src="<?= $static ?>img/cerca/ejemplo.webp" alt="<?= $t['about_who_title'] ?>" class="w-full max-w-3xl h-auto">
                        </div>
                    </div>
                </section>

                <!-- Misión, Visión y Aspectos (Grid Responsivo) -->
                <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-navy-900 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-orange-500 flex flex-col justify-between">
                        <div class="text-left">
                            <h2 class="text-2xl font-black italic uppercase mb-4 text-orange-500"><?= $t['about_mission_title'] ?></h2>
                            <p class="text-slate-300 text-sm leading-relaxed"><?= $t['about_mission_text'] ?></p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-md hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                        <div class="text-left">
                            <h2 class="text-2xl font-black italic uppercase mb-4 text-navy-900"><?= $t['about_vision_title'] ?></h2>
                            <p class="text-slate-600 text-sm leading-relaxed"><?= $t['about_vision_text'] ?></p>
                        </div>
                    </div>

                    <div class="bg-orange-500 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                        <div class="text-left">
                            <h2 class="text-2xl font-black italic uppercase mb-4"><?= $t['about_laboral_title'] ?></h2>
                            <p class="text-orange-50 text-sm leading-relaxed"><?= $t['about_laboral_text'] ?></p>
                        </div>
                    </div>
                </section>

                <!-- Testimonials Carousel -->
                <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                    <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase"><?= $t['about_testimonials_title'] ?></h2>
                    <div class="carousel max-w-4xl mx-auto">
                        <div class="carousel-inner flex transition-all duration-500">
                            <!-- Item 1 -->
                            <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario3.webp" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['about_testimonial1_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['about_testimonial1_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['about_testimonial1_text'] ?></p>
                                <p class="text-orange-500 font-black text-lg">★★★★</p>
                            </div>
                            <!-- Item 2 -->
                            <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario4.webp" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['about_testimonial2_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['about_testimonial2_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['about_testimonial2_text'] ?></p>
                                <p class="text-orange-500 font-black text-lg">★★★★★</p>
                            </div>
                            <!-- Item 3 -->
                            <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                <img src="<?= $static ?>img/usuarios/usuario5.webp" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover" alt="<?= $t['about_testimonial3_name'] ?>">
                                <h3 class="font-bold text-xl text-navy-900"><?= $t['about_testimonial3_name'] ?></h3>
                                <p class="max-w-md italic text-slate-600"><?= $t['about_testimonial3_text'] ?></p>
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

            </div>
        </main>

        <?php include 'footer.php'; ?>
    </div>

    <script src="<?= $static ?>js/java.js"></script>

    <?php include 'schema.php'; ?>

</body>
</html>

               
