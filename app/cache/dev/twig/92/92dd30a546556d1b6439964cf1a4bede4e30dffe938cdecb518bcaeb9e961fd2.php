<?php

/* @CCIRamSco/Yasmina/Resetting/email.txt.twig */
class __TwigTemplate_285b9a72d9746c0297e73d17988ee68da5aa4858d3aef9c723287c8fe7345baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22db4555c92d3d494d80fa1454b2f4cc346fd2ecac530fb8fd15cfad1fb5df2e = $this->env->getExtension("native_profiler");
        $__internal_22db4555c92d3d494d80fa1454b2f4cc346fd2ecac530fb8fd15cfad1fb5df2e->enter($__internal_22db4555c92d3d494d80fa1454b2f4cc346fd2ecac530fb8fd15cfad1fb5df2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22db4555c92d3d494d80fa1454b2f4cc346fd2ecac530fb8fd15cfad1fb5df2e->leave($__internal_22db4555c92d3d494d80fa1454b2f4cc346fd2ecac530fb8fd15cfad1fb5df2e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_499a94e254d5f24b491dfcc27c2e065eef8bbee3cf6248cbe7b47bcbfc0c4096 = $this->env->getExtension("native_profiler");
        $__internal_499a94e254d5f24b491dfcc27c2e065eef8bbee3cf6248cbe7b47bcbfc0c4096->enter($__internal_499a94e254d5f24b491dfcc27c2e065eef8bbee3cf6248cbe7b47bcbfc0c4096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_499a94e254d5f24b491dfcc27c2e065eef8bbee3cf6248cbe7b47bcbfc0c4096->leave($__internal_499a94e254d5f24b491dfcc27c2e065eef8bbee3cf6248cbe7b47bcbfc0c4096_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_507e218491843e01542e21470dd2d3757d715d307ad1638d3a3f95830672b677 = $this->env->getExtension("native_profiler");
        $__internal_507e218491843e01542e21470dd2d3757d715d307ad1638d3a3f95830672b677->enter($__internal_507e218491843e01542e21470dd2d3757d715d307ad1638d3a3f95830672b677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_507e218491843e01542e21470dd2d3757d715d307ad1638d3a3f95830672b677->leave($__internal_507e218491843e01542e21470dd2d3757d715d307ad1638d3a3f95830672b677_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6118fadf67a28e8defe3a4f257c96b6e22f2ce26038871073a0a35d8fca530c3 = $this->env->getExtension("native_profiler");
        $__internal_6118fadf67a28e8defe3a4f257c96b6e22f2ce26038871073a0a35d8fca530c3->enter($__internal_6118fadf67a28e8defe3a4f257c96b6e22f2ce26038871073a0a35d8fca530c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6118fadf67a28e8defe3a4f257c96b6e22f2ce26038871073a0a35d8fca530c3->leave($__internal_6118fadf67a28e8defe3a4f257c96b6e22f2ce26038871073a0a35d8fca530c3_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
