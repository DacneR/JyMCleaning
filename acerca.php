<?php
// ===================== CONFIGURACIÓN =====================
$language = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';
$static = "assets/";
$pageTitle = ($language == 'en') ? 'About us - J&MDCleaning' : 'Acerca de - J&MDCleaning';
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
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>

    <link rel="icon" href="<?= $static ?>img/icons/icon0.png" type="image/x-icon">
</head>
<body class="bg-slate-50 text-slate-800 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">
        <?php include 'header.php'; ?>

        <main class="flex-grow container mx-auto px-4 py-12 lg:px-8">
            
            <!-- Contenedor Principal -->
            <div class="max-w-6xl mx-auto space-y-16">

                <?php if ($language == 'en'): ?>
                    <!-- ==================== VERSIÓN INGLÉS ==================== -->
                    <div id="content-en" class="space-y-16">
                        
                        <!-- Quiénes Somos Section -->
                        <section class="bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                            <h1 class="text-4xl md:text-5xl font-black text-navy-900 italic uppercase mb-8 text-center">Who We Are</h1>
                            <p class="text-lg text-slate-600 leading-relaxed text-justify max-w-4xl mx-auto italic border-l-4 border-orange-500 pl-6 mb-10">
                                Welcome to J&MDCleaning, your ally in professional cleaning services. We are a dedicated and experienced team. In our company, we are dedicated to offering the best cleaning services to meet all your needs. We clean carpets, restaurants, and offices with the utmost dedication and professionalism.
                            <div class="flex justify-center">
                                <div class="rounded-3xl overflow-hidden shadow-lg">
                                    <img src="<?= $static ?>img/cerca/ejemplo.png" alt="Clean Spaces" class="w-full max-w-3xl h-auto">
                                </div>
                            </div>
                        </section>

                        <!-- Misión, Visión y Aspectos (Grid Responsivo) -->
                        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-navy-900 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-orange-500 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4 text-orange-500">Mission</h2>
                                    <p class="text-slate-300 text-sm leading-relaxed">To provide superior cleaning services that exceed expectations, creating safe and healthy environments using advanced techniques and eco-friendly products.</p>
                                </div>
                            </div>

                            <div class="bg-white p-8 rounded-3xl shadow-md hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4 text-navy-900">Vision</h2>
                                    <p class="text-slate-600 text-sm leading-relaxed">To be leaders in the cleaning sector, recognized for quality, innovation, and setting new standards in the professional industry.</p>
                                </div>
                            </div>

                            <div class="bg-orange-500 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4">Work Aspects</h2>
                                    <p class="text-orange-50 text-sm leading-relaxed">We foster a positive and respectful environment with continuous training and fair conditions for our growing professional team.</p>
                                </div>
                            </div>
                        </section>

                        <!-- Testimonials Carousel -->
                        <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                            <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase">What Our Clients Say</h2>
                            <div class="carousel max-w-4xl mx-auto">
                                <div class="carousel-inner flex transition-all duration-500">
                                    <!-- Item 1 -->
                                    <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario3.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Manuel Hernandez</h3>
                                        <p class="max-w-md italic text-slate-600">"Thanks to J&MDCleaning, my carpets look like new. Impeccable service!"</p>
                                        <p class="text-orange-500 font-black text-lg">★★★★</p>
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario4.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Lorena Gomez</h3>
                                        <p class="max-w-md italic text-slate-600">"I am very happy with the cleaning of my furniture. Highly recommended!"</p>
                                        <p class="text-orange-500 font-black text-lg">★★★★★</p>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario5.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Roberto Silva</h3>
                                        <p class="max-w-md italic text-slate-600">"Professional and efficient team. They restored my upholstery to perfection!"</p>
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
                                    
                <?php else: ?>
                    <!-- ==================== VERSIÓN ESPAÑOL ==================== -->
                    <div id="content-es" class="space-y-16">
                        
                        <!-- Quiénes Somos Section -->
                        <section class="bg-white p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                            <h1 class="text-4xl md:text-5xl font-black text-navy-900 italic uppercase mb-8 text-center">Quiénes Somos</h1>
                            <p class="text-lg text-slate-600 leading-relaxed text-justify max-w-4xl mx-auto italic border-l-4 border-orange-500 pl-6 mb-10">
                                Bienvenidos a J&MDCleaning, su aliado en servicios de limpieza profesional. Somos un equipo dedicado y experimentado, con nuestra empresa nos dedicamos a ofrecer los mejores servicios de limpieza para satisfacer todas sus necesidades. Limpiamos alfombras, restaurantes y oficinas con la mayor dedicación y profesionalismo.
                            </p>
                            <div class="flex justify-center">
                                <div class="rounded-3xl overflow-hidden shadow-lg">
                                    <img src="<?= $static ?>img/cerca/ejemplo.png" alt="Espacios Limpios" class="w-full max-w-3xl h-auto">
                                </div>
                            </div>
                        </section>

                        <!-- Misión, Visión y Aspectos (Grid Responsivo) -->
                        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-navy-900 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-orange-500 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4 text-orange-500">Misión</h2>
                                    <p class="text-slate-300 text-sm leading-relaxed">Proporcionar servicios de limpieza superiores que superen las expectativas, creando ambientes seguros y saludables con técnicas avanzadas y productos ecológicos.</p>
                                </div>
                            </div>

                            <div class="bg-white p-8 rounded-3xl shadow-md hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4 text-navy-900">Visión</h2>
                                    <p class="text-slate-600 text-sm leading-relaxed">Ser líderes en el sector, reconocidos por nuestra calidad e innovación, estableciendo nuevos estándares en la industria de la limpieza profesional.</p>
                                </div>
                            </div>

                            <div class="bg-orange-500 text-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-transform duration-300 border-t-8 border-navy-900 flex flex-col justify-between">
                                <div class="text-left">
                                    <h2 class="text-2xl font-black italic uppercase mb-4">Laboral</h2>
                                    <p class="text-orange-50 text-sm leading-relaxed">Fomentamos un ambiente de respeto y crecimiento, con formación continua y condiciones justas para todo nuestro equipo humano.</p>
                                </div>
                            </div>
                        </section>

                        <!-- Testimonials Carousel -->
                        <section class="bg-gradient-to-r from-slate-100 to-slate-50 p-8 md:p-12 rounded-4xl shadow-sm border border-slate-100">
                            <h2 class="text-3xl font-black text-navy-900 text-center mb-10 italic uppercase">Lo que Dicen Nuestros Clientes</h2>
                            <div class="carousel max-w-4xl mx-auto">
                                <div class="carousel-inner flex transition-all duration-500">
                                    <!-- Item 1 -->
                                    <div class="carousel-item active min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario3.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Manuel Hernandez</h3>
                                        <p class="max-w-md italic text-slate-600">"Gracias a J&MDCleaning, mis alfombras se ven como nuevas. ¡Servicio impecable!"</p>
                                        <p class="text-orange-500 font-black text-lg">★★★★</p>
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario4.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Lorena Gomez</h3>
                                        <p class="max-w-md italic text-slate-600">"Estoy muy feliz con la limpieza de mis muebles. ¡Muy recomendado!"</p>
                                        <p class="text-orange-500 font-black text-lg">★★★★★</p>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="carousel-item min-w-full flex flex-col items-center text-center space-y-4 p-6">
                                        <img src="<?= $static ?>img/usuarios/usuario5.png" class="h-24 w-24 rounded-full border-4 border-orange-500 shadow-md object-cover">
                                        <h3 class="font-bold text-xl text-navy-900">Roberto Silva</h3>
                                        <p class="max-w-md italic text-slate-600">"Equipo profesional y eficiente. ¡Restauraron mi tapicería a la perfección!"</p>
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
                <?php endif; ?>

            </div>
        </main>

        <?php include 'footer.php'; ?>
    </div>

    <script src="<?= $static ?>js/java.js"></script>
</body>
</html>

               