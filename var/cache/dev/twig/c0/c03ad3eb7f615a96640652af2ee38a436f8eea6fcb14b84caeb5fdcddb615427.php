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
        $__internal_6127a77fb8b9f403a77e9f4fbdfd382bfc79f7505c5d8523d8d2d9d808f214c8 = $this->env->getExtension("native_profiler");
        $__internal_6127a77fb8b9f403a77e9f4fbdfd382bfc79f7505c5d8523d8d2d9d808f214c8->enter($__internal_6127a77fb8b9f403a77e9f4fbdfd382bfc79f7505c5d8523d8d2d9d808f214c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

        // line 1
        echo "<div class=\"article\"> ";
        // line 2
        echo "    ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
            // line 3
            echo "        <div style=\"float: right;\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a></div>
    ";
        }
        // line 5
        echo "    <h1 style=\"margin-top: 0px\"><a style=\"color: inherit; text-decoration: inherit;\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a></h1>
    <div><strong>Author:</strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo " :: <strong>Created:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " :: <strong>Updated:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</div>
    <div style=\"padding: 20px;font-size: medium;font-weight: bold\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "intro", array()), "html", null, true);
        echo "
    </div>
    ";
        // line 10
        if (array_key_exists("show_content", $context)) {
            // line 11
            echo "        <div style=\"margin-bottom:20px;padding: 0px 20px;font-size: medium\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 15
        echo "    <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
        <div style=\"margin: 10px 0px;\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "                <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byTag", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div></div>
    </div>
</div> ";
        
        $__internal_6127a77fb8b9f403a77e9f4fbdfd382bfc79f7505c5d8523d8d2d9d808f214c8->leave($__internal_6127a77fb8b9f403a77e9f4fbdfd382bfc79f7505c5d8523d8d2d9d808f214c8_prof);

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
        return array (  84 => 20,  73 => 18,  69 => 17,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  49 => 8,  40 => 6,  33 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* <div class="article"> {# article #}*/
/*     {% if is_granted('ROLE_ADMIN') or article.author == app.user %}*/
/*         <div style="float: right;"><a href="{{ path('app_article_edit', {'id': article.id}) }}">Edit</a></div>*/
/*     {% endif %}*/
/*     <h1 style="margin-top: 0px"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'id': article.id}) }}">{{ article.title }}</a></h1>*/
/*     <div><strong>Author:</strong> {{ article.author }} :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
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
/*                 <a class="btn btn-default" href="{{ path('app_articles_byTag', {'id': tag.id}) }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div></div>*/
/*     </div>*/
/* </div> {# end article#}*/
