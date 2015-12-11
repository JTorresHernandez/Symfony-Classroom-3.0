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
        $__internal_8385c5820c1e9fd0d43150afa30efbc256bb565fb32402ad6508f2b387aefab0 = $this->env->getExtension("native_profiler");
        $__internal_8385c5820c1e9fd0d43150afa30efbc256bb565fb32402ad6508f2b387aefab0->enter($__internal_8385c5820c1e9fd0d43150afa30efbc256bb565fb32402ad6508f2b387aefab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8385c5820c1e9fd0d43150afa30efbc256bb565fb32402ad6508f2b387aefab0->leave($__internal_8385c5820c1e9fd0d43150afa30efbc256bb565fb32402ad6508f2b387aefab0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8605d8191c327b1a44d30560a7d6c64668554ef03c0c43085a0fd9bd054d9010 = $this->env->getExtension("native_profiler");
        $__internal_8605d8191c327b1a44d30560a7d6c64668554ef03c0c43085a0fd9bd054d9010->enter($__internal_8605d8191c327b1a44d30560a7d6c64668554ef03c0c43085a0fd9bd054d9010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8605d8191c327b1a44d30560a7d6c64668554ef03c0c43085a0fd9bd054d9010->leave($__internal_8605d8191c327b1a44d30560a7d6c64668554ef03c0c43085a0fd9bd054d9010_prof);

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
