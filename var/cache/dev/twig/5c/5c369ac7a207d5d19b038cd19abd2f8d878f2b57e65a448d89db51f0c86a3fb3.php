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
        $__internal_1bc9d82dfe7363787b3df8014a84509a6775bdac19c7c4d02ed858b878ba1846 = $this->env->getExtension("native_profiler");
        $__internal_1bc9d82dfe7363787b3df8014a84509a6775bdac19c7c4d02ed858b878ba1846->enter($__internal_1bc9d82dfe7363787b3df8014a84509a6775bdac19c7c4d02ed858b878ba1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1bc9d82dfe7363787b3df8014a84509a6775bdac19c7c4d02ed858b878ba1846->leave($__internal_1bc9d82dfe7363787b3df8014a84509a6775bdac19c7c4d02ed858b878ba1846_prof);

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
