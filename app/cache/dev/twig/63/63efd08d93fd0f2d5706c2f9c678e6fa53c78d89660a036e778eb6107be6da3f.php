<?php

/* CCIRamScoBundle:Yasmina/Registration:register.html.twig */
class __TwigTemplate_1070ccaef4a9f5794259dd6575a5d066f9da9c0182390ef0f32037fff953fb42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55b775b1a568c578c4e91dbe4c65146ab5846ca4e06fed5e9ad4558d986782d9 = $this->env->getExtension("native_profiler");
        $__internal_55b775b1a568c578c4e91dbe4c65146ab5846ca4e06fed5e9ad4558d986782d9->enter($__internal_55b775b1a568c578c4e91dbe4c65146ab5846ca4e06fed5e9ad4558d986782d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b775b1a568c578c4e91dbe4c65146ab5846ca4e06fed5e9ad4558d986782d9->leave($__internal_55b775b1a568c578c4e91dbe4c65146ab5846ca4e06fed5e9ad4558d986782d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c485b0053d5cd3096558d5030b0b30afaa995c513ab482da1b388d8d7d7873 = $this->env->getExtension("native_profiler");
        $__internal_36c485b0053d5cd3096558d5030b0b30afaa995c513ab482da1b388d8d7d7873->enter($__internal_36c485b0053d5cd3096558d5030b0b30afaa995c513ab482da1b388d8d7d7873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tDevenir adhérent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_36c485b0053d5cd3096558d5030b0b30afaa995c513ab482da1b388d8d7d7873->leave($__internal_36c485b0053d5cd3096558d5030b0b30afaa995c513ab482da1b388d8d7d7873_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdf7b882d5e1c0f92a88364993314f193cefbf0686cd0247bcea45eac5ed09d3 = $this->env->getExtension("native_profiler");
        $__internal_cdf7b882d5e1c0f92a88364993314f193cefbf0686cd0247bcea45eac5ed09d3->enter($__internal_cdf7b882d5e1c0f92a88364993314f193cefbf0686cd0247bcea45eac5ed09d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "CCIRamScoBundle:Yasmina/Registration:register.html.twig", 8)->display($context);
        // line 9
        echo "


";
        
        $__internal_cdf7b882d5e1c0f92a88364993314f193cefbf0686cd0247bcea45eac5ed09d3->leave($__internal_cdf7b882d5e1c0f92a88364993314f193cefbf0686cd0247bcea45eac5ed09d3_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Devenir adhérent - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
