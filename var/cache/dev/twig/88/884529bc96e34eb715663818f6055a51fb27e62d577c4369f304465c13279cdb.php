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
        $__internal_110d572143fde5d769500d1576f2401075c6220576555e011c7f47a3cb4fe919 = $this->env->getExtension("native_profiler");
        $__internal_110d572143fde5d769500d1576f2401075c6220576555e011c7f47a3cb4fe919->enter($__internal_110d572143fde5d769500d1576f2401075c6220576555e011c7f47a3cb4fe919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110d572143fde5d769500d1576f2401075c6220576555e011c7f47a3cb4fe919->leave($__internal_110d572143fde5d769500d1576f2401075c6220576555e011c7f47a3cb4fe919_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_366e7ff63eb193aa40b21aa4414b184500983018b721027331fcc36dcc02fe51 = $this->env->getExtension("native_profiler");
        $__internal_366e7ff63eb193aa40b21aa4414b184500983018b721027331fcc36dcc02fe51->enter($__internal_366e7ff63eb193aa40b21aa4414b184500983018b721027331fcc36dcc02fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_366e7ff63eb193aa40b21aa4414b184500983018b721027331fcc36dcc02fe51->leave($__internal_366e7ff63eb193aa40b21aa4414b184500983018b721027331fcc36dcc02fe51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c3a702b8e008ded2715186bcf27cc00ba8117820e4768c50b47b9926ae54029 = $this->env->getExtension("native_profiler");
        $__internal_4c3a702b8e008ded2715186bcf27cc00ba8117820e4768c50b47b9926ae54029->enter($__internal_4c3a702b8e008ded2715186bcf27cc00ba8117820e4768c50b47b9926ae54029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_4c3a702b8e008ded2715186bcf27cc00ba8117820e4768c50b47b9926ae54029->leave($__internal_4c3a702b8e008ded2715186bcf27cc00ba8117820e4768c50b47b9926ae54029_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_68af4d9c60158c5d6951c509a08e7fab732fc2803a30d58c008b1865ac087dad = $this->env->getExtension("native_profiler");
        $__internal_68af4d9c60158c5d6951c509a08e7fab732fc2803a30d58c008b1865ac087dad->enter($__internal_68af4d9c60158c5d6951c509a08e7fab732fc2803a30d58c008b1865ac087dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_68af4d9c60158c5d6951c509a08e7fab732fc2803a30d58c008b1865ac087dad->leave($__internal_68af4d9c60158c5d6951c509a08e7fab732fc2803a30d58c008b1865ac087dad_prof);

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
