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
        $__internal_d0ff84bbec231c373cfd769de73a8eb0e78edbf40c1b5db2ab5bcb72666facb6 = $this->env->getExtension("native_profiler");
        $__internal_d0ff84bbec231c373cfd769de73a8eb0e78edbf40c1b5db2ab5bcb72666facb6->enter($__internal_d0ff84bbec231c373cfd769de73a8eb0e78edbf40c1b5db2ab5bcb72666facb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ff84bbec231c373cfd769de73a8eb0e78edbf40c1b5db2ab5bcb72666facb6->leave($__internal_d0ff84bbec231c373cfd769de73a8eb0e78edbf40c1b5db2ab5bcb72666facb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d93fed83297d4be10b3526b3c4e3a487cc55425e2e9878b79e8e308bc32f4b5b = $this->env->getExtension("native_profiler");
        $__internal_d93fed83297d4be10b3526b3c4e3a487cc55425e2e9878b79e8e308bc32f4b5b->enter($__internal_d93fed83297d4be10b3526b3c4e3a487cc55425e2e9878b79e8e308bc32f4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                ";
            // line 13
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 14
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_user_update", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">update</a> </td>
                <td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_user_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">remove</a> </td>
                ";
            }
            // line 17
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </table>
    <div style=\"margin-top: 10px\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("app_user_insert");
        echo "\">New user</a>
    </div>
";
        
        $__internal_d93fed83297d4be10b3526b3c4e3a487cc55425e2e9878b79e8e308bc32f4b5b->leave($__internal_d93fed83297d4be10b3526b3c4e3a487cc55425e2e9878b79e8e308bc32f4b5b_prof);

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
        return array (  97 => 21,  93 => 19,  86 => 17,  81 => 15,  76 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                 <td><a href="{{ path('app_user_update', {'id': user.id}) }}">update</a> </td>*/
/*                 <td><a href="{{ path('app_user_remove', {'id': user.id}) }}">remove</a> </td>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div style="margin-top: 10px">*/
/*         <a href="{{ path('app_user_insert') }}">New user</a>*/
/*     </div>*/
/* {% endblock %}*/
