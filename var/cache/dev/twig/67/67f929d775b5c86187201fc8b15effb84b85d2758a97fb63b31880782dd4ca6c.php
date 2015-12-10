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
        $__internal_ea3b2a79d7a5df5b504aa55639c6a187a12d32bbd5143a1ef75955a3fc7eaad8 = $this->env->getExtension("native_profiler");
        $__internal_ea3b2a79d7a5df5b504aa55639c6a187a12d32bbd5143a1ef75955a3fc7eaad8->enter($__internal_ea3b2a79d7a5df5b504aa55639c6a187a12d32bbd5143a1ef75955a3fc7eaad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3b2a79d7a5df5b504aa55639c6a187a12d32bbd5143a1ef75955a3fc7eaad8->leave($__internal_ea3b2a79d7a5df5b504aa55639c6a187a12d32bbd5143a1ef75955a3fc7eaad8_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_645f6a737b4c7459b186bcecd9ee5ab0f48d2fe52bc633f67181d7e956d308f5 = $this->env->getExtension("native_profiler");
        $__internal_645f6a737b4c7459b186bcecd9ee5ab0f48d2fe52bc633f67181d7e956d308f5->enter($__internal_645f6a737b4c7459b186bcecd9ee5ab0f48d2fe52bc633f67181d7e956d308f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_645f6a737b4c7459b186bcecd9ee5ab0f48d2fe52bc633f67181d7e956d308f5->leave($__internal_645f6a737b4c7459b186bcecd9ee5ab0f48d2fe52bc633f67181d7e956d308f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f44e46a789f621d964eaff278c7c655e31d6187f7e41718d633baaff1ce271d5 = $this->env->getExtension("native_profiler");
        $__internal_f44e46a789f621d964eaff278c7c655e31d6187f7e41718d633baaff1ce271d5->enter($__internal_f44e46a789f621d964eaff278c7c655e31d6187f7e41718d633baaff1ce271d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f44e46a789f621d964eaff278c7c655e31d6187f7e41718d633baaff1ce271d5->leave($__internal_f44e46a789f621d964eaff278c7c655e31d6187f7e41718d633baaff1ce271d5_prof);

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
