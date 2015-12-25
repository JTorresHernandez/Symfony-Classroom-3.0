<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a52ed546fab2ea993ea545209c3b3e10299f2c94812be23ae0301437a194b7eb extends Twig_Template
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
        $__internal_b14e875976430076a814d7ecc19e6253c92d1fb8f8cc72fd0298c9d22a7620cd = $this->env->getExtension("native_profiler");
        $__internal_b14e875976430076a814d7ecc19e6253c92d1fb8f8cc72fd0298c9d22a7620cd->enter($__internal_b14e875976430076a814d7ecc19e6253c92d1fb8f8cc72fd0298c9d22a7620cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b14e875976430076a814d7ecc19e6253c92d1fb8f8cc72fd0298c9d22a7620cd->leave($__internal_b14e875976430076a814d7ecc19e6253c92d1fb8f8cc72fd0298c9d22a7620cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
