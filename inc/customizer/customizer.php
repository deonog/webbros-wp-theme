<?php
    function wpb_customize_register($wp_customize){

    /*----------------------------------------*/
    /*  Logo
    /*----------------------------------------*/

    $wp_customize->add_section('Global', array(
        'title' => __('Logo', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Logo 

    $wp_customize->add_setting('logo_img', array(
        'default'  => get_bloginfo('template_directory').'/img/logo.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_img', array(
        'label'  => __('Logo Image', 'webbros'),
        'section'  => 'Global', 
        'settings'  => 'logo_img',
        'priority' => 1
    )));

    $wp_customize->selective_refresh->add_partial( 'logo_img', array(
        'selector' => '.logo_img',
    ) );

    // Preloader Text 

    $wp_customize->add_setting('pre_text', array(
        'default'  => _x('Lädt...', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('pre_text', array(
        'label'  => __('Preloader Text', 'webbros'),
        'section'  => 'Global', 
        'priority' => 2
    ));

    /*----------------------------------------*/
    /*  Contact Details
    /*----------------------------------------*/

    $wp_customize->add_section('Contact Details', array(
        'title' => __('Kontakt', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Header Image

    $wp_customize->add_setting('contact_header_img', array(
        'default'  => get_bloginfo('template_directory').'/img/header-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_header_img', array(
        'label'  => __('Kontak: Header Image', 'webbros'),
        'section'  => 'Contact Details', 
        'settings'  => 'contact_header_img',
        'priority' => 1
    )));

    $wp_customize->selective_refresh->add_partial( 'contact_header_img', array(
        'selector' => '.contact_header_img',
    ) );

    // Location 

    $wp_customize->add_setting('contact_location', array(
        'default'  => _x('Dortmund', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_location', array(
        'label'  => __('Location', 'webbros'),
        'section'  => 'Contact Details', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'contact_location', array(
        'selector' => '.contact_location',
    ) );

    // Email

    $wp_customize->add_setting('contact_email', array(
        'default'  => _x('email@webbros.de', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'  => __('Email', 'webbros'),
        'section'  => 'Contact Details', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'contact_email', array(
        'selector' => '.contact_email',
    ) );

    // Phone

    $wp_customize->add_setting('contact_phone', array(
        'default'  => _x('+49 231 12345678', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'  => __('Telefonnummer', 'webbros'),
        'section'  => 'Contact Details', 
        'priority' => 4
    ));
    
    $wp_customize->selective_refresh->add_partial( 'contact_phone', array(
        'selector' => '.contact_phone',
    ) );

    /*----------------------------------------*/
    /*  Social Media
    /*----------------------------------------*/

    $wp_customize->add_section('Social Media', array(
        'title' => __('Social Media', 'webbros'),
        'description'  => sprintf(__('Bitte Font Awesome code und Link einfügen','webbros')),
        'priority'  => 130
    ));

    /* Icon 1 */

    // Icon

    $wp_customize->add_setting('social_icon_1', array(
        'default'  => _x('fab fa-facebook-f', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_1', array(
        'label'  => __('Social Media 1: Icon', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 1
    ));

    // Link

    $wp_customize->add_setting('social_icon_1_link', array(
        'default'  => _x('#', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_1_link', array(
        'label'  => __('Social Media 1: Link', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 2
    ));

    /* Icon 2 */

    // Icon

    $wp_customize->add_setting('social_icon_2', array(
        'default'  => _x('fab fa-instagram', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_2', array(
        'label'  => __('Social Media 2: Icon', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 3
    ));

    // Link

    $wp_customize->add_setting('social_icon_2_link', array(
        'default'  => _x('#', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_2_link', array(
        'label'  => __('Social Media 2: Link', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 4
    ));

    /* Icon 3 */

    // Icon

    $wp_customize->add_setting('social_icon_3', array(
        'default'  => _x('fab fa-linkedin', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_3', array(
        'label'  => __('Social Media 3: Icon', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 5
    ));

    // Link

    $wp_customize->add_setting('social_icon_3_link', array(
        'default'  => _x('#', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_3_link', array(
        'label'  => __('Social Media 3: Link', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 6
    ));

    /* Icon 4 */

    // Icon

    $wp_customize->add_setting('social_icon_4', array(
        'default'  => _x('fab fa-xing', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_4', array(
        'label'  => __('Social Media 4: Icon', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 7
    ));

    // Link

    $wp_customize->add_setting('social_icon_4_link', array(
        'default'  => _x('#', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('social_icon_4_link', array(
        'label'  => __('Social Media 4: Link', 'webbros'),
        'section'  => 'Social Media', 
        'priority' => 8
    ));

    /*----------------------------------------*/
    /*  Background Illustrations
    /*----------------------------------------*/

    $wp_customize->add_section('Background Illustrations', array(
        'title' => __('Background Illustrations', 'webbros'),
        'description'  => sprintf(__('Hintergrund Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    /* Image 1 */

    $wp_customize->add_setting('bg_img', array(
        'default'  => get_bloginfo('template_directory').'/img/bg-illustration-2.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bg_img', array(
        'label'  => __('Image 1', 'webbros'),
        'section'  => 'Background Illustrations', 
        'settings'  => 'bg_img',
        'priority' => 1
    )));

    /* Image 2 */

    $wp_customize->add_setting('bg_img_2', array(
        'default'  => get_bloginfo('template_directory').'/img/bg-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bg_img_2', array(
        'label'  => __('Image 2', 'webbros'),
        'section'  => 'Background Illustrations', 
        'settings'  => 'bg_img_2',
        'priority' => 2
    )));

    /*----------------------------------------*/
    /*  Homepage
    /*----------------------------------------*/

    $wp_customize->add_section('Home', array(
        'title' => __('Home', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    /* Header */

    // Header Heading 1

    $wp_customize->add_setting('home_h1', array(
        'default'  => _x('Professionelles Webdesign –
        <span>Einfach, schnell, kostengünstig</span>', 'webbros'),
        'type'  => 'theme_mod',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('home_h1', array(
        'label'  => __('Header: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 1
    ));

    $wp_customize->selective_refresh->add_partial( 'home_h1', array(
    'selector' => '.home_h1',
    ) );

    // Header Paragraph

    $wp_customize->add_setting('home_p', array(
        'default'  => _x('Wir erstellen Ihren professionellen Auftritt im Internet mit
        einer bewährten Vorgehensweise innerhalb kürzester Zeit zu
        besten Konditionen und sind auch danach für Sie da!', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_p', array(
        'label'  => __('Header: Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 2
    ));

    $wp_customize->selective_refresh->add_partial( 'home_p', array(
        'selector' => '.home_p',
    ) );

    // Header Image

    $wp_customize->add_setting('home_header_img', array(
        'default'  => get_bloginfo('template_directory').'/img/header-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_header_img', array(
        'label'  => __('Header: Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_header_img',
        'priority' => 3
    )));

    $wp_customize->selective_refresh->add_partial( 'home_header_img', array(
        'selector' => '.home_header_img',
    ) );

    /* Leistungen */

    // Leistungen Span

    $wp_customize->add_setting('home_services_span', array(
        'default'  => _x('Unsere Leistungen', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_services_span', array(
        'label'  => __('Leistungen: Span', 'webbros'),
        'section'  => 'Home', 
        'priority' => 4
    ));

    $wp_customize->selective_refresh->add_partial( 'home_services_span', array(
        'selector' => '.home_services_span',
    ) );

    // Leistungen Span

    $wp_customize->add_setting('home_services_h2', array(
        'default'  => _x('Alles, was es braucht. Nicht mehr und nicht weniger.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_services_h2', array(
        'label'  => __('Leistungen: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 5
    ));

    $wp_customize->selective_refresh->add_partial( 'home_services_h2', array(
        'selector' => '.home_services_h2',
    ) );

    /* Service 1 */

    // Image

    $wp_customize->add_setting('home_service_1_img', array(
        'default'  => get_bloginfo('template_directory').'/img/design-icon.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_service_1_img', array(
        'label'  => __('Leistungen: Leistung 1 Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_service_1_img',
        'priority' => 6
    )));

    $wp_customize->selective_refresh->add_partial( 'home_service_1_img', array(
        'selector' => '.home_service_1_img',
    ) );

    // Title

    $wp_customize->add_setting('home_service_1_title', array(
        'default'  => _x('Web Design', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_service_1_title', array(
        'label'  => __('Leistungen: Leistung 1 Titel', 'webbros'),
        'section'  => 'Home', 
        'priority' => 7
    ));

    $wp_customize->selective_refresh->add_partial( 'home_service_1_title', array(
        'selector' => '.home_service_1_title',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_service_1_paragraph', array(
        'default'  => _x('Design, Layout und Seitenstruktur sowie Farben, Schriften und
        Icons. Auf Wunsch auch Bilder und Texte.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_service_1_paragraph', array(
        'label'  => __('Leistungen: Leistung 1 Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 8
    ));

    $wp_customize->selective_refresh->add_partial( 'home_service_1_paragraph', array(
        'selector' => '.home_service_1_paragraph',
    ) );

    /* Service 2 */

    // Image

    $wp_customize->add_setting('home_service_2_img', array(
        'default'  => get_bloginfo('template_directory').'/img/dev-icon.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_service_2_img', array(
        'label'  => __('Leistungen: Leistung 2 Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_service_2_img',
        'priority' => 9
    )));

    $wp_customize->selective_refresh->add_partial( 'home_service_2_img', array(
        'selector' => '.home_service_2_img',
    ) );

    // Title

    $wp_customize->add_setting('home_service_2_title', array(
        'default'  => _x('Webentwicklung', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_service_2_title', array(
        'label'  => __('Leistungen: Leistung 2 Titel', 'webbros'),
        'section'  => 'Home', 
        'priority' => 10
    ));

    $wp_customize->selective_refresh->add_partial( 'home_service_2_title', array(
        'selector' => '.home_service_2_title',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_service_2_paragraph', array(
        'default'  => _x('Wenn Ihre Website Funktionalitäten braucht, die über den
        Standard hinausgehen. Wir finden Lösungen für Sie!', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_service_2_paragraph', array(
        'label'  => __('Leistungen: Leistung 2 Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 11
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_service_2_paragraph', array(
        'selector' => '.home_service_2_paragraph',
    ) );

    /* Service 2 */

    // Image

    $wp_customize->add_setting('home_service_3_img', array(
        'default'  => get_bloginfo('template_directory').'/img/hosting-icon.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_service_3_img', array(
        'label'  => __('Leistungen: Leistung 3 Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_service_3_img',
        'priority' => 12
    )));

    $wp_customize->selective_refresh->add_partial( 'home_service_3_img', array(
        'selector' => '.home_service_3_img',
    ) );

    // Title

    $wp_customize->add_setting('home_service_3_title', array(
        'default'  => _x('Hosting', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_service_3_title', array(
        'label'  => __('Leistungen: Leistung 3 Titel', 'webbros'),
        'section'  => 'Home', 
        'priority' => 13
    ));

    $wp_customize->selective_refresh->add_partial( 'home_service_3_title', array(
        'selector' => '.home_service_3_title',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_service_3_paragraph', array(
        'default'  => _x('Nach hohen Standards mit Domains, Webspace, CMS, SSL und Mail.
        Ausgelegt für Performance und Sicherheit.', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_service_3_paragraph', array(
        'label'  => __('Leistungen: Leistung 3 Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 14
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_service_3_paragraph', array(
        'selector' => '.home_service_3_paragraph',
    ) );

    /* Über Uns */

    $wp_customize->add_setting('home_about_img', array(
        'default'  => get_bloginfo('template_directory').'/img/about-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_about_img', array(
        'label'  => __('Über Uns: Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_about_img',
        'priority' => 15
    )));

    $wp_customize->selective_refresh->add_partial( 'home_about_img', array(
        'selector' => '.home_about_img',
    ) );

    // Span

    $wp_customize->add_setting('home_about_span', array(
        'default'  => _x('Über Uns', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_about_span', array(
        'label'  => __('Über Uns: Span', 'webbros'),
        'section'  => 'Home', 
        'priority' => 16
    ));

    $wp_customize->selective_refresh->add_partial( 'home_about_span', array(
        'selector' => '.home_about_span',
    ) );

    // Heading

    $wp_customize->add_setting('home_about_heading', array(
        'default'  => _x('Wir sind spezialisiert auf kleine und mittlere Unternehmen und
        Einzelunternehmer.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_about_heading', array(
        'label'  => __('Über Uns: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 17
    ));

    $wp_customize->selective_refresh->add_partial( 'home_about_heading', array(
        'selector' => '.home_about_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_about_paragraph', array(
        'default'  => _x('Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
        sind wir der richtige Partner mit einem pragmatischen Ansatz,
        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_about_paragraph', array(
        'label'  => __('Über Uns: Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 18
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_about_paragraph', array(
        'selector' => '.home_about_paragraph',
    ) );

    /* Projekte */

    // Span

    $wp_customize->add_setting('home_projects_span', array(
        'default'  => _x('Unsere Projekte', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_projects_span', array(
        'label'  => __('Projekte: Span', 'webbros'),
        'section'  => 'Home', 
        'priority' => 19
    ));

    $wp_customize->selective_refresh->add_partial( 'home_projects_span', array(
        'selector' => '.home_projects_span',
    ) );

    // Heading

    $wp_customize->add_setting('home_projects_heading', array(
        'default'  => _x('Ein kleiner Einblick in unsere Arbeit und die Ergebnisse für
        unsere Kunden.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_projects_heading', array(
        'label'  => __('Projects: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 20
    ));

    $wp_customize->selective_refresh->add_partial( 'home_projects_heading', array(
        'selector' => '.home_projects_heading',
    ) );

    /* Testimonials */

    // Span

    $wp_customize->add_setting('home_testimonials_span', array(
        'default'  => _x('Erfahrungen', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_testimonials_span', array(
        'label'  => __('Erfahrungen: Span', 'webbros'),
        'section'  => 'Home', 
        'priority' => 21
    ));

    $wp_customize->selective_refresh->add_partial( 'home_testimonials_span', array(
        'selector' => '.home_testimonials_span',
    ) );

    // Heading

    $wp_customize->add_setting('home_testimonials_heading', array(
        'default'  => _x('Was unsere Kunden über uns denken', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_testimonials_heading', array(
        'label'  => __('Erfahrungen: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 22
    ));

    $wp_customize->selective_refresh->add_partial( 'home_testimonials_heading', array(
        'selector' => '.home_testimonials_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_testimonials_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempora laudantium dolore, expedita quo provident', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_testimonials_paragraph', array(
        'label'  => __('Erfahrungen: Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 23
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_testimonials_paragraph', array(
        'selector' => '.home_testimonials_paragraph',
    ) );

    /* Kontakt */

    // Span

    $wp_customize->add_setting('home_contact_span', array(
        'default'  => _x('Kontakt', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_contact_span', array(
        'label'  => __('Kontakt: Span', 'webbros'),
        'section'  => 'Home', 
        'priority' => 24
    ));

    $wp_customize->selective_refresh->add_partial( 'home_contact_span', array(
        'selector' => '.home_contact_span',
    ) );

    // Heading

    $wp_customize->add_setting('home_contact_heading', array(
        'default'  => _x('Nehmen Sie Kontakt mit uns auf', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('home_contact_heading', array(
        'label'  => __('Kontakt: Heading', 'webbros'),
        'section'  => 'Home', 
        'priority' => 25
    ));

    $wp_customize->selective_refresh->add_partial( 'home_contact_heading', array(
        'selector' => '.home_contact_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('home_contact_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempora laudantium dolore, expedita quo provident', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_contact_paragraph', array(
        'label'  => __('Kontakt: Paragraph', 'webbros'),
        'section'  => 'Home', 
        'priority' => 26
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_contact_paragraph', array(
        'selector' => '.home_contact_paragraph',
    ) );

    // Image

    $wp_customize->add_setting('home_contact_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-7.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_contact_img', array(
        'label'  => __('Kontakt: Image', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'home_contact_img',
        'priority' => 27
    )));

    $wp_customize->selective_refresh->add_partial( 'home_contact_img', array(
        'selector' => '.home_contact_img',
    ) );

    /* Technologies */

    // Technology 1

    $wp_customize->add_setting('technology_1', array(
        'default'  => get_bloginfo('template_directory').'/img/wordpress-logo.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'technology_1', array(
        'label'  => __('Technologien: 1', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'technology_1',
        'priority' => 28
    )));

    $wp_customize->selective_refresh->add_partial( 'technology_1', array(
        'selector' => '.technology_1',
    ) );

    // Technology 2

    $wp_customize->add_setting('technology_2', array(
        'default'  => get_bloginfo('template_directory').'/img/woocommerce-logo.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'technology_2', array(
        'label'  => __('Technologien: 2', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'technology_2',
        'priority' => 29
    )));

    $wp_customize->selective_refresh->add_partial( 'technology_2', array(
        'selector' => '.technology_2',
    ) );

    // Technology 3

    $wp_customize->add_setting('technology_3', array(
        'default'  => get_bloginfo('template_directory').'/img/webflow-logo.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'technology_3', array(
        'label'  => __('Technologien: 3', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'technology_3',
        'priority' => 30
    )));

    $wp_customize->selective_refresh->add_partial( 'technology_3', array(
        'selector' => '.technology_3',
    ) );

    // Technology 4

    $wp_customize->add_setting('technology_4', array(
        'default'  => get_bloginfo('template_directory').'/img/aws-logo.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'technology_4', array(
        'label'  => __('Technologien: 4', 'webbros'),
        'section'  => 'Home', 
        'settings'  => 'technology_4',
        'priority' => 31
    )));

    $wp_customize->selective_refresh->add_partial( 'technology_4', array(
        'selector' => '.technology_4',
    ) );

    /*----------------------------------------*/
    /*  Why Choose
    /*----------------------------------------*/

    $wp_customize->add_section('Why Choose', array(
        'title' => __('Why Choose Section', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Span

    $wp_customize->add_setting('whychoose_span', array(
        'default'  => _x('Warum Webbros?', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_span', array(
        'label'  => __('Why Choose: Span', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 1
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_span', array(
        'selector' => '.whychoose_span',
    ) );

    // Heading

    $wp_customize->add_setting('whychoose_heading', array(
        'default'  => _x('Wir beraten, unterstützen und erstellen', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_heading', array(
        'label'  => __('Warum: Heading', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 2
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_heading', array(
        'selector' => '.whychoose_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('whychoose_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Nesciunt architecto eos ut dolore eaque assumenda harum aut
        expedita voluptates rerum iusto accusamus doloribus eveniet
        blanditiis repudiandae ex, pariatur nemo tenetur!', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('whychoose_paragraph', array(
        'label'  => __('Warum: Paragraph', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 3
    ));
    
    $wp_customize->selective_refresh->add_partial( 'whychoose_paragraph', array(
        'selector' => '.whychoose_paragraph',
    ) );

    /* Why Choose 1 */

    // Image

    $wp_customize->add_setting('whychoose_1_img', array(
        'default'  => get_bloginfo('template_directory').'/img/responsive.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'whychoose_1_img', array(
        'label'  => __('Warum 1: Image', 'webbros'),
        'section'  => 'Why Choose', 
        'settings'  => 'whychoose_1_img',
        'priority' => 4
    )));

    $wp_customize->selective_refresh->add_partial( 'whychoose_1_img', array(
        'selector' => '.whychoose_1_img',
    ) );

    // Title

    $wp_customize->add_setting('whychoose_1_title', array(
        'default'  => _x('Responsive Design', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_1_title', array(
        'label'  => __('Warum 1: Heading', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 5
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_1_title', array(
        'selector' => '.whychoose_1_title',
    ) );

    /* Why Choose 2 */

    // Image

    $wp_customize->add_setting('whychoose_2_img', array(
        'default'  => get_bloginfo('template_directory').'/img/help.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'whychoose_2_img', array(
        'label'  => __('Warum 2: Image', 'webbros'),
        'section'  => 'Why Choose', 
        'settings'  => 'whychoose_2_img',
        'priority' => 6
    )));

    $wp_customize->selective_refresh->add_partial( 'whychoose_2_img', array(
        'selector' => '.whychoose_2_img',
    ) );

    // Title

    $wp_customize->add_setting('whychoose_2_title', array(
        'default'  => _x('24/7 Support', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_2_title', array(
        'label'  => __('Warum 2: Heading', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 7
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_2_title', array(
        'selector' => '.whychoose_2_title',
    ) );

    /* Why Choose 3 */

    // Image

    $wp_customize->add_setting('whychoose_3_img', array(
        'default'  => get_bloginfo('template_directory').'/img/checklist.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'whychoose_3_img', array(
        'label'  => __('Warum 3: Image', 'webbros'),
        'section'  => 'Why Choose', 
        'settings'  => 'whychoose_3_img',
        'priority' => 8
    )));

    $wp_customize->selective_refresh->add_partial( 'whychoose_3_img', array(
        'selector' => '.whychoose_3_img',
    ) );

    // Title

    $wp_customize->add_setting('whychoose_3_title', array(
        'default'  => _x('Robuster Plan', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_3_title', array(
        'label'  => __('Warum 3: Heading', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 9
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_3_title', array(
        'selector' => '.whychoose_3_title',
    ) );

    /* Why Choose 4 */

    // Image

    $wp_customize->add_setting('whychoose_4_img', array(
        'default'  => get_bloginfo('template_directory').'/img/ruhrpott.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'whychoose_4_img', array(
        'label'  => __('Warum 4: Image', 'webbros'),
        'section'  => 'Why Choose', 
        'settings'  => 'whychoose_4_img',
        'priority' => 10
    )));

    $wp_customize->selective_refresh->add_partial( 'whychoose_4_img', array(
        'selector' => '.whychoose_4_img',
    ) );

    // Title

    $wp_customize->add_setting('whychoose_4_title', array(
        'default'  => _x('Made im Pott', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('whychoose_4_title', array(
        'label'  => __('Warum 4: Heading', 'webbros'),
        'section'  => 'Why Choose', 
        'priority' => 11
    ));

    $wp_customize->selective_refresh->add_partial( 'whychoose_4_title', array(
        'selector' => '.whychoose_4_title',
    ) );

    /*----------------------------------------*/
    /*  About Us
    /*----------------------------------------*/

    $wp_customize->add_section('About', array(
        'title' => __('About Us', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Header Image

    $wp_customize->add_setting('about_header_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-1.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_header_img', array(
        'label'  => __('Über Uns: Header Image', 'webbros'),
        'section'  => 'About', 
        'settings'  => 'about_header_img',
        'priority' => 1
    )));

    $wp_customize->selective_refresh->add_partial( 'about_header_img', array(
        'selector' => '.about_header_img',
    ) );

    // First Section

    // Img

    $wp_customize->add_setting('about_about_img_1', array(
        'default'  => get_bloginfo('template_directory').'/img/about-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_about_img_1', array(
        'label'  => __('Über Uns: Section 1 Image', 'webbros'),
        'section'  => 'About', 
        'settings'  => 'about_about_img_1',
        'priority' => 2
    )));

    $wp_customize->selective_refresh->add_partial( 'about_about_img_1', array(
        'selector' => '.about_about_img_1',
    ) );

    // Span

    $wp_customize->add_setting('about_about_span_1', array(
        'default'  => _x('Über Uns', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('about_about_span_1', array(
        'label'  => __('Über Uns: Section 1 Span', 'webbros'),
        'section'  => 'About', 
        'priority' => 3
    ));

    $wp_customize->selective_refresh->add_partial( 'about_about_span_1', array(
        'selector' => '.about_about_span_1',
    ) );

    // Heading

    $wp_customize->add_setting('about_about_heading_1', array(
        'default'  => _x('Wir sind spezialisiert auf kleine und mittlere Unternehmen und
        Einzelunternehmer.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('about_about_heading_1', array(
        'label'  => __('Über Uns: Section 1 Heading', 'webbros'),
        'section'  => 'About', 
        'priority' => 4
    ));

    $wp_customize->selective_refresh->add_partial( 'about_about_heading_1', array(
        'selector' => '.about_about_heading_1',
    ) );

    // Paragraph

    $wp_customize->add_setting('about_about_paragraph_1', array(
        'default'  => _x('Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
        sind wir der richtige Partner mit einem pragmatischen Ansatz,
        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_paragraph_1', array(
        'label'  => __('Über Uns: Section 1 Paragraph', 'webbros'),
        'section'  => 'About', 
        'priority' => 5
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_paragraph_1', array(
        'selector' => '.about_about_paragraph_1',
    ) );

    // Second Section

    // Img

    $wp_customize->add_setting('about_about_img_2', array(
        'default'  => get_bloginfo('template_directory').'/img/about-illustration.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_about_img_2', array(
        'label'  => __('Über Uns: Section 2 Image', 'webbros'),
        'section'  => 'About', 
        'settings'  => 'about_about_img_2',
        'priority' => 6
    )));

    $wp_customize->selective_refresh->add_partial( 'about_about_img_2', array(
        'selector' => '.about_about_img_2',
    ) );

    // Span

    $wp_customize->add_setting('about_about_span_2', array(
        'default'  => _x('Woher wir kommen', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('about_about_span_2', array(
        'label'  => __('Über Uns: Section 2 Span', 'webbros'),
        'section'  => 'About', 
        'priority' => 7
    ));

    $wp_customize->selective_refresh->add_partial( 'about_about_span_2', array(
        'selector' => '.about_about_span_2',
    ) );

    // Heading

    $wp_customize->add_setting('about_about_heading_2', array(
        'default'  => _x('Web Design Made Im Pott', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('about_about_heading_2', array(
        'label'  => __('Über Uns: Section 2 Heading', 'webbros'),
        'section'  => 'About', 
        'priority' => 8
    ));

    $wp_customize->selective_refresh->add_partial( 'about_about_heading_2', array(
        'selector' => '.about_about_heading_2',
    ) );

    // Paragraph

    $wp_customize->add_setting('about_about_paragraph_2', array(
        'default'  => _x('Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
        sind wir der richtige Partner mit einem pragmatischen Ansatz,
        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_paragraph_2', array(
        'label'  => __('Über Uns: Section 2 Paragraph', 'webbros'),
        'section'  => 'About', 
        'priority' => 9
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_paragraph_2', array(
        'selector' => '.about_about_paragraph_2',
    ) );

    // Banner

    // Heading

    $wp_customize->add_setting('about_banner_heading', array(
        'default'  => _x('Lass uns zusammenarbeiten', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_banner_heading', array(
        'label'  => __('Über Uns: Banner Heading', 'webbros'),
        'section'  => 'About', 
        'priority' => 10
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_banner_heading', array(
        'selector' => '.about_banner_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('about_banner_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi,
        tenetur.', 'webbros'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_banner_paragraph', array(
        'label'  => __('Über Uns: Banner Paragraph', 'webbros'),
        'section'  => 'About', 
        'priority' => 11
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_banner_paragraph', array(
        'selector' => '.about_banner_paragraph',
    ) );

    /*----------------------------------------*/
    /*  Roadmap
    /*----------------------------------------*/

    $wp_customize->add_section('Roadmap', array(
        'title' => __('Roadmap', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Span

    $wp_customize->add_setting('services_roadmap_span', array(
        'default'  => _x('Der Ablauf', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_roadmap_span', array(
        'label'  => __('Roadmap Span', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 1
    ));

    $wp_customize->selective_refresh->add_partial( 'services_roadmap_span', array(
        'selector' => '.services_roadmap_span',
    ) );

    // Heading

    $wp_customize->add_setting('services_roadmap_heading', array(
        'default'  => _x('Die Webbros Roadmap', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_roadmap_heading', array(
        'label'  => __('Roadmap Heading', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 2
    ));

    $wp_customize->selective_refresh->add_partial( 'services_roadmap_heading', array(
        'selector' => '.services_roadmap_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('services_roadmap_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempora laudantium dolore, expedita quo provident', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_roadmap_paragraph', array(
        'label'  => __('Roadmap Paragraph', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 3
    ));

    $wp_customize->selective_refresh->add_partial( 'services_roadmap_paragraph', array(
        'selector' => '.services_roadmap_paragraph',
    ) );

    // First Item

    // Img

    $wp_customize->add_setting('roadmap_first_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-3.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'roadmap_first_img', array(
        'label'  => __('Roadmap First Item Image', 'webbros'),
        'section'  => 'Roadmap', 
        'settings'  => 'roadmap_first_img',
        'priority' => 4
    )));

    $wp_customize->selective_refresh->add_partial( 'roadmap_first_img', array(
        'selector' => '.roadmap_first_img',
    ) );

    // Heading

    $wp_customize->add_setting('roadmap_first_heading', array(
        'default'  => _x('Strategie', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_first_heading', array(
        'label'  => __('Roadmap First Item Heading', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 5
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_first_heading', array(
        'selector' => '.roadmap_first_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('roadmap_first_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
        possimus laboriosam obcaecati, voluptatibus odio ullam
        mollitia iure est porro explicabo quod velit eligendi natus.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_first_paragraph', array(
        'label'  => __('Roadmap First Item Paragraph', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 6
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_first_paragraph', array(
        'selector' => '.roadmap_first_paragraph',
    ) );

    // Second Item

    // Img

    $wp_customize->add_setting('roadmap_second_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-4.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'roadmap_second_img', array(
        'label'  => __('Roadmap Second Item Image', 'webbros'),
        'section'  => 'Roadmap', 
        'settings'  => 'roadmap_second_img',
        'priority' => 7
    )));

    $wp_customize->selective_refresh->add_partial( 'roadmap_second_img', array(
        'selector' => '.roadmap_second_img',
    ) );

    // Heading

    $wp_customize->add_setting('roadmap_second_heading', array(
        'default'  => _x('Design', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_second_heading', array(
        'label'  => __('Roadmap Second Item Heading', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 8
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_second_heading', array(
        'selector' => '.roadmap_second_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('roadmap_second_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
        possimus laboriosam obcaecati, voluptatibus odio ullam
        mollitia iure est porro explicabo quod velit eligendi natus.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_second_paragraph', array(
        'label'  => __('Roadmap Second Item Paragraph', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 9
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_second_paragraph', array(
        'selector' => '.roadmap_second_paragraph',
    ) );

    // Third Item

    // Img

    $wp_customize->add_setting('roadmap_third_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-5.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'roadmap_third_img', array(
        'label'  => __('Roadmap Third Item Image', 'webbros'),
        'section'  => 'Roadmap', 
        'settings'  => 'roadmap_third_img',
        'priority' => 10
    )));

    $wp_customize->selective_refresh->add_partial( 'roadmap_third_img', array(
        'selector' => '.roadmap_third_img',
    ) );

    // Heading

    $wp_customize->add_setting('roadmap_third_heading', array(
        'default'  => _x('Entwicklung', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_third_heading', array(
        'label'  => __('Roadmap Third Item Heading', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 11
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_third_heading', array(
        'selector' => '.roadmap_third_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('roadmap_third_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
        possimus laboriosam obcaecati, voluptatibus odio ullam
        mollitia iure est porro explicabo quod velit eligendi natus.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_third_paragraph', array(
        'label'  => __('Roadmap Third Item Paragraph', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 12
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_third_paragraph', array(
        'selector' => '.roadmap_third_paragraph',
    ) );

    // Third Item

    // Img

    $wp_customize->add_setting('roadmap_fourth_img', array(
        'default'  => get_bloginfo('template_directory').'/img/illustration-6.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'roadmap_fourth_img', array(
        'label'  => __('Roadmap Fourth Item Image', 'webbros'),
        'section'  => 'Roadmap', 
        'settings'  => 'roadmap_fourth_img',
        'priority' => 13
    )));

    $wp_customize->selective_refresh->add_partial( 'roadmap_fourth_img', array(
        'selector' => '.roadmap_fourth_img',
    ) );

    // Heading

    $wp_customize->add_setting('roadmap_fourth_heading', array(
        'default'  => _x('Support', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_fourth_heading', array(
        'label'  => __('Roadmap Fourth Item Heading', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 14
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_fourth_heading', array(
        'selector' => '.roadmap_fourth_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('roadmap_fourth_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
        possimus laboriosam obcaecati, voluptatibus odio ullam
        mollitia iure est porro explicabo quod velit eligendi natus.', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('roadmap_fourth_paragraph', array(
        'label'  => __('Roadmap Fourth Item Paragraph', 'webbros'),
        'section'  => 'Roadmap', 
        'priority' => 15
    ));

    $wp_customize->selective_refresh->add_partial( 'roadmap_fourth_paragraph', array(
        'selector' => '.roadmap_fourth_paragraph',
    ) );

    /*----------------------------------------*/
    /*  Prices
    /*----------------------------------------*/

    $wp_customize->add_section('Prices', array(
        'title' => __('Preise', 'webbros'),
        'description'  => sprintf(__('Bitte Texte und Bilder einfügen','webbros')),
        'priority'  => 130
    ));

    // Span

    $wp_customize->add_setting('services_prices_span', array(
        'default'  => _x('Der Ablauf', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_prices_span', array(
        'label'  => __('Preise Span', 'webbros'),
        'section'  => 'Prices', 
        'priority' => 1
    ));

    $wp_customize->selective_refresh->add_partial( 'services_prices_span', array(
        'selector' => '.services_prices_span',
    ) );

    // Heading

    $wp_customize->add_setting('services_prices_heading', array(
        'default'  => _x('Unsere Webseiten Preise', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_prices_heading', array(
        'label'  => __('Preise Heading', 'webbros'),
        'section'  => 'Prices', 
        'priority' => 2
    ));

    $wp_customize->selective_refresh->add_partial( 'services_prices_heading', array(
        'selector' => '.services_prices_heading',
    ) );

    // Paragraph

    $wp_customize->add_setting('services_prices_paragraph', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempora laudantium dolore, expedita quo provident', 'webbros'),
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control('services_prices_paragraph', array(
        'label'  => __('Preise Paragraph', 'webbros'),
        'section'  => 'Prices', 
        'priority' => 3
    ));

    $wp_customize->selective_refresh->add_partial( 'services_prices_paragraph', array(
        'selector' => '.services_prices_paragraph',
    ) );
    



    











    }

    add_action('customize_register', 'wpb_customize_register');