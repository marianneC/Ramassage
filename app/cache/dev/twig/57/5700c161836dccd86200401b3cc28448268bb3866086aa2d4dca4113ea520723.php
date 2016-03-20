<?php

/* CCIRamScoBundle:Yasmina/Profile:edit.html.twig */
class __TwigTemplate_804998790b7bf7ef72730e062f2ac14b6100faa7da0fafcdac9b2652893bc320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Profile:edit.html.twig", 1);
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
        $__internal_257a321c7126c8df0577ea8052b037319178be62b413fa8bacbe555868470e2c = $this->env->getExtension("native_profiler");
        $__internal_257a321c7126c8df0577ea8052b037319178be62b413fa8bacbe555868470e2c->enter($__internal_257a321c7126c8df0577ea8052b037319178be62b413fa8bacbe555868470e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257a321c7126c8df0577ea8052b037319178be62b413fa8bacbe555868470e2c->leave($__internal_257a321c7126c8df0577ea8052b037319178be62b413fa8bacbe555868470e2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b080a3420eb5903a26b9af07d3080e96a50c614b5f16dc8e03a9f67fe128a07e = $this->env->getExtension("native_profiler");
        $__internal_b080a3420eb5903a26b9af07d3080e96a50c614b5f16dc8e03a9f67fe128a07e->enter($__internal_b080a3420eb5903a26b9af07d3080e96a50c614b5f16dc8e03a9f67fe128a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "CCIRamScoBundle:Yasmina/Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b080a3420eb5903a26b9af07d3080e96a50c614b5f16dc8e03a9f67fe128a07e->leave($__internal_b080a3420eb5903a26b9af07d3080e96a50c614b5f16dc8e03a9f67fe128a07e_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Profile:edit.html.twig";
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
