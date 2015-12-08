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
        $__internal_72b45dc1f93f899219f0a247f80c68b6c654e495546504e0ce0c2ca5cd7e8721 = $this->env->getExtension("native_profiler");
        $__internal_72b45dc1f93f899219f0a247f80c68b6c654e495546504e0ce0c2ca5cd7e8721->enter($__internal_72b45dc1f93f899219f0a247f80c68b6c654e495546504e0ce0c2ca5cd7e8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_72b45dc1f93f899219f0a247f80c68b6c654e495546504e0ce0c2ca5cd7e8721->leave($__internal_72b45dc1f93f899219f0a247f80c68b6c654e495546504e0ce0c2ca5cd7e8721_prof);

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
