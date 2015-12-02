<?php

/* :calculator:index.html.twig */
class __TwigTemplate_388f159f80be5992c7ce6d76e009d15186c1bdad232d348dc97f6296a2a23e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":calculator:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46dcf457795c627a287605abe23a9370998dfc3effb5a38db7c4a9abcc4e21fa = $this->env->getExtension("native_profiler");
        $__internal_46dcf457795c627a287605abe23a9370998dfc3effb5a38db7c4a9abcc4e21fa->enter($__internal_46dcf457795c627a287605abe23a9370998dfc3effb5a38db7c4a9abcc4e21fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":calculator:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dcf457795c627a287605abe23a9370998dfc3effb5a38db7c4a9abcc4e21fa->leave($__internal_46dcf457795c627a287605abe23a9370998dfc3effb5a38db7c4a9abcc4e21fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91d3cfa2ea6d0412af14b7c59df4cb46ed15adb267f82f932bc587e1147eb248 = $this->env->getExtension("native_profiler");
        $__internal_91d3cfa2ea6d0412af14b7c59df4cb46ed15adb267f82f932bc587e1147eb248->enter($__internal_91d3cfa2ea6d0412af14b7c59df4cb46ed15adb267f82f932bc587e1147eb248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Home";
        
        $__internal_91d3cfa2ea6d0412af14b7c59df4cb46ed15adb267f82f932bc587e1147eb248->leave($__internal_91d3cfa2ea6d0412af14b7c59df4cb46ed15adb267f82f932bc587e1147eb248_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87d1bdbb6e3d42fa30cf51182f8497ed24351aa2b3c16d42d13f6f38b540c617 = $this->env->getExtension("native_profiler");
        $__internal_87d1bdbb6e3d42fa30cf51182f8497ed24351aa2b3c16d42d13f6f38b540c617->enter($__internal_87d1bdbb6e3d42fa30cf51182f8497ed24351aa2b3c16d42d13f6f38b540c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <ul>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("app_calculator_index");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("app_calculator_sum");
        echo "\">Sum</a></li>
    </ul>
";
        
        $__internal_87d1bdbb6e3d42fa30cf51182f8497ed24351aa2b3c16d42d13f6f38b540c617->leave($__internal_87d1bdbb6e3d42fa30cf51182f8497ed24351aa2b3c16d42d13f6f38b540c617_prof);

    }

    public function getTemplateName()
    {
        return ":calculator:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Home{% endblock %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*         <li><a href="{{ path('app_calculator_index') }}">Home</a></li>*/
/*         <li><a href="{{ path('app_calculator_sum') }}">Sum</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
