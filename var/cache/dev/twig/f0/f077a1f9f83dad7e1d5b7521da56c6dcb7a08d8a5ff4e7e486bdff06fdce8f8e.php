<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_caafcffbfa866bc5b5fa2fbd261dca65c08f0e9d5170ef2cb0eba928010786d3 extends Twig_Template
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
        $__internal_08c4298124de486973a7495e41fa3b5052883d9d45be6fd96f0af61c62dac973 = $this->env->getExtension("native_profiler");
        $__internal_08c4298124de486973a7495e41fa3b5052883d9d45be6fd96f0af61c62dac973->enter($__internal_08c4298124de486973a7495e41fa3b5052883d9d45be6fd96f0af61c62dac973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_08c4298124de486973a7495e41fa3b5052883d9d45be6fd96f0af61c62dac973->leave($__internal_08c4298124de486973a7495e41fa3b5052883d9d45be6fd96f0af61c62dac973_prof);

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
