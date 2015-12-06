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
        $__internal_33bdcdaff36f85a62daf9029546e87beea7b0401e0bcdbef8765425b072c4c55 = $this->env->getExtension("native_profiler");
        $__internal_33bdcdaff36f85a62daf9029546e87beea7b0401e0bcdbef8765425b072c4c55->enter($__internal_33bdcdaff36f85a62daf9029546e87beea7b0401e0bcdbef8765425b072c4c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_33bdcdaff36f85a62daf9029546e87beea7b0401e0bcdbef8765425b072c4c55->leave($__internal_33bdcdaff36f85a62daf9029546e87beea7b0401e0bcdbef8765425b072c4c55_prof);

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
