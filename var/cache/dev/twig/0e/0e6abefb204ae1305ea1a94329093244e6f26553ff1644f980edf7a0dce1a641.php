<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a0e66f57ece4b151197f03872e4599be07207d15c05963cfb07b2ea858d2306d extends Twig_Template
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
        $__internal_be4064b6b7c84c53f0790ddafa41f2df17b43e38bdcc238f7a31ee754890a4bb = $this->env->getExtension("native_profiler");
        $__internal_be4064b6b7c84c53f0790ddafa41f2df17b43e38bdcc238f7a31ee754890a4bb->enter($__internal_be4064b6b7c84c53f0790ddafa41f2df17b43e38bdcc238f7a31ee754890a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_be4064b6b7c84c53f0790ddafa41f2df17b43e38bdcc238f7a31ee754890a4bb->leave($__internal_be4064b6b7c84c53f0790ddafa41f2df17b43e38bdcc238f7a31ee754890a4bb_prof);

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
