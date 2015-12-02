<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3f017e225088b7084792010d21bdebc688eb9f7e647773521ef58a5904444672 extends Twig_Template
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
        $__internal_c97073ad53800b6fc36a7e8a55cedd078e3541ad6d336833b8d1b5125f6893aa = $this->env->getExtension("native_profiler");
        $__internal_c97073ad53800b6fc36a7e8a55cedd078e3541ad6d336833b8d1b5125f6893aa->enter($__internal_c97073ad53800b6fc36a7e8a55cedd078e3541ad6d336833b8d1b5125f6893aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c97073ad53800b6fc36a7e8a55cedd078e3541ad6d336833b8d1b5125f6893aa->leave($__internal_c97073ad53800b6fc36a7e8a55cedd078e3541ad6d336833b8d1b5125f6893aa_prof);

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
