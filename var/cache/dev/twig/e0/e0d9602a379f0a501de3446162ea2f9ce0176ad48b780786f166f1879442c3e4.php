<?php

/* :index:email.html.twig */
class __TwigTemplate_56ec7f86a54ceb0a9818116bda3f37994ed2c399321c53598d24d50f494c6fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:email.html.twig", 1);
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
        $__internal_fa9e8606710d7365993b1eb83e3ec43a3734e7962255365b9eea64675b2f1676 = $this->env->getExtension("native_profiler");
        $__internal_fa9e8606710d7365993b1eb83e3ec43a3734e7962255365b9eea64675b2f1676->enter($__internal_fa9e8606710d7365993b1eb83e3ec43a3734e7962255365b9eea64675b2f1676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9e8606710d7365993b1eb83e3ec43a3734e7962255365b9eea64675b2f1676->leave($__internal_fa9e8606710d7365993b1eb83e3ec43a3734e7962255365b9eea64675b2f1676_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_873eee369a9ddff8f34f48c3c787e91cdc626a40c320835b8a8b53a3eb22d574 = $this->env->getExtension("native_profiler");
        $__internal_873eee369a9ddff8f34f48c3c787e91cdc626a40c320835b8a8b53a3eb22d574->enter($__internal_873eee369a9ddff8f34f48c3c787e91cdc626a40c320835b8a8b53a3eb22d574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_873eee369a9ddff8f34f48c3c787e91cdc626a40c320835b8a8b53a3eb22d574->leave($__internal_873eee369a9ddff8f34f48c3c787e91cdc626a40c320835b8a8b53a3eb22d574_prof);

    }

    public function getTemplateName()
    {
        return ":index:email.html.twig";
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
/*     <div>Email was sent</div>*/
/* {% endblock %}*/
