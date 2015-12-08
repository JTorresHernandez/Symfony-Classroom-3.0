<?php

/* :index:email.html.twig */
class __TwigTemplate_56ec7f86a54ceb0a9818116bda3f37994ed2c399321c53598d24d50f494c6fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:email.html.twig", 1);
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
        $__internal_78d741e2e12a467a404fa57159876ce90fbf76c6c8433a29ad1bb519b6ee8eea = $this->env->getExtension("native_profiler");
        $__internal_78d741e2e12a467a404fa57159876ce90fbf76c6c8433a29ad1bb519b6ee8eea->enter($__internal_78d741e2e12a467a404fa57159876ce90fbf76c6c8433a29ad1bb519b6ee8eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d741e2e12a467a404fa57159876ce90fbf76c6c8433a29ad1bb519b6ee8eea->leave($__internal_78d741e2e12a467a404fa57159876ce90fbf76c6c8433a29ad1bb519b6ee8eea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70ca3334545b5da9d94912d62bc1cf3d131b4966eb567d9b96ba8ce83d095391 = $this->env->getExtension("native_profiler");
        $__internal_70ca3334545b5da9d94912d62bc1cf3d131b4966eb567d9b96ba8ce83d095391->enter($__internal_70ca3334545b5da9d94912d62bc1cf3d131b4966eb567d9b96ba8ce83d095391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_70ca3334545b5da9d94912d62bc1cf3d131b4966eb567d9b96ba8ce83d095391->leave($__internal_70ca3334545b5da9d94912d62bc1cf3d131b4966eb567d9b96ba8ce83d095391_prof);

    }

    public function getTemplateName()
    {
        return ":index:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>Email was sent</div>*/
/* {% endblock %}*/
