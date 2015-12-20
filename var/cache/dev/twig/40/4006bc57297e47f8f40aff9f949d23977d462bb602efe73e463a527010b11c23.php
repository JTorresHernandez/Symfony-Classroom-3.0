<?php

/* :index:email.html.twig */
class __TwigTemplate_d6c62f76e7d4386ae0d66da65120901b91c4b0793ca8046920d71fe25bfa079e extends Twig_Template
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
        $__internal_5f1860fef17cddd95603e51fe796da2c586e27dcddad9cbc073addc8cc4d5dc3 = $this->env->getExtension("native_profiler");
        $__internal_5f1860fef17cddd95603e51fe796da2c586e27dcddad9cbc073addc8cc4d5dc3->enter($__internal_5f1860fef17cddd95603e51fe796da2c586e27dcddad9cbc073addc8cc4d5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1860fef17cddd95603e51fe796da2c586e27dcddad9cbc073addc8cc4d5dc3->leave($__internal_5f1860fef17cddd95603e51fe796da2c586e27dcddad9cbc073addc8cc4d5dc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f5d7729b7e430ef6640bc36d6108f78d15db2c4c51cfbdd67cf54bf91757a9a = $this->env->getExtension("native_profiler");
        $__internal_7f5d7729b7e430ef6640bc36d6108f78d15db2c4c51cfbdd67cf54bf91757a9a->enter($__internal_7f5d7729b7e430ef6640bc36d6108f78d15db2c4c51cfbdd67cf54bf91757a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>Email was sent</div>
";
        
        $__internal_7f5d7729b7e430ef6640bc36d6108f78d15db2c4c51cfbdd67cf54bf91757a9a->leave($__internal_7f5d7729b7e430ef6640bc36d6108f78d15db2c4c51cfbdd67cf54bf91757a9a_prof);

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
