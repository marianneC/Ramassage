<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_aa1e6cd75df23af352c6212ef883fad8941596825f18902aad9ebf534b764bfa extends Twig_Template
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
        $__internal_d75b445a0e05f4c10a057792e62c37ed7f0aa3169cd29e4b36477bb2a020bfc4 = $this->env->getExtension("native_profiler");
        $__internal_d75b445a0e05f4c10a057792e62c37ed7f0aa3169cd29e4b36477bb2a020bfc4->enter($__internal_d75b445a0e05f4c10a057792e62c37ed7f0aa3169cd29e4b36477bb2a020bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d75b445a0e05f4c10a057792e62c37ed7f0aa3169cd29e4b36477bb2a020bfc4->leave($__internal_d75b445a0e05f4c10a057792e62c37ed7f0aa3169cd29e4b36477bb2a020bfc4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2347e8ea8d8dabf38543a8e9bf06317c39d55a1bdf2354989b304fa28097a98f = $this->env->getExtension("native_profiler");
        $__internal_2347e8ea8d8dabf38543a8e9bf06317c39d55a1bdf2354989b304fa28097a98f->enter($__internal_2347e8ea8d8dabf38543a8e9bf06317c39d55a1bdf2354989b304fa28097a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2347e8ea8d8dabf38543a8e9bf06317c39d55a1bdf2354989b304fa28097a98f->leave($__internal_2347e8ea8d8dabf38543a8e9bf06317c39d55a1bdf2354989b304fa28097a98f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41a7d646f97342adc2ff8b4adb2d9c074b4290ab6f0675d9cf47169dced9f33c = $this->env->getExtension("native_profiler");
        $__internal_41a7d646f97342adc2ff8b4adb2d9c074b4290ab6f0675d9cf47169dced9f33c->enter($__internal_41a7d646f97342adc2ff8b4adb2d9c074b4290ab6f0675d9cf47169dced9f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41a7d646f97342adc2ff8b4adb2d9c074b4290ab6f0675d9cf47169dced9f33c->leave($__internal_41a7d646f97342adc2ff8b4adb2d9c074b4290ab6f0675d9cf47169dced9f33c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_718124099591d8401d0413dc447c168f90c4b8d6d23cae0735bd20fee63c2183 = $this->env->getExtension("native_profiler");
        $__internal_718124099591d8401d0413dc447c168f90c4b8d6d23cae0735bd20fee63c2183->enter($__internal_718124099591d8401d0413dc447c168f90c4b8d6d23cae0735bd20fee63c2183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_718124099591d8401d0413dc447c168f90c4b8d6d23cae0735bd20fee63c2183->leave($__internal_718124099591d8401d0413dc447c168f90c4b8d6d23cae0735bd20fee63c2183_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
