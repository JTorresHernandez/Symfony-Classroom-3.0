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
        $__internal_05dcaab779ba407850b5dcffe6d4e120e6a0bc4cde1931e789aa41420ca39c3b = $this->env->getExtension("native_profiler");
        $__internal_05dcaab779ba407850b5dcffe6d4e120e6a0bc4cde1931e789aa41420ca39c3b->enter($__internal_05dcaab779ba407850b5dcffe6d4e120e6a0bc4cde1931e789aa41420ca39c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_05dcaab779ba407850b5dcffe6d4e120e6a0bc4cde1931e789aa41420ca39c3b->leave($__internal_05dcaab779ba407850b5dcffe6d4e120e6a0bc4cde1931e789aa41420ca39c3b_prof);

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
