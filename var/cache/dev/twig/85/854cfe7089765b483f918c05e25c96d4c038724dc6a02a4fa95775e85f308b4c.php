<?php

/* ::base.html.twig */
class __TwigTemplate_dd0558bb10ca19bddb5230e24d0f1a7c2220d57749ca59dce37fb78f1c21193b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b2b8dde25149a6ec9abdc40e90dbb56c3f28b7822ffd6f36120b49127685219 = $this->env->getExtension("native_profiler");
        $__internal_8b2b8dde25149a6ec9abdc40e90dbb56c3f28b7822ffd6f36120b49127685219->enter($__internal_8b2b8dde25149a6ec9abdc40e90dbb56c3f28b7822ffd6f36120b49127685219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("app_index_index");
        echo "\">Symfony Classroom</a>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 47
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
</div>

<div class=\"container\">
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_8b2b8dde25149a6ec9abdc40e90dbb56c3f28b7822ffd6f36120b49127685219->leave($__internal_8b2b8dde25149a6ec9abdc40e90dbb56c3f28b7822ffd6f36120b49127685219_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a215e20ad298db208d504b46a2bd3cba875c2c157ca4916b74fd619e28ef059 = $this->env->getExtension("native_profiler");
        $__internal_4a215e20ad298db208d504b46a2bd3cba875c2c157ca4916b74fd619e28ef059->enter($__internal_4a215e20ad298db208d504b46a2bd3cba875c2c157ca4916b74fd619e28ef059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a215e20ad298db208d504b46a2bd3cba875c2c157ca4916b74fd619e28ef059->leave($__internal_4a215e20ad298db208d504b46a2bd3cba875c2c157ca4916b74fd619e28ef059_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbded69b242298bdf56498b666a232c26666b7d099ad849ffc2656b7fcff78ab = $this->env->getExtension("native_profiler");
        $__internal_fbded69b242298bdf56498b666a232c26666b7d099ad849ffc2656b7fcff78ab->enter($__internal_fbded69b242298bdf56498b666a232c26666b7d099ad849ffc2656b7fcff78ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/jumbotron.css\" />
    ";
        
        $__internal_fbded69b242298bdf56498b666a232c26666b7d099ad849ffc2656b7fcff78ab->leave($__internal_fbded69b242298bdf56498b666a232c26666b7d099ad849ffc2656b7fcff78ab_prof);

    }

    // line 47
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_ec3c916d4e35b44b0333fe494ea843575a803333b97e6a8b1649d966060356ad = $this->env->getExtension("native_profiler");
        $__internal_ec3c916d4e35b44b0333fe494ea843575a803333b97e6a8b1649d966060356ad->enter($__internal_ec3c916d4e35b44b0333fe494ea843575a803333b97e6a8b1649d966060356ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Session 7 - Doctrine";
        
        $__internal_ec3c916d4e35b44b0333fe494ea843575a803333b97e6a8b1649d966060356ad->leave($__internal_ec3c916d4e35b44b0333fe494ea843575a803333b97e6a8b1649d966060356ad_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a653c0dc3434ad5d19e2dfb3870402ee78df26e0760b7e9da93ba8ee092a334 = $this->env->getExtension("native_profiler");
        $__internal_8a653c0dc3434ad5d19e2dfb3870402ee78df26e0760b7e9da93ba8ee092a334->enter($__internal_8a653c0dc3434ad5d19e2dfb3870402ee78df26e0760b7e9da93ba8ee092a334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>
    ";
        
        $__internal_8a653c0dc3434ad5d19e2dfb3870402ee78df26e0760b7e9da93ba8ee092a334->leave($__internal_8a653c0dc3434ad5d19e2dfb3870402ee78df26e0760b7e9da93ba8ee092a334_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7307b0981b3f6da5dcd1b450150f891d8be5ac62915a819b7803da1b48e75600 = $this->env->getExtension("native_profiler");
        $__internal_7307b0981b3f6da5dcd1b450150f891d8be5ac62915a819b7803da1b48e75600->enter($__internal_7307b0981b3f6da5dcd1b450150f891d8be5ac62915a819b7803da1b48e75600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "<script src=\"/js/bootstrap.min.js\"></script>
";
        
        $__internal_7307b0981b3f6da5dcd1b450150f891d8be5ac62915a819b7803da1b48e75600->leave($__internal_7307b0981b3f6da5dcd1b450150f891d8be5ac62915a819b7803da1b48e75600_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 88,  207 => 87,  182 => 61,  176 => 60,  164 => 47,  155 => 15,  149 => 14,  138 => 11,  124 => 90,  122 => 87,  114 => 80,  112 => 60,  106 => 56,  97 => 54,  93 => 53,  84 => 47,  73 => 39,  50 => 19,  47 => 18,  44 => 14,  39 => 11,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     {# This must be rewritten for symfony 3#}*/
/*     {% block stylesheets %}*/
/*     <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/*     <link rel="stylesheet" href="/css/jumbotron.css" />*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_index_index') }}">Symfony Classroom</a>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>{% block headTitle %}Session 7 - Doctrine{% endblock %}</h1>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <ul>*/
/*         {% for message in app.session.flashBag.get('messages') %}*/
/*             <li>{{ message }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     {% block body %}*/
/*         <!-- Example row of columns -->*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <h2>Heading</h2>*/
/*                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*                 <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     <hr>*/
/*     <footer>*/
/*         <p class="text-right">&copy; 2015 Ismael Trascastro</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* {# This must be rewritten for symfony 3#}*/
/* {% block javascripts %}*/
/* <script src="/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>*/
/* </body>*/
/* </html>*/
