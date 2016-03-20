<?php

/* CCIRamScoBundle:Yasmina/Profile:show.html.twig */
class __TwigTemplate_255e75a7f483d91c2299eba3b0f7d7d0812d5f1739e168b42f3bfe4a8921a3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9f232d76f4b6d4967f6ec89b9c614df91709c9cc4c2ffe5c2c47bb4dcdae64c = $this->env->getExtension("native_profiler");
        $__internal_d9f232d76f4b6d4967f6ec89b9c614df91709c9cc4c2ffe5c2c47bb4dcdae64c->enter($__internal_d9f232d76f4b6d4967f6ec89b9c614df91709c9cc4c2ffe5c2c47bb4dcdae64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f232d76f4b6d4967f6ec89b9c614df91709c9cc4c2ffe5c2c47bb4dcdae64c->leave($__internal_d9f232d76f4b6d4967f6ec89b9c614df91709c9cc4c2ffe5c2c47bb4dcdae64c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b5c29387b96a3dc8ca0e955ef057ba492f62039ddab4ce0ca1b772b317922db = $this->env->getExtension("native_profiler");
        $__internal_8b5c29387b96a3dc8ca0e955ef057ba492f62039ddab4ce0ca1b772b317922db->enter($__internal_8b5c29387b96a3dc8ca0e955ef057ba492f62039ddab4ce0ca1b772b317922db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "CCIRamScoBundle:Yasmina/Profile:show.html.twig", 4)->display($context);
        
        $__internal_8b5c29387b96a3dc8ca0e955ef057ba492f62039ddab4ce0ca1b772b317922db->leave($__internal_8b5c29387b96a3dc8ca0e955ef057ba492f62039ddab4ce0ca1b772b317922db_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
