<?php

/* :form-templates:foundation_5_layout.html.twig */
class __TwigTemplate_310b60d2789f72e9a64ee16ff38ee58a0c2069853843d480053729545d612a3c extends Twig_Template
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
        $__internal_fe118fbc419bb27d10232eed9baa3b0272af1147c01b8182a7adcb3652d8f8c8 = $this->env->getExtension("native_profiler");
        $__internal_fe118fbc419bb27d10232eed9baa3b0272af1147c01b8182a7adcb3652d8f8c8->enter($__internal_fe118fbc419bb27d10232eed9baa3b0272af1147c01b8182a7adcb3652d8f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe118fbc419bb27d10232eed9baa3b0272af1147c01b8182a7adcb3652d8f8c8->leave($__internal_fe118fbc419bb27d10232eed9baa3b0272af1147c01b8182a7adcb3652d8f8c8_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5ceb222428abea82fcd1d1296721d24cf27cbbe4d732c2e1c709294927cbc754 = $this->env->getExtension("native_profiler");
        $__internal_5ceb222428abea82fcd1d1296721d24cf27cbbe4d732c2e1c709294927cbc754->enter($__internal_5ceb222428abea82fcd1d1296721d24cf27cbbe4d732c2e1c709294927cbc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5ceb222428abea82fcd1d1296721d24cf27cbbe4d732c2e1c709294927cbc754->leave($__internal_5ceb222428abea82fcd1d1296721d24cf27cbbe4d732c2e1c709294927cbc754_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2c38deda3e76f3735f7f8fab02ca1f01cd9cb3ab97b795644ea71265545f372a = $this->env->getExtension("native_profiler");
        $__internal_2c38deda3e76f3735f7f8fab02ca1f01cd9cb3ab97b795644ea71265545f372a->enter($__internal_2c38deda3e76f3735f7f8fab02ca1f01cd9cb3ab97b795644ea71265545f372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2c38deda3e76f3735f7f8fab02ca1f01cd9cb3ab97b795644ea71265545f372a->leave($__internal_2c38deda3e76f3735f7f8fab02ca1f01cd9cb3ab97b795644ea71265545f372a_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_550e2d69ac8c7de54683a7c963dbd79e83ea76c99e989741420265e7a8427dce = $this->env->getExtension("native_profiler");
        $__internal_550e2d69ac8c7de54683a7c963dbd79e83ea76c99e989741420265e7a8427dce->enter($__internal_550e2d69ac8c7de54683a7c963dbd79e83ea76c99e989741420265e7a8427dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_550e2d69ac8c7de54683a7c963dbd79e83ea76c99e989741420265e7a8427dce->leave($__internal_550e2d69ac8c7de54683a7c963dbd79e83ea76c99e989741420265e7a8427dce_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b9252d451d89d1c5913c50aaa67035dd3ed16552fa525d30da0af98576dd03fd = $this->env->getExtension("native_profiler");
        $__internal_b9252d451d89d1c5913c50aaa67035dd3ed16552fa525d30da0af98576dd03fd->enter($__internal_b9252d451d89d1c5913c50aaa67035dd3ed16552fa525d30da0af98576dd03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_b9252d451d89d1c5913c50aaa67035dd3ed16552fa525d30da0af98576dd03fd->leave($__internal_b9252d451d89d1c5913c50aaa67035dd3ed16552fa525d30da0af98576dd03fd_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8867a35bebe36f8672228818b24872f572a7261cbc8f58ec8afbf76860f34ce6 = $this->env->getExtension("native_profiler");
        $__internal_8867a35bebe36f8672228818b24872f572a7261cbc8f58ec8afbf76860f34ce6->enter($__internal_8867a35bebe36f8672228818b24872f572a7261cbc8f58ec8afbf76860f34ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_8867a35bebe36f8672228818b24872f572a7261cbc8f58ec8afbf76860f34ce6->leave($__internal_8867a35bebe36f8672228818b24872f572a7261cbc8f58ec8afbf76860f34ce6_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5c0ca279ba4c4e166b3126deaaf542cd02b7401e1cdf97c36fb4252b7ef4121d = $this->env->getExtension("native_profiler");
        $__internal_5c0ca279ba4c4e166b3126deaaf542cd02b7401e1cdf97c36fb4252b7ef4121d->enter($__internal_5c0ca279ba4c4e166b3126deaaf542cd02b7401e1cdf97c36fb4252b7ef4121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5c0ca279ba4c4e166b3126deaaf542cd02b7401e1cdf97c36fb4252b7ef4121d->leave($__internal_5c0ca279ba4c4e166b3126deaaf542cd02b7401e1cdf97c36fb4252b7ef4121d_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_10528f7940e30dc336cbbbd96e604628fa453ed71311d29c3b5344d053adbf2b = $this->env->getExtension("native_profiler");
        $__internal_10528f7940e30dc336cbbbd96e604628fa453ed71311d29c3b5344d053adbf2b->enter($__internal_10528f7940e30dc336cbbbd96e604628fa453ed71311d29c3b5344d053adbf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_10528f7940e30dc336cbbbd96e604628fa453ed71311d29c3b5344d053adbf2b->leave($__internal_10528f7940e30dc336cbbbd96e604628fa453ed71311d29c3b5344d053adbf2b_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_70d35d786af402631b1f803d6bdf525ae424a88a7dd1035584d35e7f297b4a11 = $this->env->getExtension("native_profiler");
        $__internal_70d35d786af402631b1f803d6bdf525ae424a88a7dd1035584d35e7f297b4a11->enter($__internal_70d35d786af402631b1f803d6bdf525ae424a88a7dd1035584d35e7f297b4a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_70d35d786af402631b1f803d6bdf525ae424a88a7dd1035584d35e7f297b4a11->leave($__internal_70d35d786af402631b1f803d6bdf525ae424a88a7dd1035584d35e7f297b4a11_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_7ece18ad5b17d09ae2ab62063dd551e8aa065ff8edd8dbb67620935602650f9c = $this->env->getExtension("native_profiler");
        $__internal_7ece18ad5b17d09ae2ab62063dd551e8aa065ff8edd8dbb67620935602650f9c->enter($__internal_7ece18ad5b17d09ae2ab62063dd551e8aa065ff8edd8dbb67620935602650f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_7ece18ad5b17d09ae2ab62063dd551e8aa065ff8edd8dbb67620935602650f9c->leave($__internal_7ece18ad5b17d09ae2ab62063dd551e8aa065ff8edd8dbb67620935602650f9c_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_88dcd9f992ace21a381e704eacb4d8a6dcf157f922463dca8c55b940fce5b11a = $this->env->getExtension("native_profiler");
        $__internal_88dcd9f992ace21a381e704eacb4d8a6dcf157f922463dca8c55b940fce5b11a->enter($__internal_88dcd9f992ace21a381e704eacb4d8a6dcf157f922463dca8c55b940fce5b11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_88dcd9f992ace21a381e704eacb4d8a6dcf157f922463dca8c55b940fce5b11a->leave($__internal_88dcd9f992ace21a381e704eacb4d8a6dcf157f922463dca8c55b940fce5b11a_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_64ec6845f3dca4da0ceb11592e838d8e7fd7e63c9acf3050aa4ded7d592a17b4 = $this->env->getExtension("native_profiler");
        $__internal_64ec6845f3dca4da0ceb11592e838d8e7fd7e63c9acf3050aa4ded7d592a17b4->enter($__internal_64ec6845f3dca4da0ceb11592e838d8e7fd7e63c9acf3050aa4ded7d592a17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_64ec6845f3dca4da0ceb11592e838d8e7fd7e63c9acf3050aa4ded7d592a17b4->leave($__internal_64ec6845f3dca4da0ceb11592e838d8e7fd7e63c9acf3050aa4ded7d592a17b4_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_064ee69d48c440e35e352ca165fe88d6d47d1d4bf73ca19ea596c32e4419c917 = $this->env->getExtension("native_profiler");
        $__internal_064ee69d48c440e35e352ca165fe88d6d47d1d4bf73ca19ea596c32e4419c917->enter($__internal_064ee69d48c440e35e352ca165fe88d6d47d1d4bf73ca19ea596c32e4419c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_064ee69d48c440e35e352ca165fe88d6d47d1d4bf73ca19ea596c32e4419c917->leave($__internal_064ee69d48c440e35e352ca165fe88d6d47d1d4bf73ca19ea596c32e4419c917_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_27fdd25f781683343051e29d26ca6fb84e28b12b634051de9ae2b2fe0c6bf81a = $this->env->getExtension("native_profiler");
        $__internal_27fdd25f781683343051e29d26ca6fb84e28b12b634051de9ae2b2fe0c6bf81a->enter($__internal_27fdd25f781683343051e29d26ca6fb84e28b12b634051de9ae2b2fe0c6bf81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_27fdd25f781683343051e29d26ca6fb84e28b12b634051de9ae2b2fe0c6bf81a->leave($__internal_27fdd25f781683343051e29d26ca6fb84e28b12b634051de9ae2b2fe0c6bf81a_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_447dde35ebb0cd7aae44352874a8a212454601e8e2b4cafba1066b51bdc30ef8 = $this->env->getExtension("native_profiler");
        $__internal_447dde35ebb0cd7aae44352874a8a212454601e8e2b4cafba1066b51bdc30ef8->enter($__internal_447dde35ebb0cd7aae44352874a8a212454601e8e2b4cafba1066b51bdc30ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_447dde35ebb0cd7aae44352874a8a212454601e8e2b4cafba1066b51bdc30ef8->leave($__internal_447dde35ebb0cd7aae44352874a8a212454601e8e2b4cafba1066b51bdc30ef8_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_995d1b1c370e88c59fb2ce56d8d876e6ef9a7a7b5ee704974c036209ecfcd0c3 = $this->env->getExtension("native_profiler");
        $__internal_995d1b1c370e88c59fb2ce56d8d876e6ef9a7a7b5ee704974c036209ecfcd0c3->enter($__internal_995d1b1c370e88c59fb2ce56d8d876e6ef9a7a7b5ee704974c036209ecfcd0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_995d1b1c370e88c59fb2ce56d8d876e6ef9a7a7b5ee704974c036209ecfcd0c3->leave($__internal_995d1b1c370e88c59fb2ce56d8d876e6ef9a7a7b5ee704974c036209ecfcd0c3_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7d3759072c3c1633926866eb3c9974fc751084db62181cfc2b9d16d7101b8f23 = $this->env->getExtension("native_profiler");
        $__internal_7d3759072c3c1633926866eb3c9974fc751084db62181cfc2b9d16d7101b8f23->enter($__internal_7d3759072c3c1633926866eb3c9974fc751084db62181cfc2b9d16d7101b8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7d3759072c3c1633926866eb3c9974fc751084db62181cfc2b9d16d7101b8f23->leave($__internal_7d3759072c3c1633926866eb3c9974fc751084db62181cfc2b9d16d7101b8f23_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e51a6a45bf07ca90159ddbdf4266d182a75ba33b9475ac9093f3e0de5fa537d7 = $this->env->getExtension("native_profiler");
        $__internal_e51a6a45bf07ca90159ddbdf4266d182a75ba33b9475ac9093f3e0de5fa537d7->enter($__internal_e51a6a45bf07ca90159ddbdf4266d182a75ba33b9475ac9093f3e0de5fa537d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_e51a6a45bf07ca90159ddbdf4266d182a75ba33b9475ac9093f3e0de5fa537d7->leave($__internal_e51a6a45bf07ca90159ddbdf4266d182a75ba33b9475ac9093f3e0de5fa537d7_prof);

    }

    // line 262
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_45ced434c708d490fe116724889c6b919a5dceb8911429b37406afd06c19accf = $this->env->getExtension("native_profiler");
        $__internal_45ced434c708d490fe116724889c6b919a5dceb8911429b37406afd06c19accf->enter($__internal_45ced434c708d490fe116724889c6b919a5dceb8911429b37406afd06c19accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_45ced434c708d490fe116724889c6b919a5dceb8911429b37406afd06c19accf->leave($__internal_45ced434c708d490fe116724889c6b919a5dceb8911429b37406afd06c19accf_prof);

    }

    // line 272
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d8bce5789d2d8bfedfa6dcf516daaf564a78032b7c626071c456195e9a9c62fe = $this->env->getExtension("native_profiler");
        $__internal_d8bce5789d2d8bfedfa6dcf516daaf564a78032b7c626071c456195e9a9c62fe->enter($__internal_d8bce5789d2d8bfedfa6dcf516daaf564a78032b7c626071c456195e9a9c62fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 273
        $context["force_error"] = true;
        // line 274
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d8bce5789d2d8bfedfa6dcf516daaf564a78032b7c626071c456195e9a9c62fe->leave($__internal_d8bce5789d2d8bfedfa6dcf516daaf564a78032b7c626071c456195e9a9c62fe_prof);

    }

    // line 277
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ed1f4a75930501bf8683eb68993c787f0bf73bfa5dce0ed83f1a5bf0f0d95ad8 = $this->env->getExtension("native_profiler");
        $__internal_ed1f4a75930501bf8683eb68993c787f0bf73bfa5dce0ed83f1a5bf0f0d95ad8->enter($__internal_ed1f4a75930501bf8683eb68993c787f0bf73bfa5dce0ed83f1a5bf0f0d95ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 278
        $context["force_error"] = true;
        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ed1f4a75930501bf8683eb68993c787f0bf73bfa5dce0ed83f1a5bf0f0d95ad8->leave($__internal_ed1f4a75930501bf8683eb68993c787f0bf73bfa5dce0ed83f1a5bf0f0d95ad8_prof);

    }

    // line 282
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ce79f326e218c617565f5db5ad11420308bceb1cc64c1a89711a1af891f12ea6 = $this->env->getExtension("native_profiler");
        $__internal_ce79f326e218c617565f5db5ad11420308bceb1cc64c1a89711a1af891f12ea6->enter($__internal_ce79f326e218c617565f5db5ad11420308bceb1cc64c1a89711a1af891f12ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 283
        $context["force_error"] = true;
        // line 284
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ce79f326e218c617565f5db5ad11420308bceb1cc64c1a89711a1af891f12ea6->leave($__internal_ce79f326e218c617565f5db5ad11420308bceb1cc64c1a89711a1af891f12ea6_prof);

    }

    // line 287
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d8fc10177e45e5444f67c3fcfbe345da0a9907f1a20a0f00f9de01cbb21e2770 = $this->env->getExtension("native_profiler");
        $__internal_d8fc10177e45e5444f67c3fcfbe345da0a9907f1a20a0f00f9de01cbb21e2770->enter($__internal_d8fc10177e45e5444f67c3fcfbe345da0a9907f1a20a0f00f9de01cbb21e2770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 288
        $context["force_error"] = true;
        // line 289
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d8fc10177e45e5444f67c3fcfbe345da0a9907f1a20a0f00f9de01cbb21e2770->leave($__internal_d8fc10177e45e5444f67c3fcfbe345da0a9907f1a20a0f00f9de01cbb21e2770_prof);

    }

    // line 292
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4ed32dfa4746c84c5a7cf4b3238c79453162e4e452623e356d2052069fa98978 = $this->env->getExtension("native_profiler");
        $__internal_4ed32dfa4746c84c5a7cf4b3238c79453162e4e452623e356d2052069fa98978->enter($__internal_4ed32dfa4746c84c5a7cf4b3238c79453162e4e452623e356d2052069fa98978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4ed32dfa4746c84c5a7cf4b3238c79453162e4e452623e356d2052069fa98978->leave($__internal_4ed32dfa4746c84c5a7cf4b3238c79453162e4e452623e356d2052069fa98978_prof);

    }

    // line 301
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2146689a612f935856a6198e0b8861b911e769b1a760e91d043a9fa5cc7c2cd3 = $this->env->getExtension("native_profiler");
        $__internal_2146689a612f935856a6198e0b8861b911e769b1a760e91d043a9fa5cc7c2cd3->enter($__internal_2146689a612f935856a6198e0b8861b911e769b1a760e91d043a9fa5cc7c2cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_2146689a612f935856a6198e0b8861b911e769b1a760e91d043a9fa5cc7c2cd3->leave($__internal_2146689a612f935856a6198e0b8861b911e769b1a760e91d043a9fa5cc7c2cd3_prof);

    }

    // line 312
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_00e6a1080fc4f7511bc61b7a4620b7465716e523d7f0430b85f3fe3014d3dc7b = $this->env->getExtension("native_profiler");
        $__internal_00e6a1080fc4f7511bc61b7a4620b7465716e523d7f0430b85f3fe3014d3dc7b->enter($__internal_00e6a1080fc4f7511bc61b7a4620b7465716e523d7f0430b85f3fe3014d3dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_00e6a1080fc4f7511bc61b7a4620b7465716e523d7f0430b85f3fe3014d3dc7b->leave($__internal_00e6a1080fc4f7511bc61b7a4620b7465716e523d7f0430b85f3fe3014d3dc7b_prof);

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
