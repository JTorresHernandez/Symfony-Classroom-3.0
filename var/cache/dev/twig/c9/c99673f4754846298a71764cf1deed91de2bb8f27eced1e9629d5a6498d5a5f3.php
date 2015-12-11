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
        $__internal_d05d9dac5f841554058cf1dcbe459468382aa90d5d1dd4ca95a89ecce7ae15a7 = $this->env->getExtension("native_profiler");
        $__internal_d05d9dac5f841554058cf1dcbe459468382aa90d5d1dd4ca95a89ecce7ae15a7->enter($__internal_d05d9dac5f841554058cf1dcbe459468382aa90d5d1dd4ca95a89ecce7ae15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d05d9dac5f841554058cf1dcbe459468382aa90d5d1dd4ca95a89ecce7ae15a7->leave($__internal_d05d9dac5f841554058cf1dcbe459468382aa90d5d1dd4ca95a89ecce7ae15a7_prof);

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
