<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9b8d6dbacc69d8a467c56791fda7d329e83620eca18a5bbaf02716674d343e7f extends Twig_Template
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
        $__internal_f5158a2ac88698240de51b9a368b4ff29df444543cf03a4c149b2558712f7823 = $this->env->getExtension("native_profiler");
        $__internal_f5158a2ac88698240de51b9a368b4ff29df444543cf03a4c149b2558712f7823->enter($__internal_f5158a2ac88698240de51b9a368b4ff29df444543cf03a4c149b2558712f7823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f5158a2ac88698240de51b9a368b4ff29df444543cf03a4c149b2558712f7823->leave($__internal_f5158a2ac88698240de51b9a368b4ff29df444543cf03a4c149b2558712f7823_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
