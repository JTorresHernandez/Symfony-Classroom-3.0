<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b9c85a59eef1bba4fde9916d31b02102202ade5f8354d5ecd1cba6da769049fa extends Twig_Template
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
        $__internal_ef14481103e924f04c0a5b69e0670883c313fbda8dd0cb075b548e6af22dbadc = $this->env->getExtension("native_profiler");
        $__internal_ef14481103e924f04c0a5b69e0670883c313fbda8dd0cb075b548e6af22dbadc->enter($__internal_ef14481103e924f04c0a5b69e0670883c313fbda8dd0cb075b548e6af22dbadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ef14481103e924f04c0a5b69e0670883c313fbda8dd0cb075b548e6af22dbadc->leave($__internal_ef14481103e924f04c0a5b69e0670883c313fbda8dd0cb075b548e6af22dbadc_prof);

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
