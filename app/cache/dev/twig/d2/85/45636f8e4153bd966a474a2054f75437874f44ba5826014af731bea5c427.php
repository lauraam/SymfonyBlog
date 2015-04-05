<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d28545636f8e4153bd966a474a2054f75437874f44ba5826014af731bea5c427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"glyphicon glyphicon-exclamation-sign\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_form_widget($context, array $blocks = array())
    {
        // line 27
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
    ";
        }
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 35
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 36
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 43
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 46
    public function block_money_widget($context, array $blocks = array())
    {
        // line 47
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 48
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 50
            echo "        ";
            $context["currencySymbol"] = trim(strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 51
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 52
                echo "            <div class=\"input-group\">";
                // line 53
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 54
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 56
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 57
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "</div>
        ";
            }
            // line 62
            echo "    ";
        }
    }

    // line 65
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        ob_start();
        // line 67
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 68
        echo "        <div class=\"input-group\">
            ";
        // line 69
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 76
    public function block_form_label($context, array $blocks = array())
    {
        // line 77
        ob_start();
        // line 78
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 79
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 83
        echo "
    ";
        // line 85
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 86
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 87
            echo "
        ";
            // line 88
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 89
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 90
                echo "        ";
            }
            // line 91
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 92
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 93
                echo "        ";
            }
            // line 94
            echo "
        ";
            // line 95
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 96
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 97
                echo "        ";
            }
            // line 98
            echo "
        ";
            // line 99
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 100
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 101
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 103
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 108
                echo "                </span>
            </label>
        ";
            } else {
                // line 111
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 112
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 115
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 117
                echo "            </label>
        ";
            }
            // line 119
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 124
        ob_start();
        // line 125
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 126
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 128
            echo "        <li>
            ";
            // line 129
            ob_start();
            // line 130
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 131
            echo "            ";
            $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 132
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 140
        ob_start();
        // line 141
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 142
            echo "        ";
            $context["required"] = false;
            // line 143
            echo "    ";
        }
        // line 144
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 145
        echo "    ";
        if (((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable")) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 146
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 148
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 149
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 150
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 151
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 156
                echo "                </option>
            ";
            }
            // line 158
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 159
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 160
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 161
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 162
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 164
                echo "            ";
            }
            // line 165
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 166
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 172
    public function block_date_widget($context, array $blocks = array())
    {
        // line 173
        ob_start();
        // line 174
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 175
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 177
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 178
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 179
                echo "        ";
            }
            // line 180
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 181
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 182
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 183
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 184
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 185
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 186
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 192
    public function block_time_widget($context, array $blocks = array())
    {
        // line 193
        ob_start();
        // line 194
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 195
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 197
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 198
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 199
                echo "        ";
            }
            // line 200
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 201
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 203
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 205
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 206
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 210
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 211
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 212
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 215
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 220
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 221
        ob_start();
        // line 222
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 223
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 225
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 226
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 227
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 228
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            ";
            // line 229
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            echo "
            ";
            // line 230
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 236
    public function block_form_row($context, array $blocks = array())
    {
        // line 237
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 238
        $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
        // line 239
        echo "
        ";
        // line 240
        $context["div_class"] = "sonata-ba-field";
        // line 241
        echo "
        ";
        // line 242
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 243
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 244
            echo "        ";
        }
        // line 245
        echo "
        ";
        // line 246
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 247
            echo "            ";
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 248
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 249
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 250
                    echo "                ";
                } else {
                    // line 251
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 252
                    echo "                ";
                }
                // line 253
                echo "            ";
            } else {
                // line 254
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
                // line 255
                echo "            ";
            }
            // line 256
            echo "        ";
        }
        // line 257
        echo "
        ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "

        ";
        // line 260
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 261
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 262
            echo "
            ";
            // line 263
            if ((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "inline") && ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()) == "table"))) {
                // line 264
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " form-inline");
                // line 265
                echo "            ";
            }
            // line 266
            echo "        ";
        }
        // line 267
        echo "
        ";
        // line 268
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 269
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 270
            echo "        ";
        }
        // line 271
        echo "
        <div class=\"";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 274
        echo "
            ";
        // line 275
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 276
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 277
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 280
        echo "
            ";
        // line 281
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 282
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
            echo "</span>
            ";
        }
        // line 284
        echo "        </div>
    </div>
