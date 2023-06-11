<!DOCTYPE html>
<html lang="en">

<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="dist/main.css">
<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/style1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Nunito:wght@500&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM Workforce</title>

    <style>
    ul,
    a {
        font-family: 'Noto Serif', sans-serif;
    }
    </style>

</head>

<body>

    <header class="fixed-top" style="">
        <div class="nav__container">
            <div class="nav__mobile d-flex">
                <div class="nav__logo">
                    <a href="./index.php" class="navbar-brand" style="text-align:center ;">
                        <!-- Logo Image -->
                        <img src="images/smlogo.png" alt="" class="d-inline-block "
                            style="height:130px ; width:200px ;">
                        <!-- Logo Text -->
                    </a>
                </div>

                <div class="nav__btn">
                    <a aria-label="Mobile menu" class="nav-toggle fade"><span></span><span class="mrg"></span><span
                            class="mrg"></span></a>
                </div>
            </div>
            <nav class="menu-toggle">
                <ul class="nav__menu">
                    <li><a href="./index.php">Home </a></li>
                    <li><a href="./about.php">About</a></li>
                    <li class="dropdown"><a href="#">Services</a>
                        <ul>

                            <li class="dropdown second-level"><a href="#">Hygiene & Soft Services</a>
                                <ul>
                                    <li><a href="./hospital_cleaning_management.php">Patient Management Services</a>
                                    </li>
                                    <li><a href="./housekeeping_cleaning.php">HouseKeeping & Cleaning
                                            Services</a></li>
                                    <li><a href="./facade_cleaning.php">Facade Cleaning</a></li>
                                    <li><a href="./gardening_landscape.php">Gradening & Landscape</a></li>
                                    <li><a href="./business_support_staff.php">Business Support & Auditing Services</a>
                                    </li>
                                    <li><a href="./guest_house_management.php">Guest House Management Services</a></li>
                                    <li><a href="#">Food & Beverage Services</a></li>
                                </ul>
                            </li>
                            <li class="dropdown third-level"><a href="#">Support & Technical Services</a>
                                <ul>
                                    <li><a href="./electrical_and_plumbing.php">Electrical & Plumbing Services</a></li>
                                    <li><a href="./waste_management.php">Waste Management Services</a></li>
                                    <li><a href="./industrail_manpower_services.php">Industrial Manpower Services</a>
                                    </li>
                                    <li><a href="./machnized_road_sweeping.php">Mechanised Road Sweeping Services</a>
                                    </li>
                                    <li><a href="./pest_control_services.php">Pest Control Services</a></li>

                                </ul>
                            </li>
                            <li class="dropdown fourth-level"><a href="#">Premium Services</a>
                                <ul>
                                    <li><a href="./security_management_services.php">Security Management Services</a>
                                    </li>
                                    <li><a href="./fire_safety_services.php">Fire & Safety Services</a></li>
                                    <li><a href="./payroll_compliance.php">Payroll & Compliance Solution</a></li>
                                    <li><a href="./deepcleaning_disinfection.php">Deep Cleaning Disinfection &
                                            Sanitization</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a href="./career.php">Careers</a></li>
                    <li><a href="./clients.php">Clients</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <style>
    h1,
    h2 {
        text-align: center;
    }
    </style>

    <script src="dist/main.js"></script>
    <script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: 'HEAD',
            mode: 'no-cors'
        })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
        console.log(error);
    }
    </script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');
    </script>
    <script>
    !(function(e) {
        var t = {};

        function n(o) {
            if (t[o]) return t[o].exports;
            var r = (t[o] = {
                i: o,
                l: !1,
                exports: {}
            });
            return e[o].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
        }
        (n.m = e),
        (n.c = t),
        (n.d = function(e, t, o) {
            n.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: o
            });
        }),
        (n.r = function(e) {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }),
                Object.defineProperty(e, "__esModule", {
                    value: !0
                });
        }),
        (n.t = function(e, t) {
            if ((1 & t && (e = n(e)), 8 & t)) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var o = Object.create(null);
            if (
                (n.r(o),
                    Object.defineProperty(o, "default", {
                        enumerable: !0,
                        value: e
                    }),
                    2 & t && "string" != typeof e)
            )
                for (var r in e)
                    n.d(
                        o,
                        r,
                        function(t) {
                            return e[t];
                        }.bind(null, r)
                    );
            return o;
        }),
        (n.n = function(e) {
            var t =
                e && e.__esModule ?
                function() {
                    return e.default;
                } :
                function() {
                    return e;
                };
            return n.d(t, "a", t), t;
        }),
        (n.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
        }),
        (n.p = ""),
        n((n.s = 0));
    })([
        function(e, t, n) {
            "use strict";
            n.r(t);
            var o;
            n(1);
            window.addEventListener("resize", function() {
                document.body.classList.add("resize-animation-stopper"),
                    clearTimeout(o),
                    (o = setTimeout(function() {
                        document.body.classList.remove("resize-animation-stopper");
                    }, 400));
            });
            var r = document.querySelector(".nav-toggle"),
                i = document.querySelector(".menu-toggle");
            r.addEventListener("click", function(e) {
                    this.classList.toggle("open"),
                        i.classList.toggle("active"),
                        e.stopPropagation();
                }),
                document
                .querySelector(".dropdown a")
                .addEventListener("click", function(e) {
                    this.nextElementSibling.classList.toggle("show"),
                        this.parentNode.classList.toggle("active"),
                        e.stopPropagation();
                }),
                document
                .querySelector(".second-level a")
                .addEventListener("click", function(e) {
                    this.nextElementSibling.classList.toggle("show"),
                        this.parentNode.classList.toggle("active"),
                        e.stopPropagation();
                });
            document
                .querySelector(".third-level a")
                .addEventListener("click", function(e) {
                    this.nextElementSibling.classList.toggle("show"),
                        this.parentNode.classList.toggle("active"),
                        e.stopPropagation();
                });
            document
                .querySelector(".fourth-level a")
                .addEventListener("click", function(e) {
                    this.nextElementSibling.classList.toggle("show"),
                        this.parentNode.classList.toggle("active"),
                        e.stopPropagation();
                });
        },
        function(e, t, n) {},
    ]);
    </script>
</body>

</html>