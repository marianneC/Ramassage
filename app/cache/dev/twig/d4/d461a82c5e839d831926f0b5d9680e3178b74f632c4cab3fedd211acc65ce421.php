<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e86a2bca1a5056eaf1842a11d1362a470ccd093061b5de618053c7ae7a145e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_352ac0299b049ca8e2003785ed176507f0dd647818a6cba37dd13134263b37b4 = $this->env->getExtension("native_profiler");
        $__internal_352ac0299b049ca8e2003785ed176507f0dd647818a6cba37dd13134263b37b4->enter($__internal_352ac0299b049ca8e2003785ed176507f0dd647818a6cba37dd13134263b37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352ac0299b049ca8e2003785ed176507f0dd647818a6cba37dd13134263b37b4->leave($__internal_352ac0299b049ca8e2003785ed176507f0dd647818a6cba37dd13134263b37b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b669228c38795d61c4af4b10b4811019704219b30086622264cb41d0b41feaf7 = $this->env->getExtension("native_profiler");
        $__internal_b669228c38795d61c4af4b10b4811019704219b30086622264cb41d0b41feaf7->enter($__internal_b669228c38795d61c4af4b10b4811019704219b30086622264cb41d0b41feaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b669228c38795d61c4af4b10b4811019704219b30086622264cb41d0b41feaf7->leave($__internal_b669228c38795d61c4af4b10b4811019704219b30086622264cb41d0b41feaf7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
