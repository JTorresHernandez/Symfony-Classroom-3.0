<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ae017051ea323fb73ea4669e4615557d0a92cc6cc5664ec4acdd769897cdc487 extends Twig_Template
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
        $__internal_656f3118c87a229950a9e288d34651e10a2904f7dc2da909dfd8ef64321bf2e2 = $this->env->getExtension("native_profiler");
        $__internal_656f3118c87a229950a9e288d34651e10a2904f7dc2da909dfd8ef64321bf2e2->enter($__internal_656f3118c87a229950a9e288d34651e10a2904f7dc2da909dfd8ef64321bf2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_656f3118c87a229950a9e288d34651e10a2904f7dc2da909dfd8ef64321bf2e2->leave($__internal_656f3118c87a229950a9e288d34651e10a2904f7dc2da909dfd8ef64321bf2e2_prof);

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
