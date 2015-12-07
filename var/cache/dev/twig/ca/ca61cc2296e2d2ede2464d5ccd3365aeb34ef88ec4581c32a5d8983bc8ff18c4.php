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
        $__internal_c59c8d27c4a630a587ab28462923cf8d27ef9da1e4f75d56d7b8c390ed6e00c9 = $this->env->getExtension("native_profiler");
        $__internal_c59c8d27c4a630a587ab28462923cf8d27ef9da1e4f75d56d7b8c390ed6e00c9->enter($__internal_c59c8d27c4a630a587ab28462923cf8d27ef9da1e4f75d56d7b8c390ed6e00c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59c8d27c4a630a587ab28462923cf8d27ef9da1e4f75d56d7b8c390ed6e00c9->leave($__internal_c59c8d27c4a630a587ab28462923cf8d27ef9da1e4f75d56d7b8c390ed6e00c9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_8ff64a078730f57d0e6c6ad6d30647102defbf53f3a0028a7a83159320d74636 = $this->env->getExtension("native_profiler");
        $__internal_8ff64a078730f57d0e6c6ad6d30647102defbf53f3a0028a7a83159320d74636->enter($__internal_8ff64a078730f57d0e6c6ad6d30647102defbf53f3a0028a7a83159320d74636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_8ff64a078730f57d0e6c6ad6d30647102defbf53f3a0028a7a83159320d74636->leave($__internal_8ff64a078730f57d0e6c6ad6d30647102defbf53f3a0028a7a83159320d74636_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c74708cebc4537573206295b06f4e764262125726dfe6063ab26129520617d = $this->env->getExtension("native_profiler");
        $__internal_05c74708cebc4537573206295b06f4e764262125726dfe6063ab26129520617d->enter($__internal_05c74708cebc4537573206295b06f4e764262125726dfe6063ab26129520617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <div style=\"margin: 15px 0;
    padding: 19px 19px 14px;
    background-color: white;
    border: 1px solid #DDD;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;\"> ";
            // line 14
            echo "            <h1 style=\"margin-top: 0px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1> <strong>Author:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
            <div style=\"padding: 20px;font-size: medium\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
            </div>
            <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
                <div>
                    <strong>Tags:</strong>
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 22
                echo "                        ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo ",
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
                <div><strong>Created:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo " | <strong>Updated:</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</div>
            </div>
        </div> ";
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <div class=\"navigation\">
        ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
    </div>
";
        
        $__internal_05c74708cebc4537573206295b06f4e764262125726dfe6063ab26129520617d->leave($__internal_05c74708cebc4537573206295b06f4e764262125726dfe6063ab26129520617d_prof);

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
        return array (  114 => 30,  111 => 29,  105 => 28,  98 => 25,  95 => 24,  86 => 22,  82 => 21,  74 => 16,  66 => 14,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <div style="margin: 15px 0;*/
/*     padding: 19px 19px 14px;*/
/*     background-color: white;*/
/*     border: 1px solid #DDD;*/
/*     -webkit-border-radius: 4px;*/
/*     -moz-border-radius: 4px;*/
/*     border-radius: 4px;"> {# article #}*/
/*             <h1 style="margin-top: 0px">{{ article.title }}</h1> <strong>Author:</strong> {{ article.author }}*/
/*             <div style="padding: 20px;font-size: medium">*/
/*                 {{ article.content }}*/
/*             </div>*/
/*             <div style="border-top:1px solid #DDD; padding-top: 10px">*/
/*                 <div>*/
/*                     <strong>Tags:</strong>*/
/*                     {% for tag in article.tags %}*/
/*                         {{ tag }},*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div><strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} | <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*             </div>*/
/*         </div> {# end article#}*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(articles) }}*/
/*     </div>*/
/* {% endblock %}*/
