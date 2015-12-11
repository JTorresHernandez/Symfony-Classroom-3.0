<?php

/* :tag:tags.html.twig */
class __TwigTemplate_d1e9ab62c5190a8e60ea9fedcf83c16cc725faa87d1f18100ac917bce1d00ea2 extends Twig_Template
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
        $__internal_748cbe65ee4b5ed3be56cc6f3883e4df445664cf3cba7912cc2e446dbcd84bb9 = $this->env->getExtension("native_profiler");
        $__internal_748cbe65ee4b5ed3be56cc6f3883e4df445664cf3cba7912cc2e446dbcd84bb9->enter($__internal_748cbe65ee4b5ed3be56cc6f3883e4df445664cf3cba7912cc2e446dbcd84bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748cbe65ee4b5ed3be56cc6f3883e4df445664cf3cba7912cc2e446dbcd84bb9->leave($__internal_748cbe65ee4b5ed3be56cc6f3883e4df445664cf3cba7912cc2e446dbcd84bb9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_783b743b7a4d20ed4e37ee14ecab49a0cce2f9561b0d340ca5ba3994d24c9a60 = $this->env->getExtension("native_profiler");
        $__internal_783b743b7a4d20ed4e37ee14ecab49a0cce2f9561b0d340ca5ba3994d24c9a60->enter($__internal_783b743b7a4d20ed4e37ee14ecab49a0cce2f9561b0d340ca5ba3994d24c9a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_783b743b7a4d20ed4e37ee14ecab49a0cce2f9561b0d340ca5ba3994d24c9a60->leave($__internal_783b743b7a4d20ed4e37ee14ecab49a0cce2f9561b0d340ca5ba3994d24c9a60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94cd0cb9896e43b002994b4ff1583abf6db1c329aa18d3cb2fd2eda21e83675a = $this->env->getExtension("native_profiler");
        $__internal_94cd0cb9896e43b002994b4ff1583abf6db1c329aa18d3cb2fd2eda21e83675a->enter($__internal_94cd0cb9896e43b002994b4ff1583abf6db1c329aa18d3cb2fd2eda21e83675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94cd0cb9896e43b002994b4ff1583abf6db1c329aa18d3cb2fd2eda21e83675a->leave($__internal_94cd0cb9896e43b002994b4ff1583abf6db1c329aa18d3cb2fd2eda21e83675a_prof);

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
