<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b2d714a89e7a96634c29b4cda5ffbbe23fa675f572b741ba86f48fa0c06f305 extends Twig_Template
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
        $__internal_2b0998c5fd9397e34b576b27c3fddd403bbad71e4ecd5a5afc40f7f1d6a279cd = $this->env->getExtension("native_profiler");
        $__internal_2b0998c5fd9397e34b576b27c3fddd403bbad71e4ecd5a5afc40f7f1d6a279cd->enter($__internal_2b0998c5fd9397e34b576b27c3fddd403bbad71e4ecd5a5afc40f7f1d6a279cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2b0998c5fd9397e34b576b27c3fddd403bbad71e4ecd5a5afc40f7f1d6a279cd->leave($__internal_2b0998c5fd9397e34b576b27c3fddd403bbad71e4ecd5a5afc40f7f1d6a279cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
