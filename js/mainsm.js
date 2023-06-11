try {
  fetch(
    new Request(
      "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js",
      {
        method: "HEAD",
        mode: "no-cors",
      }
    )
  )
    .then(function (response) {
      return true;
    })
    .catch(function (e) {
      var carbonScript = document.createElement("script");
      carbonScript.src =
        "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
} catch (error) {
  console.log(error);
}

(function (i, s, o, g, r, a, m) {
  i["GoogleAnalyticsObject"] = r;
  (i[r] =
    i[r] ||
    function () {
      (i[r].q = i[r].q || []).push(arguments);
    }),
    (i[r].l = 1 * new Date());
  (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m);
})(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

ga("create", "UA-46156385-1", "cssscript.com");
ga("send", "pageview");

!(function (e) {
  var t = {};

  function n(o) {
    if (t[o]) return t[o].exports;
    var r = (t[o] = {
      i: o,
      l: !1,
      exports: {},
    });
    return e[o].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
  }
  (n.m = e),
    (n.c = t),
    (n.d = function (e, t, o) {
      n.o(e, t) ||
        Object.defineProperty(e, t, {
          enumerable: !0,
          get: o,
        });
    }),
    (n.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, {
          value: "Module",
        }),
        Object.defineProperty(e, "__esModule", {
          value: !0,
        });
    }),
    (n.t = function (e, t) {
      if ((1 & t && (e = n(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var o = Object.create(null);
      if (
        (n.r(o),
        Object.defineProperty(o, "default", {
          enumerable: !0,
          value: e,
        }),
        2 & t && "string" != typeof e)
      )
        for (var r in e)
          n.d(
            o,
            r,
            function (t) {
              return e[t];
            }.bind(null, r)
          );
      return o;
    }),
    (n.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return n.d(t, "a", t), t;
    }),
    (n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (n.p = ""),
    n((n.s = 0));
})([
  function (e, t, n) {
    "use strict";
    n.r(t);
    var o;
    n(1);
    window.addEventListener("resize", function () {
      document.body.classList.add("resize-animation-stopper"),
        clearTimeout(o),
        (o = setTimeout(function () {
          document.body.classList.remove("resize-animation-stopper");
        }, 400));
    });
    var r = document.querySelector(".nav-toggle"),
      i = document.querySelector(".menu-toggle");
    r.addEventListener("click", function (e) {
      this.classList.toggle("open"),
        i.classList.toggle("active"),
        e.stopPropagation();
    }),
      document
        .querySelector(".dropdown a")
        .addEventListener("click", function (e) {
          this.nextElementSibling.classList.toggle("show"),
            this.parentNode.classList.toggle("active"),
            e.stopPropagation();
        }),
      document
        .querySelector(".second-level a")
        .addEventListener("click", function (e) {
          this.nextElementSibling.classList.toggle("show"),
            this.parentNode.classList.toggle("active"),
            e.stopPropagation();
        });
    document
      .querySelector(".third-level a")
      .addEventListener("click", function (e) {
        this.nextElementSibling.classList.toggle("show"),
          this.parentNode.classList.toggle("active"),
          e.stopPropagation();
      });
    document
      .querySelector(".fourth-level a")
      .addEventListener("click", function (e) {
        this.nextElementSibling.classList.toggle("show"),
          this.parentNode.classList.toggle("active"),
          e.stopPropagation();
      });
  },
  function (e, t, n) {},
]);
