<?php
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HienNguyen</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/query.css">
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" defer></script>
    <script src="js/script.js" defer></script>
    <script src="js/other.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Cabin:ital,wght@0,400..700;1,400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
</head>

<body>
    <div id="navbar-cover">
        <div class="navbar-section">
            <div class="container" id="navb">
                <div class="row">
                    <div class="col">
                        <a href="">
                            <svg id="navlogo" width="186" height="38" viewBox="0 0 186 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.31 29V8H6.15V16.31H15.75V8H19.59V29H15.75V19.91H6.15V29H2.31ZM23.3904 29V14H27.1104V29H23.3904ZM23.3904 11.72V8H27.1104V11.72H23.3904ZM37.8274 29.3C36.0174 29.3 34.5074 28.94 33.2974 28.22C32.0974 27.49 31.1974 26.53 30.5974 25.34C29.9974 24.14 29.6974 22.83 29.6974 21.41C29.6974 20.04 29.9774 18.775 30.5374 17.615C31.1074 16.455 31.9374 15.525 33.0274 14.825C34.1174 14.115 35.4474 13.76 37.0174 13.76C38.4574 13.76 39.6574 14.055 40.6174 14.645C41.5774 15.235 42.2974 16.025 42.7774 17.015C43.2574 17.995 43.4974 19.08 43.4974 20.27C43.4974 20.6 43.4774 20.935 43.4374 21.275C43.3974 21.605 43.3374 21.95 43.2574 22.31H33.5674C33.7074 23.24 33.9974 23.995 34.4374 24.575C34.8874 25.145 35.4324 25.565 36.0724 25.835C36.7224 26.105 37.4174 26.24 38.1574 26.24C39.0274 26.24 39.8374 26.13 40.5874 25.91C41.3374 25.68 42.0274 25.38 42.6574 25.01L42.8374 28.16C42.2674 28.46 41.5574 28.725 40.7074 28.955C39.8574 29.185 38.8974 29.3 37.8274 29.3ZM33.6574 19.79H39.7174C39.7174 19.34 39.6324 18.89 39.4624 18.44C39.2924 17.98 39.0074 17.595 38.6074 17.285C38.2174 16.975 37.6874 16.82 37.0174 16.82C36.0574 16.82 35.3024 17.1 34.7524 17.66C34.2024 18.22 33.8374 18.93 33.6574 19.79ZM46.0369 29V14H49.5169L49.6669 16.79L48.7969 15.65C49.3669 15.17 50.0469 14.735 50.8369 14.345C51.6269 13.955 52.5469 13.76 53.5969 13.76C55.5169 13.76 56.9419 14.4 57.8719 15.68C58.8019 16.95 59.2669 18.6 59.2669 20.63V29H55.5469V20.93C55.5469 19.53 55.3119 18.495 54.8419 17.825C54.3819 17.155 53.6269 16.82 52.5769 16.82C51.7269 16.82 51.0319 17.03 50.4919 17.45C49.9519 17.86 49.4769 18.41 49.0669 19.1L49.7569 17.27V29H46.0369ZM69.8979 29V8H73.6779L82.6479 21.56V8H86.4879V29H83.3379L73.7379 14.6V29H69.8979ZM96.0394 36.56C94.6394 36.56 93.4144 36.385 92.3644 36.035C91.3244 35.695 90.5144 35.205 89.9344 34.565C89.3644 33.925 89.0794 33.16 89.0794 32.27C89.0794 31.52 89.2844 30.85 89.6944 30.26C90.1144 29.68 90.7194 29.17 91.5094 28.73C91.1094 28.49 90.7894 28.19 90.5494 27.83C90.3094 27.47 90.1894 27.06 90.1894 26.6C90.1894 26.12 90.3244 25.705 90.5944 25.355C90.8744 24.995 91.2394 24.71 91.6894 24.5C90.9294 23.96 90.3544 23.27 89.9644 22.43C89.5744 21.58 89.3794 20.66 89.3794 19.67C89.3794 18.59 89.6144 17.6 90.0844 16.7C90.5544 15.79 91.2394 15.065 92.1394 14.525C93.0494 13.975 94.1594 13.7 95.4694 13.7C96.1494 13.7 96.7744 13.785 97.3444 13.955C97.9244 14.125 98.4394 14.36 98.8894 14.66C99.1894 14.49 99.6244 14.34 100.194 14.21C100.764 14.07 101.399 14 102.099 14C102.269 14 102.429 14 102.579 14C102.739 14 102.899 14 103.059 14L102.819 16.34C102.599 16.34 102.374 16.34 102.144 16.34C101.924 16.34 101.699 16.34 101.469 16.34C101.379 16.34 101.259 16.34 101.109 16.34C100.959 16.34 100.799 16.35 100.629 16.37C100.929 16.83 101.154 17.345 101.304 17.915C101.454 18.485 101.529 19.07 101.529 19.67C101.529 20.75 101.294 21.745 100.824 22.655C100.364 23.555 99.6844 24.28 98.7844 24.83C97.8844 25.37 96.7794 25.64 95.4694 25.64C95.1894 25.64 94.9194 25.62 94.6594 25.58C94.3994 25.54 94.1394 25.49 93.8794 25.43C93.6594 25.52 93.5494 25.68 93.5494 25.91C93.5494 26.18 93.7144 26.385 94.0444 26.525C94.3744 26.665 94.8894 26.79 95.5894 26.9L98.1694 27.23C99.7794 27.44 101.039 27.895 101.949 28.595C102.869 29.295 103.329 30.29 103.329 31.58C103.329 32.58 103.039 33.45 102.459 34.19C101.889 34.94 101.059 35.52 99.9694 35.93C98.8794 36.35 97.5694 36.56 96.0394 36.56ZM96.1894 33.74C97.4494 33.74 98.4044 33.585 99.0544 33.275C99.7044 32.965 100.029 32.49 100.029 31.85C100.029 31.28 99.7994 30.86 99.3394 30.59C98.8894 30.32 98.1694 30.11 97.1794 29.96L93.8944 29.48C93.4044 29.67 92.9944 29.93 92.6644 30.26C92.3344 30.6 92.1694 31.04 92.1694 31.58C92.1694 32.31 92.5244 32.85 93.2344 33.2C93.9444 33.56 94.9294 33.74 96.1894 33.74ZM95.4694 22.88C96.3594 22.88 97.0294 22.59 97.4794 22.01C97.9394 21.42 98.1694 20.64 98.1694 19.67C98.1694 18.69 97.9394 17.91 97.4794 17.33C97.0294 16.75 96.3594 16.46 95.4694 16.46C94.5694 16.46 93.8894 16.75 93.4294 17.33C92.9694 17.91 92.7394 18.69 92.7394 19.67C92.7394 20.64 92.9694 21.42 93.4294 22.01C93.8894 22.59 94.5694 22.88 95.4694 22.88ZM111.339 29.3C109.779 29.3 108.534 28.99 107.604 28.37C106.674 27.75 106.004 26.9 105.594 25.82C105.184 24.73 104.979 23.48 104.979 22.07V14H108.699V22.07C108.699 23.46 108.929 24.495 109.389 25.175C109.859 25.845 110.619 26.18 111.669 26.18C112.509 26.18 113.204 25.98 113.754 25.58C114.314 25.18 114.779 24.62 115.149 23.9L114.489 25.79V14H118.209V29H114.729L114.549 26.39L115.359 27.44C114.999 27.9 114.429 28.325 113.649 28.715C112.879 29.105 112.109 29.3 111.339 29.3ZM122.881 36.26L126.211 28.01L119.971 14H124.111L127.951 23.66L131.851 14H135.991L126.601 36.26H122.881ZM144.702 29.3C142.892 29.3 141.382 28.94 140.172 28.22C138.972 27.49 138.072 26.53 137.472 25.34C136.872 24.14 136.572 22.83 136.572 21.41C136.572 20.04 136.852 18.775 137.412 17.615C137.982 16.455 138.812 15.525 139.902 14.825C140.992 14.115 142.322 13.76 143.892 13.76C145.332 13.76 146.532 14.055 147.492 14.645C148.452 15.235 149.172 16.025 149.652 17.015C150.132 17.995 150.372 19.08 150.372 20.27C150.372 20.6 150.352 20.935 150.312 21.275C150.272 21.605 150.212 21.95 150.132 22.31H140.442C140.582 23.24 140.872 23.995 141.312 24.575C141.762 25.145 142.307 25.565 142.947 25.835C143.597 26.105 144.292 26.24 145.032 26.24C145.902 26.24 146.712 26.13 147.462 25.91C148.212 25.68 148.902 25.38 149.532 25.01L149.712 28.16C149.142 28.46 148.432 28.725 147.582 28.955C146.732 29.185 145.772 29.3 144.702 29.3ZM140.532 19.79H146.592C146.592 19.34 146.507 18.89 146.337 18.44C146.167 17.98 145.882 17.595 145.482 17.285C145.092 16.975 144.562 16.82 143.892 16.82C142.932 16.82 142.177 17.1 141.627 17.66C141.077 18.22 140.712 18.93 140.532 19.79ZM152.912 29V14H156.392L156.542 16.79L155.672 15.65C156.242 15.17 156.922 14.735 157.712 14.345C158.502 13.955 159.422 13.76 160.472 13.76C162.392 13.76 163.817 14.4 164.747 15.68C165.677 16.95 166.142 18.6 166.142 20.63V29H162.422V20.93C162.422 19.53 162.187 18.495 161.717 17.825C161.257 17.155 160.502 16.82 159.452 16.82C158.602 16.82 157.907 17.03 157.367 17.45C156.827 17.86 156.352 18.41 155.942 19.1L156.632 17.27V29H152.912Z"
                                    fill="#A6A6A6" />
                                <path
                                    d="M182 27C182 29.2091 180.209 31 178 31C175.791 31 174 29.2091 174 27C174 24.7909 175.791 23 178 23C180.209 23 182 24.7909 182 27Z"
                                    fill="#FE583C" />
                            </svg>
                        </a>
                    </div>
                    <div id="navitem-col" class="col">
                        <button onclick="menuExpand()" id="menu"><i class="ri-menu-5-line"></i></button>
                        <ul id="navitem-col-ul">
                            <li class="nav-item"><a id="item-home" class="un" href="#home-section">Home</a></li>
                            <li class="nav-item"><a id="item-myself" class="un" href="#myself-section-alt">Myself</a>
                            </li>
                            <li class="nav-item"><a id="item-resume" class="un" href="#resume-section">Resume</a></li>
                            <li class="nav-item"><a id="item-gallery" class="un" href="#gallery-section">Gallery</a>
                            </li>
                            <li class="nav-item"><a id="item-identity" class="un" href="#identity-section">Identity</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section id="home-section">
        <div class="hidden container" id="home-content-container">
            <div class="row">
                <div class="col-1" id="home-content1">
                    <span id="home-t1">Hello, I'm</span> <br>
                    <span id="home-t2">HIEN NGUYEN</span> <br>
                    <div style="text-align: justify;" id="home-t3">"People's beliefs about their abilities have a
                        profound effect on those abilities. Ability is not a fixed property; there is huge variablitiy
                        in how you perform." <p style="display: inline; font-weight: 400;"><em>- Albert Bandura - a
                                Canadian psychologist who is best known for his work on social learning theory.</em></p>
                    </div> <br>
                    <div class="home-contact">
                        <div id="home-t4">
                            Contact me
                            <hr>
                        </div>
                    </div>
                    <div class="home-contact-icon">
                        <button class="hv-ct" onclick="phonenumCopy()"><i class="ri-phone-fill"></i></button></i>
                        <button class="hv-ct" onclick="emailCopy()"><i class="ri-mail-fill"></i></button>
                        <a class="hv-ct" target="#" href="http://linkedin.com/in/baohiennguyenvo"> <i
                                class="ri-linkedin-box-fill"></i></a>
                    </div>
                </div>
                <div class="col" id="home-content2">
                    <div id="content2-border"></div>
                    <div id="content2"></div>
                </div>
            </div>
        </div>
        <div class="home-end">
            <svg viewBox="0 0 1280 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M170.132 42.1218C105.682 7.22543 27.6882 -0.484263 0 0.0229523V139H1286V0.0229712C1220.45 69.8496 1092.56 104.734 986 85C838.236 57.6349 726.5 47 628.989 49.7301L448 67C381.949 71.3959 234.582 77.0183 170.132 42.1218Z"
                    fill="#F28775" />
            </svg>
        </div>
    </section>
    <section id="myself-section">
        <div style="position: absolute; top:40px; height: 2px; width: 3px;" id="myself-section-alt"></div>
        <div class="container" id="myself-content-container">
            <div class="hiddenY row">
                <div class="col-1" id="myself-content1">
                    <iframe height="100%" width="100%" src="https://www.youtube.com/embed/c7vTNztbZ9o"
                        frameborder="0"></iframe>
                </div>
                <div class="col" id="myself-content2">
                    My name is Hien Nguyen. I recently graduated from Ly Tu Trong High School for the Gifted and I am currently pursuing my field of study: Psychology. Although this journey is far from easy, the experiences, lessons, and even the setbacks I have encountered have led me to realize that my passion is not just a passing interest but a true life goal. "Life is a journey, not a destination" – therefore, I always maintain a sense of responsibility, enthusiasm, and dedication in my work, cherishing every beautiful moment that passes. In this way, whenever I reflect on my journey, I can proudly say to myself:  "Thank you, Hien. I am proud of you!”.
                    <br> 
                    <br>
                    By the way, welcome to my place, and I hope you enjoy your time here!
                </div>
            </div>
        </div>
    </section>
    <section id="resume-section" class="ttip">
        <div class="section-content-box">
            <div id="subnavbar">
                <div id="subnavbar-mobile">
                    <div id="subnavbar-content-container-mobile">
                        <div class="subnavbar-content-moobile">
                            <a id="subnav-content1" class="un-sub" href="#resume-section1">
                                <i class="ri-award-fill"></i>
                            </a>
                        </div>
                        <div class="subnavbar-content-moobile">
                            <a id="subnav-content2" class="un-sub" href="#resume-section2">
                                <i class="ri-group-3-fill"></i>
                            </a>
                        </div>
                        <div class="subnavbar-content-moobile">
                            <a id="subnav-content3" class="un-sub" href="#resume-section3">
                                <i class="ri-pen-nib-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="subnavbar-content-container">
                    <div class="subnavbar-content">
                        <a id="subnav-content1" class="un-sub" href="#resume-section1">
                            <p>LEADERSHIP <br> AND <br> ACTIVITIES</p>
                        </a>
                    </div>
                    <div class="subnavbar-content">
                        <a id="subnav-content2" class="un-sub" href="#resume-section2">
                            <p>COMMUNITY <br> SERVICES</p>
                        </a>
                    </div>
                    <div class="subnavbar-content">
                        <a id="subnav-content3" class="un-sub" href="#resume-section3">
                            <p>EDUCATION <br> AND <br> ACHIEVEMENTS</p>
                        </a>
                    </div>
                </div>
            </div>
            <div id="timeline"></div>
            <div class="resume-sections" id="resume-section1">
                <div class="resume-content-box">
                    <div class="resume-big-title">LEADERSHIP AND ACTIVITIES</div>
                    <div class="resume-content-container hidden">
                        <span style="bottom: 160%; width: 380px; margin-left: -190px" class="ttiptext">Click on titles below to see some magic</span>
                        <div class="time">2022-2024</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title">Class Monitor</div>
                            <div class="resume-sub-title"></div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Led and organized the <strong>class activities</strong>.</li>
                                    <li>Took charge of the class discipline.</li>
                                    <li><strong>Assisted the teachers</strong> in delegating assignments to the class.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time">2022-2023</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-chigo">Chi Go Project</a></div>
                            <div class="normal-des">
                                Description <button onclick="chigoExpand()" id="chigo-btn"><i
                                        class="ri-play-large-fill"></i> </button>
                            </div>
                            <div style="display: none;" id="chigo-des" class="description">
                                Chi Go is a youth-led social initiative established in 2022 under the mentorship of PISE
                                (Project Incubator for Young Social Entrepreneurs). Driven by a passion for education
                                and
                                social equity, we aim to empower underprivileged children with access to quality English
                                language learning opportunities. <br> <br>
                                My responsibilities encompassed a diverse range of tasks, from meticulously planning and
                                executing engaging workshops to fostering meaningful connections with our young
                                participants.
                            </div>
                            <div class="resume-sub-title">Vice-Head of Design Apartment</div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Directed and led a team to <strong>design</strong> and <strong>boost the page
                                            image.</strong></li>
                                    <li>Co-worked with other Departments and welcomed <strong>more than 250</strong>
                                        views.
                                    </li>
                                    <li>Cooperated with EB to organize volunteer events: <em>"Jolly Christmas" and "Vi Em"
                                            Workshop</em>. </li>
                                </ul>
                            </div>
                            <div><i class="ri-link-m"></i><a class="visitlink"
                                    href="https://www.facebook.com/profile.php?id=100086654614677&locale=vi_VN"
                                    target="blank">Visit page</a></div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time">2023-Present</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-hbo">H.B.O Project</a></div>
                            <div class="normal-des">
                                Description <button onclick="hboExpand()" id="hbo-btn"><i
                                        class="ri-play-large-fill"></i></button>
                            </div>
                            <div style="display: none;" id="hbo-des" class="description">
                                I had the privilege of volunteering at H.B.O (Health and Beauty Organization), a
                                non-profit
                                organization dedicated to providing engaging and informative content on health and
                                beauty.
                                During my time there, I was enriched by a multitude of educational experiences, leading
                                and
                                facilitating meetings in my capacity as the Head of the Translation Team. <br> <br>
                                Overall, my time at the H.B.O Project was an invaluable experience that not only
                                expanded my
                                knowledge of health and beauty but also equipped me with essential personal and
                                professional
                                skills. I am grateful for the opportunity to have been a part of this inspiring
                                organization.
                            </div>
                            <div class="resume-sub-title">Head of Translation Apartment</div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Led a team of <strong> more than 20</strong> members to create translation
                                        products
                                        for the website
                                        that welcomed <strong>more than 200</strong> views.</li>
                                    <li>Co-directed the fan page with more than <strong>13,000</strong> followers.</li>
                                    <li>Translated many articles that appealed to <strong>over 10,000 </strong> readers.
                                    </li>
                                </ul>
                            </div>
                            <div><i class="ri-link-m"></i><a class="visitlink"
                                    href="https://www.facebook.com/healthbeautyorganization?locale=vi_VN"
                                    target="blank">Visit page</a></div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time">2022-Present</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-get">Get-Together</a> </div>
                            <div class="normal-des">
                                Description <button onclick="getExpand()" id="get-btn"><i
                                        class="ri-play-large-fill"></i></button>
                            </div>
                            <div style="display: none;" id="get-des" class="description">
                                Get-Together is an annual event organized by English major students at Ly Tu Trong High
                                School for the gifted. This 2024 with the theme “Hollywood Glamour”, as the Executive
                                Director, I had the distinct role of organizing an event that garnered widespread
                                participation and enthusiastic support from the community.
                            </div>
                            <div class="resume-sub-title">Executive Board</div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Led a team of <strong>more than 150</strong> members to organize an event of
                                        <strong> more than 1,000</strong> participants.
                                    <li>Directed and trained <strong>more than 10</strong> contestants to shine on
                                        stage.
                                    </li>
                                    <li>Directed the page with <strong>more than 8,000</strong> followers <strong> in
                                            just 4 months</strong>.</li>
                                    <li>Successfully calling for a total of <strong>34 million VND</strong>
                                        sponsorships.
                                    </li>
                                    <li>Profited about <strong>5 million VND</strong> from selling designed stickers.
                                    </li>
                                </ul>
                            </div>
                            <div><i class="ri-link-m"></i><a class="visitlink"
                                    href="https://www.facebook.com/get.togethers.2024?locale=vi_VN" target="blank">Visit
                                    page</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resume-sections" id="resume-section2">
                <div class="resume-content-box">
                    <div class="resume-big-title">COMMUNITY SERVICES</div>
                    <div class="resume-content-container hidden">
                        <div class="time">2022</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-carecentre">Volunteer at The Elderly and Child Care Centre</a></div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Raised funds for food, milk, and clothes and finally received <strong>more than
                                            5,000,000 VND</strong>.</li>
                                    <li>Led a group of <strong>more than 20</strong> members to visit and organize an
                                        event
                                        for <strong>more than 50</strong> elderly people.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time">2023</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-huongduong">Volunteer at Huong Duong Orphanage Home</a></div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Collaborated with the <strong>Book Club</strong> at Ly Tu Trong High School for
                                        the
                                        gifted.</li>
                                    <li>Raised funds of <strong>more than 4,000,000 VND</strong> by selling books and
                                        DIY
                                        products.</li>
                                    <li>Prepared and organized an event for <strong>more than 20</strong> children.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time">2024</div>
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title"><a href="gallery/gallery-canthocentre">Volunteer at Can Tho Centre for Social Work</a></div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>Raised funds of more than <strong>4,000,000 VND</strong> and attracted
                                        considerable support from both social media and real-life donors.
                                    </li>
                                    <li>Prepared necessities and organized an event for <strong>more than 50</strong>
                                        children.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resume-sections" id="resume-section3">
                <div class="resume-content-box">
                    <div class="resume-big-title">EDUCATION AND ACHIEVEMENTS</div>
                    <div class="resume-content-container hidden">
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title">Ly Tu Trong High School for the Gifted</div>
                            <div class="resume-sub-title">Major in English</div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>GPA: <strong>9.1/10.</strong> </li>
                                    <li><strong>2nd place</strong> in the Internet Olympiads of English (IOE) at the
                                        <strong>District level</strong>. (2023)
                                    </li>
                                    <li><strong>3rd place</strong> in the Internet Olympiads of English (IOE) at the
                                        <strong>City level</strong>. (2023)
                                    </li>
                                    <li><strong>Bronze Medal</strong> in the Internet Olympiads of English (IOE) at the
                                        <strong>National level</strong>. (2023)
                                    </li>
                                    <li><strong> 2nd place</strong> in the Internet Olympiads of English (IOE) at the
                                        <strong>City level</strong>. (2024)
                                    </li>
                                    <li><strong>Consolation Prize</strong> in the Internet Olympiads of English (IOE) at
                                        the <strong>National level</strong>. (2024)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume-content-container hidden">
                        <div class="time-ball"></div>
                        <div class="resume-sub-content-container">
                            <div class="resume-title">Certifications</div>
                            <div class="resume-sub-content">
                                <ul>
                                    <li>IELTS: <strong>7.0</strong>.</li>
                                    <li><strong>Model</strong> for the “Idioms of the Week” Series by English Club.</li>
                                    <!-- <li><strong>Content Writer</strong> for Ted-Ed Club at Ly Tu Trong High School for
                                        the
                                        gifted.</li> -->
                                    <li><strong>Translator</strong> at SE:ED Project.</li>
                                    <li>Online <strong>courses of Standford Medicine</strong>: Early Signs of Psychosis
                                        in
                                        Adolescents.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <i class="ri-link-m"></i>
                                <a class="visitlink" href="certifications">
                                    View my certifications
                                </a>
                            </div>
                        </div>
                    </div>
                   
                    <button class="hidden" id="download-button"> <a href="resume_preview">Download
                            <br> My Resume</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery-section" class="ttip">
        <div id="gallery-section-content-box" class="section-content-box">
            <div id="timeline" style="height: 50%;"></div>
            <div id="subnavbar"></div>
            <!-- <div class="tooltiptext"></div> -->
            <div id="gallery-content-container">
                <span class="ttiptext">Click on images for more details</span>
                <div class="gallery-frame-container">
                    <a class="hidden" href="gallery/gallery-chigo">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/CHIGO/VI\ EM\ WORKSHOP.jpg)"
                                    class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">Chi Go Project</div>
                            <div class="gallery-frame-description">as Vice-Head of Design Apartment</div>
                        </div>
                    </a>
                    <a class="hidden" href="gallery/gallery-hbo">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/HBO/399561610_319891480787956_4398163315476919834_n.jpg)"
                                    class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">H.B.O Project</div>
                            <div class="gallery-frame-description">as Head of Translation Apartment</div>
                        </div>
                    </a>

                    <a class="hidden" href="gallery/gallery-get">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/GETS/PRE-GET.jpg)" class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">Get-Together</div>
                            <div class="gallery-frame-description">as Executive Board</div>
                        </div>
                    </a>
                    <a class="hidden" href="gallery/gallery-huongduong">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/HUONGDUONG/321203457_832084414527835_2508776633414396184_n.jpg)"
                                    class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">Volunteer</div>
                            <div class="gallery-frame-description">at Huong Duong Orphanage Home</div>
                        </div>
                    </a>
                    <a class="hidden" href="gallery/gallery-carecentre">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/CARECENTRE/z5393307782681_677a412cfb242498f8156f0cc81fd605.jpg); background-size: 450%;"
                                    class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">Volunteer</div>
                            <div class="gallery-frame-description">at The Elderly and Child Care Centre</div>
                        </div>
                    </a>
                    <a class="hidden" href="gallery/gallery-canthocentre">
                        <div class="gallery-frame">
                            <div class="gallery-frame-preview-pic">
                                <div style="background-image: url(assets/img/CANTHOCENTRE/1G0A0403.JPG); background-size: 450%;"
                                    class="img-container">
                                </div>
                            </div>
                            <div class="gallery-frame-title">Volunteer</div>
                            <div class="gallery-frame-description">at Can Tho Centre for Social Work</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="identity-section" class="ttip">
        <div id="identity-section-row">
        <div class="hidden" id="identity-title">
            WHO IS REALLY <em>"ME"</em>?
        </div>
        
        </div>
        <div id="ident-nav">
            <div id="ident-nav-row" class="hidden">
                <a href="identity-bookworm">
                <span style="bottom: -100px" class="ttiptext">Click on symbols for more details</span>
                    <img src="assets/img/icon/bookworm.png" alt="">
                </a>
              
                <a href="#testimonial-section" id="letter-nav">
                    <img src="assets/img/icon/envelope.png" alt="">
                </a>
                <a href="identity-ambivert">
                    <img src="assets/img/icon/personality.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="testimonial-section" class="contain">
        <div class="hidden testimonial mySwiper">
            <div class="testi-content swiper-wrapper">
                <div class='slide swiper-slide'> 
                    <div id="special-slide">
                        Everyone's perspectives on me
                        <div id="testi-description">
                        Here is where you can find out another side of me from different perspectives of my teachers, my colleagues, and my friends via their letters. 
