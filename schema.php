<?php
/**
 * ============================================================
 * JSON-LD SCHEMA PARA SEO LOCAL
 * J&MD CLEANING - STRUCTURED DATA MARKUP
 * ============================================================
 * 
 * Este archivo genera el marcado de datos estructurados en JSON-LD
 * que ayuda a Google a entender que somos un negocio local.
 * Se incluye dinámicamente en cada página antes del cierre </body>
 */

// Obtener variables de traducción disponibles
// Si no están disponibles, incluir translations.php
if (!isset($t)) {
    require_once 'translations.php';
}

// Datos de la empresa (constantes)
$businessData = [
    'name' => 'J&MD Cleaning',
    'email' => $t['contact_email'],
    'phone' => $t['contact_whatsapp'],
    'address' => [
        'locality' => 'Boston',
        'region' => 'MA',
        'country' => 'US',
    ],
    'servesCities' => [
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Boston, MA'
        ],
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Cambridge, MA'
        ],
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Worcester, MA'
        ],
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Quincy, MA'
        ],
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Lowell, MA'
        ],
        [
            '@type' => 'AdministrativeArea',
            'name' => 'Brockton, MA'
        ]
    ],
    'priceRange' => '$$',
    'description' => 'Professional carpet, furniture and upholstery cleaning services in Massachusetts. 20+ years of experience.'
];

// Construir el JSON-LD Schema
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => $businessData['name'],
    'description' => $businessData['description'],
    'url' => 'https://jmdcleaning.com',
    'telephone' => $businessData['phone'],
    'email' => $businessData['email'],
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => $businessData['address']['locality'],
        'addressRegion' => $businessData['address']['region'],
        'addressCountry' => $businessData['address']['country']
    ],
    'areaServed' => $businessData['servesCities'],
    'priceRange' => $businessData['priceRange'],
    'image' => 'https://jmdcleaning.com/assets/img/icons/icon-new.png',
    'sameAs' => [
        'https://www.facebook.com/jmdcleaning',
        'https://www.instagram.com/jmdcleaning'
    ]
];

// Codificar a JSON y envolver en etiqueta script
?>
<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
