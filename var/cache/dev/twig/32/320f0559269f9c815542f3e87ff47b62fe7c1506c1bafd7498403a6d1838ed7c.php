<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_efb6422ffd1b90febc72083f64ce7aa27ab86610e31d827ae389d836eb2a33a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2358340391cf7881aad7895a7a987831f31e91ed67e1edca3117b80258cf639d = $this->env->getExtension("native_profiler");
        $__internal_2358340391cf7881aad7895a7a987831f31e91ed67e1edca3117b80258cf639d->enter($__internal_2358340391cf7881aad7895a7a987831f31e91ed67e1edca3117b80258cf639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 177
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('form_row', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('button_row', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('choice_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('date_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('time_row', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('radio_row', $context, $blocks);
        // line 227
        echo "
";
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2358340391cf7881aad7895a7a987831f31e91ed67e1edca3117b80258cf639d->leave($__internal_2358340391cf7881aad7895a7a987831f31e91ed67e1edca3117b80258cf639d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7b399e1393b7cc290d51d0bb333ff52b4331ec892f723200a259cf76e8f52efb = $this->env->getExtension("native_profiler");
        $__internal_7b399e1393b7cc290d51d0bb333ff52b4331ec892f723200a259cf76e8f52efb->enter($__internal_7b399e1393b7cc290d51d0bb333ff52b4331ec892f723200a259cf76e8f52efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7b399e1393b7cc290d51d0bb333ff52b4331ec892f723200a259cf76e8f52efb->leave($__internal_7b399e1393b7cc290d51d0bb333ff52b4331ec892f723200a259cf76e8f52efb_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c33fee7cf7609e25617c2283a3dec03a0144774669e7716802e40564c6a9c769 = $this->env->getExtension("native_profiler");
        $__internal_c33fee7cf7609e25617c2283a3dec03a0144774669e7716802e40564c6a9c769->enter($__internal_c33fee7cf7609e25617c2283a3dec03a0144774669e7716802e40564c6a9c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c33fee7cf7609e25617c2283a3dec03a0144774669e7716802e40564c6a9c769->leave($__internal_c33fee7cf7609e25617c2283a3dec03a0144774669e7716802e40564c6a9c769_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7d7f4386d4f67a9d4791a790a1b0220ddbb2c4c6e62204e7f7f8d1d7bfb0137d = $this->env->getExtension("native_profiler");
        $__internal_7d7f4386d4f67a9d4791a790a1b0220ddbb2c4c6e62204e7f7f8d1d7bfb0137d->enter($__internal_7d7f4386d4f67a9d4791a790a1b0220ddbb2c4c6e62204e7f7f8d1d7bfb0137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7d7f4386d4f67a9d4791a790a1b0220ddbb2c4c6e62204e7f7f8d1d7bfb0137d->leave($__internal_7d7f4386d4f67a9d4791a790a1b0220ddbb2c4c6e62204e7f7f8d1d7bfb0137d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e93d15c304abadd19f60c14005c85e45e3ceb70fd9d9d6dd5711b86d62f5f1e9 = $this->env->getExtension("native_profiler");
        $__internal_e93d15c304abadd19f60c14005c85e45e3ceb70fd9d9d6dd5711b86d62f5f1e9->enter($__internal_e93d15c304abadd19f60c14005c85e45e3ceb70fd9d9d6dd5711b86d62f5f1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_e93d15c304abadd19f60c14005c85e45e3ceb70fd9d9d6dd5711b86d62f5f1e9->leave($__internal_e93d15c304abadd19f60c14005c85e45e3ceb70fd9d9d6dd5711b86d62f5f1e9_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_60c13b16042df0bad4136d2636947ebf471d525bd2ca27167a3564e87b978415 = $this->env->getExtension("native_profiler");
        $__internal_60c13b16042df0bad4136d2636947ebf471d525bd2ca27167a3564e87b978415->enter($__internal_60c13b16042df0bad4136d2636947ebf471d525bd2ca27167a3564e87b978415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_60c13b16042df0bad4136d2636947ebf471d525bd2ca27167a3564e87b978415->leave($__internal_60c13b16042df0bad4136d2636947ebf471d525bd2ca27167a3564e87b978415_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ce6f6bf60f4fd615d2b59f8d162f7543044ecb925c69aca8be19b5dc6b9a1f0e = $this->env->getExtension("native_profiler");
        $__internal_ce6f6bf60f4fd615d2b59f8d162f7543044ecb925c69aca8be19b5dc6b9a1f0e->enter($__internal_ce6f6bf60f4fd615d2b59f8d162f7543044ecb925c69aca8be19b5dc6b9a1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_ce6f6bf60f4fd615d2b59f8d162f7543044ecb925c69aca8be19b5dc6b9a1f0e->leave($__internal_ce6f6bf60f4fd615d2b59f8d162f7543044ecb925c69aca8be19b5dc6b9a1f0e_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_209a6ee064cb99a334d738c56d0f0f6a66be009b50fa1ba399f58eacbdf80750 = $this->env->getExtension("native_profiler");
        $__internal_209a6ee064cb99a334d738c56d0f0f6a66be009b50fa1ba399f58eacbdf80750->enter($__internal_209a6ee064cb99a334d738c56d0f0f6a66be009b50fa1ba399f58eacbdf80750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_209a6ee064cb99a334d738c56d0f0f6a66be009b50fa1ba399f58eacbdf80750->leave($__internal_209a6ee064cb99a334d738c56d0f0f6a66be009b50fa1ba399f58eacbdf80750_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8c38c0e81852ef94a409faa72fb366239e369252c55344eff807c407b081a202 = $this->env->getExtension("native_profiler");
        $__internal_8c38c0e81852ef94a409faa72fb366239e369252c55344eff807c407b081a202->enter($__internal_8c38c0e81852ef94a409faa72fb366239e369252c55344eff807c407b081a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_8c38c0e81852ef94a409faa72fb366239e369252c55344eff807c407b081a202->leave($__internal_8c38c0e81852ef94a409faa72fb366239e369252c55344eff807c407b081a202_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a930f7281a94461bae84faac64bec005fd896f0d8b1c18549d8d7017182f233d = $this->env->getExtension("native_profiler");
        $__internal_a930f7281a94461bae84faac64bec005fd896f0d8b1c18549d8d7017182f233d->enter($__internal_a930f7281a94461bae84faac64bec005fd896f0d8b1c18549d8d7017182f233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a930f7281a94461bae84faac64bec005fd896f0d8b1c18549d8d7017182f233d->leave($__internal_a930f7281a94461bae84faac64bec005fd896f0d8b1c18549d8d7017182f233d_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d327357af79d3222dc1815f99d9131e7a969253e2b2d0b5b3d60f2e93ef70346 = $this->env->getExtension("native_profiler");
        $__internal_d327357af79d3222dc1815f99d9131e7a969253e2b2d0b5b3d60f2e93ef70346->enter($__internal_d327357af79d3222dc1815f99d9131e7a969253e2b2d0b5b3d60f2e93ef70346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</div>";
        } else {
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 109
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 110
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "</div>";
        }
        
        $__internal_d327357af79d3222dc1815f99d9131e7a969253e2b2d0b5b3d60f2e93ef70346->leave($__internal_d327357af79d3222dc1815f99d9131e7a969253e2b2d0b5b3d60f2e93ef70346_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f8fb981def09589cedbc8982de6d1211335f395d846498cedd5475fe8e4e3c99 = $this->env->getExtension("native_profiler");
        $__internal_f8fb981def09589cedbc8982de6d1211335f395d846498cedd5475fe8e4e3c99->enter($__internal_f8fb981def09589cedbc8982de6d1211335f395d846498cedd5475fe8e4e3c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 118
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 122
            echo "<div class=\"checkbox\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 124
            echo "</div>";
        }
        
        $__internal_f8fb981def09589cedbc8982de6d1211335f395d846498cedd5475fe8e4e3c99->leave($__internal_f8fb981def09589cedbc8982de6d1211335f395d846498cedd5475fe8e4e3c99_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_551ad8e2bce9b514b944bf1915ab4340ee0fd0d1ba0293283210a202e8331866 = $this->env->getExtension("native_profiler");
        $__internal_551ad8e2bce9b514b944bf1915ab4340ee0fd0d1ba0293283210a202e8331866->enter($__internal_551ad8e2bce9b514b944bf1915ab4340ee0fd0d1ba0293283210a202e8331866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_551ad8e2bce9b514b944bf1915ab4340ee0fd0d1ba0293283210a202e8331866->leave($__internal_551ad8e2bce9b514b944bf1915ab4340ee0fd0d1ba0293283210a202e8331866_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7974bf12cf7119cb35bb043391e7d622d9ed736fbf44cda3eaf7d9dc2090b31b = $this->env->getExtension("native_profiler");
        $__internal_7974bf12cf7119cb35bb043391e7d622d9ed736fbf44cda3eaf7d9dc2090b31b->enter($__internal_7974bf12cf7119cb35bb043391e7d622d9ed736fbf44cda3eaf7d9dc2090b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7974bf12cf7119cb35bb043391e7d622d9ed736fbf44cda3eaf7d9dc2090b31b->leave($__internal_7974bf12cf7119cb35bb043391e7d622d9ed736fbf44cda3eaf7d9dc2090b31b_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1a7bf71dfe9957f50e2768bb2bb6b49990f2747bb6d646d1aa787535787d1622 = $this->env->getExtension("native_profiler");
        $__internal_1a7bf71dfe9957f50e2768bb2bb6b49990f2747bb6d646d1aa787535787d1622->enter($__internal_1a7bf71dfe9957f50e2768bb2bb6b49990f2747bb6d646d1aa787535787d1622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1a7bf71dfe9957f50e2768bb2bb6b49990f2747bb6d646d1aa787535787d1622->leave($__internal_1a7bf71dfe9957f50e2768bb2bb6b49990f2747bb6d646d1aa787535787d1622_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_96b8e59864683e52e10dc7a1b65e8a73d44eac64156f812d91aff82b1d2acd08 = $this->env->getExtension("native_profiler");
        $__internal_96b8e59864683e52e10dc7a1b65e8a73d44eac64156f812d91aff82b1d2acd08->enter($__internal_96b8e59864683e52e10dc7a1b65e8a73d44eac64156f812d91aff82b1d2acd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_96b8e59864683e52e10dc7a1b65e8a73d44eac64156f812d91aff82b1d2acd08->leave($__internal_96b8e59864683e52e10dc7a1b65e8a73d44eac64156f812d91aff82b1d2acd08_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5b06e1a451f8349736bd3cc70e8a9256649fa77dfdb7797591f13e1503397503 = $this->env->getExtension("native_profiler");
        $__internal_5b06e1a451f8349736bd3cc70e8a9256649fa77dfdb7797591f13e1503397503->enter($__internal_5b06e1a451f8349736bd3cc70e8a9256649fa77dfdb7797591f13e1503397503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5b06e1a451f8349736bd3cc70e8a9256649fa77dfdb7797591f13e1503397503->leave($__internal_5b06e1a451f8349736bd3cc70e8a9256649fa77dfdb7797591f13e1503397503_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f2643ef6ba2d5f00750d4b569d420131535b0027bd3f93cb89c42be9abe90b64 = $this->env->getExtension("native_profiler");
        $__internal_f2643ef6ba2d5f00750d4b569d420131535b0027bd3f93cb89c42be9abe90b64->enter($__internal_f2643ef6ba2d5f00750d4b569d420131535b0027bd3f93cb89c42be9abe90b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 170
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 171
                echo "        ";
            }
            // line 172
            echo "        <label";
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
            echo ">";
            // line 173
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_f2643ef6ba2d5f00750d4b569d420131535b0027bd3f93cb89c42be9abe90b64->leave($__internal_f2643ef6ba2d5f00750d4b569d420131535b0027bd3f93cb89c42be9abe90b64_prof);

    }

    // line 180
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_91923478d3bc537488f4370cad974a7d3ac1c53f958d0296fc56a9ecbaa135d8 = $this->env->getExtension("native_profiler");
        $__internal_91923478d3bc537488f4370cad974a7d3ac1c53f958d0296fc56a9ecbaa135d8->enter($__internal_91923478d3bc537488f4370cad974a7d3ac1c53f958d0296fc56a9ecbaa135d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 181
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 185
        echo "</div>";
        
        $__internal_91923478d3bc537488f4370cad974a7d3ac1c53f958d0296fc56a9ecbaa135d8->leave($__internal_91923478d3bc537488f4370cad974a7d3ac1c53f958d0296fc56a9ecbaa135d8_prof);

    }

    // line 188
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_029acd14748e78a0b485279fbdfe61a1bf1108978c4b782974e701094ace34ae = $this->env->getExtension("native_profiler");
        $__internal_029acd14748e78a0b485279fbdfe61a1bf1108978c4b782974e701094ace34ae->enter($__internal_029acd14748e78a0b485279fbdfe61a1bf1108978c4b782974e701094ace34ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 189
        echo "<div class=\"form-group\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 191
        echo "</div>";
        
        $__internal_029acd14748e78a0b485279fbdfe61a1bf1108978c4b782974e701094ace34ae->leave($__internal_029acd14748e78a0b485279fbdfe61a1bf1108978c4b782974e701094ace34ae_prof);

    }

    // line 194
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_216cab30030eb0dc0837e7b69a5378670084ead7e0685d3c631d09083c2a4f66 = $this->env->getExtension("native_profiler");
        $__internal_216cab30030eb0dc0837e7b69a5378670084ead7e0685d3c631d09083c2a4f66->enter($__internal_216cab30030eb0dc0837e7b69a5378670084ead7e0685d3c631d09083c2a4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_216cab30030eb0dc0837e7b69a5378670084ead7e0685d3c631d09083c2a4f66->leave($__internal_216cab30030eb0dc0837e7b69a5378670084ead7e0685d3c631d09083c2a4f66_prof);

    }

    // line 199
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a2808dc6efcea64d1eb14dbe46eac95cd10962ffcf13e4ebe052e047098a6f1d = $this->env->getExtension("native_profiler");
        $__internal_a2808dc6efcea64d1eb14dbe46eac95cd10962ffcf13e4ebe052e047098a6f1d->enter($__internal_a2808dc6efcea64d1eb14dbe46eac95cd10962ffcf13e4ebe052e047098a6f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a2808dc6efcea64d1eb14dbe46eac95cd10962ffcf13e4ebe052e047098a6f1d->leave($__internal_a2808dc6efcea64d1eb14dbe46eac95cd10962ffcf13e4ebe052e047098a6f1d_prof);

    }

    // line 204
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1af0cd0acf49161033d0f69b65588bd5684eeba02e32e19ca33752daffcb1332 = $this->env->getExtension("native_profiler");
        $__internal_1af0cd0acf49161033d0f69b65588bd5684eeba02e32e19ca33752daffcb1332->enter($__internal_1af0cd0acf49161033d0f69b65588bd5684eeba02e32e19ca33752daffcb1332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1af0cd0acf49161033d0f69b65588bd5684eeba02e32e19ca33752daffcb1332->leave($__internal_1af0cd0acf49161033d0f69b65588bd5684eeba02e32e19ca33752daffcb1332_prof);

    }

    // line 209
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e81ff233a2b34a60746a5f7857d4d4fd469b03f4a560ae2754978522890c77d4 = $this->env->getExtension("native_profiler");
        $__internal_e81ff233a2b34a60746a5f7857d4d4fd469b03f4a560ae2754978522890c77d4->enter($__internal_e81ff233a2b34a60746a5f7857d4d4fd469b03f4a560ae2754978522890c77d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e81ff233a2b34a60746a5f7857d4d4fd469b03f4a560ae2754978522890c77d4->leave($__internal_e81ff233a2b34a60746a5f7857d4d4fd469b03f4a560ae2754978522890c77d4_prof);

    }

    // line 214
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_463da4f3d629fedb6622af7b2f879cbfd2df9564436584ceb44941dd151cf788 = $this->env->getExtension("native_profiler");
        $__internal_463da4f3d629fedb6622af7b2f879cbfd2df9564436584ceb44941dd151cf788->enter($__internal_463da4f3d629fedb6622af7b2f879cbfd2df9564436584ceb44941dd151cf788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 215
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 218
        echo "</div>";
        
        $__internal_463da4f3d629fedb6622af7b2f879cbfd2df9564436584ceb44941dd151cf788->leave($__internal_463da4f3d629fedb6622af7b2f879cbfd2df9564436584ceb44941dd151cf788_prof);

    }

    // line 221
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_495df4bab4b78c99c775e214cb7dbf972693dbe334caa26ea970336da156583d = $this->env->getExtension("native_profiler");
        $__internal_495df4bab4b78c99c775e214cb7dbf972693dbe334caa26ea970336da156583d->enter($__internal_495df4bab4b78c99c775e214cb7dbf972693dbe334caa26ea970336da156583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 222
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 225
        echo "</div>";
        
        $__internal_495df4bab4b78c99c775e214cb7dbf972693dbe334caa26ea970336da156583d->leave($__internal_495df4bab4b78c99c775e214cb7dbf972693dbe334caa26ea970336da156583d_prof);

    }

    // line 230
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d208ed3c8753b1a25306b92d79c6b5d01f96761aa8a28f412135a3c4c011c880 = $this->env->getExtension("native_profiler");
        $__internal_d208ed3c8753b1a25306b92d79c6b5d01f96761aa8a28f412135a3c4c011c880->enter($__internal_d208ed3c8753b1a25306b92d79c6b5d01f96761aa8a28f412135a3c4c011c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 231
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 232
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 233
            echo "    <ul class=\"list-unstyled\">";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 235
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "</ul>
    ";
            // line 238
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d208ed3c8753b1a25306b92d79c6b5d01f96761aa8a28f412135a3c4c011c880->leave($__internal_d208ed3c8753b1a25306b92d79c6b5d01f96761aa8a28f412135a3c4c011c880_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  836 => 238,  833 => 237,  825 => 235,  821 => 234,  819 => 233,  813 => 232,  811 => 231,  805 => 230,  798 => 225,  796 => 224,  794 => 223,  788 => 222,  782 => 221,  775 => 218,  773 => 217,  771 => 216,  765 => 215,  759 => 214,  752 => 211,  750 => 210,  744 => 209,  737 => 206,  735 => 205,  729 => 204,  722 => 201,  720 => 200,  714 => 199,  707 => 196,  705 => 195,  699 => 194,  692 => 191,  690 => 190,  688 => 189,  682 => 188,  675 => 185,  673 => 184,  671 => 183,  669 => 182,  663 => 181,  657 => 180,  648 => 174,  644 => 173,  629 => 172,  626 => 171,  623 => 170,  620 => 169,  617 => 168,  614 => 167,  611 => 166,  608 => 165,  605 => 164,  602 => 163,  599 => 162,  597 => 161,  591 => 160,  584 => 157,  578 => 156,  571 => 153,  565 => 152,  558 => 149,  556 => 148,  550 => 146,  543 => 143,  541 => 142,  535 => 141,  527 => 135,  525 => 134,  523 => 133,  520 => 131,  518 => 130,  516 => 129,  510 => 128,  502 => 124,  500 => 123,  498 => 122,  495 => 120,  493 => 119,  491 => 118,  485 => 117,  477 => 113,  471 => 110,  470 => 109,  469 => 108,  465 => 107,  461 => 106,  458 => 104,  452 => 101,  451 => 100,  450 => 99,  446 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 230,  197 => 229,  194 => 227,  192 => 221,  189 => 220,  187 => 214,  184 => 213,  182 => 209,  179 => 208,  177 => 204,  174 => 203,  172 => 199,  169 => 198,  167 => 194,  164 => 193,  162 => 188,  159 => 187,  157 => 180,  154 => 179,  151 => 177,  149 => 160,  146 => 159,  144 => 156,  141 => 155,  139 => 152,  136 => 151,  134 => 146,  131 => 145,  129 => 141,  126 => 140,  123 => 138,  121 => 128,  118 => 127,  116 => 117,  113 => 116,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or 'file' != type %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*     {% if form.parent %}<span class="help-block">{% else %}<div class="alert alert-danger">{% endif %}*/
/*     <ul class="list-unstyled">*/
/*         {%- for error in errors -%}*/
/*             <li><span class="glyphicon glyphicon-exclamation-sign"></span> {{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
