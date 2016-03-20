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
        $__internal_d8465d970419f21375686e5fea0ff3bf86b3f6f38ca026357ceb1ba289f1abc5 = $this->env->getExtension("native_profiler");
        $__internal_d8465d970419f21375686e5fea0ff3bf86b3f6f38ca026357ceb1ba289f1abc5->enter($__internal_d8465d970419f21375686e5fea0ff3bf86b3f6f38ca026357ceb1ba289f1abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8465d970419f21375686e5fea0ff3bf86b3f6f38ca026357ceb1ba289f1abc5->leave($__internal_d8465d970419f21375686e5fea0ff3bf86b3f6f38ca026357ceb1ba289f1abc5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4baedd3095f06b7bff5db4a0e6c64b74475bb6ca8215b19b9cc2d13c2e4484b8 = $this->env->getExtension("native_profiler");
        $__internal_4baedd3095f06b7bff5db4a0e6c64b74475bb6ca8215b19b9cc2d13c2e4484b8->enter($__internal_4baedd3095f06b7bff5db4a0e6c64b74475bb6ca8215b19b9cc2d13c2e4484b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4baedd3095f06b7bff5db4a0e6c64b74475bb6ca8215b19b9cc2d13c2e4484b8->leave($__internal_4baedd3095f06b7bff5db4a0e6c64b74475bb6ca8215b19b9cc2d13c2e4484b8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8bb642059511be561b1e65c00c82e743b2c401e52994e4ee0f00b28870f6fa9d = $this->env->getExtension("native_profiler");
        $__internal_8bb642059511be561b1e65c00c82e743b2c401e52994e4ee0f00b28870f6fa9d->enter($__internal_8bb642059511be561b1e65c00c82e743b2c401e52994e4ee0f00b28870f6fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bb642059511be561b1e65c00c82e743b2c401e52994e4ee0f00b28870f6fa9d->leave($__internal_8bb642059511be561b1e65c00c82e743b2c401e52994e4ee0f00b28870f6fa9d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a7a3927286d43560703bc8efdf0a300a1cf0fe422534f7f2ded8e2813c19d6be = $this->env->getExtension("native_profiler");
        $__internal_a7a3927286d43560703bc8efdf0a300a1cf0fe422534f7f2ded8e2813c19d6be->enter($__internal_a7a3927286d43560703bc8efdf0a300a1cf0fe422534f7f2ded8e2813c19d6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a7a3927286d43560703bc8efdf0a300a1cf0fe422534f7f2ded8e2813c19d6be->leave($__internal_a7a3927286d43560703bc8efdf0a300a1cf0fe422534f7f2ded8e2813c19d6be_prof);

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
