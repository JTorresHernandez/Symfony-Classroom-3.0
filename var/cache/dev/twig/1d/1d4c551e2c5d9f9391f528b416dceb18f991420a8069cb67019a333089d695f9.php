<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_d0c6985abaa72cf1c7bb401c22bfc43a093345086746e3078c4751175af7204a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
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
        $__internal_09077b7577c0ae810f6a7542f348d9cc5aa0a55dab1001911c65d0aaf4dd649f = $this->env->getExtension("native_profiler");
        $__internal_09077b7577c0ae810f6a7542f348d9cc5aa0a55dab1001911c65d0aaf4dd649f->enter($__internal_09077b7577c0ae810f6a7542f348d9cc5aa0a55dab1001911c65d0aaf4dd649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09077b7577c0ae810f6a7542f348d9cc5aa0a55dab1001911c65d0aaf4dd649f->leave($__internal_09077b7577c0ae810f6a7542f348d9cc5aa0a55dab1001911c65d0aaf4dd649f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_211f71e59944d4a72fb61cbe68461cf1bea5eb1e34e89ce09faa851cd2f29d2f = $this->env->getExtension("native_profiler");
        $__internal_211f71e59944d4a72fb61cbe68461cf1bea5eb1e34e89ce09faa851cd2f29d2f->enter($__internal_211f71e59944d4a72fb61cbe68461cf1bea5eb1e34e89ce09faa851cd2f29d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_211f71e59944d4a72fb61cbe68461cf1bea5eb1e34e89ce09faa851cd2f29d2f->leave($__internal_211f71e59944d4a72fb61cbe68461cf1bea5eb1e34e89ce09faa851cd2f29d2f_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_339af64321843c3f2eac91c241c84f5b8e7cb9a2fbc0065e86cffabd860983ab = $this->env->getExtension("native_profiler");
        $__internal_339af64321843c3f2eac91c241c84f5b8e7cb9a2fbc0065e86cffabd860983ab->enter($__internal_339af64321843c3f2eac91c241c84f5b8e7cb9a2fbc0065e86cffabd860983ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_339af64321843c3f2eac91c241c84f5b8e7cb9a2fbc0065e86cffabd860983ab->leave($__internal_339af64321843c3f2eac91c241c84f5b8e7cb9a2fbc0065e86cffabd860983ab_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
