<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d974e029a2fa0d75a79af04b5abb1b71425f50bc485d715af6141f9c726ad50e extends Twig_Template
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
        $__internal_a315c2163c57d91e8511d1fab081bc277075c12a24177df526f9a2102267f4c5 = $this->env->getExtension("native_profiler");
        $__internal_a315c2163c57d91e8511d1fab081bc277075c12a24177df526f9a2102267f4c5->enter($__internal_a315c2163c57d91e8511d1fab081bc277075c12a24177df526f9a2102267f4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a315c2163c57d91e8511d1fab081bc277075c12a24177df526f9a2102267f4c5->leave($__internal_a315c2163c57d91e8511d1fab081bc277075c12a24177df526f9a2102267f4c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b658d146a21dcbb3031bfca033362c10d588becbc4acdc27ac82693e1837e42a = $this->env->getExtension("native_profiler");
        $__internal_b658d146a21dcbb3031bfca033362c10d588becbc4acdc27ac82693e1837e42a->enter($__internal_b658d146a21dcbb3031bfca033362c10d588becbc4acdc27ac82693e1837e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b658d146a21dcbb3031bfca033362c10d588becbc4acdc27ac82693e1837e42a->leave($__internal_b658d146a21dcbb3031bfca033362c10d588becbc4acdc27ac82693e1837e42a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb54091645ccb520e0eca1b2b06e4005b179a8ec96bc8be1ccbc52f898b332f4 = $this->env->getExtension("native_profiler");
        $__internal_fb54091645ccb520e0eca1b2b06e4005b179a8ec96bc8be1ccbc52f898b332f4->enter($__internal_fb54091645ccb520e0eca1b2b06e4005b179a8ec96bc8be1ccbc52f898b332f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb54091645ccb520e0eca1b2b06e4005b179a8ec96bc8be1ccbc52f898b332f4->leave($__internal_fb54091645ccb520e0eca1b2b06e4005b179a8ec96bc8be1ccbc52f898b332f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee4f06d42820f8c56335bae04c2cb5cfc665d762774767ffb58647f5d31f2db7 = $this->env->getExtension("native_profiler");
        $__internal_ee4f06d42820f8c56335bae04c2cb5cfc665d762774767ffb58647f5d31f2db7->enter($__internal_ee4f06d42820f8c56335bae04c2cb5cfc665d762774767ffb58647f5d31f2db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee4f06d42820f8c56335bae04c2cb5cfc665d762774767ffb58647f5d31f2db7->leave($__internal_ee4f06d42820f8c56335bae04c2cb5cfc665d762774767ffb58647f5d31f2db7_prof);

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
