<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3756724b25d7d87d54c0690d2118ece321c9db75d60c31e4330aa45062f3d57c extends Twig_Template
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
        $__internal_75f76b5acb2d951e28dc3b72f2992dad1902bf444f2e37c8e5b5d91c8ae92dca = $this->env->getExtension("native_profiler");
        $__internal_75f76b5acb2d951e28dc3b72f2992dad1902bf444f2e37c8e5b5d91c8ae92dca->enter($__internal_75f76b5acb2d951e28dc3b72f2992dad1902bf444f2e37c8e5b5d91c8ae92dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_75f76b5acb2d951e28dc3b72f2992dad1902bf444f2e37c8e5b5d91c8ae92dca->leave($__internal_75f76b5acb2d951e28dc3b72f2992dad1902bf444f2e37c8e5b5d91c8ae92dca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
