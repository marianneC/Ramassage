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
        $__internal_395cf6ec3aff5cc653378fb796a209690b02c06642a32261db10b1a6556b25a9 = $this->env->getExtension("native_profiler");
        $__internal_395cf6ec3aff5cc653378fb796a209690b02c06642a32261db10b1a6556b25a9->enter($__internal_395cf6ec3aff5cc653378fb796a209690b02c06642a32261db10b1a6556b25a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_395cf6ec3aff5cc653378fb796a209690b02c06642a32261db10b1a6556b25a9->leave($__internal_395cf6ec3aff5cc653378fb796a209690b02c06642a32261db10b1a6556b25a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f721fdf923fdb0f62593b932b0800f0a0e367d81f6c136d2fb3ed884682cb31e = $this->env->getExtension("native_profiler");
        $__internal_f721fdf923fdb0f62593b932b0800f0a0e367d81f6c136d2fb3ed884682cb31e->enter($__internal_f721fdf923fdb0f62593b932b0800f0a0e367d81f6c136d2fb3ed884682cb31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f721fdf923fdb0f62593b932b0800f0a0e367d81f6c136d2fb3ed884682cb31e->leave($__internal_f721fdf923fdb0f62593b932b0800f0a0e367d81f6c136d2fb3ed884682cb31e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa885e89387671b677a3fbba25c274da7d3c3d3d4eacb9c6f1f688b99a23a7b0 = $this->env->getExtension("native_profiler");
        $__internal_fa885e89387671b677a3fbba25c274da7d3c3d3d4eacb9c6f1f688b99a23a7b0->enter($__internal_fa885e89387671b677a3fbba25c274da7d3c3d3d4eacb9c6f1f688b99a23a7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa885e89387671b677a3fbba25c274da7d3c3d3d4eacb9c6f1f688b99a23a7b0->leave($__internal_fa885e89387671b677a3fbba25c274da7d3c3d3d4eacb9c6f1f688b99a23a7b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce0a1006e0b35b0ca4201b64f1d77c640c3513bff69b3da2df6d1da141a3854c = $this->env->getExtension("native_profiler");
        $__internal_ce0a1006e0b35b0ca4201b64f1d77c640c3513bff69b3da2df6d1da141a3854c->enter($__internal_ce0a1006e0b35b0ca4201b64f1d77c640c3513bff69b3da2df6d1da141a3854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce0a1006e0b35b0ca4201b64f1d77c640c3513bff69b3da2df6d1da141a3854c->leave($__internal_ce0a1006e0b35b0ca4201b64f1d77c640c3513bff69b3da2df6d1da141a3854c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e629b8e2686e58886585bc570ac7777c8a9410ff258f41e2636b24f30c079a3b = $this->env->getExtension("native_profiler");
        $__internal_e629b8e2686e58886585bc570ac7777c8a9410ff258f41e2636b24f30c079a3b->enter($__internal_e629b8e2686e58886585bc570ac7777c8a9410ff258f41e2636b24f30c079a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e629b8e2686e58886585bc570ac7777c8a9410ff258f41e2636b24f30c079a3b->leave($__internal_e629b8e2686e58886585bc570ac7777c8a9410ff258f41e2636b24f30c079a3b_prof);

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
