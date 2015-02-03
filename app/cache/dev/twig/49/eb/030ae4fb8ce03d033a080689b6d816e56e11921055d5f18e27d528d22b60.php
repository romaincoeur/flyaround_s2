<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_49eb030ae4fb8ce03d033a080689b6d816e56e11921055d5f18e27d528d22b60 extends Twig_Template
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
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
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
    public function block_form_widget($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
    ";
        }
    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_money_widget($context, array $blocks = array())
    {
        // line 32
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 33
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 35
            echo "        ";
            $context["currencySymbol"] = trim(strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 36
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 37
                echo "            <div class=\"input-group\">";
                // line 38
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 39
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 41
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 42
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 44
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 45
                echo "</div>
        ";
            }
            // line 47
            echo "    ";
        }
    }

    // line 50
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        ob_start();
        // line 52
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 53
        echo "        <div class=\"input-group\">
            ";
        // line 54
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_form_label($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "
    ";
        // line 64
        $context["label_class"] = "";
        // line 65
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 66
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 67
            echo "    ";
        } else {
            // line 68
            echo "        ";
            $context["label_class"] = " control-label";
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 72
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 73
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 74
            echo "
        ";
            // line 75
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 76
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 77
                echo "        ";
            }
            // line 78
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 79
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 80
                echo "        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 83
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 84
                echo "        ";
            }
            // line 85
            echo "
        ";
            // line 86
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 87
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
                // line 88
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 90
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 95
                echo "                </span>
            </label>
        ";
            } else {
                // line 98
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
                // line 99
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 102
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 104
                echo "            </label>
        ";
            }
            // line 106
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 111
        ob_start();
        // line 112
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 113
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 115
            echo "        <li>
            ";
            // line 116
            ob_start();
            // line 117
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 118
            echo "            ";
            $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 119
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 126
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 127
        ob_start();
        // line 128
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 129
            echo "        ";
            $context["required"] = false;
            // line 130
            echo "    ";
        }
        // line 131
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method"))) {
            // line 132
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 133
            echo "    ";
        }
        // line 134
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 135
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 136
            echo "            <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                ";
            // line 137
            if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
            }
            // line 142
            echo "            </option>
        ";
        }
        // line 144
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 145
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 146
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 147
            if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                // line 148
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 150
            echo "        ";
        }
        // line 151
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 152
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 157
    public function block_form_row($context, array $blocks = array())
    {
        // line 158
        echo "    ";
        $context["label_class"] = "";
        // line 159
        echo "    ";
        $context["div_class"] = "";
        // line 160
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 161
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 162
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 163
            echo "    ";
        } else {
            // line 164
            echo "        ";
            $context["label_class"] = "control-label";
            // line 165
            echo "    ";
        }
        // line 166
        echo "
    ";
        // line 167
        if ((( !array_key_exists("sonata_admin", $context) ||  !(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) ||  !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 168
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 169
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 170
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 171
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 172
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 173
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 174
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 177
            echo "            </div>
        </div>
    ";
        } else {
            // line 180
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            ";
            // line 181
            $this->displayBlock('label', $context, $blocks);
            // line 188
            echo "
            ";
            // line 189
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) ||  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false));
            // line 190
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ( !(isset($context["has_label"]) ? $context["has_label"] : $this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 193
            echo "
                ";
            // line 194
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 195
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 196
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 199
            echo "
                ";
            // line 200
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array())) {
                // line 201
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
                echo "</span>
                ";
            }
            // line 203
            echo "            </div>
        </div>
    ";
        }
    }

    // line 181
    public function block_label($context, array $blocks = array())
    {
        // line 182
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 183
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 185
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 187
        echo "            ";
    }

    // line 208
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 209
        ob_start();
        // line 210
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 211
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 212
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 214
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 219
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 220
        ob_start();
        // line 221
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 222
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 223
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 224
            echo "    ";
        }
        // line 225
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 227
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
            // line 228
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
        // line 230
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 231
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 232
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 234
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 238
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 243
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
            // line 244
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
        // line 246
        echo "
            ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 252
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 253
        echo "    ";
        ob_start();
        // line 254
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
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 258
        $context["div_class"] = "";
        // line 259
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 260
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 261
            echo "            ";
        }
        // line 262
        echo "
            <div class=\"";
        // line 263
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
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 265
        echo "            </div>

            ";
        // line 267
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 268
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 269
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 272
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 276
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 277
        ob_start();
        // line 278
        echo "
    ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

    ";
        // line 281
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 282
            echo "        ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 283
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
            }
            // line 285
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\",
                allowClear: ";
        // line 292
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 293
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 294
        echo (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 296
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 298
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : ($this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 318
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 319
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 320
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "\"";
                // line 321
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 324
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 332
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 335
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 380
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 381
            echo "data = [";
            // line 382
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 383
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), $context["key"], array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["label_text"], "js"), "html", null, true);
                echo "'}";
                // line 384
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute(        // line 387
(isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 388
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 390
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 332
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<span class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</span>'";
    }

    // line 335
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    // line 398
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 399
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 400
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 401
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 403
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 404
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 406
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
        // line 415
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
        return array (  1166 => 415,  1153 => 406,  1148 => 404,  1144 => 403,  1140 => 401,  1138 => 400,  1133 => 399,  1130 => 398,  1124 => 335,  1118 => 332,  1108 => 390,  1101 => 388,  1099 => 387,  1097 => 386,  1081 => 384,  1075 => 383,  1058 => 382,  1056 => 381,  1054 => 380,  1044 => 373,  1024 => 358,  1000 => 337,  995 => 335,  989 => 332,  979 => 324,  962 => 321,  956 => 320,  939 => 319,  936 => 318,  930 => 315,  926 => 314,  922 => 313,  916 => 310,  908 => 307,  902 => 304,  893 => 298,  888 => 296,  884 => 295,  880 => 294,  876 => 293,  872 => 292,  868 => 291,  863 => 289,  858 => 286,  852 => 285,  846 => 283,  843 => 282,  839 => 281,  834 => 279,  831 => 278,  829 => 277,  826 => 276,  820 => 272,  814 => 269,  811 => 268,  809 => 267,  805 => 265,  802 => 264,  790 => 263,  787 => 262,  784 => 261,  781 => 260,  778 => 259,  776 => 258,  771 => 256,  759 => 254,  756 => 253,  753 => 252,  745 => 247,  742 => 246,  725 => 244,  708 => 243,  703 => 241,  698 => 240,  695 => 239,  692 => 238,  686 => 234,  682 => 232,  680 => 231,  675 => 230,  658 => 228,  641 => 227,  637 => 226,  632 => 225,  629 => 224,  626 => 223,  623 => 222,  620 => 221,  618 => 220,  615 => 219,  606 => 214,  602 => 212,  600 => 211,  597 => 210,  595 => 209,  592 => 208,  588 => 187,  582 => 185,  576 => 183,  573 => 182,  570 => 181,  563 => 203,  557 => 201,  555 => 200,  552 => 199,  546 => 196,  543 => 195,  541 => 194,  538 => 193,  535 => 192,  517 => 190,  515 => 189,  512 => 188,  510 => 181,  501 => 180,  496 => 177,  490 => 174,  487 => 173,  484 => 172,  481 => 171,  475 => 170,  471 => 169,  464 => 168,  462 => 167,  459 => 166,  456 => 165,  453 => 164,  450 => 163,  447 => 162,  444 => 161,  441 => 160,  438 => 159,  435 => 158,  432 => 157,  423 => 152,  420 => 151,  417 => 150,  411 => 148,  409 => 147,  404 => 146,  401 => 145,  398 => 144,  394 => 142,  391 => 140,  388 => 138,  386 => 137,  379 => 136,  377 => 135,  369 => 134,  366 => 133,  363 => 132,  360 => 131,  357 => 130,  354 => 129,  351 => 128,  349 => 127,  346 => 126,  340 => 122,  330 => 119,  327 => 118,  323 => 117,  321 => 116,  318 => 115,  314 => 114,  309 => 113,  306 => 112,  304 => 111,  301 => 110,  295 => 106,  291 => 104,  285 => 102,  282 => 100,  280 => 99,  264 => 98,  259 => 95,  256 => 93,  253 => 91,  251 => 90,  246 => 88,  230 => 87,  228 => 86,  225 => 85,  222 => 84,  219 => 83,  217 => 82,  214 => 81,  211 => 80,  208 => 79,  205 => 78,  202 => 77,  199 => 76,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 70,  182 => 69,  179 => 68,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  165 => 63,  163 => 62,  160 => 61,  151 => 54,  148 => 53,  145 => 52,  142 => 51,  139 => 50,  134 => 47,  130 => 45,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  114 => 39,  112 => 38,  110 => 37,  107 => 36,  104 => 35,  101 => 33,  99 => 32,  96 => 31,  89 => 28,  86 => 27,  83 => 26,  76 => 23,  73 => 22,  70 => 21,  62 => 17,  60 => 16,  56 => 15,  53 => 14,  11 => 12,);
    }
}
