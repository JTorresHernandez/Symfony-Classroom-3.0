<?php

/* :tag:tags.html.twig */
class __TwigTemplate_2ea89373b866d215425e3c38cb6f743e1fca9dbb59b01c4f045103dbbdb27a34 extends Twig_Template
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
        $__internal_4488c52c8aae7ff6c2e3d1e678b4e765168524c261fe4aa4db88bc19d660e6f9 = $this->env->getExtension("native_profiler");
        $__internal_4488c52c8aae7ff6c2e3d1e678b4e765168524c261fe4aa4db88bc19d660e6f9->enter($__internal_4488c52c8aae7ff6c2e3d1e678b4e765168524c261fe4aa4db88bc19d660e6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4488c52c8aae7ff6c2e3d1e678b4e765168524c261fe4aa4db88bc19d660e6f9->leave($__internal_4488c52c8aae7ff6c2e3d1e678b4e765168524c261fe4aa4db88bc19d660e6f9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1b9a572a0530c17fe28153bdbaa9b657863fbbf8dd6102d4d8307c87f414b3f8 = $this->env->getExtension("native_profiler");
        $__internal_1b9a572a0530c17fe28153bdbaa9b657863fbbf8dd6102d4d8307c87f414b3f8->enter($__internal_1b9a572a0530c17fe28153bdbaa9b657863fbbf8dd6102d4d8307c87f414b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_1b9a572a0530c17fe28153bdbaa9b657863fbbf8dd6102d4d8307c87f414b3f8->leave($__internal_1b9a572a0530c17fe28153bdbaa9b657863fbbf8dd6102d4d8307c87f414b3f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f198bad8a46c85c29df095b1103aea563dc63e5a5bb76225c90ab8a5aed0f28c = $this->env->getExtension("native_profiler");
        $__internal_f198bad8a46c85c29df095b1103aea563dc63e5a5bb76225c90ab8a5aed0f28c->enter($__internal_f198bad8a46c85c29df095b1103aea563dc63e5a5bb76225c90ab8a5aed0f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f198bad8a46c85c29df095b1103aea563dc63e5a5bb76225c90ab8a5aed0f28c->leave($__internal_f198bad8a46c85c29df095b1103aea563dc63e5a5bb76225c90ab8a5aed0f28c_prof);

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
