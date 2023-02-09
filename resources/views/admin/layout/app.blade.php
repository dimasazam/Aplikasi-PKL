<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/frontend/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/frontend/assets/img/favicon.png">
    <title>
        Data Gudang ICT RANT
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard">

    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Soft UI Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, free dashboard, free admin dashboard, free bootstrap 5 admin dashboard">
    <meta name="description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Soft UI Dashboard by Creative Tim">
    <meta name="twitter:description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png">

    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Soft UI Dashboard by Creative Tim">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://demos.creative-tim.com/soft-ui-dashboard/examples/dashboard.html">
    <meta property="og:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png">
    <meta property="og:description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta property="og:site_name" content="Creative Tim">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="/frontend/assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="/frontend/assets/css/nucleo-svg.css" rel="stylesheet">

    <script async="" src="https://s.pinimg.com/ct/lib/main.99b99bf9.js"></script>
    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/main.MWNiNWY1N2YyMw.js"
        data-id="CC6UAQBC77U7GVKHLC4G"></script>
    <script type="text/javascript" async=""
        src="https://www.google-analytics.com/gtm/js?id=GTM-K9BGS8K&amp;cid=720420524.1675953057&amp;aip=true"></script>
    <script type="text/javascript" async=""
        src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=CC6UAQBC77U7GVKHLC4G&amp;lib=ttq"></script>
    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    <script type="text/javascript" async="" src="https://s.pinimg.com/ct/core.js"></script>
    <script type="text/javascript" async="" src="https://static.hotjar.com/c/hotjar-99526.js?sv=7"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NKDMSK6"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/frontend/assets/css/nucleo-svg.css" rel="stylesheet">

    <link id="pagestyle" href="/frontend/assets/css/soft-ui-dashboard.min.css?v=1.0.7" rel="stylesheet">

   
</head>

