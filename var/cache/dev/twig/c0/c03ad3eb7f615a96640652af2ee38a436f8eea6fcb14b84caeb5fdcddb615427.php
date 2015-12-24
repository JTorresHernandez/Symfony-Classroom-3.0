<?php

/* :article:article_content.html.twig */
class __TwigTemplate_74f14fe99030e32c9188050ce044531ad680d48ce66e3006caabb7a99c35e8eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed8d60db19478fd5f1c3a5eae90171dcdd298331911c997244cf952ad69cdab = $this->env->getExtension("native_profiler");
        $__internal_1ed8d60db19478fd5f1c3a5eae90171dcdd298331911c997244cf952ad69cdab->enter($__internal_1ed8d60db19478fd5f1c3a5eae90171dcdd298331911c997244cf952ad69cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

        // line 1
        echo "<div class=\"rounded-box margin-bottom-lg\"> ";
        // line 2
        echo "    <div style=\"float: right;\">
        ";
        // line 3
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 4
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-151-edit.png"), "html", null, true);
            echo "\" alt=\"edit article\" />
            </a>
            ";
            // line 7
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_article_remove", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-198-remove.png"), "html", null, true);
                echo "\" alt=\"remove article\" />
                </a>
            ";
            }
            // line 12
            echo "        ";
        }
        // line 13
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "count", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-310-comments.png"), "html", null, true);
        echo "\" /> </a>
    </div>
    <h1 style=\"margin-top: 0px\"><a style=\"color: inherit; text-decoration: inherit;\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a></h1>
    <div>
        <strong>Author:</strong> <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</a> ::
        <strong>Created:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " ::
        <strong>Updated:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " ::
    </div>
    <div id=\"article-intro\" style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 24
        if (array_key_exists("show_content", $context)) {
            // line 25
            echo "        <div id=\"article-content\" style=\"margin-bottom:20px;padding: 0px 20px;font-size: medium\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 29
        echo "    <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
        <div style=\"margin: 10px 0px;\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 32
            echo "                <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byTag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
        <div></div>
    </div>
</div> ";
        // line 38
        echo "
";
        // line 39
        if (array_key_exists("show_content", $context)) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Comment:showForm", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))));
            echo "
";
        }
        // line 42
        echo "
";
        // line 43
        if (array_key_exists("comments", $context)) {
            // line 44
            echo "    ";
            $this->loadTemplate(":comment:showCommentsByArticle.html.twig", ":article:article_content.html.twig", 44)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        }
        
        $__internal_1ed8d60db19478fd5f1c3a5eae90171dcdd298331911c997244cf952ad69cdab->leave($__internal_1ed8d60db19478fd5f1c3a5eae90171dcdd298331911c997244cf952ad69cdab_prof);

    }

    public function getTemplateName()
    {
        return ":article:article_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  142 => 43,  139 => 42,  133 => 40,  131 => 39,  128 => 38,  123 => 34,  112 => 32,  108 => 31,  104 => 29,  98 => 26,  95 => 25,  93 => 24,  88 => 22,  82 => 19,  78 => 18,  72 => 17,  65 => 15,  55 => 13,  52 => 12,  46 => 9,  41 => 8,  39 => 7,  34 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-lg"> {# article #}*/
/*     <div style="float: right;">*/
/*         {% if article.author == app.user or is_granted('ROLE_ADMIN') %}*/
/*             <a href="{{ path('app_article_edit', {'slug': article.slug}) }}">*/
/*                 <img src="{{ asset('icons/glyphicons-151-edit.png') }}" alt="edit article" />*/
/*             </a>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a href="{{ path('app_admin_article_remove', {'slug': article.slug}) }}">*/
/*                     <img src="{{ asset('icons/glyphicons-198-remove.png') }}" alt="remove article" />*/
/*                 </a>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {{ article.comments.count }} <a href="{{ path('app_article_show', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-310-comments.png') }}" /> </a>*/
/*     </div>*/
/*     <h1 style="margin-top: 0px"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'slug': article.slug}) }}">{{ article.title }}</a></h1>*/
/*     <div>*/
/*         <strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': article.author.username}) }}">@{{ article.author }}</a> ::*/
/*         <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} ::*/
/*         <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }} ::*/
/*     </div>*/
/*     <div id="article-intro" style="padding: 20px;font-size: medium;font-weight: bold">*/
/*         {{ article.intro }}*/
/*     </div>*/
/*     {% if show_content is defined %}*/
/*         <div id="article-content" style="margin-bottom:20px;padding: 0px 20px;font-size: medium">*/
/*             {{ article.content }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <div style="border-top:1px solid #DDD; padding-top: 10px">*/
/*         <div style="margin: 10px 0px;">*/
/*             {% for tag in article.tags %}*/
/*                 <a class="btn btn-default" href="{{ path('app_articles_byTag', {'name': tag.name}) }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div></div>*/
/*     </div>*/
/* </div> {# end article#}*/
/* */
/* {% if show_content is defined %}*/
/*     {{ render(controller('AppBundle:Comment:showForm', {'id': article.id})) }}*/
/* {% endif %}*/
/* */
/* {% if comments is defined %}*/
/*     {% include ':comment:showCommentsByArticle.html.twig' with {'comments': comments} %}*/
/* {% endif %}*/
