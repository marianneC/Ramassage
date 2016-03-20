<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8f479571cc286834a68f6b924ec4b5da6c340e82cc9865e88010f9cbd8eea094 extends Twig_Template
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
        $__internal_d73f824f248c2471770754600c61725f8d81745e2b3aeb232070816ba017f638 = $this->env->getExtension("native_profiler");
        $__internal_d73f824f248c2471770754600c61725f8d81745e2b3aeb232070816ba017f638->enter($__internal_d73f824f248c2471770754600c61725f8d81745e2b3aeb232070816ba017f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d73f824f248c2471770754600c61725f8d81745e2b3aeb232070816ba017f638->leave($__internal_d73f824f248c2471770754600c61725f8d81745e2b3aeb232070816ba017f638_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b12db70808ace914ef59cbdd9af7fa94d5b52cb836f735a73793e3ffba5157e3 = $this->env->getExtension("native_profiler");
        $__internal_b12db70808ace914ef59cbdd9af7fa94d5b52cb836f735a73793e3ffba5157e3->enter($__internal_b12db70808ace914ef59cbdd9af7fa94d5b52cb836f735a73793e3ffba5157e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b12db70808ace914ef59cbdd9af7fa94d5b52cb836f735a73793e3ffba5157e3->leave($__internal_b12db70808ace914ef59cbdd9af7fa94d5b52cb836f735a73793e3ffba5157e3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6be259d2ff4abdeece89657533a3d18a4b02e57aa9ff8eb6a008034d64080331 = $this->env->getExtension("native_profiler");
        $__internal_6be259d2ff4abdeece89657533a3d18a4b02e57aa9ff8eb6a008034d64080331->enter($__internal_6be259d2ff4abdeece89657533a3d18a4b02e57aa9ff8eb6a008034d64080331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6be259d2ff4abdeece89657533a3d18a4b02e57aa9ff8eb6a008034d64080331->leave($__internal_6be259d2ff4abdeece89657533a3d18a4b02e57aa9ff8eb6a008034d64080331_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c1657e35d95ae0c53070f8180ac583f9dd364ff1bbbbdbcc72fa0e5dcd26c97b = $this->env->getExtension("native_profiler");
        $__internal_c1657e35d95ae0c53070f8180ac583f9dd364ff1bbbbdbcc72fa0e5dcd26c97b->enter($__internal_c1657e35d95ae0c53070f8180ac583f9dd364ff1bbbbdbcc72fa0e5dcd26c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c1657e35d95ae0c53070f8180ac583f9dd364ff1bbbbdbcc72fa0e5dcd26c97b->leave($__internal_c1657e35d95ae0c53070f8180ac583f9dd364ff1bbbbdbcc72fa0e5dcd26c97b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
