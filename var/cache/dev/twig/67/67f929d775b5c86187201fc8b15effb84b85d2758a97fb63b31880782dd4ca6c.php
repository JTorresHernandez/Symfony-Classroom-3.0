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
        $__internal_b1bb02aec71dfc0fe4eb91946f3b0cf2add7c60cf07459b08fd2fde3425d022a = $this->env->getExtension("native_profiler");
        $__internal_b1bb02aec71dfc0fe4eb91946f3b0cf2add7c60cf07459b08fd2fde3425d022a->enter($__internal_b1bb02aec71dfc0fe4eb91946f3b0cf2add7c60cf07459b08fd2fde3425d022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1bb02aec71dfc0fe4eb91946f3b0cf2add7c60cf07459b08fd2fde3425d022a->leave($__internal_b1bb02aec71dfc0fe4eb91946f3b0cf2add7c60cf07459b08fd2fde3425d022a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_5faac556e19c28bb41bed06e4976de401677917f780767837ae42fae45c86805 = $this->env->getExtension("native_profiler");
        $__internal_5faac556e19c28bb41bed06e4976de401677917f780767837ae42fae45c86805->enter($__internal_5faac556e19c28bb41bed06e4976de401677917f780767837ae42fae45c86805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_5faac556e19c28bb41bed06e4976de401677917f780767837ae42fae45c86805->leave($__internal_5faac556e19c28bb41bed06e4976de401677917f780767837ae42fae45c86805_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce67dcecdf0ca2872f65cf0618e488bfaef7af70566c89d24c9264b0ea54f413 = $this->env->getExtension("native_profiler");
        $__internal_ce67dcecdf0ca2872f65cf0618e488bfaef7af70566c89d24c9264b0ea54f413->enter($__internal_ce67dcecdf0ca2872f65cf0618e488bfaef7af70566c89d24c9264b0ea54f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute($context["article"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                echo "</a></div>
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
        // line 15
        echo "    <div class=\"navigation\">
        ";
        // line 16
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        echo "
    </div>
";
        
        $__internal_ce67dcecdf0ca2872f65cf0618e488bfaef7af70566c89d24c9264b0ea54f413->leave($__internal_ce67dcecdf0ca2872f65cf0618e488bfaef7af70566c89d24c9264b0ea54f413_prof);

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
        return array (  90 => 16,  87 => 15,  80 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                 <div><a href="{{ path('app_article_show', {'slug': article.slug}) }}">{{ article }}</a></div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(tags) }}*/
/*     </div>*/
/* {% endblock %}*/
