<?php

/* :article:article_content.html.twig */
class __TwigTemplate_afd66f1aac94066015cd7644d54559413151b8b93b5ace7de1953a26af7e3a4a extends Twig_Template
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
        $__internal_eeff03049c7acc39ac16a7c76db00dc0b7a222c0168fa00434dbc3e3ba44206f = $this->env->getExtension("native_profiler");
        $__internal_eeff03049c7acc39ac16a7c76db00dc0b7a222c0168fa00434dbc3e3ba44206f->enter($__internal_eeff03049c7acc39ac16a7c76db00dc0b7a222c0168fa00434dbc3e3ba44206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article_content.html.twig"));

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
    <div style=\"padding: 20px;font-size: medium\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
    </div>
    <div style=\"border-top:1px solid #DDD; padding-top: 10px\">
        <div style=\"margin: 10px 0px;\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 13
            echo "                <a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("app_tags_tags");
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <div></div>
    </div>
</div> ";
        
        $__internal_eeff03049c7acc39ac16a7c76db00dc0b7a222c0168fa00434dbc3e3ba44206f->leave($__internal_eeff03049c7acc39ac16a7c76db00dc0b7a222c0168fa00434dbc3e3ba44206f_prof);

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
        return array (  71 => 15,  60 => 13,  56 => 12,  49 => 8,  40 => 6,  33 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* <div class="article"> {# article #}*/
/*     {% if is_granted('ROLE_ADMIN') or article.author == app.user %}*/
/*         <div style="float: right;"><a href="{{ path('app_article_edit', {'id': article.id}) }}">Edit</a></div>*/
/*     {% endif %}*/
/*     <h1 style="margin-top: 0px"><a style="color: inherit; text-decoration: inherit;" href="{{ path('app_article_show', {'id': article.id}) }}">{{ article.title }}</a></h1>*/
/*     <div><strong>Author:</strong> {{ article.author }} :: <strong>Created:</strong> {{ article.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ article.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     <div style="padding: 20px;font-size: medium">*/
/*         {{ article.content }}*/
/*     </div>*/
/*     <div style="border-top:1px solid #DDD; padding-top: 10px">*/
/*         <div style="margin: 10px 0px;">*/
/*             {% for tag in article.tags %}*/
/*                 <a class="btn btn-default" href="{{ path('app_tags_tags') }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div></div>*/
/*     </div>*/
/* </div> {# end article#}*/
