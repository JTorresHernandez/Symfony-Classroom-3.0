<?php

/* :admin:admin_layout.html.twig */
class __TwigTemplate_3d0207d427c1fedcbbf3a8ef12351b2c675c20afb0f8bfd7e22beffde74afcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cb4fa423b7f4e1f28ad90aef8fa99bcfab720d50189e9ce63c4e1355aad19e1 = $this->env->getExtension("native_profiler");
        $__internal_7cb4fa423b7f4e1f28ad90aef8fa99bcfab720d50189e9ce63c4e1355aad19e1->enter($__internal_7cb4fa423b7f4e1f28ad90aef8fa99bcfab720d50189e9ce63c4e1355aad19e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:admin_layout.html.twig"));

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
    <link rel=\"icon\" href=\"\">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Home</a></li>

            </ul>
            <form class=\"navbar-form navbar-right\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
            </form>
        </div>
    </div>
</nav>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
            <ul class=\"nav nav-sidebar\">
                <li class=\"active\"><a href=\"#\">Articles <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">New article</a></li>
                <li><a href=\"#\">Update article</a></li>
                <li><a href=\"#\">Remove article</a></li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"\">Tags</a></li>
                <li><a href=\"\">New tag</a></li>
                <li><a href=\"\">Update tag</a></li>
                <li><a href=\"\">Remove tag</a></li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_unused");
        echo "\">Unused tags</a></li>
                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
        echo "\">Remove all unused tags</a></li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"#\">Comments</a></li>
                <li><a href=\"#\">New comment</a></li>
                <li><a href=\"#\">Update comment</a></li>
                <li><a href=\"#\">Remove comment</a></li>
            </ul>
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"\">Users</a></li>
                <li><a href=\"\">New user</a></li>
                <li><a href=\"\">Update user</a></li>
                <li><a href=\"\">Remove user</a></li>
            </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
            <h1 class=\"page-header\">";
        // line 86
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</h1>
            ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"js/";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_7cb4fa423b7f4e1f28ad90aef8fa99bcfab720d50189e9ce63c4e1355aad19e1->leave($__internal_7cb4fa423b7f4e1f28ad90aef8fa99bcfab720d50189e9ce63c4e1355aad19e1_prof);

    }

    // line 86
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_0d68e8e02927487581d327d6dc5c214b61b057b7281107b6dbc4e455a0d49b73 = $this->env->getExtension("native_profiler");
        $__internal_0d68e8e02927487581d327d6dc5c214b61b057b7281107b6dbc4e455a0d49b73->enter($__internal_0d68e8e02927487581d327d6dc5c214b61b057b7281107b6dbc4e455a0d49b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        
        $__internal_0d68e8e02927487581d327d6dc5c214b61b057b7281107b6dbc4e455a0d49b73->leave($__internal_0d68e8e02927487581d327d6dc5c214b61b057b7281107b6dbc4e455a0d49b73_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_c05e652557a32578659631b5a47f8cca7a30cecf9a99c0bd9be1f86b8fa8df37 = $this->env->getExtension("native_profiler");
        $__internal_c05e652557a32578659631b5a47f8cca7a30cecf9a99c0bd9be1f86b8fa8df37->enter($__internal_c05e652557a32578659631b5a47f8cca7a30cecf9a99c0bd9be1f86b8fa8df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c05e652557a32578659631b5a47f8cca7a30cecf9a99c0bd9be1f86b8fa8df37->leave($__internal_c05e652557a32578659631b5a47f8cca7a30cecf9a99c0bd9be1f86b8fa8df37_prof);

    }

    public function getTemplateName()
    {
        return ":admin:admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 87,  168 => 86,  157 => 99,  152 => 97,  148 => 96,  144 => 95,  135 => 88,  133 => 87,  129 => 86,  110 => 70,  106 => 69,  79 => 45,  52 => 21,  46 => 18,  40 => 15,  24 => 1,);
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
/*     <link rel="icon" href="">*/
/* */
/*     <title>Dashboard Template for Bootstrap</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">*/
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
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Dashboard</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="{{ path('app_article_articles') }}">Home</a></li>*/
/* */
/*             </ul>*/
/*             <form class="navbar-form navbar-right">*/
/*                 <input type="text" class="form-control" placeholder="Search...">*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-sm-3 col-md-2 sidebar">*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li class="active"><a href="#">Articles <span class="sr-only">(current)</span></a></li>*/
/*                 <li><a href="#">New article</a></li>*/
/*                 <li><a href="#">Update article</a></li>*/
/*                 <li><a href="#">Remove article</a></li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="">Tags</a></li>*/
/*                 <li><a href="">New tag</a></li>*/
/*                 <li><a href="">Update tag</a></li>*/
/*                 <li><a href="">Remove tag</a></li>*/
/*                 <li><a href="{{ path('app_admin_tag_unused') }}">Unused tags</a></li>*/
/*                 <li><a href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a></li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="#">Comments</a></li>*/
/*                 <li><a href="#">New comment</a></li>*/
/*                 <li><a href="#">Update comment</a></li>*/
/*                 <li><a href="#">Remove comment</a></li>*/
/*             </ul>*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="">Users</a></li>*/
/*                 <li><a href="">New user</a></li>*/
/*                 <li><a href="">Update user</a></li>*/
/*                 <li><a href="">Remove user</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*             <h1 class="page-header">{% block headTitle %}{% endblock %}</h1>*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>*/
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="js/{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
