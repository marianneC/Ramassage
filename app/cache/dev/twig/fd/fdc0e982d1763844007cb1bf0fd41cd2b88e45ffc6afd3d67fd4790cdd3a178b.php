<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a9bef1e122644b17e2f47dfecffa7b66c8a9b89a01e23963bfc64a23dd078749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0272edea1f375109bee797a8f66500c354dfd09a2ef7c590baa850f633f5f743 = $this->env->getExtension("native_profiler");
        $__internal_0272edea1f375109bee797a8f66500c354dfd09a2ef7c590baa850f633f5f743->enter($__internal_0272edea1f375109bee797a8f66500c354dfd09a2ef7c590baa850f633f5f743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0272edea1f375109bee797a8f66500c354dfd09a2ef7c590baa850f633f5f743->leave($__internal_0272edea1f375109bee797a8f66500c354dfd09a2ef7c590baa850f633f5f743_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66da4f67f09dc92ca38af18b3c541c21bc1ae9572ebb14170f6e7abd433392b6 = $this->env->getExtension("native_profiler");
        $__internal_66da4f67f09dc92ca38af18b3c541c21bc1ae9572ebb14170f6e7abd433392b6->enter($__internal_66da4f67f09dc92ca38af18b3c541c21bc1ae9572ebb14170f6e7abd433392b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_66da4f67f09dc92ca38af18b3c541c21bc1ae9572ebb14170f6e7abd433392b6->leave($__internal_66da4f67f09dc92ca38af18b3c541c21bc1ae9572ebb14170f6e7abd433392b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
