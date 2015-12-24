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
        $__internal_aeb78b535af09c4002f6fdbe86a9c1196b2203a944504fda8adb42274e647b7d = $this->env->getExtension("native_profiler");
        $__internal_aeb78b535af09c4002f6fdbe86a9c1196b2203a944504fda8adb42274e647b7d->enter($__internal_aeb78b535af09c4002f6fdbe86a9c1196b2203a944504fda8adb42274e647b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb78b535af09c4002f6fdbe86a9c1196b2203a944504fda8adb42274e647b7d->leave($__internal_aeb78b535af09c4002f6fdbe86a9c1196b2203a944504fda8adb42274e647b7d_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_635175447eeffda491f1937239ec16a9b13924672e14cd02f4b9d0e8b735ca6d = $this->env->getExtension("native_profiler");
        $__internal_635175447eeffda491f1937239ec16a9b13924672e14cd02f4b9d0e8b735ca6d->enter($__internal_635175447eeffda491f1937239ec16a9b13924672e14cd02f4b9d0e8b735ca6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_635175447eeffda491f1937239ec16a9b13924672e14cd02f4b9d0e8b735ca6d->leave($__internal_635175447eeffda491f1937239ec16a9b13924672e14cd02f4b9d0e8b735ca6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a5b4e1f87301a6ea91986cb730ef81fe03f409c7e96346886bef7233eb0baee = $this->env->getExtension("native_profiler");
        $__internal_3a5b4e1f87301a6ea91986cb730ef81fe03f409c7e96346886bef7233eb0baee->enter($__internal_3a5b4e1f87301a6ea91986cb730ef81fe03f409c7e96346886bef7233eb0baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_3a5b4e1f87301a6ea91986cb730ef81fe03f409c7e96346886bef7233eb0baee->leave($__internal_3a5b4e1f87301a6ea91986cb730ef81fe03f409c7e96346886bef7233eb0baee_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3ea26af8ae62b51b65dfba41514b3e5e3e291e8ea4c01a9519f47eac0e9b8557 = $this->env->getExtension("native_profiler");
        $__internal_3ea26af8ae62b51b65dfba41514b3e5e3e291e8ea4c01a9519f47eac0e9b8557->enter($__internal_3ea26af8ae62b51b65dfba41514b3e5e3e291e8ea4c01a9519f47eac0e9b8557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3ea26af8ae62b51b65dfba41514b3e5e3e291e8ea4c01a9519f47eac0e9b8557->leave($__internal_3ea26af8ae62b51b65dfba41514b3e5e3e291e8ea4c01a9519f47eac0e9b8557_prof);

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
