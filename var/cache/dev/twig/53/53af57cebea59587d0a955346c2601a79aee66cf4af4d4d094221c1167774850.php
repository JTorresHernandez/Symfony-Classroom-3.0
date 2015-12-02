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
        $__internal_8d4d5fc6fcbbf5ad4725066566f1ed39fa915b5d493477102a7c576936ca6586 = $this->env->getExtension("native_profiler");
        $__internal_8d4d5fc6fcbbf5ad4725066566f1ed39fa915b5d493477102a7c576936ca6586->enter($__internal_8d4d5fc6fcbbf5ad4725066566f1ed39fa915b5d493477102a7c576936ca6586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d4d5fc6fcbbf5ad4725066566f1ed39fa915b5d493477102a7c576936ca6586->leave($__internal_8d4d5fc6fcbbf5ad4725066566f1ed39fa915b5d493477102a7c576936ca6586_prof);

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
