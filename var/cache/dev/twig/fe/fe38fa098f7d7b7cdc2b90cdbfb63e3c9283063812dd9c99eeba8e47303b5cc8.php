<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_71dd2c4b8fe36ac9c1692d74f05d889d92c74e4b13b5e459c716b469a89b4e53 extends Twig_Template
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
        $__internal_c9b613cd5e1ae7fb87f5842c19063fc15d67b0db54aa9a668e015d18a0d51560 = $this->env->getExtension("native_profiler");
        $__internal_c9b613cd5e1ae7fb87f5842c19063fc15d67b0db54aa9a668e015d18a0d51560->enter($__internal_c9b613cd5e1ae7fb87f5842c19063fc15d67b0db54aa9a668e015d18a0d51560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c9b613cd5e1ae7fb87f5842c19063fc15d67b0db54aa9a668e015d18a0d51560->leave($__internal_c9b613cd5e1ae7fb87f5842c19063fc15d67b0db54aa9a668e015d18a0d51560_prof);

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
