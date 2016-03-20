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
        $__internal_0fed7f08b295a3b612c12e56511bb9cc0d6519837900b606e204d1c80c681d33 = $this->env->getExtension("native_profiler");
        $__internal_0fed7f08b295a3b612c12e56511bb9cc0d6519837900b606e204d1c80c681d33->enter($__internal_0fed7f08b295a3b612c12e56511bb9cc0d6519837900b606e204d1c80c681d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0fed7f08b295a3b612c12e56511bb9cc0d6519837900b606e204d1c80c681d33->leave($__internal_0fed7f08b295a3b612c12e56511bb9cc0d6519837900b606e204d1c80c681d33_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2386017488d4427f9f154dfadd008ca67f2c407a8a8e22f9494ce52c7be473a9 = $this->env->getExtension("native_profiler");
        $__internal_2386017488d4427f9f154dfadd008ca67f2c407a8a8e22f9494ce52c7be473a9->enter($__internal_2386017488d4427f9f154dfadd008ca67f2c407a8a8e22f9494ce52c7be473a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2386017488d4427f9f154dfadd008ca67f2c407a8a8e22f9494ce52c7be473a9->leave($__internal_2386017488d4427f9f154dfadd008ca67f2c407a8a8e22f9494ce52c7be473a9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_91af540562b0c6947f4db270bcfdaed857d626e1e71a51d1dac53c95e533096c = $this->env->getExtension("native_profiler");
        $__internal_91af540562b0c6947f4db270bcfdaed857d626e1e71a51d1dac53c95e533096c->enter($__internal_91af540562b0c6947f4db270bcfdaed857d626e1e71a51d1dac53c95e533096c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_91af540562b0c6947f4db270bcfdaed857d626e1e71a51d1dac53c95e533096c->leave($__internal_91af540562b0c6947f4db270bcfdaed857d626e1e71a51d1dac53c95e533096c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_17117bbb149548e9464b2b700479b10cf762c834aba06f9e0be79f41b9d40133 = $this->env->getExtension("native_profiler");
        $__internal_17117bbb149548e9464b2b700479b10cf762c834aba06f9e0be79f41b9d40133->enter($__internal_17117bbb149548e9464b2b700479b10cf762c834aba06f9e0be79f41b9d40133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_17117bbb149548e9464b2b700479b10cf762c834aba06f9e0be79f41b9d40133->leave($__internal_17117bbb149548e9464b2b700479b10cf762c834aba06f9e0be79f41b9d40133_prof);

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
