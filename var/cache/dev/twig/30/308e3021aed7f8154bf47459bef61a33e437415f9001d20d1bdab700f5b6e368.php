<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_98ca5613564d5a9de8f9ac613e43d385306bba82e6a3fac7e6e9195f5e95dd50 extends Twig_Template
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
        $__internal_2805756b3aefea41a4745b88d1a96efd3af2252aa5b3c1f45c2b7785f043b5d9 = $this->env->getExtension("native_profiler");
        $__internal_2805756b3aefea41a4745b88d1a96efd3af2252aa5b3c1f45c2b7785f043b5d9->enter($__internal_2805756b3aefea41a4745b88d1a96efd3af2252aa5b3c1f45c2b7785f043b5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2805756b3aefea41a4745b88d1a96efd3af2252aa5b3c1f45c2b7785f043b5d9->leave($__internal_2805756b3aefea41a4745b88d1a96efd3af2252aa5b3c1f45c2b7785f043b5d9_prof);

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
