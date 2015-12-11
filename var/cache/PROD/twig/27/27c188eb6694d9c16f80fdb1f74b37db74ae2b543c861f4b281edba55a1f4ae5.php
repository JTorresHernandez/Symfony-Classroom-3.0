<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a9c6e79040999c5ef3d3423308e542952a6b0f442d5d98b93fc1bf23034a178e extends Twig_Template
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
        $__internal_c244860b951a8f41582e81b9c9e18a7fbdbe044f84f88f2f2ab0cd8c8f8fdf7f = $this->env->getExtension("native_profiler");
        $__internal_c244860b951a8f41582e81b9c9e18a7fbdbe044f84f88f2f2ab0cd8c8f8fdf7f->enter($__internal_c244860b951a8f41582e81b9c9e18a7fbdbe044f84f88f2f2ab0cd8c8f8fdf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c244860b951a8f41582e81b9c9e18a7fbdbe044f84f88f2f2ab0cd8c8f8fdf7f->leave($__internal_c244860b951a8f41582e81b9c9e18a7fbdbe044f84f88f2f2ab0cd8c8f8fdf7f_prof);

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
