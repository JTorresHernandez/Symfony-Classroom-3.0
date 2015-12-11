<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_95afbbd1632310b149f64e90d21dbb0d889242415c5f1ca3f487b4de7c3c7f3b extends Twig_Template
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
        $__internal_7397f16348a63d063767d5c93496c41a565fca5679e9c4036095fc4a7053bb58 = $this->env->getExtension("native_profiler");
        $__internal_7397f16348a63d063767d5c93496c41a565fca5679e9c4036095fc4a7053bb58->enter($__internal_7397f16348a63d063767d5c93496c41a565fca5679e9c4036095fc4a7053bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7397f16348a63d063767d5c93496c41a565fca5679e9c4036095fc4a7053bb58->leave($__internal_7397f16348a63d063767d5c93496c41a565fca5679e9c4036095fc4a7053bb58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
