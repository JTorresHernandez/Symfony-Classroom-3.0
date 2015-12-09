<?php

/* ::base.html.twig */
class __TwigTemplate_963509cee2ef0677899e7928568356b0f85172ec592b3817801279f000df3200 extends Twig_Template
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
        $__internal_173f45f4a6b9d0af96a43b572e01ef010cda86f24c657b5908953d81bc7ad142 = $this->env->getExtension("native_profiler");
        $__internal_173f45f4a6b9d0af96a43b572e01ef010cda86f24c657b5908953d81bc7ad142->enter($__internal_173f45f4a6b9d0af96a43b572e01ef010cda86f24c657b5908953d81bc7ad142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
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
        // line 40
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Symfony Classroom</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\" class=\"btn btn-default\">Link</a></li>
                <li><a href=\"#\" class=\"btn btn-primary\">Link</a></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>";
        // line 61
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
    </div>
</div>

<div class=\"container\">
    <ul>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </ul>
</div>

<div class=\"container\">
    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_173f45f4a6b9d0af96a43b572e01ef010cda86f24c657b5908953d81bc7ad142->leave($__internal_173f45f4a6b9d0af96a43b572e01ef010cda86f24c657b5908953d81bc7ad142_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e4ea3462e64cd9915d19424a6e66ddeda4b0d3cc513172d53bcbffa3743645 = $this->env->getExtension("native_profiler");
        $__internal_d3e4ea3462e64cd9915d19424a6e66ddeda4b0d3cc513172d53bcbffa3743645->enter($__internal_d3e4ea3462e64cd9915d19424a6e66ddeda4b0d3cc513172d53bcbffa3743645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d3e4ea3462e64cd9915d19424a6e66ddeda4b0d3cc513172d53bcbffa3743645->leave($__internal_d3e4ea3462e64cd9915d19424a6e66ddeda4b0d3cc513172d53bcbffa3743645_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9aed5d98882a607a65e2842ec14bbf8b2501631ec0e7dc8663f7560db36c6233 = $this->env->getExtension("native_profiler");
        $__internal_9aed5d98882a607a65e2842ec14bbf8b2501631ec0e7dc8663f7560db36c6233->enter($__internal_9aed5d98882a607a65e2842ec14bbf8b2501631ec0e7dc8663f7560db36c6233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"/css/jumbotron.css\" />
        <link rel=\"stylesheet\" href=\"/css/custom.css\" />
    ";
        
        $__internal_9aed5d98882a607a65e2842ec14bbf8b2501631ec0e7dc8663f7560db36c6233->leave($__internal_9aed5d98882a607a65e2842ec14bbf8b2501631ec0e7dc8663f7560db36c6233_prof);

    }

    // line 61
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_a3746283a632d31b3193db03f10e16c4c94e203bbad39dcd6b63cc659af6540f = $this->env->getExtension("native_profiler");
        $__internal_a3746283a632d31b3193db03f10e16c4c94e203bbad39dcd6b63cc659af6540f->enter($__internal_a3746283a632d31b3193db03f10e16c4c94e203bbad39dcd6b63cc659af6540f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Session 7 - Doctrine";
        
        $__internal_a3746283a632d31b3193db03f10e16c4c94e203bbad39dcd6b63cc659af6540f->leave($__internal_a3746283a632d31b3193db03f10e16c4c94e203bbad39dcd6b63cc659af6540f_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_96703b323d0108048582a665376a9c372619e860ad5b87975b0f9a1a39c9adad = $this->env->getExtension("native_profiler");
        $__internal_96703b323d0108048582a665376a9c372619e860ad5b87975b0f9a1a39c9adad->enter($__internal_96703b323d0108048582a665376a9c372619e860ad5b87975b0f9a1a39c9adad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
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
        
        $__internal_96703b323d0108048582a665376a9c372619e860ad5b87975b0f9a1a39c9adad->leave($__internal_96703b323d0108048582a665376a9c372619e860ad5b87975b0f9a1a39c9adad_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bdacac28e0c91f0a7a5b628696a2398c5abb57addbdc446ddc3bf6568bf5a6c = $this->env->getExtension("native_profiler");
        $__internal_1bdacac28e0c91f0a7a5b628696a2398c5abb57addbdc446ddc3bf6568bf5a6c->enter($__internal_1bdacac28e0c91f0a7a5b628696a2398c5abb57addbdc446ddc3bf6568bf5a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "<script src=\"/js/bootstrap.min.js\"></script>
";
        
        $__internal_1bdacac28e0c91f0a7a5b628696a2398c5abb57addbdc446ddc3bf6568bf5a6c->leave($__internal_1bdacac28e0c91f0a7a5b628696a2398c5abb57addbdc446ddc3bf6568bf5a6c_prof);

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
        return array (  227 => 102,  221 => 101,  196 => 75,  190 => 74,  178 => 61,  168 => 15,  162 => 14,  151 => 11,  137 => 104,  135 => 101,  127 => 94,  125 => 74,  119 => 70,  110 => 68,  106 => 67,  97 => 61,  73 => 40,  50 => 20,  47 => 19,  44 => 14,  39 => 11,  27 => 1,);
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
/*         <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/*         <link rel="stylesheet" href="/css/jumbotron.css" />*/
/*         <link rel="stylesheet" href="/css/custom.css" />*/
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
/*             <a class="navbar-brand" href="{{ path('app_article_articles') }}">Symfony Classroom</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="#" class="btn btn-default">Link</a></li>*/
/*                 <li><a href="#" class="btn btn-primary">Link</a></li>*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#">Link</a></li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/* */
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
