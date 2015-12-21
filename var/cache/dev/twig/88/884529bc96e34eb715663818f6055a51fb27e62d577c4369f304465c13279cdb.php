<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4a39b1d2af8535ba7b331dc4c1294026066e35509eb63d1b25cbeb51f7348aa = $this->env->getExtension("native_profiler");
        $__internal_e4a39b1d2af8535ba7b331dc4c1294026066e35509eb63d1b25cbeb51f7348aa->enter($__internal_e4a39b1d2af8535ba7b331dc4c1294026066e35509eb63d1b25cbeb51f7348aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a39b1d2af8535ba7b331dc4c1294026066e35509eb63d1b25cbeb51f7348aa->leave($__internal_e4a39b1d2af8535ba7b331dc4c1294026066e35509eb63d1b25cbeb51f7348aa_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7619e7ed2f05ff99641e74301aaddfbe959eb5b8e2414cb72168dc86592037e0 = $this->env->getExtension("native_profiler");
        $__internal_7619e7ed2f05ff99641e74301aaddfbe959eb5b8e2414cb72168dc86592037e0->enter($__internal_7619e7ed2f05ff99641e74301aaddfbe959eb5b8e2414cb72168dc86592037e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_7619e7ed2f05ff99641e74301aaddfbe959eb5b8e2414cb72168dc86592037e0->leave($__internal_7619e7ed2f05ff99641e74301aaddfbe959eb5b8e2414cb72168dc86592037e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8c84a5bf40e6166943ed0197deecd0e46a811f5708ad8c0e1335aa4c317f92e = $this->env->getExtension("native_profiler");
        $__internal_e8c84a5bf40e6166943ed0197deecd0e46a811f5708ad8c0e1335aa4c317f92e->enter($__internal_e8c84a5bf40e6166943ed0197deecd0e46a811f5708ad8c0e1335aa4c317f92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_e8c84a5bf40e6166943ed0197deecd0e46a811f5708ad8c0e1335aa4c317f92e->leave($__internal_e8c84a5bf40e6166943ed0197deecd0e46a811f5708ad8c0e1335aa4c317f92e_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3f9e2710fa5007aad61334f37a36cb1d7e70b191498bd1e4ce521264a4d6872 = $this->env->getExtension("native_profiler");
        $__internal_c3f9e2710fa5007aad61334f37a36cb1d7e70b191498bd1e4ce521264a4d6872->enter($__internal_c3f9e2710fa5007aad61334f37a36cb1d7e70b191498bd1e4ce521264a4d6872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c3f9e2710fa5007aad61334f37a36cb1d7e70b191498bd1e4ce521264a4d6872->leave($__internal_c3f9e2710fa5007aad61334f37a36cb1d7e70b191498bd1e4ce521264a4d6872_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
