<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Gorkhapatra - Admin</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="canonical" href="https://flowbite.com/application-ui/demo/">
    <link rel="icon" href="{{ asset('images/g.png') }}" type="image/x-icon">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://flowbite.com/application-ui/demo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('photos/g.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('photos/g.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('photos/g.png') }}">
    <link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite.com/application-ui/demo/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
   
  





    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141734189-9');
    </script>


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
        } else {
            document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
        }
    </script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<style>
    .active{
        background-color: #f1f1f2;
        border-radius: 4px;
    }
</style>
</head>

<body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">




    <nav class="_LPVUrp9Uina5fcERqWC taX5bm_AMmfFooXEd5Ny t6gkcSf0Bt4MLItXvDJ_ _Ybd3WwuTVljUT4vEaM3 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
        <div class="i8v96MUlFwGv9qJUkAx7 _Cj_M6jt2eLjDgkBBNgI wekyMYEi8zByMSCgzHQ_ W3VHmE2jAiCd1MN9SdsH">
            <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2">
                <div class="YRrCJSr_j5nopfm4duUc _HgeI6Dx9I__pBEYsPz0 Q_jg_EPdNf9eDMn1mLI2">
                    <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="_SmdlCf6eUKB_V9S5IDj FJRldeiG2gFGZfuKgp88 R9nujHypnXyuHrBww9QK iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM N3Gb8rTHzm26fWGpfaqP ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="FJRldeiG2gFGZfuKgp88 fhCwost7CSNRc2WSHLFW iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 zm4DJynLOnO_thJwVc_K _017t4M_yp_4rNozqBgD _q0p_O8QLU1paqtuqmI2 XGQIxPVjm_m7D0aLHB7Y yChACvAr1v8czJ2VO22j XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <svg id="toggleSidebarMobileHamburger" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="_SmdlCf6eUKB_V9S5IDj YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                      <!-- LOGO -->
                    <!-- <a href="https://flowbite.com/application-ui/demo/" class="YRrCJSr_j5nopfm4duUc YcuQRAYEep0W4L0BFDfG">
                        <img src="https://flowbite.com/application-ui/demo/images/logo.svg" class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP" alt="FlowBite Logo">
                        <span class="_rCfAafI7lqYALljdSxM q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE">Flowbite</span>
                    </a> -->
                    <a href="">
                        <img src="{{ asset('photos/logo.png') }}" style="height: 40px;" alt="">
                    </a>
                    <form action="#" method="GET" class="_SmdlCf6eUKB_V9S5IDj Yv6MasvLpkmInnA0LqbC wA_epBjW1krEYDpD4skr">
                        <label for="topbar-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
                        <div class="ahOqFrhzLjivRe8a1kX_ iRFVFKvV59EjIwjCM62m skGrjyHRlWNG_cHY40Cg">
                            <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
                                <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
                        </div>
                    </form>
                </div>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">

                    <button id="toggleSidebarMobileSearch" type="button" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <span class="_DVAfiyo21kM68EUVzEQ">Search</span>

                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <button type="button" data-dropdown-toggle="notification-dropdown" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </button>

                    <div class="_SmdlCf6eUKB_V9S5IDj wBVMFkIGfrKshbvi2gS1 bXWhrLpoBVu4aMI8XQxr Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th ZhzOGpbwY0R4TKKYr5pG d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH cl0mFvgyErwMYM5aRkru PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r" id="notification-dropdown">
                        <div class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id rYHHksRBEMl_guI3q0UQ jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                            Notifications
                        </div>
                        <div>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/bonnie-green.png" alt="Jese image">
                                    <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o g40_g3BQzYCOX5eZADgY _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                            <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y">New message from <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/jese-leos.png" alt="Jese image">
                                    <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG foDHZclRWUf2bqma2a8U RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Jese leos</span> and <span class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">5 others</span> started following you.</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">10 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/joseph-mcfall.png" alt="Joseph image">
                                    <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG SdPDrbResNmgnA0L4Iki RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Joseph Mcfall</span> and <span class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">141 others</span> love your story. See it and view more stories.</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">44 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal Mmx5lX7HVdrWCgh3EpTP">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/leslie-livingston.png" alt="Leslie image">
                                    <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG _8jNXfz935bbH_fAUIpN RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Leslie Livingston</span> mentioned you in a comment: <span class="ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">@bonnie.green</span> what do you say?</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">1 hour ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="Rr_S4jo1he4sYSgq5LE_ TZANVyZaogC2vtqxZ7oo RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/robert-brown.png" alt="Robert image">
                                    <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 MNgnvsy4e42uHuBwxxJg XZQ1UNoAcQMIV4si4Jk_ ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG _I92_RswYrnpS0B5dKZO RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="nXHmt07_6T25v6kTjTzf bHAdXFPNFeidKlaOkKvl y6GKdvUrd7vp_pxsFb57" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aa_y6SeayB9fNgBD5ROa t6gkcSf0Bt4MLItXvDJ_">
                                    <div class="PeR2JZ9BZHYIH8Ea3F36 _43MO1gcdi2Y0RJW1uHL c8dCx6gnV43hTOLV6ks5 iPpA4AtZi__uabBE5IKW XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">3 hours ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL ijrOHNoSVGATsWYKl4Id __9sbu0yrzdhGIkLWNXl jtAJHOc7mn7b4IKRO59D _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE Eu6DAInc_AYT0KJ7LY1L">
                            <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                <svg class="fhCwost7CSNRc2WSHLFW ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </div>
                        </a>
                    </div>

                    <button type="button" data-dropdown-toggle="apps-dropdown" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </button>

                    <div class="_SmdlCf6eUKB_V9S5IDj wBVMFkIGfrKshbvi2gS1 bXWhrLpoBVu4aMI8XQxr Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th ZhzOGpbwY0R4TKKYr5pG d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH cl0mFvgyErwMYM5aRkru jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="apps-dropdown">
                        <div class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe ijrOHNoSVGATsWYKl4Id rYHHksRBEMl_guI3q0UQ jtAJHOc7mn7b4IKRO59D jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                            Apps
                        </div>
                        <div class="xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf">
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Sales</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Users</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Inbox</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Profile</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Settings</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                    <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Products</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Pricing</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Billing</div>
                            </a>
                            <a href="#" class="_Vb9igHms0hI1PQcvp_S _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd Z3N7I2IDDsoXK6xJ1cSW RWlOLn85L9w5_1l9GIaX bLH_DeiQ7Cp4iBqeW3kq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Logout</div>
                            </a>
                        </div>
                    </div>
                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ yChACvAr1v8czJ2VO22j mveJTCIb2WII7J4sY22F c8dCx6gnV43hTOLV6ks5 olxDi3yL6f0gpdsOFDhx">
                        <svg id="theme-toggle-dark-icon" class="_SmdlCf6eUKB_V9S5IDj ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="_SmdlCf6eUKB_V9S5IDj ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="tooltip-toggle" role="tooltip" class="VPGGthdu3cy_ZP7AL7dt pq2JRWtiWcwYnw3xueNl ZBSHeVK3dmgzHTRX3hLO QhmQ_v3mmDFIP9VaVOfb b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 foDHZclRWUf2bqma2a8U mveJTCIb2WII7J4sY22F fzhbbDQ686T8arwvi_bJ Db4Wzva4DMepJJiQLY7M mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf H78G_4yayxs5C3xdFbnK">
                        Toggle dark mode
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                    </div>

                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 oA7zcT_42jVeFuWTXQnq">
                        <div>
                            <button type="button" class="YRrCJSr_j5nopfm4duUc c8dCx6gnV43hTOLV6ks5 RwT9RGumnuqUj7lx7fdb RpVwy4sO7Asb86CncKJ_ _dylIDxYTN3qgvD4U597 KLtw3_OqL54e_zEQU_yi ICV24pqO8p1LJm4GEOgS" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                                <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                                <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="{{ asset('images/1.png') }}" alt="user photo">
                            </button>
                        </div>

                        <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu " id="dropdown-2">
                            <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                                <p class="c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" role="none">
                                {{ Auth::user()->name }}
                                </p>
                                <p class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl vfNYjqjYMlN1XskEucCt EJIoL6514Ry8r7nh011L" role="none">
                                {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class=" " role="none">

                                <li class=" ">
                                    
                                    <a href="route('profile.edit')">  {{ __('Profile') }}</a>
                                    
                                </li>
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </nav>
    <div class="YRrCJSr_j5nopfm4duUc wfz9oKCp_svYP9oWrZuR wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom">

        <aside id="sidebar" class="YRrCJSr_j5nopfm4duUc _SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC uQByIGHtHssL9HoPQXR4 TYmpscr1PwuC1dpYXDpM bXWhrLpoBVu4aMI8XQxr e8VqoQNK0mbkRFDL3LMV VQS2tmQ_zFyBOC2tkmto wfz9oKCp_svYP9oWrZuR nUVQqdd_RQjvvOrcRIpD uLPch_bqyJDXwe5tynMV gZ3KuFw1JESHhOJhjT8j _YtPVN_LlqV6t4rglMAI bNOx3Wgl24m9GoljaM1X" aria-label="Sidebar">
            <div class="YRrCJSr_j5nopfm4duUc ahOqFrhzLjivRe8a1kX_ e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe Yr1oeNFASSARgkvkNsPa qG4UENFSlNnopb6lM8a8 _Ybd3WwuTVljUT4vEaM3 hEIh0_vxSXD_ZBXYxnd0 qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
                <div class="YRrCJSr_j5nopfm4duUc _lTTGxW9MVI40FyDCtmr e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe LVS5VhNiuUNp2iESGVfr pjVv_HvtzX_QkbymyvoG">
                    <div class="_74lpPUMEtHf6F0_fjLe _Cj_M6jt2eLjDgkBBNgI wezTbYJgxYJp5ZDqX67N _Ybd3WwuTVljUT4vEaM3 Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb _1jTZ8KXRZul60S6czNi XpuPpk9eXhVCrleKmXDr">
                        <ul class="hwCTzGuw3Wvg2a388A7l TVHgSaRh3muGJct_epr9">
                            <li>
                                <form action="#" method="GET" class="F34pkf_DAj2DlPtfAEMV">
                                    <label for="mobile-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
                                    <div class="ahOqFrhzLjivRe8a1kX_">
                                        <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
                                            <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl c8dCx6gnV43hTOLV6ks5 mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL duXR6Hcu_44X_243WcOl KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                                    </svg>

                                    <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('category*') ? 'active' : '' }}">
                                <a href="{{ route('category.index') }}" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX ">


                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M10.83 5a3.001 3.001 0 0 0-5.66 0H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17ZM4 11h9.17a3.001 3.001 0 0 1 5.66 0H20a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H4a1 1 0 1 1 0-2Zm1.17 6H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17a3.001 3.001 0 0 0-5.66 0Z" />
                                    </svg>

                                    <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Categories</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('post*') ? 'active' : '' }}">
                                <a href="{{ route('post.index') }}" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                                    </svg>

                                    <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Posts</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('layout*') ? 'active' : '' }}">
                                <a href="{{ route('layout.index') }}" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
