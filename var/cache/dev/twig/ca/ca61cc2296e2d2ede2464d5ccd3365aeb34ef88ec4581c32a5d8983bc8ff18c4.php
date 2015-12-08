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
        $__internal_a0ba07ec741e397f6b7de41dae6f39f64170e7ff8d2c3cce7e0e8342c7c8d37b = $this->env->getExtension("native_profiler");
        $__internal_a0ba07ec741e397f6b7de41dae6f39f64170e7ff8d2c3cce7e0e8342c7c8d37b->enter($__internal_a0ba07ec741e397f6b7de41dae6f39f64170e7ff8d2c3cce7e0e8342c7c8d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ba07ec741e397f6b7de41dae6f39f64170e7ff8d2c3cce7e0e8342c7c8d37b->leave($__internal_a0ba07ec741e397f6b7de41dae6f39f64170e7ff8d2c3cce7e0e8342c7c8d37b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70abad857400b5c9994a0b9fa305e82f1ee3ed9281f31ddf391d5ddc77d2f934 = $this->env->getExtension("native_profiler");
        $__internal_70abad857400b5c9994a0b9fa305e82f1ee3ed9281f31ddf391d5ddc77d2f934->enter($__internal_70abad857400b5c9994a0b9fa305e82f1ee3ed9281f31ddf391d5ddc77d2f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/css/custom.css\" />
";
        
        $__internal_70abad857400b5c9994a0b9fa305e82f1ee3ed9281f31ddf391d5ddc77d2f934->leave($__internal_70abad857400b5c9994a0b9fa305e82f1ee3ed9281f31ddf391d5ddc77d2f934_prof);

    }

    // line 8
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_159269bc93e6400794e934dae428b91506f47eadba1950135388d86d4f4c5fe5 = $this->env->getExtension("native_profiler");
        $__internal_159269bc93e6400794e934dae428b91506f47eadba1950135388d86d4f4c5fe5->enter($__internal_159269bc93e6400794e934dae428b91506f47eadba1950135388d86d4f4c5fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_159269bc93e6400794e934dae428b91506f47eadba1950135388d86d4f4c5fe5->leave($__internal_159269bc93e6400794e934dae428b91506f47eadba1950135388d86d4f4c5fe5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6bf48b9e3ce0cc579bd4e3901336d9db49ef9ba5503358d83397f31917f8413 = $this->env->getExtension("native_profiler");
        $__internal_f6bf48b9e3ce0cc579bd4e3901336d9db49ef9ba5503358d83397f31917f8413->enter($__internal_f6bf48b9e3ce0cc579bd4e3901336d9db49ef9ba5503358d83397f31917f8413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        <div class=\"article\"> ";
            // line 13
            echo "            ";
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["article"], "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
                // line 14
                echo "                <div style=\"float: right;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">Edit</a></div>
            ";
            }
            // line 16
            echo "            <h1 style=\"margin-top: 0px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
            <div><strong>Author:</strong> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo " :: <strong>Created:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " :: <strong>Updated:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</div>
            <div style=\"padding: 20px;font-size: medium\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
            </div>
            <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
                <div style=\"margin: 10px 0px;\">
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "                        <a class=\"btn btn-default\" href=\"";
                echo $this->env->getExtension('routing')->getPath("app_tags_tags");
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </div>
                <div></div>
            </div>
        </div> ";
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <div class=\"navigation\">
        ";
        // line 32
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
    </div>
";
        
        $__internal_f6bf48b9e3ce0cc579bd4e3901336d9db49ef9ba5503358d83397f31917f8413->leave($__internal_f6bf48b9e3ce0cc579bd4e3901336d9db49ef9ba5503358d83397f31917f8413_prof);

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
        return array (  137 => 32,  134 => 31,  128 => 30,  123 => 26,  112 => 24,  108 => 23,  101 => 19,  92 => 17,  87 => 16,  81 => 14,  78 => 13,  76 => 12,  71 => 11,  65 => 10,  53 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
/*             {% if is_granted('ROLE_ADMIN') or article.author == app.user %}*/
/*                 <div style="float: right;"><a href="{{ path('app_article_edit', {'id': article.id}) }}">Edit</a></div>*/
/*             {% endif %}*/
/*             <h1 style="margin-top: 0px">{{ article.title }}</h1>*/
/*             <div><strong>Author:</strong> {{ article.author }} :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*             <div style="padding: 20px;font-size: medium">*/
/*                 {{ article.content }}*/
/*             </div>*/
/*             <div style="border-top:1px solid #DDD; padding-top: 10px">*/
/*                 <div style="margin: 10px 0px;">*/
/*                     {% for tag in article.tags %}*/
/*                         <a class="btn btn-default" href="{{ path('app_tags_tags') }}">{{ tag }}</a>*/
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
