<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_046ed20e67870ed46948f4238aecc714bca934a402af2f069e38e3e523040d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_cdaa47e77a2c9a6ba30eaf447c2ad96d4bf086dda7f4d6549e87c5633a127df4 = $this->env->getExtension("native_profiler");
        $__internal_cdaa47e77a2c9a6ba30eaf447c2ad96d4bf086dda7f4d6549e87c5633a127df4->enter($__internal_cdaa47e77a2c9a6ba30eaf447c2ad96d4bf086dda7f4d6549e87c5633a127df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdaa47e77a2c9a6ba30eaf447c2ad96d4bf086dda7f4d6549e87c5633a127df4->leave($__internal_cdaa47e77a2c9a6ba30eaf447c2ad96d4bf086dda7f4d6549e87c5633a127df4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_680bc46025988f443ede1e0e864f3ee440b8bd9ddbceee4796fa6e1675305f3e = $this->env->getExtension("native_profiler");
        $__internal_680bc46025988f443ede1e0e864f3ee440b8bd9ddbceee4796fa6e1675305f3e->enter($__internal_680bc46025988f443ede1e0e864f3ee440b8bd9ddbceee4796fa6e1675305f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_680bc46025988f443ede1e0e864f3ee440b8bd9ddbceee4796fa6e1675305f3e->leave($__internal_680bc46025988f443ede1e0e864f3ee440b8bd9ddbceee4796fa6e1675305f3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
