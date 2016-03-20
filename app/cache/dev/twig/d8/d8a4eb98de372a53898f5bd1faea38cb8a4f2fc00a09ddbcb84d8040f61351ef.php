<?php

/* ::base.html.twig */
class __TwigTemplate_86f9d0fded3ad6e3e3880b3d2629e02f3b5509646daf3f1c24fce2139a05fc64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a96b7fa06e41988dbe88ecea3ab455f544fbad362115c40a2a5680ded0263a2f = $this->env->getExtension("native_profiler");
        $__internal_a96b7fa06e41988dbe88ecea3ab455f544fbad362115c40a2a5680ded0263a2f->enter($__internal_a96b7fa06e41988dbe88ecea3ab455f544fbad362115c40a2a5680ded0263a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a96b7fa06e41988dbe88ecea3ab455f544fbad362115c40a2a5680ded0263a2f->leave($__internal_a96b7fa06e41988dbe88ecea3ab455f544fbad362115c40a2a5680ded0263a2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff06a9da1facb63191535cd5cdac051934e22c88db72a0a979f222d501fbd5f1 = $this->env->getExtension("native_profiler");
        $__internal_ff06a9da1facb63191535cd5cdac051934e22c88db72a0a979f222d501fbd5f1->enter($__internal_ff06a9da1facb63191535cd5cdac051934e22c88db72a0a979f222d501fbd5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff06a9da1facb63191535cd5cdac051934e22c88db72a0a979f222d501fbd5f1->leave($__internal_ff06a9da1facb63191535cd5cdac051934e22c88db72a0a979f222d501fbd5f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb2f1c6cfec18aaf624c35be784a4d3ff02b3ede0fa1a2feece3f2d73bfe68b5 = $this->env->getExtension("native_profiler");
        $__internal_cb2f1c6cfec18aaf624c35be784a4d3ff02b3ede0fa1a2feece3f2d73bfe68b5->enter($__internal_cb2f1c6cfec18aaf624c35be784a4d3ff02b3ede0fa1a2feece3f2d73bfe68b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb2f1c6cfec18aaf624c35be784a4d3ff02b3ede0fa1a2feece3f2d73bfe68b5->leave($__internal_cb2f1c6cfec18aaf624c35be784a4d3ff02b3ede0fa1a2feece3f2d73bfe68b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_56de899135f9514efe1311b7d973b1c2122a716446dce3c9d9b9294bbcda3449 = $this->env->getExtension("native_profiler");
        $__internal_56de899135f9514efe1311b7d973b1c2122a716446dce3c9d9b9294bbcda3449->enter($__internal_56de899135f9514efe1311b7d973b1c2122a716446dce3c9d9b9294bbcda3449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56de899135f9514efe1311b7d973b1c2122a716446dce3c9d9b9294bbcda3449->leave($__internal_56de899135f9514efe1311b7d973b1c2122a716446dce3c9d9b9294bbcda3449_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4711671d66b25fe79bd02190239b5583164d284fafdf4e77f1aaea24932bcf35 = $this->env->getExtension("native_profiler");
        $__internal_4711671d66b25fe79bd02190239b5583164d284fafdf4e77f1aaea24932bcf35->enter($__internal_4711671d66b25fe79bd02190239b5583164d284fafdf4e77f1aaea24932bcf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4711671d66b25fe79bd02190239b5583164d284fafdf4e77f1aaea24932bcf35->leave($__internal_4711671d66b25fe79bd02190239b5583164d284fafdf4e77f1aaea24932bcf35_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
