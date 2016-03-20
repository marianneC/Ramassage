<?php

/* CCIRamScoBundle:Yasmina/Group:edit.html.twig */
class __TwigTemplate_240fe266d14e482d5aa55938bec70ba1b163e2b81b84cc97838347f31485071e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Group:edit.html.twig", 1);
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
        $__internal_6421bc73eca84549d949987498de46f550dcf3eaa65c9fe84a3dfe17fbb9dac8 = $this->env->getExtension("native_profiler");
        $__internal_6421bc73eca84549d949987498de46f550dcf3eaa65c9fe84a3dfe17fbb9dac8->enter($__internal_6421bc73eca84549d949987498de46f550dcf3eaa65c9fe84a3dfe17fbb9dac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6421bc73eca84549d949987498de46f550dcf3eaa65c9fe84a3dfe17fbb9dac8->leave($__internal_6421bc73eca84549d949987498de46f550dcf3eaa65c9fe84a3dfe17fbb9dac8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_556671b5265309e48d8976e4b061a83e0b7bb14e77a49d9cc5673186b4cbfaeb = $this->env->getExtension("native_profiler");
        $__internal_556671b5265309e48d8976e4b061a83e0b7bb14e77a49d9cc5673186b4cbfaeb->enter($__internal_556671b5265309e48d8976e4b061a83e0b7bb14e77a49d9cc5673186b4cbfaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "CCIRamScoBundle:Yasmina/Group:edit.html.twig", 4)->display($context);
        
        $__internal_556671b5265309e48d8976e4b061a83e0b7bb14e77a49d9cc5673186b4cbfaeb->leave($__internal_556671b5265309e48d8976e4b061a83e0b7bb14e77a49d9cc5673186b4cbfaeb_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
