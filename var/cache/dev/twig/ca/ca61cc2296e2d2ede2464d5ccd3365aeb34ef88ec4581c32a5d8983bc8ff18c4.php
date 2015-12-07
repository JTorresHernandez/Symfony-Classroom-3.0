<?php

/* :article:articles.html.twig */
class __TwigTemplate_3a0ff023750804c02728265f4e4aa91f263771919df71a4e3e7e652fc3756650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:articles.html.twig", 1);
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
        $__internal_c7376d4863e5f432c49442ae63f043cfe20970fa32e67f2aeaa44211ce97fc33 = $this->env->getExtension("native_profiler");
        $__internal_c7376d4863e5f432c49442ae63f043cfe20970fa32e67f2aeaa44211ce97fc33->enter($__internal_c7376d4863e5f432c49442ae63f043cfe20970fa32e67f2aeaa44211ce97fc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7376d4863e5f432c49442ae63f043cfe20970fa32e67f2aeaa44211ce97fc33->leave($__internal_c7376d4863e5f432c49442ae63f043cfe20970fa32e67f2aeaa44211ce97fc33_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_8394373cc0faedd224e5bc4cbce27f29480ca163f59b6a1c6371adf2e6e7fc28 = $this->env->getExtension("native_profiler");
        $__internal_8394373cc0faedd224e5bc4cbce27f29480ca163f59b6a1c6371adf2e6e7fc28->enter($__internal_8394373cc0faedd224e5bc4cbce27f29480ca163f59b6a1c6371adf2e6e7fc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_8394373cc0faedd224e5bc4cbce27f29480ca163f59b6a1c6371adf2e6e7fc28->leave($__internal_8394373cc0faedd224e5bc4cbce27f29480ca163f59b6a1c6371adf2e6e7fc28_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14643bfaf40ad5ba095d663c506596440c88f673bf02ccf2b0efd5186b1fc5d6 = $this->env->getExtension("native_profiler");
        $__internal_14643bfaf40ad5ba095d663c506596440c88f673bf02ccf2b0efd5186b1fc5d6->enter($__internal_14643bfaf40ad5ba095d663c506596440c88f673bf02ccf2b0efd5186b1fc5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1> <strong>Author:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
        <div style=\"padding: 20px;font-size: medium\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
        </div>
        <div>
            <strong>Tags:</strong>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 14
                echo "                ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
        <div><strong>Created:</strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " | <strong>Updated:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <div class=\"navigation\">
        ";
        // line 20
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
    </div>
";
        
        $__internal_14643bfaf40ad5ba095d663c506596440c88f673bf02ccf2b0efd5186b1fc5d6->leave($__internal_14643bfaf40ad5ba095d663c506596440c88f673bf02ccf2b0efd5186b1fc5d6_prof);

    }

    public function getTemplateName()
    {
        return ":article:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  99 => 19,  89 => 17,  86 => 16,  77 => 14,  73 => 13,  66 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <h1>{{ article.title }}</h1> <strong>Author:</strong> {{ article.author }}*/
/*         <div style="padding: 20px;font-size: medium">*/
/*             {{ article.content }}*/
/*         </div>*/
/*         <div>*/
/*             <strong>Tags:</strong>*/
/*             {% for tag in article.tags %}*/
/*                 {{ tag }},*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div><strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} | <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(articles) }}*/
/*     </div>*/
/* {% endblock %}*/
