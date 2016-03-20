<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3ba0675f4e26df5c4c841d91a2bf1ad3f02946f992c0f276eb9d5336cedda3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_87d0d5cbc13d79c7ee9448fd3b570a77997da2e940041baf5e295cb1a91b406a = $this->env->getExtension("native_profiler");
        $__internal_87d0d5cbc13d79c7ee9448fd3b570a77997da2e940041baf5e295cb1a91b406a->enter($__internal_87d0d5cbc13d79c7ee9448fd3b570a77997da2e940041baf5e295cb1a91b406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d0d5cbc13d79c7ee9448fd3b570a77997da2e940041baf5e295cb1a91b406a->leave($__internal_87d0d5cbc13d79c7ee9448fd3b570a77997da2e940041baf5e295cb1a91b406a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a505a1fea4f6bae13253f9ad2488504e90b8c8d9c07979544a9cc09f21559b0d = $this->env->getExtension("native_profiler");
        $__internal_a505a1fea4f6bae13253f9ad2488504e90b8c8d9c07979544a9cc09f21559b0d->enter($__internal_a505a1fea4f6bae13253f9ad2488504e90b8c8d9c07979544a9cc09f21559b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a505a1fea4f6bae13253f9ad2488504e90b8c8d9c07979544a9cc09f21559b0d->leave($__internal_a505a1fea4f6bae13253f9ad2488504e90b8c8d9c07979544a9cc09f21559b0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
