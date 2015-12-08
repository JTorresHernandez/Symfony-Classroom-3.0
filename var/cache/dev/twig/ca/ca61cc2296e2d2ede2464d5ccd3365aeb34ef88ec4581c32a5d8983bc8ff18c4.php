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
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_bc89548c0cf242f0cb75274f827695703b8583dd2ae3333956e107f084eab46f = $this->env->getExtension("native_profiler");
        $__internal_bc89548c0cf242f0cb75274f827695703b8583dd2ae3333956e107f084eab46f->enter($__internal_bc89548c0cf242f0cb75274f827695703b8583dd2ae3333956e107f084eab46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc89548c0cf242f0cb75274f827695703b8583dd2ae3333956e107f084eab46f->leave($__internal_bc89548c0cf242f0cb75274f827695703b8583dd2ae3333956e107f084eab46f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db768f35d8511a35fa6618c5ef051d9ddf9398214cd5afb5ad777204195ee615 = $this->env->getExtension("native_profiler");
        $__internal_db768f35d8511a35fa6618c5ef051d9ddf9398214cd5afb5ad777204195ee615->enter($__internal_db768f35d8511a35fa6618c5ef051d9ddf9398214cd5afb5ad777204195ee615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/css/custom.css\" />
";
        
        $__internal_db768f35d8511a35fa6618c5ef051d9ddf9398214cd5afb5ad777204195ee615->leave($__internal_db768f35d8511a35fa6618c5ef051d9ddf9398214cd5afb5ad777204195ee615_prof);

    }

    // line 8
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7aaa4bf93f2bf9a9fda8f26e7f4db2200548d48a6a28129aaf0a93fbc1c1cf46 = $this->env->getExtension("native_profiler");
        $__internal_7aaa4bf93f2bf9a9fda8f26e7f4db2200548d48a6a28129aaf0a93fbc1c1cf46->enter($__internal_7aaa4bf93f2bf9a9fda8f26e7f4db2200548d48a6a28129aaf0a93fbc1c1cf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_7aaa4bf93f2bf9a9fda8f26e7f4db2200548d48a6a28129aaf0a93fbc1c1cf46->leave($__internal_7aaa4bf93f2bf9a9fda8f26e7f4db2200548d48a6a28129aaf0a93fbc1c1cf46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1383c732b50496f13e8c2b4cfa826316061ef845352535a14d1caba006949d07 = $this->env->getExtension("native_profiler");
        $__internal_1383c732b50496f13e8c2b4cfa826316061ef845352535a14d1caba006949d07->enter($__internal_1383c732b50496f13e8c2b4cfa826316061ef845352535a14d1caba006949d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        <div class=\"article\"> ";
            // line 13
            echo "            <h1 style=\"margin-top: 0px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
            <div><strong>Author:</strong> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo " :: <strong>Created:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " :: <strong>Updated:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</div>
            <div style=\"padding: 20px;font-size: medium\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
            </div>
            <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
                <div style=\"margin: 10px 0px;\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 21
                echo "                        <span class=\"article-tag\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
                <div></div>
            </div>
        </div> ";
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <div class=\"navigation\">
        ";
        // line 29
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
    </div>
";
        
        $__internal_1383c732b50496f13e8c2b4cfa826316061ef845352535a14d1caba006949d07->leave($__internal_1383c732b50496f13e8c2b4cfa826316061ef845352535a14d1caba006949d07_prof);

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
        return array (  126 => 29,  123 => 28,  117 => 27,  112 => 23,  103 => 21,  99 => 20,  92 => 16,  83 => 14,  78 => 13,  76 => 12,  71 => 11,  65 => 10,  53 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="/css/custom.css" />*/
/* {% endblock %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <div class="article"> {# article #}*/
/*             <h1 style="margin-top: 0px">{{ article.title }}</h1>*/
/*             <div><strong>Author:</strong> {{ article.author }} :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*             <div style="padding: 20px;font-size: medium">*/
/*                 {{ article.content }}*/
/*             </div>*/
/*             <div style="border-top:1px solid #DDD; padding-top: 10px">*/
/*                 <div style="margin: 10px 0px;">*/
/*                     {% for tag in article.tags %}*/
/*                         <span class="article-tag">{{ tag }}</span>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div></div>*/
/*             </div>*/
/*         </div> {# end article#}*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(articles) }}*/
/*     </div>*/
/* {% endblock %}*/
