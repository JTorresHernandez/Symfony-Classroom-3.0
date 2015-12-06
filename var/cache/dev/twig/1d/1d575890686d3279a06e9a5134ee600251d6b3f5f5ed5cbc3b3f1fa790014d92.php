<?php

/* :index:email.html.twig */
class __TwigTemplate_0f20dc56e9dbc2dfc74739b2f1956f7f36e31ee18d6ef1bcbbf4191d549fd317 extends Twig_Template
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
        $__internal_d8ced8b402901bc71c0a4f9e4dde46f3af81d46fd54f3f5106c42e34e11faff9 = $this->env->getExtension("native_profiler");
        $__internal_d8ced8b402901bc71c0a4f9e4dde46f3af81d46fd54f3f5106c42e34e11faff9->enter($__internal_d8ced8b402901bc71c0a4f9e4dde46f3af81d46fd54f3f5106c42e34e11faff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ced8b402901bc71c0a4f9e4dde46f3af81d46fd54f3f5106c42e34e11faff9->leave($__internal_d8ced8b402901bc71c0a4f9e4dde46f3af81d46fd54f3f5106c42e34e11faff9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b77ac595f82dff1cea95847ab272d941ec2e064ea4e9364885f8527cd2358a = $this->env->getExtension("native_profiler");
        $__internal_f6b77ac595f82dff1cea95847ab272d941ec2e064ea4e9364885f8527cd2358a->enter($__internal_f6b77ac595f82dff1cea95847ab272d941ec2e064ea4e9364885f8527cd2358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_f6b77ac595f82dff1cea95847ab272d941ec2e064ea4e9364885f8527cd2358a->leave($__internal_f6b77ac595f82dff1cea95847ab272d941ec2e064ea4e9364885f8527cd2358a_prof);

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
