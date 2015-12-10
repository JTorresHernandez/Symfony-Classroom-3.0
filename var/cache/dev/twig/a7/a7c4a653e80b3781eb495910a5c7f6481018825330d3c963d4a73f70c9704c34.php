<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3bd5f93d4c7faf104fcc9ea60a6c332b4c7873f5a0a8a013b00d888572c4eccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2f4f4b185d18ae81cf0f7a7f9bc8c4f5c9fd964e9a25d0bf072d35e5cf401e7 = $this->env->getExtension("native_profiler");
        $__internal_b2f4f4b185d18ae81cf0f7a7f9bc8c4f5c9fd964e9a25d0bf072d35e5cf401e7->enter($__internal_b2f4f4b185d18ae81cf0f7a7f9bc8c4f5c9fd964e9a25d0bf072d35e5cf401e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f4f4b185d18ae81cf0f7a7f9bc8c4f5c9fd964e9a25d0bf072d35e5cf401e7->leave($__internal_b2f4f4b185d18ae81cf0f7a7f9bc8c4f5c9fd964e9a25d0bf072d35e5cf401e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_559deeef67abd484c3cf7ae18b188d9e409f0fff2cfb9b73778f4a33ecd41545 = $this->env->getExtension("native_profiler");
        $__internal_559deeef67abd484c3cf7ae18b188d9e409f0fff2cfb9b73778f4a33ecd41545->enter($__internal_559deeef67abd484c3cf7ae18b188d9e409f0fff2cfb9b73778f4a33ecd41545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_559deeef67abd484c3cf7ae18b188d9e409f0fff2cfb9b73778f4a33ecd41545->leave($__internal_559deeef67abd484c3cf7ae18b188d9e409f0fff2cfb9b73778f4a33ecd41545_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
