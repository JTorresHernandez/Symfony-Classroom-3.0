<?php

/* :article:article_content.html.twig */
class __TwigTemplate_be320732426c1e1cd9bea5d8cce7dd7f57308768dc1ff153596521dffd21b3de extends Twig_Template
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
        $__internal_497ef5d3957c9603c1234fe38cfac6c591a436f5a4d907ee99fbf5a9755a2558 = $this->env->getExtension("native_profiler");
        $__internal_497ef5d3957c9603c1234fe38cfac6c591a436f5a4d907ee99fbf5a9755a2558->enter($__internal_497ef5d3957c9603c1234fe38cfac6c591a436f5a4d907ee99fbf5a9755a2558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

        // line 1
        echo "<div class=\"rounded-box margin-bottom-lg\"> ";
        // line 2
        echo "    <div style=\"float: right;\">
        ";
        // line 4
        echo "        ";
        // line 5
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("EDIT", (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")))) {
            echo " ";
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-151-edit.png"), "html", null, true);
            echo "\" alt=\"edit article\" /></a>
            ";
            // line 7
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_article_remove", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a></h1>
    <div>
        <strong>Author:</strong> <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</a> ::
        <strong>Created:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " ::
        <strong>Updated:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
    </div>
    <div id=\"article-intro\" style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 22
        if (array_key_exists("show_content", $context)) {
            // line 23
            echo "        <div id=\"article-content\" style=\"margin-bottom:20px;padding: 0 20px;font-size: medium\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "count", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-310-comments.png"), "html", null, true);
        echo "\" /></a>
            ";
        // line 35
        if (( !array_key_exists("show_content", $context) && ($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "count", array()) > 0))) {
            // line 36
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "last", array()), "author", array()))), "html", null, true);
            echo "\">@";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "last", array()), "author", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()), "last", array()), "createdAt", array())), "html", null, true);
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Comment:showForm", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))));
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
            $this->loadTemplate(":comment:showCommentsByArticle.html.twig", ":article:article_content.html.twig", 48)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        }
        
        $__internal_497ef5d3957c9603c1234fe38cfac6c591a436f5a4d907ee99fbf5a9755a2558->leave($__internal_497ef5d3957c9603c1234fe38cfac6c591a436f5a4d907ee99fbf5a9755a2558_prof);

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
        return array (  160 => 48,  158 => 47,  155 => 46,  149 => 44,  147 => 43,  144 => 42,  139 => 38,  129 => 36,  127 => 35,  119 => 34,  115 => 32,  104 => 30,  100 => 29,  96 => 27,  90 => 24,  87 => 23,  85 => 22,  80 => 20,  74 => 17,  70 => 16,  64 => 15,  57 => 13,  53 => 11,  50 => 10,  42 => 8,  40 => 7,  33 => 6,  29 => 5,  27 => 4,  24 => 2,  22 => 1,);
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
