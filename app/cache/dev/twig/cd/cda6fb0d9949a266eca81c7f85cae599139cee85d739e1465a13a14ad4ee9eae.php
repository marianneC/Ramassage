<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_565df76755ac4782cd8b2e6bffbb89c4746b920f96895fc3c8833fbbdf11fea2 extends Twig_Template
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
        $__internal_d1be2c90e6973bb1b2473fbf39261e6b2b4fd70a5a32057f05416c79162f3a1e = $this->env->getExtension("native_profiler");
        $__internal_d1be2c90e6973bb1b2473fbf39261e6b2b4fd70a5a32057f05416c79162f3a1e->enter($__internal_d1be2c90e6973bb1b2473fbf39261e6b2b4fd70a5a32057f05416c79162f3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_d1be2c90e6973bb1b2473fbf39261e6b2b4fd70a5a32057f05416c79162f3a1e->leave($__internal_d1be2c90e6973bb1b2473fbf39261e6b2b4fd70a5a32057f05416c79162f3a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php $method = strtoupper($method) ?>*/
/* <?php $form_method = $method === 'GET' || $method === 'POST' ? $method : 'POST' ?>*/
/* <form name="<?php echo $name ?>" method="<?php echo strtolower($form_method) ?>"<?php if ($action !== ''): ?> action="<?php echo $action ?>"<?php endif ?><?php foreach ($attr as $k => $v) { printf(' %s="%s"', $view->escape($k), $view->escape($v)); } ?><?php if ($multipart): ?> enctype="multipart/form-data"<?php endif ?>>*/
/* <?php if ($form_method !== $method): ?>*/
/*     <input type="hidden" name="_method" value="<?php echo $method ?>" />*/
/* <?php endif ?>*/
/* */
