<?php

/* :user:index.html.twig */
class __TwigTemplate_9eff7b4812839eaaaec16b409c9ee1310cd4295a3e48a6108c6a9aee4f395841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_17fd8cd2220131ea9dd69bfc88fa45ae9416c4c7811f2fcd04545248308139c7 = $this->env->getExtension("native_profiler");
        $__internal_17fd8cd2220131ea9dd69bfc88fa45ae9416c4c7811f2fcd04545248308139c7->enter($__internal_17fd8cd2220131ea9dd69bfc88fa45ae9416c4c7811f2fcd04545248308139c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fd8cd2220131ea9dd69bfc88fa45ae9416c4c7811f2fcd04545248308139c7->leave($__internal_17fd8cd2220131ea9dd69bfc88fa45ae9416c4c7811f2fcd04545248308139c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0384f323ad683010e2218fee9b0e4b44c507457e4bc751eb60f8d48f8b6a3688 = $this->env->getExtension("native_profiler");
        $__internal_0384f323ad683010e2218fee9b0e4b44c507457e4bc751eb60f8d48f8b6a3688->enter($__internal_0384f323ad683010e2218fee9b0e4b44c507457e4bc751eb60f8d48f8b6a3688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "            <tr>
                <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_user_update", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">update</a> </td>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_user_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">remove</a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </table>
    <div style=\"margin-top: 10px\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("app_user_insert");
        echo "\">New user</a>
    </div>
";
        
        $__internal_0384f323ad683010e2218fee9b0e4b44c507457e4bc751eb60f8d48f8b6a3688->leave($__internal_0384f323ad683010e2218fee9b0e4b44c507457e4bc751eb60f8d48f8b6a3688_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  87 => 17,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.id }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.password }}</td>*/
/*                 <td>{{ user.username }}</td>*/
/*                 <td>{{ user.createdAt|date("d/m/Y H:i:s") }}</td>*/
/*                 <td>{{ user.updatedAt|date("d/m/Y H:i:s") }}</td>*/
/*                 <td><a href="{{ path('app_user_update', {'id': user.id}) }}">update</a> </td>*/
/*                 <td><a href="{{ path('app_user_remove', {'id': user.id}) }}">remove</a> </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div style="margin-top: 10px">*/
/*         <a href="{{ path('app_user_insert') }}">New user</a>*/
/*     </div>*/
/* {% endblock %}*/
