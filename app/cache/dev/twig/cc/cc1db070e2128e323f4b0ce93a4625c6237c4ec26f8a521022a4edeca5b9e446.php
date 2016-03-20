<?php

/* @CCIRamSco/Security/login.html.twig */
class __TwigTemplate_ec6c92d0aaa43cb56f081918b39444a2f4f13308e30d57cc6a0833b25c8a963b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "@CCIRamSco/Security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c94d1369df2c0246ddde786129db03f37d6f664131749e35b36fc556439c71 = $this->env->getExtension("native_profiler");
        $__internal_92c94d1369df2c0246ddde786129db03f37d6f664131749e35b36fc556439c71->enter($__internal_92c94d1369df2c0246ddde786129db03f37d6f664131749e35b36fc556439c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c94d1369df2c0246ddde786129db03f37d6f664131749e35b36fc556439c71->leave($__internal_92c94d1369df2c0246ddde786129db03f37d6f664131749e35b36fc556439c71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30c0e56f2be1eb2888dc86fdda13df208ccd0c219150399c472ef9313b6b6159 = $this->env->getExtension("native_profiler");
        $__internal_30c0e56f2be1eb2888dc86fdda13df208ccd0c219150399c472ef9313b6b6159->enter($__internal_30c0e56f2be1eb2888dc86fdda13df208ccd0c219150399c472ef9313b6b6159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tIdentification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30c0e56f2be1eb2888dc86fdda13df208ccd0c219150399c472ef9313b6b6159->leave($__internal_30c0e56f2be1eb2888dc86fdda13df208ccd0c219150399c472ef9313b6b6159_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_525cc0169b7e6005986a08d6dfd288087f370a959bbfdecacc4ddc7f4311bb7c = $this->env->getExtension("native_profiler");
        $__internal_525cc0169b7e6005986a08d6dfd288087f370a959bbfdecacc4ddc7f4311bb7c->enter($__internal_525cc0169b7e6005986a08d6dfd288087f370a959bbfdecacc4ddc7f4311bb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_525cc0169b7e6005986a08d6dfd288087f370a959bbfdecacc4ddc7f4311bb7c->leave($__internal_525cc0169b7e6005986a08d6dfd288087f370a959bbfdecacc4ddc7f4311bb7c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c286f4994a73154ab73318d11956a0d90dc40a1dbbae6bf19c692c5d7f38db07 = $this->env->getExtension("native_profiler");
        $__internal_c286f4994a73154ab73318d11956a0d90dc40a1dbbae6bf19c692c5d7f38db07->enter($__internal_c286f4994a73154ab73318d11956a0d90dc40a1dbbae6bf19c692c5d7f38db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_c286f4994a73154ab73318d11956a0d90dc40a1dbbae6bf19c692c5d7f38db07->leave($__internal_c286f4994a73154ab73318d11956a0d90dc40a1dbbae6bf19c692c5d7f38db07_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Identification - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}{% endblock %}*/
/* {% endblock %}*/
/* */
