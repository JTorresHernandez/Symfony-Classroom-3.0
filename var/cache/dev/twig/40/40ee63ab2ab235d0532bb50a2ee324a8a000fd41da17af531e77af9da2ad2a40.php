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
        $__internal_67ead4a041bfa70a1f71b9f0240d604317ed5a481dd2a48dc16a2ee68de6bbd0 = $this->env->getExtension("native_profiler");
        $__internal_67ead4a041bfa70a1f71b9f0240d604317ed5a481dd2a48dc16a2ee68de6bbd0->enter($__internal_67ead4a041bfa70a1f71b9f0240d604317ed5a481dd2a48dc16a2ee68de6bbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67ead4a041bfa70a1f71b9f0240d604317ed5a481dd2a48dc16a2ee68de6bbd0->leave($__internal_67ead4a041bfa70a1f71b9f0240d604317ed5a481dd2a48dc16a2ee68de6bbd0_prof);

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
