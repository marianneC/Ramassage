<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_04b4640e32738f780d3e899808a4fedf3df9dc3b50a8552154b335b7ebbf2323 extends Twig_Template
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
        $__internal_63c0034690274fd5f31d45516142011eaa66cae7f0453bcf4745fb3f15284113 = $this->env->getExtension("native_profiler");
        $__internal_63c0034690274fd5f31d45516142011eaa66cae7f0453bcf4745fb3f15284113->enter($__internal_63c0034690274fd5f31d45516142011eaa66cae7f0453bcf4745fb3f15284113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_63c0034690274fd5f31d45516142011eaa66cae7f0453bcf4745fb3f15284113->leave($__internal_63c0034690274fd5f31d45516142011eaa66cae7f0453bcf4745fb3f15284113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
