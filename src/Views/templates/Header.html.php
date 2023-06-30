
<!doctype html>
<html lang="en">

<head>
<title>ECF_Garage</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.3.0 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
crossorigin="anonymous">

<!-- Typographie Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Style du projet -->
<link rel="stylesheet" href="/ECF_Garage/Assets/CSS/style.css">

<!-- Boostrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>


<body>


<header id="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand img-fluid" href="#">
                <img src="/ECF_Garage/Assets/images/Header & Footer/Logo_garage.png" width="100" height="auto"
            alt="Logo Garage">
                </img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.03571 4.04082H27.9643C28.5363 4.04082 29 3.63881 29 3.14286V0.897959C29
                    0.402005 28.5363 0 27.9643 0H1.03571C0.463676 0 0 0.402005 0 0.897959V3.14286C0 3.63881
                    0.463676 4.04082 1.03571 4.04082ZM1.03571 13.0204H27.9643C28.5363 13.0204 29 12.6184 29
                    12.1224V9.87755C29 9.3816 28.5363 8.97959 27.9643 8.97959H1.03571C0.463676 8.97959 0 9.3816
                    0 9.87755V12.1224C0 12.6184 0.463676 13.0204 1.03571 13.0204ZM1.03571 22H27.9643C28.5363
                    22 29 21.598 29 21.102V18.8571C29 18.3612 28.5363 17.9592 27.9643
                    17.9592H1.03571C0.463676 17.9592 0 18.3612 0
                    18.8571V21.102C0 21.598 0.463676 22 1.03571 22Z"
                    fill="#D92332"/>
        </svg>

