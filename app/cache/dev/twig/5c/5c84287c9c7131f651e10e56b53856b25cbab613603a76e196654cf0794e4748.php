<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aa8ed9f7bd4c5e1d879b0478421aa538e7490bb5809223387a096590303c2b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_26ac031b55e5242a2bdff7ad11231a93319ccc50858d643e9887e666dc54d972 = $this->env->getExtension("native_profiler");
        $__internal_26ac031b55e5242a2bdff7ad11231a93319ccc50858d643e9887e666dc54d972->enter($__internal_26ac031b55e5242a2bdff7ad11231a93319ccc50858d643e9887e666dc54d972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ac031b55e5242a2bdff7ad11231a93319ccc50858d643e9887e666dc54d972->leave($__internal_26ac031b55e5242a2bdff7ad11231a93319ccc50858d643e9887e666dc54d972_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7081614ec3f5f87ba91cb18144ba97992c820f045ad3c3bdbb90cb439080e26 = $this->env->getExtension("native_profiler");
        $__internal_e7081614ec3f5f87ba91cb18144ba97992c820f045ad3c3bdbb90cb439080e26->enter($__internal_e7081614ec3f5f87ba91cb18144ba97992c820f045ad3c3bdbb90cb439080e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tIdentification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e7081614ec3f5f87ba91cb18144ba97992c820f045ad3c3bdbb90cb439080e26->leave($__internal_e7081614ec3f5f87ba91cb18144ba97992c820f045ad3c3bdbb90cb439080e26_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e15f7abd89fd38ad505d43afe261d04e5bb993620cd7e87bfe274f3ee07273d9 = $this->env->getExtension("native_profiler");
        $__internal_e15f7abd89fd38ad505d43afe261d04e5bb993620cd7e87bfe274f3ee07273d9->enter($__internal_e15f7abd89fd38ad505d43afe261d04e5bb993620cd7e87bfe274f3ee07273d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e15f7abd89fd38ad505d43afe261d04e5bb993620cd7e87bfe274f3ee07273d9->leave($__internal_e15f7abd89fd38ad505d43afe261d04e5bb993620cd7e87bfe274f3ee07273d9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf0970e8598dac1fe90bb0b98ab99063e3c57756e17b1328f6a92196026b6cf6 = $this->env->getExtension("native_profiler");
        $__internal_bf0970e8598dac1fe90bb0b98ab99063e3c57756e17b1328f6a92196026b6cf6->enter($__internal_bf0970e8598dac1fe90bb0b98ab99063e3c57756e17b1328f6a92196026b6cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_bf0970e8598dac1fe90bb0b98ab99063e3c57756e17b1328f6a92196026b6cf6->leave($__internal_bf0970e8598dac1fe90bb0b98ab99063e3c57756e17b1328f6a92196026b6cf6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
