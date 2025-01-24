<?php
// define('BASE_URL', 'https://taystan.design/');
require 'config.php';

// Default configurations
$action = isset($_GET['path']) ? $_GET['path'] : 'home'; // Capture requested path
$include_header = true; // Whether to include header
$include_footer = true; // Whether to include footer
$include_file = false;  // File to include
$pageid = "";           // Page-specific ID
$Page_Title = "";       // Meta title
$Page_Description = ""; // Meta description
$Page_Keywords = "";    // Meta keywords

// Dispatcher logic
switch ($action) {
    case 'blog':
        $Page_Title = "Blog";
        $Page_Description = "Blog posts";
        $Page_Keywords = "blogs";
        $include_file = 'pages/blog/index.php';
        $pageid = "blog";
        break;

    case 'blog/why-own-website':
        $Page_Title = "KSGF Project";
        $Page_Description = "Why should you own a website?";
        $Page_Keywords = "blog, why should I own a website";
        $include_file = 'pages/blog/why-own-website.php';
        $pageid = "blog";
        break;

    case 'projects':
        $Page_Title = "Projects";
        $Page_Description = "Client projects";
        $Page_Keywords = "projects";
        $include_file = 'pages/projects/index.php';
        $pageid = "projects";
        break;

    case 'projects/ksgf':
        $Page_Title = "KSGF Project";
        $Page_Description = "Details about the KSGF project.";
        $Page_Keywords = "KSGF, project, details";
        $include_file = 'pages/projects/ksgf.php';
        $pageid = "projects";
        break;

    case 'projects/btc':
        $Page_Title = "BTC Project";
        $Page_Description = "Details about the BTC project.";
        $Page_Keywords = "BTC, project, details";
        $include_file = 'pages/projects/btc.php';
        $pageid = "projects";
        break;

    case 'projects/ptr':
        $Page_Title = "PTR Project";
        $Page_Description = "Details about the PTR project.";
        $Page_Keywords = "PTR, project, details";
        $include_file = 'pages/projects/ptr.php';
        $pageid = "projects";
        break;

    case 'projects/eastburn':
        $Page_Title = "Eastburn Project";
        $Page_Description = "Details about the Eastburn project.";
        $Page_Keywords = "Eastburn, project, details";
        $include_file = 'pages/projects/eastburn.php';
        $pageid = "projects";
        break;

    case 'contact':
        $Page_Title = "Contact Us";
        $Page_Description = "Get in touch with me.";
        $Page_Keywords = "contact, email, phone";
        $include_file = 'pages/contact.php';
        $pageid = "contact";
        break;

    case 'contact-me':
        $Page_Title = "Contact Us";
        $Page_Description = "Get in touch with me.";
        $Page_Keywords = "contact, email, phone";
        $include_file = 'pages/contact-me.php';
        $pageid = "contactme";
        break;

    case 'thankyou':
        $Page_Title = "Thank You for Reaching Out";
        $Page_Description = "Form has been submitted successfully.";
        $Page_Keywords = "contact, email, phone, submit";
        $include_file = 'pages/thankyou.php';
        $pageid = "thankyou";
        break;

    case 'testimonials':
        $Page_Title = "Testimonials";
        $Page_Description = "What my clients say.";
        $Page_Keywords = "testimonials, reviews";
        $include_file = 'pages/testimonials.php';
        $pageid = "testimonials";
        break;

    case 'sitemap.xml':
        $include_header = false; // No header for XML sitemap
        $include_footer = false; // No footer for XML sitemap
        header('Content-Type: application/xml');
        $include_file = 'pages/sitemap.php';
        break;

    case 'pricing':
        $Page_Title = "Pricing";
        $Page_Description = "Our pricing plans.";
        $Page_Keywords = "pricing, plans";
        $include_file = 'pages/pricing.php';
        $pageid = "pricing";
        break;

    case 'privacy':
        $Page_Title = "Privacy Policy";
        $Page_Description = "Read our privacy policy.";
        $Page_Keywords = "privacy, policy";
        $include_file = 'pages/privacy.php';
        $pageid = "privacy";
        break;

    case 'terms':
        $Page_Title = "Terms and Conditions";
        $Page_Description = "Our terms and conditions.";
        $Page_Keywords = "terms, conditions";
        $include_file = 'pages/terms.php';
        $pageid = "terms";
        break;

    case 'templates':
        $Page_Title = "Templates";
        $Page_Description = "Templates";
        $Page_Keywords = "templates";
        $include_file = 'pages/templates.php';
        $pageid = "terms";
        break;

    
    case 'faq':
        $Page_Title = "FAQ";
        $Page_Description = "FAQ";
        $Page_Keywords = "FAQ";
        $include_file = 'components/faq.php';
        $pageid = "faq";
        break;

    default:
        if ($action === 'home') {
            $Page_Title = "Home";
            $Page_Description = "Welcome to our website.";
            $Page_Keywords = "home, welcome";
            $include_file = 'pages/home.php';
            $pageid = "home";
        } else {
            header("HTTP/1.0 404 Not Found");
            $Page_Title = "Page Not Found";
            $Page_Description = "The requested page does not exist.";
            $Page_Keywords = "404, not found";
            $include_file = 'pages/404.php';
            $pageid = "404";
        }
        break;
}

// Include files
if ($include_file) {
    if ($include_header) {
        include 'header.php';
    }

    include $include_file;

    if ($include_footer) {
        include 'footer.php';
    }
} else {
    // Handle cases where no file is found or set
    header("HTTP/1.0 404 Not Found");
    include 'header.php';
    include 'pages/404.php';
    include 'footer.php';
}