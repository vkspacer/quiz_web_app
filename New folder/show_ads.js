(function() {
	var n = this,
		aa = function(a, b, e) {
			return a.call.apply(a.bind, arguments)
		}, ba = function(a, b, e) {
			if (!a) throw Error();
			if (2 < arguments.length) {
				var d = Array.prototype.slice.call(arguments, 2);
				return function() {
					var e = Array.prototype.slice.call(arguments);
					Array.prototype.unshift.apply(e, d);
					return a.apply(b, e)
				}
			}
			return function() {
				return a.apply(b, arguments)
			}
		}, p = function(a, b, e) {
			p = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? aa : ba;
			return p.apply(null, arguments)
		}, ca = function(a,
			b) {
			var e = Array.prototype.slice.call(arguments, 1);
			return function() {
				var b = e.slice();
				b.push.apply(b, arguments);
				return a.apply(this, b)
			}
		};
	var v = (new Date).getTime();
	var w = function(a) {
		a = parseFloat(a);
		return isNaN(a) || 1 < a || 0 > a ? 0 : a
	}, da = /^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,
		ea = function(a, b) {
			if (!a) return b;
			var e = a.match(da);
			return e ? e[0] : b
		};
	var fa = w("0.15"),
		ga = w("0.001"),
		ha = w("1.0"),
		ia = w("0.05"),
		ja = w("0.001"),
		ka = w("0.0"),
		la = w("0.001"),
		ma = w("0.2");
	var na = /^true$/.test("false") ? !0 : !1,
		oa = /^true$/.test("false") ? !0 : !1;
	var pa = /&/g,
		qa = /</g,
		ra = />/g,
		sa = /"/g,
		ta = /'/g,
		x = {
			"\x00": "\\0",
			"\b": "\\b",
			"\f": "\\f",
			"\n": "\\n",
			"\r": "\\r",
			"\t": "\\t",
			"\x0B": "\\x0B",
			'"': '\\"',
			"\\": "\\\\"
		}, y = {
			"'": "\\'"
		};
	var B = document,
		C = window,
		D, ua = null,
		E = B.getElementsByTagName("script");
	E && E.length && (ua = E[E.length - 1]);
	D = ua;
	var G = function(a, b) {
		for (var e in a) Object.prototype.hasOwnProperty.call(a, e) && b.call(null, a[e], e, a)
	}, H = function(a) {
			return !!a && "function" == typeof a && !! a.call
		}, va = function(a, b) {
			if (!(2 > arguments.length))
				for (var e = 1, d = arguments.length; e < d; ++e) a.push(arguments[e])
		};

	function wa(a, b) {
		I(a, "load", b)
	}
	var I = function(a, b, e, d) {
		return a.addEventListener ? (a.addEventListener(b, e, d || !1), !0) : a.attachEvent ? (a.attachEvent("on" + b, e), !0) : !1
	}, J = function(a, b, e, d) {
			e = p(d, e);
			return I(a, b, e, void 0) ? e : null
		}, K = function(a, b, e) {
			a.removeEventListener ? a.removeEventListener(b, e, !1) : a.detachEvent && a.detachEvent("on" + b, e)
		}, xa = function() {
			var a = window;
			"google_onload_fired" in a || (a.google_onload_fired = !1, wa(a, function() {
				a.google_onload_fired = !0
			}))
		}, L = function(a, b) {
			if (!(1E-4 > Math.random())) {
				var e = Math.random();
				if (e < b) {
					try {
						var d =
							new Uint16Array(1);
						window.crypto.getRandomValues(d);
						e = d[0] / 65536
					} catch (c) {
						e = Math.random()
					}
					return a[Math.floor(e * a.length)]
				}
			}
			return null
		}, ya = function(a) {
			for (var b = [], e = 0; a && 25 > e; ++e) {
				var d = 9 != a.nodeType && a.id,
					d = d ? "/" + d : "",
					c;
				o: {
					var f = a.parentElement;
					c = a.nodeName.toLowerCase();
					if (f)
						for (var f = f.childNodes, h = 0, m = 0; m < f.length; ++m) {
							var g = f[m];
							if (g.nodeName && g.nodeName.toLowerCase() == c) {
								if (a == g) {
									c = "." + h;
									break o
								}++h
							}
						}
					c = ""
				}
				b.push((a.nodeName && a.nodeName.toLowerCase()) + d + c);
				a = a.parentElement
			}
			return b.join()
		},
		za = function() {
			var a = C,
				b = [];
			if (a) try {
				for (var e = a.parent, d = 0; e && e != a && 25 > d; ++d) {
					for (var c = e.frames, f = 0; f < c.length; ++f)
						if (a == c[f]) {
							b.push(f);
							break
						}
					a = e;
					e = a.parent
				}
			} catch (h) {}
			return b.join()
		}, Aa = function(a, b, e) {
			b = [b.google_ad_slot, b.google_ad_format, b.google_ad_type, b.google_ad_width, b.google_ad_height];
			if (e) {
				e = [];
				for (var d = 0; a && 25 > d; a = a.parentNode, ++d) e.push(9 != a.nodeType && a.id || "");
				(a = e.join()) && b.push(a)
			} else b.push(ya(a)), b.push(za());
			b = b.join(":");
			a = b.length;
			if (0 == a) b = 0;
			else {
				e = 305419896;
				for (d = 0; d <
					a; d++) e ^= (e << 5) + (e >> 2) + b.charCodeAt(d) & 4294967295;
				b = 0 < e ? e : 4294967296 + e
			}
			return b.toString()
		}, M = function(a) {
			try {
				return !!a.location.href || "" === a.location.href
			} catch (b) {
				return !1
			}
		};
	var Ba = /MSIE [2-7]|PlayStation|Gecko\/20090226|Android 2\.|Opera/i,
		Ca = /Android/;
	var N = null,
		Da = function() {
			if (!N) {
				for (var a = window, b = a, e = 0; a != a.parent;)
					if (a = a.parent, e++, M(a)) b = a;
					else break;
				N = b
			}
			return N
		};
	var Ea = function(a, b, e) {
		e || (e = oa ? "https" : "http");
		return [e, "://", a, b].join("")
	};
	var Fa = function() {}, O = function(a, b, e) {
			switch (typeof b) {
				case "string":
					Ga(b, e);
					break;
				case "number":
					e.push(isFinite(b) && !isNaN(b) ? b : "null");
					break;
				case "boolean":
					e.push(b);
					break;
				case "undefined":
					e.push("null");
					break;
				case "object":
					if (null == b) {
						e.push("null");
						break
					}
					if (b instanceof Array) {
						var d = b.length;
						e.push("[");
						for (var c = "", f = 0; f < d; f++) e.push(c), O(a, b[f], e), c = ",";
						e.push("]");
						break
					}
					e.push("{");
					d = "";
					for (c in b) b.hasOwnProperty(c) && (f = b[c], "function" != typeof f && (e.push(d), Ga(c, e), e.push(":"), O(a, f, e), d =
						","));
					e.push("}");
					break;
				case "function":
					break;
				default:
					throw Error("Unknown type: " + typeof b);
			}
		}, P = {
			'"': '\\"',
			"\\": "\\\\",
			"/": "\\/",
			"\b": "\\b",
			"\f": "\\f",
			"\n": "\\n",
			"\r": "\\r",
			"\t": "\\t",
			"\x0B": "\\u000b"
		}, Ha = /\uffff/.test("\uffff") ? /[\\\"\x00-\x1f\x7f-\uffff]/g : /[\\\"\x00-\x1f\x7f-\xff]/g,
		Ga = function(a, b) {
			b.push('"');
			b.push(a.replace(Ha, function(a) {
				if (a in P) return P[a];
				var b = a.charCodeAt(0),
					c = "\\u";
				16 > b ? c += "000" : 256 > b ? c += "00" : 4096 > b && (c += "0");
				return P[a] = c + b.toString(16)
			}));
			b.push('"')
		};
	var Q = "google_ad_block google_ad_channel google_ad_client google_ad_format google_ad_height google_ad_host google_ad_host_channel google_ad_host_tier_id google_ad_output google_ad_override google_ad_region google_ad_section google_ad_slot google_ad_type google_ad_unit_key google_ad_unit_key_2 google_ad_width google_adtest google_allow_expandable_ads google_alternate_ad_url google_alternate_color google_analytics_domain_name google_analytics_uacct google_bid google_captcha_token google_city google_color_bg google_color_border google_color_line google_color_link google_color_text google_color_url google_container_id google_contents google_country google_cpm google_ctr_threshold google_cust_age google_cust_ch google_cust_criteria google_cust_gender google_cust_id google_cust_interests google_cust_job google_cust_l google_cust_lh google_cust_u_url google_disable_video_autoplay google_ed google_eids google_enable_ose google_enable_ose_periscope google_encoding google_floating_ad_position google_font_face google_font_size google_frame_id google_gl google_hints google_image_size google_kw google_kw_type google_lact google_language google_loeid google_max_num_ads google_max_radlink_len google_mtl google_num_radlinks google_num_radlinks_per_unit google_only_ads_with_video google_only_pyv_ads google_only_userchoice_ads google_override_format google_page_url google_previous_watch google_previous_searches google_referrer_url google_region google_reuse_colors google_rl_dest_url google_rl_filtering google_rl_mode google_rt google_safe google_sc_id google_scs google_sui google_skip google_tag_for_child_directed_treatment google_tag_info google_targeting google_tdsma google_tfs google_tl google_ui_features google_ui_version google_video_doc_id google_video_product_type google_video_url_to_fetch google_with_pyv_ads google_yt_pt google_yt_up".split(" "),
		Ia = {
			google_analytics_domain_name: !0,
			google_analytics_uacct: !0
		}, Ja = function(a) {
			a.google_page_url && (a.google_page_url = String(a.google_page_url));
			var b = [];
			G(a, function(a, d) {
				if (null != a) {
					var c;
					try {
						var f = [];
						O(new Fa, a, f);
						c = f.join("")
					} catch (h) {}
					c && va(b, d, "=", c, ";")
				}
			});
			return b.join("")
		};
	var Ka = /\.((google(|groups|mail|images|print))|gmail)\./,
		La = function(a) {
			try {
				var b = Ka.test(a.location.host);
				return !(!a.postMessage || !a.localStorage || !a.JSON || b)
			} catch (e) {
				return !1
			}
		};
	var R = function(a) {
		this.b = a;
		a.google_iframe_oncopy || (a.google_iframe_oncopy = {
			handlers: {},
			upd: p(this.n, this)
		});
		this.l = a.google_iframe_oncopy
	}, Ma;
	var S = "var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&&d&&(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}";
	/[&<>"']/.test(S) && (-1 != S.indexOf("&") && (S = S.replace(pa, "&amp;")), -1 != S.indexOf("<") && (S = S.replace(qa, "&lt;")), -1 != S.indexOf(">") && (S = S.replace(ra, "&gt;")), -1 != S.indexOf('"') && (S = S.replace(sa, "&quot;")), -1 != S.indexOf("'") && (S = S.replace(ta, "&#39;")));
	Ma = S;
	R.prototype.set = function(a, b) {
		this.l.handlers[a] = b;
		this.b.addEventListener && this.b.addEventListener("load", p(this.m, this, a), !1)
	};
	R.prototype.m = function(a) {
		a = this.b.document.getElementById(a);
		var b = a.contentWindow.document;
		if (a.onload && b && (!b.body || !b.body.firstChild)) a.onload()
	};
	R.prototype.n = function(a, b) {
		var e = Na("rx", a),
			d;
		o: {
			if (a && (d = a.match("dt=([^&]+)")) && 2 == d.length) {
				d = d[1];
				break o
			}
			d = ""
		}
		d = (new Date).getTime() - d;
		e = e.replace(/&dtd=(\d+|M)/, "&dtd=" + (1E4 > d ? d + "" : "M"));
		this.set(b, e);
		return e
	};
	var Na = function(a, b) {
		var e = RegExp("\\b" + a + "=(\\d+)"),
			d = e.exec(b);
		d && (b = b.replace(e, a + "=" + (+d[1] + 1 || 1)));
		return b
	};
	var T, U, V, Oa, Pa = function() {
			return n.navigator ? n.navigator.userAgent : null
		};
	Oa = V = U = T = !1;
	var W;
	if (W = Pa()) {
		var Qa = n.navigator;
		T = 0 == W.lastIndexOf("Opera", 0);
		U = !T && (-1 != W.indexOf("MSIE") || -1 != W.indexOf("Trident"));
		V = !T && -1 != W.indexOf("WebKit");
		Oa = !T && !V && !U && "Gecko" == Qa.product
	}
	var Ra = U,
		Sa = Oa,
		Ta = V;
	var X;
	if (T && n.opera) {
		var Ua = n.opera.version;
		"function" == typeof Ua && Ua()
	} else Sa ? X = /rv\:([^\);]+)(\)|;)/ : Ra ? X = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/ : Ta && (X = /WebKit\/(\S+)/), X && X.exec(Pa());
	var Va = !0,
		Wa = {}, Ya = function(a, b, e, d) {
			var c, f = Va;
			try {
				c = e()
			} catch (h) {
				try {
					var m = h.toString();
					h.name && -1 == m.indexOf(h.name) && (m += ": " + h.name);
					h.message && -1 == m.indexOf(h.message) && (m += ": " + h.message);
					if (h.stack) {
						var g = h.stack;
						e = m;
						try {
							-1 == g.indexOf(e) && (g = e + "\n" + g);
							for (var k; g != k;) k = g, g = g.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/, "$1");
							m = g.replace(/\n */g, "\n")
						} catch (l) {
							m = e
						}
					}
					g = "";
					h.fileName && (g = h.fileName);
					k = -1;
					h.lineNumber && (k = h.lineNumber);
					var q;
					o: {
						try {
							q = d ? d() : "";
							break o
						} catch (F) {}
						q = ""
					}
					f = b(a,
						m, g, k, q)
				} catch (t) {
					Xa({
						context: "protectAndRun",
						msg: t.toString() + "\n" + (t.stack || "")
					})
				}
				if (!f) throw h;
			}
			return c
		}, $a = function(a, b, e, d, c) {
			a = {
				context: a,
				msg: b.substring(0, 512),
				eid: c && c.substring(0, 40),
				file: e,
				line: d.toString(),
				url: B.URL.substring(0, 512),
				ref: B.referrer.substring(0, 512)
			};
			Za(a);
			Xa(a);
			return Va
		}, Xa = function(a) {
			if (0.01 > Math.random()) {
				a = "/pagead/gen_204?id=jserror" + ab(a);
				a = "http" + ("https:" == C.location.protocol ? "s" : "") + "://pagead2.googlesyndication.com" + a;
				a = a.substring(0, 2E3);
				C.google_image_requests ||
					(C.google_image_requests = []);
				var b = C.document.createElement("img");
				b.src = a;
				C.google_image_requests.push(b)
			}
		}, Za = function(a) {
			var b = a || {};
			G(Wa, function(a, d) {
				b[d] = C[a]
			})
		}, bb = function(a, b) {
			return ca(Ya, a, $a, b, void 0)
		}, ab = function(a) {
			var b = "";
			G(a, function(a, d) {
				if (0 === a || a) b += "&" + d + "=" + ("function" == typeof encodeURIComponent ? encodeURIComponent(a) : escape(a))
			});
			return b
		};
	var Y, Z = function(a) {
			this.c = [];
			this.b = a || window;
			this.a = 0;
			this.d = null
		}, cb = function(a, b) {
			this.k = a;
			this.win = b
		};
	Z.prototype.p = function(a, b) {
		0 != this.a || 0 != this.c.length || b && b != window ? this.g(a, b) : (this.a = 2, this.f(new cb(a, window)))
	};
	Z.prototype.g = function(a, b) {
		this.c.push(new cb(a, b || this.b));
		db(this)
	};
	Z.prototype.q = function(a) {
		this.a = 1;
		if (a) {
			var b = bb("sjr::timeout", p(this.e, this));
			this.d = this.b.setTimeout(b, a)
		}
	};
	Z.prototype.e = function() {
		1 == this.a && (null != this.d && (this.b.clearTimeout(this.d), this.d = null), this.a = 0);
		db(this)
	};
	Z.prototype.r = function() {
		return !(!window || !Array)
	};
	Z.prototype.nq = Z.prototype.p;
	Z.prototype.nqa = Z.prototype.g;
	Z.prototype.al = Z.prototype.q;
	Z.prototype.rl = Z.prototype.e;
	Z.prototype.sz = Z.prototype.r;
	var db = function(a) {
		var b = bb("sjr::tryrun", p(a.o, a));
		a.b.setTimeout(b, 0)
	};
	Z.prototype.o = function() {
		if (0 == this.a && this.c.length) {
			var a = this.c.shift();
			this.a = 2;
			var b = bb("sjr::run", p(this.f, this, a));
			a.win.setTimeout(b, 0);
			db(this)
		}
	};
	Z.prototype.f = function(a) {
		this.a = 0;
		a.k()
	};
	var eb = function(a) {
		try {
			return a.sz()
		} catch (b) {
			return !1
		}
	}, fb = function(a) {
			return !!a && ("object" == typeof a || "function" == typeof a) && eb(a) && H(a.nq) && H(a.nqa) && H(a.al) && H(a.rl)
		}, gb = function() {
			if (Y && eb(Y)) return Y;
			var a = Da(),
				b = a.google_jobrunner;
			return fb(b) ? Y = b : a.google_jobrunner = Y = new Z(a)
		}, hb = function(a, b) {
			gb().nq(a, b)
		}, ib = function(a, b) {
			gb().nqa(a, b)
		};
	var jb = {
		"120x90": !0,
		"160x90": !0,
		"180x90": !0,
		"200x90": !0,
		"468x15": !0,
		"728x15": !0
	}, kb = function() {
			var a = "script";
			return ["<", a, ' src="', Ea(ea("", "pagead2.googlesyndication.com"), "/pagead/js/r20140116/r20140107/show_ads_impl.js", ""), '"></', a, ">"].join("")
		}, lb = function(a, b, e, d) {
			return function() {
				var c = !1;
				d && gb().al(3E4);
				try {
					if (M(a.document.getElementById(b).contentWindow)) {
						var f =
							a.document.getElementById(b).contentWindow,
							h = f.document;
						h.body && h.body.firstChild || (h.open(), f.google_async_iframe_close = !0, h.write(e))
					} else {
						var m = a.document.getElementById(b).contentWindow,
							g;
						f = e;
						f = String(f);
						if (f.quote) g = f.quote();
						else {
							for (var h = ['"'], k = 0; k < f.length; k++) {
								var l = f.charAt(k),
									q = l.charCodeAt(0),
									F = h,
									t = k + 1,
									z;
								if (!(z = x[l])) {
									var r;
									if (31 < q && 127 > q) r = l;
									else {
										var u = l;
										if (u in y) r = y[u];
										else if (u in x) r = y[u] = x[u];
										else {
											var s = u,
												A = u.charCodeAt(0);
											if (31 < A && 127 > A) s = u;
											else {
												if (256 > A) {
													if (s = "\\x", 16 > A || 256 <
														A) s += "0"
												} else s = "\\u", 4096 > A && (s += "0");
												s += A.toString(16).toUpperCase()
											}
											r = y[u] = s
										}
									}
									z = r
								}
								F[t] = z
							}
							h.push('"');
							g = h.join("")
						}
						m.location.replace("javascript:" + g)
					}
					c = !0
				} catch (vb) {
					m = Da().google_jobrunner, fb(m) && m.rl()
				}
				c && (c = Na("google_async_rrc", e), (new R(a)).set(b, lb(a, b, c, !1)))
			}
		}, mb = function(a) {
			var b = ["<iframe"];
			G(a, function(a, d) {
				null != a && b.push(" " + d + '="' + a + '"')
			});
			b.push("></iframe>");
			return b.join("")
		}, nb = function(a, b, e, d) {
			d = d ? '"' : "";
			var c = d + "0" + d;
			a.width = d + b + d;
			a.height = d + e + d;
			a.frameborder = c;
			a.marginwidth =
				c;
			a.marginheight = c;
			a.vspace = c;
			a.hspace = c;
			a.allowtransparency = d + "true" + d;
			a.scrolling = d + "no" + d
		}, ob = function(a, b, e) {
			var d = b.google_ad_output,
				c = b.google_ad_format;
			c || "html" != d && null != d || (c = b.google_ad_width + "x" + b.google_ad_height, e && (c += "_as"));
			e = !b.google_ad_slot || b.google_override_format || !jb[b.google_ad_width + "x" + b.google_ad_height] && "aa" == b.google_loader_used;
			c = c && e ? c.toLowerCase() : "";
			b.google_ad_format = c;
			b.google_ad_unit_key = Aa(D.parentElement, b, !0);
			a = a.google_adk2_experiment = a.google_adk2_experiment ||
				L(["C", "E"], la) || "N";
			"E" == a ? b.google_ad_unit_key_2 = Aa(D, b) : "C" == a && (b.google_ad_unit_key_2 = "ctrl")
		}, pb = Math.floor(1E6 * Math.random()),
		qb = function(a) {
			for (var b = a.data.split("\n"), e = {}, d = 0; d < b.length; d++) {
				var c = b[d].indexOf("="); - 1 != c && (e[b[d].substr(0, c)] = b[d].substr(c + 1))
			}
			b = e[3];
			if (e[1] == pb && (window.google_top_js_status = 4, a.source == top && 0 == b.indexOf(a.origin) && (window.google_top_values = e, window.google_top_js_status = 5), window.google_top_js_callbacks)) {
				for (a = 0; a < window.google_top_js_callbacks.length; a++) window.google_top_js_callbacks[a]();
				window.google_top_js_callbacks.length = 0
			}
		};
	var rb = function(a, b, e) {
		this.x = a;
		this.y = b;
		this.z = e
	}, sb = function(a, b, e) {
			this.beta = a;
			this.gamma = b;
			this.alpha = e
		}, tb = function(a, b) {
			this.deviceAccelerationWithGravity = this.deviceAccelerationWithoutGravity = null;
			this.deviceMotionEventCallbacks = [];
			this.deviceOrientation = null;
			this.deviceOrientationEventCallbacks = [];
			this.isDeviceOrientationEventListenerRegistered = this.isDeviceMotionEventListenerRegistered = this.didDeviceOrientationCallbacksTimeoutExpire = this.didDeviceMotionCallbacksTimeoutExpire = !1;
			this.registeredMozOrientationEventListener =
				this.registeredDeviceOrientationEventListener = this.registeredDeviceMotionEventListener = null;
			this.sensorsExperiment = b;
			this.stopTimeStamp = this.startTimeStamp = null;
			this.win = a
		}, $ = function(a) {
			this.a = a;
			this.a.win.DeviceOrientationEvent ? (this.a.registeredDeviceOrientationEventListener = J(this.a.win, "deviceorientation", this, this.i), this.a.isDeviceOrientationEventListenerRegistered = !0) : this.a.win.OrientationEvent && (this.a.registeredMozOrientationEventListener = J(this.a.win, "MozOrientation", this, this.j), this.a.isDeviceOrientationEventListenerRegistered = !0);
			this.a.win.DeviceMotionEvent && (this.a.registeredDeviceMotionEventListener = J(this.a.win, "devicemotion", this, this.h), this.a.isDeviceMotionEventListenerRegistered = !0)
		};
	$.prototype.h = function(a) {
		a.acceleration && (this.a.deviceAccelerationWithoutGravity = new rb(a.acceleration.x, a.acceleration.y, a.acceleration.z));
		a.accelerationIncludingGravity && (this.a.deviceAccelerationWithGravity = new rb(a.accelerationIncludingGravity.x, a.accelerationIncludingGravity.y, a.accelerationIncludingGravity.z));
		ub(this.a.deviceMotionEventCallbacks);
		K(this.a.win, "devicemotion", this.a.registeredDeviceMotionEventListener)
	};
	$.prototype.i = function(a) {
		this.a.deviceOrientation = new sb(a.beta, a.gamma, a.alpha);
		ub(this.a.deviceOrientationEventCallbacks);
		K(this.a.win, "deviceorientation", this.a.registeredDeviceOrientationEventListener)
	};
	$.prototype.j = function(a) {
		this.a.deviceOrientation = new sb(-90 * a.y, 90 * a.x, null);
		ub(this.a.deviceOrientationEventCallbacks);
		K(this.a.win, "MozOrientation", this.a.registeredMozOrientationEventListener)
	};
	var ub = function(a) {
		for (var b = 0; b < a.length; ++b) a[b]();
		a.length = 0
	};
	Va = !na;
	Wa = {
		client: "google_ad_client",
		format: "google_ad_format",
		slotname: "google_ad_slot",
		output: "google_ad_output",
		ad_type: "google_ad_type",
		async_oa: "google_async_for_oa_experiment",
		zrtm: "google_ad_handling_mode",
		dimpr: "google_always_use_delayed_impressions_experiment",
		peri: "google_top_experiment"
	};
	Ya("sa::main", $a, function() {
		xa();
		if (!window.google_top_experiment && !window.google_top_js_status) {
			var a = window;
			if (2 !== (a.top == a ? 0 : M(a.top) ? 1 : 2)) window.google_top_js_status = 0;
			else if (top.postMessage) {
				var b;
				try {
					b = C.top.frames.google_top_static_frame ? !0 : !1
				} catch (e) {
					b = !1
				}
				if (b) {
					if (window.google_top_experiment = L(["jp_c", "jp_zl", "jp_wfpmr"], fa), "jp_c" !== window.google_top_experiment) {
						I(window, "message", qb);
						window.google_top_js_status = 3;
						a = {
							0: "google_loc_request",
							1: pb
						};
						b = [];
						for (var d in a) b.push(d + "=" + a[d]);
						top.postMessage(b.join("\n"), "*")
					}
				} else window.google_top_js_status = 2
			} else window.google_top_js_status = 1
		}
		var c;
		c = c || window;
		d = !1;
		c && c.navigator && c.navigator.userAgent && (c = c.navigator.userAgent, d = 0 != c.indexOf("Opera") && -1 != c.indexOf("WebKit") && -1 != c.indexOf("Mobile"));
		if (d) {
			c = window;
			if (d = !/Android/.test(c.navigator.userAgent)) d = c.google_unique_id, d = 0 == ("number" == typeof d ? d : 0) && !c.google_sensors;
			d && (d = null, c.google_top_experiment && "jp_c" != c.google_top_experiment || (d = L(["ds_c", "ds_zl", "ds_wfea"], ka)),
				d && (c.google_sensors = new tb(c, d), "ds_c" != d && new $(c.google_sensors)))
		}
		c = window.google_ad_output;
		void 0 !== window.google_always_use_delayed_impressions_experiment || c && "html" != c || (window.google_always_use_delayed_impressions_experiment = L(["C", "E"], ja));
		(c = !1 === window.google_enable_async) || (c = navigator.userAgent, Ba.test(c) ? c = !1 : (void 0 !== window.google_async_for_oa_experiment || !Ca.test(navigator.userAgent) || Ba.test(navigator.userAgent) || (window.google_async_for_oa_experiment = L(["E", "C"], ia)), c = Ca.test(c) ?
			"E" === window.google_async_for_oa_experiment : !0), c = !c || window.google_container_id || window.google_ad_output && "html" != window.google_ad_output);
		if (c) window.google_loader_used = "sb", window.google_start_time = v, ob(window, window), document.write(kb());
		else {
			c = window;
			c.google_unique_id ? ++c.google_unique_id : c.google_unique_id = 1;
			c = window;
			d = {};
			a = 0;
			for (b = Q.length; a < b; a++) {
				var f = Q[a];
				null != c[f] && (d[f] = c[f])
			}
			d.google_loader_used = "sa";
			a = 0;
			for (b = Q.length; a < b; a++) f = Q[a], Ia[f] || (c[f] = null);
			a = d.google_ad_width;
			b = d.google_ad_height;
			f = {};
			nb(f, a, b, !0);
			f.onload = '"' + Ma + '"';
			for (var h, m = c.document, g = f.id, k = 0; !g || m.getElementById(g);) g = "aswift_" + k++;
			f.id = g;
			f.name = g;
			var k = d.google_ad_width,
				l = d.google_ad_height,
				g = ["<iframe"];
			for (h in f) f.hasOwnProperty(h) && va(g, h + "=" + f[h]);
			g.push('style="left:0;position:absolute;top:0;"');
			g.push("></iframe>");
			h = "border:none;height:" + l + "px;margin:0;padding:0;position:relative;visibility:visible;width:" + k + "px;background-color:transparent";
			m.write(['<ins style="display:inline-table;', h, '"><ins id="', f.id +
				"_anchor", '" style="display:block;', h, '">', g.join(" "), "</ins></ins>"
			].join(""));
			h = f.id;
			f = d.google_override_format || !jb[d.google_ad_width + "x" + d.google_ad_height] && "aa" == d.google_loader_used ? L(["c", "e"], ma) : null;
			ob(c, d, "e" == f);
			m = Ja(d);
			g = La(c);
			k = c.document;
			k = 3 == ({
				visible: 1,
				hidden: 2,
				prerender: 3,
				preview: 4
			}[k.webkitVisibilityState || k.mozVisibilityState || k.visibilityState || ""] || 0);
			!g || k || void 0 !== c.google_ad_handling_mode || c.google_async_for_oa_experiment || (c.google_ad_handling_mode = L(["XN", "AZ", "S"], ga) ||
				L(["EI"], ha));
			g = c.google_ad_handling_mode ? String(c.google_ad_handling_mode) : null;
			if (La(c) && 1 == c.google_unique_id && "XN" != g && "S" != g) {
				k = "zrt_ads_frame" + c.google_unique_id;
				l = d.google_page_url;
				if (!l) {
					e: {
						var l = c.document,
							q = a || c.google_ad_width,
							F = b || c.google_ad_height;
						if (c.top == c) l = !1;
						else {
							var t = l.documentElement;
							if (q && F) {
								var z = 1,
									r = 1;
								c.innerHeight ? (z = c.innerWidth, r = c.innerHeight) : t && t.clientHeight ? (z = t.clientWidth, r = t.clientHeight) : l.body && (z = l.body.clientWidth, r = l.body.clientHeight);
								if (r > 2 * F || z > 2 * q) {
									l = !1;
									break e
								}
							}
							l = !0
						}
					}
					l = l ? c.document.referrer : c.document.URL
				}
				l = encodeURIComponent(l);
				q = null;
				if ("PC" == g || "EI" == g || "AZ" == g) {
					switch (g) {
						case "EI":
							q = "I";
							break;
						case "AZ":
							q = "Z";
							break;
						default:
							q = "K"
					}
					q = q + "-" + (l + "/" + d.google_ad_unit_key + "/" + c.google_unique_id)
				}
				d = {};
				nb(d, a, b, !1);
				d.style = "display:none";
				a = q;
				d.id = k;
				d.name = k;
				a = Ea(ea("", "googleads.g.doubleclick.net"), ["/pagead/html/r20140116/r20140107/zrt_lookup.html",
					a ? "#" + encodeURIComponent(a) : ""
				].join(""));
				d.src = a;
				d = mb(d)
			} else d = null;
			a = (new Date).getTime();
			b = c.google_top_experiment;
			k = c.google_async_for_oa_experiment;
			l = c.google_always_use_delayed_impressions_experiment;
			d = ["<!doctype html><html><body>", d, "<script>", m, "google_show_ads_impl=true;google_unique_id=", c.google_unique_id, ';google_async_iframe_id="', h, '";google_start_time=', v, ";", b ? 'google_top_experiment="' + b + '";' : "", g ? 'google_ad_handling_mode="' + g + '";' : "", k ? 'google_async_for_oa_experiment="' + k + '";' :
				"", l ? 'google_always_use_delayed_impressions_experiment="' + l + '";' : "", f ? 'google_append_as_for_format_override="' + f + '";' : "", "google_bpp=", a > v ? a - v : 1, ";google_async_rrc=0;\x3c/script>", kb(), "</body></html>"
			].join("");
			(c.document.getElementById(h) ? hb : ib)(lb(c, h, d, !0))
		}
	});
})();