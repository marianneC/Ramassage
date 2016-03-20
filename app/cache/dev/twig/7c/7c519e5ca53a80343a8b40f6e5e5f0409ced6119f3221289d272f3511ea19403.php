<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_554694c001b3b7b3f087efec4a46aa4e18938f5fd05d4490250f8695b978015d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_a9bbdc2844fb7c4d4cdaddf6cb6161296a7668396ca2e647f0814e1da3fadae3 = $this->env->getExtension("native_profiler");
        $__internal_a9bbdc2844fb7c4d4cdaddf6cb6161296a7668396ca2e647f0814e1da3fadae3->enter($__internal_a9bbdc2844fb7c4d4cdaddf6cb6161296a7668396ca2e647f0814e1da3fadae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9bbdc2844fb7c4d4cdaddf6cb6161296a7668396ca2e647f0814e1da3fadae3->leave($__internal_a9bbdc2844fb7c4d4cdaddf6cb6161296a7668396ca2e647f0814e1da3fadae3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ff9fedbfe92a1c923a122f739f238f24c015e1a083c51400e4151253d31f062 = $this->env->getExtension("native_profiler");
        $__internal_8ff9fedbfe92a1c923a122f739f238f24c015e1a083c51400e4151253d31f062->enter($__internal_8ff9fedbfe92a1c923a122f739f238f24c015e1a083c51400e4151253d31f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8ff9fedbfe92a1c923a122f739f238f24c015e1a083c51400e4151253d31f062->leave($__internal_8ff9fedbfe92a1c923a122f739f238f24c015e1a083c51400e4151253d31f062_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
