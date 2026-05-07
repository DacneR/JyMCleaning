<?php
/**
 * ============================================================
 * SISTEMA DE TRADUCCIONES INTELIGENTE Y PERSISTENTE (i18n)
 * J&MD CLEANING
 * ============================================================
 * 
 * CARACTERÍSTICAS:
 * 1. Persistencia de sesiones - el idioma se mantiene al navegar
 * 2. Detección automática del idioma del navegador
 * 3. Override manual via ?lang=en|es
 * 4. Mapeo simple: $t['clave'] = 'Texto en idioma actual'
 */

// Iniciar sesión (debe estar antes de cualquier output)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ===================== LÓGICA DE DETECCIÓN DE IDIOMA =====================

/**
 * Prioridad de detección:
 * 1. Parámetro GET ?lang= (MÁXIMA PRIORIDAD - sobrescribe sesión)
 * 2. Sesión existente $_SESSION['lang']
 * 3. Cabecera HTTP Accept-Language (detección automática)
 * 4. Por defecto: 'en' (mercado principal: Houston, Texas)
 */

$language = 'en'; // Idioma por defecto

// 1. Verificar si hay override manual via GET
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'es'])) {
    $language = $_GET['lang'];
    $_SESSION['lang'] = $language; // Actualizar sesión
}
// 2. Verificar sesión existente
elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['en', 'es'])) {
    $language = $_SESSION['lang'];
}
// 3. Detectar automáticamente del navegador
else {
    $accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
    
    // Verificar si el navegador prefiere español
    if (strpos($accept_language, 'es') === 0 || strpos($accept_language, 'es-') === 0) {
        $language = 'es';
    }
    // Por defecto, usar inglés
    else {
        $language = 'en';
    }
    
    // Guardar en sesión para persistencia
    $_SESSION['lang'] = $language;
}

// Variable de ruta estática (usado en todas las vistas)
$static = "assets/";

// ===================== DICCIONARIO DE TRADUCCIONES =====================

