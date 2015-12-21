<?php

/* form-templates/bootstrap_3_layout.html.twig */
class __TwigTemplate_07641ed4342f5d2afe2f74bb2eef8857752967f7b0ebf4813c91482d6e8023b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form-templates/bootstrap_3_layout.html.twig", 1);
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
        $__internal_490f7d71421d4079832b71af84cb5e61216726e0a912b7aa9b2409a33023fbeb = $this->env->getExtension("native_profiler");
        $__internal_490f7d71421d4079832b71af84cb5e61216726e0a912b7aa9b2409a33023fbeb->enter($__internal_490f7d71421d4079832b71af84cb5e61216726e0a912b7aa9b2409a33023fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form-templates/bootstrap_3_layout.html.twig"));

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
        
        $__internal_490f7d71421d4079832b71af84cb5e61216726e0a912b7aa9b2409a33023fbeb->leave($__internal_490f7d71421d4079832b71af84cb5e61216726e0a912b7aa9b2409a33023fbeb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_057aac18706fdcaa2b685ef19131261eeadc3417adc290e970c88f8fb8631173 = $this->env->getExtension("native_profiler");
        $__internal_057aac18706fdcaa2b685ef19131261eeadc3417adc290e970c88f8fb8631173->enter($__internal_057aac18706fdcaa2b685ef19131261eeadc3417adc290e970c88f8fb8631173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_057aac18706fdcaa2b685ef19131261eeadc3417adc290e970c88f8fb8631173->leave($__internal_057aac18706fdcaa2b685ef19131261eeadc3417adc290e970c88f8fb8631173_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9a148e18dc0f40366ea3dd2b3fa811bccd088be17fc0573880ad0fa381473d4d = $this->env->getExtension("native_profiler");
        $__internal_9a148e18dc0f40366ea3dd2b3fa811bccd088be17fc0573880ad0fa381473d4d->enter($__internal_9a148e18dc0f40366ea3dd2b3fa811bccd088be17fc0573880ad0fa381473d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9a148e18dc0f40366ea3dd2b3fa811bccd088be17fc0573880ad0fa381473d4d->leave($__internal_9a148e18dc0f40366ea3dd2b3fa811bccd088be17fc0573880ad0fa381473d4d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_95f9f3a4fa38622b84a0178e4a2452a65c767fa87699e54cef7cf17823f8f67d = $this->env->getExtension("native_profiler");
        $__internal_95f9f3a4fa38622b84a0178e4a2452a65c767fa87699e54cef7cf17823f8f67d->enter($__internal_95f9f3a4fa38622b84a0178e4a2452a65c767fa87699e54cef7cf17823f8f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_95f9f3a4fa38622b84a0178e4a2452a65c767fa87699e54cef7cf17823f8f67d->leave($__internal_95f9f3a4fa38622b84a0178e4a2452a65c767fa87699e54cef7cf17823f8f67d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_edd315f4579b95f61fadba005b0eb1205ad24773d30293e8beab940f9ede49a8 = $this->env->getExtension("native_profiler");
        $__internal_edd315f4579b95f61fadba005b0eb1205ad24773d30293e8beab940f9ede49a8->enter($__internal_edd315f4579b95f61fadba005b0eb1205ad24773d30293e8beab940f9ede49a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_edd315f4579b95f61fadba005b0eb1205ad24773d30293e8beab940f9ede49a8->leave($__internal_edd315f4579b95f61fadba005b0eb1205ad24773d30293e8beab940f9ede49a8_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_485c5a31d03c9eeb900cf43fb4530f19976928ed03ea6cd9a6623581330aa2e3 = $this->env->getExtension("native_profiler");
        $__internal_485c5a31d03c9eeb900cf43fb4530f19976928ed03ea6cd9a6623581330aa2e3->enter($__internal_485c5a31d03c9eeb900cf43fb4530f19976928ed03ea6cd9a6623581330aa2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_485c5a31d03c9eeb900cf43fb4530f19976928ed03ea6cd9a6623581330aa2e3->leave($__internal_485c5a31d03c9eeb900cf43fb4530f19976928ed03ea6cd9a6623581330aa2e3_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_af7c4ee35836abbcc3ee8568cecca5f55f566c96524d9a21c7e9cf3ec66c5b70 = $this->env->getExtension("native_profiler");
        $__internal_af7c4ee35836abbcc3ee8568cecca5f55f566c96524d9a21c7e9cf3ec66c5b70->enter($__internal_af7c4ee35836abbcc3ee8568cecca5f55f566c96524d9a21c7e9cf3ec66c5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_af7c4ee35836abbcc3ee8568cecca5f55f566c96524d9a21c7e9cf3ec66c5b70->leave($__internal_af7c4ee35836abbcc3ee8568cecca5f55f566c96524d9a21c7e9cf3ec66c5b70_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_67bd78c7418845dbe4d8022444fe7b6c78e620e906887912d7447f009d689104 = $this->env->getExtension("native_profiler");
        $__internal_67bd78c7418845dbe4d8022444fe7b6c78e620e906887912d7447f009d689104->enter($__internal_67bd78c7418845dbe4d8022444fe7b6c78e620e906887912d7447f009d689104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_67bd78c7418845dbe4d8022444fe7b6c78e620e906887912d7447f009d689104->leave($__internal_67bd78c7418845dbe4d8022444fe7b6c78e620e906887912d7447f009d689104_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c6afa6b0ef53a743fa00e7f9e508c218d4acc8b7eb06402c31c6e7c5d0ff305d = $this->env->getExtension("native_profiler");
        $__internal_c6afa6b0ef53a743fa00e7f9e508c218d4acc8b7eb06402c31c6e7c5d0ff305d->enter($__internal_c6afa6b0ef53a743fa00e7f9e508c218d4acc8b7eb06402c31c6e7c5d0ff305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_c6afa6b0ef53a743fa00e7f9e508c218d4acc8b7eb06402c31c6e7c5d0ff305d->leave($__internal_c6afa6b0ef53a743fa00e7f9e508c218d4acc8b7eb06402c31c6e7c5d0ff305d_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a4b8c5bb008d1b92c7af2e89dde3bbe8c3cb6775ff7134adffcbdce3ccda2fe8 = $this->env->getExtension("native_profiler");
        $__internal_a4b8c5bb008d1b92c7af2e89dde3bbe8c3cb6775ff7134adffcbdce3ccda2fe8->enter($__internal_a4b8c5bb008d1b92c7af2e89dde3bbe8c3cb6775ff7134adffcbdce3ccda2fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a4b8c5bb008d1b92c7af2e89dde3bbe8c3cb6775ff7134adffcbdce3ccda2fe8->leave($__internal_a4b8c5bb008d1b92c7af2e89dde3bbe8c3cb6775ff7134adffcbdce3ccda2fe8_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4b9f94c246902e91760b386ae05b87a2a90e93cd5bae6dfd7fc61031e3fb551d = $this->env->getExtension("native_profiler");
        $__internal_4b9f94c246902e91760b386ae05b87a2a90e93cd5bae6dfd7fc61031e3fb551d->enter($__internal_4b9f94c246902e91760b386ae05b87a2a90e93cd5bae6dfd7fc61031e3fb551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_4b9f94c246902e91760b386ae05b87a2a90e93cd5bae6dfd7fc61031e3fb551d->leave($__internal_4b9f94c246902e91760b386ae05b87a2a90e93cd5bae6dfd7fc61031e3fb551d_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0707e751095611bb1db20027726e58809f27f57974bb3b4b617023658558e0af = $this->env->getExtension("native_profiler");
        $__internal_0707e751095611bb1db20027726e58809f27f57974bb3b4b617023658558e0af->enter($__internal_0707e751095611bb1db20027726e58809f27f57974bb3b4b617023658558e0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_0707e751095611bb1db20027726e58809f27f57974bb3b4b617023658558e0af->leave($__internal_0707e751095611bb1db20027726e58809f27f57974bb3b4b617023658558e0af_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0869fc06be4baaa5543e10c5a3899e55e3c6c74ceb66cd6b1ce37d08b8e64fc9 = $this->env->getExtension("native_profiler");
        $__internal_0869fc06be4baaa5543e10c5a3899e55e3c6c74ceb66cd6b1ce37d08b8e64fc9->enter($__internal_0869fc06be4baaa5543e10c5a3899e55e3c6c74ceb66cd6b1ce37d08b8e64fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0869fc06be4baaa5543e10c5a3899e55e3c6c74ceb66cd6b1ce37d08b8e64fc9->leave($__internal_0869fc06be4baaa5543e10c5a3899e55e3c6c74ceb66cd6b1ce37d08b8e64fc9_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_edeccbf8867da0c33ee36bb5887e7e505d2a42d47397dc85726109a37b76ed95 = $this->env->getExtension("native_profiler");
        $__internal_edeccbf8867da0c33ee36bb5887e7e505d2a42d47397dc85726109a37b76ed95->enter($__internal_edeccbf8867da0c33ee36bb5887e7e505d2a42d47397dc85726109a37b76ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_edeccbf8867da0c33ee36bb5887e7e505d2a42d47397dc85726109a37b76ed95->leave($__internal_edeccbf8867da0c33ee36bb5887e7e505d2a42d47397dc85726109a37b76ed95_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bd7129ce19dbd5458ee318e3d83985ae89c5a942ed75e58ec4e61974dbd9003f = $this->env->getExtension("native_profiler");
        $__internal_bd7129ce19dbd5458ee318e3d83985ae89c5a942ed75e58ec4e61974dbd9003f->enter($__internal_bd7129ce19dbd5458ee318e3d83985ae89c5a942ed75e58ec4e61974dbd9003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_bd7129ce19dbd5458ee318e3d83985ae89c5a942ed75e58ec4e61974dbd9003f->leave($__internal_bd7129ce19dbd5458ee318e3d83985ae89c5a942ed75e58ec4e61974dbd9003f_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_18daf1a2cc608ff16e4044c7940003f240b78019c4e3b519b8061722a92d3671 = $this->env->getExtension("native_profiler");
        $__internal_18daf1a2cc608ff16e4044c7940003f240b78019c4e3b519b8061722a92d3671->enter($__internal_18daf1a2cc608ff16e4044c7940003f240b78019c4e3b519b8061722a92d3671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_18daf1a2cc608ff16e4044c7940003f240b78019c4e3b519b8061722a92d3671->leave($__internal_18daf1a2cc608ff16e4044c7940003f240b78019c4e3b519b8061722a92d3671_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3b803316da6143350cd54851c17259e40053dc3626fa4c98f4210f80164e7ee5 = $this->env->getExtension("native_profiler");
        $__internal_3b803316da6143350cd54851c17259e40053dc3626fa4c98f4210f80164e7ee5->enter($__internal_3b803316da6143350cd54851c17259e40053dc3626fa4c98f4210f80164e7ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3b803316da6143350cd54851c17259e40053dc3626fa4c98f4210f80164e7ee5->leave($__internal_3b803316da6143350cd54851c17259e40053dc3626fa4c98f4210f80164e7ee5_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4f8071ca716b4497fab3dff6f153b8bf83f6d67aca91c99c785d8bae5acdb2a7 = $this->env->getExtension("native_profiler");
        $__internal_4f8071ca716b4497fab3dff6f153b8bf83f6d67aca91c99c785d8bae5acdb2a7->enter($__internal_4f8071ca716b4497fab3dff6f153b8bf83f6d67aca91c99c785d8bae5acdb2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4f8071ca716b4497fab3dff6f153b8bf83f6d67aca91c99c785d8bae5acdb2a7->leave($__internal_4f8071ca716b4497fab3dff6f153b8bf83f6d67aca91c99c785d8bae5acdb2a7_prof);

    }

    // line 180
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85b81530bb099c87a9ba12f38592a8a0ba3390df2a15170a696f162014a59b77 = $this->env->getExtension("native_profiler");
        $__internal_85b81530bb099c87a9ba12f38592a8a0ba3390df2a15170a696f162014a59b77->enter($__internal_85b81530bb099c87a9ba12f38592a8a0ba3390df2a15170a696f162014a59b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_85b81530bb099c87a9ba12f38592a8a0ba3390df2a15170a696f162014a59b77->leave($__internal_85b81530bb099c87a9ba12f38592a8a0ba3390df2a15170a696f162014a59b77_prof);

    }

    // line 188
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4b0de49fc3579283ea65623e83fe6cea5879e01d09c3d38e6474d693a828f296 = $this->env->getExtension("native_profiler");
        $__internal_4b0de49fc3579283ea65623e83fe6cea5879e01d09c3d38e6474d693a828f296->enter($__internal_4b0de49fc3579283ea65623e83fe6cea5879e01d09c3d38e6474d693a828f296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 189
        echo "<div class=\"form-group\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 191
        echo "</div>";
        
        $__internal_4b0de49fc3579283ea65623e83fe6cea5879e01d09c3d38e6474d693a828f296->leave($__internal_4b0de49fc3579283ea65623e83fe6cea5879e01d09c3d38e6474d693a828f296_prof);

    }

    // line 194
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1f5cc2d3ce1ed11d734e5c34069d5fcbd1ec95c571df5ba991af302f441ba29a = $this->env->getExtension("native_profiler");
        $__internal_1f5cc2d3ce1ed11d734e5c34069d5fcbd1ec95c571df5ba991af302f441ba29a->enter($__internal_1f5cc2d3ce1ed11d734e5c34069d5fcbd1ec95c571df5ba991af302f441ba29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f5cc2d3ce1ed11d734e5c34069d5fcbd1ec95c571df5ba991af302f441ba29a->leave($__internal_1f5cc2d3ce1ed11d734e5c34069d5fcbd1ec95c571df5ba991af302f441ba29a_prof);

    }

    // line 199
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_22162c2ebedd7552af1e85c985a03417230754c06952c2a443c63f2a52921495 = $this->env->getExtension("native_profiler");
        $__internal_22162c2ebedd7552af1e85c985a03417230754c06952c2a443c63f2a52921495->enter($__internal_22162c2ebedd7552af1e85c985a03417230754c06952c2a443c63f2a52921495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_22162c2ebedd7552af1e85c985a03417230754c06952c2a443c63f2a52921495->leave($__internal_22162c2ebedd7552af1e85c985a03417230754c06952c2a443c63f2a52921495_prof);

    }

    // line 204
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_00cd9d3be68b96029ae3f9f12eeedd03ceeb4dad264c55975efc9912f9c7d373 = $this->env->getExtension("native_profiler");
        $__internal_00cd9d3be68b96029ae3f9f12eeedd03ceeb4dad264c55975efc9912f9c7d373->enter($__internal_00cd9d3be68b96029ae3f9f12eeedd03ceeb4dad264c55975efc9912f9c7d373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_00cd9d3be68b96029ae3f9f12eeedd03ceeb4dad264c55975efc9912f9c7d373->leave($__internal_00cd9d3be68b96029ae3f9f12eeedd03ceeb4dad264c55975efc9912f9c7d373_prof);

    }

    // line 209
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6d5c1a1dd93df4a2838692ddbf2da1c680dcbacdc13a8b04a3b3024fc6abfbde = $this->env->getExtension("native_profiler");
        $__internal_6d5c1a1dd93df4a2838692ddbf2da1c680dcbacdc13a8b04a3b3024fc6abfbde->enter($__internal_6d5c1a1dd93df4a2838692ddbf2da1c680dcbacdc13a8b04a3b3024fc6abfbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6d5c1a1dd93df4a2838692ddbf2da1c680dcbacdc13a8b04a3b3024fc6abfbde->leave($__internal_6d5c1a1dd93df4a2838692ddbf2da1c680dcbacdc13a8b04a3b3024fc6abfbde_prof);

    }

    // line 214
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5e79bebcb54b8fd0c176631eea76c6dd02a5f8394358bb558f3a159e87ec749b = $this->env->getExtension("native_profiler");
        $__internal_5e79bebcb54b8fd0c176631eea76c6dd02a5f8394358bb558f3a159e87ec749b->enter($__internal_5e79bebcb54b8fd0c176631eea76c6dd02a5f8394358bb558f3a159e87ec749b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5e79bebcb54b8fd0c176631eea76c6dd02a5f8394358bb558f3a159e87ec749b->leave($__internal_5e79bebcb54b8fd0c176631eea76c6dd02a5f8394358bb558f3a159e87ec749b_prof);

    }

    // line 221
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_362be8abdc4ef61032085a24e3a5e06a98a8096403c8bc746566167e2c1c9bd0 = $this->env->getExtension("native_profiler");
        $__internal_362be8abdc4ef61032085a24e3a5e06a98a8096403c8bc746566167e2c1c9bd0->enter($__internal_362be8abdc4ef61032085a24e3a5e06a98a8096403c8bc746566167e2c1c9bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_362be8abdc4ef61032085a24e3a5e06a98a8096403c8bc746566167e2c1c9bd0->leave($__internal_362be8abdc4ef61032085a24e3a5e06a98a8096403c8bc746566167e2c1c9bd0_prof);

    }

    // line 230
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a39f482ce20230c5dad085ccdbcb901e9d6ea086a71762756aa6060e073f5e29 = $this->env->getExtension("native_profiler");
        $__internal_a39f482ce20230c5dad085ccdbcb901e9d6ea086a71762756aa6060e073f5e29->enter($__internal_a39f482ce20230c5dad085ccdbcb901e9d6ea086a71762756aa6060e073f5e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_a39f482ce20230c5dad085ccdbcb901e9d6ea086a71762756aa6060e073f5e29->leave($__internal_a39f482ce20230c5dad085ccdbcb901e9d6ea086a71762756aa6060e073f5e29_prof);

    }

    public function getTemplateName()
    {
        return "form-templates/bootstrap_3_layout.html.twig";
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
