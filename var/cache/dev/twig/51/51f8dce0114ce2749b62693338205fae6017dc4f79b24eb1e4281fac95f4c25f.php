<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_076f03388d4f85019e3188ff546bfccf7de6c1a3b4e12868bf9e2ff8b52997b7 extends Twig_Template
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
        $__internal_8a50ece6b776c7ef34517415ada8f7570358d5f6c3f3bdd871d02b0dcdb2a209 = $this->env->getExtension("native_profiler");
        $__internal_8a50ece6b776c7ef34517415ada8f7570358d5f6c3f3bdd871d02b0dcdb2a209->enter($__internal_8a50ece6b776c7ef34517415ada8f7570358d5f6c3f3bdd871d02b0dcdb2a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8a50ece6b776c7ef34517415ada8f7570358d5f6c3f3bdd871d02b0dcdb2a209->leave($__internal_8a50ece6b776c7ef34517415ada8f7570358d5f6c3f3bdd871d02b0dcdb2a209_prof);

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
