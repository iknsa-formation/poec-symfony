<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cec25218a90c757e90cb1e925e38cd3cdeac4f0349b3be8f4e57ab065b3898ee extends Twig_Template
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
        $__internal_91aadfe62ee63e0a9076435cc630581de4717c4dd12147e574682ffdf725b237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aadfe62ee63e0a9076435cc630581de4717c4dd12147e574682ffdf725b237->enter($__internal_91aadfe62ee63e0a9076435cc630581de4717c4dd12147e574682ffdf725b237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_91aadfe62ee63e0a9076435cc630581de4717c4dd12147e574682ffdf725b237->leave($__internal_91aadfe62ee63e0a9076435cc630581de4717c4dd12147e574682ffdf725b237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
