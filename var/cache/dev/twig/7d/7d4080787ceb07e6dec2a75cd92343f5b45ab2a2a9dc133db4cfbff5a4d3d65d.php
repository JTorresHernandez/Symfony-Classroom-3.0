<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_c32fd99c7070cbbd17318d628e659b1d5ad021cabb887340729dd22f68c1a5f5 extends Twig_Template
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
        $__internal_790c699ce9b765f7ff4739853843309540fdb6d30b7e0c7738159d27af982027 = $this->env->getExtension("native_profiler");
        $__internal_790c699ce9b765f7ff4739853843309540fdb6d30b7e0c7738159d27af982027->enter($__internal_790c699ce9b765f7ff4739853843309540fdb6d30b7e0c7738159d27af982027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_790c699ce9b765f7ff4739853843309540fdb6d30b7e0c7738159d27af982027->leave($__internal_790c699ce9b765f7ff4739853843309540fdb6d30b7e0c7738159d27af982027_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
