<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6efc4d143c0d801fe0da54b7cc4ed233c3badeb986682c1a235bd419102d42d7 extends Twig_Template
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
        $__internal_7772743d5d2005bf5007038c512a86b6f0ef5cbf309d9d34b862bce1f98e47cc = $this->env->getExtension("native_profiler");
        $__internal_7772743d5d2005bf5007038c512a86b6f0ef5cbf309d9d34b862bce1f98e47cc->enter($__internal_7772743d5d2005bf5007038c512a86b6f0ef5cbf309d9d34b862bce1f98e47cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7772743d5d2005bf5007038c512a86b6f0ef5cbf309d9d34b862bce1f98e47cc->leave($__internal_7772743d5d2005bf5007038c512a86b6f0ef5cbf309d9d34b862bce1f98e47cc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bc0f4818a84bb45da3f6d453090fadc99bf3ac02d0d9ee1e5b890b2e4c55cc11 = $this->env->getExtension("native_profiler");
        $__internal_bc0f4818a84bb45da3f6d453090fadc99bf3ac02d0d9ee1e5b890b2e4c55cc11->enter($__internal_bc0f4818a84bb45da3f6d453090fadc99bf3ac02d0d9ee1e5b890b2e4c55cc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bc0f4818a84bb45da3f6d453090fadc99bf3ac02d0d9ee1e5b890b2e4c55cc11->leave($__internal_bc0f4818a84bb45da3f6d453090fadc99bf3ac02d0d9ee1e5b890b2e4c55cc11_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_670cfb526cee5aa6d3871fe71d10040eed96c0ed2f880f0f851a770d3b950fff = $this->env->getExtension("native_profiler");
        $__internal_670cfb526cee5aa6d3871fe71d10040eed96c0ed2f880f0f851a770d3b950fff->enter($__internal_670cfb526cee5aa6d3871fe71d10040eed96c0ed2f880f0f851a770d3b950fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_670cfb526cee5aa6d3871fe71d10040eed96c0ed2f880f0f851a770d3b950fff->leave($__internal_670cfb526cee5aa6d3871fe71d10040eed96c0ed2f880f0f851a770d3b950fff_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7af927936f86443cdbac1ef9cd5bc1a0428019c407ee04719dc67396ea55241c = $this->env->getExtension("native_profiler");
        $__internal_7af927936f86443cdbac1ef9cd5bc1a0428019c407ee04719dc67396ea55241c->enter($__internal_7af927936f86443cdbac1ef9cd5bc1a0428019c407ee04719dc67396ea55241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7af927936f86443cdbac1ef9cd5bc1a0428019c407ee04719dc67396ea55241c->leave($__internal_7af927936f86443cdbac1ef9cd5bc1a0428019c407ee04719dc67396ea55241c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
