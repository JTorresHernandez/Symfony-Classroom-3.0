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
        $__internal_016edede388045959764153db6baac875fb23ad421110a4546ea9d18cb6d8b87 = $this->env->getExtension("native_profiler");
        $__internal_016edede388045959764153db6baac875fb23ad421110a4546ea9d18cb6d8b87->enter($__internal_016edede388045959764153db6baac875fb23ad421110a4546ea9d18cb6d8b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016edede388045959764153db6baac875fb23ad421110a4546ea9d18cb6d8b87->leave($__internal_016edede388045959764153db6baac875fb23ad421110a4546ea9d18cb6d8b87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1f0a8b7273feaed98971f1d1d3f26e5e63e2c38479564a5f793e57b84a528bc = $this->env->getExtension("native_profiler");
        $__internal_e1f0a8b7273feaed98971f1d1d3f26e5e63e2c38479564a5f793e57b84a528bc->enter($__internal_e1f0a8b7273feaed98971f1d1d3f26e5e63e2c38479564a5f793e57b84a528bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- http://stackoverflow.com/questions/18848870/how-to-display-all-form-error-at-one-place -->
    <div>
        <form method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" novalidate=\"novalidate\">
            <div>
                <!-- form is based on User Entity -->
                 ";
        // line 9
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()));
        echo "
                <!-- http://stackoverflow.com/questions/12497133/directly-access-a-form-fields-value-when-overriding-widget-in-a-twig-template -->
                <ul>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ul>
            </div>
            <div>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</div>
            <div>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "anyClass2")));
        echo "</div>
            <div>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo ": ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</div>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " <!-- prints hidden fields and others -->
            <div><input type=\"submit\" value=\"Ok\"></div>
        </form>
    </div>
";
        
        $__internal_e1f0a8b7273feaed98971f1d1d3f26e5e63e2c38479564a5f793e57b84a528bc->leave($__internal_e1f0a8b7273feaed98971f1d1d3f26e5e63e2c38479564a5f793e57b84a528bc_prof);

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
        return array (  92 => 20,  86 => 19,  80 => 18,  73 => 17,  69 => 15,  60 => 13,  56 => 12,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- http://stackoverflow.com/questions/18848870/how-to-display-all-form-error-at-one-place -->*/
/*     <div>*/
/*         <form method="post" action="{{ action }}" novalidate="novalidate">*/
/*             <div>*/
/*                 <!-- form is based on User Entity -->*/
/*                  {{ dump(form.vars.value) }}*/
/*                 <!-- http://stackoverflow.com/questions/12497133/directly-access-a-form-fields-value-when-overriding-widget-in-a-twig-template -->*/
/*                 <ul>*/
/*                     {% for error in form.vars.errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div>{{ form_errors(form.email) }}{{ form_label(form.email) }}: {{ form_widget(form.email) }}</div>*/
/*             <div>{{ form_label(form.username) }}: {{ form_widget(form.username, {'attr': {'class': 'anyClass2'}}) }}</div>*/
/*             <div>{{ form_label(form.password) }}: {{ form_widget(form.password) }}</div>*/
/*             {{ form_rest(form) }} <!-- prints hidden fields and others -->*/
/*             <div><input type="submit" value="Ok"></div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
