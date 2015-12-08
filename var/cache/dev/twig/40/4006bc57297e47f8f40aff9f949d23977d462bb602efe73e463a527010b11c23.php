<?php

/* :index:email.html.twig */
class __TwigTemplate_d6c62f76e7d4386ae0d66da65120901b91c4b0793ca8046920d71fe25bfa079e extends Twig_Template
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
        $__internal_082dc3f2f42e60d93743d41e5b170ac9b40849b7da94f1c88817b00da178f7cd = $this->env->getExtension("native_profiler");
        $__internal_082dc3f2f42e60d93743d41e5b170ac9b40849b7da94f1c88817b00da178f7cd->enter($__internal_082dc3f2f42e60d93743d41e5b170ac9b40849b7da94f1c88817b00da178f7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_082dc3f2f42e60d93743d41e5b170ac9b40849b7da94f1c88817b00da178f7cd->leave($__internal_082dc3f2f42e60d93743d41e5b170ac9b40849b7da94f1c88817b00da178f7cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_588ea0730e8639c3986414a94706a391f11bd5b8b8637739206cd9c1fe28fb0b = $this->env->getExtension("native_profiler");
        $__internal_588ea0730e8639c3986414a94706a391f11bd5b8b8637739206cd9c1fe28fb0b->enter($__internal_588ea0730e8639c3986414a94706a391f11bd5b8b8637739206cd9c1fe28fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_588ea0730e8639c3986414a94706a391f11bd5b8b8637739206cd9c1fe28fb0b->leave($__internal_588ea0730e8639c3986414a94706a391f11bd5b8b8637739206cd9c1fe28fb0b_prof);

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
