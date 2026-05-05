<?php
$language = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';
$static = "assets/";
?>

<footer class="bg-navy-900 text-white py-12 mt-16">
    <div class="container mx-auto px-4">
        <!-- Sección Superior: Links y Logo -->
        <div class="flex flex-col md:flex-row justify-between items-center border-b border-slate-700 pb-8 mb-8 gap-8">
            
            <!-- Menú de Navegación -->
            <nav class="w-full md:w-auto">
                <ul class="flex flex-wrap justify-center md:justify-start gap-6 text-sm font-medium">
                    <?php if ($language == 'en'): ?>
                        <li><a href="index.php" class="hover:text-orange-500 transition-colors">Start</a></li>
                        <li><a href="acerca.php" class="hover:text-orange-500 transition-colors">About us</a></li>
                        <li><a href="servicios.php" class="hover:text-orange-500 transition-colors">Service</a></li>
                        <li><a href="index.php#contact" class="hover:text-orange-500 transition-colors">Contact</a></li>
                        <li><a href="terminos.php" class="hover:text-orange-500 transition-colors">Terms</a></li>
                    <?php else: ?>
                        <li><a href="index.php" class="hover:text-orange-500 transition-colors">Inicio</a></li>
                        <li><a href="acerca.php" class="hover:text-orange-500 transition-colors">Acerca de</a></li>
                        <li><a href="servicios.php" class="hover:text-orange-500 transition-colors">Servicios</a></li>
                        <li><a href="index.php#contact" class="hover:text-orange-500 transition-colors">Contacto</a></li>
                        <li><a href="terminos.php" class="hover:text-orange-500 transition-colors">Términos</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- Logo -->
            <div class="flex-shrink-0">
                <img title="J&MDCleanning" src="<?= $static ?>img/icons/icon0.png" class="h-16 w-auto invert opacity-80 hover:opacity-100 transition-opacity">
            </div>
        </div>

        <!-- Sección Media: Redes Sociales -->
        <div class="text-center space-y-6">
            <h2 class="text-xl font-bold tracking-widest uppercase text-orange-500 italic">
                <?= ($language == 'en') ? 'Around us!' : '¡Alrededor de nosotros!' ?>
            </h2>
            
            <div class="flex justify-center gap-8">
                <a href="https://www.facebook.com/profile.php?id=61563778132664" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/face-bw.png" alt="Facebook" class="h-8 w-8 invert">
                </a>
                <a href="https://www.instagram.com/cleannigjmd/" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/insta-bw.png" alt="Instagram" class="h-8 w-8 invert">
                </a>
                <a href="https://x.com/cleaningJMD7" target="_blank" class="hover:scale-125 transition-transform">
                    <img src="<?= $static ?>img/icons/twi-bw.png" alt="X" class="h-8 w-8 invert">
                </a>
            </div>
        </div>

        <!-- Sección Inferior: Copyright -->
        <div class="mt-12 text-center text-xs text-slate-400">
            <p class="max-w-md mx-auto leading-relaxed">
                <?= ($language == 'en') 
                    ? '© 2024 J&MD Cleaning is a registered trademark. All rights reserved.' 
                    : '© 2024 J&MDCleanning es una marca registrada. Todos los derechos reservados.' 
                ?>
            </p>
        </div>
    </div>
</footer>