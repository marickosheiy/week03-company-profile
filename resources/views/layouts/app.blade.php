<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Velora Digital' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap"
          rel="stylesheet">


    <style>

        

        :root {

            --rose: #c96b88;

            --rose-dark: #a9516d;

            --rose-light: #f7e7ed;

            --blush: #fcf4f6;

            --cream: #fffdfc;

            --dark: #292326;

            --text: #5f5559;

            --border: #eadde1;

        }


        * {
            box-sizing: border-box;

            margin: 0;

            padding: 0;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            font-family: 'Inter', sans-serif;

            background: var(--cream);

            color: var(--dark);

            line-height: 1.7;

        }


        a {

            transition:
                color 0.25s ease,
                transform 0.25s ease,
                background 0.25s ease;

        }


       

        nav {

            height: 86px;

            padding: 0 8%;

            background: rgba(255, 253, 252, 0.94);

            backdrop-filter: blur(12px);

            display: flex;

            justify-content: space-between;

            align-items: center;

            border-bottom: 1px solid rgba(234, 221, 225, 0.7);

            position: sticky;

            top: 0;

            z-index: 1000;

        }


     

        .brand {

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

        }


        .brand-mark {

            width: 39px;

            height: 39px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--dark);

            color: white;

            border-radius: 50%;

            font-family: 'Playfair Display', serif;

            font-size: 18px;

            font-weight: 600;

            box-shadow:
                0 7px 18px rgba(41, 35, 38, 0.12);

        }


        .brand-name {

            font-family: 'Playfair Display', serif;

            font-size: 21px;

            font-weight: 600;

            color: var(--dark);

        }


        .brand-digital {

            font-family: 'Cormorant Garamond', serif;

            font-size: 22px;

            font-style: italic;

            color: var(--rose);

        }


     
        .nav-links {

            display: flex;

            align-items: center;

            gap: 34px;

        }


        .nav-links a {

            position: relative;

            padding: 10px 0;

            color: #5a5155;

            text-decoration: none;

            font-size: 14px;

            font-weight: 500;

            letter-spacing: 0.2px;

        }


        .nav-links a::after {

            content: "";

            position: absolute;

            left: 50%;

            bottom: 1px;

            width: 0;

            height: 2px;

            background: var(--rose);

            border-radius: 10px;

            transform: translateX(-50%);

            transition: width 0.25s ease;

        }


        .nav-links a:hover {

            color: var(--rose);

        }


        .nav-links a:hover::after {

            width: 100%;

        }


        .nav-links a.active {

            color: var(--rose);

            font-weight: 600;

        }


        .nav-links a.active::after {

            width: 100%;

        }


       

        h1,
        h2,
        h3 {

            font-family: 'Playfair Display', serif;

            font-weight: 600;

            color: var(--dark);

        }


        .section-label {

            color: var(--rose);

            font-family: 'Inter', sans-serif;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 14px;

        }


        

        .hero {

            min-height: 680px;

            padding: 100px 8%;

            display: flex;

            align-items: center;

            position: relative;

            overflow: hidden;

            background:

                radial-gradient(
                    circle at 82% 25%,
                    rgba(215, 155, 174, 0.24),
                    transparent 27%
                ),

                linear-gradient(
                    135deg,
                    #fffdfc 0%,
                    #fdf2f5 100%
                );

        }


        .hero::before {

            content: "";

            position: absolute;

            width: 520px;

            height: 520px;

            right: -190px;

            bottom: -250px;

            border: 1px solid rgba(201, 107, 136, 0.18);

            border-radius: 50%;

        }


        .hero::after {

            content: "";

            position: absolute;

            width: 330px;

            height: 330px;

            right: 50px;

            top: 100px;

            border: 1px solid rgba(201, 107, 136, 0.13);

            border-radius: 50%;

        }


        .hero-text {

            max-width: 760px;

            position: relative;

            z-index: 2;

        }


        .small-title {

            color: var(--rose);

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 22px;

        }


        .hero h1 {

            font-size: clamp(48px, 6vw, 76px);

            line-height: 1.02;

            letter-spacing: -2.5px;

            margin-bottom: 28px;

        }


        .hero h1 span {

            display: inline-block;

            color: var(--rose);

            font-family: 'Cormorant Garamond', serif;

            font-style: italic;

            font-weight: 500;

            letter-spacing: -1px;

        }


        .description {

            max-width: 620px;

            color: var(--text);

            font-size: 16px;

            line-height: 1.9;

            margin-bottom: 32px;

        }


        .hero-button {

            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding: 14px 24px;

            background: var(--dark);

            color: white;

            border-radius: 4px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            letter-spacing: 0.3px;

        }


        .hero-button:hover {

            background: var(--rose);

            transform: translateY(-2px);

        }


       

        .about-preview {

            padding: 120px 8%;

            background: white;

        }


        .about-text {

            max-width: 780px;

            margin: auto;

            text-align: center;

        }


        .about-text h2 {

            font-size: clamp(35px, 4vw, 48px);

            line-height: 1.2;

            letter-spacing: -1px;

            margin-bottom: 25px;

        }


        .about-text p:not(.section-label) {

            color: var(--text);

            font-size: 16px;

            line-height: 1.9;

        }


        .text-button {

            display: inline-block;

            margin-top: 25px;

            color: var(--rose);

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

        }


        .text-button:hover {

            color: var(--rose-dark);

            transform: translateX(4px);

        }


       

        .services-preview {

            padding: 120px 8%;

            background: var(--blush);

        }


        .section-heading {

            max-width: 720px;

            margin: 0 auto 60px;

            text-align: center;

        }


        .section-heading h2 {

            font-size: clamp(35px, 4vw, 48px);

            line-height: 1.2;

            margin-bottom: 20px;

        }


        .section-heading p:not(.section-label) {

            color: var(--text);

            font-size: 16px;

        }


        .service-cards {

            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;

        }


        .service-card {

            background: white;

            padding: 38px;

            border: 1px solid var(--border);

            border-radius: 5px;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;

        }


        .service-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 20px 45px rgba(65, 45, 52, 0.08);

        }


        .service-icon {

            width: 52px;

            height: 52px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 25px;

            background: var(--rose-light);

            color: var(--rose);

            border-radius: 50%;

            font-size: 22px;

        }


        .service-card h2,
        .service-card h3 {

            font-size: 22px;

            margin-bottom: 14px;

        }


        .service-card p {

            color: var(--text);

            font-size: 14px;

            line-height: 1.8;

        }


        

        .about-page {

            background: var(--cream);

            padding-bottom: 100px;

        }


        .about-header {

            min-height: 500px;

            padding: 90px 8%;

            display: flex;

            flex-direction: column;

            justify-content: center;

            position: relative;

            overflow: hidden;

            background:

                linear-gradient(
                    135deg,
                    #fffdfc,
                    #f9e9ee
                );

        }


        .about-header::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            right: -160px;

            top: -190px;

            border: 1px solid rgba(201, 107, 136, 0.18);

            border-radius: 50%;

        }


        .about-header h1 {

            max-width: 700px;

            font-size: clamp(48px, 6vw, 70px);

            line-height: 1.05;

            letter-spacing: -2px;

            margin-bottom: 25px;

        }


        .about-header h1::after {

            content: "";

            display: block;

            width: 45px;

            height: 2px;

            margin-top: 25px;

            background: var(--rose);

        }


        .about-header p:not(.section-label) {

            max-width: 550px;

            color: var(--text);

            font-size: 17px;

        }


        /

        .about-story {

            max-width: 1100px;

            margin: auto;

            padding: 100px 8% 60px;

            display: grid;

            grid-template-columns: 0.9fr 1.1fr;

            gap: 70px;

            align-items: center;

        }


        .about-story::before {

            content: "IDEAS\A STRATEGY\A GROWTH";

            white-space: pre;

            min-height: 320px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: #463a3f;

            font-family: 'Cormorant Garamond', serif;

            font-style: italic;

            font-size: 34px;

            line-height: 1.55;

            letter-spacing: 2px;

            background:

                linear-gradient(
                    145deg,
                    #f8e2e9,
                    #fff8fa
                );

            border: 1px solid var(--border);

            border-radius: 5px;

        }


        .about-story h2 {

            font-size: 42px;

            margin-bottom: 22px;

        }


        .about-story h2::after {

            content: "";

            display: block;

            width: 40px;

            height: 2px;

            margin-top: 15px;

            background: var(--rose);

        }


        .about-story p {

            color: var(--text);

            font-size: 15px;

            line-height: 1.9;

            margin-bottom: 18px;

        }


       

        .mission-vision {

            max-width: 1100px;

            margin: auto;

            padding: 30px 8% 80px;

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 20px;

        }


        .info-card {

            background: white;

            padding: 38px;

            border: 1px solid var(--border);

            border-radius: 5px;

        }


        .info-card h2 {

            color: var(--rose);

            font-size: 27px;

            margin-bottom: 15px;

        }


        .info-card p {

            color: var(--text);

            font-size: 14px;

            line-height: 1.9;

        }



        .values {

            padding: 90px 8%;

            background: var(--blush);

            text-align: center;

        }


        .values > h2 {

            font-size: 44px;

            margin-bottom: 50px;

        }


        .value-cards {

            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 18px;

        }


        .value-card {

            padding: 32px 22px;

            background: white;

            border: 1px solid var(--border);

            border-radius: 5px;

            transition: transform 0.3s ease;

        }


        .value-card:hover {

            transform: translateY(-6px);

        }


        .value-card h3 {

            color: var(--rose);

            font-size: 21px;

            margin-bottom: 12px;

        }


        .value-card p {

            color: var(--text);

            font-size: 13px;

            line-height: 1.7;

        }


       
        .team-section {

            max-width: 1100px;

            margin: auto;

            padding: 100px 8% 0;

            text-align: center;

        }


        .team-section h2 {

            font-size: 44px;

            margin-bottom: 18px;

        }


        .team-intro {

            max-width: 650px;

            margin: 0 auto 50px;

            color: var(--text);

            font-size: 15px;

        }


        .team-cards {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 18px;

        }


        .team-card {

            background: white;

            padding: 32px 20px;

            border: 1px solid var(--border);

            border-radius: 5px;

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;

        }


        .team-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(65, 45, 52, 0.08);

        }


        .team-avatar {

            width: 76px;

            height: 76px;

            margin: 0 auto 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--rose-light);

            color: var(--rose);

            border-radius: 50%;

            font-family: 'Playfair Display', serif;

            font-size: 20px;

            font-weight: 600;

        }

        /* TEAM PHOTOS */

        .team-photo {
            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .team-card {
             overflow: hidden;
        }

        .team-card h3 {
            margin-bottom: 6px;
        }

    .team-card p {
        color: var(--text);
        font-size: 12px;
    }


        .team-card h3 {

            font-size: 20px;

            margin-bottom: 6px;

        }


        .team-card p {

            color: var(--text);

            font-size: 12px;

        }


       

        .services-page {

            background: var(--cream);

            padding-bottom: 100px;

        }


        .services-header {

            padding: 100px 8% 80px;

            text-align: center;

            background:

                linear-gradient(
                    135deg,
                    #fffdfc,
                    #f9e9ee
                );

        }


        .services-header h1 {

            font-size: clamp(48px, 6vw, 65px);

            margin-bottom: 20px;

        }


        .services-header p:not(.section-label) {

            max-width: 600px;

            margin: auto;

            color: var(--text);

            font-size: 17px;

        }


        .services-grid {

            max-width: 1100px;

            margin: 70px auto 0;

            padding: 0 8%;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;

        }


        .services-grid .service-card {

            min-height: 280px;

        }


   

        .contact-page {

            background: var(--cream);

            padding-bottom: 100px;

        }


        .contact-header {

            padding: 100px 8% 80px;

            text-align: center;

            background:

                linear-gradient(
                    135deg,
                    #fffdfc,
                    #f9e9ee
                );

        }


        .contact-header h1 {

            font-size: clamp(48px, 6vw, 65px);

            margin-bottom: 20px;

        }


        .contact-header p:not(.section-label) {

            max-width: 600px;

            margin: auto;

            color: var(--text);

            font-size: 17px;

        }


        .contact-container {

            max-width: 1100px;

            margin: 75px auto 0;

            padding: 0 8%;

            display: grid;

            grid-template-columns: 1fr 1.15fr;

            gap: 70px;

            align-items: start;

        }


        .contact-info h2,
        .contact-form h2 {

            font-size: 32px;

            margin-bottom: 20px;

        }


        .contact-info > p {

            color: var(--text);

            font-size: 15px;

            line-height: 1.9;

            margin-bottom: 35px;

        }


        .contact-detail {

            margin-bottom: 23px;

        }


        .contact-detail strong,
        .social-links strong {

            color: var(--rose);

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: 1.5px;

        }


        .contact-detail p {

            color: var(--text);

            font-size: 14px;

            margin-top: 5px;

        }


        .social-links {

            margin-top: 35px;

        }


        .social-links > div {

            margin-top: 12px;

        }


        .social-links a {

            color: var(--text);

            text-decoration: none;

            font-size: 14px;

            margin-right: 18px;

        }


        .social-links a:hover {

            color: var(--rose);

        }


        .contact-form {

            background: white;

            padding: 42px;

            border: 1px solid var(--border);

            border-radius: 5px;

            box-shadow:
                0 20px 45px rgba(65, 45, 52, 0.06);

        }


        .contact-form form {

            display: flex;

            flex-direction: column;

        }


        .contact-form label {

            margin-bottom: 7px;

            color: #443b3f;

            font-size: 12px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: 0.8px;

        }


        .contact-form input,
        .contact-form textarea {

            width: 100%;

            padding: 14px;

            margin-bottom: 20px;

            background: #fffdfc;

            border: 1px solid var(--border);

            border-radius: 3px;

            font-family: 'Inter', sans-serif;

            font-size: 14px;

            color: var(--dark);

        }


        .contact-form input:focus,
        .contact-form textarea:focus {

            outline: none;

            border-color: var(--rose);

            box-shadow:
                0 0 0 3px rgba(201, 107, 136, 0.08);

        }


        .contact-form button {

            padding: 15px;

            border: none;

            border-radius: 3px;

            background: var(--dark);

            color: white;

            font-family: 'Inter', sans-serif;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: all 0.25s ease;

        }


        .contact-form button:hover {

            background: var(--rose);

            transform: translateY(-2px);

        }


      

        @media (max-width: 900px) {

            .service-cards,
            .services-grid {

                grid-template-columns: repeat(2, 1fr);

            }


            .value-cards,
            .team-cards {

                grid-template-columns: repeat(2, 1fr);

            }


            .about-story {

                grid-template-columns: 1fr;

            }


            .about-story::before {

                min-height: 240px;

            }


            .contact-container {

                grid-template-columns: 1fr;

            }

        }


        @media (max-width: 650px) {

            nav {

                height: auto;

                padding: 16px 6%;

                flex-direction: column;

                gap: 15px;

            }

            .footer-bottom {
                flex-direction: column;
                gap: 8px;
            }

        }


            .nav-links {

                gap: 20px;

            }


            .nav-links a {

                font-size: 12px;

            }


            .brand-name,
            .brand-digital {

                font-size: 18px;

            }


            .hero {

                min-height: 560px;

                padding: 75px 7%;

            }


            .hero h1 {

                font-size: 43px;

            }


            .about-preview,
            .services-preview {

                padding: 80px 7%;

            }


            .service-cards,
            .services-grid,
            .mission-vision,
            .value-cards,
            .team-cards {

                grid-template-columns: 1fr;

            }


            .about-header,
            .services-header,
            .contact-header {

                padding: 75px 7%;

            }


            .about-header h1,
            .services-header h1,
            .contact-header h1 {

                font-size: 43px;

            }


            .about-story {

                padding: 75px 7% 45px;

            }


            .mission-vision,
            .contact-container {

                padding-left: 7%;

                padding-right: 7%;

            }


            .values,
            .team-section {

                padding-left: 7%;

                padding-right: 7%;

            }


            .contact-form {

                padding: 28px;

            }

        }

        

