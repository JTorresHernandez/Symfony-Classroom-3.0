<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_aefed9f628b45b1952ca177958767bfeecbcdc981fb8a33d230332eebc4e9d62 extends Twig_Template
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
        $__internal_267e77fd0991bb6a57d5dc5c8e6e3283923f7da045a5c2e276f52eeb9c219260 = $this->env->getExtension("native_profiler");
        $__internal_267e77fd0991bb6a57d5dc5c8e6e3283923f7da045a5c2e276f52eeb9c219260->enter($__internal_267e77fd0991bb6a57d5dc5c8e6e3283923f7da045a5c2e276f52eeb9c219260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_267e77fd0991bb6a57d5dc5c8e6e3283923f7da045a5c2e276f52eeb9c219260->leave($__internal_267e77fd0991bb6a57d5dc5c8e6e3283923f7da045a5c2e276f52eeb9c219260_prof);

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
