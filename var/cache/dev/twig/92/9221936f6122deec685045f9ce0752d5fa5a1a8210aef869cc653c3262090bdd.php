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
        $__internal_6b518d2fa6ed701d6db6311dbb682bec8a47ee382b23ee07ca9f00bec9666f99 = $this->env->getExtension("native_profiler");
        $__internal_6b518d2fa6ed701d6db6311dbb682bec8a47ee382b23ee07ca9f00bec9666f99->enter($__internal_6b518d2fa6ed701d6db6311dbb682bec8a47ee382b23ee07ca9f00bec9666f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6b518d2fa6ed701d6db6311dbb682bec8a47ee382b23ee07ca9f00bec9666f99->leave($__internal_6b518d2fa6ed701d6db6311dbb682bec8a47ee382b23ee07ca9f00bec9666f99_prof);

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
