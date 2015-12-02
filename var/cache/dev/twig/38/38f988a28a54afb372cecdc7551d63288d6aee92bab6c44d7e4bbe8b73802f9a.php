<?php

/* :user:form.html.twig */
class __TwigTemplate_4ee1d2d3a1ae0051b88d507c517db734b6b476cd3ada9c9a1ddf7b367cd12c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:form.html.twig", 1);
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
        $__internal_ec6b014b930df613dd53ad55374caee992f84ab34bc91d9ecbaaa5c2e0593778 = $this->env->getExtension("native_profiler");
        $__internal_ec6b014b930df613dd53ad55374caee992f84ab34bc91d9ecbaaa5c2e0593778->enter($__internal_ec6b014b930df613dd53ad55374caee992f84ab34bc91d9ecbaaa5c2e0593778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6b014b930df613dd53ad55374caee992f84ab34bc91d9ecbaaa5c2e0593778->leave($__internal_ec6b014b930df613dd53ad55374caee992f84ab34bc91d9ecbaaa5c2e0593778_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72885c56f5c6ba0997946df1d95311008a97d568fc7060542f6123c6573a0463 = $this->env->getExtension("native_profiler");
        $__internal_72885c56f5c6ba0997946df1d95311008a97d568fc7060542f6123c6573a0463->enter($__internal_72885c56f5c6ba0997946df1d95311008a97d568fc7060542f6123c6573a0463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" novalidate=\"novalidate\">
            <div>
                <ul>
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 9
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                </ul>
            </div>
            <div>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</div>
            <div>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</div>
            ";
        // line 15
        if ( !(isset($context["register"]) ? $context["register"] : $this->getContext($context, "register"))) {
            echo "<div>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label');
            echo ": ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
            echo "</div>";
        }
        // line 16
        echo "            <div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</div>
            <div>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</div>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <div><input type=\"submit\" value=\"Ok\"></div>
        </form>
    </div>
";
        
        $__internal_72885c56f5c6ba0997946df1d95311008a97d568fc7060542f6123c6573a0463->leave($__internal_72885c56f5c6ba0997946df1d95311008a97d568fc7060542f6123c6573a0463_prof);

    }

    public function getTemplateName()
    {
        return ":user:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  93 => 17,  86 => 16,  78 => 15,  72 => 14,  66 => 13,  62 => 11,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <form method="post" action="{{ action }}" novalidate="novalidate">*/
/*             <div>*/
/*                 <ul>*/
/*                     {% for error in form.vars.errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div>{{ form_label(form.email) }}: {{ form_widget(form.email) }}</div>*/
/*             <div>{{ form_label(form.username) }}: {{ form_widget(form.username) }}</div>*/
/*             {% if not register %}<div>{{ form_label(form.roles) }}: {{ form_widget(form.roles) }}</div>{% endif %}*/
/*             <div>{{ form_label(form.plainPassword.first) }}: {{ form_widget(form.plainPassword.first) }}</div>*/
/*             <div>{{ form_label(form.plainPassword.second) }}: {{ form_widget(form.plainPassword.second) }}</div>*/
/*             {{ form_rest(form) }}*/
/*             <div><input type="submit" value="Ok"></div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
