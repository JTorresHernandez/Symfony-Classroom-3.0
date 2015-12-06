<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_365950ce2c5fb4b572a45bf7923667c1b97ee148487f7054d6d3b705de93ad2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_becabe43c8cfdd1912752b842cc88b97e99eea094a73f93e31dcaadf6c052e39 = $this->env->getExtension("native_profiler");
        $__internal_becabe43c8cfdd1912752b842cc88b97e99eea094a73f93e31dcaadf6c052e39->enter($__internal_becabe43c8cfdd1912752b842cc88b97e99eea094a73f93e31dcaadf6c052e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_becabe43c8cfdd1912752b842cc88b97e99eea094a73f93e31dcaadf6c052e39->leave($__internal_becabe43c8cfdd1912752b842cc88b97e99eea094a73f93e31dcaadf6c052e39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf93bb295fded4d51828faf3c25601f3038621364d4650d096590afb85dd04e = $this->env->getExtension("native_profiler");
        $__internal_acf93bb295fded4d51828faf3c25601f3038621364d4650d096590afb85dd04e->enter($__internal_acf93bb295fded4d51828faf3c25601f3038621364d4650d096590afb85dd04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_acf93bb295fded4d51828faf3c25601f3038621364d4650d096590afb85dd04e->leave($__internal_acf93bb295fded4d51828faf3c25601f3038621364d4650d096590afb85dd04e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
