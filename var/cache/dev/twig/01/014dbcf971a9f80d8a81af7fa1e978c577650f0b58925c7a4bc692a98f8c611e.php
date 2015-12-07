<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_301860c8d5435946d4adf0ea9cf053565b7b1c4e840884a1cd1e39d1c540f07d extends Twig_Template
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
        $__internal_22453e5868ebea4070360cd6e2cafe1a3e9ccf9d6ab30cd1f1d98710bc932d58 = $this->env->getExtension("native_profiler");
        $__internal_22453e5868ebea4070360cd6e2cafe1a3e9ccf9d6ab30cd1f1d98710bc932d58->enter($__internal_22453e5868ebea4070360cd6e2cafe1a3e9ccf9d6ab30cd1f1d98710bc932d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_22453e5868ebea4070360cd6e2cafe1a3e9ccf9d6ab30cd1f1d98710bc932d58->leave($__internal_22453e5868ebea4070360cd6e2cafe1a3e9ccf9d6ab30cd1f1d98710bc932d58_prof);

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
