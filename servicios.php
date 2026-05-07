<?php require_once 'translations.php'; ?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t['services_page_subtitle'] ?>">
    <meta name="keywords" content="<?= $t['services_page_keywords'] ?>">
    <title><?= $t['services_page_title'] ?></title>
    
    <!-- SEO: Canonical & Hreflang Tags -->
    <link rel="canonical" href="https://jmdcleaning.com/servicios.php<?= strpos($_SERVER['REQUEST_URI'], '?') !== false ? '?lang=' . $language : '' ?>">
    <link rel="alternate" hreflang="en" href="https://jmdcleaning.com/servicios.php?lang=en">
    <link rel="alternate" hreflang="es" href="https://jmdcleaning.com/servicios.php?lang=es">
    <link rel="alternate" hreflang="x-default" href="https://jmdcleaning.com/servicios.php">
    
    <link rel="stylesheet" href="<?= $static ?>css/style.css">

    <link rel="icon" href="<?= $static ?>img/icons/icon0.webp" type="image/x-icon">
</head>
<body class="bg-muted-slate-900 text-slate-200 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">
        <?php include 'header.php'; ?>

        <main class="flex-grow container mx-auto px-4 py-16 lg:px-8">
            
            <!-- Título de la Página -->
            <div class="text-center mb-16 space-y-4">
                <h1 class="text-4xl md:text-6xl font-black text-white italic uppercase inline-block border-b-8 border-orange-500 pb-2">
                    <?= ($language == 'en') ? 'Our Services' : 'Nuestros Servicios' ?>
                </h1>
                <p class="text-slate-200 text-lg md:text-xl italic font-medium">
                    <?= ($language == 'en') ? 'Professional care for your home and business' : 'Cuidado profesional para su hogar y negocio' ?>
                </p>
            </div>

            <!-- Contenedor de Servicios -->
            <div class="space-y-24 max-w-6xl mx-auto">

                <?php 
                // Definimos los servicios en un array para no repetir código
                $services = ($language == 'en') ? [
                    [
                        'title' => 'Carpet Cleaning',
                        'subtitle' => 'Bring your carpets back to life!',
                        'desc' => 'Our experience of over 20 years allows us to offer a service that removes even the toughest stains without damaging the material. We use advanced techniques that restore original color and texture.',
                        'img' => 'alfombras.webp',
                        'side' => 'left'
                    ],
                    [
                        'title' => 'Furniture Cleaning',
                        'subtitle' => 'Keep your furniture spotless!',
                        'desc' => 'We specialize in deep cleaning of furniture, removing pet hair and difficult residues. Our products clean, protect, and prolong the life of your furniture, restoring comfort.',
                        'img' => 'muebles.webp',
                        'side' => 'right'
                    ],
                    [
                        'title' => 'Curtain Cleaning',
                        'subtitle' => 'Refresh with expert care!',
                        'desc' => 'Curtains are key in decor. Our service removes dust, stains, and odors, restoring freshness and original beauty without damaging the delicate fabrics.',
                        'img' => 'cortinas.webp',
                        'side' => 'left'
                    ]
                ] : [
                    [
                        'title' => 'Lavado de Alfombras',
                        'subtitle' => '¡Devuelva la vida a sus alfombras!',
                        'desc' => 'Nuestra experiencia de más de 20 años nos permite ofrecer un servicio que elimina hasta las manchas más rebeldes sin dañar el material. Restauramos el color y la textura original.',
                        'img' => 'alfombras.webp',
                        'side' => 'left'
                    ],
                    [
                        'title' => 'Lavado de Muebles',
                        'subtitle' => '¡Manténgalos impecables!',
                        'desc' => 'Nos especializamos en limpieza profunda, eliminando pelos de mascotas y residuos difíciles. Nuestros productos protegen y prolongan la vida útil de sus muebles.',
                        'img' => 'muebles.webp',
                        'side' => 'right'
                    ],
                    [
                        'title' => 'Lavado de Cortinas',
                        'subtitle' => '¡Cuidado experto para su hogar!',
                        'desc' => 'Las cortinas son clave en la decoración. Nuestro lavado elimina polvo y olores, devolviendo la frescura y belleza original sin dañar las fibras.',
                        'img' => 'cortinas.webp',
                        'side' => 'left'
                    ]
                ];

                foreach ($services as $s): ?>
                    
                    <!-- Tarjeta de Servicio -->
                    <section class="flex flex-col <?= $s['side'] === 'right' ? 'md:flex-row-reverse' : 'md:flex-row' ?> items-center gap-8 md:gap-16 group">
                        
                        <!-- Imagen con Efectos -->
                        <div class="w-full md:w-1/2 overflow-hidden rounded-4xl shadow-2xl bg-white p-4 border border-slate-100 transition-all duration-500 group-hover:shadow-orange-500/20">
                            <img src="<?= $static ?>img/servicios/<?= $s['img'] ?>" 
                                 width="800"
                                 height="800"
                                 alt="<?= $s['title'] ?>" 
                                 class="w-full h-72 md:h-96 object-cover rounded-3xl transition-transform duration-700 group-hover:scale-105"
                                 loading="lazy"
                                 decoding="async">
                        </div>

                        <!-- Texto Informativo -->
                        <div class="w-full md:w-1/2 space-y-6 text-center <?= $s['side'] === 'right' ? 'md:text-right' : 'md:text-left' ?>">
                            <div class="space-y-2">
                                <h2 class="text-3xl md:text-4xl font-black text-white-900 leading-tight">
                                    <?= $s['title'] ?>
                                </h2>
                                <h3 class="text-orange-700 font-bold italic text-xl uppercase tracking-tighter">
                                    <?= $s['subtitle'] ?>
                                </h3>
                            </div>
                            <p class="text-white-700 text-lg leading-relaxed italic">
                                <?= $s['desc'] ?>
                            </p>
                            <div class="pt-4">
                                <a href="index.php#contact" class="inline-block bg-navy-900 text-white px-8 py-3 rounded-full font-bold hover:bg-orange-500 transition-colors shadow-lg">
                                    <?= ($language == 'en') ? 'Get a Quote' : 'Cotizar ahora' ?>
                                </a>
                            </div>
                        </div>
                    </section>

                <?php endforeach; ?>

            </div>
        </main>

        <?php include 'footer.php'; ?>
    </div>

    <script src="<?= $static ?>js/java.js" type="module"></script>

    <?php include 'schema.php'; ?>

</body>
</html>
