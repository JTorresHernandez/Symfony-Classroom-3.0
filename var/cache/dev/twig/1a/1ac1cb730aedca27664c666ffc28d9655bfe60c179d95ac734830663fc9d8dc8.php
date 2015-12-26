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
        $__internal_329db67792e8bdacc3dd63f7a28f4c1a8269f3eb2558e68b69b602d8560cdf2c = $this->env->getExtension("native_profiler");
        $__internal_329db67792e8bdacc3dd63f7a28f4c1a8269f3eb2558e68b69b602d8560cdf2c->enter($__internal_329db67792e8bdacc3dd63f7a28f4c1a8269f3eb2558e68b69b602d8560cdf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_329db67792e8bdacc3dd63f7a28f4c1a8269f3eb2558e68b69b602d8560cdf2c->leave($__internal_329db67792e8bdacc3dd63f7a28f4c1a8269f3eb2558e68b69b602d8560cdf2c_prof);

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
