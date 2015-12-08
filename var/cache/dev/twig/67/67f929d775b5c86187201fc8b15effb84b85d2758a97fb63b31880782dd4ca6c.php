<?php

/* :tag:tags.html.twig */
class __TwigTemplate_0f02d57e95c6c58794039610be94cdef4796739e5bbd83b492bb72d5b7f421a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":tag:tags.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4197f8ab266c108aec488ed6eab2757f9bd4c50505b56824f3743028bf8fcb1 = $this->env->getExtension("native_profiler");
        $__internal_f4197f8ab266c108aec488ed6eab2757f9bd4c50505b56824f3743028bf8fcb1->enter($__internal_f4197f8ab266c108aec488ed6eab2757f9bd4c50505b56824f3743028bf8fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4197f8ab266c108aec488ed6eab2757f9bd4c50505b56824f3743028bf8fcb1->leave($__internal_f4197f8ab266c108aec488ed6eab2757f9bd4c50505b56824f3743028bf8fcb1_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_865cf9c9ecea3b3e22ecee7dfcc47e88b2502ec16ef17da7030107bee49569d5 = $this->env->getExtension("native_profiler");
        $__internal_865cf9c9ecea3b3e22ecee7dfcc47e88b2502ec16ef17da7030107bee49569d5->enter($__internal_865cf9c9ecea3b3e22ecee7dfcc47e88b2502ec16ef17da7030107bee49569d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_865cf9c9ecea3b3e22ecee7dfcc47e88b2502ec16ef17da7030107bee49569d5->leave($__internal_865cf9c9ecea3b3e22ecee7dfcc47e88b2502ec16ef17da7030107bee49569d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fae04302c8374d17f60699223732ab030c1fe1a2a8ee8aa0f43d7e57028b2cc = $this->env->getExtension("native_profiler");
        $__internal_8fae04302c8374d17f60699223732ab030c1fe1a2a8ee8aa0f43d7e57028b2cc->enter($__internal_8fae04302c8374d17f60699223732ab030c1fe1a2a8ee8aa0f43d7e57028b2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</h1>

        <div style=\"padding: 5px 20px\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tag"], "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 11
                echo "                <div>";
                echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8fae04302c8374d17f60699223732ab030c1fe1a2a8ee8aa0f43d7e57028b2cc->leave($__internal_8fae04302c8374d17f60699223732ab030c1fe1a2a8ee8aa0f43d7e57028b2cc_prof);

    }

    public function getTemplateName()
    {
        return ":tag:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Tags{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for tag in tags %}*/
/*         <h1>{{ tag.name }}</h1>*/
/* */
/*         <div style="padding: 5px 20px">*/
/*             {% for article in tag.articles %}*/
/*                 <div>{{ article }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
