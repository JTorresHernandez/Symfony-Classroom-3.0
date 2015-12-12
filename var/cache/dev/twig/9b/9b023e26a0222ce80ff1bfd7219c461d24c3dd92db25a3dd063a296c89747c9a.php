<?php

/* :form-templates:foundation_5_layout.html.twig */
class __TwigTemplate_ec155fb90eda8852c54cd829649ef7c3a07a616f8adc34b8e94feda067ff1d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", ":form-templates:foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b1bfda3d8f26568a822901fe90208375345467c363f72f39ba3ffc72f47cef = $this->env->getExtension("native_profiler");
        $__internal_a1b1bfda3d8f26568a822901fe90208375345467c363f72f39ba3ffc72f47cef->enter($__internal_a1b1bfda3d8f26568a822901fe90208375345467c363f72f39ba3ffc72f47cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b1bfda3d8f26568a822901fe90208375345467c363f72f39ba3ffc72f47cef->leave($__internal_a1b1bfda3d8f26568a822901fe90208375345467c363f72f39ba3ffc72f47cef_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a79d98ce630912cc9da098c8744bcf2271b2ec1b55a2715e215f629397b47083 = $this->env->getExtension("native_profiler");
        $__internal_a79d98ce630912cc9da098c8744bcf2271b2ec1b55a2715e215f629397b47083->enter($__internal_a79d98ce630912cc9da098c8744bcf2271b2ec1b55a2715e215f629397b47083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a79d98ce630912cc9da098c8744bcf2271b2ec1b55a2715e215f629397b47083->leave($__internal_a79d98ce630912cc9da098c8744bcf2271b2ec1b55a2715e215f629397b47083_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3aa17a64b48ecaffbed97b90c01f54e130d15bb93d9482f2337c5b84c8bbb7dd = $this->env->getExtension("native_profiler");
        $__internal_3aa17a64b48ecaffbed97b90c01f54e130d15bb93d9482f2337c5b84c8bbb7dd->enter($__internal_3aa17a64b48ecaffbed97b90c01f54e130d15bb93d9482f2337c5b84c8bbb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3aa17a64b48ecaffbed97b90c01f54e130d15bb93d9482f2337c5b84c8bbb7dd->leave($__internal_3aa17a64b48ecaffbed97b90c01f54e130d15bb93d9482f2337c5b84c8bbb7dd_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9ff79b501fac6abc344d1adc0a37b1edab6a75e15f9d51a1e3d3df33ffbc95a5 = $this->env->getExtension("native_profiler");
        $__internal_9ff79b501fac6abc344d1adc0a37b1edab6a75e15f9d51a1e3d3df33ffbc95a5->enter($__internal_9ff79b501fac6abc344d1adc0a37b1edab6a75e15f9d51a1e3d3df33ffbc95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9ff79b501fac6abc344d1adc0a37b1edab6a75e15f9d51a1e3d3df33ffbc95a5->leave($__internal_9ff79b501fac6abc344d1adc0a37b1edab6a75e15f9d51a1e3d3df33ffbc95a5_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0f242fc37ebd18f2487c03a222e5f4396cc066fb4efd9f8475783b3bac9a37a5 = $this->env->getExtension("native_profiler");
        $__internal_0f242fc37ebd18f2487c03a222e5f4396cc066fb4efd9f8475783b3bac9a37a5->enter($__internal_0f242fc37ebd18f2487c03a222e5f4396cc066fb4efd9f8475783b3bac9a37a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_0f242fc37ebd18f2487c03a222e5f4396cc066fb4efd9f8475783b3bac9a37a5->leave($__internal_0f242fc37ebd18f2487c03a222e5f4396cc066fb4efd9f8475783b3bac9a37a5_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0cd957197834b305d50a8c4998149070f3b1a054b0b7432f94311a802000f17a = $this->env->getExtension("native_profiler");
        $__internal_0cd957197834b305d50a8c4998149070f3b1a054b0b7432f94311a802000f17a->enter($__internal_0cd957197834b305d50a8c4998149070f3b1a054b0b7432f94311a802000f17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_0cd957197834b305d50a8c4998149070f3b1a054b0b7432f94311a802000f17a->leave($__internal_0cd957197834b305d50a8c4998149070f3b1a054b0b7432f94311a802000f17a_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e424276d77033ed2169d5024c72234437a6e868d3d549ff6599e81a757856647 = $this->env->getExtension("native_profiler");
        $__internal_e424276d77033ed2169d5024c72234437a6e868d3d549ff6599e81a757856647->enter($__internal_e424276d77033ed2169d5024c72234437a6e868d3d549ff6599e81a757856647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_e424276d77033ed2169d5024c72234437a6e868d3d549ff6599e81a757856647->leave($__internal_e424276d77033ed2169d5024c72234437a6e868d3d549ff6599e81a757856647_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f914883b2dbb075f9af0f17af8b633a1f862103b988b928cd2a1b2cdb0d483bd = $this->env->getExtension("native_profiler");
        $__internal_f914883b2dbb075f9af0f17af8b633a1f862103b988b928cd2a1b2cdb0d483bd->enter($__internal_f914883b2dbb075f9af0f17af8b633a1f862103b988b928cd2a1b2cdb0d483bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_f914883b2dbb075f9af0f17af8b633a1f862103b988b928cd2a1b2cdb0d483bd->leave($__internal_f914883b2dbb075f9af0f17af8b633a1f862103b988b928cd2a1b2cdb0d483bd_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_94fd21641edd526a1594d9be479a9ea0eb9c0861e10d42431d5de8889a7be8e2 = $this->env->getExtension("native_profiler");
        $__internal_94fd21641edd526a1594d9be479a9ea0eb9c0861e10d42431d5de8889a7be8e2->enter($__internal_94fd21641edd526a1594d9be479a9ea0eb9c0861e10d42431d5de8889a7be8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_94fd21641edd526a1594d9be479a9ea0eb9c0861e10d42431d5de8889a7be8e2->leave($__internal_94fd21641edd526a1594d9be479a9ea0eb9c0861e10d42431d5de8889a7be8e2_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_569da0cf7bd4b0c3d80647a3e662271c3a50d8a8ad48a98a52ad60c460072f18 = $this->env->getExtension("native_profiler");
        $__internal_569da0cf7bd4b0c3d80647a3e662271c3a50d8a8ad48a98a52ad60c460072f18->enter($__internal_569da0cf7bd4b0c3d80647a3e662271c3a50d8a8ad48a98a52ad60c460072f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_569da0cf7bd4b0c3d80647a3e662271c3a50d8a8ad48a98a52ad60c460072f18->leave($__internal_569da0cf7bd4b0c3d80647a3e662271c3a50d8a8ad48a98a52ad60c460072f18_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_76badd770adc526439cd139d1ffc575d826dbbee1cfa6daa1f0d6395fdd89ad1 = $this->env->getExtension("native_profiler");
        $__internal_76badd770adc526439cd139d1ffc575d826dbbee1cfa6daa1f0d6395fdd89ad1->enter($__internal_76badd770adc526439cd139d1ffc575d826dbbee1cfa6daa1f0d6395fdd89ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_76badd770adc526439cd139d1ffc575d826dbbee1cfa6daa1f0d6395fdd89ad1->leave($__internal_76badd770adc526439cd139d1ffc575d826dbbee1cfa6daa1f0d6395fdd89ad1_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c7d377b4ff7d7d2a91cab639b33c68298277b23150c648eb097f5478f1aacd32 = $this->env->getExtension("native_profiler");
        $__internal_c7d377b4ff7d7d2a91cab639b33c68298277b23150c648eb097f5478f1aacd32->enter($__internal_c7d377b4ff7d7d2a91cab639b33c68298277b23150c648eb097f5478f1aacd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_c7d377b4ff7d7d2a91cab639b33c68298277b23150c648eb097f5478f1aacd32->leave($__internal_c7d377b4ff7d7d2a91cab639b33c68298277b23150c648eb097f5478f1aacd32_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1ff24aa40fabc2163de76a29ca3bbaef3ef7e10f0aacf768beee19ef27e1a1b2 = $this->env->getExtension("native_profiler");
        $__internal_1ff24aa40fabc2163de76a29ca3bbaef3ef7e10f0aacf768beee19ef27e1a1b2->enter($__internal_1ff24aa40fabc2163de76a29ca3bbaef3ef7e10f0aacf768beee19ef27e1a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_1ff24aa40fabc2163de76a29ca3bbaef3ef7e10f0aacf768beee19ef27e1a1b2->leave($__internal_1ff24aa40fabc2163de76a29ca3bbaef3ef7e10f0aacf768beee19ef27e1a1b2_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2cc3cb858d7dd9dc14f5e6733ed9b4a638908dc7a0fdef127a276fd8f1f34903 = $this->env->getExtension("native_profiler");
        $__internal_2cc3cb858d7dd9dc14f5e6733ed9b4a638908dc7a0fdef127a276fd8f1f34903->enter($__internal_2cc3cb858d7dd9dc14f5e6733ed9b4a638908dc7a0fdef127a276fd8f1f34903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2cc3cb858d7dd9dc14f5e6733ed9b4a638908dc7a0fdef127a276fd8f1f34903->leave($__internal_2cc3cb858d7dd9dc14f5e6733ed9b4a638908dc7a0fdef127a276fd8f1f34903_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f2f63e43099d1b61f015783366dfb354cc33436842495b8de9a34f6150f03fce = $this->env->getExtension("native_profiler");
        $__internal_f2f63e43099d1b61f015783366dfb354cc33436842495b8de9a34f6150f03fce->enter($__internal_f2f63e43099d1b61f015783366dfb354cc33436842495b8de9a34f6150f03fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f2f63e43099d1b61f015783366dfb354cc33436842495b8de9a34f6150f03fce->leave($__internal_f2f63e43099d1b61f015783366dfb354cc33436842495b8de9a34f6150f03fce_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ffba80e0e63a5fc155396f53f315d7228dc7d3bfe86889e7a22e46cac1910c0e = $this->env->getExtension("native_profiler");
        $__internal_ffba80e0e63a5fc155396f53f315d7228dc7d3bfe86889e7a22e46cac1910c0e->enter($__internal_ffba80e0e63a5fc155396f53f315d7228dc7d3bfe86889e7a22e46cac1910c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ffba80e0e63a5fc155396f53f315d7228dc7d3bfe86889e7a22e46cac1910c0e->leave($__internal_ffba80e0e63a5fc155396f53f315d7228dc7d3bfe86889e7a22e46cac1910c0e_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_37510ef1643d980ef8d57e13ee2500ed63d56fe3f7bfdb806f17a802ce957ffb = $this->env->getExtension("native_profiler");
        $__internal_37510ef1643d980ef8d57e13ee2500ed63d56fe3f7bfdb806f17a802ce957ffb->enter($__internal_37510ef1643d980ef8d57e13ee2500ed63d56fe3f7bfdb806f17a802ce957ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_37510ef1643d980ef8d57e13ee2500ed63d56fe3f7bfdb806f17a802ce957ffb->leave($__internal_37510ef1643d980ef8d57e13ee2500ed63d56fe3f7bfdb806f17a802ce957ffb_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4af79f2bb408df42698f8f3108dd0fffd759a90e93bddf279999cd2bcfe36465 = $this->env->getExtension("native_profiler");
        $__internal_4af79f2bb408df42698f8f3108dd0fffd759a90e93bddf279999cd2bcfe36465->enter($__internal_4af79f2bb408df42698f8f3108dd0fffd759a90e93bddf279999cd2bcfe36465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 253
            echo "    ";
        }
        // line 254
        echo "    <label";
        $context['_parent'] = $context;
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
        // line 255
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 256
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_4af79f2bb408df42698f8f3108dd0fffd759a90e93bddf279999cd2bcfe36465->leave($__internal_4af79f2bb408df42698f8f3108dd0fffd759a90e93bddf279999cd2bcfe36465_prof);

    }

    // line 262
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5be22670b279011ea26f9861953fa16f146f9f164ee04d135cd361408fe8703 = $this->env->getExtension("native_profiler");
        $__internal_b5be22670b279011ea26f9861953fa16f146f9f164ee04d135cd361408fe8703->enter($__internal_b5be22670b279011ea26f9861953fa16f146f9f164ee04d135cd361408fe8703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 263
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 264
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b5be22670b279011ea26f9861953fa16f146f9f164ee04d135cd361408fe8703->leave($__internal_b5be22670b279011ea26f9861953fa16f146f9f164ee04d135cd361408fe8703_prof);

    }

    // line 272
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_27ad20654acc20967b6322319e4cf2d721197f4fa2f123e81199364178200b2d = $this->env->getExtension("native_profiler");
        $__internal_27ad20654acc20967b6322319e4cf2d721197f4fa2f123e81199364178200b2d->enter($__internal_27ad20654acc20967b6322319e4cf2d721197f4fa2f123e81199364178200b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 273
        $context["force_error"] = true;
        // line 274
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_27ad20654acc20967b6322319e4cf2d721197f4fa2f123e81199364178200b2d->leave($__internal_27ad20654acc20967b6322319e4cf2d721197f4fa2f123e81199364178200b2d_prof);

    }

    // line 277
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3dccc93d8f888ba3ff52bb97e012b055469abc6b96719146e482a2da1f9b5f1f = $this->env->getExtension("native_profiler");
        $__internal_3dccc93d8f888ba3ff52bb97e012b055469abc6b96719146e482a2da1f9b5f1f->enter($__internal_3dccc93d8f888ba3ff52bb97e012b055469abc6b96719146e482a2da1f9b5f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 278
        $context["force_error"] = true;
        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3dccc93d8f888ba3ff52bb97e012b055469abc6b96719146e482a2da1f9b5f1f->leave($__internal_3dccc93d8f888ba3ff52bb97e012b055469abc6b96719146e482a2da1f9b5f1f_prof);

    }

    // line 282
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_aebaf55a869d0f05c831d42bef8be6841f261d82e7da826f89265f7cbb62121f = $this->env->getExtension("native_profiler");
        $__internal_aebaf55a869d0f05c831d42bef8be6841f261d82e7da826f89265f7cbb62121f->enter($__internal_aebaf55a869d0f05c831d42bef8be6841f261d82e7da826f89265f7cbb62121f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 283
        $context["force_error"] = true;
        // line 284
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aebaf55a869d0f05c831d42bef8be6841f261d82e7da826f89265f7cbb62121f->leave($__internal_aebaf55a869d0f05c831d42bef8be6841f261d82e7da826f89265f7cbb62121f_prof);

    }

    // line 287
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_dbcfbb813a2cce96cfcfca56042b22fc5c70ee1c24a86f0cf899f1af5991ea61 = $this->env->getExtension("native_profiler");
        $__internal_dbcfbb813a2cce96cfcfca56042b22fc5c70ee1c24a86f0cf899f1af5991ea61->enter($__internal_dbcfbb813a2cce96cfcfca56042b22fc5c70ee1c24a86f0cf899f1af5991ea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 288
        $context["force_error"] = true;
        // line 289
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dbcfbb813a2cce96cfcfca56042b22fc5c70ee1c24a86f0cf899f1af5991ea61->leave($__internal_dbcfbb813a2cce96cfcfca56042b22fc5c70ee1c24a86f0cf899f1af5991ea61_prof);

    }

    // line 292
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ef29a2b8867b6d13543aae650b752307461643a1f2b940b3d50943df06b6079b = $this->env->getExtension("native_profiler");
        $__internal_ef29a2b8867b6d13543aae650b752307461643a1f2b940b3d50943df06b6079b->enter($__internal_ef29a2b8867b6d13543aae650b752307461643a1f2b940b3d50943df06b6079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 293
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 294
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ef29a2b8867b6d13543aae650b752307461643a1f2b940b3d50943df06b6079b->leave($__internal_ef29a2b8867b6d13543aae650b752307461643a1f2b940b3d50943df06b6079b_prof);

    }

    // line 301
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_59bc4f3230ea9832cdc3058353ea976b5513304bcb417e54a9100e1c3a972a10 = $this->env->getExtension("native_profiler");
        $__internal_59bc4f3230ea9832cdc3058353ea976b5513304bcb417e54a9100e1c3a972a10->enter($__internal_59bc4f3230ea9832cdc3058353ea976b5513304bcb417e54a9100e1c3a972a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 302
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 303
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_59bc4f3230ea9832cdc3058353ea976b5513304bcb417e54a9100e1c3a972a10->leave($__internal_59bc4f3230ea9832cdc3058353ea976b5513304bcb417e54a9100e1c3a972a10_prof);

    }

    // line 312
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8bbcf21a4a16c41970252b22c42a7bd3e97acc909e9ba12e9beeaac61efb4640 = $this->env->getExtension("native_profiler");
        $__internal_8bbcf21a4a16c41970252b22c42a7bd3e97acc909e9ba12e9beeaac61efb4640->enter($__internal_8bbcf21a4a16c41970252b22c42a7bd3e97acc909e9ba12e9beeaac61efb4640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 313
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 314
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 315
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 316
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 317
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_8bbcf21a4a16c41970252b22c42a7bd3e97acc909e9ba12e9beeaac61efb4640->leave($__internal_8bbcf21a4a16c41970252b22c42a7bd3e97acc909e9ba12e9beeaac61efb4640_prof);

    }

    public function getTemplateName()
    {
        return ":form-templates:foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  920 => 319,  904 => 317,  900 => 316,  883 => 315,  877 => 314,  875 => 313,  869 => 312,  859 => 305,  855 => 304,  849 => 303,  846 => 302,  840 => 301,  830 => 296,  826 => 295,  820 => 294,  817 => 293,  811 => 292,  803 => 289,  801 => 288,  795 => 287,  787 => 284,  785 => 283,  779 => 282,  771 => 279,  769 => 278,  763 => 277,  755 => 274,  753 => 273,  747 => 272,  737 => 267,  733 => 266,  729 => 265,  723 => 264,  720 => 263,  714 => 262,  705 => 256,  701 => 255,  685 => 254,  682 => 253,  679 => 252,  676 => 251,  673 => 250,  670 => 249,  667 => 248,  664 => 247,  662 => 246,  659 => 245,  656 => 244,  653 => 243,  651 => 242,  645 => 241,  638 => 238,  632 => 237,  625 => 234,  619 => 233,  612 => 230,  609 => 229,  607 => 228,  604 => 227,  602 => 226,  600 => 225,  594 => 224,  587 => 221,  584 => 220,  582 => 219,  580 => 218,  574 => 217,  563 => 210,  560 => 209,  557 => 208,  555 => 207,  552 => 206,  546 => 204,  543 => 203,  541 => 202,  535 => 201,  524 => 196,  521 => 195,  515 => 193,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 188,  496 => 187,  487 => 183,  480 => 181,  478 => 180,  476 => 179,  472 => 178,  467 => 177,  463 => 175,  456 => 173,  454 => 172,  452 => 171,  448 => 170,  445 => 169,  443 => 168,  437 => 167,  430 => 164,  428 => 163,  426 => 162,  420 => 159,  418 => 158,  416 => 157,  414 => 156,  412 => 155,  403 => 153,  401 => 152,  393 => 151,  390 => 149,  388 => 148,  385 => 147,  382 => 146,  380 => 145,  378 => 144,  375 => 143,  372 => 142,  370 => 141,  368 => 140,  362 => 139,  354 => 136,  350 => 134,  347 => 133,  339 => 128,  328 => 121,  320 => 116,  307 => 106,  296 => 99,  293 => 98,  287 => 96,  284 => 95,  281 => 94,  278 => 92,  276 => 91,  270 => 90,  262 => 87,  258 => 85,  256 => 84,  254 => 82,  253 => 81,  252 => 80,  251 => 79,  245 => 77,  242 => 76,  239 => 75,  236 => 73,  234 => 72,  228 => 71,  217 => 66,  213 => 65,  209 => 64,  204 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 57,  189 => 56,  183 => 55,  172 => 48,  170 => 47,  167 => 45,  161 => 44,  154 => 41,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  138 => 34,  136 => 33,  130 => 30,  127 => 29,  124 => 28,  122 => 27,  119 => 26,  113 => 25,  106 => 22,  104 => 21,  98 => 20,  91 => 17,  88 => 16,  86 => 15,  84 => 14,  78 => 13,  71 => 10,  68 => 9,  66 => 8,  64 => 7,  58 => 6,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {# Based on Foundation 5 Doc #}*/
/* {# Widgets #}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="row collapse">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <div class="small-3 large-2 columns">*/
/*                 <span class="prefix">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="small-9 large-10 columns">*/
/*             {{- block('form_widget_simple') -}}*/
/*         </div>*/
/*         {% if prepend %}*/
/*             <div class="small-3 large-2 columns">*/
/*                 <span class="postfix">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="row collapse">*/
/*         <div class="small-9 large-10 columns">*/
/*             {{- block('form_widget_simple') -}}*/
/*         </div>*/
/*         <div class="small-3 large-2 columns">*/
/*             <span class="postfix">%</span>*/
/*         </div>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}*/
/*         <div class="row">*/
/*             <div class="large-7 columns">{{ form_errors(form.date) }}</div>*/
/*             <div class="large-5 columns">{{ form_errors(form.time) }}</div>*/
/*         </div>*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <div class="large-7 columns">{{ form_widget(form.date, { datetime: true } ) }}</div>*/
/*             <div class="large-5 columns">{{ form_widget(form.time, { datetime: true } ) }}</div>*/
/*         </div>*/
/*     {% endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}*/
/*         {% if datetime is not defined or not datetime %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*         {% endif %}*/
/*         {{- date_pattern|replace({*/
/*             '{{ year }}': '<div class="large-4 columns">' ~ form_widget(form.year) ~ '</div>',*/
/*             '{{ month }}': '<div class="large-4 columns">' ~ form_widget(form.month) ~ '</div>',*/
/*             '{{ day }}': '<div class="large-4 columns">' ~ form_widget(form.day) ~ '</div>',*/
/*         })|raw -}}*/
/*         {% if datetime is not defined or not datetime %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {% endif %}*/
/*         {% if with_seconds %}*/
/*             <div class="large-4 columns">{{ form_widget(form.hour) }}</div>*/
/*             <div class="large-4 columns">*/
/*                 <div class="row collapse">*/
/*                     <div class="small-3 large-2 columns">*/
/*                         <span class="prefix">:</span>*/
/*                     </div>*/
/*                     <div class="small-9 large-10 columns">*/
/*                         {{ form_widget(form.minute) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="large-4 columns">*/
/*                 <div class="row collapse">*/
/*                     <div class="small-3 large-2 columns">*/
/*                         <span class="prefix">:</span>*/
/*                     </div>*/
/*                     <div class="small-9 large-10 columns">*/
/*                         {{ form_widget(form.second) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="large-6 columns">{{ form_widget(form.hour) }}</div>*/
/*             <div class="large-6 columns">*/
/*                 <div class="row collapse">*/
/*                     <div class="small-3 large-2 columns">*/
/*                         <span class="prefix">:</span>*/
/*                     </div>*/
/*                     <div class="small-9 large-10 columns">*/
/*                         {{ form_widget(form.minute) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if datetime is not defined or false == datetime %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/* */
/*     {% if multiple -%}*/
/*         {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}*/
/*     {% endif %}*/
/* */
/*     {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple" data-customforms="disabled"{% endif %}>*/
/*         {% if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>*/
/*         {%- endif %}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {% if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif %}*/
/*         {%- endif -%}*/
/*         {% set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') %}*/
/*         <ul class="inline-list">*/
/*             {% for child in form %}*/
/*                 <li>{{ form_widget(child, {*/
/*                         parent_label_class: label_attr.class|default(''),*/
/*                     }) }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {% for child in form %}*/
/*                 {{ form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') %}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{ form_label(form, null, { widget: parent() }) }}*/
/*     {% else %}*/
/*         <div class="checkbox">*/
/*             {{ form_label(form, null, { widget: parent() }) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') %}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{ form_label(form, null, { widget: parent() }) }}*/
/*     {% else %}*/
/*         {% if errors|length > 0 -%}*/
/*             {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}*/
/*         {% endif %}*/
/*         <div class="radio">*/
/*             {{ form_label(form, null, { widget: parent() }) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}*/
/*     {{- block('form_label') -}}*/
/* {%- endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label -%}*/
/*     {% if required %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*     {% endif %}*/
/*     {% if errors|length > 0 -%}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}*/
/*     {% endif %}*/
/*     {% if parent_label_class is defined %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}*/
/*     {% endif %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*         {{ widget|raw }}*/
/*         {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}*/
/*     </label>*/
/* {%- endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="row">*/
/*         <div class="large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}">*/
/*             {{ form_label(form) }}*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="row">*/
/*         <div class="large-12 columns{% if not valid %} error{% endif %}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="row">*/
/*         <div class="large-12 columns{% if not valid %} error{% endif %}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*         {% if form.parent %}<small class="error">{% else %}<div data-alert class="alert-box alert">{% endif %}*/
/*         {%- for error in errors -%}*/
/*             {{ error.message }}*/
/*             {% if not loop.last %}, {% endif %}*/
/*         {%- endfor -%}*/
/*         {% if form.parent %}</small>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
