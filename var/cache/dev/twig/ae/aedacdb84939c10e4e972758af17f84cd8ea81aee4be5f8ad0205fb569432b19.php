<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_365950ce2c5fb4b572a45bf7923667c1b97ee148487f7054d6d3b705de93ad2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_c384e659694090ebadbe715f23f08357c100aa6422661218c3886da103633b4f = $this->env->getExtension("native_profiler");
        $__internal_c384e659694090ebadbe715f23f08357c100aa6422661218c3886da103633b4f->enter($__internal_c384e659694090ebadbe715f23f08357c100aa6422661218c3886da103633b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c384e659694090ebadbe715f23f08357c100aa6422661218c3886da103633b4f->leave($__internal_c384e659694090ebadbe715f23f08357c100aa6422661218c3886da103633b4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fc170f5797f9387df1151d602754fe4b0eba74c41eec519cd901036b0fc0988 = $this->env->getExtension("native_profiler");
        $__internal_4fc170f5797f9387df1151d602754fe4b0eba74c41eec519cd901036b0fc0988->enter($__internal_4fc170f5797f9387df1151d602754fe4b0eba74c41eec519cd901036b0fc0988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_4fc170f5797f9387df1151d602754fe4b0eba74c41eec519cd901036b0fc0988->leave($__internal_4fc170f5797f9387df1151d602754fe4b0eba74c41eec519cd901036b0fc0988_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
