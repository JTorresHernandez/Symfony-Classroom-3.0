<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9661ccd91f92ccb810a0822b381dd218bdca077a7597bc876ce69a5d2c31e6ac extends Twig_Template
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
        $__internal_6711ad49c850bedca5e31f4ad0f4becca28a20f02c4cd53a8157d14111ef5584 = $this->env->getExtension("native_profiler");
        $__internal_6711ad49c850bedca5e31f4ad0f4becca28a20f02c4cd53a8157d14111ef5584->enter($__internal_6711ad49c850bedca5e31f4ad0f4becca28a20f02c4cd53a8157d14111ef5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6711ad49c850bedca5e31f4ad0f4becca28a20f02c4cd53a8157d14111ef5584->leave($__internal_6711ad49c850bedca5e31f4ad0f4becca28a20f02c4cd53a8157d14111ef5584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
