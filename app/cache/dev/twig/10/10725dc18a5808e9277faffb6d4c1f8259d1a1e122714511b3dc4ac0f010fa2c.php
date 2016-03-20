<?php

/* CCIRamScoBundle:Yasmina/Security:login.html.twig */
class __TwigTemplate_8d3376e02719ddaa2559f92b5d5109086588cdd9e5c2edb5c529a317479ae732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e844a8d0d4bf6561aeb06b52a3c5811a4340c18d6e995da98a5b05e974f9db43 = $this->env->getExtension("native_profiler");
        $__internal_e844a8d0d4bf6561aeb06b52a3c5811a4340c18d6e995da98a5b05e974f9db43->enter($__internal_e844a8d0d4bf6561aeb06b52a3c5811a4340c18d6e995da98a5b05e974f9db43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e844a8d0d4bf6561aeb06b52a3c5811a4340c18d6e995da98a5b05e974f9db43->leave($__internal_e844a8d0d4bf6561aeb06b52a3c5811a4340c18d6e995da98a5b05e974f9db43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_636a2e03d48d139c1749f58d7bce55fc163a7c0abc1b4e87e3f2635a24bafcfd = $this->env->getExtension("native_profiler");
        $__internal_636a2e03d48d139c1749f58d7bce55fc163a7c0abc1b4e87e3f2635a24bafcfd->enter($__internal_636a2e03d48d139c1749f58d7bce55fc163a7c0abc1b4e87e3f2635a24bafcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tIdentification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_636a2e03d48d139c1749f58d7bce55fc163a7c0abc1b4e87e3f2635a24bafcfd->leave($__internal_636a2e03d48d139c1749f58d7bce55fc163a7c0abc1b4e87e3f2635a24bafcfd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2db1aeb4ef9cd6158e0ef5e789345bd318b9c51c97e632213f40bd1fb5fc6b2 = $this->env->getExtension("native_profiler");
        $__internal_f2db1aeb4ef9cd6158e0ef5e789345bd318b9c51c97e632213f40bd1fb5fc6b2->enter($__internal_f2db1aeb4ef9cd6158e0ef5e789345bd318b9c51c97e632213f40bd1fb5fc6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f2db1aeb4ef9cd6158e0ef5e789345bd318b9c51c97e632213f40bd1fb5fc6b2->leave($__internal_f2db1aeb4ef9cd6158e0ef5e789345bd318b9c51c97e632213f40bd1fb5fc6b2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5763a8b606b1a336cae035174b9fc8e330437ae749a2fa109a856a889302a17e = $this->env->getExtension("native_profiler");
        $__internal_5763a8b606b1a336cae035174b9fc8e330437ae749a2fa109a856a889302a17e->enter($__internal_5763a8b606b1a336cae035174b9fc8e330437ae749a2fa109a856a889302a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_5763a8b606b1a336cae035174b9fc8e330437ae749a2fa109a856a889302a17e->leave($__internal_5763a8b606b1a336cae035174b9fc8e330437ae749a2fa109a856a889302a17e_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Identification - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}{% endblock %}*/
/* {% endblock %}*/
/* */