</svg>


                                    <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Layouts</span>
                                </a>
                            </li>

                        </ul>
                        <div class="RLVemQvbW8bmzNf3KoDP TVHgSaRh3muGJct_epr9">
                            <a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Docs</span>
                            </a>
                            <a href="https://flowbite.com/docs/components/alerts/" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                </svg>
                                <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Components</span>
                            </a>
                            <a href="https://github.com/themesberg/flowbite/issues" target="_blank" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Help</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="_SmdlCf6eUKB_V9S5IDj pq2JRWtiWcwYnw3xueNl VuoyqWQkm5MTiE515qz8 TYmpscr1PwuC1dpYXDpM Nm7xMnguzOx6J5Ao7yCU _wYiJGbRZyFZeCc8y7Sf d4louhNic5PFgJGRKqn6 t6gkcSf0Bt4MLItXvDJ_ _YtPVN_LlqV6t4rglMAI" sidebar-bottom-menu="">
                    <a href="#" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                        </svg>
                    </a>
                    <a href="https://flowbite.com/application-ui/demo/users/settings/" data-tooltip-target="tooltip-settings" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div id="tooltip-settings" role="tooltip" class="VPGGthdu3cy_ZP7AL7dt pq2JRWtiWcwYnw3xueNl ZBSHeVK3dmgzHTRX3hLO QhmQ_v3mmDFIP9VaVOfb b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 foDHZclRWUf2bqma2a8U mveJTCIb2WII7J4sY22F fzhbbDQ686T8arwvi_bJ Db4Wzva4DMepJJiQLY7M mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf H78G_4yayxs5C3xdFbnK jqg6J89cvxmDiFpnV56r">
                        Settings page
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                    </div>
                    <button type="button" data-dropdown-toggle="language-dropdown" class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                        <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ RpVwy4sO7Asb86CncKJ_ xLxy3movqzZW0DK9On8M" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                            <path fill="#b22234" d="M0 0h7410v3900H0z"></path>
                            <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"></path>
                            <path fill="#3c3b6e" d="M0 0h2964v2100H0z"></path>
                            <g fill="#fff">
                                <g id="d">
                                    <g id="c">
                                        <g id="e">
                                            <g id="b">
                                                <path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"></path>
                                                <use xlink:href="#a" y="420"></use>
                                                <use xlink:href="#a" y="840"></use>
                                                <use xlink:href="#a" y="1260"></use>
                                            </g>
                                            <use xlink:href="#a" y="1680"></use>
                                        </g>
                                        <use xlink:href="#b" x="247" y="210"></use>
                                    </g>
                                    <use xlink:href="#c" x="494"></use>
                                </g>
                                <use xlink:href="#d" x="988"></use>
                                <use xlink:href="#c" x="1976"></use>
                                <use xlink:href="#e" x="2470"></use>
                            </g>
                        </svg>
                    </button>

                    <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r" id="language-dropdown">
                        <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                            <li>
                                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                                            <g fill-rule="evenodd">
                                                <g stroke-width="1pt">
                                                    <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
                                                    <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
                                                </g>
                                                <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
                                                <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"></path>
                                            </g>
                                        </svg>
                                        English (US)
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                                            <path fill="#ffce00" d="M0 341.3h512V512H0z"></path>
                                            <path d="M0 0h512v170.7H0z"></path>
                                            <path fill="#d00" d="M0 170.7h512v170.6H0z"></path>
                                        </svg>
                                        Deutsch
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                                <path fill="#fff" d="M0 0h512v512H0z"></path>
                                                <path fill="#009246" d="M0 0h170.7v512H0z"></path>
                                                <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"></path>
                                            </g>
                                        </svg>
                                        Italiano
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg class="OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_ fhCwost7CSNRc2WSHLFW" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                                            <defs>
                                                <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"></path>
                                            </defs>
                                            <path fill="#de2910" d="M0 0h512v512H0z"></path>
                                            <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"></use>
                                            <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"></use>
                                            <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"></use>
                                            <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"></use>
                                            <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"></use>
                                        </svg>
                                        中文 (繁體)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

        <div class="_SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>

        <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D zW58fVqdWJHfumftUEwF h8KYXnua2NT4kTVzieom">
            <main>

                {{ $slot }}


            </main>
            <!-- <footer class="_wYiJGbRZyFZeCc8y7Sf dPKKN86A3v0FrOZGwMAI _Zt0QWNoskeJIuWJ94UW _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _TsbEtxNT5XPbTk6VlSv hhVyfLYO5HBNKAsXwK1v t5cz8HTvFaREjnieK5hv LSIxp7RSuOKhsg28v_u3 SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
                <ul class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 Q_jg_EPdNf9eDMn1mLI2 EyjJPKD7jgGRBhaLpRVI wezTbYJgxYJp5ZDqX67N _ZI9D_boHHl7De08RAA7">
                    <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Terms and conditions</a></li>
                    <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Privacy Policy</a></li>
                    <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Licensing</a></li>
                    <li><a href="#" class="y7LTF_4HCOoAzmZm_v8k c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ xLxz3T8aF89CfiYPaIX3 XIIs8ZOri3wm8Wnj9N_y">Cookie Policy</a></li>
                    <li><a href="#" class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 oJZU4OQzzfXeLbF7UKZ_ XIIs8ZOri3wm8Wnj9N_y">Contact</a></li>
                </ul>
                <div class="YRrCJSr_j5nopfm4duUc e2hrZSYddULUFUtJ9wBR _PC7_lPKkOLQCngwwxFs">
                    <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW">
                        <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </footer> -->
            <!-- <p class="_doGzYmWP2_jIjPyHtlc c8dCx6gnV43hTOLV6ks5 ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36">
                © 2019-2022 <a href="https://flowbite.com/" class="oJZU4OQzzfXeLbF7UKZ_" target="_blank">Flowbite.com</a>. All rights reserved.
            </p> -->

        </div>

    </div>



    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>

</body>

</html>