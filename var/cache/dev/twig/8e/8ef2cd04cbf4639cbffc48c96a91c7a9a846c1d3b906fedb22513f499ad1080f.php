<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b515f127a2c334028715133dc0947c458b6288d49a1651b24ce61ba31510f60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db310cfb7862dd50c1416c1ebf53cd6774fb10af78c89da443c5fbdd1ffbcb71 = $this->env->getExtension("native_profiler");
        $__internal_db310cfb7862dd50c1416c1ebf53cd6774fb10af78c89da443c5fbdd1ffbcb71->enter($__internal_db310cfb7862dd50c1416c1ebf53cd6774fb10af78c89da443c5fbdd1ffbcb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db310cfb7862dd50c1416c1ebf53cd6774fb10af78c89da443c5fbdd1ffbcb71->leave($__internal_db310cfb7862dd50c1416c1ebf53cd6774fb10af78c89da443c5fbdd1ffbcb71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d545d7f7c91171a5af23cad2b806dc363e96a3b735b7193d0ac6de7027dc033 = $this->env->getExtension("native_profiler");
        $__internal_6d545d7f7c91171a5af23cad2b806dc363e96a3b735b7193d0ac6de7027dc033->enter($__internal_6d545d7f7c91171a5af23cad2b806dc363e96a3b735b7193d0ac6de7027dc033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6d545d7f7c91171a5af23cad2b806dc363e96a3b735b7193d0ac6de7027dc033->leave($__internal_6d545d7f7c91171a5af23cad2b806dc363e96a3b735b7193d0ac6de7027dc033_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_789a8f3ce6254846e6a99433dc0dbc0ea0b3d019fbe88195d16197900590e514 = $this->env->getExtension("native_profiler");
        $__internal_789a8f3ce6254846e6a99433dc0dbc0ea0b3d019fbe88195d16197900590e514->enter($__internal_789a8f3ce6254846e6a99433dc0dbc0ea0b3d019fbe88195d16197900590e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_789a8f3ce6254846e6a99433dc0dbc0ea0b3d019fbe88195d16197900590e514->leave($__internal_789a8f3ce6254846e6a99433dc0dbc0ea0b3d019fbe88195d16197900590e514_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
