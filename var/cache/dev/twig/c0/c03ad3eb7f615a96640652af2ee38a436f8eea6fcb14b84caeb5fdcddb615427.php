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
        $__internal_c4e5d115ace8aa8c3e69689849c7af84973839db89f95c0ba6fa2457efa777a9 = $this->env->getExtension("native_profiler");
        $__internal_c4e5d115ace8aa8c3e69689849c7af84973839db89f95c0ba6fa2457efa777a9->enter($__internal_c4e5d115ace8aa8c3e69689849c7af84973839db89f95c0ba6fa2457efa777a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

        // line 1
        echo "<div class=\"article\"> ";
        // line 2
        echo "    ";
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 3
            echo "        <div style=\"float: right;\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
            ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_article_remove", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
                echo "\">Remove</a>
            ";
            }
            // line 8
            echo "        </div>
    ";
        }
        // line 10
        echo "    <h1 style=\"margin-top: 0px\"><a style=\"color: inherit; text-decoration: inherit;\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
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
    <div style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 15
        if (array_key_exists("show_content", $context)) {
            // line 16
            echo "        <div style=\"margin-bottom:20px;padding: 0px 20px;font-size: medium\">
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
        
        $__internal_c4e5d115ace8aa8c3e69689849c7af84973839db89f95c0ba6fa2457efa777a9->leave($__internal_c4e5d115ace8aa8c3e69689849c7af84973839db89f95c0ba6fa2457efa777a9_prof);

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
        return array (  99 => 25,  88 => 23,  84 => 22,  80 => 20,  74 => 17,  71 => 16,  69 => 15,  64 => 13,  53 => 11,  46 => 10,  42 => 8,  36 => 6,  34 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* <div class="article"> {# article #}*/
/*     {% if article.author == app.user or is_granted('ROLE_ADMIN') %}*/
/*         <div style="float: right;">*/
/*             <a href="{{ path('app_article_edit', {'id': article.id}) }}">Edit</a>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             <a href="{{ path('app_admin_article_remove', {'id': article.id}) }}">Remove</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/*     <h1 style="margin-top: 0px"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'id': article.id}) }}">{{ article.title }}</a></h1>*/
/*     <div><strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': article.author.username}) }}">@{{ article.author }}</a> :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     <div style="padding: 20px;font-size: medium;font-weight: bold">*/
/*         {{ article.intro }}*/
/*     </div>*/
/*     {% if show_content is defined %}*/
/*         <div style="margin-bottom:20px;padding: 0px 20px;font-size: medium">*/
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
