<?php

/* @CCIRamSco/Yasmina/Security/login.html.twig */
class __TwigTemplate_dbe91f358d1ff662b48bcd010a5af99e2433b0e5eb3a9d59d276f741df4f35cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "@CCIRamSco/Yasmina/Security/login.html.twig", 1);
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
        $__internal_5bde58591513524e9409f0fc3caf4b0e2f74855c03fdedfdc4fb9fe9a9641cef = $this->env->getExtension("native_profiler");
        $__internal_5bde58591513524e9409f0fc3caf4b0e2f74855c03fdedfdc4fb9fe9a9641cef->enter($__internal_5bde58591513524e9409f0fc3caf4b0e2f74855c03fdedfdc4fb9fe9a9641cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bde58591513524e9409f0fc3caf4b0e2f74855c03fdedfdc4fb9fe9a9641cef->leave($__internal_5bde58591513524e9409f0fc3caf4b0e2f74855c03fdedfdc4fb9fe9a9641cef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f17372ec2afe519178890cab4b0e504c7099ebfca27f1ac2ad96a95c1e1b9513 = $this->env->getExtension("native_profiler");
        $__internal_f17372ec2afe519178890cab4b0e504c7099ebfca27f1ac2ad96a95c1e1b9513->enter($__internal_f17372ec2afe519178890cab4b0e504c7099ebfca27f1ac2ad96a95c1e1b9513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tIdentification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f17372ec2afe519178890cab4b0e504c7099ebfca27f1ac2ad96a95c1e1b9513->leave($__internal_f17372ec2afe519178890cab4b0e504c7099ebfca27f1ac2ad96a95c1e1b9513_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_36b0a8b5f4752efd83ad8bd6324211b8bb94b183cc71de36306e12e0704b0fae = $this->env->getExtension("native_profiler");
        $__internal_36b0a8b5f4752efd83ad8bd6324211b8bb94b183cc71de36306e12e0704b0fae->enter($__internal_36b0a8b5f4752efd83ad8bd6324211b8bb94b183cc71de36306e12e0704b0fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_36b0a8b5f4752efd83ad8bd6324211b8bb94b183cc71de36306e12e0704b0fae->leave($__internal_36b0a8b5f4752efd83ad8bd6324211b8bb94b183cc71de36306e12e0704b0fae_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3958d3691780373857267be6f960d103b166d62a335b98a47096d9f9144e5da = $this->env->getExtension("native_profiler");
        $__internal_e3958d3691780373857267be6f960d103b166d62a335b98a47096d9f9144e5da->enter($__internal_e3958d3691780373857267be6f960d103b166d62a335b98a47096d9f9144e5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_e3958d3691780373857267be6f960d103b166d62a335b98a47096d9f9144e5da->leave($__internal_e3958d3691780373857267be6f960d103b166d62a335b98a47096d9f9144e5da_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Security/login.html.twig";
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
