<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_6b9dd55cd2ddef33b6fb8d941c62e6dd841070a8c02b419b86480d29720663c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "
        <title>
        ";
        // line 77
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 97
        echo "        </title>
    </head>
    <body ";
        // line 99
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 103
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 188
        echo "
        ";
        // line 189
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 317
        echo "
        

    </div>
    </body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 34
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 35
                echo "                        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 45
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 52
        if (array_key_exists("admin_pool", $context)) {
            // line 53
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                // line 54
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["javascript"]), "html", null, true);
                echo "\"></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        // line 57
        echo "
            ";
        // line 58
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 61
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . strtr((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 66
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 67
            echo "
                ";
            // line 69
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 70
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . strtr((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 72
            echo "            ";
        }
        // line 73
        echo "
        ";
    }

    // line 77
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 78
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 80
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 81
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 83
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 84
                echo "                    -
                    ";
                // line 85
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 86
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 87
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 88
                            echo "                                &gt;
                            ";
                        }
                        // line 90
                        echo "
                            ";
                        // line 91
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 93
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                ";
            }
            // line 95
            echo "            ";
        }
        // line 96
        echo "        ";
    }

    // line 99
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 103
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 104
        echo "            <header class=\"main-header\">
                ";
        // line 105
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 112
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "            </header>
        ";
    }

    // line 105
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 106
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 112
    public function block_logo($context, array $blocks = array())
    {
        // line 113
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 114
            echo "                        ";
            ob_start();
            // line 115
            echo "                            <a class=\"logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">
                                ";
            // line 116
            if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 117
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 119
            echo "                                ";
            if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 120
                echo "                                    <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "</span>
                                ";
            }
            // line 122
            echo "                            </a>
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 124
            echo "                    ";
        }
        // line 125
        echo "                ";
    }

    // line 126
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 127
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 128
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 134
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 161
            echo "                            </div>

                            ";
            // line 163
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 183
            echo "                        </nav>
                    ";
        }
        // line 185
        echo "                ";
    }

    // line 134
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 135
        echo "                                    <div class=\"hidden-xs\">
                                        ";
        // line 136
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 137
            echo "                                            <ol class=\"nav navbar-top-links breadcrumb\">
                                                ";
            // line 138
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 139
                echo "                                                    ";
                if (array_key_exists("action", $context)) {
                    // line 140
                    echo "                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 141
                        echo "                                                            ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 142
                            echo "                                                                <li>
                                                                    ";
                            // line 143
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 144
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                    ";
                            } else {
                                // line 146
                                echo "                                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                    ";
                            }
                            // line 148
                            echo "                                                                </li>
                                                            ";
                        } else {
                            // line 150
                            echo "                                                                <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                            ";
                        }
                        // line 152
                        echo "                                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "                                                    ";
                }
                // line 154
                echo "                                                ";
            } else {
                // line 155
                echo "                                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                                ";
            }
            // line 157
            echo "                                            </ol>
                                        ";
        }
        // line 159
        echo "                                    </div>
                                ";
    }

    // line 163
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 164
        echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 170
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"))->display($context);
        // line 171
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 177
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"))->display($context);
        // line 178
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 189
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 190
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 222
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 224
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 315
        echo "            </div>
        ";
    }

    // line 190
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 191
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 193
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 219
        echo "                    </section>
                </aside>
            ";
    }

    // line 193
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 194
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 208
        echo "
                            ";
        // line 209
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 210
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 215
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 218
        echo "                        ";
    }

    // line 194
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 195
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 196
            echo "                                    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 207
        echo "                            ";
    }

    // line 209
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 210
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 211
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 212
            echo "                                    ";
            echo $this->env->getExtension('knp_menu')->render($this->env->getExtension('sonata_admin')->getKnpMenu($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())), array("template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 214
        echo "                            ";
    }

    // line 215
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 216
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                            ";
    }

    // line 224
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 225
        echo "                    <section class=\"content-header\">

                        ";
        // line 227
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 275
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 278
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 313
        echo "                    </section>
                ";
    }

    // line 227
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 228
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 274
        echo "                        ";
    }

    // line 228
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 229
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 230
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 232
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 239
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 242
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 243
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 245
            echo "                                                </div>

                                                ";
            // line 247
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 248
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 249
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 250
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "                                                    </div>
                                                ";
            }
            // line 254
            echo "
                                                ";
            // line 255
            if ( !twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 256
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 258
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 260
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 265
            echo "
                                                ";
            // line 266
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 267
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 269
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 273
        echo "                            ";
    }

    // line 232
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 233
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 234
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 235
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 238
        echo "                                            ";
    }

    // line 278
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 279
        echo "
                            ";
        // line 280
        $this->displayBlock('notice', $context, $blocks);
        // line 283
        echo "
                            ";
        // line 284
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 285
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 287
        echo "
                            ";
        // line 288
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 289
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 291
        echo "
                            ";
        // line 292
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 293
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 295
        echo "
                            ";
        // line 296
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 297
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 299
        echo "
                            ";
        // line 300
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 301
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 302
                echo "                                    <div class=\"row\">
                                        ";
                // line 303
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 306
            echo "
                                <div class=\"row\">
                                    ";
            // line 308
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 312
        echo "                        ";
    }

    // line 280
    public function block_notice($context, array $blocks = array())
    {
        // line 281
        echo "                                ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 282
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  952 => 282,  949 => 281,  946 => 280,  942 => 312,  935 => 308,  931 => 306,  925 => 303,  922 => 302,  919 => 301,  917 => 300,  914 => 299,  908 => 297,  906 => 296,  903 => 295,  897 => 293,  895 => 292,  892 => 291,  886 => 289,  884 => 288,  881 => 287,  875 => 285,  873 => 284,  870 => 283,  868 => 280,  865 => 279,  862 => 278,  858 => 238,  852 => 235,  849 => 234,  846 => 233,  843 => 232,  839 => 273,  833 => 269,  827 => 267,  825 => 266,  822 => 265,  814 => 260,  809 => 258,  805 => 256,  803 => 255,  800 => 254,  796 => 252,  781 => 250,  777 => 249,  774 => 248,  772 => 247,  768 => 245,  762 => 243,  760 => 242,  755 => 239,  753 => 232,  749 => 230,  746 => 229,  743 => 228,  739 => 274,  736 => 228,  733 => 227,  728 => 313,  726 => 278,  721 => 275,  719 => 227,  715 => 225,  712 => 224,  707 => 216,  704 => 215,  700 => 214,  694 => 212,  691 => 211,  688 => 210,  682 => 209,  678 => 207,  664 => 198,  658 => 196,  655 => 195,  652 => 194,  648 => 218,  645 => 215,  642 => 210,  640 => 209,  637 => 208,  634 => 194,  631 => 193,  625 => 219,  623 => 193,  619 => 191,  616 => 190,  611 => 315,  609 => 224,  605 => 222,  602 => 190,  599 => 189,  591 => 178,  589 => 177,  581 => 171,  579 => 170,  571 => 164,  568 => 163,  563 => 159,  559 => 157,  553 => 155,  550 => 154,  547 => 153,  533 => 152,  527 => 150,  523 => 148,  517 => 146,  509 => 144,  507 => 143,  504 => 142,  501 => 141,  483 => 140,  480 => 139,  478 => 138,  475 => 137,  473 => 136,  470 => 135,  467 => 134,  463 => 185,  459 => 183,  457 => 163,  453 => 161,  451 => 134,  443 => 128,  440 => 127,  437 => 126,  433 => 125,  430 => 124,  426 => 122,  420 => 120,  417 => 119,  409 => 117,  407 => 116,  402 => 115,  399 => 114,  396 => 113,  393 => 112,  385 => 108,  381 => 106,  378 => 105,  373 => 186,  370 => 126,  367 => 112,  365 => 105,  362 => 104,  359 => 103,  353 => 99,  349 => 96,  346 => 95,  343 => 94,  329 => 93,  324 => 91,  321 => 90,  317 => 88,  314 => 87,  311 => 86,  294 => 85,  291 => 84,  288 => 83,  282 => 81,  280 => 80,  274 => 78,  271 => 77,  266 => 73,  263 => 72,  257 => 70,  254 => 69,  251 => 67,  246 => 66,  243 => 65,  240 => 63,  234 => 61,  231 => 60,  229 => 59,  227 => 58,  224 => 57,  221 => 56,  212 => 54,  207 => 53,  205 => 52,  198 => 48,  194 => 46,  188 => 45,  180 => 44,  172 => 43,  168 => 41,  165 => 40,  161 => 38,  158 => 37,  149 => 35,  144 => 34,  141 => 33,  138 => 32,  132 => 28,  129 => 27,  123 => 25,  113 => 317,  111 => 189,  108 => 188,  106 => 103,  99 => 99,  95 => 97,  93 => 77,  89 => 75,  87 => 40,  84 => 39,  82 => 32,  79 => 31,  77 => 27,  72 => 25,  68 => 23,  66 => 22,  64 => 21,  62 => 20,  60 => 19,  58 => 18,  56 => 17,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  44 => 11,);
    }
}
