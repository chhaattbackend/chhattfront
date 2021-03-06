var t, e;
(t = this),
    (e = function () {
        "use strict";
        function t(t, e) {
            var n = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(t);
                e &&
                    (r = r.filter(function (e) {
                        return Object.getOwnPropertyDescriptor(t, e).enumerable;
                    })),
                    n.push.apply(n, r);
            }
            return n;
        }
        function e(e) {
            for (var n = 1; n < arguments.length; n++) {
                var i = null != arguments[n] ? arguments[n] : {};
                n % 2
                    ? t(Object(i), !0).forEach(function (t) {
                          r(e, t, i[t]);
                      })
                    : Object.getOwnPropertyDescriptors
                    ? Object.defineProperties(
                          e,
                          Object.getOwnPropertyDescriptors(i)
                      )
                    : t(Object(i)).forEach(function (t) {
                          Object.defineProperty(
                              e,
                              t,
                              Object.getOwnPropertyDescriptor(i, t)
                          );
                      });
            }
            return e;
        }
        function n(t) {
            return (n =
                "function" == typeof Symbol &&
                "symbol" == typeof Symbol.iterator
                    ? function (t) {
                          return typeof t;
                      }
                    : function (t) {
                          return t &&
                              "function" == typeof Symbol &&
                              t.constructor === Symbol &&
                              t !== Symbol.prototype
                              ? "symbol"
                              : typeof t;
                      })(t);
        }
        function r(t, e, n) {
            return (
                e in t
                    ? Object.defineProperty(t, e, {
                          value: n,
                          enumerable: !0,
                          configurable: !0,
                          writable: !0,
                      })
                    : (t[e] = n),
                t
            );
        }
        function i(t) {
            return (
                (function (t) {
                    if (Array.isArray(t)) return s(t);
                })(t) ||
                (function (t) {
                    if (
                        ("undefined" != typeof Symbol &&
                            null != t[Symbol.iterator]) ||
                        null != t["@@iterator"]
                    )
                        return Array.from(t);
                })(t) ||
                o(t) ||
                (function () {
                    throw new TypeError(
                        "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                    );
                })()
            );
        }
        function o(t, e) {
            if (t) {
                if ("string" == typeof t) return s(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                return (
                    "Object" === n && t.constructor && (n = t.constructor.name),
                    "Map" === n || "Set" === n
                        ? Array.from(t)
                        : "Arguments" === n ||
                          /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                        ? s(t, e)
                        : void 0
                );
            }
        }
        function s(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r;
        }
        var u,
            a = function (t) {
                new MutationObserver(function (e, n) {
                    e.forEach(function (e) {
                        t.input && (n.disconnect(), t.init());
                    });
                }).observe(document, { childList: !0, subtree: !0 });
            },
            c = function (t) {
                return "string" == typeof t ? document.querySelector(t) : t;
            },
            l = function (t, e) {
                var n = "string" == typeof t ? document.createElement(t) : t;
                for (var r in e) {
                    var i = e[r];
                    if ("inside" === r) i.append(n);
                    else if ("dest" === r)
                        c(i[0]).insertAdjacentElement(i[1], n);
                    else if ("around" === r) {
                        var o = c(i);
                        o.parentNode.insertBefore(n, o),
                            n.append(o),
                            null != o.getAttribute("autofocus") && o.focus();
                    } else r in n ? (n[r] = i) : n.setAttribute(r, i);
                }
                return n;
            },
            f = function (t, e) {
                return (
                    (t = t.toString().toLowerCase()),
                    e
                        ? t
                              .normalize("NFD")
                              .replace(/[\u0300-\u036f]/g, "")
                              .normalize("NFC")
                        : t
                );
            },
            p = function (t, n) {
                return l(
                    "mark",
                    e({ innerHTML: t }, "string" == typeof n && { class: n })
                ).outerHTML;
            },
            d = function (t, e) {
                e.input.dispatchEvent(
                    new CustomEvent(t, {
                        bubbles: !0,
                        detail: e.feedback,
                        cancelable: !0,
                    })
                );
            },
            h = function (t, e, n) {
                var r = n || {},
                    i = r.mode,
                    o = r.diacritics,
                    s = r.highlight,
                    u = f(e, o);
                if (((e = e.toString()), (t = f(t, o)), "loose" === i)) {
                    var a = (t = t.replace(/ /g, "")).length,
                        c = 0,
                        l = Array.from(e)
                            .map(function (e, n) {
                                return (
                                    c < a &&
                                        u[n] === t[c] &&
                                        ((e = s ? p(e, s) : e), c++),
                                    e
                                );
                            })
                            .join("");
                    if (c === a) return l;
                } else {
                    var d = u.indexOf(t);
                    if (~d)
                        return (
                            (t = e.substring(d, d + t.length)),
                            (d = s ? e.replace(t, p(t, s)) : e)
                        );
                }
            },
            m = function (t) {
                return new Promise(function (e, n) {
                    var r, i, o;
                    return (
                        (r = t.input),
                        (i = t.query),
                        (o = t.data).cache && o.store
                            ? e()
                            : ((i = i ? i(r.value) : r.value),
                              new Promise(function (t, e) {
                                  return "function" == typeof o.src
                                      ? o.src(i).then(t, e)
                                      : t(o.src);
                              }).then(function (r) {
                                  try {
                                      return (
                                          (t.feedback = o.store = r),
                                          d("response", t),
                                          e()
                                      );
                                  } catch (t) {
                                      return n(t);
                                  }
                              }, n))
                    );
                });
            },
            v = function (t, e) {
                var n = e.data,
                    r = e.searchEngine,
                    i = e.diacritics,
                    s = e.resultsList,
                    u = e.resultItem,
                    a = [];
                n.store.forEach(function (e, s) {
                    var c = function (n) {
                        var o = n ? e[n] : e,
                            s =
                                "function" == typeof r
                                    ? r(t, o)
                                    : h(t, o, {
                                          mode: r,
                                          diacritics: i,
                                          highlight: u.highlight,
                                      });
                        if (s) {
                            var c = { match: s, value: e };
                            n && (c.key = n), a.push(c);
                        }
                    };
                    if (n.keys) {
                        var l,
                            f = (function (t, e) {
                                var n =
                                    ("undefined" != typeof Symbol &&
                                        t[Symbol.iterator]) ||
                                    t["@@iterator"];
                                if (!n) {
                                    if (
                                        Array.isArray(t) ||
                                        (n = o(t)) ||
                                        (e && t && "number" == typeof t.length)
                                    ) {
                                        n && (t = n);
                                        var r = 0,
                                            i = function () {};
                                        return {
                                            s: i,
                                            n: function () {
                                                return r >= t.length
                                                    ? { done: !0 }
                                                    : {
                                                          done: !1,
                                                          value: t[r++],
                                                      };
                                            },
                                            e: function (t) {
                                                throw t;
                                            },
                                            f: i,
                                        };
                                    }
                                    throw new TypeError(
                                        "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                                    );
                                }
                                var s,
                                    u = !0,
                                    a = !1;
                                return {
                                    s: function () {
                                        n = n.call(t);
                                    },
                                    n: function () {
                                        var t = n.next();
                                        return (u = t.done), t;
                                    },
                                    e: function (t) {
                                        (a = !0), (s = t);
                                    },
                                    f: function () {
                                        try {
                                            u || null == n.return || n.return();
                                        } finally {
                                            if (a) throw s;
                                        }
                                    },
                                };
                            })(n.keys);
                        try {
                            for (f.s(); !(l = f.n()).done; ) c(l.value);
                        } catch (t) {
                            f.e(t);
                        } finally {
                            f.f();
                        }
                    } else c();
                }),
                    n.filter && (a = n.filter(a));
                var c = a.slice(0, s.maxResults);
                (e.feedback = { query: t, matches: a, results: c }),
                    d("results", e);
            },
            b = "aria-expanded",
            y = "aria-activedescendant",
            g = "aria-selected",
            w = function (t, n) {
                t.feedback.selection = e({ index: n }, t.feedback.results[n]);
            },
            O = function (t) {
                t.isOpen ||
                    ((t.wrapper || t.input).setAttribute(b, !0),
                    t.list.removeAttribute("hidden"),
                    (t.isOpen = !0),
                    d("open", t));
            },
            A = function (t) {
                t.isOpen &&
                    ((t.wrapper || t.input).setAttribute(b, !1),
                    t.input.setAttribute(y, ""),
                    t.list.setAttribute("hidden", ""),
                    (t.isOpen = !1),
                    d("close", t));
            },
            S = function (t, e) {
                var n = e.list.getElementsByTagName(e.resultItem.tag);
                if (e.isOpen && n.length) {
                    var r,
                        o,
                        s = e.cursor;
                    t >= n.length && (t = 0),
                        t < 0 && (t = n.length - 1),
                        (e.cursor = t),
                        s > -1 &&
                            (n[s].removeAttribute(g),
                            u && (o = n[s].classList).remove.apply(o, i(u))),
                        n[t].setAttribute(g, !0),
                        u && (r = n[t].classList).add.apply(r, i(u)),
                        e.input.setAttribute(y, n[e.cursor].id),
                        (e.list.scrollTop =
                            n[t].offsetTop -
                            e.list.clientHeight +
                            n[t].clientHeight +
                            5),
                        (e.feedback.cursor = e.cursor),
                        w(e, t),
                        d("navigate", e);
                }
            },
            L = function (t) {
                var e = t.cursor + 1;
                S(e, t);
            },
            j = function (t) {
                var e = t.cursor - 1;
                S(e, t);
            },
            k = function (t, e, n) {
                (n = n >= 0 ? n : t.cursor) < 0 ||
                    ((t.feedback.event = e), w(t, n), d("selection", t), A(t));
            };
        function E(t) {
            var n = this;
            return new Promise(function (r, i) {
                var o, s, u, a, c, f, p;
                return (
                    (o = t.input),
                    (s = t.query),
                    (u = t.trigger),
                    (a = t.threshold),
                    (c = t.resultsList),
                    (f =
                        (p = o) instanceof HTMLInputElement ||
                        p instanceof HTMLTextAreaElement
                            ? p.value
                            : p.innerHTML),
                    (function (t, e, n) {
                        return e ? e(t) : t.length >= n;
                    })((f = s ? s(f) : f), u, a)
                        ? m(t).then(function (o) {
                              try {
                                  return t.feedback instanceof Error
                                      ? r()
                                      : (v(f, t),
                                        c &&
                                            (function (t) {
                                                var n = t.resultsList,
                                                    r = t.list,
                                                    i = t.resultItem,
                                                    o = t.feedback;
                                                o.query;
                                                var s = o.matches,
                                                    u = o.results;
                                                if (
                                                    ((t.cursor = -1),
                                                    (r.innerHTML = ""),
                                                    s.length || n.noResults)
                                                ) {
                                                    var a =
                                                        document.createDocumentFragment();
                                                    u.forEach(function (t, n) {
                                                        var r = l(
                                                            i.tag,
                                                            e(
                                                                {
                                                                    id: ""
                                                                        .concat(
                                                                            i.id,
                                                                            "_"
                                                                        )
                                                                        .concat(
                                                                            n
                                                                        ),
                                                                    role: "option",
                                                                    innerHTML:
                                                                        t.match,
                                                                    inside: a,
                                                                },
                                                                i.class && {
                                                                    class: i.class,
                                                                }
                                                            )
                                                        );
                                                        i.element &&
                                                            i.element(r, t);
                                                    }),
                                                        r.append(a),
                                                        n.element &&
                                                            n.element(r, o),
                                                        O(t);
                                                } else A(t);
                                            })(t),
                                        d.call(n));
                              } catch (t) {
                                  return i(t);
                              }
                          }, i)
                        : (A(t), d.call(n))
                );
                function d() {
                    return r();
                }
            });
        }
        var T = function (t, e) {
                for (var n in t) for (var r in t[n]) e(r, n);
            },
            I = function (t) {
                var n = t.events;
                t.trigger;
                var r = t.debounce,
                    i = t.resultsList,
                    o = (function (t, e) {
                        var n;
                        return function () {
                            clearTimeout(n),
                                (n = setTimeout(function () {
                                    return t();
                                }, e));
                        };
                    })(function () {
                        return E(t);
                    }, r),
                    s = (t.events = e(
                        { input: e({}, n && n.input) },
                        i && { list: n ? e({}, n.list) : {} }
                    )),
                    a = {
                        input: {
                            input: function () {
                                o();
                            },
                            keydown: function (e) {
                                !(function (t, e) {
                                    var n = t.keyCode,
                                        r = e.resultItem.selected;
                                    switch ((r && (u = r.split(" ")), n)) {
                                        case 40:
                                        case 38:
                                            t.preventDefault(),
                                                40 === n ? L(e) : j(e);
                                            break;
                                        case 13:
                                            t.preventDefault(),
                                                e.cursor >= 0 && k(e, t);
                                            break;
                                        case 9:
                                            e.resultsList.tabSelect &&
                                            e.cursor >= 0
                                                ? (t.preventDefault(), k(e, t))
                                                : A(e);
                                            break;
                                        case 27:
                                            t.preventDefault(),
                                                (e.input.value = ""),
                                                A(e);
                                    }
                                })(e, t);
                            },
                            blur: function () {
                                A(t);
                            },
                        },
                        list: {
                            mousedown: function (t) {
                                t.preventDefault();
                            },
                            click: function (e) {
                                !(function (t, e) {
                                    var n = e.resultItem.tag.toUpperCase(),
                                        r = Array.from(
                                            e.list.querySelectorAll(n)
                                        ),
                                        i = t.target.closest(n);
                                    if (i && i.nodeName === n) {
                                        t.preventDefault();
                                        var o = r.indexOf(i);
                                        k(e, t, o);
                                    }
                                })(e, t);
                            },
                        },
                    };
                T(a, function (t, e) {
                    (i || "list" !== e) && (s[e][t] || (s[e][t] = a[e][t]));
                }),
                    T(s, function (e, n) {
                        t[n].addEventListener(e, s[n][e]);
                    });
            };
        function x(t) {
            var n = this;
            return new Promise(function (r, i) {
                var o, s, u, a, c, f;
                if (
                    ((o = t.name),
                    (s = t.input),
                    (u = t.placeHolder),
                    (a = t.resultsList),
                    (c = t.data),
                    (f = {
                        role: "combobox",
                        "aria-owns": a.id,
                        "aria-haspopup": !0,
                        "aria-expanded": !1,
                    }),
                    l(
                        s,
                        e(
                            e(
                                {
                                    "aria-controls": a.id,
                                    "aria-autocomplete": "both",
                                },
                                u && { placeholder: u }
                            ),
                            !t.wrapper && e({}, f)
                        )
                    ),
                    t.wrapper &&
                        (t.wrapper = l(
                            "div",
                            e({ around: s, class: o + "_wrapper" }, f)
                        )),
                    a &&
                        (t.list = l(
                            a.tag,
                            e(
                                {
                                    dest: [
                                        "string" == typeof a.destination
                                            ? document.querySelector(
                                                  a.destination
                                              )
                                            : a.destination(),
                                        a.position,
                                    ],
                                    id: a.id,
                                    role: "listbox",
                                    hidden: "hidden",
                                },
                                a.class && { class: a.class }
                            )
                        )),
                    c.cache)
                )
                    return m(t).then(function (t) {
                        try {
                            return p.call(n);
                        } catch (t) {
                            return i(t);
                        }
                    }, i);
                function p() {
                    return I(t), d("init", t), r();
                }
                return p.call(n);
            });
        }
        function P(t) {
            var e = t.prototype;
            (e.preInit = function () {
                a(this);
            }),
                (e.init = function () {
                    x(this);
                }),
                (e.start = function () {
                    E(this);
                }),
                (e.unInit = function () {
                    var t;
                    T((t = this).events, function (e, n) {
                        t[n].removeEventListener(e, t.events[n][e]);
                    });
                }),
                (e.open = function () {
                    O(this);
                }),
                (e.close = function () {
                    A(this);
                }),
                (e.goTo = function (t) {
                    S(t, this);
                }),
                (e.next = function () {
                    L(this);
                }),
                (e.previous = function () {
                    j(this);
                }),
                (e.select = function (t) {
                    k(this, null, t);
                }),
                (t.search = e.search =
                    function (t, e, n) {
                        h(t, e, n);
                    });
        }
        return function t(e) {
            (this.options = e),
                (this.id = t.instances = (t.instances || 0) + 1),
                (this.name = "autoComplete"),
                (this.wrapper = 1),
                (this.threshold = 1),
                (this.debounce = 0),
                (this.resultsList = {
                    position: "afterend",
                    tag: "ul",
                    maxResults: 5,
                }),
                (this.resultItem = { tag: "li" }),
                (function (t) {
                    var e = t.id,
                        r = t.name,
                        i = t.options,
                        o = t.resultsList,
                        s = t.resultItem;
                    for (var u in i)
                        if ("object" === n(i[u]))
                            for (var a in (t[u] || (t[u] = {}), i[u]))
                                t[u][a] = i[u][a];
                        else t[u] = i[u];
                    (t.selector = t.selector || "#" + r),
                        (o.destination = o.destination || t.selector),
                        (o.id = o.id || r + "_list_" + e),
                        (s.id = s.id || r + "_result"),
                        (t.input =
                            "string" == typeof t.selector
                                ? document.querySelector(t.selector)
                                : t.selector());
                })(this),
                P.call(this, t),
                (this.observe ? a : x)(this);
        };
    }),
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = e())
        : "function" == typeof define && define.amd
        ? define(e)
        : ((t =
              "undefined" != typeof globalThis
                  ? globalThis
                  : t || self).autoComplete = e());
