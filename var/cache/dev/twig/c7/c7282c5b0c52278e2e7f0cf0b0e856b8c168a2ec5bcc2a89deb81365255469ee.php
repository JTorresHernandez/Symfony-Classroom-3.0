<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_5c818b14a68943d01c458d65958d032aae101712db1d73c71866c69219486bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
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
        $__internal_af44a3b1e6d561ec29fb23b9dbcecfc97159d66bcfc2c3e2af57f02bbb7d0fb4 = $this->env->getExtension("native_profiler");
        $__internal_af44a3b1e6d561ec29fb23b9dbcecfc97159d66bcfc2c3e2af57f02bbb7d0fb4->enter($__internal_af44a3b1e6d561ec29fb23b9dbcecfc97159d66bcfc2c3e2af57f02bbb7d0fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af44a3b1e6d561ec29fb23b9dbcecfc97159d66bcfc2c3e2af57f02bbb7d0fb4->leave($__internal_af44a3b1e6d561ec29fb23b9dbcecfc97159d66bcfc2c3e2af57f02bbb7d0fb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31f4996c784a3684fb8f6f2bd7dd924742415565d405fbf675b50716bfc18620 = $this->env->getExtension("native_profiler");
        $__internal_31f4996c784a3684fb8f6f2bd7dd924742415565d405fbf675b50716bfc18620->enter($__internal_31f4996c784a3684fb8f6f2bd7dd924742415565d405fbf675b50716bfc18620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_31f4996c784a3684fb8f6f2bd7dd924742415565d405fbf675b50716bfc18620->leave($__internal_31f4996c784a3684fb8f6f2bd7dd924742415565d405fbf675b50716bfc18620_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
