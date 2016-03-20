<?php

/* @CCIRamSco/Yasmina/Group/edit.html.twig */
class __TwigTemplate_72e5e41d7d6397f79fad28324ad720da543bb78e7c2f929b2f78353e4eb804b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Group/edit.html.twig", 1);
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
        $__internal_ad4db8de010edd9f132332c7caaeef21cf73b603b07ad3a747817a3d69081c3e = $this->env->getExtension("native_profiler");
        $__internal_ad4db8de010edd9f132332c7caaeef21cf73b603b07ad3a747817a3d69081c3e->enter($__internal_ad4db8de010edd9f132332c7caaeef21cf73b603b07ad3a747817a3d69081c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4db8de010edd9f132332c7caaeef21cf73b603b07ad3a747817a3d69081c3e->leave($__internal_ad4db8de010edd9f132332c7caaeef21cf73b603b07ad3a747817a3d69081c3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4af971b8ad234501a944bb2a0cf6a32811b1fb73d805b1d223ffca641c665ff = $this->env->getExtension("native_profiler");
        $__internal_b4af971b8ad234501a944bb2a0cf6a32811b1fb73d805b1d223ffca641c665ff->enter($__internal_b4af971b8ad234501a944bb2a0cf6a32811b1fb73d805b1d223ffca641c665ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@CCIRamSco/Yasmina/Group/edit.html.twig", 4)->display($context);
        
        $__internal_b4af971b8ad234501a944bb2a0cf6a32811b1fb73d805b1d223ffca641c665ff->leave($__internal_b4af971b8ad234501a944bb2a0cf6a32811b1fb73d805b1d223ffca641c665ff_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Group/edit.html.twig";
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
