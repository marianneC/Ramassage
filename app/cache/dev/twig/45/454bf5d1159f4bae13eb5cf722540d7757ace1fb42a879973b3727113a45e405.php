<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7331baac42d7e28a23e02e6ff7c497813764514f66c96ba83cdf40e63efaf364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_73214091505a4e801b1f4992f2837acbabb9bf1b13679d2ca4699650cafe2668 = $this->env->getExtension("native_profiler");
        $__internal_73214091505a4e801b1f4992f2837acbabb9bf1b13679d2ca4699650cafe2668->enter($__internal_73214091505a4e801b1f4992f2837acbabb9bf1b13679d2ca4699650cafe2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73214091505a4e801b1f4992f2837acbabb9bf1b13679d2ca4699650cafe2668->leave($__internal_73214091505a4e801b1f4992f2837acbabb9bf1b13679d2ca4699650cafe2668_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e17716d73c7788aa9f85d8021e6544fbdfdbbe97110c33c0f47b6b13de3db050 = $this->env->getExtension("native_profiler");
        $__internal_e17716d73c7788aa9f85d8021e6544fbdfdbbe97110c33c0f47b6b13de3db050->enter($__internal_e17716d73c7788aa9f85d8021e6544fbdfdbbe97110c33c0f47b6b13de3db050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e17716d73c7788aa9f85d8021e6544fbdfdbbe97110c33c0f47b6b13de3db050->leave($__internal_e17716d73c7788aa9f85d8021e6544fbdfdbbe97110c33c0f47b6b13de3db050_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
