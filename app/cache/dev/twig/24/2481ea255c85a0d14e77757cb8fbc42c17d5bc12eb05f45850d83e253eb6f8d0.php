<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6d0512bdb29107a0d56cf448774bc730dec66b846142926883a0d07ee6217026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_625d4a8cefef249ee667a0fde7881c6216acbdf71f85ddd939468316830edde0 = $this->env->getExtension("native_profiler");
        $__internal_625d4a8cefef249ee667a0fde7881c6216acbdf71f85ddd939468316830edde0->enter($__internal_625d4a8cefef249ee667a0fde7881c6216acbdf71f85ddd939468316830edde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_625d4a8cefef249ee667a0fde7881c6216acbdf71f85ddd939468316830edde0->leave($__internal_625d4a8cefef249ee667a0fde7881c6216acbdf71f85ddd939468316830edde0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0f4f6c3363ed50ef453ee1abe839a108ddb2462b5f35d8d5fd96f83838ab6d6 = $this->env->getExtension("native_profiler");
        $__internal_d0f4f6c3363ed50ef453ee1abe839a108ddb2462b5f35d8d5fd96f83838ab6d6->enter($__internal_d0f4f6c3363ed50ef453ee1abe839a108ddb2462b5f35d8d5fd96f83838ab6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d0f4f6c3363ed50ef453ee1abe839a108ddb2462b5f35d8d5fd96f83838ab6d6->leave($__internal_d0f4f6c3363ed50ef453ee1abe839a108ddb2462b5f35d8d5fd96f83838ab6d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
