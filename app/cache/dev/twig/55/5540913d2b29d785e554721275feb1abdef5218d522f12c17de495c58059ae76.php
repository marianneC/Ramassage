<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_747e969167bd9e200d0af87f195aa5909bdeae9cca847e0d31750c1fa5f2ce50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e60dd99198ec7de8f472ab6ff4ad5f4cfbc1b29b7f1544ae1fa624393973bfd4 = $this->env->getExtension("native_profiler");
        $__internal_e60dd99198ec7de8f472ab6ff4ad5f4cfbc1b29b7f1544ae1fa624393973bfd4->enter($__internal_e60dd99198ec7de8f472ab6ff4ad5f4cfbc1b29b7f1544ae1fa624393973bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60dd99198ec7de8f472ab6ff4ad5f4cfbc1b29b7f1544ae1fa624393973bfd4->leave($__internal_e60dd99198ec7de8f472ab6ff4ad5f4cfbc1b29b7f1544ae1fa624393973bfd4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9a80028afd2436546362e4986a265d4d643fbfe6ddb8070125d5f717b22db3a = $this->env->getExtension("native_profiler");
        $__internal_b9a80028afd2436546362e4986a265d4d643fbfe6ddb8070125d5f717b22db3a->enter($__internal_b9a80028afd2436546362e4986a265d4d643fbfe6ddb8070125d5f717b22db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b9a80028afd2436546362e4986a265d4d643fbfe6ddb8070125d5f717b22db3a->leave($__internal_b9a80028afd2436546362e4986a265d4d643fbfe6ddb8070125d5f717b22db3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
