<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f36803fcbc2cfbdcadc187151539b65141ef7ec1738829c80a682d113761878d extends Twig_Template
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
        $__internal_fd3b77ac314372f1764fe8bd04c1d5802cd79448e526f73765f001ac7a68e3fc = $this->env->getExtension("native_profiler");
        $__internal_fd3b77ac314372f1764fe8bd04c1d5802cd79448e526f73765f001ac7a68e3fc->enter($__internal_fd3b77ac314372f1764fe8bd04c1d5802cd79448e526f73765f001ac7a68e3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fd3b77ac314372f1764fe8bd04c1d5802cd79448e526f73765f001ac7a68e3fc->leave($__internal_fd3b77ac314372f1764fe8bd04c1d5802cd79448e526f73765f001ac7a68e3fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
