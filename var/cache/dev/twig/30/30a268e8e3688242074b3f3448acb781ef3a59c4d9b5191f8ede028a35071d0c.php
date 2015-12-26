<?php

/* ::base.html.twig */
class __TwigTemplate_6a735823945f40dcd5a941e31939e05b35107f07b3f26acf7cfbcd17b6366077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468efe01897b7f0f8237698e3cf1e9d2c908a16836eba1eaf613193eff3fcc45 = $this->env->getExtension("native_profiler");
        $__internal_468efe01897b7f0f8237698e3cf1e9d2c908a16836eba1eaf613193eff3fcc45->enter($__internal_468efe01897b7f0f8237698e3cf1e9d2c908a16836eba1eaf613193eff3fcc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 13
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\"><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M12,0.9C5.8,0.9,0.9,5.8,0.9,12s5,11.1,11.1,11.1s11.1-5,11.1-11.1S18.2,0.9,12,0.9z M18.5,6.9
    c-0.6,0-0.9-0.3-0.9-0.8c0-0.2,0-0.4,0.2-0.6c0.1-0.3,0.2-0.3,0.2-0.4c0-0.3-0.5-0.4-0.6-0.4c-1.8,0.1-2.3,2.5-2.7,4.4l-0.2,1
    c1,0.2,1.8,0,2.2-0.3c0.6-0.4-0.2-0.7-0.1-1.2c0.1-0.3,0.5-0.5,0.7-0.6c0.5,0,0.7,0.5,0.7,0.9c0,0.7-1,1.8-3,1.8
    c-0.3,0-0.5,0-0.6-0.1L13.8,13c-0.4,1.6-0.8,3.8-2.4,5.7c-1.4,1.7-2.9,1.9-3.5,1.9c-1.2,0-1.9-0.6-2-1.5c0-0.8,0.7-1.3,1.2-1.3
    c0.6,0,1.1,0.5,1.1,1c0,0.5-0.2,0.6-0.4,0.6c-0.1,0.1-0.3,0.2-0.3,0.4c0,0.1,0.1,0.3,0.4,0.3c0.5,0,0.8-0.3,1.1-0.5
    c1.2-0.9,1.6-2.7,2.2-5.7l0.1-0.7c0.2-1,0.5-2.1,0.7-3.2c-0.8-0.6-1.3-1.4-2.4-1.7C9,8.2,8.5,8.4,8.1,8.8c-0.4,0.5-0.2,1.1,0.2,1.5
    L9,10.9c0.7,0.8,1.2,1.6,1,2.5C9.7,14.9,8,16,6,15.3c-1.8-0.6-2-1.8-1.8-2.5c0.2-0.6,0.6-0.7,1.1-0.6c0.5,0.2,0.6,0.7,0.6,1.2
    c0,0.1,0,0.1-0.1,0.3c-0.2,0.1-0.3,0.3-0.3,0.4c-0.1,0.4,0.4,0.6,0.7,0.7c0.7,0.3,1.6-0.2,1.8-0.8c0.2-0.6-0.2-1-0.4-1.1l-0.7-0.8
    c-0.4-0.4-1.1-1.4-0.7-2.6C6.3,9,6.6,8.6,6.9,8.2c0.9-0.6,1.8-0.7,2.8-0.6c1.2,0.4,1.8,1.1,2.6,1.8c0.5-1.2,1-2.4,1.8-3.5
    C15,5,16,4.3,17.2,4.2c1.3,0.2,2.2,0.7,2.2,1.6C19.4,6.2,19.2,6.9,18.5,6.9z\"></path>
</svg></a><a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">Symfony Classroom</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li></li>
                <li></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <div class=\"navbar-form navbar-right\">
                    ";
        // line 61
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("UserBundle:HoritzontalLogin:horitzontalLogin", array("route" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))));
        echo "
                </div>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div>
</nav>

<div class=\"container\">
    <ul>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </ul>
</div>

<div class=\"container\">
    <div class=\"margin-bottom-md\"></div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 84
        $this->displayBlock('sidebar', $context, $blocks);
        // line 111
        echo "        </div>
    </div>
    <hr>
    <footer>
        <p class=\"text-right\">&copy; 2015 Ismael Trascastro</p>
    </footer>
</div> <!-- /container -->

