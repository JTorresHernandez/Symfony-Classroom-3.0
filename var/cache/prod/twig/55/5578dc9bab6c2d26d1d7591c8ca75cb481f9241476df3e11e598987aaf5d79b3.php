<?php

/* :comment:show-comment.html.twig */
class __TwigTemplate_4cb33b56325f4c8150532d579a3bf828f24a1911326b9f445dce509b69678fd4 extends Twig_Template
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
        echo "<div class=\"rounded-box margin-bottom-md\">
    <div class=\"margin-bottom-sm\"><strong>Author:</strong> <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "author", array()), "html", null, true);
        echo "</a> :: <strong>Created:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " :: <strong>Updated:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</div>
    <div style=\"font-size: medium\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":comment:show-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-md">*/
/*     <div class="margin-bottom-sm"><strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': comment.author.username}) }}">@{{ comment.author }}</a> :: <strong>Created:</strong> {{ comment.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ comment.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     <div style="font-size: medium">{{ comment }}</div>*/
/* </div>*/
/* */
