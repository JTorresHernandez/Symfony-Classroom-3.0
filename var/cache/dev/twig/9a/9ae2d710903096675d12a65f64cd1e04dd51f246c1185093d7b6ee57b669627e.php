<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ab84e2833b6c45f4417fec432c95950b03c80c249415b778ce3538e7adc3446f extends Twig_Template
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
        $__internal_3fd2f435301a8543a3a39538abd5458c9fd9c655ae71a1226e90603c2329944f = $this->env->getExtension("native_profiler");
        $__internal_3fd2f435301a8543a3a39538abd5458c9fd9c655ae71a1226e90603c2329944f->enter($__internal_3fd2f435301a8543a3a39538abd5458c9fd9c655ae71a1226e90603c2329944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3fd2f435301a8543a3a39538abd5458c9fd9c655ae71a1226e90603c2329944f->leave($__internal_3fd2f435301a8543a3a39538abd5458c9fd9c655ae71a1226e90603c2329944f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */