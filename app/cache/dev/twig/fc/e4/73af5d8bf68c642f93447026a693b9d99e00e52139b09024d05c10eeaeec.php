<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_fce473af5d8bf68c642f93447026a693b9d99e00e52139b09024d05c10eeaeec extends Twig_Template
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
    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                // line 6
                echo "
        <div class=\"";
                // line 7
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                echo "\">
            <div class=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "box_class", array()), "html", null, true);
                echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 15
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 17
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array()) != false)) {
                    // line 18
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                    echo "</p>
                        ";
                }
                // line 20
                echo "
                        ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 22
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 23
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 25
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 26
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </div>
                </div>
                ";
                // line 31
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  112 => 31,  108 => 28,  99 => 26,  94 => 25,  88 => 23,  85 => 22,  80 => 21,  77 => 20,  71 => 18,  69 => 17,  65 => 15,  59 => 11,  53 => 8,  49 => 7,  46 => 6,  43 => 5,  39 => 4,  35 => 2,  21 => 1,);
    }
}
