<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5f3c6f921289d59dfcdf9861d57c68b4dd32b4b3989f3837f628655f2592b6d3 extends Twig_Template
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
        $__internal_5bfc8b21e6b865b32b8e4e1816703f884390e4c584433edc5a63a702f3e8a728 = $this->env->getExtension("native_profiler");
        $__internal_5bfc8b21e6b865b32b8e4e1816703f884390e4c584433edc5a63a702f3e8a728->enter($__internal_5bfc8b21e6b865b32b8e4e1816703f884390e4c584433edc5a63a702f3e8a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5bfc8b21e6b865b32b8e4e1816703f884390e4c584433edc5a63a702f3e8a728->leave($__internal_5bfc8b21e6b865b32b8e4e1816703f884390e4c584433edc5a63a702f3e8a728_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
