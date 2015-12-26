<?php

/* UserBundle:Group:list_content.html.twig */
class __TwigTemplate_f711646022070000f3a562b23e88803240336f10bcf5fd27b9e5d550fe28827a extends Twig_Template
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
        $__internal_ba9d449e0a25a59e2eabdecfb2e43e17f56a70534b2f4b874030d8a29f080f23 = $this->env->getExtension("native_profiler");
        $__internal_ba9d449e0a25a59e2eabdecfb2e43e17f56a70534b2f4b874030d8a29f080f23->enter($__internal_ba9d449e0a25a59e2eabdecfb2e43e17f56a70534b2f4b874030d8a29f080f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_ba9d449e0a25a59e2eabdecfb2e43e17f56a70534b2f4b874030d8a29f080f23->leave($__internal_ba9d449e0a25a59e2eabdecfb2e43e17f56a70534b2f4b874030d8a29f080f23_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
