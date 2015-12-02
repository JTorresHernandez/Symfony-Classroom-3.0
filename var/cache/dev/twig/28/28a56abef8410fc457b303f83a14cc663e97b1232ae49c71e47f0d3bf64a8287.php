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
        $__internal_b1a6528a8a3f173864af78bc4beb3588972a236e4e7f1ab61560b3bfc6f2bc10 = $this->env->getExtension("native_profiler");
        $__internal_b1a6528a8a3f173864af78bc4beb3588972a236e4e7f1ab61560b3bfc6f2bc10->enter($__internal_b1a6528a8a3f173864af78bc4beb3588972a236e4e7f1ab61560b3bfc6f2bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b1a6528a8a3f173864af78bc4beb3588972a236e4e7f1ab61560b3bfc6f2bc10->leave($__internal_b1a6528a8a3f173864af78bc4beb3588972a236e4e7f1ab61560b3bfc6f2bc10_prof);

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
