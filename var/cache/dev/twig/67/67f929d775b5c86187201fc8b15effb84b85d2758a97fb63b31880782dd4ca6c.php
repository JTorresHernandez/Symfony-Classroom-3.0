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
        $__internal_72f3d1218f7ac50f208fc33f1f10531e523ed9a73b217fbb3476b43f67af7f12 = $this->env->getExtension("native_profiler");
        $__internal_72f3d1218f7ac50f208fc33f1f10531e523ed9a73b217fbb3476b43f67af7f12->enter($__internal_72f3d1218f7ac50f208fc33f1f10531e523ed9a73b217fbb3476b43f67af7f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f3d1218f7ac50f208fc33f1f10531e523ed9a73b217fbb3476b43f67af7f12->leave($__internal_72f3d1218f7ac50f208fc33f1f10531e523ed9a73b217fbb3476b43f67af7f12_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_2cc9ff6a1cd14327fe151d36d2b52c4cb4bcb149cfa0f7612a3914e78e20552e = $this->env->getExtension("native_profiler");
        $__internal_2cc9ff6a1cd14327fe151d36d2b52c4cb4bcb149cfa0f7612a3914e78e20552e->enter($__internal_2cc9ff6a1cd14327fe151d36d2b52c4cb4bcb149cfa0f7612a3914e78e20552e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_2cc9ff6a1cd14327fe151d36d2b52c4cb4bcb149cfa0f7612a3914e78e20552e->leave($__internal_2cc9ff6a1cd14327fe151d36d2b52c4cb4bcb149cfa0f7612a3914e78e20552e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dbf29208eaefbe318601a87c152b684f935da8ea1ec83e5fb747e31e5c415db = $this->env->getExtension("native_profiler");
        $__internal_0dbf29208eaefbe318601a87c152b684f935da8ea1ec83e5fb747e31e5c415db->enter($__internal_0dbf29208eaefbe318601a87c152b684f935da8ea1ec83e5fb747e31e5c415db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dbf29208eaefbe318601a87c152b684f935da8ea1ec83e5fb747e31e5c415db->leave($__internal_0dbf29208eaefbe318601a87c152b684f935da8ea1ec83e5fb747e31e5c415db_prof);

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
