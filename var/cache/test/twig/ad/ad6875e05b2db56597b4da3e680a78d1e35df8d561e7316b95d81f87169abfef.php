<?php

/* :tag:tags.html.twig */
class __TwigTemplate_4754612268b56e3016d83dbc28c388062aa56bf443068decbed9aec540e42bdd extends Twig_Template
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
        $__internal_5c725236f0048af68f19eb5cfb52e857d5686f62a5eef97db0314df9ebd40555 = $this->env->getExtension("native_profiler");
        $__internal_5c725236f0048af68f19eb5cfb52e857d5686f62a5eef97db0314df9ebd40555->enter($__internal_5c725236f0048af68f19eb5cfb52e857d5686f62a5eef97db0314df9ebd40555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c725236f0048af68f19eb5cfb52e857d5686f62a5eef97db0314df9ebd40555->leave($__internal_5c725236f0048af68f19eb5cfb52e857d5686f62a5eef97db0314df9ebd40555_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_3c30c6df9bbeba322a034913d4c055a4648da42f4cbead6c926df96165752d6d = $this->env->getExtension("native_profiler");
        $__internal_3c30c6df9bbeba322a034913d4c055a4648da42f4cbead6c926df96165752d6d->enter($__internal_3c30c6df9bbeba322a034913d4c055a4648da42f4cbead6c926df96165752d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_3c30c6df9bbeba322a034913d4c055a4648da42f4cbead6c926df96165752d6d->leave($__internal_3c30c6df9bbeba322a034913d4c055a4648da42f4cbead6c926df96165752d6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f10ee145aa82bc9e28506d8b7bd9b99ee0a889dcd26deab053e7de4a32d92615 = $this->env->getExtension("native_profiler");
        $__internal_f10ee145aa82bc9e28506d8b7bd9b99ee0a889dcd26deab053e7de4a32d92615->enter($__internal_f10ee145aa82bc9e28506d8b7bd9b99ee0a889dcd26deab053e7de4a32d92615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f10ee145aa82bc9e28506d8b7bd9b99ee0a889dcd26deab053e7de4a32d92615->leave($__internal_f10ee145aa82bc9e28506d8b7bd9b99ee0a889dcd26deab053e7de4a32d92615_prof);

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
