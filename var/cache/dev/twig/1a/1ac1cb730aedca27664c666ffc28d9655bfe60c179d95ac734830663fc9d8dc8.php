<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cb82f7bdb79598c6bb294773574ba09b334a9343ea40c1899de8b0eaf074a429 extends Twig_Template
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
        $__internal_3ea5287ade070d4e20d9ff79aaed203c261340cbc10e7390235bfe1beadae31f = $this->env->getExtension("native_profiler");
        $__internal_3ea5287ade070d4e20d9ff79aaed203c261340cbc10e7390235bfe1beadae31f->enter($__internal_3ea5287ade070d4e20d9ff79aaed203c261340cbc10e7390235bfe1beadae31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3ea5287ade070d4e20d9ff79aaed203c261340cbc10e7390235bfe1beadae31f->leave($__internal_3ea5287ade070d4e20d9ff79aaed203c261340cbc10e7390235bfe1beadae31f_prof);

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
