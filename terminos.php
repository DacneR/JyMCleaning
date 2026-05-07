<?php require_once 'translations.php'; ?>

<!DOCTYPE html>
<html lang="<?= $language ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t['terms_intro'] ?>">
    <meta name="keywords" content="<?= $t['page_keywords'] ?>">
    <title><?= $t['terms_page_title'] ?></title>
    
    <!-- SEO: Canonical & Hreflang Tags -->
    <link rel="canonical" href="https://jmdcleaning.com/terminos.php<?= strpos($_SERVER['REQUEST_URI'], '?') !== false ? '?lang=' . $language : '' ?>">
    <link rel="alternate" hreflang="en" href="https://jmdcleaning.com/terminos.php?lang=en">
    <link rel="alternate" hreflang="es" href="https://jmdcleaning.com/terminos.php?lang=es">
    <link rel="alternate" hreflang="x-default" href="https://jmdcleaning.com/terminos.php">
    
    <link rel="stylesheet" href="<?= $static ?>css/style.css">

    <link rel="icon" href="<?= $static ?>img/icons/icon0.webp" type="image/x-icon">
</head>
<body class="bg-muted-slate-900 text-slate-200 font-sans selection:bg-orange-100 selection:text-orange-600">
    
    <div class="flex flex-col min-h-screen">
        <?php include 'header.php'; ?>

        <main class="flex-grow container mx-auto px-4 py-16">
            
            <!-- Contenedor del Documento -->
            <article class="max-w-4xl mx-auto bg-white p-8 md:p-16 rounded-4xl shadow-xl border border-slate-100">
                
                <header class="text-center space-y-4 border-b border-slate-100 pb-10">
                    <h1 class="text-1.5xl md:text-5xl font-black text-navy-900 italic uppercase">
                        <?= $language === 'en' ? 'J&MDCleaning Terms & Conditions' : 'Términos y Condiciones J&MDCleaning' ?>
                    </h1>
                    <p class="text-slate-700 italic"><?= $t['terms_intro'] ?></p>
                </header>

                <div class="space-y-8 text-slate-700 leading-relaxed">
                    
                    <!-- Section 1 -->
                    <section>
                        <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                            <span class="text-orange-700">01.</span> <?= $t['terms_section1_title'] ?>
                        </h2>
                        <p><?= $t['terms_section1_text'] ?></p>
                    </section>

                    <!-- Section 2 -->
                    <section>
                        <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                            <span class="text-orange-700">02.</span> <?= $t['terms_section2_title'] ?>
                        </h2>
                        <p><?= $t['terms_section2_text'] ?></p>
                    </section>

                    <!-- Section 3 -->
                    <section class="bg-slate-50 p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 sm:border-l-8 border-orange-500 shadow-sm">
                        <h2 class="text-lg sm:text-xl font-black text-navy-900 uppercase mb-4 leading-tight">
                            03. <?= $t['terms_section3_title'] ?>
                        </h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                <span class="text-orange-700 flex-shrink-0 mt-1">■</span> 
                                <span><strong><?= $t['terms_reservation_label'] ?></strong> <?= $t['terms_reservation_text'] ?></span>
                            </li>
                            <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                <span class="text-orange-700 flex-shrink-0 mt-1">■</span> 
                                <span><strong><?= $t['terms_cancellation_label'] ?></strong> <?= $t['terms_cancellation_text'] ?></span>
                            </li>
                            <li class="flex items-start gap-3 font-medium text-navy-900 text-sm sm:text-base">
                                <span class="text-orange-700 flex-shrink-0 mt-1">■</span> 
                                <span><strong><?= $t['terms_access_label'] ?></strong> <?= $t['terms_access_text'] ?></span>
                            </li>
                        </ul>
                    </section>

                    <!-- Section 4 -->
                    <section>
                        <h2 class="text-xl font-black text-navy-900 uppercase flex items-center gap-3 mb-3">
                            <span class="text-orange-700">04.</span> <?= $t['terms_section4_title'] ?>
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm italic text-justify">
                            <p><?= $t['terms_data_point1'] ?></p>
                            <p><?= $t['terms_data_point2'] ?></p>
                        </div>
                    </section>

                    <!-- Footer Contact -->
                    <section class="pt-10 border-t border-slate-100 text-center">
                        <p class="text-sm">
                            <?= $t['terms_contact_text'] ?> 
                            <a href="mailto:jmdcleaning7@gmail.com" class="text-orange-700 font-bold hover:underline">jmdcleaning7@gmail.com</a> 
                            <?= $t['terms_or'] ?> 
                            <span class="text-navy-900 font-bold">8573968312</span>
                        </p>
                    </section>

                </div>

            </article>
        </main>

        <?php include 'footer.php'; ?>
    </div>

    <?php include 'schema.php'; ?>

</body>
</html>
