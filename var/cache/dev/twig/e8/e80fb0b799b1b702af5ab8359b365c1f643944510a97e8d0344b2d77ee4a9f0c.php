<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_93d415847e39bbffb30508be9d26b87efebef85792c8ef0b140d021b3ca90f14 extends Twig_Template
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
        $__internal_e92a0b01344b92b4a0241a9e3339c1e8e1fe9c494ae9a73360a87de7b1da1281 = $this->env->getExtension("native_profiler");
        $__internal_e92a0b01344b92b4a0241a9e3339c1e8e1fe9c494ae9a73360a87de7b1da1281->enter($__internal_e92a0b01344b92b4a0241a9e3339c1e8e1fe9c494ae9a73360a87de7b1da1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92a0b01344b92b4a0241a9e3339c1e8e1fe9c494ae9a73360a87de7b1da1281->leave($__internal_e92a0b01344b92b4a0241a9e3339c1e8e1fe9c494ae9a73360a87de7b1da1281_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d099f38e21e85ed12aebbfd77d25ca3c5c5661d6f802426ba04b42144879f36b = $this->env->getExtension("native_profiler");
        $__internal_d099f38e21e85ed12aebbfd77d25ca3c5c5661d6f802426ba04b42144879f36b->enter($__internal_d099f38e21e85ed12aebbfd77d25ca3c5c5661d6f802426ba04b42144879f36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d099f38e21e85ed12aebbfd77d25ca3c5c5661d6f802426ba04b42144879f36b->leave($__internal_d099f38e21e85ed12aebbfd77d25ca3c5c5661d6f802426ba04b42144879f36b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57c39d59280ef5c7f71174a07890cf7c7aac5d9ab9f2a1768a2eacecc6fff606 = $this->env->getExtension("native_profiler");
        $__internal_57c39d59280ef5c7f71174a07890cf7c7aac5d9ab9f2a1768a2eacecc6fff606->enter($__internal_57c39d59280ef5c7f71174a07890cf7c7aac5d9ab9f2a1768a2eacecc6fff606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57c39d59280ef5c7f71174a07890cf7c7aac5d9ab9f2a1768a2eacecc6fff606->leave($__internal_57c39d59280ef5c7f71174a07890cf7c7aac5d9ab9f2a1768a2eacecc6fff606_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e2130feba6a33a0250d2163607800511ac58c4a91cd1fb82d9ab4b6d2846530 = $this->env->getExtension("native_profiler");
        $__internal_1e2130feba6a33a0250d2163607800511ac58c4a91cd1fb82d9ab4b6d2846530->enter($__internal_1e2130feba6a33a0250d2163607800511ac58c4a91cd1fb82d9ab4b6d2846530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e2130feba6a33a0250d2163607800511ac58c4a91cd1fb82d9ab4b6d2846530->leave($__internal_1e2130feba6a33a0250d2163607800511ac58c4a91cd1fb82d9ab4b6d2846530_prof);

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
