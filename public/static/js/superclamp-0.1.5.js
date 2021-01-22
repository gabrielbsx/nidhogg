/*!
 * Superclamp 0.1.5
 * https://github.com/makandra/superclamp
 */
(function() { var t, e, n, i, o, r, s, a, u, l, p, c, h, d, m, f, g, _, y, v, b, A, $, w, T, N, E, I, x, B = function(t, e) { return function() { return t.apply(e, arguments) } },
        F = [].slice;
    l = !1, n = !1, r = "superclamp:done", c = "superclamp:update", u = "superclamp:instance", p = "superclamp-ready", i = "superclamp:dimensions", o = "superclamp:distanceToBottomRight", s = "superclamp:fragmentNodes", a = "superclamp:fragmentValues", e = ".clamp-ellipsis.is-not-required {\n  visibility: hidden !important;\n}\n.clamp-hidden {\n  display: none !important;\n}", t = window.jQuery, t("<style type='text/css'>" + e + "</style>").appendTo(document.head), t.fn.clamp = function() { return this.each(function() { return Superclamp.clamp(this) }), m(), this }, t(function() { return t(document).on(c, Superclamp.reclampAll) }), this.Superclamp = function() {
        function e(e) { var n;
            this.$element = e, this._clampNode = B(this._clampNode, this), this._checkFit = B(this._checkFit, this), this._unchanged = B(this._unchanged, this), this._distanceToBottomRight = B(this._distanceToBottomRight, this), this._getEllipsisAt = B(this._getEllipsisAt, this), this._clampThis = B(this._clampThis, this), this._storeDistance = B(this._storeDistance, this), this._updateElementAt = B(this._updateElementAt, this), this._updateEllipsisSize = B(this._updateEllipsisSize, this), h("initialize", this.$element), n = document.createTextNode(" "), this.$ellipsis = t('<span class="clamp-ellipsis">\u2026</span>'), this.$element.append(n, this.$ellipsis), this.$element.data(u, this), this.$element.attr(p, !0) } return e.clamp = function(n) { var i, o; return h(".clamp", n), i = t(n), o = i.data(u) || new e(i), o.clamp() }, e.reclampAll = function(n) { var i, o, r, s, a; for ((null == n || null != n.currentTarget) && (n = document), i = t(n), a = i.find("[" + p + "]"), r = 0, s = a.length; s > r; r++) o = a[r], e.clamp(o); return m(), i }, e.prototype.clamp = function() { return N("query", function(t) { return function() { return t._updateEllipsisSize(), t._updateElementAt(), t._unchanged() ? h("unchanged", t.$element) : t._clampThis() } }(this)) }, e.prototype._updateEllipsisSize = function() { return x(this.$ellipsis) }, e.prototype._updateElementAt = function() { return this.elementAt = y(this.$element) }, e.prototype._storeDistance = function() { var t; return t = this._distanceToBottomRight(), h("storing distance", t), this.$ellipsis.data(o, t) }, e.prototype._clampThis = function() { return T("_clampThis", this.$element), this._clampNode(this.$element.get(0), function(t) { return function(e) { return t._storeDistance(), N("layout", function() { return t.$ellipsis.toggleClass("is-not-required", e), t.$element.trigger(r) }) } }(this)) }, e.prototype._getEllipsisAt = function() { return v(this.$ellipsis) }, e.prototype._distanceToBottomRight = function() { var t; return t = this._getEllipsisAt(), [this.elementAt.right - t.right, this.elementAt.bottom - t.bottom] }, e.prototype._unchanged = function() { var t, e, n, i, r, s; return s = this.$ellipsis.data(o), null != s ? (t = s[0], n = s[1], r = this._distanceToBottomRight(), e = r[0], i = r[1], h("_unchanged: %o == %o && %o == %o", t, e, n, i), t === e && n === i) : !1 }, e.prototype._checkFit = function(t) { return N("query", function(e) { return function() { var n, i; return i = e._getEllipsisAt(), n = i.bottom <= e.elementAt.bottom && i.right <= e.elementAt.right, h("checkFit: %o (bottom: %o <= %o, right: %o <= %o)", n, i.bottom, e.elementAt.bottom, i.right, e.elementAt.right), t(n) } }(this)) }, e.prototype._clampNode = function(e, n, i) { var o, r; return null == i && (i = !0), o = function(t) { return function(i, s, a) { return N("query", function() { var u, l, p; return h("findBestFit #contents: %o, nodeName: %o, prefix: %o", i, e.nodeName, s), 0 === i.length ? n(a) : 1 === i.length ? r ? (e.nodeValue = s + i[0], t._checkFit(function(t) { return N("layout", function(i) { return function() { return t ? n(a) : (e.nodeValue = s.replace(RegExp(" $"), ""), n(!1)) } }(this)) })) : t._clampNode(i[0], n, a) : (l = Math.floor(i.length / 2), u = i.slice(0, l), p = i.slice(l), h("findBestFit head: %o, tail: %o", u, p), r ? e.nodeValue = s + u.join(" ") : (I(u), A(p)), t._checkFit(function(t) { return N("layout", function(n) { return function() { return t ? (h("fits"), r ? o(p, e.nodeValue + " ", a) : o(p, "", a)) : (h("wont fit"), o(u, s, !1)) } }(this)) })) }) } }(this), r = "#text" === e.nodeName, N("layout", function(n) { return function() { var s, a; return r ? ($(e), o(_(e), "", i)) : "#comment" !== e.nodeName ? (s = t(e), I([s]), a = f(s), s.is(n.$element) && (a = a.slice(0, -2)), o(a, "", i)) : void 0 } }(this)) }, e }(), w = { layout: [], query: [] }, N = function(t, e) { return w[t].push(e) }, d = function(t) { var e, n; if (n = w[t], 0 === n.length) return !0; for (h("draining", t); e = n.shift();) e(); return !1 }, m = function() { var t, e, n; for (n = []; !t || !e;) t = d("layout"), n.push(e = d("query")); return n }, h = function() { var t, e; return t = 1 <= arguments.length ? F.call(arguments, 0) : [], n && null != (e = window.console) && "function" == typeof e.debug ? e.debug.apply(e, t) : void 0 }, T = function() { var t, e; return t = 1 <= arguments.length ? F.call(arguments, 0) : [], l && null != (e = window.console) && "function" == typeof e.log ? e.log.apply(e, t) : void 0 }, x = function(t) { var e, n; return e = t.height(), n = t.width(), t.data(i, [n, e]), h("storeDimensions", n, e), [n, e] }, b = function(t) { return t.data(i) }, v = function(t) { var e, n, i, o; return i = b(t) || [t.width(), t.height()], o = i[0], e = i[1], n = { top: t.prop("offsetTop"), left: t.prop("offsetLeft") }, null == n.bottom && (n.bottom = n.top + e), null == n.right && (n.right = n.left + o), h("getPosition of %o: %o", t, n), n }, y = function(t) { var e, n, i, o, r, s, a; return e = "border-box" === t.css("box-sizing"), s = t.prop("offsetTop"), o = t.prop("offsetLeft"), i = parseInt(t.css("max-height")) || parseInt(t.css("height")), a = parseInt(t.css("max-width")) || parseInt(t.css("width")), e && (r = { top: parseInt(t.css("padding-top")) || 0, left: parseInt(t.css("padding-left")) || 0, right: parseInt(t.css("padding-right")) || 0, bottom: parseInt(t.css("padding-bottom")) || 0 }, n = { top: parseInt(t.css("border-top-width")) || 0, left: parseInt(t.css("border-left-width")) || 0, right: parseInt(t.css("border-right-width")) || 0, bottom: parseInt(t.css("border-bottom-width")) || 0 }, s += r.top + n.top, o += r.left + n.left, a -= r.left + r.right + n.left + n.right, i -= r.top + r.bottom + n.top + n.bottom), { top: s, left: o, right: o + a, bottom: s + i, width: a, height: i } }, g = function(e) { var n, i, o, r; return n = t(e.parentNode), o = n.data(s) || [], r = n.data(a) || [], i = t.inArray(e, o), [o, r, i, n] }, E = function(t, e) { var n, i, o, r, u; return r = g(t), o = r[0], u = r[1], i = r[2], n = r[3], 0 > i && (i = o.length), o[i] = t, u[i] = e, n.data(s, o), n.data(a, u), e }, _ = function(t) { var e, n, i, o, r; return o = g(t), i = o[0], r = o[1], n = o[2], e = o[3], r[n] }, $ = function(t) { return null == _(t) && E(t, t.nodeValue.split(/[ \t\r\n]+/)), t }, f = function(e) { return t.makeArray(e.get(0).childNodes) }, A = function(e) { var n, i, o, r; for (r = [], n = 0, i = e.length; i > n; n++) o = e[n], "#text" === o.nodeName ? ($(o), r.push(o.nodeValue = "")) : r.push(t(o).addClass("clamp-hidden")); return r }, I = function(e) { var n, i, o, r, s; for (s = [], i = 0, o = e.length; o > i; i++) r = e[i], "#text" === r.nodeName ? ($(r), s.push(r.nodeValue = _(r).join(" "))) : (n = t(r), n.removeClass("clamp-hidden"), s.push(I(f(n)))); return s } }).call(this);