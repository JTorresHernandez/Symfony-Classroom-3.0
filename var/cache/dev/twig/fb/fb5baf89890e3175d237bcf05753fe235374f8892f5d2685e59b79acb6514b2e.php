<?php

/* :user:insert.html.twig */
class __TwigTemplate_fc8b48deef0c94c15f5ac30032f064175ac5c06419171c3083ebe0bc2585700b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:insert.html.twig", 1);
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
        $__internal_d717a85c1ea40f4aa56bdb519801c6d3853eee667aecbce7b6cb35f7dc491e11 = $this->env->getExtension("native_profiler");
        $__internal_d717a85c1ea40f4aa56bdb519801c6d3853eee667aecbce7b6cb35f7dc491e11->enter($__internal_d717a85c1ea40f4aa56bdb519801c6d3853eee667aecbce7b6cb35f7dc491e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:insert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d717a85c1ea40f4aa56bdb519801c6d3853eee667aecbce7b6cb35f7dc491e11->leave($__internal_d717a85c1ea40f4aa56bdb519801c6d3853eee667aecbce7b6cb35f7dc491e11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa4162e3b25b8426bd0859ec6b1021580108a1c5f305376f46a657525a3ab09 = $this->env->getExtension("native_profiler");
        $__internal_9fa4162e3b25b8426bd0859ec6b1021580108a1c5f305376f46a657525a3ab09->enter($__internal_9fa4162e3b25b8426bd0859ec6b1021580108a1c5f305376f46a657525a3ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_user_doInsert");
        echo "\">
            Email: <input type=\"email\" name=\"email\"><br>
            Password: <input type=\"text\" name=\"password\"><br>
            Username: <input type=\"text\" name=\"username\"><br>
            <input type=\"submit\" value=\"Insert\">
        </form>
    </div>
";
        
        $__internal_9fa4162e3b25b8426bd0859ec6b1021580108a1c5f305376f46a657525a3ab09->leave($__internal_9fa4162e3b25b8426bd0859ec6b1021580108a1c5f305376f46a657525a3ab09_prof);

    }

    public function getTemplateName()
    {
        return ":user:insert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <form method="post" action="{{ path('app_user_doInsert') }}">*/
/*             Email: <input type="email" name="email"><br>*/
/*             Password: <input type="text" name="password"><br>*/
/*             Username: <input type="text" name="username"><br>*/
/*             <input type="submit" value="Insert">*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
