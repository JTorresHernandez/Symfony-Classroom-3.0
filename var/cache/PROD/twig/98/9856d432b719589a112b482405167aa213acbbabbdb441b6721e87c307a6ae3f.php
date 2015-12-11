<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2766d8c78bc047a16b244a88903ab8099fbae052678a35c83b7a7a477840fc09 extends Twig_Template
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
        $__internal_8aa874bb90965d034c616b5581b01b63a04b4342d122d1cc292fa829c0b20e97 = $this->env->getExtension("native_profiler");
        $__internal_8aa874bb90965d034c616b5581b01b63a04b4342d122d1cc292fa829c0b20e97->enter($__internal_8aa874bb90965d034c616b5581b01b63a04b4342d122d1cc292fa829c0b20e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8aa874bb90965d034c616b5581b01b63a04b4342d122d1cc292fa829c0b20e97->leave($__internal_8aa874bb90965d034c616b5581b01b63a04b4342d122d1cc292fa829c0b20e97_prof);

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