</button>
            <div class="collapse navbar-collapse text-uppercase justify-content-center fw-bold fs-4"
            id="navbarNav" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        
                <ul class="navbar-nav" >
                    <li class="nav-item">
                        <a class="nav-link active"
                        aria-current="page"
                        href="/ECF_Garage/src/Views/templates/Homepage.html.php">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/ECF_Garage/src/Views/templates/Services.html.php">Nos service</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/ECF_Garage/src/Views/templates/Used_cars_listing.html.php">
                            Nos produits</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/ECF_Garage/src/Views/templates/Apropos.html.php">A propos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/ECF_Garage/src/Views/templates/Contact.html.php">Contact</a>
                    </li>
                    <li class="list-inline-item nav-item" style="margin-top: 5px;">
                    <a href="/ECF_Garage/src/Views/templates/Login.html.php">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.9995 17.4167C20.2521 17.4167 21.4766 17.0452
                    22.5181 16.3493C23.5597 15.6534 24.3714 14.6643 24.8508
                    13.507C25.3301 12.3497 25.4555 11.0763 25.2112 9.84776C24.9668
                    8.61922 24.3636 7.49073 23.4779 6.60499C22.5921 5.71926 21.4636
                    5.11607 20.2351 4.8717C19.0066 4.62732 17.7331 4.75274 16.5759
                    5.2321C15.4186 5.71145 14.4295 6.52321 13.7336 7.56472C13.0376
                    8.60624 12.6662 9.83072 12.6662 11.0833C12.6662 12.763 13.3335
                    14.3739 14.5212 15.5617C15.7089 16.7494 17.3198 17.4167 18.9995
                    17.4167Z" fill="#D92332"/>
                    <path d="M28.4997 33.25C28.9196 33.25
                    29.3224 33.0832 29.6193 32.7863C29.9162
                    32.4894 30.083 32.0866 30.083 31.6667C30.083
                    28.7272 28.9153 25.9081 26.8368 23.8296C24.7583
                    21.7511 21.9392 20.5834 18.9997 20.5834C16.0602 20.5834
                    13.2411 21.7511 11.1626 23.8296C9.08409 25.9081 7.91638 28.7272 7.91638
                    31.6667C7.91638 32.0866 8.0832 32.4894 8.38013 32.7863C8.67706 33.0832
                    9.07979 33.25 9.49972 33.25H28.4997Z" fill="#D92332"/>
                </svg>
            </a>
        </li>
                    <li class="list-inline-item nav-item" style="margin-top: 5px;">
                    <a href="/ECF_Garage/src/Views/templates/Dashboard.html.php">
            <svg width="30" height="35" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.8125 3.12883C7.3981 3.12883 7.00067 3.29345 6.70765 3.58647C6.41462
                3.8795 6.25 4.27693 6.25 4.69133C6.25 5.10573 6.41462 5.50316 6.70765 5.79618C7.00067
                6.08921 7.3981 6.25383 7.8125 6.25383C8.2269 6.25383 8.62433 6.08921 8.91735
                5.79618C9.21038 5.50316 9.375 5.10573 9.375 4.69133C9.375 4.27693 9.21038 3.8795
                8.91735 3.58647C8.62433 3.29345 8.2269 3.12883 7.8125 3.12883ZM3.39062 3.12883C3.71344
                2.21393 4.31209 1.42169 5.10406 0.861312C5.89603 0.300931 6.84232 0 7.8125 0C8.78268
                0 9.72897 0.300931 10.5209 0.861312C11.3129 1.42169 11.9116 2.21393 12.2344
                3.12883H23.4375C23.8519 3.12883 24.2493 3.29345 24.5424 3.58647C24.8354 3.8795
                25 4.27693 25 4.69133C25 5.10573 24.8354 5.50316 24.5424 5.79618C24.2493 6.08921
                23.8519 6.25383 23.4375 6.25383H12.2344C11.9116 7.16872 11.3129 7.96096 10.5209
                8.52135C9.72897 9.08173 8.78268 9.38266 7.8125 9.38266C6.84232 9.38266 5.89603
                9.08173 5.10406 8.52135C4.31209 7.96096 3.71344 7.16872 3.39062 6.25383H1.5625C1.1481
                6.25383 0.750672 6.08921 0.457646 5.79618C0.16462 5.50316 0 5.10573 0 4.69133C0
                4.27693 0.16462 3.8795 0.457646 3.58647C0.750672 3.29345 1.1481 3.12883 1.5625
                3.12883H3.39062ZM17.1875 12.5038C16.7731 12.5038 16.3757 12.6684 16.0826 12.9615C15.7896
                13.2545 15.625 13.6519 15.625 14.0663C15.625 14.4807 15.7896 14.8782 16.0826
                15.1712C16.3757 15.4642 16.7731 15.6288 17.1875 15.6288C17.6019 15.6288 17.9993
                15.4642 18.2924 15.1712C18.5854 14.8782 18.75 14.4807 18.75 14.0663C18.75 13.6519
                18.5854 13.2545 18.2924 12.9615C17.9993 12.6684 17.6019 12.5038 17.1875 12.5038ZM12.7656
                12.5038C13.0884 11.5889 13.6871 10.7967 14.4791 10.2363C15.271 9.67593 16.2173 9.375
                17.1875 9.375C18.1577 9.375 19.104 9.67593 19.8959 10.2363C20.6879 10.7967 21.2866
                11.5889 21.6094 12.5038H23.4375C23.8519 12.5038 24.2493 12.6684 24.5424 12.9615C24.8354
                13.2545 25 13.6519 25 14.0663C25 14.4807 24.8354 14.8782 24.5424 15.1712C24.2493
                15.4642 23.8519 15.6288 23.4375 15.6288H21.6094C21.2866 16.5437 20.6879 17.336
                19.8959 17.8963C19.104 18.4567 18.1577 18.7577 17.1875 18.7577C16.2173 18.7577
                15.271 18.4567 14.4791 17.8963C13.6871 17.336 13.0884 16.5437 12.7656 15.6288H1.5625C1.1481
                15.6288 0.750672 15.4642 0.457646 15.1712C0.16462 14.8782 0 14.4807 0 14.0663C0
                13.6519 0.16462 13.2545 0.457646 12.9615C0.750672 12.6684 1.1481 12.5038 1.5625
                12.5038H12.7656ZM7.8125 21.8788C7.3981 21.8788 7.00067 22.0434 6.70765 22.3365C6.41462
                22.6295 6.25 23.0269 6.25 23.4413C6.25 23.8557 6.41462 24.2532 6.70765 24.5462C7.00067
                24.8392 7.3981 25.0038 7.8125 25.0038C8.2269 25.0038 8.62433 24.8392 8.91735 24.5462C9.21038
                24.2532 9.375 23.8557 9.375 23.4413C9.375 23.0269 9.21038 22.6295 8.91735 22.3365C8.62433
                22.0434 8.2269 21.8788 7.8125 21.8788ZM3.39062 21.8788C3.71344 20.9639 4.31209 20.1717
                5.10406 19.6113C5.89603 19.0509 6.84232 18.75 7.8125 18.75C8.78268 18.75 9.72897 19.0509
                10.5209 19.6113C11.3129 20.1717 11.9116 20.9639 12.2344 21.8788H23.4375C23.8519 21.8788
                24.2493 22.0434 24.5424 22.3365C24.8354 22.6295 25 23.0269 25 23.4413C25 23.8557 24.8354
                24.2532 24.5424 24.5462C24.2493 24.8392 23.8519 25.0038 23.4375 25.0038H12.2344C11.9116
                25.9187 11.3129 26.711 10.5209 27.2713C9.72897 27.8317 8.78268 28.1327 7.8125 28.1327C6.84232
                28.1327 5.89603 27.8317 5.10406 27.2713C4.31209 26.711 3.71344 25.9187 3.39062 25.0038H1.5625C1.1481
                25.0038 0.750672 24.8392 0.457646 24.5462C0.16462 24.2532 0 23.8557 0 23.4413C0 23.0269 0.16462
                22.6295 0.457646 22.3365C0.750672 22.0434 1.1481 21.8788 1.5625 21.8788H3.39062Z"
                fill="#D92332"/>
            </svg>
        </a>
    </li>
                </ul>
                <ul class="d-flex d-lg-none justify-content-end" id="scrolldown-mobile">
                    <li class="list-inline-item nav-item  ps-4"
                    style="margin-right: 20px;"><a href="#copy-right" >
            <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.88401 0H26.116C27.7924 0 28.6305 2.03973 27.4439 3.2351L15.3326
                15.445C14.598 16.185 13.402 16.185 12.6674 15.445L0.556102 3.2351C-0.630539
                2.03973 0.207644 0 1.88401 0Z"
                fill="#D92332"/>
            </svg></a></li>
                </ul>
            </div>
        </div>
                <ul class=" d-lg-inline-block d-none justify-content-end" id="scrolldown-desktop">
                    <li class="list-inline-item nav-item ps-4"
                    style="margin-right: 20px;"><a href="#copy-right">
                <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.88401 0H26.116C27.7924 0 28.6305 2.03973 27.4439 3.2351L15.3326
                    15.445C14.598 16.185 13.402 16.185 12.6674 15.445L0.556102 3.2351C-0.630539
                    2.03973 0.207644 0 1.88401 0Z"
                    fill="#D92332"/>
                </svg>
            </a>
        </li>
                </ul>
    </nav>
</header>