$texts = [
    // ==================== HEAD & META ====================
    'page_title' => [
        'en' => 'Cleaning Services in Boston & Massachusetts - J&MDcleaning',
        'es' => 'Servicios de Limpieza en Boston y Massachusetts - J&MDcleaning'
    ],
    'page_description' => [
        'en' => 'Professional cleaning in Boston, Worcester and Cambridge MA. Carpet, furniture and upholstery cleaning services. 20+ years of experience.',
        'es' => 'Limpieza profesional en Boston, Worcester y Cambridge MA. Servicios de limpieza de alfombras, muebles y tapicería. Más de 20 años de experiencia.'
    ],
    'page_keywords' => [
        'en' => 'Emergency cleaning Boston, Affordable cleaners Cambridge, same day cleaning Boston MA, affordable cleaning services Cambridge MA, professional cleaners Massachusetts',
        'es' => 'Limpieza de emergencia en Boston, limpiadores economicos en Cambridge, limpieza el mismo dia Boston MA, servicios de limpieza economicos Cambridge MA, limpieza profesional Massachusetts'
    ],
    'geo_cities' => [
        'en' => 'Boston, Cambridge, Worcester, Springfield, Lowell, Quincy, Brockton',
        'es' => 'Boston, Cambridge, Worcester, Springfield, Lowell, Quincy, Brockton'
    ],
    'h1_local_seo' => [
        'en' => 'Professional Cleaning Services in Massachusetts',
        'es' => 'Servicios de Limpieza Profesional en Massachusetts'
    ],

    // ==================== BANNER ====================
    'banner_image' => [
        'en' => 'img/banners/bann-en.webp',
        'es' => 'img/banners/bann-es.webp'
    ],
    'banner_mobile' => [ // LLAVE NUEVA
        'en' => 'img/banners/bann-en-mobile.webp',
        'es' => 'img/banners/bann-es-mobile.webp'
    ],
    'banner_alt' => [
        'en' => 'J&MDCleaning - Contact Us!',
        'es' => 'J&MDCleaning - ¡Contactanos!'
    ],
    // ==================== IMAGE ALT TAGS (SEO - Local Keywords) ====================
    'img_carpet_boston_alt' => [
        'en' => 'Carpet Cleaning in Boston, Massachusetts - Professional Service',
        'es' => 'Limpieza de Alfombras en Boston, Massachusetts - Servicio Profesional'
    ],
    'img_furniture_alt' => [
        'en' => 'Furniture Cleaning in Boston & Cambridge, MA',
        'es' => 'Limpieza de Muebles en Boston y Cambridge, MA'
    ],
    'img_carpet_service_alt' => [
        'en' => 'Professional Carpet Cleaning Service in Massachusetts',
        'es' => 'Servicio Profesional de Limpieza de Alfombras en Massachusetts'
    ],
    'img_furniture_service_alt' => [
        'en' => 'Expert Furniture & Upholstery Cleaning in Worcester & Boston',
        'es' => 'Limpieza Experta de Muebles y Tapicería en Worcester y Boston'
    ],
    'img_curtain_service_alt' => [
        'en' => 'Curtain Cleaning Service - Boston, Quincy, Brockton MA',
        'es' => 'Servicio de Limpieza de Cortinas - Boston, Quincy, Brockton MA'
    ],
    // ==================== FIRST PRESENTATION ====================
    'intro_text' => [
        'en' => 'At our company, we are dedicated to providing the best cleaning services to meet all your needs. We clean carpets, restaurants, and offices with the utmost dedication and professionalism.',
        'es' => 'En nuestra empresa, nos dedicamos a ofrecer los mejores servicios de limpieza para satisfacer todas sus necesidades. Limpiamos alfombras, restaurantes, y oficinas con la mayor dedicación y profesionalismo.'
    ],

    // ==================== PROMOTION SECTION ====================
    'promo_title' => [
        'en' => 'Promotion: Business Service',
        'es' => 'Promoción: Servicio Empresarial'
    ],
    'promo_description' => [
        'en' => 'Hire the monthly cleaning of all your office spaces, including carpets, furniture, and dining rooms, and receive a 25% discount in the first month. Keep your work environment clean and healthy with our specialized service.',
        'es' => 'Contrate la limpieza mensual de todos sus espacios de oficina, incluyendo alfombras, muebles y comedores, y reciba un 25% de descuento en el primer mes. Mantenga su ambiente de trabajo limpio y saludable con nuestro servicio especializado y regular.'
    ],

    // ==================== CLEANING CASES SECTION ====================
    'cleaning_cases_title' => [
        'en' => 'Remove All Those Stains!',
        'es' => '¡Remueve todas esas manchas!'
    ],
    
    // Caso 1: Carpets
    'case_carpet_point1' => [
        'en' => 'Revive the original color of your carpet.',
        'es' => 'Revive el color original de tu alfombra.'
    ],
    'case_carpet_point2' => [
        'en' => 'Professional care for your carpets.',
        'es' => 'Cuidado profesional para tus alfombras.'
    ],
    'case_carpet_point3' => [
        'en' => 'Advanced technology for stubborn stains.',
        'es' => 'Tecnología avanzada para manchas rebeldes.'
    ],
    'case_carpet_image_alt' => [
        'en' => 'Cleaning Carpet',
        'es' => 'Limpieza de Alfombras'
    ],

    // Caso 2: Furniture
    'case_furniture_point1' => [
        'en' => 'We remove food stains from your furniture.',
        'es' => 'Deshacemos las manchas de alimentos en tus muebles.'
    ],
    'case_furniture_point2' => [
        'en' => 'Deep cleaning, we remove pet odors.',
        'es' => 'Limpieza profunda, eliminamos manchas y olores.'
    ],
    'case_furniture_point3' => [
        'en' => 'Restore furniture damaged by DIY cleaning.',
        'es' => 'Restauramos muebles dañados por intentos caseros.'
    ],
    'case_furniture_image_alt' => [
        'en' => 'Furniture Cleaning',
        'es' => 'Limpieza de Muebles'
    ],

    // ==================== TESTIMONIALS SECTION ====================
    'testimonials_title' => [
        'en' => 'Customer Reviews',
        'es' => 'Opiniones de Clientes'
    ],
    'testimonial1_name' => [
        'en' => 'Horacio Restrepo',
        'es' => 'Horacio Restrepo'
    ],
    'testimonial1_text' => [
        'en' => '"Excellent service! I was very satisfied with the cleaning of my carpets. I recommend it!"',
        'es' => '"¡Excelente servicio! Quedé muy satisfecho con la limpieza de mis alfombras. ¡Lo recomiendo!"'
    ],
    'testimonial2_name' => [
        'en' => 'Juliana Mojica',
        'es' => 'Juliana Mojica'
    ],
    'testimonial2_text' => [
        'en' => '"Great job. My furniture looks like new. Highly recommended!"',
        'es' => '"Gran trabajo. Mis muebles quedaron como nuevos. ¡Muy recomendado!"'
    ],
    'testimonial3_name' => [
        'en' => 'Marcela Orozco',
        'es' => 'Marcela Orozco'
    ],
    'testimonial3_text' => [
        'en' => '"Professional and efficient! They removed all the stains from my mattresses."',
        'es' => '"¡Profesionales y eficientes! Eliminaron todas las manchas de mis colchones."'
    ],

    // ==================== TERMS & CONDITIONS SECTION ====================
    'terms_title' => [
        'en' => 'Terms and Conditions',
        'es' => 'Términos y Condiciones'
    ],
    'terms_text' => [
        'en' => 'At J&MDCleaning, we are committed to providing professional cleaning services with over 20 years of experience. By using our services, you agree to our terms and conditions, including the cancellation policy and responsible handling of your personal data. We protect your information and use it only to improve our offer.',
        'es' => 'En J&MDCleaning nos comprometemos a ofrecer servicios de limpieza profesional con más de 20 años de experiencia. Al usar nuestros servicios, aceptas nuestros términos y condiciones, incluyendo la política de cancelaciones y el tratamiento responsable de tus datos personales. Protegemos tu información y la utilizamos únicamente para mejorar nuestra oferta.'
    ],

    // ==================== CONTACT SECTION ====================
    'contact_title' => [
        'en' => 'Contact',
        'es' => 'Contacta'
    ],
    'contact_title_now' => [
        'en' => 'Us Now!',
        'es' => 'nos ahora!'
    ],
    'contact_subtitle' => [
        'en' => "We're ready to help you",
        'es' => 'Estamos listos para ayudarte'
    ],
    'contact_email_label' => [
        'en' => 'Email',
        'es' => 'Correo'
    ],
    'contact_whatsapp_label' => [
        'en' => 'WhatsApp',
        'es' => 'WhatsApp'
    ],
    'contact_email' => [
        'en' => 'jmdcleaning7@gmail.com',
        'es' => 'jmdcleaning7@gmail.com'
    ],
    'contact_whatsapp' => [
        'en' => '8573968312',
        'es' => '8573968312'
    ],

    // ==================== NAVIGATION & LANGUAGE SWITCHER ====================
    'nav_home' => [
        'en' => 'Start',
        'es' => 'Inicio'
    ],
    'nav_about' => [
        'en' => 'About us',
        'es' => 'Acerca de'
    ],
    'nav_services' => [
        'en' => 'Service',
        'es' => 'Servicios'
    ],
    'nav_contact' => [
        'en' => 'Contact',
        'es' => 'Contacto'
    ],
    'nav_terms' => [
        'en' => 'Terms',
        'es' => 'Términos'
    ],
    'lang_current' => [
        'en' => 'English',
        'es' => 'Español'
    ],
    'lang_en' => [
        'en' => 'English',
        'es' => 'Inglés'
    ],
    'lang_es' => [
        'en' => 'Spanish',
        'es' => 'Español'
    ],

    // ==================== ABOUT PAGE (ACERCA.PHP) ====================
    'about_page_title' => [
        'en' => 'About Us - Professional Cleaning Services in Boston, MA - J&MDcleaning',
        'es' => 'Acerca de - Servicios de Limpieza Profesional en Boston, MA - J&MDcleaning'
    ],
    'about_page_description' => [
        'en' => 'Learn about J&MDCleaning: our mission, vision, and commitment to professional cleaning services in Boston and Massachusetts with 20+ years of experience.',
        'es' => 'Conoce a J&MDCleaning: nuestra misión, visión y compromiso con servicios de limpieza profesional en Boston y Massachusetts con más de 20 años de experiencia.'
    ],
    'about_who_title' => [
        'en' => 'Who We Are',
        'es' => 'Quiénes Somos'
    ],
    'about_who_text' => [
        'en' => 'Welcome to J&MDCleaning, your ally in professional cleaning services. We are a dedicated and experienced team. In our company, we are dedicated to offering the best cleaning services to meet all your needs. We clean carpets, restaurants, and offices with the utmost dedication and professionalism.',
        'es' => 'Bienvenidos a J&MDCleaning, su aliado en servicios de limpieza profesional. Somos un equipo dedicado y experimentado, con nuestra empresa nos dedicamos a ofrecer los mejores servicios de limpieza para satisfacer todas sus necesidades. Limpiamos alfombras, restaurantes y oficinas con la mayor dedicación y profesionalismo.'
    ],
    'about_mission_title' => [
        'en' => 'Mission',
        'es' => 'Misión'
    ],
    'about_mission_text' => [
        'en' => 'To provide superior cleaning services that exceed expectations, creating safe and healthy environments using advanced techniques and eco-friendly products.',
        'es' => 'Proporcionar servicios de limpieza superiores que superen las expectativas, creando ambientes seguros y saludables con técnicas avanzadas y productos ecológicos.'
    ],
    'about_vision_title' => [
        'en' => 'Vision',
        'es' => 'Visión'
    ],
    'about_vision_text' => [
        'en' => 'To be leaders in the cleaning sector, recognized for quality, innovation, and setting new standards in the professional industry.',
        'es' => 'Ser líderes en el sector, reconocidos por nuestra calidad e innovación, estableciendo nuevos estándares en la industria de la limpieza profesional.'
    ],
    'about_laboral_title' => [
        'en' => 'Work Aspects',
        'es' => 'Laboral'
    ],
    'about_laboral_text' => [
        'en' => 'We foster a positive and respectful environment with continuous training and fair conditions for our growing professional team.',
        'es' => 'Fomentamos un ambiente de respeto y crecimiento, con formación continua y condiciones justas para todo nuestro equipo humano.'
    ],
    'about_testimonials_title' => [
        'en' => 'What Our Clients Say',
        'es' => 'Lo que Dicen Nuestros Clientes'
    ],
    'about_testimonial1_name' => [
        'en' => 'Manuel Hernandez',
        'es' => 'Manuel Hernandez'
    ],
    'about_testimonial1_text' => [
        'en' => '"Thanks to J&MDCleaning, my carpets look like new. Impeccable service!"',
        'es' => '"Gracias a J&MDCleaning, mis alfombras se ven como nuevas. ¡Servicio impecable!"'
    ],
    'about_testimonial2_name' => [
        'en' => 'Lorena Gomez',
        'es' => 'Lorena Gomez'
    ],
    'about_testimonial2_text' => [
        'en' => '"I am very happy with the cleaning of my furniture. Highly recommended!"',
        'es' => '"Estoy muy feliz con la limpieza de mis muebles. ¡Muy recomendado!"'
    ],
    'about_testimonial3_name' => [
        'en' => 'Roberto Silva',
        'es' => 'Roberto Silva'
    ],
    'about_testimonial3_text' => [
        'en' => '"Professional and efficient team. They restored my upholstery to perfection!"',
        'es' => '"Equipo profesional y eficiente. ¡Restauraron mi tapicería a la perfección!"'
    ],

    // ==================== SERVICES PAGE (SERVICIOS.PHP) ====================
    'services_page_title' => [
        'en' => 'Our Services - Cleaning in Boston & Massachusetts - J&MDcleaning',
        'es' => 'Nuestros Servicios - Limpieza en Boston y Massachusetts - J&MDcleaning'
    ],
    'services_page_subtitle' => [
        'en' => 'Professional care for your home and business in Massachusetts',
        'es' => 'Cuidado profesional para su hogar y negocio en Massachusetts'
    ],
    'services_page_keywords' => [
        'en' => 'Emergency carpet cleaning Boston, Affordable upholstery cleaners Cambridge, furniture cleaning near Boston MA, same day carpet cleaners Cambridge, commercial cleaning services Massachusetts',
        'es' => 'Limpieza de alfombras de emergencia en Boston, limpieza economica de tapiceria Cambridge, limpieza de muebles cerca de Boston MA, limpieza de alfombras el mismo dia Cambridge, limpieza comercial Massachusetts'
    ],
    'service_carpet_title' => [
        'en' => 'Carpet Cleaning',
        'es' => 'Lavado de Alfombras'
    ],
    'service_carpet_subtitle' => [
        'en' => 'Bring your carpets back to life!',
        'es' => '¡Devuelva la vida a sus alfombras!'
    ],
    'service_carpet_text' => [
        'en' => 'Our experience of over 20 years allows us to offer a service that removes even the toughest stains without damaging the material. We use advanced techniques that restore original color and texture.',
        'es' => 'Nuestra experiencia de más de 20 años nos permite ofrecer un servicio que elimina hasta las manchas más rebeldes sin dañar el material. Restauramos el color y la textura original.'
    ],
    'service_furniture_title' => [
        'en' => 'Furniture Cleaning',
        'es' => 'Lavado de Muebles'
    ],
    'service_furniture_subtitle' => [
        'en' => 'Keep your furniture spotless!',
        'es' => '¡Manténgalos impecables!'
    ],
    'service_furniture_text' => [
        'en' => 'We specialize in deep cleaning of furniture, removing pet hair and difficult residues. Our products clean, protect, and prolong the life of your furniture, restoring comfort.',
        'es' => 'Nos especializamos en limpieza profunda, eliminando pelos de mascotas y residuos difíciles. Nuestros productos protegen y prolongan la vida útil de sus muebles.'
    ],
    'service_curtain_title' => [
        'en' => 'Curtain Cleaning',
        'es' => 'Lavado de Cortinas'
    ],
    'service_curtain_subtitle' => [
        'en' => 'Refresh with expert care!',
        'es' => '¡Cuidado experto para su hogar!'
    ],
    'service_curtain_text' => [
        'en' => 'Curtains are key in decor. Our service removes dust, stains, and odors, restoring freshness and original beauty without damaging the delicate fabrics.',
        'es' => 'Las cortinas son clave en la decoración. Nuestro lavado elimina polvo y olores, devolviendo la frescura y belleza original sin dañar las fibras.'
    ],
    'service_quote_btn' => [
        'en' => 'Get a Quote',
        'es' => 'Cotizar ahora'
    ],

    // ==================== TERMS PAGE (TERMINOS.PHP) ====================
    'terms_page_title' => [
        'en' => 'Terms & Conditions - Cleaning Services in Boston, MA - J&MDcleaning',
        'es' => 'Términos y Condiciones - Servicios de Limpieza en Boston, MA - J&MDcleaning'
    ],
    'terms_intro' => [
        'en' => 'By using our services, you agree to comply with the following terms. Please read them carefully.',
        'es' => 'Al utilizar nuestros servicios, aceptas cumplir con los siguientes términos. Por favor, léelos detenidamente.'
    ],
    'terms_section1_title' => [
        'en' => 'Acceptance of Terms',
        'es' => 'Aceptación de los Términos'
    ],
    'terms_section1_text' => [
        'en' => 'By accessing and using the services of J&MDCleaning, you agree to be bound by these terms and conditions, as well as our privacy policy. If you do not agree with any of these terms, do not use our services.',
        'es' => 'Al acceder y utilizar los servicios de J&MDCleaning, aceptas estar obligado por estos términos y condiciones, así como por nuestra política de privacidad.'
    ],
    'terms_section2_title' => [
        'en' => 'Service Description',
        'es' => 'Descripción del Servicio'
    ],
    'terms_section2_text' => [
        'en' => 'We offer professional cleaning services for carpets, restaurants, and offices with over 20 years of experience.',
        'es' => 'Ofrecemos servicios de limpieza profesional para alfombras, restaurantes, y oficinas con más de 20 años de experiencia.'
    ],
    'terms_section3_title' => [
        'en' => 'Use of Service',
        'es' => 'Uso del Servicio'
    ],
    'terms_reservation_label' => [
        'en' => 'Reservations:',
        'es' => 'Reservas:'
    ],
    'terms_reservation_text' => [
        'en' => 'Subject to availability through our website.',
        'es' => 'Sujetas a disponibilidad vía web.'
    ],
    'terms_cancellation_label' => [
        'en' => 'Cancellations:',
        'es' => 'Cancelaciones:'
    ],
    'terms_cancellation_text' => [
        'en' => 'Must be made 24h in advance to avoid fees.',
        'es' => 'Mínimo 24h antes para evitar recargos.'
    ],
    'terms_access_label' => [
        'en' => 'Access:',
        'es' => 'Acceso:'
    ],
    'terms_access_text' => [
        'en' => 'Adequate access to property must be provided.',
        'es' => 'Se debe garantizar el ingreso a la propiedad.'
    ],
    'terms_section4_title' => [
        'en' => 'Data Processing',
        'es' => 'Tratamiento de Datos'
    ],
    'terms_data_point1' => [
        'en' => 'Collection of name, address, and email to improve services.',
        'es' => 'Recopilamos información personal para gestionar reservas y mejorar nuestra oferta de servicios.'
    ],
    'terms_data_point2' => [
        'en' => 'Implemented security measures to protect your info.',
        'es' => 'Implementamos medidas de seguridad para proteger tu información y no compartimos datos sin consentimiento.'
    ],
    'terms_contact_text' => [
        'en' => 'Questions? Contact us at',
        'es' => '¿Dudas? Contáctanos en'
    ],
    'terms_or' => [
        'en' => 'or',
        'es' => 'o al'
    ],

    // ==================== FOOTER ====================
    'footer_around_us' => [
        'en' => 'Around us!',
        'es' => '¡Alrededor de nosotros!'
    ],
    'footer_copyright' => [
        'en' => '© 2024 J&MD Cleaning is a registered trademark. All rights reserved.',
        'es' => '© 2024 J&MDCleanning es una marca registrada. Todos los derechos reservados.'
    ],

    // ==================== FOOTER LOCATIONS (Internal Linking for Local SEO) ====================
    'footer_services_title' => [
        'en' => 'Service Areas',
        'es' => 'Áreas de Servicio'
    ],
    'footer_city_boston' => [
        'en' => 'Cleaning in Boston, MA',
        'es' => 'Limpieza en Boston, MA'
    ],
    'footer_city_cambridge' => [
        'en' => 'Cleaning in Cambridge, MA',
        'es' => 'Limpieza en Cambridge, MA'
    ],
    'footer_city_worcester' => [
        'en' => 'Cleaning in Worcester, MA',
        'es' => 'Limpieza en Worcester, MA'
    ],
    'footer_city_quincy' => [
        'en' => 'Cleaning in Quincy, MA',
        'es' => 'Limpieza en Quincy, MA'
    ],
    'footer_city_lowell' => [
        'en' => 'Cleaning in Lowell, MA',
        'es' => 'Limpieza en Lowell, MA'
    ],
    'footer_city_brockton' => [
        'en' => 'Cleaning in Brockton, MA',
        'es' => 'Limpieza en Brockton, MA'
    ],
];

// ===================== CREAR ATAJO $t (Mapeo Simple) =====================
/**
 * Transforma el array multidimensional en un mapeo simple:
 * Antes: $t['page_title'] = ['en' => '...', 'es' => '...']
 * Después: $t['page_title'] = 'String en idioma actual'
 */
$t = [];
foreach ($texts as $key => $translation) {
    $t[$key] = $translation[$language];
}

?>
