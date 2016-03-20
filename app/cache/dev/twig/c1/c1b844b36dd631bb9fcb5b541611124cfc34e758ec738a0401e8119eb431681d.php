<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_299b8ac7f652044aaee8ed896a3866ae5a4619d11bb7963b264217931f4b94fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eea420548395861c5343488104437a469c155672ae34ffa6fb77546d224e55c = $this->env->getExtension("native_profiler");
        $__internal_3eea420548395861c5343488104437a469c155672ae34ffa6fb77546d224e55c->enter($__internal_3eea420548395861c5343488104437a469c155672ae34ffa6fb77546d224e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3eea420548395861c5343488104437a469c155672ae34ffa6fb77546d224e55c->leave($__internal_3eea420548395861c5343488104437a469c155672ae34ffa6fb77546d224e55c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
