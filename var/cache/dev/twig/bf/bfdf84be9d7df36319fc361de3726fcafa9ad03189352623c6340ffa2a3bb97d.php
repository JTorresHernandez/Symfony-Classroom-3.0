<?php

/* form_div_layout.html.twig */
class __TwigTemplate_042cc16d8babd12485eef0254e82b550c2a2a530153840ae21b33b6d45f14c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a6230a1aef1b294dd1597f02901eec96bb42716c62e81ac8264b0d4ec00c65 = $this->env->getExtension("native_profiler");
        $__internal_e8a6230a1aef1b294dd1597f02901eec96bb42716c62e81ac8264b0d4ec00c65->enter($__internal_e8a6230a1aef1b294dd1597f02901eec96bb42716c62e81ac8264b0d4ec00c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_errors', $context, $blocks);
        // line 300
        $this->displayBlock('form_rest', $context, $blocks);
        // line 307
        echo "
";
        // line 310
        $this->displayBlock('form_rows', $context, $blocks);
        // line 316
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_e8a6230a1aef1b294dd1597f02901eec96bb42716c62e81ac8264b0d4ec00c65->leave($__internal_e8a6230a1aef1b294dd1597f02901eec96bb42716c62e81ac8264b0d4ec00c65_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_952e173746656541b86042ee5c60c80b07e77b0d2242d30fbf7eaf43d46dc960 = $this->env->getExtension("native_profiler");
        $__internal_952e173746656541b86042ee5c60c80b07e77b0d2242d30fbf7eaf43d46dc960->enter($__internal_952e173746656541b86042ee5c60c80b07e77b0d2242d30fbf7eaf43d46dc960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_952e173746656541b86042ee5c60c80b07e77b0d2242d30fbf7eaf43d46dc960->leave($__internal_952e173746656541b86042ee5c60c80b07e77b0d2242d30fbf7eaf43d46dc960_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0b96423893e56aeb3c8c361e324e612d9aececafb8b48720e6086fa101684654 = $this->env->getExtension("native_profiler");
        $__internal_0b96423893e56aeb3c8c361e324e612d9aececafb8b48720e6086fa101684654->enter($__internal_0b96423893e56aeb3c8c361e324e612d9aececafb8b48720e6086fa101684654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_0b96423893e56aeb3c8c361e324e612d9aececafb8b48720e6086fa101684654->leave($__internal_0b96423893e56aeb3c8c361e324e612d9aececafb8b48720e6086fa101684654_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_45c035556268cb8323752a94ce71b75d6712e8658aa46dfd4d4c33fda50a1656 = $this->env->getExtension("native_profiler");
        $__internal_45c035556268cb8323752a94ce71b75d6712e8658aa46dfd4d4c33fda50a1656->enter($__internal_45c035556268cb8323752a94ce71b75d6712e8658aa46dfd4d4c33fda50a1656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_45c035556268cb8323752a94ce71b75d6712e8658aa46dfd4d4c33fda50a1656->leave($__internal_45c035556268cb8323752a94ce71b75d6712e8658aa46dfd4d4c33fda50a1656_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_6ec252249fb0a29741e123e189bb80a67b4a346ea3a14b5859038e7011c22cd3 = $this->env->getExtension("native_profiler");
        $__internal_6ec252249fb0a29741e123e189bb80a67b4a346ea3a14b5859038e7011c22cd3->enter($__internal_6ec252249fb0a29741e123e189bb80a67b4a346ea3a14b5859038e7011c22cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_6ec252249fb0a29741e123e189bb80a67b4a346ea3a14b5859038e7011c22cd3->leave($__internal_6ec252249fb0a29741e123e189bb80a67b4a346ea3a14b5859038e7011c22cd3_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b5dfe1d85d21f660e75665ae83bfc51f67593aaf1458bc11bf1bb358497e3eaf = $this->env->getExtension("native_profiler");
        $__internal_b5dfe1d85d21f660e75665ae83bfc51f67593aaf1458bc11bf1bb358497e3eaf->enter($__internal_b5dfe1d85d21f660e75665ae83bfc51f67593aaf1458bc11bf1bb358497e3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_b5dfe1d85d21f660e75665ae83bfc51f67593aaf1458bc11bf1bb358497e3eaf->leave($__internal_b5dfe1d85d21f660e75665ae83bfc51f67593aaf1458bc11bf1bb358497e3eaf_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_16c16543b3c13f4eb9149cac897723e155fd7e6b943c88a887d55754c2c6cb19 = $this->env->getExtension("native_profiler");
        $__internal_16c16543b3c13f4eb9149cac897723e155fd7e6b943c88a887d55754c2c6cb19->enter($__internal_16c16543b3c13f4eb9149cac897723e155fd7e6b943c88a887d55754c2c6cb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_16c16543b3c13f4eb9149cac897723e155fd7e6b943c88a887d55754c2c6cb19->leave($__internal_16c16543b3c13f4eb9149cac897723e155fd7e6b943c88a887d55754c2c6cb19_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_74503a8846c9386b4b0a8ed83939a10e324330f9961ebf873ba229e7fa3b8efd = $this->env->getExtension("native_profiler");
        $__internal_74503a8846c9386b4b0a8ed83939a10e324330f9961ebf873ba229e7fa3b8efd->enter($__internal_74503a8846c9386b4b0a8ed83939a10e324330f9961ebf873ba229e7fa3b8efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_74503a8846c9386b4b0a8ed83939a10e324330f9961ebf873ba229e7fa3b8efd->leave($__internal_74503a8846c9386b4b0a8ed83939a10e324330f9961ebf873ba229e7fa3b8efd_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3ce5c29a50f2a032f954add33acda7a03738221e78dc2313a1ce2587ace22376 = $this->env->getExtension("native_profiler");
        $__internal_3ce5c29a50f2a032f954add33acda7a03738221e78dc2313a1ce2587ace22376->enter($__internal_3ce5c29a50f2a032f954add33acda7a03738221e78dc2313a1ce2587ace22376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_3ce5c29a50f2a032f954add33acda7a03738221e78dc2313a1ce2587ace22376->leave($__internal_3ce5c29a50f2a032f954add33acda7a03738221e78dc2313a1ce2587ace22376_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_6358aa0d5ce137e75b52b17b552fd96b182ff25847491c906ee15ea835a5c13a = $this->env->getExtension("native_profiler");
        $__internal_6358aa0d5ce137e75b52b17b552fd96b182ff25847491c906ee15ea835a5c13a->enter($__internal_6358aa0d5ce137e75b52b17b552fd96b182ff25847491c906ee15ea835a5c13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6358aa0d5ce137e75b52b17b552fd96b182ff25847491c906ee15ea835a5c13a->leave($__internal_6358aa0d5ce137e75b52b17b552fd96b182ff25847491c906ee15ea835a5c13a_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_172f59a92ed7d44bd2d5c19ef662a2efad0f0083c125e50a18913485b6b56443 = $this->env->getExtension("native_profiler");
        $__internal_172f59a92ed7d44bd2d5c19ef662a2efad0f0083c125e50a18913485b6b56443->enter($__internal_172f59a92ed7d44bd2d5c19ef662a2efad0f0083c125e50a18913485b6b56443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_172f59a92ed7d44bd2d5c19ef662a2efad0f0083c125e50a18913485b6b56443->leave($__internal_172f59a92ed7d44bd2d5c19ef662a2efad0f0083c125e50a18913485b6b56443_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fa99aaaa38f80066a6377c83b5bb3f8c6584eee7fbab3a9ae3f2d0eb7ded0801 = $this->env->getExtension("native_profiler");
        $__internal_fa99aaaa38f80066a6377c83b5bb3f8c6584eee7fbab3a9ae3f2d0eb7ded0801->enter($__internal_fa99aaaa38f80066a6377c83b5bb3f8c6584eee7fbab3a9ae3f2d0eb7ded0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_fa99aaaa38f80066a6377c83b5bb3f8c6584eee7fbab3a9ae3f2d0eb7ded0801->leave($__internal_fa99aaaa38f80066a6377c83b5bb3f8c6584eee7fbab3a9ae3f2d0eb7ded0801_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2006efbd5c696c25763139502e3aeab4c0e08f74fece19e57788ccd853b31230 = $this->env->getExtension("native_profiler");
        $__internal_2006efbd5c696c25763139502e3aeab4c0e08f74fece19e57788ccd853b31230->enter($__internal_2006efbd5c696c25763139502e3aeab4c0e08f74fece19e57788ccd853b31230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_2006efbd5c696c25763139502e3aeab4c0e08f74fece19e57788ccd853b31230->leave($__internal_2006efbd5c696c25763139502e3aeab4c0e08f74fece19e57788ccd853b31230_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fa828df6653db711cd72e8ff7faa077b43bb927855bdf4973051f9695d7257b9 = $this->env->getExtension("native_profiler");
        $__internal_fa828df6653db711cd72e8ff7faa077b43bb927855bdf4973051f9695d7257b9->enter($__internal_fa828df6653db711cd72e8ff7faa077b43bb927855bdf4973051f9695d7257b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_fa828df6653db711cd72e8ff7faa077b43bb927855bdf4973051f9695d7257b9->leave($__internal_fa828df6653db711cd72e8ff7faa077b43bb927855bdf4973051f9695d7257b9_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_16563faa7ad8163cc15e2656f0bbba409278cc35f0d16967580abc45bcd5138f = $this->env->getExtension("native_profiler");
        $__internal_16563faa7ad8163cc15e2656f0bbba409278cc35f0d16967580abc45bcd5138f->enter($__internal_16563faa7ad8163cc15e2656f0bbba409278cc35f0d16967580abc45bcd5138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_16563faa7ad8163cc15e2656f0bbba409278cc35f0d16967580abc45bcd5138f->leave($__internal_16563faa7ad8163cc15e2656f0bbba409278cc35f0d16967580abc45bcd5138f_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_efeffcb4c0b2a3f48db0eb9698e39ce55d42c8aa1656adf6b2a3744a115a5e93 = $this->env->getExtension("native_profiler");
        $__internal_efeffcb4c0b2a3f48db0eb9698e39ce55d42c8aa1656adf6b2a3744a115a5e93->enter($__internal_efeffcb4c0b2a3f48db0eb9698e39ce55d42c8aa1656adf6b2a3744a115a5e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_efeffcb4c0b2a3f48db0eb9698e39ce55d42c8aa1656adf6b2a3744a115a5e93->leave($__internal_efeffcb4c0b2a3f48db0eb9698e39ce55d42c8aa1656adf6b2a3744a115a5e93_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_238d4fa54a74d182be45b5c5248a1c10d6bd9428a128d8d9cadb0e6f9d514b89 = $this->env->getExtension("native_profiler");
        $__internal_238d4fa54a74d182be45b5c5248a1c10d6bd9428a128d8d9cadb0e6f9d514b89->enter($__internal_238d4fa54a74d182be45b5c5248a1c10d6bd9428a128d8d9cadb0e6f9d514b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_238d4fa54a74d182be45b5c5248a1c10d6bd9428a128d8d9cadb0e6f9d514b89->leave($__internal_238d4fa54a74d182be45b5c5248a1c10d6bd9428a128d8d9cadb0e6f9d514b89_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_63cb82d26eab6d71f97b0b8fc2584b25537dcfb49b2cba08d188d9254e88a132 = $this->env->getExtension("native_profiler");
        $__internal_63cb82d26eab6d71f97b0b8fc2584b25537dcfb49b2cba08d188d9254e88a132->enter($__internal_63cb82d26eab6d71f97b0b8fc2584b25537dcfb49b2cba08d188d9254e88a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_63cb82d26eab6d71f97b0b8fc2584b25537dcfb49b2cba08d188d9254e88a132->leave($__internal_63cb82d26eab6d71f97b0b8fc2584b25537dcfb49b2cba08d188d9254e88a132_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_18077b58a3fe4305a949a163e2dbe0fa7c38ed5a6f87a464c34eb28396f91529 = $this->env->getExtension("native_profiler");
        $__internal_18077b58a3fe4305a949a163e2dbe0fa7c38ed5a6f87a464c34eb28396f91529->enter($__internal_18077b58a3fe4305a949a163e2dbe0fa7c38ed5a6f87a464c34eb28396f91529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_18077b58a3fe4305a949a163e2dbe0fa7c38ed5a6f87a464c34eb28396f91529->leave($__internal_18077b58a3fe4305a949a163e2dbe0fa7c38ed5a6f87a464c34eb28396f91529_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_981d5cdf9108e07c0602c171116b0484ffbb1064b006d1dcfb0a1a815d4610d8 = $this->env->getExtension("native_profiler");
        $__internal_981d5cdf9108e07c0602c171116b0484ffbb1064b006d1dcfb0a1a815d4610d8->enter($__internal_981d5cdf9108e07c0602c171116b0484ffbb1064b006d1dcfb0a1a815d4610d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_981d5cdf9108e07c0602c171116b0484ffbb1064b006d1dcfb0a1a815d4610d8->leave($__internal_981d5cdf9108e07c0602c171116b0484ffbb1064b006d1dcfb0a1a815d4610d8_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_45146c49a2fda1bf3e70eef825e553d712e5d64f8722dce88ac40c7312d48537 = $this->env->getExtension("native_profiler");
        $__internal_45146c49a2fda1bf3e70eef825e553d712e5d64f8722dce88ac40c7312d48537->enter($__internal_45146c49a2fda1bf3e70eef825e553d712e5d64f8722dce88ac40c7312d48537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_45146c49a2fda1bf3e70eef825e553d712e5d64f8722dce88ac40c7312d48537->leave($__internal_45146c49a2fda1bf3e70eef825e553d712e5d64f8722dce88ac40c7312d48537_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_2907e09201ff04733847b88b654a9ab2e3e8db8de5883f59ae0133d09d5865eb = $this->env->getExtension("native_profiler");
        $__internal_2907e09201ff04733847b88b654a9ab2e3e8db8de5883f59ae0133d09d5865eb->enter($__internal_2907e09201ff04733847b88b654a9ab2e3e8db8de5883f59ae0133d09d5865eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2907e09201ff04733847b88b654a9ab2e3e8db8de5883f59ae0133d09d5865eb->leave($__internal_2907e09201ff04733847b88b654a9ab2e3e8db8de5883f59ae0133d09d5865eb_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_3dc095511a86ff7dd1e4fb4580de867ea0bdee979c0127667f0a31f6bab777f5 = $this->env->getExtension("native_profiler");
        $__internal_3dc095511a86ff7dd1e4fb4580de867ea0bdee979c0127667f0a31f6bab777f5->enter($__internal_3dc095511a86ff7dd1e4fb4580de867ea0bdee979c0127667f0a31f6bab777f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3dc095511a86ff7dd1e4fb4580de867ea0bdee979c0127667f0a31f6bab777f5->leave($__internal_3dc095511a86ff7dd1e4fb4580de867ea0bdee979c0127667f0a31f6bab777f5_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_21b3684812f9500b92f7bb8743ab7cf8aac15b47c02935ea447da4bd95e4ca81 = $this->env->getExtension("native_profiler");
        $__internal_21b3684812f9500b92f7bb8743ab7cf8aac15b47c02935ea447da4bd95e4ca81->enter($__internal_21b3684812f9500b92f7bb8743ab7cf8aac15b47c02935ea447da4bd95e4ca81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_21b3684812f9500b92f7bb8743ab7cf8aac15b47c02935ea447da4bd95e4ca81->leave($__internal_21b3684812f9500b92f7bb8743ab7cf8aac15b47c02935ea447da4bd95e4ca81_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_0bed9e0413a81744ec0b9a4ced425a369bc9c0eb916e9416028c8e63a8edcc6a = $this->env->getExtension("native_profiler");
        $__internal_0bed9e0413a81744ec0b9a4ced425a369bc9c0eb916e9416028c8e63a8edcc6a->enter($__internal_0bed9e0413a81744ec0b9a4ced425a369bc9c0eb916e9416028c8e63a8edcc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0bed9e0413a81744ec0b9a4ced425a369bc9c0eb916e9416028c8e63a8edcc6a->leave($__internal_0bed9e0413a81744ec0b9a4ced425a369bc9c0eb916e9416028c8e63a8edcc6a_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0454276f2736c32c09d371cbf2f8371080c294e65979ebb19d192cf5497c7961 = $this->env->getExtension("native_profiler");
        $__internal_0454276f2736c32c09d371cbf2f8371080c294e65979ebb19d192cf5497c7961->enter($__internal_0454276f2736c32c09d371cbf2f8371080c294e65979ebb19d192cf5497c7961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_0454276f2736c32c09d371cbf2f8371080c294e65979ebb19d192cf5497c7961->leave($__internal_0454276f2736c32c09d371cbf2f8371080c294e65979ebb19d192cf5497c7961_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_6fa7b3e3bb9016ae7cb066342a1e92028bc26fe9c4364a0eb347c369296e10a4 = $this->env->getExtension("native_profiler");
        $__internal_6fa7b3e3bb9016ae7cb066342a1e92028bc26fe9c4364a0eb347c369296e10a4->enter($__internal_6fa7b3e3bb9016ae7cb066342a1e92028bc26fe9c4364a0eb347c369296e10a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6fa7b3e3bb9016ae7cb066342a1e92028bc26fe9c4364a0eb347c369296e10a4->leave($__internal_6fa7b3e3bb9016ae7cb066342a1e92028bc26fe9c4364a0eb347c369296e10a4_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_7a780b22fd1d717a0bf6a95949eb07ded152abf4bcdb23ae7407f37125a79afc = $this->env->getExtension("native_profiler");
        $__internal_7a780b22fd1d717a0bf6a95949eb07ded152abf4bcdb23ae7407f37125a79afc->enter($__internal_7a780b22fd1d717a0bf6a95949eb07ded152abf4bcdb23ae7407f37125a79afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7a780b22fd1d717a0bf6a95949eb07ded152abf4bcdb23ae7407f37125a79afc->leave($__internal_7a780b22fd1d717a0bf6a95949eb07ded152abf4bcdb23ae7407f37125a79afc_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eff047671ad0837ee2767d14ca90efae01a71f74434ba8ae8a8dd6590cd1efd9 = $this->env->getExtension("native_profiler");
        $__internal_eff047671ad0837ee2767d14ca90efae01a71f74434ba8ae8a8dd6590cd1efd9->enter($__internal_eff047671ad0837ee2767d14ca90efae01a71f74434ba8ae8a8dd6590cd1efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 228
            echo "<label";
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_eff047671ad0837ee2767d14ca90efae01a71f74434ba8ae8a8dd6590cd1efd9->leave($__internal_eff047671ad0837ee2767d14ca90efae01a71f74434ba8ae8a8dd6590cd1efd9_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_7c6f65fba25994c55e91e15d6f381f719e90d9d6ec9241133e7c9dfcb678488d = $this->env->getExtension("native_profiler");
        $__internal_7c6f65fba25994c55e91e15d6f381f719e90d9d6ec9241133e7c9dfcb678488d->enter($__internal_7c6f65fba25994c55e91e15d6f381f719e90d9d6ec9241133e7c9dfcb678488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_7c6f65fba25994c55e91e15d6f381f719e90d9d6ec9241133e7c9dfcb678488d->leave($__internal_7c6f65fba25994c55e91e15d6f381f719e90d9d6ec9241133e7c9dfcb678488d_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_fdf986da6ed25b5665c99f93dac806b06fd1d9f88de4c7dd89de20c9b1c5cb33 = $this->env->getExtension("native_profiler");
        $__internal_fdf986da6ed25b5665c99f93dac806b06fd1d9f88de4c7dd89de20c9b1c5cb33->enter($__internal_fdf986da6ed25b5665c99f93dac806b06fd1d9f88de4c7dd89de20c9b1c5cb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_fdf986da6ed25b5665c99f93dac806b06fd1d9f88de4c7dd89de20c9b1c5cb33->leave($__internal_fdf986da6ed25b5665c99f93dac806b06fd1d9f88de4c7dd89de20c9b1c5cb33_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5d59389cf232798788368e5d0dfd9e42919fc7b554302a158ed0f525bc0932c0 = $this->env->getExtension("native_profiler");
        $__internal_5d59389cf232798788368e5d0dfd9e42919fc7b554302a158ed0f525bc0932c0->enter($__internal_5d59389cf232798788368e5d0dfd9e42919fc7b554302a158ed0f525bc0932c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_5d59389cf232798788368e5d0dfd9e42919fc7b554302a158ed0f525bc0932c0->leave($__internal_5d59389cf232798788368e5d0dfd9e42919fc7b554302a158ed0f525bc0932c0_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3f3b885c4b93ee0ccf5068ea1e0c6ba2b3484ac90d5a7b2b08390ab89498b746 = $this->env->getExtension("native_profiler");
        $__internal_3f3b885c4b93ee0ccf5068ea1e0c6ba2b3484ac90d5a7b2b08390ab89498b746->enter($__internal_3f3b885c4b93ee0ccf5068ea1e0c6ba2b3484ac90d5a7b2b08390ab89498b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_3f3b885c4b93ee0ccf5068ea1e0c6ba2b3484ac90d5a7b2b08390ab89498b746->leave($__internal_3f3b885c4b93ee0ccf5068ea1e0c6ba2b3484ac90d5a7b2b08390ab89498b746_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d77cd06fa167fc3d32c6e8c606a020180e3dda99f2e003fcd1e8034b6cc415f4 = $this->env->getExtension("native_profiler");
        $__internal_d77cd06fa167fc3d32c6e8c606a020180e3dda99f2e003fcd1e8034b6cc415f4->enter($__internal_d77cd06fa167fc3d32c6e8c606a020180e3dda99f2e003fcd1e8034b6cc415f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_d77cd06fa167fc3d32c6e8c606a020180e3dda99f2e003fcd1e8034b6cc415f4->leave($__internal_d77cd06fa167fc3d32c6e8c606a020180e3dda99f2e003fcd1e8034b6cc415f4_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_745e858ed18ba49c2cf2b0ea5cf1e20dd76b96520935967e37339dd7165f3c30 = $this->env->getExtension("native_profiler");
        $__internal_745e858ed18ba49c2cf2b0ea5cf1e20dd76b96520935967e37339dd7165f3c30->enter($__internal_745e858ed18ba49c2cf2b0ea5cf1e20dd76b96520935967e37339dd7165f3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_745e858ed18ba49c2cf2b0ea5cf1e20dd76b96520935967e37339dd7165f3c30->leave($__internal_745e858ed18ba49c2cf2b0ea5cf1e20dd76b96520935967e37339dd7165f3c30_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_dfe2e2dfe44e4ea2f4c98b51d300fd4109375436b2881a9d58095b9a06f48ff3 = $this->env->getExtension("native_profiler");
        $__internal_dfe2e2dfe44e4ea2f4c98b51d300fd4109375436b2881a9d58095b9a06f48ff3->enter($__internal_dfe2e2dfe44e4ea2f4c98b51d300fd4109375436b2881a9d58095b9a06f48ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
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
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_dfe2e2dfe44e4ea2f4c98b51d300fd4109375436b2881a9d58095b9a06f48ff3->leave($__internal_dfe2e2dfe44e4ea2f4c98b51d300fd4109375436b2881a9d58095b9a06f48ff3_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_636e2665e2ec4c9d014f021b83767fa87905a279406b303635aedc8a9801d5b2 = $this->env->getExtension("native_profiler");
        $__internal_636e2665e2ec4c9d014f021b83767fa87905a279406b303635aedc8a9801d5b2->enter($__internal_636e2665e2ec4c9d014f021b83767fa87905a279406b303635aedc8a9801d5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_636e2665e2ec4c9d014f021b83767fa87905a279406b303635aedc8a9801d5b2->leave($__internal_636e2665e2ec4c9d014f021b83767fa87905a279406b303635aedc8a9801d5b2_prof);

    }

    // line 290
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8e2d14ae042121e6267374bd68fe92a015f8d1f87c0564b5c7365921943609ff = $this->env->getExtension("native_profiler");
        $__internal_8e2d14ae042121e6267374bd68fe92a015f8d1f87c0564b5c7365921943609ff->enter($__internal_8e2d14ae042121e6267374bd68fe92a015f8d1f87c0564b5c7365921943609ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 291
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 292
            echo "<ul>";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 294
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "</ul>";
        }
        
        $__internal_8e2d14ae042121e6267374bd68fe92a015f8d1f87c0564b5c7365921943609ff->leave($__internal_8e2d14ae042121e6267374bd68fe92a015f8d1f87c0564b5c7365921943609ff_prof);

    }

    // line 300
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_d745084ad52c2c63ec7870894d4d7086e1972d19d19d81b80d88ce40399ce020 = $this->env->getExtension("native_profiler");
        $__internal_d745084ad52c2c63ec7870894d4d7086e1972d19d19d81b80d88ce40399ce020->enter($__internal_d745084ad52c2c63ec7870894d4d7086e1972d19d19d81b80d88ce40399ce020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 302
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 303
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d745084ad52c2c63ec7870894d4d7086e1972d19d19d81b80d88ce40399ce020->leave($__internal_d745084ad52c2c63ec7870894d4d7086e1972d19d19d81b80d88ce40399ce020_prof);

    }

    // line 310
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_1bf62eae8bdc0e88346dffdf2983e8a194542b86cb4b049a29c9b1b826c75432 = $this->env->getExtension("native_profiler");
        $__internal_1bf62eae8bdc0e88346dffdf2983e8a194542b86cb4b049a29c9b1b826c75432->enter($__internal_1bf62eae8bdc0e88346dffdf2983e8a194542b86cb4b049a29c9b1b826c75432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 312
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1bf62eae8bdc0e88346dffdf2983e8a194542b86cb4b049a29c9b1b826c75432->leave($__internal_1bf62eae8bdc0e88346dffdf2983e8a194542b86cb4b049a29c9b1b826c75432_prof);

    }

    // line 316
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_6e97438b6573d41f07c29048bf6de6c83096423357ef532b2a2afb128b693592 = $this->env->getExtension("native_profiler");
        $__internal_6e97438b6573d41f07c29048bf6de6c83096423357ef532b2a2afb128b693592->enter($__internal_6e97438b6573d41f07c29048bf6de6c83096423357ef532b2a2afb128b693592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 317
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6e97438b6573d41f07c29048bf6de6c83096423357ef532b2a2afb128b693592->leave($__internal_6e97438b6573d41f07c29048bf6de6c83096423357ef532b2a2afb128b693592_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_2f093510e7d6d8881ea5e00c7ca30fdd3316b8ff40d8e39e2d906f507caf027e = $this->env->getExtension("native_profiler");
        $__internal_2f093510e7d6d8881ea5e00c7ca30fdd3316b8ff40d8e39e2d906f507caf027e->enter($__internal_2f093510e7d6d8881ea5e00c7ca30fdd3316b8ff40d8e39e2d906f507caf027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2f093510e7d6d8881ea5e00c7ca30fdd3316b8ff40d8e39e2d906f507caf027e->leave($__internal_2f093510e7d6d8881ea5e00c7ca30fdd3316b8ff40d8e39e2d906f507caf027e_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_d2c803e02f98815313defc06024f2dd021fee26fac78a4540e165b8be1fa509b = $this->env->getExtension("native_profiler");
        $__internal_d2c803e02f98815313defc06024f2dd021fee26fac78a4540e165b8be1fa509b->enter($__internal_d2c803e02f98815313defc06024f2dd021fee26fac78a4540e165b8be1fa509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d2c803e02f98815313defc06024f2dd021fee26fac78a4540e165b8be1fa509b->leave($__internal_d2c803e02f98815313defc06024f2dd021fee26fac78a4540e165b8be1fa509b_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_02e7d82965a3fdb5b1c620b5394c93492a6746867674eccd8f8fa068730b1dee = $this->env->getExtension("native_profiler");
        $__internal_02e7d82965a3fdb5b1c620b5394c93492a6746867674eccd8f8fa068730b1dee->enter($__internal_02e7d82965a3fdb5b1c620b5394c93492a6746867674eccd8f8fa068730b1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_02e7d82965a3fdb5b1c620b5394c93492a6746867674eccd8f8fa068730b1dee->leave($__internal_02e7d82965a3fdb5b1c620b5394c93492a6746867674eccd8f8fa068730b1dee_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1266 => 368,  1264 => 367,  1259 => 366,  1257 => 365,  1252 => 364,  1250 => 363,  1248 => 362,  1244 => 361,  1238 => 360,  1223 => 355,  1221 => 354,  1216 => 353,  1214 => 352,  1209 => 351,  1207 => 350,  1205 => 349,  1201 => 348,  1192 => 347,  1186 => 346,  1171 => 341,  1169 => 340,  1164 => 339,  1162 => 338,  1157 => 337,  1155 => 336,  1153 => 335,  1149 => 334,  1143 => 333,  1137 => 332,  1122 => 327,  1120 => 326,  1115 => 325,  1113 => 324,  1108 => 323,  1106 => 322,  1104 => 321,  1100 => 320,  1096 => 319,  1092 => 318,  1086 => 317,  1080 => 316,  1069 => 312,  1065 => 311,  1059 => 310,  1047 => 303,  1045 => 302,  1041 => 301,  1035 => 300,  1027 => 296,  1019 => 294,  1015 => 293,  1013 => 292,  1011 => 291,  1005 => 290,  998 => 287,  995 => 285,  993 => 284,  987 => 283,  977 => 279,  975 => 278,  948 => 277,  945 => 275,  942 => 273,  940 => 272,  938 => 271,  932 => 270,  925 => 267,  923 => 266,  921 => 265,  915 => 264,  908 => 259,  902 => 258,  895 => 255,  893 => 254,  891 => 253,  885 => 252,  878 => 249,  876 => 248,  874 => 247,  872 => 246,  870 => 245,  864 => 244,  857 => 241,  851 => 236,  840 => 232,  817 => 228,  813 => 225,  810 => 222,  809 => 221,  808 => 220,  806 => 219,  804 => 218,  801 => 216,  799 => 215,  796 => 213,  794 => 212,  792 => 211,  786 => 210,  779 => 205,  777 => 204,  771 => 203,  764 => 200,  762 => 199,  756 => 198,  743 => 195,  739 => 192,  736 => 189,  735 => 188,  734 => 187,  732 => 186,  730 => 185,  724 => 184,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 316,  144 => 310,  141 => 307,  139 => 300,  137 => 290,  135 => 283,  133 => 270,  131 => 264,  129 => 258,  127 => 252,  125 => 244,  123 => 236,  121 => 232,  119 => 210,  117 => 203,  115 => 198,  113 => 184,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
