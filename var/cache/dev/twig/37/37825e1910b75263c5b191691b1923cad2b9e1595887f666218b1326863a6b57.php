<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7ae1bf16cf0123bd6963353d7f580998866905072177f8a2bc3c876aa72cde1a extends Twig_Template
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
        $__internal_9d96fe5a497bba53136a2caacf00e519d7fec71d5d6f72195521ed2b3c4e9d42 = $this->env->getExtension("native_profiler");
        $__internal_9d96fe5a497bba53136a2caacf00e519d7fec71d5d6f72195521ed2b3c4e9d42->enter($__internal_9d96fe5a497bba53136a2caacf00e519d7fec71d5d6f72195521ed2b3c4e9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d96fe5a497bba53136a2caacf00e519d7fec71d5d6f72195521ed2b3c4e9d42->leave($__internal_9d96fe5a497bba53136a2caacf00e519d7fec71d5d6f72195521ed2b3c4e9d42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
