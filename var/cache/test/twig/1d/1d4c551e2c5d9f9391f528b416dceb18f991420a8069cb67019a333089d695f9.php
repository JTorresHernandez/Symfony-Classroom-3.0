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
        $__internal_1fc9e511a324ae6d03b8d6211a3d98ac116538f4a455180f01c4a8ea49b366ec = $this->env->getExtension("native_profiler");
        $__internal_1fc9e511a324ae6d03b8d6211a3d98ac116538f4a455180f01c4a8ea49b366ec->enter($__internal_1fc9e511a324ae6d03b8d6211a3d98ac116538f4a455180f01c4a8ea49b366ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc9e511a324ae6d03b8d6211a3d98ac116538f4a455180f01c4a8ea49b366ec->leave($__internal_1fc9e511a324ae6d03b8d6211a3d98ac116538f4a455180f01c4a8ea49b366ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b79d77ea53ebeb7a124b690f8b1dc84c343c670ce8ca6ff8206a32eb493d76d = $this->env->getExtension("native_profiler");
        $__internal_2b79d77ea53ebeb7a124b690f8b1dc84c343c670ce8ca6ff8206a32eb493d76d->enter($__internal_2b79d77ea53ebeb7a124b690f8b1dc84c343c670ce8ca6ff8206a32eb493d76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_2b79d77ea53ebeb7a124b690f8b1dc84c343c670ce8ca6ff8206a32eb493d76d->leave($__internal_2b79d77ea53ebeb7a124b690f8b1dc84c343c670ce8ca6ff8206a32eb493d76d_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ae5beca286427581f4508a57c421999626695b9fc41be72f14d66fe73525f7ff = $this->env->getExtension("native_profiler");
        $__internal_ae5beca286427581f4508a57c421999626695b9fc41be72f14d66fe73525f7ff->enter($__internal_ae5beca286427581f4508a57c421999626695b9fc41be72f14d66fe73525f7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ae5beca286427581f4508a57c421999626695b9fc41be72f14d66fe73525f7ff->leave($__internal_ae5beca286427581f4508a57c421999626695b9fc41be72f14d66fe73525f7ff_prof);

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
