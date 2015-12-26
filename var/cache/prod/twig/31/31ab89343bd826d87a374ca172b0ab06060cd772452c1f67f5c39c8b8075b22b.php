<?php

/* :article:article_content.html.twig */
class __TwigTemplate_e1b9a92084b27a4bdb5d98fe9b064d07966ade4583eaf0ca3f2e13d0ad7cb12e extends Twig_Template
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
        // line 1
        echo "<div class=\"rounded-box margin-bottom-lg\"> ";
        // line 2
        echo "    <div style=\"float: right;\">
        ";
        // line 4
        echo "        ";
        // line 5
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("EDIT", (isset($context["article"]) ? $context["article"] : null))) {
            echo " ";
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-151-edit.png"), "html", null, true);
            echo "\" alt=\"edit article\" /></a>
            ";
            // line 7
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_article_remove", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-198-remove.png"), "html", null, true);
                echo "\" alt=\"remove article\" /></a>
            ";
            }
            // line 10
            echo "        ";
        }
        // line 11
        echo "
    </div>
    <h1 style=\"margin-top: 0\"><a style=\"color: inherit; text-decoration: inherit;\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</a></h1>
    <div>
        <strong>Author:</strong> <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo "</a> ::
        <strong>Created:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " ::
        <strong>Updated:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
    </div>
    <div id=\"article-intro\" style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 22
        if (array_key_exists("show_content", $context)) {
            // line 23
            echo "        <div id=\"article-content\" style=\"margin-bottom:20px;padding: 0 20px;font-size: medium\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 27
        echo "    <div style=\"border-top:1px solid #DDD; padding-top: 10px;\">
        <div style=\"margin: 10px 0;float: left\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
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
        // line 32
        echo "        </div>
        <div style=\"margin: 10px 0;float: right\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "comments", array()), "count", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-310-comments.png"), "html", null, true);
        echo "\" /></a>
            ";
        // line 35
        if (( !array_key_exists("show_content", $context) && ($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "comments", array()), "count", array()) > 0))) {
            // line 36
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "comments", array()), "last", array()), "author", array()))), "html", null, true);
            echo "\">@";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "comments", array()), "last", array()), "author", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "comments", array()), "last", array()), "createdAt", array())), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "        </div>
        <div style=\"clear: both\"></div>
    </div>
</div> ";
        // line 42
        echo "
";
        // line 43
        if (array_key_exists("show_content", $context)) {
            // line 44
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Comment:showForm", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))));
            echo "
";
        }
        // line 46
        echo "
";
        // line 47
        if (array_key_exists("comments", $context)) {
            // line 48
            echo "    ";
            $this->loadTemplate(":comment:showCommentsByArticle.html.twig", ":article:article_content.html.twig", 48)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : null))));
        }
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
        return array (  157 => 48,  155 => 47,  152 => 46,  146 => 44,  144 => 43,  141 => 42,  136 => 38,  126 => 36,  124 => 35,  116 => 34,  112 => 32,  101 => 30,  97 => 29,  93 => 27,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  71 => 17,  67 => 16,  61 => 15,  54 => 13,  50 => 11,  47 => 10,  39 => 8,  37 => 7,  30 => 6,  26 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-lg"> {# article #}*/
/*     <div style="float: right;">*/
/*         {# Without voter #}*/
/*         {# if article.author == app.user or is_granted('ROLE_ADMIN') #}*/
/*         {% if is_granted('EDIT', article) %} {# using voter const: constant('AppBundle\\Security\\ArticleVoter::EDIT_ARTICLE') #}*/
/*             <a href="{{ path('app_article_edit', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-151-edit.png') }}" alt="edit article" /></a>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a href="{{ path('app_admin_article_remove', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-198-remove.png') }}" alt="remove article" /></a>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/*     <h1 style="margin-top: 0"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'slug': article.slug}) }}">{{ article.title }}</a></h1>*/
/*     <div>*/
/*         <strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': article.author.username}) }}">@{{ article.author }}</a> ::*/
/*         <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} ::*/
/*         <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}*/
/*     </div>*/
/*     <div id="article-intro" style="padding: 20px;font-size: medium;font-weight: bold">*/
/*         {{ article.intro }}*/
/*     </div>*/
/*     {% if show_content is defined %}*/
/*         <div id="article-content" style="margin-bottom:20px;padding: 0 20px;font-size: medium">*/
/*             {{ article.content }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <div style="border-top:1px solid #DDD; padding-top: 10px;">*/
/*         <div style="margin: 10px 0;float: left">*/
/*             {% for tag in article.tags %}*/
/*                 <a class="btn btn-default" href="{{ path('app_articles_byTag', {'name': tag.name}) }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div style="margin: 10px 0;float: right">*/
/*             {{ article.comments.count }} <a href="{{ path('app_article_show', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-310-comments.png') }}" /></a>*/
/*             {% if show_content is not defined and article.comments.count > 0 %}*/
/*                 <a href="{{ path('app_articles_byUser', {'username': article.comments.last.author}) }}">@{{ article.comments.last.author }}</a> {{ article.comments.last.createdAt|time_diff }}*/
/*             {% endif %}*/
/*         </div>*/
/*         <div style="clear: both"></div>*/
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
