<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d03979c8554804ce0805590c29c361c0da70b48846f1585dccbb50e5a29c7f09 extends Twig_Template
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
        $__internal_2db538c07c4964e348764ed748b3604b3c153e0bb6708668c5151993702f1cd3 = $this->env->getExtension("native_profiler");
        $__internal_2db538c07c4964e348764ed748b3604b3c153e0bb6708668c5151993702f1cd3->enter($__internal_2db538c07c4964e348764ed748b3604b3c153e0bb6708668c5151993702f1cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2db538c07c4964e348764ed748b3604b3c153e0bb6708668c5151993702f1cd3->leave($__internal_2db538c07c4964e348764ed748b3604b3c153e0bb6708668c5151993702f1cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
