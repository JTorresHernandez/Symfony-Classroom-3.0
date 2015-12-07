<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5d8d96d8aeffdad4f37af8d1cea694d08d5d2240d0803e4ac98b975e64b7699c extends Twig_Template
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
        $__internal_3ba1238cab1092a36fb6ea7800b0b3743ccc2cec0653a8141c929cbf873e02b6 = $this->env->getExtension("native_profiler");
        $__internal_3ba1238cab1092a36fb6ea7800b0b3743ccc2cec0653a8141c929cbf873e02b6->enter($__internal_3ba1238cab1092a36fb6ea7800b0b3743ccc2cec0653a8141c929cbf873e02b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3ba1238cab1092a36fb6ea7800b0b3743ccc2cec0653a8141c929cbf873e02b6->leave($__internal_3ba1238cab1092a36fb6ea7800b0b3743ccc2cec0653a8141c929cbf873e02b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
