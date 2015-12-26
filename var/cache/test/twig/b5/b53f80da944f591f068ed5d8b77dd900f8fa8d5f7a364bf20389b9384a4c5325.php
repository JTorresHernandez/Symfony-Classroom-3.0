<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_521cd913691b3a0ad661408ef90d0da2db1431f8b0d9802dc42540d17d328865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ced59d6bd18337f7631fd3356c6903d00b00a4790082eb7748ce0f73227f127c = $this->env->getExtension("native_profiler");
        $__internal_ced59d6bd18337f7631fd3356c6903d00b00a4790082eb7748ce0f73227f127c->enter($__internal_ced59d6bd18337f7631fd3356c6903d00b00a4790082eb7748ce0f73227f127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced59d6bd18337f7631fd3356c6903d00b00a4790082eb7748ce0f73227f127c->leave($__internal_ced59d6bd18337f7631fd3356c6903d00b00a4790082eb7748ce0f73227f127c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0d835966f94460ac41fbc5c53ebf9bd250b19f6ddd6ec992004ef3126139992 = $this->env->getExtension("native_profiler");
        $__internal_b0d835966f94460ac41fbc5c53ebf9bd250b19f6ddd6ec992004ef3126139992->enter($__internal_b0d835966f94460ac41fbc5c53ebf9bd250b19f6ddd6ec992004ef3126139992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_b0d835966f94460ac41fbc5c53ebf9bd250b19f6ddd6ec992004ef3126139992->leave($__internal_b0d835966f94460ac41fbc5c53ebf9bd250b19f6ddd6ec992004ef3126139992_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_12fcda46779b33ae3c9709e32e5b5ad72132e3c83eca8a849dd0141dfac1b744 = $this->env->getExtension("native_profiler");
        $__internal_12fcda46779b33ae3c9709e32e5b5ad72132e3c83eca8a849dd0141dfac1b744->enter($__internal_12fcda46779b33ae3c9709e32e5b5ad72132e3c83eca8a849dd0141dfac1b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_12fcda46779b33ae3c9709e32e5b5ad72132e3c83eca8a849dd0141dfac1b744->leave($__internal_12fcda46779b33ae3c9709e32e5b5ad72132e3c83eca8a849dd0141dfac1b744_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
