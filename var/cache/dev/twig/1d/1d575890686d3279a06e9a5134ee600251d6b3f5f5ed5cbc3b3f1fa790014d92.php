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
        $__internal_fa54d582239f92d4ad04d092ee2be9d87d9a2b7be0d7668d575b48deb0638e2a = $this->env->getExtension("native_profiler");
        $__internal_fa54d582239f92d4ad04d092ee2be9d87d9a2b7be0d7668d575b48deb0638e2a->enter($__internal_fa54d582239f92d4ad04d092ee2be9d87d9a2b7be0d7668d575b48deb0638e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa54d582239f92d4ad04d092ee2be9d87d9a2b7be0d7668d575b48deb0638e2a->leave($__internal_fa54d582239f92d4ad04d092ee2be9d87d9a2b7be0d7668d575b48deb0638e2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62b4cc4cd24d6bb37cf901fe04650b79a27681d74bafd7f6e16c17921f2db343 = $this->env->getExtension("native_profiler");
        $__internal_62b4cc4cd24d6bb37cf901fe04650b79a27681d74bafd7f6e16c17921f2db343->enter($__internal_62b4cc4cd24d6bb37cf901fe04650b79a27681d74bafd7f6e16c17921f2db343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_62b4cc4cd24d6bb37cf901fe04650b79a27681d74bafd7f6e16c17921f2db343->leave($__internal_62b4cc4cd24d6bb37cf901fe04650b79a27681d74bafd7f6e16c17921f2db343_prof);

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
