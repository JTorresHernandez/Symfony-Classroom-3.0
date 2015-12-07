<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5996962665988fc9685caa4633ebeb39fb99fa444ea9a584d9314e49efb50130 extends Twig_Template
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
        $__internal_5b96f01e34a42667f0dce2a3e659b7847cd961b05a271c4c09e20960afe74256 = $this->env->getExtension("native_profiler");
        $__internal_5b96f01e34a42667f0dce2a3e659b7847cd961b05a271c4c09e20960afe74256->enter($__internal_5b96f01e34a42667f0dce2a3e659b7847cd961b05a271c4c09e20960afe74256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5b96f01e34a42667f0dce2a3e659b7847cd961b05a271c4c09e20960afe74256->leave($__internal_5b96f01e34a42667f0dce2a3e659b7847cd961b05a271c4c09e20960afe74256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
