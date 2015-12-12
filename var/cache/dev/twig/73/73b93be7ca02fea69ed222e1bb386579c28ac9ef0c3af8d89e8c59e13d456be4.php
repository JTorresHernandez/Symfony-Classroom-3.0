<?php

/* :comment:show-comment.html.twig */
class __TwigTemplate_91a58cd7a6574643beabaedc6d763fd493e7a57d618d1f719a6a2700ce77f6e4 extends Twig_Template
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
        $__internal_ef603613909d1a63b16bd44d951181226326b92fdc3e7af954676c9db9256de4 = $this->env->getExtension("native_profiler");
        $__internal_ef603613909d1a63b16bd44d951181226326b92fdc3e7af954676c9db9256de4->enter($__internal_ef603613909d1a63b16bd44d951181226326b92fdc3e7af954676c9db9256de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-comment.html.twig"));

        // line 1
        echo "<div class=\"rounded-box margin-bottom-md\">
    <div class=\"margin-bottom-sm\"><strong>Author:</strong> <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_articles_byUser", array("username" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "username", array()))), "html", null, true);
        echo "\">@";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "html", null, true);
        echo "</a> :: <strong>Created:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo " :: <strong>Updated:</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</div>
    <div style=\"font-size: medium\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_ef603613909d1a63b16bd44d951181226326b92fdc3e7af954676c9db9256de4->leave($__internal_ef603613909d1a63b16bd44d951181226326b92fdc3e7af954676c9db9256de4_prof);

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
        return array (  35 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="rounded-box margin-bottom-md">*/
/*     <div class="margin-bottom-sm"><strong>Author:</strong> <a href="{{ path('app_articles_byUser', {'username': comment.author.username}) }}">@{{ comment.author }}</a> :: <strong>Created:</strong> {{ comment.createdAt|date("d/m/Y H:i:s") }} :: <strong>Updated:</strong> {{ comment.updatedAt|date("d/m/Y H:i:s") }}</div>*/
/*     <div style="font-size: medium">{{ comment }}</div>*/
/* </div>*/
/* */
