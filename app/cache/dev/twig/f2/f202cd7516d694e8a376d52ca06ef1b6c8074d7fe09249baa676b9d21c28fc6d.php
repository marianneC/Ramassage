<?php

/* CCIRamScoBundle::layout.html.twig */
class __TwigTemplate_eb8ed3d21270fe1597a99da12b316964f86dab80c3c6859221bbeb964ff4f081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle:Yasmina:index.html.twig", "CCIRamScoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle:Yasmina:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4c5835393c426e86b951810aaf962e41cce1af2b413c8f10ca63c626af4f59f = $this->env->getExtension("native_profiler");
        $__internal_e4c5835393c426e86b951810aaf962e41cce1af2b413c8f10ca63c626af4f59f->enter($__internal_e4c5835393c426e86b951810aaf962e41cce1af2b413c8f10ca63c626af4f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c5835393c426e86b951810aaf962e41cce1af2b413c8f10ca63c626af4f59f->leave($__internal_e4c5835393c426e86b951810aaf962e41cce1af2b413c8f10ca63c626af4f59f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49bf02e051f109d890a919d652e765623942a857071a6a253d3159fb2dec2817 = $this->env->getExtension("native_profiler");
        $__internal_49bf02e051f109d890a919d652e765623942a857071a6a253d3159fb2dec2817->enter($__internal_49bf02e051f109d890a919d652e765623942a857071a6a253d3159fb2dec2817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le tapis roulant";
        
        $__internal_49bf02e051f109d890a919d652e765623942a857071a6a253d3159fb2dec2817->leave($__internal_49bf02e051f109d890a919d652e765623942a857071a6a253d3159fb2dec2817_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e97558ec67bc21d5df606260e72efc76239c4d7a2df9bfa3ed7e1bce307ec36 = $this->env->getExtension("native_profiler");
        $__internal_1e97558ec67bc21d5df606260e72efc76239c4d7a2df9bfa3ed7e1bce307ec36->enter($__internal_1e97558ec67bc21d5df606260e72efc76239c4d7a2df9bfa3ed7e1bce307ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_1e97558ec67bc21d5df606260e72efc76239c4d7a2df9bfa3ed7e1bce307ec36->leave($__internal_1e97558ec67bc21d5df606260e72efc76239c4d7a2df9bfa3ed7e1bce307ec36_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_2056df4c45a8a6f470507b161335436be4d4ad7187526314c69e9c4ae1436824 = $this->env->getExtension("native_profiler");
        $__internal_2056df4c45a8a6f470507b161335436be4d4ad7187526314c69e9c4ae1436824->enter($__internal_2056df4c45a8a6f470507b161335436be4d4ad7187526314c69e9c4ae1436824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
  ";
        
        $__internal_2056df4c45a8a6f470507b161335436be4d4ad7187526314c69e9c4ae1436824->leave($__internal_2056df4c45a8a6f470507b161335436be4d4ad7187526314c69e9c4ae1436824_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  54 => 9,  48 => 8,  36 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle:Yasmina:index.html.twig" %}*/
/* */
/*   {% block title %}Le tapis roulant{% endblock %}*/
/*    */
/*     */
/*   */
/*   */
/*   {% block fos_user_content %}*/
/* {% block content %}*/
/* */
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
