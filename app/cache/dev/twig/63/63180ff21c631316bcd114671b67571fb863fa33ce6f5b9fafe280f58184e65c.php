<?php

/* base.html.twig */
class __TwigTemplate_75800fd6a571a63a494279d55153b4bffff1992da019119ab83b5d957bec8f84 extends Twig_Template
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
        $__internal_c07f05d4d0a1deec1af354c4d7113b56b82b9b46a332d9c574979001b973dd3c = $this->env->getExtension("native_profiler");
        $__internal_c07f05d4d0a1deec1af354c4d7113b56b82b9b46a332d9c574979001b973dd3c->enter($__internal_c07f05d4d0a1deec1af354c4d7113b56b82b9b46a332d9c574979001b973dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c07f05d4d0a1deec1af354c4d7113b56b82b9b46a332d9c574979001b973dd3c->leave($__internal_c07f05d4d0a1deec1af354c4d7113b56b82b9b46a332d9c574979001b973dd3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd72bc1a0998e5403b2347a7c23d11238ff8b773427e97e24ef7a12730324ac7 = $this->env->getExtension("native_profiler");
        $__internal_bd72bc1a0998e5403b2347a7c23d11238ff8b773427e97e24ef7a12730324ac7->enter($__internal_bd72bc1a0998e5403b2347a7c23d11238ff8b773427e97e24ef7a12730324ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd72bc1a0998e5403b2347a7c23d11238ff8b773427e97e24ef7a12730324ac7->leave($__internal_bd72bc1a0998e5403b2347a7c23d11238ff8b773427e97e24ef7a12730324ac7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d078f7310209fe201acd46b09a96eb917f00c3537518a79ece88b2664d90bef3 = $this->env->getExtension("native_profiler");
        $__internal_d078f7310209fe201acd46b09a96eb917f00c3537518a79ece88b2664d90bef3->enter($__internal_d078f7310209fe201acd46b09a96eb917f00c3537518a79ece88b2664d90bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d078f7310209fe201acd46b09a96eb917f00c3537518a79ece88b2664d90bef3->leave($__internal_d078f7310209fe201acd46b09a96eb917f00c3537518a79ece88b2664d90bef3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b753484ec589f9a12ae286d8e2a08e86377bae12c1c20d8609ebf93f70c96b8 = $this->env->getExtension("native_profiler");
        $__internal_2b753484ec589f9a12ae286d8e2a08e86377bae12c1c20d8609ebf93f70c96b8->enter($__internal_2b753484ec589f9a12ae286d8e2a08e86377bae12c1c20d8609ebf93f70c96b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b753484ec589f9a12ae286d8e2a08e86377bae12c1c20d8609ebf93f70c96b8->leave($__internal_2b753484ec589f9a12ae286d8e2a08e86377bae12c1c20d8609ebf93f70c96b8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33a2f90ae62858073e1107cb7110f856ca48d54fea5ec4f2fccea4ff5dfdf74b = $this->env->getExtension("native_profiler");
        $__internal_33a2f90ae62858073e1107cb7110f856ca48d54fea5ec4f2fccea4ff5dfdf74b->enter($__internal_33a2f90ae62858073e1107cb7110f856ca48d54fea5ec4f2fccea4ff5dfdf74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33a2f90ae62858073e1107cb7110f856ca48d54fea5ec4f2fccea4ff5dfdf74b->leave($__internal_33a2f90ae62858073e1107cb7110f856ca48d54fea5ec4f2fccea4ff5dfdf74b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
