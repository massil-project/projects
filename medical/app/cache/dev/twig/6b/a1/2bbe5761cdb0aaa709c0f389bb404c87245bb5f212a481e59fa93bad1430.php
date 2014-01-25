<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_6ba12bbe5761cdb0aaa709c0f389bb404c87245bb5f212a481e59fa93bad1430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  75 => 28,  70 => 26,  66 => 25,  42 => 12,  32 => 6,  24 => 2,  19 => 1,  249 => 110,  245 => 109,  240 => 108,  237 => 107,  232 => 100,  227 => 92,  219 => 93,  216 => 92,  205 => 84,  195 => 77,  188 => 73,  181 => 69,  173 => 64,  168 => 62,  157 => 54,  152 => 52,  142 => 45,  137 => 43,  133 => 42,  123 => 35,  112 => 26,  109 => 25,  103 => 18,  98 => 17,  95 => 16,  90 => 13,  83 => 30,  80 => 9,  72 => 107,  62 => 24,  56 => 25,  49 => 20,  47 => 16,  41 => 13,  38 => 12,  36 => 9,  26 => 3,  77 => 14,  74 => 112,  69 => 15,  67 => 13,  55 => 9,  50 => 15,  46 => 14,  43 => 6,  40 => 5,  33 => 3,  30 => 5,  87 => 30,  82 => 28,  79 => 29,  73 => 23,  71 => 22,  64 => 101,  61 => 17,  58 => 98,  53 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,);
    }
}
