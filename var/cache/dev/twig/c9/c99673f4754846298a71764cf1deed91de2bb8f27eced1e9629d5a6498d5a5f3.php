<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1a8d0b9f825e0eb60af4ae1d05d43b9379a51cd7daef5c5ad38b3232669a2fca extends Twig_Template
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
        $__internal_f81582e84072285029cc97a70ab363123dec3e59406d3011813be21a781ef449 = $this->env->getExtension("native_profiler");
        $__internal_f81582e84072285029cc97a70ab363123dec3e59406d3011813be21a781ef449->enter($__internal_f81582e84072285029cc97a70ab363123dec3e59406d3011813be21a781ef449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f81582e84072285029cc97a70ab363123dec3e59406d3011813be21a781ef449->leave($__internal_f81582e84072285029cc97a70ab363123dec3e59406d3011813be21a781ef449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
