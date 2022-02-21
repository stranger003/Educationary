<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$msg = NULL;

require '../vendor/autoload.php';

if(isset($_GET['status'])){
    $msg ="<h1>Mail Send</h1>";
}
if(isset($_GET['nostatus'])){
    $msg ="<h1>Mail not Send </h1>";
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $message = $_POST['message'];
    $emailto = 'kaushal@egniol.co.in';

    $body = "Name :".$name."<br>"."Email :".$email."<br>"."Message :".$message;

    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = 1;                                   
        $mail->isSMTP();                                            
        $mail->Host  = 'smtp.gmail.com';                    
        $mail->SMTPAuth = true;                         
        $mail->Username = 'nishit@egniol.co.in';
        $mail->Password = 'cizfigttowkvjmyz';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        
        $mail->setFrom('nishit@egniol.co.in', 'Educationary');
        
        $mail->addReplyTo('nishit@egniol.co.in');  
        $mail->addAddress($emailto);
        $mail->isHTML(true);                                
        $mail->Subject = 'Contact Inquiry';     
        $mail->Body = $body;
        $mail->AltBody = $body;
        $mail->send();
        echo "Mail has been sent successfully!";
        header("location: ?status=1");
        }
    catch (Exception $e) {
        header("location: ?nostatus=0");
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="stylesheet" href="../mycss.css">
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/42da3837ad.js" crossorigin="anonymous"></script>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- This site is optimized with the Yoast SEO plugin v17.8 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Contact - Educationary</title>
    <meta name="description" content="Complete guide for parents and students to help them select what is best for them. Information related to all Schools, Colleges, Universities, Coaching Institutes, Counsellors, PG’s, Boarding, schools for Specially abled kids, Sports, Music, Book seller, Beauty Schools, Cooking classes, Internship, Forest School, Computer &amp; Peripherals sellers, Nursing Institute, Computer Institute, Vocational Institute, Polytechnic Institute, Fashion Institute, Digital Library, Private Tutor, Sports Instructor, Music Teacher, E- Learning Platforms, Language Learning Classes and many more will now be just a click away.Be it a School’s ranking or location, its fee or a little something about the campus, all information will be available in one place. What’s more is the information could be reviewed in the form of a comparative list where parents and students can analyze and choose institutions which are best suited for them.Career counselling and/ or students and parents avail the services of a counselor who will help the child through the entire process of getting into a school.">
    <link rel="canonical" href="./index.html">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Contact - Educationary">
    <meta property="og:description" content="Complete guide for parents and students to help them select what is best for them. Information related to all Schools, Colleges, Universities, Coaching Institutes, Counsellors, PG’s, Boarding, schools for Specially abled kids, Sports, Music, Book seller, Beauty Schools, Cooking classes, Internship, Forest School, Computer &amp; Peripherals sellers, Nursing Institute, Computer Institute, Vocational Institute, Polytechnic Institute, Fashion Institute, Digital Library, Private Tutor, Sports Instructor, Music Teacher, E- Learning Platforms, Language Learning Classes and many more will now be just a click away.Be it a School’s ranking or location, its fee or a little something about the campus, all information will be available in one place. What’s more is the information could be reviewed in the form of a comparative list where parents and students can analyze and choose institutions which are best suited for them.Career counselling and/ or students and parents avail the services of a counselor who will help the child through the entire process of getting into a school.">
    <meta property="og:url" content="./contact/">
    <meta property="og:site_name" content="Educationary">
    <meta property="article:modified_time" content="2021-12-14T10:22:14+00:00">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="1 minute">
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Organization",
                "@id": "./#organization",
                "name": "Educationary",
                "url": "./",
                "sameAs": [],
                "logo": {
                    "@type": "ImageObject",
                    "@id": "./#logo",
                    "inLanguage": "en-US",
                    "url": "./wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM.png",
                    "contentUrl": "./wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM.png",
                    "width": 712,
                    "height": 459,
                    "caption": "Educationary"
                },
                "image": {
                    "@id": "./#logo"
                }
            }, {
                "@type": "WebSite",
                "@id": "./#website",
                "url": "./",
                "name": "Educationary",
                "description": "Educationary",
                "publisher": {
                    "@id": "./#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "./?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "WebPage",
                "@id": "./contact/#webpage",
                "url": "./contact/",
                "name": "Contact - Educationary",
                "isPartOf": {
                    "@id": "./#website"
                },
                "datePublished": "2021-05-18T01:55:22+00:00",
                "dateModified": "2021-12-14T10:22:14+00:00",
                "description": "Complete guide for parents and students to help them select what is best for them. Information related to all Schools, Colleges, Universities, Coaching Institutes, Counsellors, PG’s, Boarding, schools for Specially abled kids, Sports, Music, Book seller, Beauty Schools, Cooking classes, Internship, Forest School, Computer & Peripherals sellers, Nursing Institute, Computer Institute, Vocational Institute, Polytechnic Institute, Fashion Institute, Digital Library, Private Tutor, Sports Instructor, Music Teacher, E- Learning Platforms, Language Learning Classes and many more will now be just a click away.Be it a School’s ranking or location, its fee or a little something about the campus, all information will be available in one place. What’s more is the information could be reviewed in the form of a comparative list where parents and students can analyze and choose institutions which are best suited for them.Career counselling and/ or students and parents avail the services of a counselor who will help the child through the entire process of getting into a school.",
                "breadcrumb": {
                    "@id": "./contact/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": [
                        "./contact/"
                    ]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "./contact/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "./"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Contact"
                }]
            }]
        }
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="alternate" type="application/rss+xml" title="Educationary &raquo; Feed" href="./../feed/index.html">
    <link rel="alternate" type="application/rss+xml" title="Educationary &raquo; Comments Feed" href="./../comments/feed/index.html">
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": ".\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        .card>.card-header a::before {
            font-family: fontawesome;
            content: "\f067 ";
            color: #282425;
            float: right;
        }
        
        p {
            text-align: justify !important;
        }
        
        ul,
        li {
            color: #353535 !important;
        }
        
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="astra-theme-css-css" href="./../wp-content/themes/astra/assets/css/minified/main.min.css?ver=3.7.5" media="all">
    <style id="astra-theme-css-inline-css">
        html {
            font-size: 100%;
        }
        
        a,
        .page-title {
            color: var(--ast-global-color-2);
        }
        
        a:hover,
        a:focus {
            color: var(--ast-global-color-1);
            text-decoration: none !important;
        }
        
        body,
        button,
        input,
        select,
        textarea,
        .ast-button,
        .ast-custom-button {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 16px;
            font-size: 1rem;
        }
        
        blockquote {
            color: var(--ast-global-color-3);
        }
        
        p,
        .entry-content p {
            margin-bottom: 1em;
        }
        
        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6,
        .site-title,
        .site-title a {
            font-family: Georgia, Times, serif;
            font-weight: 400;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Georgia, Times, serif !important;
        }
        
        .site-title {
            font-size: 35px;
            font-size: 2.1875rem;
            display: none;
        }
        
        header .custom-logo-link img {
            max-width: 103px;
        }
        
        .astra-logo-svg {
            width: 103px;
        }
        
        .ast-archive-description .ast-archive-title {
            font-size: 40px;
            font-size: 2.5rem;
        }
        
        .site-header .site-description {
            font-size: 15px;
            font-size: 0.9375rem;
            display: none;
        }
        
        p {
            font-family: Roboto, Times;
        }
        
        .entry-title {
            font-size: 30px;
            font-size: 1.875rem;
        }
        
        h1,
        .entry-content h1 {
            font-size: 80px;
            font-size: 5rem;
            font-family: Georgia, Times, serif;
            line-height: 1.1;
        }
        
        h2,
        .entry-content h2 {
            font-size: 56px;
            font-size: 3.5rem;
            font-family: Georgia, Times, serif;
            line-height: 1.2;
        }
        
        h3,
        .entry-content h3 {
            font-size: 40px;
            font-size: 3.5rem;
            font-family: Georgia, Times, serif;
            line-height: 1.2;
        }
        
        h4,
        .entry-content h4 {
            font-size: 32px;
            font-size: 2rem;
            font-family: Georgia, Times, serif;
        }
        
        h5,
        .entry-content h5 {
            font-size: 24px;
            font-size: 1.5rem;
            font-family: Georgia, Times, serif;
        }
        
        h6,
        .entry-content h6 {
            font-size: 18px;
            font-size: 1.125rem;
            font-family: Georgia, Times, serif;
        }
        
        .ast-single-post .entry-title,
        .page-title {
            font-size: 30px;
            font-size: 1.875rem;
        }
        
         ::selection {
            background-color: var(--ast-global-color-0);
            color: #ffffff;
        }
        
        body,
        h1,
        .entry-title a,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-3);
        }
        
        .tagcloud a:hover,
        .tagcloud a:focus,
        .tagcloud a.current-item {
            color: #ffffff;
            border-color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-2);
        }
        
        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: var(--ast-global-color-2);
        }
        
        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-2);
            box-shadow: none;
        }
        
        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: var(--ast-global-color-2);
            border-color: var(--ast-global-color-2);
        }
        
        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: var(--ast-global-color-2);
        }
        
        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: var(--ast-global-color-2);
        }
        
        .entry-meta a:hover,
        .entry-meta a:hover *,
        .entry-meta a:focus,
        .entry-meta a:focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: var(--ast-global-color-1);
        }
        
        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: var(--ast-global-color-2);
        }
        
        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: var(--ast-global-color-2);
        }
        
        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: var(--ast-global-color-2);
            border-color: var(--ast-global-color-2);
        }
        
        .calendar_wrap #today>a {
            color: #ffffff;
        }
        
        .page-links .page-link,
        .single .post-navigation a {
            color: var(--ast-global-color-2);
        }
        
        .widget-title {
            font-size: 22px;
            font-size: 1.375rem;
            color: var(--ast-global-color-3);
        }
        
        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em;
        }
        
        .site-logo-img img {
            transition: all 0.2s linear;
        }
        
        .ast-page-builder-template .hentry {
            margin: 0;
        }
        
        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }
        
        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0;
        }
        
        .ast-page-builder-template .no-results {
            text-align: center;
            margin: 4em auto;
        }
        
        .ast-page-builder-template .ast-pagination {
            padding: 2em;
        }
        
        .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
            margin-top: 0;
        }
        
        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }
        
        .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
            margin-bottom: 0;
        }
        
        .ast-page-builder-template.single .post-navigation {
            padding-bottom: 2em;
        }
        
        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }
        
        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .ast-page-builder-template .ast-archive-description {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .single.ast-page-builder-template .entry-header {
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
            margin-left: 0;
            margin-right: 0;
        }
        
        @media (max-width:921px) {
            #ast-desktop-header {
                display: none;
            }
        }
        
        @media (min-width:921px) {
            #ast-mobile-header {
                display: none;
            }
        }
        
        .wp-block-buttons.aligncenter {
            justify-content: center;
        }
        
        @media (min-width:1200px) {
            .wp-block-group .has-background {
                padding: 20px;
            }
        }
        
        @media (min-width:1200px) {
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignwide,
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignwide {
                margin-left: -20px;
                margin-right: -20px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignfull,
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignfull {
                margin-left: -6.67em;
                margin-right: -6.67em;
                padding-left: 6.67em;
                padding-right: 6.67em;
            }
        }
        
        @media (min-width:1200px) {
            .wp-block-cover-image.alignwide .wp-block-cover__inner-container,
            .wp-block-cover.alignwide .wp-block-cover__inner-container,
            .wp-block-cover-image.alignfull .wp-block-cover__inner-container,
            .wp-block-cover.alignfull .wp-block-cover__inner-container {
                width: 100%;
            }
        }
        
        .ast-plain-container.ast-no-sidebar #primary {
            margin-top: 0;
            margin-bottom: 0;
        }
        
        @media (max-width:921px) {
            .ast-theme-transparent-header #primary,
            .ast-theme-transparent-header #secondary {
                padding: 0;
            }
        }
        
        .wp-block-columns {
            margin-bottom: unset;
        }
        
        .wp-block-image.size-full {
            margin: 2rem 0;
        }
        
        .wp-block-separator.has-background {
            padding: 0;
        }
        
        .wp-block-gallery {
            margin-bottom: 1.6em;
        }
        
        .wp-block-group {
            padding-top: 4em;
            padding-bottom: 4em;
        }
        
        .wp-block-group__inner-container .wp-block-columns:last-child,
        .wp-block-group__inner-container :last-child,
        .wp-block-table table {
            margin-bottom: 0;
        }
        
        .blocks-gallery-grid {
            width: 100%;
        }
        
        .wp-block-navigation-link__content {
            padding: 5px 0;
        }
        
        .wp-block-group .wp-block-group .has-text-align-center,
        .wp-block-group .wp-block-column .has-text-align-center {
            max-width: 100%;
        }
        
        .has-text-align-center {
            margin: 0 auto;
        }
        
        @media (min-width:1200px) {
            .wp-block-cover__inner-container,
            .alignwide .wp-block-group__inner-container,
            .alignfull .wp-block-group__inner-container {
                max-width: 1200px;
                margin: 0 auto;
            }
            .wp-block-group.alignnone,
            .wp-block-group.aligncenter,
            .wp-block-group.alignleft,
            .wp-block-group.alignright,
            .wp-block-group.alignwide,
            .wp-block-columns.alignwide {
                margin: 2rem 0 1rem 0;
            }
        }
        
        @media (max-width:1400px) {
            .wp-block-group {
                padding: 3em;
            }
            .wp-block-group .wp-block-group {
                padding: 1.5em;
            }
            .wp-block-columns,
            .wp-block-column {
                margin: 1rem 0;
            }
            .elementor-155 .elementor-element.elementor-element-a4cc698>.elementor-element-populated {
                padding: 0px 96px 95px 0px !important;
            }
        }
        
        @media (min-width:921px) {
            .wp-block-columns .wp-block-group {
                padding: 2em;
            }
        }
        
        @media (max-width:544px) {
            .wp-block-cover-image .wp-block-cover__inner-container,
            .wp-block-cover .wp-block-cover__inner-container {
                width: unset;
            }
            .wp-block-cover,
            .wp-block-cover-image {
                padding: 2em 0;
            }
            .wp-block-group,
            .wp-block-cover {
                padding: 2em;
            }
            .wp-block-media-text__media img,
            .wp-block-media-text__media video {
                width: unset;
                max-width: 100%;
            }
            .wp-block-media-text.has-background .wp-block-media-text__content {
                padding: 1em;
            }
        }
        
        @media (max-width:921px) {
            .ast-plain-container.ast-no-sidebar #primary {
                padding: 0;
            }
            .elementor-155 .elementor-element.elementor-element-a4cc698>.elementor-element-populated {
                padding: 0px!important;
            }
        }
        
        @media (min-width:544px) {
            .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
                padding: 0 8% 0 0;
            }
            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 0 0 0 8%;
            }
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left>* {
                margin: 0;
            }
        }
        
        @media (max-width:544px) {
            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 8% 0;
            }
            .wp-block-media-text .wp-block-media-text__media img {
                width: auto;
                max-width: 100%;
            }
        }
        
        .wp-block-button.is-style-outline .wp-block-button__link {
            border-color: #ffffff;
            border-top-width: 2px;
            border-right-width: 2px;
            border-bottom-width: 2px;
            border-left-width: 2px;
        }
        
        .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
        .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
            color: #ffffff;
        }
        
        .wp-block-button.is-style-outline .wp-block-button__link:hover,
        .wp-block-button.is-style-outline .wp-block-button__link:focus {
            color: var(--ast-global-color-1) !important;
            background-color: rgba(255, 255, 255, 0.8);
            border-color: rgba(255, 255, 255, 0.8);
        }
        
        .post-page-numbers.current .page-link,
        .ast-pagination .page-numbers.current {
            color: #ffffff;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            border-radius: 2px;
        }
        
        @media (max-width:921px) {
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }
        
        @media (max-width:544px) {
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }
        
        @media (min-width:544px) {
            .entry-content>.alignleft {
                margin-right: 20px;
            }
            .entry-content>.alignright {
                margin-left: 20px;
            }
            .wp-block-group.has-background {
                padding: 20px;
            }
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single {
                padding: 1.5em 2.14em;
            }
            .ast-separate-container #primary,
            .ast-separate-container #secondary {
                padding: 1.5em 0;
            }
            #primary,
            #secondary {
                padding: 1.5em 0;
                margin: 0;
            }
            .ast-left-sidebar #content>.ast-container {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
            }
            .ast-author-box img.avatar {
                margin: 20px 0 0 0;
            }
        }
        
        @media (min-width:922px) {
            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary {
                border: 0;
            }
            .search-no-results.ast-separate-container #primary {
                margin-bottom: 4em;
            }
        }
        
        .elementor-button-wrapper .elementor-button {
            border-style: solid;
            text-decoration: none;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
        }
        
        body .elementor-button.elementor-size-sm,
        body .elementor-button.elementor-size-xs,
        body .elementor-button.elementor-size-md,
        body .elementor-button.elementor-size-lg,
        body .elementor-button.elementor-size-xl,
        body .elementor-button {
            border-radius: 4px;
            padding-top: 15px;
            padding-right: 24px;
            padding-bottom: 15px;
            padding-left: 24px;
        }
        
        @media (max-width:921px) {
            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button.elementor-size-xs,
            .elementor-button-wrapper .elementor-button.elementor-size-md,
            .elementor-button-wrapper .elementor-button.elementor-size-lg,
            .elementor-button-wrapper .elementor-button.elementor-size-xl,
            .elementor-button-wrapper .elementor-button {
                padding-top: 14px;
                padding-right: 24px;
                padding-bottom: 14px;
                padding-left: 24px;
            }
        }
        
        @media (max-width:544px) {
            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button.elementor-size-xs,
            .elementor-button-wrapper .elementor-button.elementor-size-md,
            .elementor-button-wrapper .elementor-button.elementor-size-lg,
            .elementor-button-wrapper .elementor-button.elementor-size-xl,
            .elementor-button-wrapper .elementor-button {
                padding-top: 12px;
                padding-right: 22px;
                padding-bottom: 12px;
                padding-left: 22px;
            }
        }
        
        .elementor-button-wrapper .elementor-button {
            border-color: #ffffff;
            background-color: #ffffff;
        }
        
        .elementor-button-wrapper .elementor-button:hover,
        .elementor-button-wrapper .elementor-button:focus {
            color: var(--ast-global-color-1);
            background-color: rgba(255, 255, 255, 0.8);
            border-color: rgba(255, 255, 255, 0.8);
        }
        
        .wp-block-button .wp-block-button__link,
        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: var(--ast-global-color-0);
        }
        
        .elementor-button-wrapper .elementor-button {
            font-family: Georgia, Times, serif;
            font-weight: 700;
            line-height: 1;
        }
        
        body .elementor-button.elementor-size-sm,
        body .elementor-button.elementor-size-xs,
        body .elementor-button.elementor-size-md,
        body .elementor-button.elementor-size-lg,
        body .elementor-button.elementor-size-xl,
        body .elementor-button {
            font-size: 15px;
            font-size: 0.9375rem;
        }
        
        .wp-block-button .wp-block-button__link:hover,
        .wp-block-button .wp-block-button__link:focus {
            color: var(--ast-global-color-1);
            background-color: rgba(255, 255, 255, 0.8);
            border-color: rgba(255, 255, 255, 0.8);
        }
        
        .elementor-widget-heading h1.elementor-heading-title {
            line-height: 1.1;
        }
        
        .elementor-widget-heading h2.elementor-heading-title {
            line-height: 1.2;
        }
        
        .elementor-widget-heading h3.elementor-heading-title {
            line-height: 1.2;
        }
        
        .wp-block-button .wp-block-button__link {
            border: none;
            background-color: #ffffff;
            color: var(--ast-global-color-0);
            font-family: Georgia, Times, serif;
            font-weight: 700;
            line-height: 1;
            font-size: 15px;
            font-size: 0.9375rem;
            border-radius: 4px;
            padding: 15px 30px;
        }
        
        .wp-block-button.is-style-outline .wp-block-button__link {
            border-style: solid;
            border-top-width: 2px;
            border-right-width: 2px;
            border-left-width: 2px;
            border-bottom-width: 2px;
            border-color: #ffffff;
            padding-top: calc(15px - 2px);
            padding-right: calc(30px - 2px);
            padding-bottom: calc(15px - 2px);
            padding-left: calc(30px - 2px);
        }
        
        @media (max-width:921px) {
            .wp-block-button .wp-block-button__link {
                font-size: 14px;
                font-size: 0.875rem;
                border: none;
                padding: 15px 30px;
            }
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }
        
        @media (max-width:544px) {
            .wp-block-button .wp-block-button__link {
                font-size: 13px;
                font-size: 0.8125rem;
                border: none;
                padding: 15px 30px;
            }
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }
        
        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            color: var(--ast-global-color-0);
            border-color: #ffffff;
            background-color: #ffffff;
            border-radius: 4px !important;
            padding-top: 15px;
            padding-right: 24px;
            padding-bottom: 15px;
            padding-left: 24px;
            font-family: Georgia, Times, serif;
            font-weight: 700;
            font-size: 15px;
            font-size: 0.9375rem;
            line-height: 1;
        }
        
        button:focus,
        .menu-toggle:hover,
        button:hover,
        .ast-button:hover,
        .ast-custom-button:hover .button:hover,
        .ast-custom-button:hover,
        input[type=reset]:hover,
        input[type=reset]:focus,
        input#submit:hover,
        input#submit:focus,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus {
            color: var(--ast-global-color-1);
            background-color: rgba(255, 255, 255, 0.8);
            border-color: rgba(255, 255, 255, 0.8);
        }
        
        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-title,
            .ast-separate-container .ast-archive-description {
                padding: 1.5em 1em;
            }
            .ast-separate-container #content .ast-container {
                padding-left: 0.54em;
                padding-right: 0.54em;
            }
            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 1em;
                margin-bottom: 1.5em;
            }
            .ast-separate-container .ast-comment-list .bypostauthor {
                padding: .5em;
            }
            .ast-search-menu-icon.ast-dropdown-active .search-field {
                width: 170px;
            }
            .menu-toggle,
            button,
            .ast-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"] {
                padding-top: 12px;
                padding-right: 22px;
                padding-bottom: 12px;
                padding-left: 22px;
                font-size: 13px;
                font-size: 0.8125rem;
            }
        }
        
        @media (max-width:921px) {
            .menu-toggle,
            button,
            .ast-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"] {
                padding-top: 14px;
                padding-right: 24px;
                padding-bottom: 14px;
                padding-left: 24px;
                font-size: 14px;
                font-size: 0.875rem;
            }
            .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
                display: inline-block;
            }
            .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
                margin: 0;
            }
            .ast-comment-avatar-wrap img {
                max-width: 2.5em;
            }
            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 2.14em;
            }
            .ast-separate-container .comment-respond {
                padding: 2em 2.14em;
            }
            .ast-comment-meta {
                padding: 0 1.8888em 1.3333em;
            }
        }
        
        body,
        .ast-separate-container {
            background-color: var(--ast-global-color-4);
            ;
            background-image: none;
            ;
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
            margin-left: -6.67em;
            margin-right: -6.67em;
            width: auto;
        }
        
        @media (max-width: 1200px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.4em;
                margin-right: -2.4em;
            }
        }
        
        @media (max-width: 768px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.14em;
                margin-right: -2.14em;
            }
        }
        
        @media (max-width: 544px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -1em;
                margin-right: -1em;
            }
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .alignwide {
            margin-left: -20px;
            margin-right: -20px;
        }
        
        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignfull,
        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignwide {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        
        @media (max-width:921px) {
            .widget-title {
                font-size: 22px;
                font-size: 1.375rem;
            }
            body,
            button,
            input,
            select,
            textarea,
            .ast-button,
            .ast-custom-button {
                font-size: 16px;
                font-size: 1rem;
            }
            #secondary,
            #secondary button,
            #secondary input,
            #secondary select,
            #secondary textarea {
                font-size: 16px;
                font-size: 1rem;
            }
            .site-title {
                display: none;
            }
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }
            .site-header .site-description {
                display: none;
            }
            .entry-title {
                font-size: 30px;
            }
            h1,
            .entry-content h1 {
                font-size: 56px;
            }
            h2,
            .entry-content h2 {
                font-size: 40px;
            }
            h3,
            .entry-content h3 {
                font-size: 32px;
            }
            h4,
            .entry-content h4 {
                font-size: 24px;
                font-size: 1.5rem;
            }
            h5,
            .entry-content h5 {
                font-size: 20px;
                font-size: 1.25rem;
            }
            h6,
            .entry-content h6 {
                font-size: 17px;
                font-size: 1.0625rem;
            }
            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
            .astra-logo-svg {
                width: 120px;
            }
            header .custom-logo-link img,
            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 120px;
            }
        }
        
        @media (max-width:544px) {
            .widget-title {
                font-size: 21px;
                font-size: 1.4rem;
            }
            body,
            button,
            input,
            select,
            textarea,
            .ast-button,
            .ast-custom-button {
                font-size: 15px;
                font-size: 0.9375rem;
            }
            #secondary,
            #secondary button,
            #secondary input,
            #secondary select,
            #secondary textarea {
                font-size: 15px;
                font-size: 0.9375rem;
            }
            .site-title {
                display: none;
            }
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }
            .site-header .site-description {
                display: none;
            }
            .entry-title {
                font-size: 30px;
            }
            h1,
            .entry-content h1 {
                font-size: 36px;
            }
            h2,
            .entry-content h2 {
                font-size: 32px;
            }
            h3,
            .entry-content h3 {
                font-size: 24px;
            }
            h4,
            .entry-content h4 {
                font-size: 20px;
                font-size: 1.25rem;
            }
            h5,
            .entry-content h5 {
                font-size: 18px;
                font-size: 1.125rem;
            }
            h6,
            .entry-content h6 {
                font-size: 16px;
                font-size: 1rem;
            }
            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
            header .custom-logo-link img,
            .ast-header-break-point .site-branding img,
            .ast-header-break-point .custom-logo-link img {
                max-width: 112px;
            }
            .astra-logo-svg {
                width: 112px;
            }
            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 112px;
            }
        }
        
        @media (max-width:544px) {
            html {
                font-size: 100%;
            }
        }
        
        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px;
            }
        }
        
        @media (min-width:922px) {
            .site-content .ast-container {
                display: flex;
            }
        }
        
        @media (max-width:921px) {
            .site-content .ast-container {
                flex-direction: column;
            }
        }
        
        @media (min-width:922px) {
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
                margin-left: -0px;
            }
        }
        
        blockquote {
            padding: 1.2em;
        }
        
         :root .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }
        
         :root .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }
        
         :root .wp-block-button .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }
        
         :root .wp-block-button .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }
        
         :root .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }
        
         :root .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }
        
         :root .wp-block-button .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }
        
         :root .wp-block-button .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }
        
         :root .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }
        
         :root .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }
        
         :root .wp-block-button .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }
        
         :root .wp-block-button .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }
        
         :root .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }
        
         :root .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }
        
         :root .wp-block-button .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }
        
         :root .wp-block-button .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }
        
         :root .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }
        
         :root .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }
        
         :root .wp-block-button .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }
        
         :root .wp-block-button .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }
        
         :root .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }
        
         :root .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }
        
         :root .wp-block-button .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }
        
         :root .wp-block-button .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }
        
         :root .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }
        
         :root .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }
        
         :root .wp-block-button .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }
        
         :root .wp-block-button .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }
        
         :root .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }
        
         :root .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }
        
         :root .wp-block-button .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }
        
         :root .wp-block-button .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }
        
         :root .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }
        
         :root .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }
        
         :root .wp-block-button .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }
        
         :root .wp-block-button .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }
        
         :root {
            --ast-global-color-0: #4747d7;
            --ast-global-color-1: #3939c8;
            --ast-global-color-2: #26262c;
            --ast-global-color-3: #76767f;
            --ast-global-color-4: #ffffff;
            --ast-global-color-5: #00123A;
            --ast-global-color-6: #243673;
            --ast-global-color-7: #FBFCFF;
            --ast-global-color-8: #BFD1FF;
        }
        
        .ast-breadcrumbs .trail-browse,
        .ast-breadcrumbs .trail-items,
        .ast-breadcrumbs .trail-items li {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            background: inherit;
            text-indent: 0;
        }
        
        .ast-breadcrumbs .trail-browse {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            color: inherit;
        }
        
        .ast-breadcrumbs .trail-items {
            list-style: none;
        }
        
        .trail-items li::after {
            padding: 0 0.3em;
            content: "\00bb";
        }
        
        .trail-items li:last-of-type::after {
            display: none;
        }
        
        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-2);
        }
        
        @media (max-width:921px) {
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }
        
        @media (max-width:544px) {
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }
        
        .ast-builder-layout-element[data-section="title_tagline"] {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }
        
        .ast-builder-menu-1 {
            font-family: Georgia, Times, serif;
            font-weight: 700;
        }
        
        .ast-builder-menu-1 .menu-item>.menu-link {
            font-size: 18px;
            font-size: 1.125rem;
            color: var(--ast-global-color-3);
        }
        
        .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-3);
        }
        
        .ast-builder-menu-1 .menu-item:hover>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }
        
        .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }
        
        .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
        .ast-builder-menu-1 .current-menu-ancestor>.menu-link {
            color: var(--ast-global-color-1);
        }
        
        .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }
        
        .ast-builder-menu-1 .sub-menu,
        .ast-builder-menu-1 .inline-on-mobile .sub-menu {
            border-top-width: 2px;
            border-bottom-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-color: var(--ast-global-color-0);
            border-style: solid;
            border-radius: 0;
        }
        
        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }
        
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
            height: calc( 0px + 5px);
        }
        
        .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
            border-style: none;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
            .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
        }
        
        .ast-builder-menu-1 {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }
        
        .ast-builder-social-element:hover {
            color: #0274be;
        }
        
        .ast-social-stack-desktop .ast-builder-social-element,
        .ast-social-stack-tablet .ast-builder-social-element,
        .ast-social-stack-mobile .ast-builder-social-element {
            margin-top: 6px;
            margin-bottom: 6px;
        }
        
        .ast-social-color-type-official .ast-builder-social-element,
        .ast-social-color-type-official .social-item-label {
            color: var(--color);
            background-color: var(--background-color);
        }
        
        .header-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg,
        .footer-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg {
            fill: currentColor;
        }
        
        .social-show-label-true .ast-builder-social-element {
            width: auto;
            padding: 0 0.4em;
        }
        
        [data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {
            text-align: center;
        }
        
        .ast-footer-social-wrap {
            width: 100%;
        }
        
        .ast-footer-social-wrap .ast-builder-social-element:first-child {
            margin-left: 0;
        }
        
        .ast-footer-social-wrap .ast-builder-social-element:last-child {
            margin-right: 0;
        }
        
        .ast-header-social-wrap .ast-builder-social-element:first-child {
            margin-left: 0;
        }
        
        .ast-header-social-wrap .ast-builder-social-element:last-child {
            margin-right: 0;
        }
        
        .ast-builder-social-element {
            line-height: 1;
            color: #3a3a3a;
            background: transparent;
            vertical-align: middle;
            transition: all 0.01s;
            margin-left: 6px;
            margin-right: 6px;
            justify-content: center;
            align-items: center;
        }
        
        .ast-builder-social-element {
            line-height: 1;
            color: #3a3a3a;
            background: transparent;
            vertical-align: middle;
            transition: all 0.01s;
            margin-left: 6px;
            margin-right: 6px;
            justify-content: center;
            align-items: center;
        }
        
        .ast-builder-social-element .social-item-label {
            padding-left: 6px;
        }
        
        .ast-header-social-1-wrap .ast-builder-social-element {
            margin-left: 14px;
            margin-right: 30px;
        }
        
        button {
            font-family: Georgia, Times, serif !important;
            padding-top: 15px !important;
            padding-right: 24px !important;
            padding-bottom: 15px !important;
            padding-left: 24px !important;
            font-family: Georgia, Times, serif;
            font-weight: 700 !important;
            font-size: 15px;
            font-size: 0.9375rem !important;
            line-height: 1 !important;
            border-radius: 4px !important;
        }
        
        .ast-header-social-1-wrap .ast-builder-social-element svg {
            width: 18px;
            height: 18px;
        }
        
        .ast-header-social-1-wrap .ast-social-color-type-custom svg {
            fill: var(--ast-global-color-0);
        }
        
        .ast-header-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover {
            color: var(--ast-global-color-2);
        }
        
        .ast-header-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg {
            fill: var(--ast-global-color-2);
        }
        
        .ast-header-social-1-wrap .ast-social-color-type-custom .social-item-label {
            color: var(--ast-global-color-0);
        }
        
        .ast-header-social-1-wrap .ast-builder-social-element:hover .social-item-label {
            color: var(--ast-global-color-2);
        }
        
        .elementor-152 .elementor-element.elementor-element-de4320f:not(.elementor-motion-effects-element-type-background),
        .elementor-152 .elementor-element.elementor-element-de4320f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #4747d7 !important;
        }
        
        @media (max-width:921px) {
            .ast-header-social-1-wrap .ast-builder-social-element {
                margin-left: 15px;
                margin-right: 15px;
            }
            .ast-header-social-1-wrap {
                margin-top: 25px;
                margin-bottom: 25px;
                margin-left: 25px;
                margin-right: 25px;
            }
        }
        
        .ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
                display: flex;
            }
        }
        
        .site-below-footer-wrap {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            background-image: none;
            ;
            min-height: 40px;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }
        
        .ast-builder-grid-row-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }
        
        @media (max-width:921px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            padding-bottom: 40px;
        }
        
        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                padding-top: 24px;
                padding-bottom: 24px;
                padding-left: 24px;
                padding-right: 24px;
            }
        }
        
        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: grid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
            h5 {
                margin-top: 4% !important;
            }
        }
        
        .ast-footer-copyright {
            text-align: center;
        }
        
        .ast-footer-copyright {
            color: #76767f;
        }
        
        @media (max-width:921px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .ast-footer-copyright {
                text-align: center;
            }
            .elementor-widget-container {
                padding: 5px 16px 0px 16px !important;
            }
        }
        
        .ast-footer-copyright {
            font-size: 14px;
            font-size: 0.875rem;
        }
        
        .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }
        
        .ast-builder-social-element:hover {
            color: #0274be;
        }
        
        .ast-social-stack-desktop .ast-builder-social-element,
        .ast-social-stack-tablet .ast-builder-social-element,
        .ast-social-stack-mobile .ast-builder-social-element {
            margin-top: 6px;
            margin-bottom: 6px;
        }
        
        .ast-social-color-type-official .ast-builder-social-element,
        .ast-social-color-type-official .social-item-label {
            color: var(--color);
            background-color: var(--background-color);
        }
        
        .header-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg,
        .footer-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg {
            fill: currentColor;
        }
        
        .social-show-label-true .ast-builder-social-element {
            width: auto;
            padding: 0 0.4em;
        }
        
        [data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {
            text-align: center;
        }
        
        .ast-footer-social-wrap {
            width: 100%;
        }
        
        .ast-footer-social-wrap .ast-builder-social-element:first-child {
            margin-left: 0;
        }
        
        .ast-footer-social-wrap .ast-builder-social-element:last-child {
            margin-right: 0;
        }
        
        .ast-header-social-wrap .ast-builder-social-element:first-child {
            margin-left: 0;
        }
        
        .ast-header-social-wrap .ast-builder-social-element:last-child {
            margin-right: 0;
        }
        
        .ast-builder-social-element {
            line-height: 1;
            color: #3a3a3a;
            background: transparent;
            vertical-align: middle;
            transition: all 0.01s;
            margin-left: 6px;
            margin-right: 6px;
            justify-content: center;
            align-items: center;
        }
        
        .ast-builder-social-element {
            line-height: 1;
            color: #3a3a3a;
            background: transparent;
            vertical-align: middle;
            transition: all 0.01s;
            margin-left: 6px;
            margin-right: 6px;
            justify-content: center;
            align-items: center;
        }
        
        .ast-builder-social-element .social-item-label {
            padding-left: 6px;
        }
        
        .ast-footer-social-1-wrap .ast-builder-social-element {
            margin-left: 12px;
            margin-right: 12px;
        }
        
        .ast-footer-social-1-wrap .ast-builder-social-element svg {
            width: 18px;
            height: 18px;
        }
        
        .ast-footer-social-1-wrap .ast-social-color-type-custom svg {
            fill: var(--ast-global-color-1);
        }
        
        .ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover {
            color: var(--ast-global-color-2);
        }
        
        .ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg {
            fill: var(--ast-global-color-2);
        }
        
        .ast-footer-social-1-wrap .ast-social-color-type-custom .social-item-label {
            color: var(--ast-global-color-1);
        }
        
        .ast-footer-social-1-wrap .ast-builder-social-element:hover .social-item-label {
            color: var(--ast-global-color-2);
        }
        
        [data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
            text-align: center;
        }
        
        @media (max-width:921px) {
            [data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            [data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
                text-align: center;
            }
        }
        
        .ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
            display: flex;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
                display: flex;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
                display: flex;
            }
        }
        
        .site-above-footer-wrap {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"] {
            background-image: none;
            ;
            min-height: 60px;
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"] .ast-builder-grid-row {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"] .ast-builder-grid-row,
        .site-above-footer-wrap[data-section="section-above-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }
        
        .ast-builder-grid-row-3-lheavy .ast-builder-grid-row {
            grid-template-columns: 2fr 1fr 1fr;
        }
        
        @media (max-width:921px) {
            .site-above-footer-wrap[data-section="section-above-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-above-footer-wrap[data-section="section-above-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width:544px) {
            .site-above-footer-wrap[data-section="section-above-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-above-footer-wrap[data-section="section-above-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"] {
            padding-top: 80px;
            padding-bottom: 40px;
            padding-left: 40px;
            padding-right: 40px;
        }
        
        @media (max-width:921px) {
            .site-above-footer-wrap[data-section="section-above-footer-builder"] {
                padding-top: 50px;
                padding-bottom: 50px;
                padding-left: 50px;
                padding-right: 50px;
            }
        }
        
        @media (max-width:544px) {
            .site-above-footer-wrap[data-section="section-above-footer-builder"] {
                padding-top: 40px;
                padding-bottom: 40px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        
        .site-above-footer-wrap[data-section="section-above-footer-builder"] {
            display: grid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .site-above-footer-wrap[data-section="section-above-footer-builder"] {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .site-above-footer-wrap[data-section="section-above-footer-builder"] {
                display: grid;
            }
        }
        
        .site-primary-footer-wrap {
            padding-top: 45px;
            padding-bottom: 45px;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {

            background-image: none;
            ;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row,
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] .site-footer-section {
            align-items: center;
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }
        
        .ast-builder-grid-row-3-cheavy .ast-builder-grid-row {
            grid-template-columns: 1fr 2fr 1fr;
        }
        
        @media (max-width:921px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width:544px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
            padding-top: 48px;
            padding-bottom: 24px;
            padding-left: 40px;
            padding-right: 40px;
        }
        
        @media (max-width:921px) {
            .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                padding-top: 40px;
                padding-bottom: 24px;
                padding-left: 40px;
                padding-right: 40px;
            }
        }
        
        .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
            display: grid;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
                display: grid;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner {
            text-align: left;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"].footer-widget-area-inner {
                text-align: center;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
            color: #26262c;
            font-size: 32px;
            font-size: 2rem;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 25px;
                font-size: 1.5625rem;
            }
        }
        
        @media (max-width:544px) {
            .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
                display: block;
            }
        }
        
        .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-4"] {
                display: block;
            }
        }
        
        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }
        
        .elementor-post.elementor-grid-item.hentry {
            margin-bottom: 0;
        }
        
        .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
        .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
            width: auto;
            margin: 0;
            float: none;
        }
        
        .ast-left-sidebar .elementor-section.elementor-section-stretched,
        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important;
        }
        
        .elementor-template-full-width .ast-container {
            display: block;
        }
        
        @media (max-width:544px) {
            .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
                width: auto;
                margin: 0;
            }
            .elementor-element .woocommerce .woocommerce-result-count {
                float: none;
            }
        }
        
        .ast-header-break-point .main-header-bar {
            border-bottom-width: 1px;
        }
        
        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 1px;
            }
        }
        
        .ast-safari-browser-less-than-11 .main-header-menu .menu-item,
        .ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items {
            display: block;
        }
        
        .main-header-menu .menu-item,
        #astra-footer-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .main-header-menu>.menu-item>.menu-link,
        #astra-footer-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex;
        }
        
        .ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
            top: .2em;
            margin-top: 0px;
            margin-left: 0px;
            width: .65em;
            transform: translate(0, -2px) rotateZ(270deg);
        }
        
        .ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
            transform: rotateX(180deg);
        }
        
        .ast-separate-container .blog-layout-1,
        .ast-separate-container .blog-layout-2,
        .ast-separate-container .blog-layout-3 {
            background-color: transparent;
            background-image: none;
        }
        
        .ast-separate-container .ast-article-post {
            background-color: #ebebeb;
            ;
            background-image: none;
            ;
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-post {
                background-image: none;
                ;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-post {
                background-image: none;
                ;
            }
        }
        
        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .ast-separate-container .comments-area .comment-respond,
        .ast-separate-container .comments-area .ast-comment-list li,
        .ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container.ast-two-container #secondary .widget,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .comments-area .comments-title {
            background-color: #ebebeb;
            ;
            background-image: none;
            ;
        }
        
        @media (max-width:921px) {
            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title {
                background-image: none;
                ;
            }
        }
        
        @media (max-width:544px) {
            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title {
                background-image: none;
                ;
            }
        }
        
        .ast-off-canvas-active body.ast-main-header-nav-open {
            overflow: hidden;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-header {
            -js-display: flex;
            display: flex;
            justify-content: flex-end;
            min-height: calc( 1.2em + 24px);
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-header .menu-toggle-close {
            background: transparent;
            border: 0;
            font-size: 24px;
            line-height: 1;
            padding: .6em;
            color: inherit;
            -js-display: flex;
            display: flex;
            box-shadow: none;
        }
        
        .ast-mobile-popup-drawer.ast-mobile-popup-full-width .ast-mobile-popup-inner {
            max-width: none;
            transition: transform 0s ease-in, opacity 0.2s ease-in;
        }
        
        .ast-mobile-popup-drawer.active {
            left: 0;
            opacity: 1;
            right: 0;
            z-index: 100000;
            transition: opacity 0.25s ease-out;
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-overlay {
            opacity: 1;
            cursor: pointer;
            visibility: visible;
        }
        
        body.admin-bar .ast-mobile-popup-drawer,
        body.admin-bar .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            top: 32px;
        }
        
        body.admin-bar.ast-primary-sticky-header-active .ast-mobile-popup-drawer,
        body.admin-bar.ast-primary-sticky-header-active .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            top: 0px;
        }
        
        @media (max-width: 782px) {
            body.admin-bar .ast-mobile-popup-drawer,
            body.admin-bar .ast-mobile-popup-drawer .ast-mobile-popup-inner {
                top: 46px;
            }
        }
        
        .ast-mobile-popup-content>*,
        .ast-desktop-popup-content>* {
            padding: 10px 0;
            height: auto;
        }
        
        .ast-mobile-popup-content>*:first-child,
        .ast-desktop-popup-content>*:first-child {
            padding-top: 10px;
        }
        
        .ast-mobile-popup-content>.ast-builder-menu,
        .ast-desktop-popup-content>.ast-builder-menu {
            padding-top: 0;
        }
        
        .ast-mobile-popup-content>*:last-child,
        .ast-desktop-popup-content>*:last-child {
            padding-bottom: 0;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-icon,
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children .sub-menu,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-icon {
            display: none;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.ast-inline-search label,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.ast-inline-search label {
            width: 100%;
        }
        
        .ast-mobile-popup-content .ast-builder-menu-mobile .main-header-menu,
        .ast-mobile-popup-content .ast-builder-menu-mobile .main-header-menu .sub-menu {
            background-color: transparent;
        }
        
        .ast-mobile-popup-content .ast-icon svg {
            height: .85em;
            width: .95em;
            margin-top: 15px;
        }
        
        .ast-mobile-popup-content .ast-icon.icon-search svg {
            margin-top: 0;
        }
        
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-fade>.menu-item>.sub-menu,
        .ast-mobile-popup-drawer.show,
        .ast-desktop .ast-desktop-popup-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
            opacity: 1;
            visibility: visible;
        }
        
        .ast-mobile-popup-drawer {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -99999rem;
            right: 99999rem;
            transition: opacity 0.25s ease-in, left 0s 0.25s, right 0s 0.25s;
            opacity: 0;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-inner {
            width: 100%;
            transform: translateX(100%);
            max-width: 90%;
            right: 0;
            top: 0;
            background: #fafafa;
            color: #3a3a3a;
            bottom: 0;
            opacity: 0;
            position: fixed;
            box-shadow: 0 0 2rem 0 rgba(0, 0, 0, 0.1);
            -js-display: flex;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease-in, opacity 0.2s ease-in;
            overflow-y: auto;
            overflow-x: hidden;
        }
        
        .ast-mobile-popup-drawer.ast-mobile-popup-left .ast-mobile-popup-inner {
            transform: translateX(-100%);
            right: auto;
            left: 0;
        }
        
        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-popup-drawer .main-header-bar-navigation ul .menu-item .sub-menu .menu-link {
            padding-left: 30px;
        }
        
        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-popup-drawer .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
            padding-left: 40px;
        }
        
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            right: calc( 20px - 0.907em);
        }
        
        .ast-mobile-popup-drawer.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            left: calc( 20px - 0.907em);
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.slide-search,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.slide-search {
            width: 100%;
            position: relative;
            display: block;
            right: auto;
            transform: none;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.slide-search .search-form,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-form,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.slide-search .search-form,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-form {
            right: 0;
            visibility: visible;
            opacity: 1;
            position: relative;
            top: auto;
            transform: none;
            padding: 0;
            display: block;
            overflow: hidden;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-field,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-field {
            width: 100%;
            padding-right: 5.5em;
        }
        
        .ast-mobile-popup-drawer .ast-mobile-popup-content .ast-search-menu-icon .search-submit,
        .ast-mobile-popup-drawer .ast-desktop-popup-content .ast-search-menu-icon .search-submit {
            display: block;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding: 0 1em;
            border-radius: 0;
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            opacity: 1;
            visibility: visible;
            transform: translateX(0%);
        }
        
        .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            background-color: #ffffff;
            ;
        }
        
        .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-desktop-header-content {
            background-color: #ffffff;
            ;
        }
        
        .ast-mobile-popup-content>*,
        .ast-mobile-header-content>*,
        .ast-desktop-popup-content>*,
        .ast-desktop-header-content>* {
            padding-top: 0;
            padding-bottom: 0;
        }
        
        .content-align-flex-start .ast-builder-layout-element {
            justify-content: flex-start;
        }
        
        .content-align-flex-start .main-header-menu {
            text-align: left;
        }
        
        .ast-mobile-popup-drawer.active .menu-toggle-close {
            color: #3a3a3a;
        }
        
        .ast-mobile-header-wrap .ast-primary-header-bar,
        .ast-primary-header-bar .site-primary-header-wrap {
            min-height: 96px;
        }
        
        .ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
            line-height: 96px;
        }
        
        @media (max-width:921px) {
            #masthead .ast-mobile-header-wrap .ast-primary-header-bar,
            #masthead .ast-mobile-header-wrap .ast-below-header-bar {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        
        .ast-header-break-point .ast-primary-header-bar {
            border-bottom-width: 0;
            border-bottom-color: #eaeaea;
            border-bottom-style: solid;
        }
        
        @media (min-width:922px) {
            .ast-primary-header-bar {
                border-bottom-width: 0;
                border-bottom-color: #eaeaea;
                border-bottom-style: solid;
            }
        }
        
        .ast-primary-header-bar {
            background-color: #ffffff;
            ;
            background-image: none;
            ;
        }
        
        @media (max-width:921px) {
            .ast-mobile-header-wrap .ast-primary-header-bar,
            .ast-primary-header-bar .site-primary-header-wrap {
                min-height: 80px;
            }
        }
        
        @media (max-width:544px) {
            .ast-mobile-header-wrap .ast-primary-header-bar,
            .ast-primary-header-bar .site-primary-header-wrap {
                min-height: 72px;
            }
        }
        
        .ast-primary-header-bar {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-fill {
            color: #ffffff;
            border: none;
            background: var(--ast-global-color-0);
            border-radius: 2px;
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
            width: 20px;
            height: 20px;
            fill: #ffffff;
        }
        
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
            color: #ffffff;
        }
        
        .ast-builder-menu-mobile .main-navigation .menu-item>.menu-link {
            font-family: Georgia, Times, serif;
            font-weight: 700;
            line-height: 1;
        }
        
        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }
        
        .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
            content: unset;
        }
        
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .main-header-menu {
            border-top-width: 1px;
            border-color: #eaeaea;
        }
        
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .menu-item .menu-link {
            border-bottom-width: 1px;
            border-color: #eaeaea;
            border-style: solid;
        }
        
        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }
        
        @media (max-width:921px) {
            .ast-builder-menu-mobile .main-navigation {
                font-size: 15px;
                font-size: 0.9375rem;
            }
            .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
                padding-top: 25px;
                padding-bottom: 25px;
                padding-left: 25px;
                padding-right: 25px;
            }
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 25px;
                right: calc( 25px - 0.907em);
            }
            .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }
        
        @media (max-width:544px) {
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 25px;
            }
        }
        
        .ast-builder-menu-mobile .main-navigation {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }
        
        .footer-nav-wrap .astra-footer-vertical-menu {
            display: grid;
        }
        
        @media (min-width: 769px) {
            .footer-nav-wrap .astra-footer-horizontal-menu li {
                margin: 0;
            }
            .footer-nav-wrap .astra-footer-horizontal-menu a {
                padding: 0 0.5em;
            }
        }
        
        @media (min-width: 769px) {
            .footer-nav-wrap .astra-footer-horizontal-menu li:first-child a {
                padding-left: 0;
            }
            .footer-nav-wrap .astra-footer-horizontal-menu li:last-child a {
                padding-right: 0;
            }
        }
        
        .footer-widget-area[data-section="section-footer-menu"] .astra-footer-horizontal-menu {
            justify-content: center;
        }
        
        .footer-widget-area[data-section="section-footer-menu"] .astra-footer-vertical-menu .menu-item {
            align-items: center;
        }
        
        #astra-footer-menu .menu-item>a {
            padding-left: 16px;
            padding-right: 16px;
        }
        
        @media (max-width:921px) {
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-tablet-horizontal-menu {
                justify-content: center;
            }
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-tablet-vertical-menu {
                display: grid;
            }
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-tablet-vertical-menu .menu-item {
                align-items: center;
            }
            #astra-footer-menu .menu-item>a {
                padding-left: 16px;
                padding-right: 16px;
            }
            #astra-footer-menu {
                margin-top: 16px;
                margin-bottom: 16px;
            }
        }
        
        @media (max-width:544px) {
            #astra-footer-menu {
                margin-top: 16px;
                margin-bottom: 16px;
            }
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-mobile-horizontal-menu {
                justify-content: center;
            }
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-mobile-vertical-menu {
                display: grid;
            }
            .footer-widget-area[data-section="section-footer-menu"] .astra-footer-mobile-vertical-menu .menu-item {
                align-items: center;
            }
            #astra-footer-menu .menu-item>a {
                padding-top: 2px;
                padding-bottom: 2px;
            }
        }
        
        .footer-widget-area[data-section="section-footer-menu"] {
            display: block;
        }
        
        @media (max-width:921px) {
            .ast-header-break-point .footer-widget-area[data-section="section-footer-menu"] {
                display: block;
            }
        }
        
        @media (max-width:544px) {
            .ast-header-break-point .footer-widget-area[data-section="section-footer-menu"] {
                display: block;
            }
        }
        
         :root {
            --e-global-color-astglobalcolor0: #4747d7;
            --e-global-color-astglobalcolor1: #3939c8;
            --e-global-color-astglobalcolor2: #26262c;
            --e-global-color-astglobalcolor3: #76767f;
            --e-global-color-astglobalcolor4: #ffffff;
            --e-global-color-astglobalcolor5: #00123A;
            --e-global-color-astglobalcolor6: #243673;
            --e-global-color-astglobalcolor7: #FBFCFF;
            --e-global-color-astglobalcolor8: #BFD1FF;
        }
    </style>
    <link rel="stylesheet" id="astra-google-fonts-css" href="https://fonts.googleapis.com/css?family=Roboto%3A400%2C500&#038;display=fallback&#038;ver=3.7.5" media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="./../wp-includes/css/dist/block-library/style.min.css?ver=5.9" media="all">
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }
        
        body {
            margin: 0;
        }
        
        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }
        
        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }
        
        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }
        
        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-color {
            color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-color {
            color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-color {
            color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-color {
            color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-color {
            color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-color {
            color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-color {
            color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-color {
            color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-color {
            color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-background-color {
            background-color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-background-color {
            background-color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-background-color {
            background-color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-background-color {
            background-color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-background-color {
            background-color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-background-color {
            background-color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-background-color {
            background-color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-background-color {
            background-color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-background-color {
            background-color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-ast-global-color-0-border-color {
            border-color: var(--wp--preset--color--ast-global-color-0) !important;
        }
        
        .has-ast-global-color-1-border-color {
            border-color: var(--wp--preset--color--ast-global-color-1) !important;
        }
        
        .has-ast-global-color-2-border-color {
            border-color: var(--wp--preset--color--ast-global-color-2) !important;
        }
        
        .has-ast-global-color-3-border-color {
            border-color: var(--wp--preset--color--ast-global-color-3) !important;
        }
        
        .has-ast-global-color-4-border-color {
            border-color: var(--wp--preset--color--ast-global-color-4) !important;
        }
        
        .has-ast-global-color-5-border-color {
            border-color: var(--wp--preset--color--ast-global-color-5) !important;
        }
        
        .has-ast-global-color-6-border-color {
            border-color: var(--wp--preset--color--ast-global-color-6) !important;
        }
        
        .has-ast-global-color-7-border-color {
            border-color: var(--wp--preset--color--ast-global-color-7) !important;
        }
        
        .has-ast-global-color-8-border-color {
            border-color: var(--wp--preset--color--ast-global-color-8) !important;
        }
        
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }
        
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }
        
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }
        
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }
        
        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }
        
        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        
        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        
        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        
        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        
        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        
        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }
        
        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }
        
        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        
        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }
        
        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
        
        @media (max-width:380px) {
            h3 {
                font-size: 52px !important;
                margin-bottom: 20% !important;
            }
            .card>.card-header a::before {
                font-family: fontawesome;
                content: "\f067 ";
                color: #282425;
                float: right;
                margin-left: 12px;
                margin-top: 12px;
            }
        }
        
        @media (max-width:480px) {
            h3 {
                font-size: 52px !important;
                margin-bottom: 10% !important;
            }
            .card>.card-header a::before {
                font-family: fontawesome;
                content: "\f067 ";
                color: #282425;
                float: right;
                margin-left: 12px;
                margin-top: 12px;
            }
        }
        
        @media (max-width:380px) {
            h3 {
                font-size: 52px !important;
                margin-bottom: 18% !important;
            }
            .card>.card-header a::before {
                font-family: fontawesome;
                content: "\f067 ";
                color: #282425;
                float: right;
                margin-left: 12px;
                margin-top: 12px;
            }
        }
    </style>
    <link rel="stylesheet" id="wpforms-base-css" href="./../wp-content/plugins/wpforms-lite/assets/css/wpforms-base.min.css?ver=1.7.1.2" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="./../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.13.0" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="./../wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.4.8" media="all">
    <style id="elementor-frontend-inline-css">
        @font-face {
            font-family: eicons;
            src: url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
            src: url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(./../wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }
    </style>
    <link rel="stylesheet" id="elementor-post-10-css" href="./../wp-content/uploads/elementor/css/post-10.css?ver=1638437238" media="all">
    <link rel="stylesheet" id="elementor-post-155-css" href="./../wp-content/uploads/elementor/css/post-155.css?ver=1639477631" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.9"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="./../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="./../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
    <!--[if IE]>
    <script src='./wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=3.7.5' id='astra-flexibility-js'></script>
    <script id='astra-flexibility-js-after'>
    flexibility(document.documentElement);
    </script>
    <![endif]-->
    <link rel="https://api.w.org/" href="./../wp-json/index.html">
    <link rel="alternate" type="application/json" href="./../wp-json/wp/v2/pages/155/index.html">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./../xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="./../wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.9">
    <link rel="shortlink" href="./../index.html?p=155">
    <link rel="alternate" type="application/json+oembed" href="./../wp-json/oembed/1.0/embed/index.html?url=.%2Fcontact%2F">
    <link rel="alternate" type="text/xml+oembed" href="./../wp-json/oembed/1.0/embed/index.html?url=.%2Fcontact%2F&#038;format=xml">
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="./../wp-content/uploads/2021/12/gram-150x150.png" sizes="32x32">
    <link rel="icon" href="./../wp-content/uploads/2021/12/gram.png" sizes="192x192">
    <link rel="apple-touch-icon" href="./../wp-content/uploads/2021/12/gram.png">
    <meta name="msapplication-TileImage" content="./wp-content/uploads/2021/12/gram.png">
</head>

<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-155 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.5 elementor-default elementor-kit-10 elementor-page elementor-page-155">

    <a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

    <div class="hfeed site" id="page">
        <header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope"
            itemid="#masthead">
            <div id="ast-desktop-header" data-toggle-type="off-canvas">
                <div class="ast-main-header-wrap main-header-bar-wrap ">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
                        <div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
                            <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-grid-center-col-layout">
                                <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                    <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                        <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                            <span class="site-logo-img"><a href="./../index.html" class="custom-logo-link" rel="home"><img width="120" height="77" src="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png" class="custom-logo" alt="Educationary" srcset="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png 120w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-300x193.png 300w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM.png 712w" sizes="(max-width: 120px) 100vw, 120px"></a></span>                                            </div>
                                        <!-- .site-branding -->
                                    </div>
                                    <div class="site-header-primary-section-left-center site-header-section ast-flex ast-grid-left-center-section">
                                    </div>
                                </div>
                                <div class="site-header-primary-section-center site-header-section ast-flex ast-grid-section-center">
                                    <div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
                                        <div class="ast-main-header-bar-alignment">
                                            <div class="main-header-bar-navigation">
                                                <nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="primary-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                                    <div class="main-navigation ast-inline-flex">
                                                        <ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile">
                                                            <li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-161"><a href="../index.html" aria-current="page" class="menu-link">Home</a></li>
                                                            <div class="dropdown">
                                                                <li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="./../About/index.html" class="menu-link" style="margin-top: 37%;">About</a></li>
                                                                <div class="dropdown-content">
                                                                    <a href="./../About/index.html#OurFeatures">Our Features</a>
                                                                    <a href="./../About/index.html#WhyUs">Why Us</a>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown">
                                                                <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="./../Services/index.html" class="menu-link" style="margin-top: 22%;">Our Services</a></li>
                                                                <div class="dropdown-content">
                                                                    <a href="./../Services/index.html#Institutions">Institutions</a>
                                                                    <a href="./../Services/index.html#Professionals">Professionals</a>
                                                                </div>
                                                            </div>
                                                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="./../Team/index.html" class="menu-link">Our Team</a></li>
                                                            <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="./../Blog/index.html" class="menu-link">Blog</a></li>
                                                            <!-- <li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-166"><a href="./../Gallery/index.html" class="menu-link">Gallery</a></li> -->
                                                            <li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-167"><a href="./../contact/index.php" class="menu-link">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                    <div class="site-header-primary-section-right-center site-header-section ast-flex ast-grid-right-center-section">
                                    </div>
                                    <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-hb-social-icons-1">
                                        <div class="ast-header-social-1-wrap ast-header-social-wrap">
                                            <div class="header-social-inner-wrap element-social-inner-wrap social-show-label-false ast-social-color-type-custom ast-social-stack-none ast-social-element-style-filled">
                                                <a href="https://play.google.com/store/"><button>Install Our App<i class='fab fa-google-play' style="margin-right: -10px; margin-left:5px;"></i></button></a>
                                                <a href="https://twitter.com/Educationary11" aria-label="Twitter" target="_blank" rel="noopener noreferrer" style="--color: #7acdee; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-twitter header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></span></a>
                                                <a href="https://www.facebook.com/Educationary.techno" aria-label="Facebook" target="_blank" rel="noopener noreferrer" style="--color: #557dbc; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-facebook header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></span></a>
                                                <a href="https://www.instagram.com/educationary.techno/" aria-label="Instagram" target="_blank" rel="noopener noreferrer" style="--color: #8a3ab9; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-instagram header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header Bar Wrap -->
            <div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="off-canvas">
                <div class="ast-main-header-wrap main-header-bar-wrap">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
                        <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                            <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                    <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                        <span class="site-logo-img"><a href="./../index.html" class="custom-logo-link" rel="home"><img width="120" height="77" src="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png" class="custom-logo" alt="Educationary" srcset="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png 120w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-300x193.png 300w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM.png 712w" sizes="(max-width: 120px) 100vw, 120px"></a></span>                                        </div>
                                    <!-- .site-branding -->
                                </div>
                            </div>
                            <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
                                    <div class="ast-button-wrap">
                                        <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-fill" aria-expanded="false">
					<span class="screen-reader-text">Main Menu</span>
					<span class="mobile-menu-toggle-icon">
						<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path></svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg></span>					</span>
									</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- #masthead -->
        <div id="content" class="site-content">
            <div class="ast-container">
                <div id="primary" class="content-area primary">
                    <main id="main" class="site-main">
                        <article class="post-155 page type-page status-publish ast-article-single" id="post-155" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
                            <header class="entry-header ast-header-without-markup">
                            </header>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-de4320f elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="background-color: #4747d7;" data-id="de4320f" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bdf3cf" data-id="7bdf3cf" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-61bec78 elementor-widget elementor-widget-heading" data-id="61bec78" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container" style=" text-align:center; padding: 10px;">
                                                    <h1 class="elementor-heading-title elementor-size-default"><span class="a1" style="color: #ffffff;"> Contact Us </span></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-de4320f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="de4320f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bdf3cf" data-id="7bdf3cf" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-12e05bb elementor-widget elementor-widget-text-editor" data-id="12e05bb" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container" style="text-align: center; margin-bottom: 5%; color: #000000; font-family: Roboto, Times;">
                                                    <h5 style="text-align:center !important; margin-top: 5%;"> Wish to enquire about admissions, syllabus, or anything else? <br>You can walk in during office hours, give us a call or simply submit the form here. </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div data-elementor-type="wp-page" data-elementor-id="155" class="elementor elementor-155" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-a6d44e6 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a6d44e6" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no" style="font-family: Roboto, Times;">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4cc698" data-id="a4cc698" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0b108ae elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0b108ae" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">
                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon elementor-animation-">
			                                                    	<i aria-hidden="true" class="fas fa-map-marker-alt"></i>				</span>
                                                                </div>
                                                                <div class="elementor-icon-box-content">
                                                                    <h6 class="elementor-icon-box-title">
                                                                        <span>
						                                                    Address	
                                                                        </span>
                                                                    </h6>
                                                                    <p class="elementor-icon-box-description" style="color:#ffffff !important;">
                                                                        Educationary Technocart Pvt Ltd<br> # 62, Bye lane no 2, ABC, Tarun Nagar G.S.Road Guwahati -781005 Assam </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f2c21dd elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="f2c21dd" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">
                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon elementor-animation-">
				                                                    <i aria-hidden="true" class="fas fa-phone"></i>				</span>
                                                                </div>
                                                                <div class="elementor-icon-box-content">
                                                                    <h6 class="elementor-icon-box-title">
                                                                        <span>
						                                                    Phone
                                                                        </span>
                                                                    </h6>
                                                                    <p class="elementor-icon-box-description">
                                                                        <a href="tel:+916000459266" style="color: #ffffff;">+91 6000459266</a> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4d23396 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4d23396" data-element_type="widget" data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">
                                                                <div class="elementor-icon-box-icon">
                                                                    <span class="elementor-icon elementor-animation-">
				                                                    <i aria-hidden="true" class="fas fa-envelope"></i>				</span>
                                                                </div>
                                                                <div class="elementor-icon-box-content">
                                                                    <h6 class="elementor-icon-box-title">
                                                                        <span>
						                                                    Email
                                                    					</span>
                                                                    </h6>
                                                                    <p class="elementor-icon-box-description">
                                                                        <a href="mailto:help@educationarytechno.com" style="color: #ffffff"> help@educationarytechno.com </a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6fbe358" data-id="6fbe358" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e99e4db elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="e99e4db" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Send Us a Message</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-13370ce elementor-widget elementor-widget-wpforms" data-id="13370ce" data-element_type="widget" data-widget_type="wpforms.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wpforms-container " id="wpforms-5">
                                                                <!-- <form id="wpforms-form-5" class="wpforms-validate wpforms-form" data-formid="5" method="post" enctype="multipart/form-data" action="mail.php" data-token="1ee47a8bb568d2093523ffa518450bed" name="Email" enctype="multipart/form-data"> -->
                                                                    <!-- <div class="wpforms-field-container">
                                                                        <div id="wpforms-5-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                                                                            <label class="wpforms-field-label wpforms-label-hide" for="wpforms-5-field_0">Name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-5-field_0"
                                                                                class="wpforms-field-large wpforms-field-required" name="name" placeholder="Full name" required>
                                                                        </div>
                                                                        <div id="wpforms-5-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                                                            <label class="wpforms-field-label wpforms-label-hide" for="wpforms-5-field_1">Email <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-5-field_1"
                                                                                class="wpforms-field-large wpforms-field-required" name="email" placeholder="Email address" required>
                                                                        </div>
                                                                        <div id="wpforms-5-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2">
                                                                            <label class="wpforms-field-label wpforms-label-hide" for="wpforms-5-field_2">Message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-5-field_2" class="wpforms-field-medium wpforms-field-required"
                                                                                name="message" placeholder="Your message" required></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpforms-submit-container">
                                                                        <input type="hidden" name="wpforms[id]" value="5"><input type="hidden" name="wpforms[author]" value="1"><button type="submit"
                                                                            name="wpforms[submit]" id="wpforms-submit-5" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="Send">Submit</button>
                                                                            <button type="reset"
                                                                            name="wpforms[clear]" id="wpforms-clear-5" class="wpforms-clear" data-alt-text="CLear" data-submit-text="Clear" aria-live="assertive" value="Clear">Clear</button>
                                                                    </div> -->
                                                                    <form method="POST">
                                                                        <?php echo $msg; ?>
                                                                        <p style="color:#ffffff !important;">Name</p> <input type="text" name="name" required>
                                                                        <p style="margin-top: 5%; color:#ffffff !important;">Email</p> <input type="text" name="email" required>
                                                                        <p style="margin-top: 5%; color:#ffffff !important;">Message</p><textarea name="message" rows="6" cols="25" required></textarea><br />
                                                                        <input type="submit" name ="submit" value="Send">
                                                                        <input type="reset" value="Clear">
                                                                    </form>
                                                            </div>
                                                            <!-- .wpforms-container -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <!-- .entry-header -->
                            <div class="entry-content clear" itemprop="text">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-de4320f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="de4320f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bdf3cf" data-id="7bdf3cf" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-61bec78 elementor-widget elementor-widget-heading" data-id="61bec78" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default" style="text-align: center; margin-top: 5%; margin-bottom: 5%; color: #000000;">FAQs</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12" id="c1">
                                            <div class="tab-content">
                                                <div id="tab1" class="tab-pane fade show active">
                                                    <div class="accordion">
                                                        <div class="card">
                                                            <div class="card-header" id="infraOne">
                                                                <a href="#collapseOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    <p class="mb-0">
                                                                        What is the work of Educationary Technocart?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse" aria-labelledby="infraOne" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    Educationary is the largest hub of schools, colleges, universities, and your consultant to guide you in choosing the best. We are a one-stop solution to all your learning queries and needs. We help people to explore Schools, Colleges, Universities free-of-cost
                                                                    on our app with regular tips, admission support & providing deep insights into your favorite educational institutions. And apart from this we also provide some paid services like resume
                                                                    building, Coaching, tuitions, etc. </div>
                                                            </div>
                                                        </div>
                                                        <!-- close card-->
                                                        <div class="card">
                                                            <div class="card-header" id="infraTwo">
                                                                <a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <p class="mb-0">Why will exploring Educationary be fruitful for your academics?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" aria-labelledby="infraTwo" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    At Educationary, we thrive to give you the best. We have curated the process to search, select and sort the best educational institutes and make your learning pathway smooth. Our enthusiastic field partners hunt for the exact and verified detailed information
                                                                    of the schools, colleges, coaching institutes, and other educational needs across the country.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- card-->
                                                        <div class="card">
                                                            <div class="card-header" id="infraThree">
                                                                <a href="#collapseThree" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <p class="mb-0">How can one contact our support team?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" aria-labelledby="infraThree" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    Please contact us at +91 6000459266 or write to us at: help@educationarytechno.com and we will help to resolve the issue in real time.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- card-->
                                                        <div class="card">
                                                            <div class="card-header" id="infraFour">
                                                                <a href="#collapseFour" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <p class="mb-0">
                                                                        Why can you rely upon Educationary?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseFour" class="collapse" aria-labelledby="infraFour" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    Students can register themselves through Educationary, get access to wide range of exclusive benefits, and some of the benefits are:
                                                                    <ul>
                                                                        <li>Exclusive access to the wide range of educational institutions at fingertips.</li>
                                                                        <li>SMS and Email alerts about daily updates, tips and newsletters.</li>
                                                                        <li>Search, compare and select facilities in case of personal tutors, coaching institutes,etc.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="infraFive">
                                                                <a href="#collapseFive" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                    <p class="mb-0">
                                                                        How do I know if I registered successfully?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseFive" class="collapse" aria-labelledby="infraFive" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    You can register simply by adding your contact number, Name, mail ID and basic details about you. Upon successful completion of registering on our application, you will receive a confirmation email and SMS with your registration code, password and other
                                                                    details.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="infraSix">
                                                                <a href="#collapseSix" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                    <p class="mb-0">
                                                                        How Educationary can benefit you besides school and college searches?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="collapseSix" class="collapse" aria-labelledby="infraSix" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    Educationary is your child’s best friend. Along with a vast range of schools and college details, you will get to search the best pg/hostel in town, best rated tutors and coaching institutes, school stationeries, and uniforms for the students. Alongside
                                                                    that, we also help in resume building, career counseling, etc.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- accordion-->
                                            </div>
                                            <!-- tab 1-->
                                        </div>
                                        <!-- tab content-->
                                    </div>
                                </div>
                            </div>

                </div>
                <!-- .entry-content .clear -->



                </article>
                <!-- #post-## -->

                </main>
                <!-- #main -->


            </div>
            <!-- #primary -->


        </div>
        <!-- ast-container -->
    </div>
    <!-- #content -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/30c21ac8e0.js"></script>

    <div id="ast-mobile-popup-wrapper">
        <div id="ast-mobile-popup" class="ast-mobile-popup-drawer content-align-flex-start ast-mobile-popup-right">
            <div class="ast-mobile-popup-overlay"></div>
            <div class="ast-mobile-popup-inner">
                <div class="ast-mobile-popup-header">
                    <button id="menu-toggle-close" class="menu-toggle-close" aria-label="Close menu">
							<span class="ast-svg-iconset">
								<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg></span>							</span>
						</button>
                </div>
                <div class="ast-mobile-popup-content" style="color: #000000">
                    <div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-header-mobile-menu">
                        <div class="ast-main-header-bar-alignment">
                            <div class="main-header-bar-navigation">
                                <nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="ast-mobile-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                    <div class="main-navigation">
                                        <ul id="ast-hf-mobile-menu" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-161"><a href="./../index.html" class="menu-link" style="color: #000000;">Home</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="./../About/index.html" class="menu-link" style="color: #000000;">About</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="./../Services/index.html" class="menu-link" style="color: #000000;">Our Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="./../Team/index.html" class="menu-link" style="color: #000000;">Our Team</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="./../Blog/index.html" class="menu-link" style="color: #000000;">Blog</a></li>
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-166"><a href="./../Gallery/index.html" class="menu-link">Gallery</a></li> -->
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="./../contact/index.php" class="menu-link" style="color: #000000;">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-hb-social-icons-1">
                        <div class="ast-header-social-1-wrap ast-header-social-wrap">
                            <a href="https://play.google.com/store/"><button style="margin-left: -29px">Install Our App<i class='fab fa-google-play' style="margin-right: -10px; margin-left:5px;"></i></button></a>
                            <div class="header-social-inner-wrap element-social-inner-wrap social-show-label-false ast-social-color-type-custom ast-social-stack-none ast-social-element-style-filled">
                                <a href="https://twitter.com/Educationary11" aria-label="Twitter" target="_blank" rel="noopener noreferrer" style="--color: #7acdee; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-twitter header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></span></a>
                                <a href="https://www.facebook.com/Educationary.techno" aria-label="Facebook" target="_blank" rel="noopener noreferrer" style="--color: #557dbc; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-facebook header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></span></a>
                                <a href="https://www.instagram.com/educationary.techno/" aria-label="Instagram" target="_blank" rel="noopener noreferrer" style="--color: #8a3ab9; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-instagram header-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ast-desktop-popup-content">
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">
        <div class="site-above-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-3-lheavy ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-inline ast-footer-row-mobile-stack"
            data-section="section-above-footer-builder">
            <div class="ast-builder-grid-row-container-inner">
                <div class="ast-builder-footer-grid-columns site-above-footer-inner-wrap ast-builder-grid-row">
                    <div class="site-footer-above-section-1 site-footer-section site-footer-section-1">
                        <aside class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner" data-section="sidebar-widgets-footer-widget-1" aria-label="Footer Widget 1">
                            <section id="text-1" class="widget widget_text">
                                <h2 class="widget-title">Educationary Technocart Pvt Ltd</h2>
                                <div class="textwidget">
                                    <p>
                                        <a href="tel:+916000459266" style="color: #7f7690;"> CALL US : +91 6000459266</a> <br><a href="mailto:help@educationarytechno.com" style="color: #7f7690;"> MAIL US : help@educationarytechno.com </a>
                                    </p>
                                </div>
                            </section>
                        </aside>
                    </div>
                    <div class="site-footer-above-section-2 site-footer-section site-footer-section-2">
                    </div>
                    <div class="site-footer-above-section-3 site-footer-section site-footer-section-3">
                        <aside class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner" data-section="sidebar-widgets-footer-widget-2" aria-label="Footer Widget 2">
                            <section id="text-2" class="widget widget_text">
                                <h2 class="widget-title">Main Office</h2>
                                <div class="textwidget">
                                    <p># 62, Bye lane no 2, ABC, Tarun Nagar<br> G.S.Road Guwahati -781005 Assam</p>
                                </div>

                            </section>
                        </aside>
                    </div>
                </div>
            </div>

        </div>
        <div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-3-cheavy ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
            data-section="section-primary-footer-builder">
            <div class="ast-builder-grid-row-container-inner">
                <div class="ast-builder-footer-grid-columns site-primary-footer-inner-wrap ast-builder-grid-row">
                    <div class="site-footer-primary-section-1 site-footer-section site-footer-section-1">
                        <aside class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner" data-section="sidebar-widgets-footer-widget-4" aria-label="Footer Widget 4">
                            <section id="media_image-2" class="widget widget_media_image"><img width="300" height="300" src="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png" class="image wp-image-632  attachment-150x97 size-150x97" alt="" loading="lazy" style="max-width: 100%; height: auto;"
                                    srcset="./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-300x193.png 300w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM-120x77.png 120w, ./../wp-content/uploads/2021/12/WhatsApp-Image-2021-11-21-at-12.05.28-AM.png 712w"
                                    sizes="(max-width: 300px) 100vw, 300px"></section>
                        </aside>
                    </div>
                    <div class="site-footer-primary-section-2 site-footer-section site-footer-section-2">
                        <div class="footer-widget-area widget-area site-footer-focus-item" data-section="section-footer-menu">
                            <div class="footer-bar-navigation">
                                <nav class="site-navigation ast-flex-grow-1 navigation-accessibility footer-navigation" id="footer-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                    <div class="footer-nav-wrap">
                                        <ul id="astra-footer-menu" class="ast-nav-menu ast-flex astra-footer-horizontal-menu astra-footer-tablet-horizontal-menu astra-footer-mobile-vertical-menu" style="color: #000000 !important;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-161"><a href="../index.html" aria-current="page" class="menu-link" style="color: #353535 !important;">Home</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="./../About/index.html" class="menu-link" style="color: #353535 !important;">About</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="./../Services/index.html" class="menu-link" style="color: #353535 !important;">Our Services</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="./../Team/index.html" class="menu-link" style="color: #353535 !important;">Our Team</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="./../Blog/index.html" class="menu-link" style="color: #353535 !important;">Blog</a></li>
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-166"><a href="./../Gallery/index.html" class="menu-link">Gallery</a></li> -->
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="./../contact/index.php" class="menu-link">Contact</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a href="#" class="menu-link" style="color: #353535 !important;">Privacy Policy</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="#" class="menu-link" style="color: #353535 !important;">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-primary-section-3 site-footer-section site-footer-section-3">
                        <div class="ast-builder-layout-element ast-flex site-footer-focus-item" data-section="section-fb-social-icons-1">
                            <div class="ast-footer-social-1-wrap ast-footer-social-wrap">
                                <div class="footer-social-inner-wrap element-social-inner-wrap social-show-label-false ast-social-color-type-custom ast-social-stack-none ast-social-element-style-filled">
                                    <a href="https://twitter.com/Educationary11" aria-label="Twitter" target="_blank" rel="noopener noreferrer" style="--color: #7acdee; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-twitter footer-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></span></a>
                                    <a href="https://www.facebook.com/Educationary.techno" aria-label="Facebook" target="_blank" rel="noopener noreferrer" style="--color: #557dbc; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-facebook footer-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></span></a>
                                    <a href="https://www.instagram.com/educationary.techno/" aria-label="Instagram" target="_blank" rel="noopener noreferrer" style="--color: #8a3ab9; --background-color: transparent;" class="ast-builder-social-element ast-inline-flex ast-instagram footer-social-item"><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
            data-section="section-below-footer-builder">
            <div class="ast-builder-grid-row-container-inner">
                <div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
                    <div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
                        <div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
                            <div class="ast-footer-copyright">
                                <p style="text-align: center !important;">Copyright &copy; 2022 Educationary | Powered by Llit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->
    <link rel="stylesheet" id="e-animations-css" href="./../wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.4.8" media="all">
    <script id="astra-theme-js-js-extra">
        var astra = {
            "break_point": "921",
            "isRtl": ""
        };
    </script>
    <script src="./../wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=3.7.5" id="astra-theme-js-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.4.8" id="elementor-webpack-runtime-js"></script>
    <script src="./../wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script src="./../wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.4.8" id="elementor-frontend-modules-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script src="./../wp-includes/js/jquery/ui/core.min.js?ver=1.13.0" id="jquery-ui-core-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.4.8" id="share-link-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1" id="elementor-dialog-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.4.8",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "additional_custom_breakpoints": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": ".\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 155,
                "title": "Contact%20%E2%80%93%20Educationary",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="./../wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.4.8" id="elementor-frontend-js"></script>
    <script src="./../wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.4.8" id="preloaded-modules-js"></script>
    <script src="./../wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/educationery\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script src="./../wp-includes/js/wp-util.min.js?ver=5.9" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
    </script>
    <script src="./../wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.1.2" id="wpforms-elementor-js"></script>
    <script src="./../wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js?ver=1.19.3" id="wpforms-validation-js"></script>
    <script src="./../wp-content/plugins/wpforms-lite/assets/js/mailcheck.min.js?ver=1.1.2" id="wpforms-mailcheck-js"></script>
    <script src="./../wp-content/plugins/wpforms-lite/assets/js/punycode.min.js?ver=1.0.0" id="wpforms-punycode-js"></script>
    <script src="./../wp-content/plugins/wpforms-lite/assets/js/wpforms.js?ver=1.7.1.2" id="wpforms-js"></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wpforms_settings = {
                "val_required": "This field is required.",
                "val_email": "Please enter a valid email address.",
                "val_email_suggestion": "Did you mean {suggestion}?",
                "val_email_suggestion_title": "Click to accept this suggestion.",
                "val_email_restricted": "This email address is not allowed.",
                "val_number": "Please enter a valid number.",
                "val_number_positive": "Please enter a valid positive number.",
                "val_confirm": "Field values do not match.",
                "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
                "val_limit_characters": "{count} of {limit} max characters.",
                "val_limit_words": "{count} of {limit} max words.",
                "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
                "val_empty_blanks": "Please fill out all blanks.",
                "uuid_cookie": "",
                "locale": "en",
                "wpforms_plugin_url": ".\/wp-content\/plugins\/wpforms-lite\/",
                "gdpr": "",
                "ajaxurl": ".\/wp-admin\/admin-ajax.php",
                "mailcheck_enabled": "1",
                "mailcheck_domains": [],
                "mailcheck_toplevel_domains": ["dev"],
                "is_ssl": ""
            }
            /* ]]> */
    </script>
</body>

</html>