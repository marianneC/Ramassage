<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09c0c7ad70877e3d47a6dada038b32b423e1990a1ab9c4c95bd68f2d87f609ef extends Twig_Template
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
        $__internal_4c573f9a59dc67bcc809e05c43a93aa5264ca2a82d891b703e77e698f6ff2ebf = $this->env->getExtension("native_profiler");
        $__internal_4c573f9a59dc67bcc809e05c43a93aa5264ca2a82d891b703e77e698f6ff2ebf->enter($__internal_4c573f9a59dc67bcc809e05c43a93aa5264ca2a82d891b703e77e698f6ff2ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4c573f9a59dc67bcc809e05c43a93aa5264ca2a82d891b703e77e698f6ff2ebf->leave($__internal_4c573f9a59dc67bcc809e05c43a93aa5264ca2a82d891b703e77e698f6ff2ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
