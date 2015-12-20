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
        $__internal_8aa6583f203249ed942d4844b17fc0254b8a11d063779756a55113c6e07fa7f3 = $this->env->getExtension("native_profiler");
        $__internal_8aa6583f203249ed942d4844b17fc0254b8a11d063779756a55113c6e07fa7f3->enter($__internal_8aa6583f203249ed942d4844b17fc0254b8a11d063779756a55113c6e07fa7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

        // line 1
        echo "<div class=\"rounded-box margin-bottom-lg\"> ";
        // line 2
        echo "    ";
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 3
            echo "        <div style=\"float: right;\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-151-edit.png"), "html", null, true);
            echo "\" alt=\"edit article\" /></a>
            ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_article_remove", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-198-remove.png"), "html", null, true);
                echo "\" alt=\"remove article\" /></a>
            ";
            }
            // line 8
            echo "        </div>
    ";
        }
        // line 10
        echo "    <h1 style=\"margin-top: 0px\"><a style=\"color: inherit; text-decoration: inherit;\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a></h1>
    <div><strong>Author:</strong> <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</a> :: <strong>Created:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " :: <strong>Updated:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</div>
    <div id=\"article-intro\" style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 15
        if (array_key_exists("show_content", $context)) {
            // line 16
            echo "        <div id=\"article-content\" style=\"margin-bottom:20px;padding: 0px 20px;font-size: medium\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 20
        echo "    <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
        <div style=\"margin: 10px 0px;\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
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
        // line 25
        echo "        </div>
        <div></div>
    </div>
</div> ";
        // line 29
        echo "
";
        // line 30
        if (array_key_exists("show_content", $context)) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Comment:showForm", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))));
            echo "
";
        }
        // line 33
        echo "
";
        // line 34
        if (array_key_exists("comments", $context)) {
            // line 35
            echo "    ";
            $this->loadTemplate(":comment:showCommentsByArticle.html.twig", ":article:article_content.html.twig", 35)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        }
        
        $__internal_8aa6583f203249ed942d4844b17fc0254b8a11d063779756a55113c6e07fa7f3->leave($__internal_8aa6583f203249ed942d4844b17fc0254b8a11d063779756a55113c6e07fa7f3_prof);

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
        return array (  124 => 35,  122 => 34,  119 => 33,  113 => 31,  111 => 30,  108 => 29,  103 => 25,  92 => 23,  88 => 22,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  68 => 13,  57 => 11,  50 => 10,  46 => 8,  38 => 6,  36 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-lg"> {# article #}*/
/*     {% if article.author == app.user or is_granted('ROLE_ADMIN') %}*/
/*         <div style="float: right;">*/
/*             <a href="{{ path('app_article_edit', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-151-edit.png') }}" alt="edit article" /></a>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             <a href="{{ path('app_admin_article_remove', {'slug': article.slug}) }}"><img src="{{ asset('icons/glyphicons-198-remove.png') }}" alt="remove article" /></a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/*     <h1 style="margin-top: 0px"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'slug': article.slug}) }}">{{ article.title }}</a></h1>*/
/*     <div><strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': article.author.username}) }}">@{{ article.author }}</a> :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
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
