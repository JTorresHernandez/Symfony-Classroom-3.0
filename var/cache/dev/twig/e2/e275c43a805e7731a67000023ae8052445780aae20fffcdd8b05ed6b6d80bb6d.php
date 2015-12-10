<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1b6a141b91b63d6f3a3d408af969c28a2f8358ac17ec2fe050d36dc200aece56 extends Twig_Template
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
        $__internal_03e57885df9cbb600f3b24e129acf80d83cdf44ee752901a95077f2a9f7ad7cc = $this->env->getExtension("native_profiler");
        $__internal_03e57885df9cbb600f3b24e129acf80d83cdf44ee752901a95077f2a9f7ad7cc->enter($__internal_03e57885df9cbb600f3b24e129acf80d83cdf44ee752901a95077f2a9f7ad7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_03e57885df9cbb600f3b24e129acf80d83cdf44ee752901a95077f2a9f7ad7cc->leave($__internal_03e57885df9cbb600f3b24e129acf80d83cdf44ee752901a95077f2a9f7ad7cc_prof);

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
