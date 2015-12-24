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
        $__internal_c20df4219e512b22bb61f39ca5a16620b3d81af1d1453f1a5bc8b33c8961f427 = $this->env->getExtension("native_profiler");
        $__internal_c20df4219e512b22bb61f39ca5a16620b3d81af1d1453f1a5bc8b33c8961f427->enter($__internal_c20df4219e512b22bb61f39ca5a16620b3d81af1d1453f1a5bc8b33c8961f427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20df4219e512b22bb61f39ca5a16620b3d81af1d1453f1a5bc8b33c8961f427->leave($__internal_c20df4219e512b22bb61f39ca5a16620b3d81af1d1453f1a5bc8b33c8961f427_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc5822dffa4309f7aca1b8418d01fe017c5a54fdf9db262d1a432d2d53c4116 = $this->env->getExtension("native_profiler");
        $__internal_1dc5822dffa4309f7aca1b8418d01fe017c5a54fdf9db262d1a432d2d53c4116->enter($__internal_1dc5822dffa4309f7aca1b8418d01fe017c5a54fdf9db262d1a432d2d53c4116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_1dc5822dffa4309f7aca1b8418d01fe017c5a54fdf9db262d1a432d2d53c4116->leave($__internal_1dc5822dffa4309f7aca1b8418d01fe017c5a54fdf9db262d1a432d2d53c4116_prof);

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
