<?php

/* :user:update.html.twig */
class __TwigTemplate_875d1d67a707384cb4bcf93bfce93a02df06446df6b4c7c997204f7bb1131d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:update.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_269a1c6b4e800036f2e77ceb8afee7376874ae0c24c7d6675f3af4860dd2f008 = $this->env->getExtension("native_profiler");
        $__internal_269a1c6b4e800036f2e77ceb8afee7376874ae0c24c7d6675f3af4860dd2f008->enter($__internal_269a1c6b4e800036f2e77ceb8afee7376874ae0c24c7d6675f3af4860dd2f008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269a1c6b4e800036f2e77ceb8afee7376874ae0c24c7d6675f3af4860dd2f008->leave($__internal_269a1c6b4e800036f2e77ceb8afee7376874ae0c24c7d6675f3af4860dd2f008_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a242cf7001770057ab1263d5bd761b63ce40965563612e69d7a41112f0458cfc = $this->env->getExtension("native_profiler");
        $__internal_a242cf7001770057ab1263d5bd761b63ce40965563612e69d7a41112f0458cfc->enter($__internal_a242cf7001770057ab1263d5bd761b63ce40965563612e69d7a41112f0458cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_user_doUpdate");
        echo "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "<br>
            <input type=\"email\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" name=\"email\"><br>
            <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "\" name=\"password\"><br>
            <input type=\"text\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" name=\"username\"><br>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "<br>
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "<br>
            <input type=\"submit\" value=\"Update\">
        </form>
    </div>
";
        
        $__internal_a242cf7001770057ab1263d5bd761b63ce40965563612e69d7a41112f0458cfc->leave($__internal_a242cf7001770057ab1263d5bd761b63ce40965563612e69d7a41112f0458cfc_prof);

    }

    public function getTemplateName()
    {
        return ":user:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <form method="post" action="{{ path('app_user_doUpdate') }}">*/
/*             <input type="hidden" name="id" value="{{ user.id }}">*/
/*             {{ user.id }}<br>*/
/*             <input type="email" value="{{ user.email }}" name="email"><br>*/
/*             <input type="text" value="{{ user.password }}" name="password"><br>*/
/*             <input type="text" value="{{ user.username }}" name="username"><br>*/
/*             {{ user.createdAt|date("d/m/Y H:i:s") }}<br>*/
/*             {{ user.updatedAt|date("d/m/Y H:i:s") }}<br>*/
/*             <input type="submit" value="Update">*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
