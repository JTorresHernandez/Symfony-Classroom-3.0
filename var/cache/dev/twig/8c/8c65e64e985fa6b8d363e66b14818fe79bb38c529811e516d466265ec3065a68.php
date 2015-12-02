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
        $__internal_2a7589307804d8278430f0c44b5a08bb6d25f834bc69cb9782a0484f82f300ef = $this->env->getExtension("native_profiler");
        $__internal_2a7589307804d8278430f0c44b5a08bb6d25f834bc69cb9782a0484f82f300ef->enter($__internal_2a7589307804d8278430f0c44b5a08bb6d25f834bc69cb9782a0484f82f300ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7589307804d8278430f0c44b5a08bb6d25f834bc69cb9782a0484f82f300ef->leave($__internal_2a7589307804d8278430f0c44b5a08bb6d25f834bc69cb9782a0484f82f300ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5213ca32f391b84c1179aae838b1c296c8dce24e826ad792576ae176c9596052 = $this->env->getExtension("native_profiler");
        $__internal_5213ca32f391b84c1179aae838b1c296c8dce24e826ad792576ae176c9596052->enter($__internal_5213ca32f391b84c1179aae838b1c296c8dce24e826ad792576ae176c9596052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5213ca32f391b84c1179aae838b1c296c8dce24e826ad792576ae176c9596052->leave($__internal_5213ca32f391b84c1179aae838b1c296c8dce24e826ad792576ae176c9596052_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9561dc13c825f0131777d389ca54299a6b2583dd0927833d1f1a686bd2ba6a9d = $this->env->getExtension("native_profiler");
        $__internal_9561dc13c825f0131777d389ca54299a6b2583dd0927833d1f1a686bd2ba6a9d->enter($__internal_9561dc13c825f0131777d389ca54299a6b2583dd0927833d1f1a686bd2ba6a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9561dc13c825f0131777d389ca54299a6b2583dd0927833d1f1a686bd2ba6a9d->leave($__internal_9561dc13c825f0131777d389ca54299a6b2583dd0927833d1f1a686bd2ba6a9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffc78ddeac9a1540b1103b1a3b19a78922695e0525e0412256faff2d0f380945 = $this->env->getExtension("native_profiler");
        $__internal_ffc78ddeac9a1540b1103b1a3b19a78922695e0525e0412256faff2d0f380945->enter($__internal_ffc78ddeac9a1540b1103b1a3b19a78922695e0525e0412256faff2d0f380945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffc78ddeac9a1540b1103b1a3b19a78922695e0525e0412256faff2d0f380945->leave($__internal_ffc78ddeac9a1540b1103b1a3b19a78922695e0525e0412256faff2d0f380945_prof);

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
