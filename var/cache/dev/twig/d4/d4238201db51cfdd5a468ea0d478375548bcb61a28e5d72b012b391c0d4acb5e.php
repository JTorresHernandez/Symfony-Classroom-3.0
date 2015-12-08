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
        $__internal_61203a33ac6f24d9fc4a45dee969f143e62dc1a61788d6f6a74725b2e749d15f = $this->env->getExtension("native_profiler");
        $__internal_61203a33ac6f24d9fc4a45dee969f143e62dc1a61788d6f6a74725b2e749d15f->enter($__internal_61203a33ac6f24d9fc4a45dee969f143e62dc1a61788d6f6a74725b2e749d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_61203a33ac6f24d9fc4a45dee969f143e62dc1a61788d6f6a74725b2e749d15f->leave($__internal_61203a33ac6f24d9fc4a45dee969f143e62dc1a61788d6f6a74725b2e749d15f_prof);

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
