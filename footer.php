<?php require_once 'translations.php'; ?>

<footer class="bg-muted-slate-900 text-slate-200 py-12 mt-16">
    <div class="container mx-auto px-4">
        <!-- Sección Superior: Links y Logo -->
        <div class="flex flex-col md:flex-row justify-between items-center border-b border-slate-500 pb-8 mb-8 gap-8">
            
            <!-- Menú de Navegación -->
            <nav class="w-full md:w-auto">
                <ul class="flex flex-wrap justify-center md:justify-start gap-6 text-sm font-medium text-slate-200">
                    <li><a href="index.php" class="hover:text-orange-400 transition-colors"><?= $t['nav_home'] ?></a></li>
                    <li><a href="acerca.php" class="hover:text-orange-400 transition-colors"><?= $t['nav_about'] ?></a></li>
                    <li><a href="servicios.php" class="hover:text-orange-400 transition-colors"><?= $t['nav_services'] ?></a></li>
                    <li><a href="index.php#contact" class="hover:text-orange-400 transition-colors"><?= $t['nav_contact'] ?></a></li>
                    <li><a href="terminos.php" class="hover:text-orange-400 transition-colors"><?= $t['nav_terms'] ?></a></li>
                </ul>
            </nav>

            <!-- Logo -->
            <div class="flex-shrink-0">
                <img title="J&MDCleanning" src="<?= $static ?>img/icons/icon0.webp" width="150" height="144" class="h-16 w-auto invert opacity-80 hover:opacity-100 transition-opacity" alt="Logo J&MD Cleaning" loading="lazy" decoding="async">
            </div>
        </div>

        <!-- Sección Media: Redes Sociales -->
        <div class="text-center space-y-6">
            <h2 class="text-xl font-bold tracking-widest uppercase text-orange-400 italic">
                <?= $t['footer_around_us'] ?>
            </h2>
            
            <div class="flex justify-center gap-8">
                <a href="https://www.facebook.com/profile.php?id=61563778132664" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/face-bw.webp" width="800" height="800" alt="Facebook" class="h-8 w-8 invert" loading="lazy" decoding="async">
                </a>
                <a href="https://www.instagram.com/cleannigjmd/" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/insta-bw.webp" width="800" height="800" alt="Instagram" class="h-8 w-8 invert" loading="lazy" decoding="async">
                </a>
                <a href="https://x.com/cleaningJMD7" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/twi-bw.webp" width="800" height="800" alt="X" class="h-8 w-8 invert" loading="lazy" decoding="async">
                </a>
            </div>
        </div>

        <!-- Sección Service Areas: Internal Linking for Local SEO -->
        <div class="mt-12 border-t border-slate-500 pt-8">
            <h3 class="text-center text-lg font-bold text-orange-400 italic uppercase tracking-tighter mb-6">
                <?= $t['footer_services_title'] ?>
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-2xl mx-auto text-center text-sm text-slate-200">
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_boston'] ?>"><?= $t['footer_city_boston'] ?></a>
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_cambridge'] ?>"><?= $t['footer_city_cambridge'] ?></a>
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_worcester'] ?>"><?= $t['footer_city_worcester'] ?></a>
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_quincy'] ?>"><?= $t['footer_city_quincy'] ?></a>
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_lowell'] ?>"><?= $t['footer_city_lowell'] ?></a>
                <a href="index.php#contact" class="hover:text-orange-400 transition-colors" title="<?= $t['footer_city_brockton'] ?>"><?= $t['footer_city_brockton'] ?></a>
            </div>
        </div>

        <!-- Sección Inferior: Copyright -->
        <div class="mt-12 text-center text-xs text-slate-200">
            <p class="max-w-md mx-auto leading-relaxed">
                <?= $t['footer_copyright'] ?>
            </p>
        </div>
    </div>
</footer>
