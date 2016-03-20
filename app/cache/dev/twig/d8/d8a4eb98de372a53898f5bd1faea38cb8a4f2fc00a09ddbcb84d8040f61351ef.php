<?php

/* ::base.html.twig */
class __TwigTemplate_86f9d0fded3ad6e3e3880b3d2629e02f3b5509646daf3f1c24fce2139a05fc64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_880f363207c3192360477e06e8798c0df1dfdc9e56119b967e822f84e9718174 = $this->env->getExtension("native_profiler");
        $__internal_880f363207c3192360477e06e8798c0df1dfdc9e56119b967e822f84e9718174->enter($__internal_880f363207c3192360477e06e8798c0df1dfdc9e56119b967e822f84e9718174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_880f363207c3192360477e06e8798c0df1dfdc9e56119b967e822f84e9718174->leave($__internal_880f363207c3192360477e06e8798c0df1dfdc9e56119b967e822f84e9718174_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee829cecc3e2e47ae914ef3c1a0645d7bf9014f66881484080fc464fad3edaff = $this->env->getExtension("native_profiler");
        $__internal_ee829cecc3e2e47ae914ef3c1a0645d7bf9014f66881484080fc464fad3edaff->enter($__internal_ee829cecc3e2e47ae914ef3c1a0645d7bf9014f66881484080fc464fad3edaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee829cecc3e2e47ae914ef3c1a0645d7bf9014f66881484080fc464fad3edaff->leave($__internal_ee829cecc3e2e47ae914ef3c1a0645d7bf9014f66881484080fc464fad3edaff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f842197036ddffbb6d0f5b2666d01c34d6bfe5d9850550add96ab7d7e3a2d412 = $this->env->getExtension("native_profiler");
        $__internal_f842197036ddffbb6d0f5b2666d01c34d6bfe5d9850550add96ab7d7e3a2d412->enter($__internal_f842197036ddffbb6d0f5b2666d01c34d6bfe5d9850550add96ab7d7e3a2d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f842197036ddffbb6d0f5b2666d01c34d6bfe5d9850550add96ab7d7e3a2d412->leave($__internal_f842197036ddffbb6d0f5b2666d01c34d6bfe5d9850550add96ab7d7e3a2d412_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c68a8e7ddac1422abc5e84a20ad7274a63e16c4ac49d8e3044ed02d8690bb0d8 = $this->env->getExtension("native_profiler");
        $__internal_c68a8e7ddac1422abc5e84a20ad7274a63e16c4ac49d8e3044ed02d8690bb0d8->enter($__internal_c68a8e7ddac1422abc5e84a20ad7274a63e16c4ac49d8e3044ed02d8690bb0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c68a8e7ddac1422abc5e84a20ad7274a63e16c4ac49d8e3044ed02d8690bb0d8->leave($__internal_c68a8e7ddac1422abc5e84a20ad7274a63e16c4ac49d8e3044ed02d8690bb0d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bdebd9d96b07a06afc88c2e97bf019b4290c0c5d1574685bc85b54a511a9359 = $this->env->getExtension("native_profiler");
        $__internal_0bdebd9d96b07a06afc88c2e97bf019b4290c0c5d1574685bc85b54a511a9359->enter($__internal_0bdebd9d96b07a06afc88c2e97bf019b4290c0c5d1574685bc85b54a511a9359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0bdebd9d96b07a06afc88c2e97bf019b4290c0c5d1574685bc85b54a511a9359->leave($__internal_0bdebd9d96b07a06afc88c2e97bf019b4290c0c5d1574685bc85b54a511a9359_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
