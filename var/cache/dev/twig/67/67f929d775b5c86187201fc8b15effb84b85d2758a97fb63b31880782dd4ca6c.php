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
        $__internal_bb35b124721b401d39e6b4cbda632d7ab67c4a5e0b131c67b25f5f102ef8e4b4 = $this->env->getExtension("native_profiler");
        $__internal_bb35b124721b401d39e6b4cbda632d7ab67c4a5e0b131c67b25f5f102ef8e4b4->enter($__internal_bb35b124721b401d39e6b4cbda632d7ab67c4a5e0b131c67b25f5f102ef8e4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb35b124721b401d39e6b4cbda632d7ab67c4a5e0b131c67b25f5f102ef8e4b4->leave($__internal_bb35b124721b401d39e6b4cbda632d7ab67c4a5e0b131c67b25f5f102ef8e4b4_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1058d1bf724bb5fca25b43b55f4d62ba58137e1091f868aa11349d988e3bfe8f = $this->env->getExtension("native_profiler");
        $__internal_1058d1bf724bb5fca25b43b55f4d62ba58137e1091f868aa11349d988e3bfe8f->enter($__internal_1058d1bf724bb5fca25b43b55f4d62ba58137e1091f868aa11349d988e3bfe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_1058d1bf724bb5fca25b43b55f4d62ba58137e1091f868aa11349d988e3bfe8f->leave($__internal_1058d1bf724bb5fca25b43b55f4d62ba58137e1091f868aa11349d988e3bfe8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e6f8012edbaff39bb69d6b12d935a2e121f2f76ec4333158b439fe83f66f501 = $this->env->getExtension("native_profiler");
        $__internal_2e6f8012edbaff39bb69d6b12d935a2e121f2f76ec4333158b439fe83f66f501->enter($__internal_2e6f8012edbaff39bb69d6b12d935a2e121f2f76ec4333158b439fe83f66f501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
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
        
        $__internal_2e6f8012edbaff39bb69d6b12d935a2e121f2f76ec4333158b439fe83f66f501->leave($__internal_2e6f8012edbaff39bb69d6b12d935a2e121f2f76ec4333158b439fe83f66f501_prof);

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
/*                 <div><a href="{{ path('app_article_show', {'id': article.id}) }}">{{ article }}</a></div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(tags) }}*/
/*     </div>*/
/* {% endblock %}*/
