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
        $__internal_83df07a92dd4834c4e7b48e29402c599fe410cb2fd689f8c26584fc2c8886c96 = $this->env->getExtension("native_profiler");
        $__internal_83df07a92dd4834c4e7b48e29402c599fe410cb2fd689f8c26584fc2c8886c96->enter($__internal_83df07a92dd4834c4e7b48e29402c599fe410cb2fd689f8c26584fc2c8886c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83df07a92dd4834c4e7b48e29402c599fe410cb2fd689f8c26584fc2c8886c96->leave($__internal_83df07a92dd4834c4e7b48e29402c599fe410cb2fd689f8c26584fc2c8886c96_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_11d3e6e1e87fc6711bc9be31d1a88bd26e03a7f2ed7b9da06635d743b2603dac = $this->env->getExtension("native_profiler");
        $__internal_11d3e6e1e87fc6711bc9be31d1a88bd26e03a7f2ed7b9da06635d743b2603dac->enter($__internal_11d3e6e1e87fc6711bc9be31d1a88bd26e03a7f2ed7b9da06635d743b2603dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_11d3e6e1e87fc6711bc9be31d1a88bd26e03a7f2ed7b9da06635d743b2603dac->leave($__internal_11d3e6e1e87fc6711bc9be31d1a88bd26e03a7f2ed7b9da06635d743b2603dac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78d3bc62544a338528dedcecc55848d3a1570abb329417d9bb41b348e298c593 = $this->env->getExtension("native_profiler");
        $__internal_78d3bc62544a338528dedcecc55848d3a1570abb329417d9bb41b348e298c593->enter($__internal_78d3bc62544a338528dedcecc55848d3a1570abb329417d9bb41b348e298c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78d3bc62544a338528dedcecc55848d3a1570abb329417d9bb41b348e298c593->leave($__internal_78d3bc62544a338528dedcecc55848d3a1570abb329417d9bb41b348e298c593_prof);

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
