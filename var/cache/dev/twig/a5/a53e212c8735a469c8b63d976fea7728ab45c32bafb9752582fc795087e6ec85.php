<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_16cb5165905432fd05b002c96d8a79e576f96c0aad90336adc0fbbdcd65186d4 extends Twig_Template
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
        $__internal_d7befcde4cfe6fd10401022c62379edd6b44f1387281baafabeecf5098b82cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7befcde4cfe6fd10401022c62379edd6b44f1387281baafabeecf5098b82cd2->enter($__internal_d7befcde4cfe6fd10401022c62379edd6b44f1387281baafabeecf5098b82cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d7befcde4cfe6fd10401022c62379edd6b44f1387281baafabeecf5098b82cd2->leave($__internal_d7befcde4cfe6fd10401022c62379edd6b44f1387281baafabeecf5098b82cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
