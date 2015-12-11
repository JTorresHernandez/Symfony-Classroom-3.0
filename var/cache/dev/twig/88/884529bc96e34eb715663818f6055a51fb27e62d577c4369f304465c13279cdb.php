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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb82a1cf203fbb6faabb298dda38fe0db954abc1fdd7eaee329c4940daf94b05 = $this->env->getExtension("native_profiler");
        $__internal_eb82a1cf203fbb6faabb298dda38fe0db954abc1fdd7eaee329c4940daf94b05->enter($__internal_eb82a1cf203fbb6faabb298dda38fe0db954abc1fdd7eaee329c4940daf94b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb82a1cf203fbb6faabb298dda38fe0db954abc1fdd7eaee329c4940daf94b05->leave($__internal_eb82a1cf203fbb6faabb298dda38fe0db954abc1fdd7eaee329c4940daf94b05_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_b1718732a25864477de28511aa7b54adb58c41d6aa4611bb48aa46911bfe37dc = $this->env->getExtension("native_profiler");
        $__internal_b1718732a25864477de28511aa7b54adb58c41d6aa4611bb48aa46911bfe37dc->enter($__internal_b1718732a25864477de28511aa7b54adb58c41d6aa4611bb48aa46911bfe37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_b1718732a25864477de28511aa7b54adb58c41d6aa4611bb48aa46911bfe37dc->leave($__internal_b1718732a25864477de28511aa7b54adb58c41d6aa4611bb48aa46911bfe37dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac987256ed4161c17363a244af66e6a83038d323b4e4deb4d3f66e685d46c36f = $this->env->getExtension("native_profiler");
        $__internal_ac987256ed4161c17363a244af66e6a83038d323b4e4deb4d3f66e685d46c36f->enter($__internal_ac987256ed4161c17363a244af66e6a83038d323b4e4deb4d3f66e685d46c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_ac987256ed4161c17363a244af66e6a83038d323b4e4deb4d3f66e685d46c36f->leave($__internal_ac987256ed4161c17363a244af66e6a83038d323b4e4deb4d3f66e685d46c36f_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
