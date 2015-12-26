<?php

/* :comment:show-comment.html.twig */
class __TwigTemplate_a041416d779e65b6b3e3b84878b370cc8b34407b11c41ff7a6904be61dd4d7ca extends Twig_Template
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
        $__internal_92092d73a0f07063a07b595d6f928112c614bb13c91e80ee1b593687b59e3e35 = $this->env->getExtension("native_profiler");
        $__internal_92092d73a0f07063a07b595d6f928112c614bb13c91e80ee1b593687b59e3e35->enter($__internal_92092d73a0f07063a07b595d6f928112c614bb13c91e80ee1b593687b59e3e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-comment.html.twig"));

        // line 1
        echo "<div class=\"rounded-box margin-bottom-md\">
    ";
        // line 2
        if ((($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 3
            echo "        <div style=\"float: right;\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_comment_edit", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-151-edit.png"), "html", null, true);
            echo "\" alt=\"edit comment\" /></a>
            ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 6
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_comment_remove", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/glyphicons-198-remove.png"), "html", null, true);
                echo "\" alt=\"remove comment\" /></a>
            ";
            }
            // line 8
            echo "        </div>
    ";
        }
        // line 10
        echo "    <div class=\"margin-bottom-sm\"><strong>Author:</strong> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "html", null, true);
        echo "</a> :: <strong>Created:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " :: <strong>Updated:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</div>
    <div style=\"font-size: medium\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_92092d73a0f07063a07b595d6f928112c614bb13c91e80ee1b593687b59e3e35->leave($__internal_92092d73a0f07063a07b595d6f928112c614bb13c91e80ee1b593687b59e3e35_prof);

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
        return array (  61 => 11,  50 => 10,  46 => 8,  38 => 6,  36 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-md">*/
/*     {% if comment.author == app.user or is_granted('ROLE_ADMIN') %}*/
/*         <div style="float: right;">*/
/*             <a href="{{ path('app_comment_edit', {'id': comment.id}) }}"><img src="{{ asset('icons/glyphicons-151-edit.png') }}" alt="edit comment" /></a>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a href="{{ path('app_admin_comment_remove', {'id': comment.id}) }}"><img src="{{ asset('icons/glyphicons-198-remove.png') }}" alt="remove comment" /></a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="margin-bottom-sm"><strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': comment.author.username}) }}">@{{ comment.author }}</a> :: <strong>Created:</strong> {{ comment.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ comment.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     <div style="font-size: medium">{{ comment }}</div>*/
/* </div>*/
/* */
