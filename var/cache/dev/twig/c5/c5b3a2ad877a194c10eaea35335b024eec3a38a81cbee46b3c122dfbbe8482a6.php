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
        $__internal_c888ba68559bce00f1f4f7cb99ae704b66a49e6f373e98bf88744fb26cc00b33 = $this->env->getExtension("native_profiler");
        $__internal_c888ba68559bce00f1f4f7cb99ae704b66a49e6f373e98bf88744fb26cc00b33->enter($__internal_c888ba68559bce00f1f4f7cb99ae704b66a49e6f373e98bf88744fb26cc00b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c888ba68559bce00f1f4f7cb99ae704b66a49e6f373e98bf88744fb26cc00b33->leave($__internal_c888ba68559bce00f1f4f7cb99ae704b66a49e6f373e98bf88744fb26cc00b33_prof);

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