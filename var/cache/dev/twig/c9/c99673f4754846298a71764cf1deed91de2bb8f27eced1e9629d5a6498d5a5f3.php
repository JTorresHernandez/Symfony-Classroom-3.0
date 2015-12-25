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
        $__internal_0c5d671350b00d2baac87e56ce6d6c9433b9d8905be9a8fa5212c7fec0321266 = $this->env->getExtension("native_profiler");
        $__internal_0c5d671350b00d2baac87e56ce6d6c9433b9d8905be9a8fa5212c7fec0321266->enter($__internal_0c5d671350b00d2baac87e56ce6d6c9433b9d8905be9a8fa5212c7fec0321266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0c5d671350b00d2baac87e56ce6d6c9433b9d8905be9a8fa5212c7fec0321266->leave($__internal_0c5d671350b00d2baac87e56ce6d6c9433b9d8905be9a8fa5212c7fec0321266_prof);

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
