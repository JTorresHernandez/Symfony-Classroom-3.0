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
        $__internal_bb3e4815b93aed1e3c78d7ffe188520f1b9be340a4e6571ae8c75b1197d62fba = $this->env->getExtension("native_profiler");
        $__internal_bb3e4815b93aed1e3c78d7ffe188520f1b9be340a4e6571ae8c75b1197d62fba->enter($__internal_bb3e4815b93aed1e3c78d7ffe188520f1b9be340a4e6571ae8c75b1197d62fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bb3e4815b93aed1e3c78d7ffe188520f1b9be340a4e6571ae8c75b1197d62fba->leave($__internal_bb3e4815b93aed1e3c78d7ffe188520f1b9be340a4e6571ae8c75b1197d62fba_prof);

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