Now, let’s have a look at these lovely and meaningful words that I received!
                        </div>
                    </div>
                </div>
                <?php
                    $sql = "SELECT * FROM letter";
                    $rows  = $conn->query($sql);
                    $stt = 0;
                    while ($row=$rows->fetch_assoc()) {
                        $eng_content = $row['eng_content'];
                        $vie_content = $row['vie_content'];
                        $owner_name = $row['owner_name'];
                        $eng_owner_name = $row['eng_owner_name'];
                        $owner_role = $row['owner_role'];
                        $eng_owner_role = $row['eng_owner_role'];
                        $lang = 1;

                        ?>
                        <script>
                            var curLang = 1;
                            function changeLang(stt) {
                                var curVie = document.getElementById('vie'+stt);
                                var curEng = document.getElementById('eng'+stt);
                                if (curLang == 0) {
                                    curVie.classList.add('hid_test');
                                    curEng.classList.remove('hid_test');
                                } else {
                                    curVie.classList.remove('hid_test');
                                    curEng.classList.add('hid_test');
                                }
                                curLang = !curLang;
                            }
                        </script>
                        <?php

                        echo "<div class='slide swiper-slide'>";
                            echo "<div id='vie$stt' class='sub-slide hid_test'>";
                                echo "<p>";
                                echo $vie_content;
                                echo "</p>";
                                echo "<div class='owner_name'>";
                                    echo $owner_name;
                                echo "</div>";
                                echo "<div class='owner_role'>";
                                    echo $owner_role;
                                echo "</div>";
                            echo "</div>";
                            echo "<div id='eng$stt' class='sub-slide'>";
                                echo "<p>";
                                echo $eng_content;
                                echo "</p>";
                                echo "<div class='owner_name'>";
                                    echo $eng_owner_name;
                                echo "</div>";
                                echo "<div class='owner_role'>";
                                    echo $eng_owner_role;
                                echo "</div>";
                            echo "</div>";
                            if ($vie_content != NULL) {
                               
                                echo "<div id='changeLang-container'>";
                                ?>
                                    <button onclick='changeLang(<?php echo $stt; ?>)'>
                                        Change language
                                    </button>
                                <?php
                                echo "</div>";
                            }
                        echo "</div>";

                        ++$stt;
                    } 
                    
                ?> 
            </div>

            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
</body>

<footer>
    <div>
        <span id="cpr">Copyright ©2024</span>
        <span id="dsb">Designed by RATEW</span>
    </div>
</footer>

</html>