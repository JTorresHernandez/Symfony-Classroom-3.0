<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a3d6537ae94a8a4aa15f1991c9c7133a759127f6fd217c9653e7d16ea296da06 extends Twig_Template
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
        $__internal_007ce91859eb7cd43c055746ed4659aa25e798fcd6a535aefcb7eb4a3d57f107 = $this->env->getExtension("native_profiler");
        $__internal_007ce91859eb7cd43c055746ed4659aa25e798fcd6a535aefcb7eb4a3d57f107->enter($__internal_007ce91859eb7cd43c055746ed4659aa25e798fcd6a535aefcb7eb4a3d57f107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_007ce91859eb7cd43c055746ed4659aa25e798fcd6a535aefcb7eb4a3d57f107->leave($__internal_007ce91859eb7cd43c055746ed4659aa25e798fcd6a535aefcb7eb4a3d57f107_prof);

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
