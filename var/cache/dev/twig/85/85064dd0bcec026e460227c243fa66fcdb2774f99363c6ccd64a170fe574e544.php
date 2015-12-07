<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79393f6542bef229fa71f7d51a9f2e80f75b6b8e468336634ec832ffdcf56fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e00dbbc91d7b33cc3f282b2014de04398f1a7c1a3cb3062809c7bdf778d4192 = $this->env->getExtension("native_profiler");
        $__internal_1e00dbbc91d7b33cc3f282b2014de04398f1a7c1a3cb3062809c7bdf778d4192->enter($__internal_1e00dbbc91d7b33cc3f282b2014de04398f1a7c1a3cb3062809c7bdf778d4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e00dbbc91d7b33cc3f282b2014de04398f1a7c1a3cb3062809c7bdf778d4192->leave($__internal_1e00dbbc91d7b33cc3f282b2014de04398f1a7c1a3cb3062809c7bdf778d4192_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b511fb46c484a9794a9581df26d9b3a356e59927497cada389137c6b3b067b1 = $this->env->getExtension("native_profiler");
        $__internal_5b511fb46c484a9794a9581df26d9b3a356e59927497cada389137c6b3b067b1->enter($__internal_5b511fb46c484a9794a9581df26d9b3a356e59927497cada389137c6b3b067b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b511fb46c484a9794a9581df26d9b3a356e59927497cada389137c6b3b067b1->leave($__internal_5b511fb46c484a9794a9581df26d9b3a356e59927497cada389137c6b3b067b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51adfa8baff6fb2fdbcb98e6c4c4d422b48dcfa2597c1e0018fc806d9079eaaa = $this->env->getExtension("native_profiler");
        $__internal_51adfa8baff6fb2fdbcb98e6c4c4d422b48dcfa2597c1e0018fc806d9079eaaa->enter($__internal_51adfa8baff6fb2fdbcb98e6c4c4d422b48dcfa2597c1e0018fc806d9079eaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51adfa8baff6fb2fdbcb98e6c4c4d422b48dcfa2597c1e0018fc806d9079eaaa->leave($__internal_51adfa8baff6fb2fdbcb98e6c4c4d422b48dcfa2597c1e0018fc806d9079eaaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e23add9616581e512b3f218a58ffaf4e3568348bbd06808c40453c7103fc193 = $this->env->getExtension("native_profiler");
        $__internal_3e23add9616581e512b3f218a58ffaf4e3568348bbd06808c40453c7103fc193->enter($__internal_3e23add9616581e512b3f218a58ffaf4e3568348bbd06808c40453c7103fc193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e23add9616581e512b3f218a58ffaf4e3568348bbd06808c40453c7103fc193->leave($__internal_3e23add9616581e512b3f218a58ffaf4e3568348bbd06808c40453c7103fc193_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
