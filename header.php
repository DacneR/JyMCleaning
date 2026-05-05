<!-- ===================== HEADER RESPONSIVE ===================== -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center py-4 space-y-4 md:gap-0">
            
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img id="header-icon" title="J&MDCleanning" src="<?= $static ?>img/icons/icon-new.png" class="h-16 w-auto transition-transform hover:scale-110">
            </div>

            <!-- Navegación -->
            <nav>
                <ul class="flex flex-wrap justify-center gap-4 text-sm md:text-base font-medium text-slate-700">
                    <?php if ($language == 'en'): ?>
                        <li><a href="index.php" class="hover:text-orange-500 transition-colors">Start</a></li>
                        <li><a href="acerca.php" class="hover:text-orange-500 transition-colors">About us</a></li>
                        <li><a href="servicios.php" class="hover:text-orange-500 transition-colors">Service</a></li>
                        <li><a href="index.php#contact" class="hover:text-orange-500 transition-colors">Contact</a></li>
                        <li><a href="terminos.php" class="hover:text-orange-500 transition-colors text-xs md:text-base uppercase tracking-tighter md:tracking-normal">Terms</a></li>
                        <li><a href="?lang=es" class="bg-navy-900 text-orange-500 px-3 py-1 rounded-full border border-orange-500 hover:bg-orange-500 hover:text-white transition-all text-xs uppercase font-bold">ES</a></li>
                    <?php else: ?>
                        <li><a href="index.php" class="hover:text-orange-500 transition-colors font-bold border-b-2 border-orange-500">Inicio</a></li>
                        <li><a href="acerca.php" class="hover:text-orange-500 transition-colors">Acerca de</a></li>
                        <li><a href="servicios.php" class="hover:text-orange-500 transition-colors">Servicios</a></li>
                        <li><a href="index.php#contact" class="hover:text-orange-500 transition-colors">Contacto</a></li>
                        <li><a href="terminos.php" class="hover:text-orange-500 transition-colors text-xs md:text-base uppercase tracking-tighter md:tracking-normal">Términos</a></li>
                        <li><a href="?lang=en" class="bg-navy-900 text-orange-500 px-3 py-1 rounded-full border border-orange-500 hover:bg-orange-500 hover:text-white transition-all text-xs uppercase font-bold">EN</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>