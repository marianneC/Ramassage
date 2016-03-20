<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5d8e3f8b5613acd48acf199bcebd1fab086edd17154e8b1db5839d58d776f8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_1716a939d92b90028b3dde305add2fe51e358c89a256bddf77f2066c402e9bfc = $this->env->getExtension("native_profiler");
        $__internal_1716a939d92b90028b3dde305add2fe51e358c89a256bddf77f2066c402e9bfc->enter($__internal_1716a939d92b90028b3dde305add2fe51e358c89a256bddf77f2066c402e9bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1716a939d92b90028b3dde305add2fe51e358c89a256bddf77f2066c402e9bfc->leave($__internal_1716a939d92b90028b3dde305add2fe51e358c89a256bddf77f2066c402e9bfc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7915e082b9c605e1faa23f964901403e0312b6bf117320261f955f68c13e4da3 = $this->env->getExtension("native_profiler");
        $__internal_7915e082b9c605e1faa23f964901403e0312b6bf117320261f955f68c13e4da3->enter($__internal_7915e082b9c605e1faa23f964901403e0312b6bf117320261f955f68c13e4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7915e082b9c605e1faa23f964901403e0312b6bf117320261f955f68c13e4da3->leave($__internal_7915e082b9c605e1faa23f964901403e0312b6bf117320261f955f68c13e4da3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
