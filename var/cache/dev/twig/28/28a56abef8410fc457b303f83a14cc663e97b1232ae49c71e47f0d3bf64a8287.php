<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6018a260f6a561d9747c25179431751edc6f30539a975125668799bb93346b13 extends Twig_Template
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
        $__internal_a7ee925f1f6c04018cbe582b803c03fbad14fd253b85e459237eb856e2ec4f8f = $this->env->getExtension("native_profiler");
        $__internal_a7ee925f1f6c04018cbe582b803c03fbad14fd253b85e459237eb856e2ec4f8f->enter($__internal_a7ee925f1f6c04018cbe582b803c03fbad14fd253b85e459237eb856e2ec4f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a7ee925f1f6c04018cbe582b803c03fbad14fd253b85e459237eb856e2ec4f8f->leave($__internal_a7ee925f1f6c04018cbe582b803c03fbad14fd253b85e459237eb856e2ec4f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
