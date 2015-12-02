<?php

/* :translator:test1.html.twig */
class __TwigTemplate_ce2ba011d0eec84f3e43aedc9b1ff180276882c6405d85ff218c4b5aa05b71b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":translator:test1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1d00e496351a0369adea9ecddfabb550babd598672d707a5357abbed4fb0c20 = $this->env->getExtension("native_profiler");
        $__internal_d1d00e496351a0369adea9ecddfabb550babd598672d707a5357abbed4fb0c20->enter($__internal_d1d00e496351a0369adea9ecddfabb550babd598672d707a5357abbed4fb0c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":translator:test1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d00e496351a0369adea9ecddfabb550babd598672d707a5357abbed4fb0c20->leave($__internal_d1d00e496351a0369adea9ecddfabb550babd598672d707a5357abbed4fb0c20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09787ec3a308da6882fb10d2703105cccd6bdbc93f4689750e8611455fd16a0b = $this->env->getExtension("native_profiler");
        $__internal_09787ec3a308da6882fb10d2703105cccd6bdbc93f4689750e8611455fd16a0b->enter($__internal_09787ec3a308da6882fb10d2703105cccd6bdbc93f4689750e8611455fd16a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.test1.msg1", array("%name%" => "larry")), "html", null, true);
        echo "</li>
        <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.test1.msg2", array("%name%" => "kevin")), "html", null, true);
        echo "</li>
        <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.translator.test1.msg3", array("%name%" => "robert")), "html", null, true);
        echo "</li>
    </ul>
";
        
        $__internal_09787ec3a308da6882fb10d2703105cccd6bdbc93f4689750e8611455fd16a0b->leave($__internal_09787ec3a308da6882fb10d2703105cccd6bdbc93f4689750e8611455fd16a0b_prof);

    }

    public function getTemplateName()
    {
        return ":translator:test1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*         <li>{{ 'app.translator.test1.msg1'|trans({ '%name%': 'larry' }) }}</li>*/
/*         <li>{{ 'app.translator.test1.msg2'|trans({ '%name%': 'kevin' }) }}</li>*/
/*         <li>{{ 'app.translator.test1.msg3'|trans({ '%name%': 'robert' }) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
