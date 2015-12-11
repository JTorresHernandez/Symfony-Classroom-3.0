<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_97856311584865a46e1eca9b99261d0991db02049efdcacac85e7686c42f1be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d97b1d002e829d0e1b8bc5852363927aab180b7e1a6c4412e2e4df3b050efc = $this->env->getExtension("native_profiler");
        $__internal_50d97b1d002e829d0e1b8bc5852363927aab180b7e1a6c4412e2e4df3b050efc->enter($__internal_50d97b1d002e829d0e1b8bc5852363927aab180b7e1a6c4412e2e4df3b050efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_50d97b1d002e829d0e1b8bc5852363927aab180b7e1a6c4412e2e4df3b050efc->leave($__internal_50d97b1d002e829d0e1b8bc5852363927aab180b7e1a6c4412e2e4df3b050efc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
