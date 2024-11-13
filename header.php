<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="Transformative Energy Movement offers personalized Reiki, Chakra Healing, and spiritual guidance to bring balance and healing energy to your life.">
        <meta name="keywords" content="energy healing, Reiki, chakra alignment, spiritual healing, wellness">
        <link rel="canonical" href="https://www.transformativeenergymovement.com">
        <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Transformative Energy Movement",
                "description": "Energy Healing services including Reiki, Chakra Alignment, and more.",
                "url": "https://www.transformativeenergymovement.com",
                "logo": "https://www.transformativeenergymovement.com/assets/css/images/tem-logo.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+1-314-560-9010",
                    "contactType": "Customer Service"
                },
                "sameAs": [
                    "https://www.facebook.com/YourPage",
                    "https://www.instagram.com/YourPage"
                ]
            }
        </script>

    <?php wp_head();?>


</head>
<body>

    <header>
        <div class="nav-container">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        //'menu' => 'Top Bar',
                        'menu_class' => 'top-bar'
                    )
                );
            ?>
            <?php get_search_form();?>
        </div>
    </header>
    