.social-links {
    margin-top: 35px;
}

.social-links > strong {
    display: block;
    color: var(--rose);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.social-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.social-item {
    display: flex;
    flex-direction: column;
    min-width: 125px;
    padding: 12px 15px;
    background: white;
    border: 1px solid var(--border);
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.25s ease;
}

.social-name {
    color: var(--dark);
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 3px;
}

.social-handle {
    color: var(--text);
    font-size: 11px;
}

.social-item:hover {
    background: var(--rose);
    border-color: var(--rose);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px [weird thing]rgba(201, 107, 136, 0.18);
}

.social-item:hover .social-name,
.social-item:hover .social-handle {
    color: white;
}

/* FOOTER */

.site-footer {
    background: #292326;
    color: white;
    padding: 65px 8% 25px;
}

.footer-container {
    max-width: 1100px;
    margin: auto;

    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr;
    gap: 60px;
}

.footer-logo {
    display: inline-block;

    color: white;

    font-family: 'Playfair Display', serif;

    font-size: 24px;
    font-weight: 600;

    text-decoration: none;

    margin-bottom: 15px;
}

.footer-brand p {
    max-width: 320px;

    color: #c9bec2;

    font-size: 13px;

    line-height: 1.8;
}

.footer-links h3,
.footer-social h3 {
    color: white;

    font-family: 'Inter', sans-serif;

    font-size: 12px;

    text-transform: uppercase;

    letter-spacing: 2px;

    margin-bottom: 18px;
}

.footer-links {
    display: flex;
    flex-direction: column;
}

.footer-links a {
    color: #c9bec2;

    text-decoration: none;

    font-size: 13px;

    margin-bottom: 8px;
}

.footer-links a:hover {
    color: #c96b88;
}

.footer-social p {
    color: #c9bec2;

    font-size: 13px;

    margin-bottom: 8px;
}

.footer-bottom {
    max-width: 1100px;

    margin: 50px auto 0;

    padding-top: 20px;

    border-top: 1px solid rgba(255,255,255,0.12);

    display: flex;

    justify-content: space-between;

    gap: 20px;
}

.footer-bottom p {
    color: #958a8e;

    font-size: 11px;
}
    </style>

</head>


<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</body>

</html>