";
    }

    // line 288
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 289
        ob_start();
        // line 290
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 291
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 292
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 300
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 301
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 302
            echo "                </div>
            </div>
        ";
        }
        // line 305
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 309
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 310
        ob_start();
        // line 311
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 312
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 313
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 314
            echo "    ";
        }
        // line 315
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 317
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 318
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 321
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 322
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 324
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 328
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 329
        echo "    ";
        ob_start();
        // line 330
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 333
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 334
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "
            ";
        // line 337
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 342
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 343
        echo "    ";
        ob_start();
        // line 344
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 348
        $context["div_class"] = "";
        // line 349
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 350
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 351
            echo "            ";
        }
        // line 352
        echo "
            <div class=\"";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 354
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 355
        echo "            </div>

            ";
        // line 357
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 358
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 359
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 362
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 366
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 367
        echo "    ";
        $this->env->resolveTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")))->display($context);
    }

    // line 370
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 371
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 372
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 373
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 375
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 376
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 387
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
    }

    // line 410
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        // line 411
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />
    <script>
        jQuery(document).ready(function() {
            var \$target = jQuery('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            Admin.setup_sortable_select2(\$target, ";
        // line 416
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1122 => 416,  1117 => 414,  1106 => 411,  1103 => 410,  1077 => 387,  1064 => 378,  1059 => 376,  1055 => 375,  1051 => 373,  1049 => 372,  1044 => 371,  1041 => 370,  1036 => 367,  1033 => 366,  1027 => 362,  1021 => 359,  1018 => 358,  1016 => 357,  1012 => 355,  1009 => 354,  997 => 353,  994 => 352,  991 => 351,  988 => 350,  985 => 349,  983 => 348,  978 => 346,  966 => 344,  963 => 343,  960 => 342,  952 => 337,  949 => 336,  932 => 334,  915 => 333,  910 => 331,  905 => 330,  902 => 329,  899 => 328,  893 => 324,  889 => 322,  887 => 321,  882 => 320,  865 => 318,  848 => 317,  844 => 316,  839 => 315,  836 => 314,  833 => 313,  830 => 312,  827 => 311,  825 => 310,  822 => 309,  816 => 305,  811 => 302,  809 => 301,  804 => 300,  794 => 292,  792 => 291,  789 => 290,  787 => 289,  784 => 288,  778 => 284,  772 => 282,  770 => 281,  767 => 280,  761 => 277,  758 => 276,  756 => 275,  753 => 274,  750 => 273,  746 => 272,  743 => 271,  740 => 270,  737 => 269,  735 => 268,  732 => 267,  729 => 266,  726 => 265,  723 => 264,  721 => 263,  718 => 262,  715 => 261,  713 => 260,  708 => 258,  705 => 257,  702 => 256,  699 => 255,  696 => 254,  693 => 253,  690 => 252,  687 => 251,  684 => 250,  681 => 249,  678 => 248,  675 => 247,  673 => 246,  670 => 245,  667 => 244,  664 => 243,  662 => 242,  659 => 241,  657 => 240,  654 => 239,  652 => 238,  643 => 237,  640 => 236,  631 => 230,  627 => 229,  623 => 228,  619 => 227,  614 => 226,  611 => 225,  605 => 223,  602 => 222,  600 => 221,  597 => 220,  590 => 215,  584 => 212,  579 => 211,  576 => 210,  570 => 207,  565 => 206,  563 => 205,  558 => 203,  554 => 202,  549 => 201,  546 => 200,  543 => 199,  540 => 198,  537 => 197,  531 => 195,  528 => 194,  526 => 193,  523 => 192,  515 => 186,  513 => 185,  512 => 184,  511 => 183,  510 => 182,  505 => 181,  502 => 180,  499 => 179,  496 => 178,  493 => 177,  487 => 175,  484 => 174,  482 => 173,  479 => 172,  469 => 166,  466 => 165,  463 => 164,  457 => 162,  455 => 161,  450 => 160,  447 => 159,  444 => 158,  440 => 156,  437 => 154,  434 => 152,  432 => 151,  425 => 150,  423 => 149,  415 => 148,  409 => 146,  406 => 145,  403 => 144,  400 => 143,  397 => 142,  394 => 141,  392 => 140,  389 => 139,  383 => 135,  373 => 132,  370 => 131,  366 => 130,  364 => 129,  361 => 128,  357 => 127,  352 => 126,  349 => 125,  347 => 124,  344 => 123,  338 => 119,  334 => 117,  328 => 115,  325 => 113,  323 => 112,  307 => 111,  302 => 108,  299 => 106,  296 => 104,  294 => 103,  289 => 101,  273 => 100,  271 => 99,  268 => 98,  265 => 97,  262 => 96,  260 => 95,  257 => 94,  254 => 93,  251 => 92,  248 => 91,  245 => 90,  242 => 89,  240 => 88,  237 => 87,  234 => 86,  231 => 85,  228 => 83,  226 => 82,  223 => 81,  220 => 80,  217 => 79,  214 => 78,  212 => 77,  209 => 76,  200 => 69,  197 => 68,  194 => 67,  191 => 66,  188 => 65,  183 => 62,  179 => 60,  177 => 59,  174 => 58,  171 => 57,  169 => 56,  163 => 54,  161 => 53,  159 => 52,  156 => 51,  153 => 50,  150 => 48,  148 => 47,  145 => 46,  138 => 43,  135 => 42,  132 => 41,  125 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  110 => 33,  102 => 29,  100 => 28,  96 => 27,  93 => 26,  88 => 23,  84 => 22,  81 => 21,  72 => 19,  68 => 18,  65 => 17,  60 => 16,  58 => 15,  55 => 14,  11 => 12,);
    }
}
