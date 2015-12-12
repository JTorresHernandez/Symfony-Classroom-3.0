<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_785340534e3be41ff90c4b5862d4e71630ec75279157f3b34b900a59b18bb766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aea1eb2436918114e60ab15eeb72cc4ab9d41088dc2d2f3bb48d745987e72f9 = $this->env->getExtension("native_profiler");
        $__internal_7aea1eb2436918114e60ab15eeb72cc4ab9d41088dc2d2f3bb48d745987e72f9->enter($__internal_7aea1eb2436918114e60ab15eeb72cc4ab9d41088dc2d2f3bb48d745987e72f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aea1eb2436918114e60ab15eeb72cc4ab9d41088dc2d2f3bb48d745987e72f9->leave($__internal_7aea1eb2436918114e60ab15eeb72cc4ab9d41088dc2d2f3bb48d745987e72f9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72631254a0a5bd2581a4a62e52b4675b95ee1686e0de67c884136da2756887c9 = $this->env->getExtension("native_profiler");
        $__internal_72631254a0a5bd2581a4a62e52b4675b95ee1686e0de67c884136da2756887c9->enter($__internal_72631254a0a5bd2581a4a62e52b4675b95ee1686e0de67c884136da2756887c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_72631254a0a5bd2581a4a62e52b4675b95ee1686e0de67c884136da2756887c9->leave($__internal_72631254a0a5bd2581a4a62e52b4675b95ee1686e0de67c884136da2756887c9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