";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
</body>
</html>";
        
        $__internal_468efe01897b7f0f8237698e3cf1e9d2c908a16836eba1eaf613193eff3fcc45->leave($__internal_468efe01897b7f0f8237698e3cf1e9d2c908a16836eba1eaf613193eff3fcc45_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_2775ed1a7c01c5df6db7209b21d6beaa18328efd5304046c533e56668c07393b = $this->env->getExtension("native_profiler");
        $__internal_2775ed1a7c01c5df6db7209b21d6beaa18328efd5304046c533e56668c07393b->enter($__internal_2775ed1a7c01c5df6db7209b21d6beaa18328efd5304046c533e56668c07393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2775ed1a7c01c5df6db7209b21d6beaa18328efd5304046c533e56668c07393b->leave($__internal_2775ed1a7c01c5df6db7209b21d6beaa18328efd5304046c533e56668c07393b_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67bb612a64d94113600528721aadd69031063086f7e9f0104870ffa7648e004d = $this->env->getExtension("native_profiler");
        $__internal_67bb612a64d94113600528721aadd69031063086f7e9f0104870ffa7648e004d->enter($__internal_67bb612a64d94113600528721aadd69031063086f7e9f0104870ffa7648e004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jumbotron.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_67bb612a64d94113600528721aadd69031063086f7e9f0104870ffa7648e004d->leave($__internal_67bb612a64d94113600528721aadd69031063086f7e9f0104870ffa7648e004d_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7730b571262a13f80d1c4b400fcec66e5187ac8df43125caa9348de96b7cfa6 = $this->env->getExtension("native_profiler");
        $__internal_c7730b571262a13f80d1c4b400fcec66e5187ac8df43125caa9348de96b7cfa6->enter($__internal_c7730b571262a13f80d1c4b400fcec66e5187ac8df43125caa9348de96b7cfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7730b571262a13f80d1c4b400fcec66e5187ac8df43125caa9348de96b7cfa6->leave($__internal_c7730b571262a13f80d1c4b400fcec66e5187ac8df43125caa9348de96b7cfa6_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c623f03ed65317f8d21f59097eb3399b472440d42732d5988fd059171f46acf7 = $this->env->getExtension("native_profiler");
        $__internal_c623f03ed65317f8d21f59097eb3399b472440d42732d5988fd059171f46acf7->enter($__internal_c623f03ed65317f8d21f59097eb3399b472440d42732d5988fd059171f46acf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "                <div class=\"container-fluid\">
                    ";
        // line 86
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 87
            echo "                        <div class=\"row margin-bottom-md\">
                            <div class=\"col-md-12\">
                                <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("app_admin_index_index");
            echo "\">Dashboard</a>
                            </div>
                        </div>
                    ";
        }
        // line 93
        echo "                    <div class=\"row margin-bottom-md\">
                        <div class=\"col-md-12\">
                            <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("app_article_new");
        echo "\">Submit a new article</a>
                        </div>
                    </div>
                    <div class=\"row margin-bottom-md\">
                        <div class=\"col-md-12\">
                            <a class=\"btn btn-default\" style=\"font-size:x-large;width: 100%\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("app_tags_tags");
        echo "\">Tags</a>
                        </div>
                    </div>
                    <div class=\"row bg-success\">
                        <div class=\"col-md-12\">
                            <div class=\"margin-bottom-md\"></div>
                            ";
        // line 106
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("AppBundle:Comment:lastComments"));
        echo "
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_c623f03ed65317f8d21f59097eb3399b472440d42732d5988fd059171f46acf7->leave($__internal_c623f03ed65317f8d21f59097eb3399b472440d42732d5988fd059171f46acf7_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4671ca2947232dd9b2e4608aa6aa3b5decb12cdfadf89180ec9fbf8aeef01e69 = $this->env->getExtension("native_profiler");
        $__internal_4671ca2947232dd9b2e4608aa6aa3b5decb12cdfadf89180ec9fbf8aeef01e69->enter($__internal_4671ca2947232dd9b2e4608aa6aa3b5decb12cdfadf89180ec9fbf8aeef01e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4671ca2947232dd9b2e4608aa6aa3b5decb12cdfadf89180ec9fbf8aeef01e69->leave($__internal_4671ca2947232dd9b2e4608aa6aa3b5decb12cdfadf89180ec9fbf8aeef01e69_prof);

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
        return array (  279 => 120,  273 => 119,  261 => 106,  252 => 100,  244 => 95,  240 => 93,  233 => 89,  229 => 87,  227 => 86,  224 => 85,  218 => 84,  207 => 81,  198 => 16,  194 => 15,  189 => 14,  183 => 13,  172 => 11,  162 => 127,  155 => 122,  153 => 119,  143 => 111,  141 => 84,  137 => 82,  135 => 81,  126 => 74,  117 => 72,  113 => 71,  100 => 61,  85 => 49,  71 => 38,  49 => 19,  46 => 18,  44 => 13,  39 => 11,  27 => 1,);
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
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />*/
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
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_article_articles') }}"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">*/
/* <path fill="#AAAAAA" d="M12,0.9C5.8,0.9,0.9,5.8,0.9,12s5,11.1,11.1,11.1s11.1-5,11.1-11.1S18.2,0.9,12,0.9z M18.5,6.9*/
/*     c-0.6,0-0.9-0.3-0.9-0.8c0-0.2,0-0.4,0.2-0.6c0.1-0.3,0.2-0.3,0.2-0.4c0-0.3-0.5-0.4-0.6-0.4c-1.8,0.1-2.3,2.5-2.7,4.4l-0.2,1*/
/*     c1,0.2,1.8,0,2.2-0.3c0.6-0.4-0.2-0.7-0.1-1.2c0.1-0.3,0.5-0.5,0.7-0.6c0.5,0,0.7,0.5,0.7,0.9c0,0.7-1,1.8-3,1.8*/
/*     c-0.3,0-0.5,0-0.6-0.1L13.8,13c-0.4,1.6-0.8,3.8-2.4,5.7c-1.4,1.7-2.9,1.9-3.5,1.9c-1.2,0-1.9-0.6-2-1.5c0-0.8,0.7-1.3,1.2-1.3*/
/*     c0.6,0,1.1,0.5,1.1,1c0,0.5-0.2,0.6-0.4,0.6c-0.1,0.1-0.3,0.2-0.3,0.4c0,0.1,0.1,0.3,0.4,0.3c0.5,0,0.8-0.3,1.1-0.5*/
/*     c1.2-0.9,1.6-2.7,2.2-5.7l0.1-0.7c0.2-1,0.5-2.1,0.7-3.2c-0.8-0.6-1.3-1.4-2.4-1.7C9,8.2,8.5,8.4,8.1,8.8c-0.4,0.5-0.2,1.1,0.2,1.5*/
/*     L9,10.9c0.7,0.8,1.2,1.6,1,2.5C9.7,14.9,8,16,6,15.3c-1.8-0.6-2-1.8-1.8-2.5c0.2-0.6,0.6-0.7,1.1-0.6c0.5,0.2,0.6,0.7,0.6,1.2*/
/*     c0,0.1,0,0.1-0.1,0.3c-0.2,0.1-0.3,0.3-0.3,0.4c-0.1,0.4,0.4,0.6,0.7,0.7c0.7,0.3,1.6-0.2,1.8-0.8c0.2-0.6-0.2-1-0.4-1.1l-0.7-0.8*/
/*     c-0.4-0.4-1.1-1.4-0.7-2.6C6.3,9,6.6,8.6,6.9,8.2c0.9-0.6,1.8-0.7,2.8-0.6c1.2,0.4,1.8,1.1,2.6,1.8c0.5-1.2,1-2.4,1.8-3.5*/
/*     C15,5,16,4.3,17.2,4.2c1.3,0.2,2.2,0.7,2.2,1.6C19.4,6.2,19.2,6.9,18.5,6.9z"></path>*/
/* </svg></a><a class="navbar-brand" href="{{ path('app_article_articles') }}">Symfony Classroom</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li></li>*/
/*                 <li></li>*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <div class="navbar-form navbar-right">*/
/*                     {{ render_esi(controller('UserBundle:HoritzontalLogin:horitzontalLogin', {'route': app.request.get('_route')})) }}*/
/*                 </div>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/* */
/*     </div>*/
/* </nav>*/
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
/*     <div class="margin-bottom-md"></div>*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% block sidebar %}*/
/*                 <div class="container-fluid">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                         <div class="row margin-bottom-md">*/
/*                             <div class="col-md-12">*/
/*                                 <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_admin_index_index') }}">Dashboard</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="row margin-bottom-md">*/
/*                         <div class="col-md-12">*/
/*                             <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_article_new') }}">Submit a new article</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row margin-bottom-md">*/
/*                         <div class="col-md-12">*/
/*                             <a class="btn btn-default" style="font-size:x-large;width: 100%" href="{{ path('app_tags_tags') }}">Tags</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row bg-success">*/
/*                         <div class="col-md-12">*/
/*                             <div class="margin-bottom-md"></div>*/
/*                             {{ render_esi(controller('AppBundle:Comment:lastComments')) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/*     <footer>*/
/*         <p class="text-right">&copy; 2015 Ismael Trascastro</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>*/
/* </body>*/
/* </html>*/