<body class="g-sidenav-show  bg-gray-100">
 


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

 @include('admin.partial.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">



        <div class="container-fluid py-4">
            @yield('content')
           @include('admin.partial.footer')
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 663px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 282px;"></div>
        </div>
    </main>
    <div class="fixed-plugin ps">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2" aria-hidden="true"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>

            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">

                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>

                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)" checked="true">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <span></span>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>

    <script src="/frontend/assets/js/core/popper.min.js"></script>
    <script src="/frontend/assets/js/core/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/frontend/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/frontend/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#fff",
                    data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 15,
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        },
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Mobile apps",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    },
                    {
                        label: "Websites",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

    <script src="/frontend/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

    <style>
        #ofBar {
            background: #fff;
            z-index: 999999999;
            font-size: 16px;
            color: #333;
            padding: 16px 40px;
            font-weight: 400;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 40px;
            width: 80%;
            border-radius: 8px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
        }

        #ofBar-logo img {
            height: 50px;
        }

        #ofBar-content {
            display: inline;
            padding: 0 15px;
        }

        #ofBar-right {
            display: flex;
            align-items: center;
        }

        #ofBar b {
            font-size: 15px !important;
        }

        #count-down {
            display: initial;
            padding-left: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        #close-bar {
            font-size: 17px;
            opacity: 0.5;
            cursor: pointer;
        }

        #close-bar:hover {
            opacity: 1;
        }

        #btn-bar {
            background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
            color: #fff;
            border-radius: 4px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 12px;
            opacity: .95;
            margin-right: 20px;
            box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
        }

        #btn-bar,
        #btn-bar:hover,
        #btn-bar:focus,
        #btn-bar:active {
            text-decoration: none !important;
            color: #fff !important;
        }

        #btn-bar:hover {
            opacity: 1;
        }

        #btn-bar span,
        #ofBar-content span {
            color: red;
            font-weight: 700;
        }

        #oldPriceBar {
            text-decoration: line-through;
            font-size: 16px;
            color: #fff;
            font-weight: 400;
            top: 2px;
            position: relative;
        }

        #newPrice {
            color: #fff;
            font-size: 19px;
            font-weight: 700;
            top: 2px;
            position: relative;
            margin-left: 7px;
        }

        #fromText {
            font-size: 15px;
            color: #fff;
            font-weight: 400;
            margin-right: 3px;
            top: 0px;
            position: relative;
        }

        @media(max-width: 991px) {}

        @media (max-width: 768px) {
            #count-down {
                display: block;
                margin-top: 15px;
            }

            #ofBar {
                flex-direction: column;
                align-items: normal;
            }

            #ofBar-content {
                margin: 15px 0;
                text-align: center;
                font-size: 18px;
            }

            #ofBar-right {
                justify-content: flex-end;
            }
        }
    </style>

    <script type="text/javascript" id="">
        function setCookie(a, d, c) {
            var b = new Date;
            b.setTime(b.getTime() + 864E5 * c);
            c = "expires\x3d" + b.toUTCString();
            document.cookie = a + "\x3d" + d + ";" + c + ";path\x3d/"
        }

        function readCookie(a) {
            a += "\x3d";
            for (var d = document.cookie.split(";"), c = 0; c < d.length; c++) {
                for (var b = d[c];
                    " " == b.charAt(0);) b = b.substring(1, b.length);
                if (0 == b.indexOf(a)) return b.substring(a.length, b.length)
            }
            return null
        }

        function createOfferBar() {
            var a = document.createElement("div");
            a.setAttribute("id", "ofBar");
            a.innerHTML =
                "\x3cdiv id\x3d'ofBar-logo'\x3e \x3cimg alt\x3d'creative-tim-logo' src\x3d'https://s3.amazonaws.com/creativetim_bucket/static-assets/logo-ct-black.png'\x3e\x3c/div\x3e\x3cdiv id\x3d'ofBar-content'\x3e\ud83c\udf89 Take advantage of the last deals of the year! Choose your favorite \x3cb\x3eWinter Bundle and save 80% OFF\x3c/b\x3e \u2744\ufe0f\x3c/div\x3e\x3cdiv id\x3d'ofBar-right'\x3e\x3ca href\x3d'https://www.creative-tim.com/campaign?ref\x3dct-demos' target\x3d'_blank' id\x3d'btn-bar'\x3eView Offer\x3c/a\x3e\x3ca id\x3d'close-bar'\x3e\u00d7\x3c/a\x3e\x3c/div\x3e";
            document.body.insertBefore(a,
                document.body.firstChild)
        }

        function closeOfferBar() {
            document.getElementById("ofBar").setAttribute("style", "display:none");
            setCookie("view_offer_bar", "true", 1)
        }
        var value = readCookie("view_offer_bar");
        if (null == value) {
            createOfferBar();
            document.getElementById("close-bar").addEventListener("click", closeOfferBar);
            var countDownDate = Date.UTC(2020, 10, 28, 8, 0, 0),
                x = setInterval(function() {
                        var a = (new Date((new Date).toUTCString())).getTime();
                        a = countDownDate - a;
                        var d = Math.floor(a / 864E5),
                            c = Math.floor(a % 864E5 / 36E5),
                            b = Math.floor(a % 36E5 / 6E4),
                            e = Math.floor(a % 6E4 / 1E3);
                        document.getElementById("count-down").innerHTML = d + "d " + c + ":" + b + ":" + e;
                        0 > a && (clearInterval(x), document.getElementById("count-down").innerHTML = "EXPIRED")
                    },
                    1E3)
        };
    </script>
    <script type="text/javascript" id="">
        ! function(d, g, e) {
            d.TiktokAnalyticsObject = e;
            var a = d[e] = d[e] || [];
            a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie"
                .split(" ");
            a.setAndDefer = function(b, c) {
                b[c] = function() {
                    b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
            a.instance = function(b) {
                b = a._i[b] || [];
                for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
                return b
            };
            a.load = function(b, c) {
                var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
                a._i = a._i || {};
                a._i[b] = [];
                a._i[b]._u = f;
                a._t = a._t || {};
                a._t[b] = +new Date;
                a._o = a._o || {};
                a._o[b] = c || {};
                c = document.createElement("script");
                c.type = "text/javascript";
                c.async = !0;
                c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
                b = document.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(c, b)
            };
            a.load("CC6UAQBC77U7GVKHLC4G");
            a.page()
        }(window, document, "ttq");
    </script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;796d6d6d6d74a3cf&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>

    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" tabindex="-1" aria-hidden="true"
        id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-e031119f9e9e307a08fa610f85dbfb52.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><iframe
        id="_hjSafeContext_30200233" title="_hjSafeContext" tabindex="-1" aria-hidden="true"
        src="about:blank"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
</body><iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__"
    style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult_1.0__"
    title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe><iframe
    id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe><iframe
    id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__"
    style="display: none;"></iframe>

</html>
